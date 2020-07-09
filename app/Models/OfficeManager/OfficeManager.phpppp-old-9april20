<?php

namespace App\Models\OfficeManager;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Agents\Agent;

class OfficeManager extends Model
{
    protected $table= 'offices';
    protected $fillable = ['office_description','office_address','office_phone','office_fax','office_email',
        'manager','co_manager','agent_id'];



    public function agent()
    {
        return $this->belongsTo('App\Models\Agents\Agent');
    }
    public function agents()
    {
        return $this->belongsToMany('App\Models\Agents\Agent');
    }


}
