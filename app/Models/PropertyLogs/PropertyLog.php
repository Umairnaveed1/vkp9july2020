<?php

namespace App\Models\PropertyLogs;

use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Property;

class PropertyLog extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'propertieslogs';

    public function properties()
    {
        return $this->belongsToMany('App\Models\Properties\Property');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
