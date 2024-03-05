<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Enums\ProductTypes;
use App\Enums\SubsctiptionTypes;
use App\Models\AdvancedServiceProvider;
use App\Models\AdvOrder;
use App\Models\AdvOrderDrip;
use App\Models\Package;
use App\Models\ProfileTracker;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OrderService
{

    private $advancedService;

    public function __construct(AdvancedService $advService)
    {
        $this->advancedService = $advService;
    }

    /**
     * @throws Exception
     */
    public function createOrder(array $data): AdvOrder
    {
        $order = new AdvOrder();
        $order->user_id = data_get($data, 'user_id');
        $order->product_id = data_get($data, 'product_id');
        $order->product_type = data_get($data, 'product_type');
        $order->service_details = $this->getOrderDetails($data['product'], $data);
        $order->total_quantity = $data['product_type'] === ProductTypes::SERVICE ? $this->calculateQuantity($data['links']) : $data['product']->advanced_services->sum('amount');
        $order->price = $data['product_type'] === ProductTypes::SERVICE ?
            $this->calculatePrice($data['links']) - data_get($data, 'discount')
            : $this->getPackagePrice($data['subscription_type'], $data['product']) - data_get($data, 'discount');
        $order->has_discount = data_get($data, 'has_discount');
        $order->discount = data_get($data, 'discount');
        $order->status = OrderStatus::PENDING;
        $order->subscription_type = data_get($data, 'subscription_type');
        $order->status_description = null;
        $order->reason = null;
        $order->current_counter = 0;
        $order->remains = $order->total_quantity;
        $order->added_on = Carbon::now()->timestamp;
        $order->save();
        return $order;
    }

    public function getPackagePrice($subscriptionType, Package $package)
    {
        if ($subscriptionType === SubsctiptionTypes::ONE_TIME) {
            return $package->price;
        } elseif ($subscriptionType === SubsctiptionTypes::MONTHLY) {
            return $package->price_monthly;
        } elseif ($subscriptionType === SubsctiptionTypes::ANNUALLY) {
            return $package->price_annually;
        }
        return 0;
    }

    public function getOrderDetails($product, $additionals)
    {
        if (get_class($product) === Package::class) {
            $data['service'] = $product;
            $data['providers'] = $product->advanced_services;
            $data['api_providers'] = $product->advanced_services->map(function ($service) {
                return $service->service->getApiProviders();
            });
            return json_encode($data);
        } elseif (get_class($product) === \App\Models\AdvancedService::class) {
            $data['service'] = $product;
            $data['providers'] = $product->advanced_providers;
            $data['api_providers'] = $product->getApiProviders();
            $data['links'] = data_get($additionals, 'links');
            return json_encode($data);
        }
    }

    public function addToDripsScheduler(AdvOrder $order): void
    {
        $orderDetails = json_decode($order->service_details);
        foreach ($orderDetails->links as $config) {
            $serviceProvider = AdvancedServiceProvider::findOrFail($config->service_id);
            foreach ($config->drip_days as $day => $quantity) {
                $drip = new AdvOrderDrip;
                $drip->start_date = Carbon::now()->addDay($day)->toDateString();
                $drip->order_id = $order->id;
                $drip->api_order_id = null;
                $drip->api_provider_id = $serviceProvider->api_provider_id;
                $drip->api_service_id = $serviceProvider->api_service_id;
                $drip->link = $config->link;
                $drip->remaining = $quantity;
                $drip->completed = 0;
                $drip->drip_quantity = $serviceProvider->service->drip_feed ? intval($quantity / 24) : $quantity;
                $drip->runs = $serviceProvider->service->drip_feed ? 24 : 0;
                $drip->interval = $serviceProvider->service->drip_feed ? 60 : 0;
                $drip->save();
            }
        }
    }

    private function calculateQuantity(array $links): int
    {
        $total = 0;
        foreach ($links as $link) {
            $total += $link['amount'];
        }
        return $total;
    }

    public function calculatePrice(array $links): float
    {
        $total = 0;
        foreach ($links as $link) {
            $total += $link['amount'] * $link['price_per_action'];
        }
        return $total;
    }

    public function calculateProfit(AdvOrder $order, string $type)
    {
        if ($type === ProductTypes::SERVICE) return $this->calculateProfitForAdvService($order);
        if ($type === ProductTypes::PACKAGE) return $this->calculateProfitForPackage($order);
    }

    public function addPackageToTrack(AdvOrder $order, string $profile_link): void
    {
        $tracker = new ProfileTracker();
        $tracker->profile_link = $profile_link;
        $tracker->order_id = $order->id;
        $tracker->status = 'running';
        $tracker->save();
        try {
            $trackerResponse = Http::post(env('TRACKER_URL'), [
                'profile_link' => $profile_link,
                'order_id' => $order->id
            ]);
        } catch (Exception $exception) {
            Log::error('Unable to send to tracker', [
                'tracker' => $tracker
            ]);
        }
    }

    public function calculateProfitForPackage(AdvOrder $order)
    {
        $package = Package::find($order->product_id);
        if (blank($package)) return 0;
        if ($order->subscription_type === SubsctiptionTypes::ONE_TIME) {
            return $package->profit;
        }
        if ($order->subscription_type === SubsctiptionTypes::MONTHLY) {
            return $package->profit_monthly;
        }
        if ($order->subscription_type === SubsctiptionTypes::ANNUALLY) {
            return $package->profit_annuallay;
        }
    }

    public function calculateProfitForAdvService(AdvOrder $order): float
    {
        $total = 0;
        $orderDetails = json_decode($order->service_details);
        foreach ($orderDetails->links as $link) {
            $total += $link->amount * $this->getApiProviderPrice($orderDetails->providers, $link->service_id);
        }
        return $order->price - $total;
    }

    public function getApiProviderPrice($providers, string $searchId)
    {
        foreach ($providers as $provider) {
            if ($searchId == $provider->id) {
                return (float)$provider->api_provider_price;
            }
        }
    }
}
