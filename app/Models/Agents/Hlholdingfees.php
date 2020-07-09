<?php

namespace App\Models\Agents;

use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Property;
use App\Models\Agents\Agent;

class Hlholdingfees extends Model
{
	protected $table="hlholdingfees";
	protected $guarded = [];
    //
    public function users()
    {
        return $this->belongsTo('App\User');
    }
	public function hl_agent(){
        return $this->belongsTo('App\Models\Agents\Agent', 'agent_id', 'id');
    }
    public function hl_property(){
    	return $this->belongsTo('App\Models\Properties\Property', 'property_id', 'id');
    }
}
