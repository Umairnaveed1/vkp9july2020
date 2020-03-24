<?php

namespace App\Models\Countries;

use Illuminate\Database\Eloquent\Model;
use App\Models\States\State;

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
}
