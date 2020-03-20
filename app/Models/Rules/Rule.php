<?php

namespace App\Models\Rules;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Rule extends Model
{
    protected $fillable = [
        'ruledescription','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
