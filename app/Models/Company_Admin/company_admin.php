<?php

namespace App\Models\Company_Admin;

use Illuminate\Database\Eloquent\Model;

class company_admin extends Model
{
    protected $table = 'company_admin';

    protected $fillable =
    [
        'administrator_name','cell_no','email'
   ];
}
