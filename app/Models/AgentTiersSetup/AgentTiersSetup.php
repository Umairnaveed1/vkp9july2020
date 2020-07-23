<?php



namespace App\Models\AgentTiersSetup;



use Illuminate\Database\Eloquent\Model;


use App\Models\Tiers\Tier;
class AgentTiersSetup extends Model

{

    protected $table = 'agenttierssetup';

    protected $fillable = ['agent_id','tier_id','user_id','tierpercent'];



    public function agents()

    {

        return $this->belongsToMany('App\Agents\Agent');

    }

    public function users()

    {

        return $this->belongsTo('App\Agents\Agent');

    }
    public function Tier(){
        return $this->belongsTo('App\Models\Tiers\Tier', 'tier_id', 'id');
    }



}

