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
use App\Models\OfficeManager\OfficeManager;
use App\Models\miscincome\miscincome;
use App\Models\Admin\FeeApprovals\FeeApproval;
use App\Models\Agent\AppartmentBilling\AppartmentBilling;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserName', 'email',  'PageSecurity', 'AdminUser', 'Approvebill',
        'password','is_admin'];

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
         public function scopeWhereAgent($query, $agents)
    {
        if($agents){
            return $query->where('id', $agents);
        }

        return $query;
    }
    public function offices()
    {
        return $this->hasMany('App\Models\OfficeManager\OfficeManager','user_id');

    }
    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
    public function rules()
    {
        return $this->hasMany('App\Models\Rules\Rule');
    }
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoices\Invoice');
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
    public function miscincome(){
        return $this->hasMany('App\Models\miscincome\miscincome','user_id','id');
    }
    public function appartmentbilling()
    {
        return $this->hasMany('App\Models\Agent\AppartmentBilling\AppartmentBilling');
    }


    
     public function feeapprovals(){
        return $this->hasMany('App\Models\Admin\FeeApprovals\FeeApproval');
    }

    

}
