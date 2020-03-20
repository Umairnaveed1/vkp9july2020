<?php

namespace App\Models\AgentTiersSetup;

use Illuminate\Database\Eloquent\Model;

class AgentTiersSetup extends Model
{
    protected $table = 'agentstierssetup';
    protected $fillable = ['agent_id','tier_id','user_id'];

    public function agents()
    {
        return $this->belongsToMany('App\Agents\Agent');
    }
    public function users()
    {
        return $this->belongsTo('App\Agents\Agent');
    }

}
