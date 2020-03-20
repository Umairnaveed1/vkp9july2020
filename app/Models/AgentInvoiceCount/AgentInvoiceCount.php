<?php

namespace App\Models\AgentInvoiceCount;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;

class AgentInvoiceCount extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'agentinvoicecount';
    protected $fillable =
        [
            'agent_id','tier_id','tierpercent','user_id'
        ];

    public function agents()
    {
        return $this->belongsTo('App\Agents\Agent');
    }

    public function agent()
    {
        return $this->belongsTo('App\Agents\Agent');
    }
}
