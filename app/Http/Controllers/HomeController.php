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

use App\Models\Invoices\Invoice;
use App\Models\AgentRulesSetups\AgentRuleSetup;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\Rules\Rule;
use App\Models\Tiers\Tier;


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

        public function lease_month_count($paymentType=''){
        $Invoice = new Invoice();
        $first_agent = Auth::Id();
        $paymentType = $paymentType!=NULL?$paymentType:'';
        if($paymentType == 'apartment' || $paymentType == 1){
            $type = 'Rent'; 
        }
        else if($paymentType == 'homelease' || $paymentType == 2){
            $type = 'Lease';
        }
        else{
            $type = "Sale";
        }
        $currentMonth = date('m');
       // $userid = Auth::Id();
        $userid = 1;
        $count_where = array('agent_id' => $first_agent, 'NoNumber' => 0);
        $agent_MO = $Invoice->whereRaw('MONTH(created_at) = ?',[$currentMonth])->where($count_where)->count();
        $data['count'] = $agent_MO + 1;
        $AgentTiersSetup = new AgentTiersSetup();
        $Tier = new Tier();
        $get_tier = $Tier::where('tierstart', '<=', $data['count'])->where('tierend', '>=', $data['count'])->where('tiertype', $type)->first();

        $comm_where = array('agent_id' => $first_agent, 'user_id' => $userid, 'tier_id' => $get_tier['id']);

        $agent_commission = $AgentTiersSetup->with('Tier')->where($comm_where)->first();
        if($agent_commission['Tier']['tierstart'] <= $data['count'] && $agent_commission['Tier']['tierend'] >= $data['count']){
            $data['commission'] = $agent_commission['tierpercent'];
        }
        else{
            $data['commission'] = 0;
        }
        return $data;
    }

    public function homesalebilling()
    {
        $hsbillingsRecords=Hsbillings::max('id');
        $homeSaleId=$hsbillingsRecords+1;
        $leasMonthCount=$this->lease_month_count();
        $commission=$leasMonthCount['commission']!=NULL?$leasMonthCount['commission']:0;
        $viewData['homeSaleId']=$homeSaleId;
        $viewData['country']=Country::all();
        $viewData['state']  =State::all();
        $viewData['city']   =City::all();
        $viewData['zipCode']=ZipCode::all();
        $viewData['agents']   =Agent::all(); 
        $viewData['company_managment']   =company_managment::all();
        $viewData['commission']          =$commission;
        return view('agent.homesales.home_sale _bill',$viewData);
    }


    public function appartmentbilling()
    {
       return view('agent.appartment_bill.appartmentbilling');

   }

   public function homeleasebilling()
   {
      $leasMonthCount=$this->lease_month_count('homelease');
        $commission=$leasMonthCount['commission']!=NULL?$leasMonthCount['commission']:0;
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
    $viewData['commission']          =$commission;
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
