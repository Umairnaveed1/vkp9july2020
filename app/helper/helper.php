<?php
namespace App\helper;
 use Illuminate\Database\Eloquent\Model;

use App\User;


class helper
{
if (!function_exists('invoice_agent')) {
    function invoice_agent($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
print_r($data); die();
        return $data;
 
    }
}
}
