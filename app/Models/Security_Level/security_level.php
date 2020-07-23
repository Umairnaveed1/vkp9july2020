<?php

namespace App\Models\Security_Level;

use Illuminate\Database\Eloquent\Model;

class security_level extends Model
{
    protected $table = 'security_level';

    protected $fillable =
    [
        'security_name', 'security_role'
   ];
}
