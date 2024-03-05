<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedService extends Model
{
    use HasFactory;

    public function advanced_providers()
    {
        return $this->hasMany(AdvancedServiceProvider::class, 'advanced_service_id', 'id');
    }

    public function getApiProviders()
    {
        return \App\Models\ApiProvider::whereIn('id', $this->advanced_providers->pluck('api_provider_id'))->get();
    }

    public function getProvidersNames()
    {
        return \App\Models\ApiProvider::whereIn('id', $this->advanced_providers->pluck('api_provider_id'))->get()->pluck('api_name')->implode(',  ');
    }

    public function getLinkRegexes()
    {
        return $this->advanced_providers->map(function ($provider) {
            return $provider->link_validator->regex;
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
