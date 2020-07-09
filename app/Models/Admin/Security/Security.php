<?php

namespace App\Models\Admin\Security;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\DB;

class Security extends Model
{
    protected $table= 'pagesecurity';
     protected $fillable = [
     	
     'pageid',
     'pagename',
     'viewsocialsec',
     'editoverr',
     'editagenta',
     'chengeagea',
     'setagent',
     'deleteedit',
     'viewagent',
     'editagentc',
     'viewETCPaid',
     'chargeback',
     'printtransaction',
     'addagente',
     'deleteagent',
     'editexpense',
     'printexpense',
     'addagentb',
     'deleteagentb',
     'editbonush',
     'printbonush',
     'severagenta',
     'recalculate',
     'editautopay',
     'editslowpay',
     'editdonotplace',
     'editnoadvancable',
     'editnocontract',
     'editpropertyinfo',
     'editmgmtinfo',
     'changemainbilling',
     'editlastcontract',
     'printtransactionscreen',
     'editdeletenotesbyotheruser',
     'depositsecurity',
     'approvalsecurity',
     'approve',
     'reject',
     'depostrecsecset',
     'rcvd',
     'addpayment',
     'postpayment',
     'checkscaccess',
     'processcomm',
     'createcommcheck',
     'processautopays',
     'createautopayschecks',
     'renumberchecks',
     'exportchecks',
     'changebillingaddressinvoice',
     'editlegalinvoice',
     'adjustcomminvoice',
     'selectnoopayinvoice',
     'selectno',
     'autopayscreenset',
     'createautopaysecset',
     'changeautopaybillinaddress',
     'autopayaddpayments',
     'recalculatea',
     'adduser',
     'addsecurityl',
     'addsecurity',
     'user_id',];

    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
   

   
   
      
}

