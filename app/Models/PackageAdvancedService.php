<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageAdvancedService extends Model
{
    protected $table = 'packages_advanced_service';
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(AdvancedService::class,'adv_service_id');
    }

    public function provider()
    {
        return $this->belongsTo(AdvancedServiceProvider::class,'adv_service_provider_id');
    }
}
