<?php

namespace App\Models\CompanyInfo;

use Illuminate\Database\Eloquent\Model;

class company_info extends Model
{
    protected $table= 'company_info';
    protected $fillable = [
    	'company_name',
    	'company_abbrevation',
    	'company_address',
    	'company_phone',
    	'company_fax',
    	'company_email',
    	'company_phone_1',
    	'disclaimer',
        ];
}
