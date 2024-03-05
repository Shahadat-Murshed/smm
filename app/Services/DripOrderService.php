<?php

namespace App\Services;

use App\Models\AdvOrderDrip;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class DripOrderService
{
    private $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function makeApiCalls()
    {
        try{
            $todaysPending = AdvOrderDrip::where('start_date', Carbon::now()->toDateString())
            ->where('api_order_id', null)
            ->get();
            foreach ($todaysPending as $pendingOrder) {
                $this->apiService->sendOrderToProvider($pendingOrder);
            }
        }catch(\Exception $e){
            Log::error('ORDER_SCHEDULER_ERROR'.$e->getMessage());
        }
    }
}
