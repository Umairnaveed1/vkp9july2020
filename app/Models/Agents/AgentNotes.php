<?php

namespace App\Models\Agents;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Agents\Agent;




class AgentNotes extends Model
{
   
    protected $table = 'agentnotes';

    protected $fillable =
    [
        'agentnote','agentnotes','agentnoted','agentnott','user_id',
        'agent_id','document'
   ];

        public function scopeWhereUser($query, $users)
    {
        if($users){
            return $query->where('user_id', $users);
        }

        return $query;
    }

    
    public function agent()
    {
      return $this->belongsTo('App\Models\Agents\Agent','agent_id','id');
    }
    public function user()
    {
      return $this->belongsTo('App\User','user_id','id');
    }

}
