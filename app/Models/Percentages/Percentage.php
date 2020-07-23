<?php

namespace App\Models\Percentages;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Percentage extends Model
{
     protected $fillable = [
        'daysfrom','daysto','latefee','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
