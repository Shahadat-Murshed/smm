<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedServiceProvider extends Model
{
    use HasFactory;

    protected $table = 'advanced_services_providers';

    public function provider()
    {
        return $this->belongsTo(ApiProvider::class, 'api_provider_id');
    }

    public function link_validator()
    {
        return $this->belongsTo(LinkValidator::class,'link_validators_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class,'api_service_id','api_service_id');
    }
}
