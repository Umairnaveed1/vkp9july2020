<?php

namespace App\Models\AgentNotes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;

class AgentNote extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';

    protected $table = 'agentnotes';
    protected $fillable =
        [
            'agentnote','agentnotes','agentnoted','agentnott','user_id ',
            'agent_id '
        ];

    public function agent()
    {
        return $this->belongsTo('App\Models\Agents\Agent');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
