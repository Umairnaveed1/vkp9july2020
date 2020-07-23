<?php



namespace App\Models\Cities;



use Illuminate\Database\Eloquent\Model;

use App\Models\States\State;

use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;


class City extends Model

{


    protected $table = 'cities';

    protected $fillable = ['cityname','state_id','country_id'];



    public function state()

    {

        return $this->belongsTo('App\Models\States\State');

    }

    public function zipcodes()

    {

        return $this->hasMany('App\Models\ZipCodes\ZipCode');

    }



  public function Property(){
    return $this->hasMany('App\Models\Properties\Property','city_id','id');
   }
   public function invoice(){
    return $this->hasMany('App\Models\Invoices\Invoice','bill_city_id','id');
   }


}

