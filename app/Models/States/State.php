<?php



namespace App\Models\States;



use Illuminate\Database\Eloquent\Model;

use App\Models\Countries\Country;

use App\Models\Cities\City;
use App\Models\Properties\Property;
use App\Models\Invoices\Invoice;


class State extends Model

{


    protected $table = 'states';

    protected $fillable = ['statename','stateabbr','country_id'];



    public  function country()

    {

        return $this->belongsTo('App\Models\Countries\Country');

    }



    public function cities()

    {

        return $this->hasMany('App\Models\Cities\City');

    }



     public function Property(){
    return $this->hasMany('App\Models\Properties\Property','state_id','id');
   }

public function invoice(){
    return $this->hasMany('App\Models\Invoices\Invoice','bill_state_id','id');
   }

}

