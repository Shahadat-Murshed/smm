<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTier extends Model
{
    use HasFactory;

    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }
}
