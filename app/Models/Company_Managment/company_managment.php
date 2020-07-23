<?php

namespace App\Models\Company_Managment;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cities\City;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\ZipCodes\ZipCode;

class company_managment extends Model
{
    protected $table = 'companymanagment';

    protected $fillable =
    [
        'mgt_company','office_address','country_id','state_id','city_id','zip_id','phone','fax' ,'alt','email','active',
   ];
    public function city_list()
    {
        return $this->belongsTo('App\Models\Cities\City', 'city_id', 'id');
    }
    public function country_list()
    {
        return $this->belongsTo('App\Models\Countries\Country', 'country_id', 'id');
    }
    public function state_list()
    {
        return $this->belongsTo('App\Models\States\State', 'state_id', 'id');
    }
    public function zipcode_list() 
    {
        return $this->belongsTo('App\Models\ZipCodes\ZipCode', 'zip_id', 'id');
    }

}
