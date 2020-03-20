<?php

namespace App\Models\Properties;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Agent;
use App\User;
use App\Models\PropertyNotes\PropertyNote;
use App\Models\ZipCodes\ZipCode;

class Property extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'properties';

    public function agent()
    {
        return $this->belongsTo('App\Models\Agents\Agent');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\Agents\Agent');
    }
    public function propertynotes()
    {
        return $this->belongsToMany('App\Models\PropertyNotes\PropertyNote');
    }
    public function zipcodes()
    {
        return $this->hasMany('App\Models\ZipCodes\ZipCode');
    }

}
