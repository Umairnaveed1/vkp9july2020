<?php

namespace App\Models\AdminExpenceModel;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;
class admin_expence extends Model
{
    protected $table = 'adminexpence';
    public $charge_agent_id = 'charge_agent_id';

    protected $fillable =
    [
        'charge_type','charge_date','charge_amount','commit','charge_agent_id', 'onhold'
   ];
    public function agent_tbl()
    {
      return $this->hasOne('App\Models\Agents\Agent', 'id','charge_agent_id');
    }
}
