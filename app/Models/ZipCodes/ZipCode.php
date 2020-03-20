<?php

namespace App\Models\ZipCodes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;

class ZipCode extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'zipcodes';
    protected $fillable = ['zipcode','city_id'];

    public function city()
    {
        return $this->belongsTo('App\Models\ZipCodes\ZipCode');
    }
   public  function agent()
   {
       return $this->belongsTo('App\Models\Agents\Agent');
   }

}
