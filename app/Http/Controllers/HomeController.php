<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Agents\Agent;
use App\Models\Agents\Hsbillings;
use App\User;
use App\Models\Agents\Homeleasebillings;
use App\Models\Properties\Property;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\Company_Managment\company_managment;

class HomeController extends Controller 
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


        public function agenthome(Request $request)
    { 

        $data['get_agents'] = Agent::where('id', Auth::user()->id)->get();

        return view('agent.home.agenthome',$data);
    }

    public function index(Request $request)
    { 
        $phonelist = Agent::with('users')->where('agentcellphone','>','0')->count();
       // dd($phonelist);
        $agents = Agent::with('users')->orderby('created_at','DESC')->paginate(10);
        return view('home',compact('agents','phonelist'));
    }

    public function admin()
    {
        if(Auth::user()->is_admin === 0)
        {
    return view('home');
    }
}

        public function homesalebilling()
    {
        $hsbillingsRecords=Hsbillings::max('id');
        $homeSaleId=$hsbillingsRecords+1;
        $viewData['homeSaleId']=$homeSaleId;
        $viewData['country']=Country::all();
        $viewData['state']  =State::all();
        $viewData['city']   =City::all();
        $viewData['zipCode']=ZipCode::all();
		$viewData['agents']   =Agent::all(); 
		$viewData['company_managment']   =company_managment::all();
        return view('agent.homesales.home_sale _bill',$viewData);
    }

public function appartmentbilling()
{
         return view('agent.appartment_bill.appartmentbilling');

}

public function homeleasebilling()
{
	
    $hlbillingsRecords=Homeleasebillings::max('id'); 
    $homeLeaseBillId=$hlbillingsRecords+1;
    $viewData['homeLeaseBillId']=$homeLeaseBillId;
    $viewData['properties']=Property::all();
    $viewData['country']   =Country::all();
    $viewData['state']     =State::all();
    $viewData['city']      =City::all();
    $viewData['zipCode']   =ZipCode::all();
    $viewData['agents']   =Agent::all(); 
    $viewData['company_managment']   =company_managment::all(); 
    return view('agent.homelease.home_lease_billing',$viewData);
}
public function billinghome()
{

    return view('agent.home.home');
}
public function agentbilling()
{
    return view('agent.billing.index');
}
}
