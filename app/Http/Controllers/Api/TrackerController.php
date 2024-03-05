<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdvOrder;
use App\Services\OrderService;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    private OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function recieve(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'post' => 'required',
            'comments' => 'required'
        ]);
        $order = AdvOrder::find($request->order_id);
        if(blank($order)) return;
        $this->orderService->addToDripsScheduler($order);
    }
}
