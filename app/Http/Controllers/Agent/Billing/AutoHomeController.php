<?php

namespace App\Http\Controllers\Agent\Billing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Properties\Property;
use App\Models\Agents\Hlholdingfees;
use Session;

class AutoHomeController extends Controller
{
	public function __construct()
    {
       $this->middleware('auth');
    }
    public function autoHomeHoldFee()
    {
    	$properties = Property::all('id','propertyName'); 
    	//echo "<pre>"; print_r($properties); exit('oki');
    	return view('agent.billing.Bill_AutoHomeHoldFee', compact('properties'));
    }
    public function getPropertyData(Request $request)
    {
    	$property = Property::whereid($request->propertyID)->first();
    	return json_encode($property);
    	//print_r($property->toArray()); exit('oki');
    }
    public function store_AutoHomeHoldFee(Request $request)
    {
    	 $input=$request->all();
         $request->validate([
            'holdingfee' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'amountdue'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'customerf'=>'required',
            'customerl'=>'required'
            
                ]);
// echo'<pre>';
// print_r($input);
// echo'/<pre>';
        $hlbillingfee = new Hlholdingfees();
        $hlbillingfee->hldate =date('Y-m-d',strtotime( $request->hldate));
        $hlbillingfee->community = $request->community;
        $hlbillingfee->unitno = $request->unitno;
        $hlbillingfee->holdingfee = $request->holdingfee;
        $hlbillingfee->mcno = $request->mcno;
        $hlbillingfee->amountdue = $request->amountdue;
        $hlbillingfee->property_id = $request->property_id;
        $hlbillingfee->agent_id = $request->agent_id;
        //$hlbillingfee->user_id = $request->agent_id;
        
        $hlbillingfee->hlmoveins = date('Y-m-d',strtotime($request->hlmoveins)); 
        $hlbillingfee->datefeerec = date('Y-m-d',strtotime($request->datefeerec));
        $hlbillingfee->customerf = $request->customerf;
        $hlbillingfee->customerl = $request->customerl;
        $hlbillingfee->customera = $request->customera;
        $hlbillingfee->customerstate = $request->customerstate;
        $hlbillingfee->customercity = $request->customercity;
        $hlbillingfee->customerzip = $request->customerzip;
        $hlbillingfee->customerh = $request->customerh;
        $hlbillingfee->customerc = $request->customerc;
        $hlbillingfee->customeral = $request->customeral;
        $hlbillingfee->agentnotes = $request->agentnotes;
       
       
         if($request->hasfile('attachment_file'))
        {
            $file=$request->file('attachment_file');
            //echo $fileName=$file->getClientOriginalExtension();
            $fileName=$request->file('attachment_file')->getClientOriginalName();
            $file->move(public_path('agentfile'), $fileName);

            $hlbillingfee->agent_image = '/public/agentfile/'.$fileName;  
        }
        $hlbillingfee->save();
        Session::flash('billingMsg','Billing Fee added sucessfully.');
        return redirect('agents/billing/autoHomeHoldFee')->with('billingMsg','Billing added sucessfully.'); 
    }
}
