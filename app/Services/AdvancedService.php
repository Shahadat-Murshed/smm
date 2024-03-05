<?php

namespace App\Services;

use App\Models\AdvancedService as AdvancedServiceModel;
use App\Models\AdvancedServiceProvider;
use App\Models\Service;

class AdvancedService {

    public function createOrUpdateAdvancedService($data, $update = false){
        $service = !$update ? new AdvancedServiceModel() : AdvancedServiceModel::find(data_get($data,'service_id'));
        if(blank($service)) throw new \Exception('No service found');
        $service->service_title = data_get($data,'service_title');
        $service->category_id = data_get($data,'category_id');
        $service->min_amount = data_get($data,'min_amount',1);
        $service->max_amount = data_get($data,'max_amount',1);
        $service->service_status = data_get($data,'service_status',true);
        $service->is_subscribable = data_get($data,'subs_status',true);
        $service->drip_timer_starts = data_get($data,'drip_timer_starts');
        $service->drip_timer_ends = data_get($data,'drip_timer_ends');
        $service->discount_affiliate = data_get($data,'discount_affiliate');
        $service->discount_ambassador = data_get($data,'discount_ambassador');
        $service->has_discount = data_get($data,'has_discount',false);
        $service->discount_threshold = data_get($data,'discount_threshold');
        $service->save();
        return $service;
    }

    public function addProviderToAService($service_id, $data)
    {
        $id = data_get($data, 'id');
        $provider = $id ? AdvancedServiceProvider::find($id) : new AdvancedServiceProvider();
        $provider->advanced_service_id = $service_id;
        $provider->api_provider_id =  data_get($data,'api_provider_id');
        $provider->api_service_id = data_get($data,'api_service_id');
        $provider->link_validators_id = data_get($data,'link_validators_id');
        $provider->drip_feed = true;
        $provider->drip_in_days = data_get($data,'drip_in_days');
        $provider->price_per_action = data_get($data,'price_per_action');
        $provider->api_provider_price = Service::where('api_service_id', $provider['api_service_id'])->first()?->api_provider_price;
        $provider->has_comments = data_get($data,'has_comment');
        $provider->max_urls = data_get($data,'max_urls');
        $provider->title = data_get($data,'title');
        $provider->save();
        return $provider;
    }

    public function getDetailsForOrder($data) : string
    {
        $data['service'] = AdvancedServiceModel::find(data_get($data,'service'));
        $data['providers'] = $data['service']->advanced_providers;
        $data['api_providers'] = $data['service']->getApiProviders();
        return json_encode($data);
    }
}
