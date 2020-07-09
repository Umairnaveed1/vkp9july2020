<?php

namespace App\Http\Controllers\Invoice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Invoices\Invoice;
use App\Models\Properties\Property;
use App\Models\Countries\Country;
use App\Models\Agents\Agent;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\AgentRulesSetups\AgentRuleSetup;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\Rules\Rule;
use App\Models\Tiers\Tier;
use Validator;
use Session;
use Auth;

class addInvoiceController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $Invoice = new Invoice();
    	$data['property'] = Property::all();
        $data['auth'] = Auth::user()->UserName;
    	$data['country_list'] = Country::all();
    	$data['agent'] = Agent::all();
        $result_invoice = Invoice::max('id');
        
        if($result_invoice){
            $data['current_invoice'] = $result_invoice + 1;
        }
        else{
            $data['current_invoice'] = 1;
        }
        return view('Invoice.add_Invoice', $data);
    }
    public function get_property(Request $request){
    	$propety_id = $request->propety_id;
    	$obj_property = new Property();
    	$where = array('id' => $propety_id);
    	$result = $obj_property->with('zipcode_list','state_list','country_list','city_list','mangment_company')->where($where)->first();
    	return response()->json([
					'message'   => 'Form Data Updated Successfully',
					'data' => $result,
					'class_name'  => 'alert-success'
					]);
    }
    public function get_month_count(Request $request){
        $Invoice = new Invoice();
        $first_agent = $request->first_agent;
        $currentMonth = date('m');
        $userid = Auth::Id();
        $count_where = array('agent_id' => $first_agent, 'NoNumber' => 0);
        $agent_MO = $Invoice->whereRaw('MONTH(created_at) = ?',[$currentMonth])->where($count_where)->count();
        $data['count'] = $agent_MO + 1;
        $AgentTiersSetup = new AgentTiersSetup();
        $Tier = new Tier();
        $get_tier = $Tier::where('tierstart', '<=', $data['count'])->where('tierend', '>=', $data['count'])->first();
        $comm_where = array('agent_id' => $first_agent, 'user_id' => $userid, 'tier_id' => $get_tier['id']);
        $agent_commission = $AgentTiersSetup->with('Tier')->where($comm_where)->first();
        if($agent_commission['Tier']['tierstart'] <= $data['count'] && $agent_commission['Tier']['tierend'] >= $data['count']){
            $data['commission'] = $agent_commission['tierpercent'];
        }
        else{
            $data['commission'] = 0;
        }
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $data,
                    'class_name'  => 'alert-success'
                    ]);
    }
	
	public function store(Request $request){
		  $request->auto_pay=$request->auto_pay=='on'?1:0;
        $request->validate([
        'lease_term'=>'required',
        'Verifier'=>'required'
       // 'phone_no'=>'numeric|max:11'
        ]);

		// echo'<pre>';
		// print_r($request->input());
		// echo'</pre>';
		// die('heree');
         $user_id = Auth::user()->id;
        $agent_id = $request['agent_id'];
        if($agent_id)
        {
            $agent_id = $request['agent_id']; 
        }
        else{
            $get_agent_id = Agent::first();
            $agent_id = $get_agent_id['id'];
        }
        $where = array('id' => $agent_id);
        $invoice = new Invoice();
        $invoice->property_id = $request->property_id;
        $invoice->autopay = $request->auto_pay;
        $invoice->invoice_type = 1;
        $invoice->InvoiceMgmtCompID = $request->InvoiceMgmtCompId;
        $invoice->InvoiceMgmtCompName = $request->InvoiceMgmtCompName;
        $invoice->InvoiceHold  = $request->onhold;
        $invoice->Legal = $request->legal;
        $invoice->PrintNote = $request->print_billing_note;
       // $invoice->PrintNote = $request->not_advancable;
        $invoice->InvoiceMgmtAddress1 = $request->InvoiceMgmtAddress1;
        $invoice->InvoiceMgmtPhoneNo = $request->InvoiceMgmtPhoneNo;
        $invoice->TenantNames = $request->TenantNames;
        $invoice->TenantAddresss = $request->TenantAddresss;
        $invoice->TenantUnitNo = $request->TenantUnitNo;
        $invoice->TenantZipCodeId = $request->TenantZipCodeId;
        $invoice->invoice_date    =date('Y-m-d H:i:s',strtotime($request->invoice_date));
        $invoice->LeaseStartDate  =date('Y-m-d H:i:s',strtotime($request->LeaseStartDate));
        $invoice->Leaseterm = $request->lease_term;
        $invoice->Verifier = $request->Verifier;
        $invoice->InvMakerId = $request->InvMakerId;
        $invoice->Rent = $request->Rent;
        $invoice->Bonus = $request->Bonus;
        $invoice->NoNumber = $request->NoNumber;
        $invoice->AdjustCommission = $request->AdjustCommission;
        $invoice->FiftyFiftySplit = $request->FiftyFiftySplit;
        $invoice->NoPay = $request->NoPay;
        $invoice->VKPPercentage = $request->VKPPercentage;
        $invoice->FlatRate = $request->FlatRate;
        $invoice->AmountDueToVKP = $request->AmountDueToVKP;
        $invoice->FirstagentId = $request->FirstagentId;
        $invoice->MONOCount = $request->MONOCount;
        $invoice->FirstAgentCommPercentage = $request->FirstAgentCommPercentage;
        $invoice->MontlyAdvanceCount = $request->MontlyAdvanceCount;
       
        $invoice->DueToFirstAgent = $request->DueToFirstAgent;
        $invoice->VKPSplit = $request->VKPSplit;
        $invoice->SecondAgentID = $request->SecondAgentID;
        $invoice->DueToSecondAgent = $request->DueToSecondAgent;
        $invoice->GiftCard = $request->GiftCard;
        $invoice->paymentType =$request->paymentType;
        $invoice->PONO = $request->phone_no;
        $invoice->InvoiceNote = $request->InvoiceNote;
        $invoice->bill_country_id = $request->countrybill;
        $invoice->bill_state_id = $request->statebill;
        $invoice->bill_city_id = $request->citybill;
        $invoice->bill_zipcode_id = $request->zipcodebill;
        $invoice->tenant_country_id = $request->countrytenant;
        $invoice->tenant_state_id = $request->statetenant;
        $invoice->tenant_city_id = $request->citytenant;
        $invoice->tenant_zipcode_id = $request->TenantZipCodeId;
        $invoice->agent_id = $request->FirstagentId;
         $invoice->user_id = $user_id;
        $invoice->agent_id = $agent_id;
        
        $invoice->save();
        Session::flash('billingMsg','Invoice added sucessfully.');
        return redirect('invoice/index')->with('billingMsg','Invoice  added sucessfully.'); 
	} 
    public function get_prev_invoice(Request $request){
        $find_invoice = $request->find_invoice;
        $find_invoice_type = $request->find_invoice_type;
        $Invoice = new Invoice();
        $where = array('id' => $find_invoice, 'invoice_type' => $find_invoice_type);
        $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->where($where)->first();
        if($result['fee_holding_amount']){
           $fee_holding_data = unserialize($result['fee_holding_amount']); 
        }
        else{
           $fee_holding_data = ''; 
        }
        
        if($result){
             return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'fee_holding_data' => $fee_holding_data,
                    'status' => 'true',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);
        }
        else{
             return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'status' => 'false',
                    'data' => '',
                    'class_name'  => 'alert-success'
                    ]);
        }
       


    }
    public function search(){
        return view('Invoice.search_invoice');

    }
    public function get_search(Request $request){
        $search_from = $request->search_from;
        $search_to = $request->search_to;
        $Invoice = new Invoice();
        $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->whereBetween('id', [$search_from,$search_to])->get();
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);


    }
        public function get_search_first(Request $request){
        $search_from = $request->search_from;
        $Invoice = new Invoice();
        $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->where(['id' => $search_from])->get();
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);


    }
     public function email(Request $request)
    {
       
       $data = array('subject' => $request->subject,
                      'body' => $request->body);
       $email = $request->email;
       $subject = $request->subject;
       $body = $request->body;
   
      Mail::send(['text'=>'Invoice/mail'], $data, function($message) {
         $message->to('faisalnazir036@gmail.com', 'Tutorials Point')->subject
            ('$subject');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
        return back()->with('success','Thanks for Contacting Us');
        }
}//class end
