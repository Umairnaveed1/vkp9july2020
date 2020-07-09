<?php

namespace App\Http\Controllers\Agent\AgentResource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Properties\Property;

class AgentResourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('agent.agentresource.index');
    }
    public function autoPays_propertylist()
    {
    	
		$autopays = Property::with('mangment_company','country_list','state_list','city_list','zipcode_list')->whereNotNull('PropertyAutopay')->paginate(5);
    	return view('agent.agentresource.autopays_propertylist', compact('autopays'));
    }
    public function donotplace_propertylist()
    {
    	$donotplace = Property::with('mangment_company','country_list','state_list','city_list','zipcode_list')->whereNotNull('PropertDonotplace')->paginate(5);
    	return view('agent.agentresource.donotplace_propertylist',compact('donotplace'));
    }
    public function nocontract_propertylist()
    {
    	$nocontract = Property::with('mangment_company','country_list','state_list','city_list','zipcode_list')->whereNotNull('propertynocontract')->paginate(5);
    	return view('agent.agentresource.nocontract_propertylist',compact('nocontract'));
    }
    public function slowpay_propertylist()
    {
    	$slowpay = Property::with('mangment_company','country_list','state_list','city_list','zipcode_list')->whereNotNull('PropertySlowpay')->paginate(5);
    	return view('agent.agentresource.slowpay_propertylist',compact('slowpay'));
    }
}
