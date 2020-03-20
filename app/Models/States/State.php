<?php

namespace App\Models\States;

use Illuminate\Database\Eloquent\Model;
use App\Models\Countries\Country;
use App\Models\Cities\City;

class State extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'states';
    protected $fillable = ['statename','stateabbr','country_id'];

    public  function country()
    {
        return $this->belongsTo('App\Models\Countries\Country','country_id');
    }

    public function cities()
    {
        return $this->hasMany('App\Models\Cities\City');
    }


}
