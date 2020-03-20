<?php

namespace App\Models\Agents;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\PropertyLogs\PropertyLog;
use App\Models\AgentInvoiceCount\AgentInvoiceCount;
use App\Models\OfficeManager\OfficeManager;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\ZipCodes\ZipCode;


class Agent extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'agents';

    protected $fillable =
    [
        'agentfirstname','agentlastname','agentdisplayname','agentcellphone','agenthome',
        'agentAltNo','agentofficeno','agenthiredate','agentover','agentadve','agentsocial','AgentDate',
        'agentemail','agentaddress','agentzipid','agentsever','agentInAct','user_id'
   ];
    public function users()
    {
      return $this->belongsToMany('App\Models\Agents\Agent');
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

}
