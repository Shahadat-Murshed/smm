<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Traits\Notify;
use App\Models\AdvancedService;
use App\Models\AdvancedServiceProvider;
use App\Models\AdvOrder;
use App\Models\Category;
use App\Services\OrderService;
use App\Services\TransactionService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdvancedOrderController extends Controller
{
    use Notify;

    private OrderService $orderService;

    private TransactionService $tnxService;

    public function __construct(
        OrderService       $orderService,
        TransactionService $tnxService
    ) {
        $this->orderService = $orderService;
        $this->tnxService = $tnxService;
    }

    public function index()
    {
        $orders = AdvOrder::with(['users', 'category'])->latest()->where('user_id', Auth::id())->paginate(config('basic.paginate'));
        return view('user.pages.order.show_adv', compact('orders'));
    }

    public function create()
    {
        $data['categories'] = Category::with('service')
            ->whereHas(
                'advanced_service',
                function ($query) {
                    $query->where('service_status', 1);
                }
            )
            ->where('status', 1)
            ->get();

        return view('user.pages.order.adv-order', $data);
        // return response()->json($data);
    }

    public function store(Request $request)
    {
        $service = AdvancedService::find($request->service);

        if (blank($service)) {
            throw ValidationException::withMessages([
                'message' => 'Invalid data'
            ]);
        }

        $validation = Validator::make($request->all(), AdvOrder::VALIDATION_RULES, AdvOrder::VALIDATION_MESSAGE);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors(), 'message' => $validation->errors()->first()], 422);
        }

        $user = auth()->user();
        $data = $validation->validated();

        if ($this->orderService->calculatePrice(data_get($data, 'configs')) > $user->balance) {
            return response()->json([
                'message' => 'Insufficient funds',
            ], 422);
        }
        $basic = (object)config('basic');
        DB::beginTransaction();
        try {
            $order = $this->orderService->createOrder($data);
            $this->orderService->addToDripsScheduler($order);
            $transaction = $this->tnxService->createTransaction($order);
            $user->balance -= $order->price;
            $user->save();
            $this->adminPushNotification('ORDER_CREATE', [
                'username' => $user->username,
                'price' => $order->price,
                'currency' => $basic->currency
            ], [
                "link" => route('admin.order.edit', $order->id),
                "icon" => "fas fa-cart-plus text-white"
            ]);

            $this->sendMailSms($user, 'ORDER_CONFIRM', [
                'order_id' => $order->id,
                'order_at' => $order->created_at,
                'service' => optional($order->service)->service_title,
                'status' => $order->status,
                'paid_amount' => $order->price,
                'remaining_balance' => $user->balance,
                'currency' => $basic->currency,
                'transaction' => $transaction->trx_id,
            ]);
            DB::commit();
            return response()->json([
                'message' => 'Order created successfully',
                'redirect' => [
                    'status' => true,
                    'url' => route('user.order.success')
                ]
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Order process failed', [
                'context' => $order,
                'info' => $e->getMessage(),
                'line' => $e->getLine()
            ]);
            return response()->json([
                'message' => 'Unable to create order'
            ], 500);
        }
    }

    public function userservice(Request $request)
    {
        $serviceId = $request->ser_id;
        return AdvancedService::with('advanced_providers')
            ->find($serviceId);
    }


    public function getProviderDetails(Request $request)
    {
        $providers = AdvancedService::with('advanced_providers')
            ->findOrFail($request->service_id)
            ?->advanced_providers;
        return view('partials.order-providers', [
            'providers' => $providers
        ])->render();
    }

    public function show()
    {
        return view('user.pages.order.order-complete');
    }

    public function getProviderView(Request $request)
    {
        $data['provider'] = AdvancedServiceProvider::findOrFail($request->provider_id);
        $data['providerIndex'] = $request->provider_index;
        return view('partials.order-provider-links', $data)->render();
    }
}
