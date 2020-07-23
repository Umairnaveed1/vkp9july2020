<?php



namespace App\Models\Countries;



use Illuminate\Database\Eloquent\Model;

use App\Models\States\State;
use App\Models\Properties\Property;
use App\Models\Invoices\Invoice;

class Country extends Model

{

    

    protected $table = 'countries';

    protected $fillable = ['countryname','countrysh'];



    public function states()

    {

        return $this->hasMany('App\Models\States\State');

    }

    public function cities()

    {

        return $this->hasMany('App\Models\Cities\City');

    }
    public function Property(){
    return $this->hasMany('App\Models\Properties\Property','country_id','id');
   }
   public function invoice(){
    return $this->hasMany('App\Models\Invoices\Invoice','bill_country_id','id');
   }

}

