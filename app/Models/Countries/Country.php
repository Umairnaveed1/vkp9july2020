<?php

namespace App\Models\Countries;

use Illuminate\Database\Eloquent\Model;
use App\Models\States\State;

class Country extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'countries';
    protected $fillable = ['countrysh','countryname'];

    public function states()
    {
        return $this->hasMany('App\Models\States\State');
    }
    public function cities()
    {
        return $this->hasMany('App\Models\Cities\City');
    }
}
