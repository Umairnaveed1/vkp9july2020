<?php



namespace App\Models\AgentRulesSetups;



use Illuminate\Database\Eloquent\Model;

use App\Models\Agents\Agent;



class AgentRuleSetup extends Model

{




    protected $table = 'agentrulessetup';

    protected $fillable =

    [

        'agent_id','officemanager','wpsplitonly','gossfiftyp','splitbwtwo','rule1','rule2','rule3','rule4','rule5','rule6','user_id'

    ];



    public function agent()

    {

        return $this->belongsTo('App\Models\Agents\Agent');

    }





}

