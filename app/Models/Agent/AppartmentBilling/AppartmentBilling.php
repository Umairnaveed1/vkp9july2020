<?php

namespace App\Models\Agent\AppartmentBilling;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;
use App\Models\Properties\Property;
use App\User;


class AppartmentBilling extends Model
{
    protected $table = 'apartmentbillings';

    protected $fillable =  [
        'billingtype','moveinno','agentcomp','secongage','secondagef',
        'autopayrecord','companyper','flatrate','bonus','totaldueto','duetofirst','duetosec',
        'vkpcut','verifiedby','adminprop','isitconnect','depositrefno','tenantname',
        'tenantaddress','tenantunit','tenantcity','tenantstate',
        'tenantzip', 'leesestart', 'leeseterms','tenantadd',
        'tenantunit1','tenantcity1','tenantstate1','tanantzip1','isitconnect2',
        'changetenant', 'agentnotes', 'giftcard','pono','agent_id','property_id','user_id','file','country_id','state_id','city_id','zip_id'
   ];




    public function agents()
    {
    	return $this->belongsTo('App\Models\Agents\Agent','agent_id','id');
    }

     public function properties()
    {
    	return $this->belongsTo('App\Models\Properties\Property','property_id','id');
    }

    public function users()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }


}
