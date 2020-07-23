<?php

namespace App\Models\Properties;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;
use App\User;
use App\Models\PropertyNotes\PropertyNote;
use App\Models\ZipCodes\ZipCode;
use App\Models\Cities\City;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Company_Managment\company_managment;
use App\Models\Invoices\Invoice;

class Property extends Model
{
    
    protected $table = 'properties';

    public function agent()
    {
        return $this->belongsTo('App\Models\Agents\Agent');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\Agents\Agent');
    }
    public function propertynotes()
    {
        return $this->belongsToMany('App\Models\PropertyNotes\PropertyNote');
    }
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
        return $this->belongsTo('App\Models\ZipCodes\ZipCode', 'zipcode_id', 'id');
    }
 public function mangment_company() 
    {
        return $this->belongsTo('App\Models\Company_Managment\company_managment', 'MgmtCompID', 'id');
    }
public function invoice(){ 
        return $this->hasMany('App\Models\Invoices\Invoice', 'property_id', 'id');
    }
}
