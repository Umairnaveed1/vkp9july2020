<?php

namespace App\Http\Controllers\Admin\Checks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function create()
    {
    	return view('admin.checks.create');
    }
}
