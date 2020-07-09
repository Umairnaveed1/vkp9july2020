<?php

namespace App\Models\AdminForm;

use Illuminate\Database\Eloquent\Model;

class admin_form extends Model
{
    protected $table = 'adminform';
    protected $fillable =
        [
            'form_name','document','user_type'
        ];
}
