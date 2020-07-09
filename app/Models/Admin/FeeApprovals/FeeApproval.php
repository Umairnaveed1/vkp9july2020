<?php

namespace App\Models\Admin\FeeApprovals;
use App\Models\Agent\AppartmentBilling\AppartmentBilling;
use App\Models\Agents\Hsbillings;
use App\Models\Agents\Homeleasebillings;
use App\User;
use App\Models\Cities\City;
use App\Models\States\State;
use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;
use App\Models\Countries\Country;
use App\Models\Invoices\Invoice;


use Illuminate\Database\Eloquent\Model;

class FeeApproval extends Model
{
    protected $table= 'feeapprovals';
    
    protected $fillable = ['approvaldate','approved',	'rejected',	'adminnotes',	',agentnotes',	',hsbilling_id',	'hlbilling_id',	'apartmentbilling_id',	'invoice_id',	'user_id','status'];

      public function inv_agent()
    {
        return $this->belongsTo('App\Models\Agents\Agent', 'agent_id', 'id');
    }
    public function apartmentbillings()
    {
    	return $this->belongsTo('App\Models\Agent\AppartmentBilling\AppartmentBilling','apartmentbilling_id','id');
    }
     public function hlbillings()
    {
    	return $this->belongsTo('App\Models\Agents\Homeleasebillings','hlbilling_id','id');
    }
     public function hsbillings()
    {
    	return $this->belongsTo('App\Models\Agents\Hsbillings','hsbilling_id');
    }
    public function users()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
      public function inv_city_list()
    {
        return $this->belongsTo('App\Models\Cities\City', 'bill_city_id', 'id');
    }
    public function inv_country_list()
    {
        return $this->belongsTo('App\Models\Countries\Country', 'bill_country_id', 'id');
    }
    public function inv_state_list()
    {
        return $this->belongsTo('App\Models\States\State', 'bill_state_id', 'id');
    }
    public function inv_zipcode_list()
    {
        return $this->belongsTo('App\Models\ZipCodes\ZipCode', 'bill_zipcode_id', 'id');
    }
     public function inv_property(){
        return $this->belongsTo('App\Models\Properties\Property', 'property_id', 'id');
    }

     public function invoices()
    {
        return $this->belongsTo('App\Models\Invoices\Invoice','invoice_id','id');
    }
   
 

   
}
