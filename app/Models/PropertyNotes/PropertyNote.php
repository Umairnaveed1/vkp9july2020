<?php

namespace App\Models\PropertyNotes;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Properties\Property;

class PropertyNote extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'propertynotes';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function properties()
    {
        return $this->belongsToMany('App\Models\Properties\Property');
    }

}
