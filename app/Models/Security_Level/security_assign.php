<?php

namespace App\Models\Security_Level;

use Illuminate\Database\Eloquent\Model;

class security_assign extends Model
{
    protected $table = 'security_assign';

    protected $fillable =
    [
        'security_id','user_id',
   ];
}
