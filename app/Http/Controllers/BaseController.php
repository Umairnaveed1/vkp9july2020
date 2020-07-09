<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function about_us()
    {
    	return view('about-us');
    }
    public function contact()
    {
    	return view('contact');
    }
    public function services()
    {
    	return view('services');
    }
}
