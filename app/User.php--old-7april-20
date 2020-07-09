<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Rules\Rule;
use App\Models\Invoices\Invoice;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\Properties\Property;
use App\Models\PropertyNotes\PropertyNote;
use App\Models\AgentRulesSetups\AgentRuleSetup;
use App\Models\Agents\Agent;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserName', 'email', 'office_id', 'PageSecurity', 'AdminUser', 'Approvebill',
        'agent_id',
        'password','is_admin',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function agents()
    {
        return $this->belongsToMany('App\Models\Agents\Agent');
    }
    public function rules()
    {
        return $this->hasMany('App\Models\Rules\Rule');
    }
    public function invoices()
    {
        return $this->belongsToMany('App\Models\Invoices\Invoice');
    }

    public function agentnotes()
    {
        return $this->hasMany('App\Models\AgentNotes\AgentNote');
    }
    public function agentrulessetup()
    {
        return $this->hasMany('App\Models\AgentRulesSetups\AgentRulesSetup');
    }
    public function agenttierssetup()
    {
        return $this->hasMany('App\Models\AgentTiersSetup\AgentTiersSetup');
    }
    public function properties()
    {
        return $this->hasMany('App\Models\Properties\Property');
    }
    public function propertynotes()
    {
        return $this->hasMany('App\Models\PropertyNotes\PropertyNote');
    }

    public function propertylogs()
    {
        return $this->belongsToMany('App\Models\PropertyLogs\PropertyLog');
    }

}
