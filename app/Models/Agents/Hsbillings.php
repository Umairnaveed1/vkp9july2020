<?php

namespace App\Models\Agents;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\FeeApprovals\FeeApproval;


class Hsbillings extends Model
{
	 protected $table="hsbillings";
	 protected $guarded = [];
	 // protected $fillable = [
  //       'homesaleno',
  //       'agentcomp',
  //       'secondage',
  //       'percentagesplit',
  //       'secongage1',
  //       'listingagent',
  //       'contractdate',
  //       'sellingprice',
  //       'closedofesc',
  //       'escrowno',
  //       'homesaleno',
  //       'homesaleno',
         
  //   ];
    //
     public function feeapprovals()
    {
        return $this->hasMany('App\Models\Admin\FeeApprovals\FeeApproval');
    }
}
