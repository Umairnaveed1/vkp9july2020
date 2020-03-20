<?php

namespace App\Models\Cities;

use Illuminate\Database\Eloquent\Model;
use App\Models\States\State;
use App\Models\ZipCodes\ZipCode;

class City extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'cities';
    protected $fillable = ['cityname','state_id'];

    public function state()
    {
        return $this->belongsTo('App\Models\States\State');
    }
    public function zipcodes()
    {
        return $this->hasMany('App\Models\ZipCodes\ZipCode');
    }


}
