<?php

namespace App\Models\Tiers;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Tier extends Model
{
   protected $fillable = [
        'tiertype','tierstart','tierend','tierpercent','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
