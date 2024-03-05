<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvOrder extends Model
{
    use HasFactory;

    const VALIDATION_RULES = [
        'category' => 'required|integer',
        'service' => 'required|integer',
        'configs' => 'required|array',
        'configs.*' => 'array',
        'configs.*.advanced_service_provider_id' => 'required|integer',
        'configs.*.links' => 'array|min:1',
        'configs.*.links.*' => 'string',
        'configs.*.drips' => 'array|min:1',
        'configs.*.drips.*' => 'integer',
        'configs.*.qty' => 'nullable|array|min:1',
        //            'configs.*.qty.*' => 'string',
    ];

    const VALIDATION_MESSAGE = [
        'category.required' => 'Please select a category.',
        'category.integer' => 'The category must be an integer.',
        'service.required' => 'Please select a service.',
        'service.integer' => 'The service must be an integer.',
        'configs.required' => 'The field is required and should be an array.',
        'configs.*.advanced_service_provider_id.required' => 'Each must have a valid advanced service provider ID.',
        'configs.*.advanced_service_provider_id.integer' => 'The advanced service provider ID must be an integer.',
        'configs.*.links.min' => 'Each should have at least one link.',
        'configs.*.links.*.string' => 'Each link must be a valid social media url.',
        'configs.*.drips.min' => 'Each should have at least one drip value.',
        'configs.*.drips.*.integer' => 'Each drip value must be an integer.',
        'configs.*.qty.min' => 'Each should have at least one quantity value.',
        'configs.*.qty.*.integer' => 'Each quantity value must be an integer.',
        'configs.*.qty.*.min' => 'Each quantity value should be at least :min.'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
