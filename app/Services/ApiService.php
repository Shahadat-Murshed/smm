<?php

namespace App\Services;


use App\Models\AdvOrder;
use App\Models\AdvOrderDrip;
use App\Models\ApiProvider;
use Illuminate\Support\Facades\Http;

class ApiService
{
    public function sendOrderToProvider(AdvOrderDrip $order)
    {
        $apiProvider = ApiProvider::find($order->api_provider_id);
        if(blank($apiProvider) && $apiProvider->staus !== false) return;
        $postData = [
            'key' => $apiProvider->api_key,
            'action' => 'add',
            'service' => $order->service_id,
            'link' => $order->link,
            'quantity' => $order->drip_quantity,
        ];
        if($order->runs !== 0 && $order->interval !== 0){
            $postData = array_merge($postData, [
                'runs' => $order->runs,
                'interval'=> $order->interval,
            ]);
        }
        // dd('Dont send order request in dev mode',$postData);
        $response = Http::post($apiProvider->link, $postData);
        if($response->successful()){
            $data = $response->json();
            if(data_get($data,'order')){
                $order->api_order_id = $data['order'];
                $order->save();
            }
            /**
             * Need to implement partial scenerio where
             * order might get refunded due to admins balance
             */
        }
        dd($response);
    }
}
