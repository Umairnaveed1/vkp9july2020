<?php

namespace App\models\agents;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\FeeApprovals\FeeApproval;

class Homeleasebillings extends Model
{
	protected $table = "hlbillings";
	 protected $guarded = [];
    //

	  public function feeapprovals()
    {
        return $this->hasMany('App\Models\Admin\FeeApprovals\FeeApproval');
    }
}
