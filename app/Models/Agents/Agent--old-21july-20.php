<?php

namespace App\Models\Agents;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\PropertyLogs\PropertyLog;
use App\Models\AgentInvoiceCount\AgentInvoiceCount;
use App\Models\OfficeManager\OfficeManager;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\ZipCodes\ZipCode;
use App\Models\Cities\City;
use App\Models\States\Satate;
use App\Models\miscincome\miscincome;



class Agent extends Model
{
   
    protected $table = 'agents';

    protected $fillable =
    [
        'agentfirstname','agentlastname','agentdisplayname','agentcellphone','agenthome',
        'agentAltNo','agentofficeno','agenthiredate','agentover','agentadve','agentsocial','AgentDate',
        'agentemail','agentaddress','agentzipid','agentsever','agentInAct','user_id'
   ];

        public function scopeWhereUser($query, $users)
    {
        if($users){
            return $query->where('user_id', $users);
        }

        return $query;
    }

    
    public function users()
    {
      return $this->belongsTo('App\User','user_id','id');
    }
   public function offices()
   {
       return $this->hasMany('App\Models\OfficeManager\OfficeManager');
   }


   public function agenttierssetup()
   {
       return $this->belongsToMany('App\Models\AgentTiersSetup\AgentTiersSetup');
   }
    public function agentinvoicecount()
    {
        return $this->hasMany('App\Models\AgentInvoiceCount\AgentInvoiceCount');
    }
    public function properties()
    {
        return $this->hasMany('App\Models\Agents\Agent');
    }
    public function propertieslogs()
    {
        return $this->hasMany('App\Models\PropertyLogs\PropertyLog');
    }
    public function zipcodes()
    {
        return $this->hasMany('App\Models\ZipCodes\ZipcCode');
    }
    public function city()
    {
        return $this->belongsTo('App\Models\Cities\City', 'city_id', 'id');
    }
   
    public function state()
    {
        return $this->belongsTo('App\Models\States\State', 'state_id', 'id');
    }
    public function miscincome(){
        return $this->hasMany('App\Models\miscincome\miscincome','agent_id','id');
    }

}
