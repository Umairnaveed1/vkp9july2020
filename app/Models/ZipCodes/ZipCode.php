<?php



namespace App\Models\ZipCodes;



use Illuminate\Database\Eloquent\Model;

use App\Models\Agents\Agent;

use App\Models\Properties\Property;
use App\Models\Invoices\Invoice;
use App\Models\Cities\City;

class ZipCode extends Model

{


    protected $table = 'zipcodes';

    protected $fillable = ['zipcode','city_id'];



    public function city()

    {

        return $this->belongsTo('App\Models\ZipCodes\ZipCode','city_id','id');

    }

   public  function agent()

   {

       return $this->belongsTo('App\Models\Agents\Agent');

   }


 public function Property(){
    return $this->hasMany('App\Models\Properties\Property','zipcode_id','id');
   }
public function invoice(){
    return $this->hasMany('App\Models\Invoices\Invoice','bill_zipcode_id','id');
   }
}

