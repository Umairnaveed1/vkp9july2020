<?php

namespace App\Models\Invoices;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Invoice extends Model
{
    const CREATED_AT = 'Date Created';
    const UPDATED_AT = 'Date Modified';
    protected $table = 'invoices';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
