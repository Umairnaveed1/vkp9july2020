<?php

namespace App\Http\Controllers\Admin\AutoPay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agents\Agent;
use App\Models\Properties\Property;
use App\User;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use Auth;
use Session;
use Illuminate\Support\Facades\Input; 
//use App\Models\Company_Managment\company_managment;
use App\Models\Invoices\Invoice;
use App\Models\AgentRulesSetups\AgentRuleSetup;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\Rules\Rule;
use App\Models\Tiers\Tier;
use App\Models\Agents\Hlholdingfees;
use Validator;



class AutoPayController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function create()
    {
        //die('asdas');
    	/*	$data['get_property_data'] = Property::with('mangment_company')->pluck('propertyName','id');
    	$data['country']  = Country::pluck('countrysh', 'id');
        // $company_managment = company_managment::pluck("mgt_company","id");
         $company_managment = company_managment::where('adentcompany_id' ,'=', NULL)
    
       ->pluck("mgt_company","id");

       $data['get_agent_data'] = Agent::pluck('agentfirstname','id');*/
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

    	return view('admin.autopay.create', $data);
    }
 public function store(Request $request){
    $request->auto_pay=$request->auto_pay=='on'?1:0;
        $request->validate([
        'lease_term'=>'required',
        'Verifier'=>'required',
		'phone_no'=>'numeric'
		
        ]);
        if($request->fee_holding_mono && $request->fee_holding_AmountMO){
        $fee_holding_mono = $request->fee_holding_mono;
        $fee_holding_AmountMO = $request->fee_holding_AmountMO;
         $fee_holding_array = [];
         foreach ($fee_holding_mono as $keys => $fee_mono_value) {
            foreach ($fee_holding_AmountMO as $key => $fee_amount_value) {
                $fee_holding_array[$fee_mono_value] = $fee_amount_value;
            }
         }
     }
     else{
        $fee_holding_array = '';
     }
        $user_id = Auth::user()->id; 
        $invoice = new Invoice();
        if($request->collected_amount_count){
$invoice->APPaymentCollected = $request->collected_amount_count;
        }
        else{
            
        $invoice->APPaymentCollected = $request->APPaymentCollected;
        }
        $invoice->property_id = $request->property_id;
        $invoice->autopay = $request->auto_pay;
        $invoice->invoice_type = 2;
        $invoice->InvoiceMgmtCompID = $request->InvoiceMgmtCompId;
        $invoice->InvoiceMgmtCompName = $request->InvoiceMgmtCompName;
        $invoice->InvoiceHold = $request->onhold;
        $invoice->Legal = $request->legal;
        $invoice->PrintNote = $request->print_billing_note;
        $invoice->InvoiceMgmtCompID = $request->InvoiceMgmtCompID;
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
        $invoice->billType =$request->billType; 
        $invoice->PONO = $request->phone_no;
        $invoice->InvoiceNote = $request->InvoiceNote;
        $invoice->APAmountDueToProperty = $request->APAmountDueToProperty;
        $invoice->MONO = $request->MONO;
        $invoice->AmountMO = $request->AmountMO;
        $invoice->balance = $request->balance; 
		$invoice->bill_country_id = $request->bill_country_id;
		$invoice->bill_state_id = $request->bill_state_id;
		$invoice->bill_city_id = $request->bill_city_id;
		$invoice->bill_zipcode_id = $request->bill_zipcode_id;
		$invoice->tenant_country_id = $request->tenant_country_id;
		$invoice->tenant_state_id = $request->tenant_state_id;
		$invoice->tenant_city_id = $request->tenant_city_id;
		$invoice->tenant_zipcode_id = $request->tenant_zipcode_id;
        $invoice->APBuyerBrokerPercentage = $request->buyer_broker;
        $invoice->APReferalAmount = $request->referral_amount;
        $invoice->APAgentName = $request->company_name;
        $invoice->APCompanyName = $request->home_lease_agent; 
        $invoice->APcountry_id = $request->home_lease_country;
        $invoice->APCity = $request->home_lease_city;
        $invoice->APstate_id = $request->home_lease_state;
        $invoice->APzipcode = $request->home_lease_zipcode;
        $invoice->APAmountDueToProperty = $request->APAmountDueToProperty;
        $invoice->balance = $request->balance;
        $invoice->agent_id = $request->FirstagentId;
        $invoice->user_id = $user_id;
        $invoice->fee_holding_amount = serialize($fee_holding_array);
        $invoice->save();
		Session::flash('billingMsg','Autopay Billing added sucessfully.');
        return redirect('autopay/create')->with('billingMsg','Autopay Billing added sucessfully.'); 

 } 
 public function apply_holding_fee(Request $request){
    $first_agent = $request->first_agent;
    $property_id = $request->property_id;
    $Hlholdingfees = new Hlholdingfees();
    $where = array('agent_id' => $first_agent, 'property_id' => $property_id);
    $result = $Hlholdingfees->where($where)->get();
        return response()->json([
                    'message'   => 'Agent Notes Deleted Successfully',
                    'data'  => $result
                    ]);
 }
  public function holding_fee_get(Request $request){
    $append_fee = $request->append_fee;
    $Hlholdingfees = new Hlholdingfees();
    $where = array('id' => $append_fee);
    $result = $Hlholdingfees->where($where)->first();
        return response()->json([
                    'message'   => 'Agent Notes Deleted Successfully',
                    'data'  => $result
                    ]);
 }
public function NoPay(Request $request){
    $NoPay = $request->NoPay;
    $append_fee = $request->append_fee;
    $Invoice = new Invoice();
    $where = array('id' => $append_fee);
    $data = array('NoNumber' => $NoPay);
    $result = $Invoice->where($where)->update($data);
        return response()->json([
                    'message'   => 'Agent Notes Deleted Successfully'
                    ]);
}
}//end class

