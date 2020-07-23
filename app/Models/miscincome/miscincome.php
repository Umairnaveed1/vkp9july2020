<?php

namespace App\Models\miscincome;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;
use App\User;

class miscincome extends Model
{
    protected $table= 'misc_income';
    protected $fillable = [
    	'income_date',
    	'amount',
    	'comment',
    	'onhold',
    	'agent_id',
    	'user_id',
        ];

        public function user()
        {
        	return $this->belongsTo('App\User','user_id','id');
        }
        public function agent()
        {
        	return $this->belongsTo('App\Models\Agents\Agent','agent_id','id');
        }
}
