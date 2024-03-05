<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;

    public function advanced_services() : HasMany
    {
        return $this->hasMany(PackageAdvancedService::class,'packages_id');
    }

    public function total_links()
    {
        $sum = 0;
        $pg = $this->advanced_services;
        foreach ($pg as $p){
            $sum += $p->service->advanced_providers->sum('max_urls');
        }
        return $sum;
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
