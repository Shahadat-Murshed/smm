<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "referrals";

    public function users(){
        return $this->hasMany(User::class,'user_id','id');
    }
}
