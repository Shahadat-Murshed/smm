<?php

namespace App\Http\Controllers\Api;

use App\DTO\Payment;
use App\Enums\ProductTypes;
use App\Enums\UserRoles;
use App\Http\Controllers\Controller;
use App\Interfaces\PaymentGateway;
use App\Models\AdvancedService;
use App\Models\Package;
use App\Models\ReferralHash;
use App\Models\User;
use App\Services\OrderService;
use App\Services\ReferralService;
use App\Services\TransactionService;
use Exception;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    private OrderService $orderService;
    private PaymentGateway $paymentGateway;
    private TransactionService $transactionService;
    private ReferralService $referralService;

    private const SERVICE = 'service';
    private const PACKAGE = 'package';

    private const SERVICE_TYPE = [
        self::SERVICE,
        self::PACKAGE
    ];

    public function __construct(
        OrderService       $orderService,
        PaymentGateway     $paymentGateway,
        TransactionService $transactionService,
        ReferralService    $referralService
    ) {
        $this->orderService = $orderService;
        $this->paymentGateway = $paymentGateway;
        $this->transactionService = $transactionService;
        $this->referralService = $referralService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'id' => 'required',
        ]);

        if (in_array($request->type, self::SERVICE_TYPE)) {
            if ($request->type == self::SERVICE) return $this->handleService($request);
            if ($request->type == self::PACKAGE) return $this->handlePackage($request);
        }
        return response()->json(['message' => 'Invalid Request'], 404);
    }

    private function handleService(Request $request): JsonResponse
    {
        $service = AdvancedService::find($request->id);
        if (!$service) return response()->json(['message' => 'Service not found'], 404);
        $response['data']['product'] = [
            'type' => 'service',
            'title' => $service->service_title ?? 'N/A',
            'description' => $service->description ?? 'N/A',
            'image' => $service->category->image ?? 'N/A',
            'price' => $service->price ?? 0,
            'price_monthly' => $service->price_monthly ?? 0,
            'price_annually' => $service->price_annualy ?? 0,
            'has_discount' => (bool)$service->has_discount ?? false,
            'discount' => $service->discount ?? 0,
            'discount_threshold' => $service->discount_threshold ?? 0,
            'discount_ambassador' => $service->discount_ambassador ?? 0,
            'discount_affiliate' => $service->discount_affiliate ?? 0,
            'selling_points' => [
                $service->selling_point_1 ?? 'N/A',
                $service->selling_point_2 ?? 'N/A',
                $service->selling_point_3 ?? 'N/A',
            ]
        ];

        if ($service->advanced_providers->count() > 0) {
            $response['data']['services'] = $this->mapProviders($service, $service->advanced_providers);
        }
        return response()->json($response);
    }


    private function handlePackage(Request $request): JsonResponse
    {
        $package = Package::find($request->id);
        if (!$package) {
            return response()->json(['message' => 'Package not found'], 404);
        }

        $response['data']['product'] = [
            'type' => 'package',
            'title' => $package->package_name ?? 'N/A',
            'description' => $package->description ?? 'N/A',
            'image' => $package->category->image ?? 'N/A',
            'price' => (float)$package->price ?? 0,
            'price_monthly' => (float)$package->price_monthly ?? 0,
            'price_annually' => (float)$package->price_annually ?? 0,
            'has_discount' => (bool)$package->has_discount ?? false,
            'discount' => $package->discount ?? 0,
            'discount_threshold' => (float)$package->discount_threshold ?? 0,
            'discount_ambassador' => (float)$package->discount_ambassador ?? 0,
            'discount_affiliate' => (float)$package->discount_affiliate ?? 0,
            'selling_points' => [
                $package->selling_point_1 ?? 'N/A',
                $package->selling_point_2 ?? 'N/A',
                $package->selling_point_3 ?? 'N/A',
            ]
        ];

        if ($package->advanced_services->count() > 0) {
            $services = [];
            foreach ($package->advanced_services as $packageService) {
                $advanced_service = $packageService->service;
                $advanced_provider = $packageService->provider;
                $data['service_id'] = $advanced_provider->id;
                $data['title'] = $advanced_provider->title ?? 'N/A';
                $data['max_amount'] = (int)$packageService->amount;
                $data['min_amount'] = (int)$packageService->amount;
                $data['max_url'] = $advanced_provider->max_urls;
                $data['link_validation'] = $advanced_provider->link_validator->regex ?? 'N/A';
                $services[] = $data;
            }
        }

        $response['data']['services'] = $services ?? [];

        return response()->json($response);
    }

    private function mapProviders($service, $advanced_providers): array
    {
        $services = [];
        foreach ($advanced_providers as $adv_provider) {
            $data['service_id'] = $adv_provider->id;
            $data['title'] = $adv_provider->title ?? 'N/A';
            $data['max_amount'] = $service->max_amount;
            $data['min_amount'] = $service->min_amount;
            $data['max_url'] = $adv_provider->max_urls;
            $data['max_drip_days'] = $adv_provider->drip_in_days;
            $data['link_validation'] = $adv_provider->link_validator->regex ?? 'N/A';
            $data['price_per_action'] = (float)$adv_provider->price_per_action;
            $services[] = $data;
        }
        return $services;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        if (!in_array($request->product_type, [self::SERVICE, self::PACKAGE])) {
            return response()->json(['message' => 'Invalid Request'], 404);
        }

        $validator = Validator::make($request->all(), [
            'product_type' => 'required',
            'promo_code' => 'nullable',
            'product_id' => 'required',
            'links' => 'required_if:product_type,service|array',
            'profile_link' => 'required_if:product_type,package|string',
            'email' => 'required',
            'subscription_type' => 'required_if:product_type,package|nullable',
            'payment' => 'required|array',
            'payment.expiry_date' => 'required',
            'payment.card_number' => 'required',
            'payment.name' => 'required|array',
            'payment.name.first_name' => 'required',
            'payment.name.last_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Invalid Request'], 404);
        }

        try {
            DB::beginTransaction();

            $product = $request->product_type === ProductTypes::PACKAGE ? Package::find($request->product_id) : AdvancedService::find($request->product_id);

            if (!$product) {
                return response()->json(['message' => 'Product not found'], 404);
            }

            $referrer = User::where('promo_code', $request->promo_code)->where('is_promo_active', 1)->first();

            $user = User::where('email', $request->email)->first();

            if (blank($user)) {
                $user = User::create([
                    'email' => $request->email,
                    'username' => Str::slug($request->username),
                    'password' => Hash::make(Str::random(6)),
                    'role' => 'User',
                ]);
            }

            $order = $this->orderService->createOrder([
                'user_id' => $user->id,
                'product' => $product,
                'links' => $request->links,
                'profile_link' => $request->profile_link,
                'product_type' => $request->product_type,
                'product_id' => $request->product_id,
                'subscription_type' => $request->subscription_type,
                'has_discount' => boolval($referrer),
                'discount' => $referrer ? $this->referralService->getReferralAmount($referrer, $product) : 0
            ]);

            if ($order->product_type === ProductTypes::SERVICE) {
                $this->orderService->addToDripsScheduler($order);
            }

            if ($order->product_type === ProductTypes::PACKAGE) {
                $this->orderService->addPackageToTrack($order, $request->profile_link);
            }

            $profit = $this->orderService->calculateProfit($order, $request->product_type);

            if ($referrer && $referrer->role === UserRoles::AFFILIATE) {
                $this->referralService->addBonusToAffiliate($referrer, $profit);
                if ($referrer->referral) {
                    $this->referralService->addBonusToAmbassador($referrer->referral, $referrer->base_percentage, $profit);
                }
            }
            if ($referrer && $referrer->role ===  UserRoles::AMBASSADOR) {
                $this->referralService->addBonusToAmbassador($referrer, $referrer->base_percentage, $profit, true);
            }

            DB::commit();
            return response()->json([
                'status' => 'success',
            ]);
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . $exception->getFile() . $exception->getLine());
            return response()->json(['message' => $exception->getMessage()], 404);
        }
    }
}
