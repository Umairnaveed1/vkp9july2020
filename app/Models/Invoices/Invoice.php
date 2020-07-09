<?php



namespace App\Models\Invoices;



use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Cities\City;
use App\Models\States\State;
use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;
use App\Models\Company_Managment\company_managment;
use App\Models\Countries\Country;
use App\Models\Agents\Agent;
use App\Models\Agent\AppartmentBilling\AppartmentBilling;
use App\Models\Agents\Hsbillings;
use App\Models\Agents\Homeleasebillings;
use App\Models\Admin\FeeApprovals\FeeApproval;




class Invoice extends Model

{

    protected $table = 'invoices';



    public function user()

    {  

        return $this->belongsTo('App\User');

    }

    public function users()

    {

        return $this->belongsTo('App\User','user_id','id');

    }
    public function inv_property(){
    	return $this->belongsTo('App\Models\Properties\Property', 'property_id', 'id');
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
 public function inv_mangment_company()
    {
        return $this->belongsTo('App\Models\Company_Managment\company_managment', 'company_id', 'id');
    }
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
   public function feeapprovals()
    {
        return $this->belongsTo('App\Models\Admin\FeeApprovals\FeeApproval');
    }
      public function inv_tenantcountry()
    {
        return $this->belongsTo('App\Models\Countries\Country', 'tenant_country_id', 'id');
    }
    public function inv_tenatcity()
    {
        return $this->belongsTo('App\Models\Cities\City', 'tenant_city_id', 'id');
    }
    
public function inv_tenantstate()
    {
        return $this->belongsTo('App\Models\States\State', 'tenant_state_id', 'id');
    }

public function inv_tenantzipcode()
    {
        return $this->belongsTo('App\Models\ZipCodes\ZipCode', 'tenant_zipcode_id', 'id');
    }

    public function inv_mangment_cm()
    {
        return $this->belongsTo('App\Models\Company_Managment\company_managment', 'InvoiceMgmtCompID', 'id');
    }
 
	


}

