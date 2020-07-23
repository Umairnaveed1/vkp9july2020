<?php

namespace App\Models\Admin\AutoPay;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Properties\Property;


class AutoPay extends Model
{
    

    protected $table = 'invoices';

    protected  $fillable = ['autopay','property_id','lastcontra','invoicemgmetno','invoicemgmtname',
                            'invoicemgmtdesc','invoicemgmttotal','invoicemgmtcell','invoicemgmtbill','invoicemgmtorder','invoicemgmtbal','tenantname','tenantaddress','tenantunitno','tenantzipcode','invoice_notes','invoicedate','leesestart','leeseterm','verifier','invmakeid','rent','bonus','vkppercent','flat_rate',
                            'amountdue','firstagent D','mcnb count','firstagent C','no number',
                            'advance','monthly advance','duetofirst A','vkpsplit','secondage',
                            'duetosecond','fiftyfiftysplit','ahs','legal','adjustcom','nopay',
                            'active','APbuyer bo','APReferal A','APRroperty ID','APAgent Name','APPayment', ' APamount D', 'SAPAgentID','SAPAgentC','SAPAgentCo', 'SAPComType','SAPComRate',  'SAPvkpAm',    'SAPAgentSplit',   'SAPvkSplit',  'checkcheeta', 'checkcheetb', 'checkcheetc', 'checkcheetd', 'checkcheete', 'advancec',    'EmailSend',   'EmailDate',   'invoiceholda ',   'invoiceholdb',    'igiftcard',   'pcno ',   'printnote',   'user_id',]; 
}

     public function users(){

     	return $this->belongsTo('App\User','user_id','id');
     }

     public function properties(){

     	return $this->belongsTo('App\Models\Properties\Property','user_id','id');
     }


