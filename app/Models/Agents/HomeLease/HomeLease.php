<?php

namespace App\Models\Agents\HomeLease;

use Illuminate\Database\Eloquent\Model;

class HomeLease extends Model
{
     protected $table = 'hlbillings';

    protected $fillable = ['moveinno','agentcomapny','secondage','listingagent','leesingagent',	'rentamount','leeseterms',	'flatrate',	'bonus',	'totaldueto',	'duetofirst',	'duetosec',	'vkpcut',	'verifiedby',	'buyerbroke','cobrokeID',	'admincobr',	'admincomp',	'companyn',	'agentname',	'companycity','companystate',	'companyzip',	'isitconnect2',	'tenantname',	'tenantadd',	'tenantunit',	'tenantcity',	'tenantstate,'	'tanantzip,'	'leesestart',	'phonenumber',	'isitconnect',	'depositrefno',	'agentnotes',	'giftcard',	'pono',	'agent_id',	'company_id',	'user_id',];
}
