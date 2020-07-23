<?php

namespace App\Http\Controllers\Admin\AdminManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Response;
use App\Models\Invoices\Invoice;
use App\Models\Properties\Property;
use App\Models\Countries\Country;
use App\Models\Agents\Agent;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use Validator;
use App\Models\Admin\FeeApprovals\FeeApproval;
use App\User;
use App\Models\Agents\Hlholdingfees;
use DB;
use App\Models\Agent\AppartmentBilling\AppartmentBilling;
use App\Models\Agents\Homeleasebillings;
use App\Models\Agents\Hsbillings;

class AdminManagementController extends Controller
{
	public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 
	public function manage_invoices(){   
		 $Invoice=New Invoice();
		 $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users')->paginate(10);
		 $viewData['result']=$result;
        return view('admin/admin_management/manage_invoices',$viewData); 
    }
    public function manage_payments(){
        return view('admin/admin_management/manage_payments');
    }  
    public function approval_screen(){
        return view('admin/admin_management/approval_screen'); 
    }
	public function feeRecieptScreen()
	{
        $feeReciepts = Hlholdingfees::where('verifiedby','0')->with('hl_agent','hl_property','users')->paginate(10);
        $viewData['feeReciepts']=$feeReciepts;
        return view('admin/admin_management/feeRecieptScreen',$viewData); 
    }
	public function approveHoldingfee(Request $request){
		$Hlholdingfees=New Hlholdingfees();
		$id=$request->post('id');
		$status=$request->post('status');
		$Hlholdingfees=$Hlholdingfees->find($id);
		if($Hlholdingfees) {
		$Hlholdingfees->verifiedby =$status;
		$Hlholdingfees->save();
		}
			return response()->json([
					'message'   => 'Form Data Updated Successfully',
					'data' => 'success'
					]);
	} 
      public function feeapproval(Request $request){
        $approvalfee = New FeeApproval();
        $id=$request->post('id');
        $status=$request->post('status');
        $approvalfee=$approvalfee->find($id);
        if($approvalfee) {
        $approvalfee->status =$status;
        $approvalfee->save();
        }
            return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => 'success'
                    ]);
    } 
	
    public function store_feeRecieptRCVD(Request $request)
    {
        exit();
        foreach ($request->feeRecieptRCVD as $value) {
            $where = array('country_id' => $value);
        }
    }
    public function feeholdScreen()
    {
        $feeholds = Hlholdingfees::where('verifiedby','!=','0')->with('hl_agent','hl_property','users')->paginate(10);
        $viewData['feeholds']=$feeholds;
        return view('admin/admin_management/feeholdScreen',$viewData); 
    } 
    public function print_FeeRecieptScreen()
    {
        $feeReciepts = Hlholdingfees::where('verifiedby','0')->with('hl_agent','hl_property','users')->paginate(10);
        $viewData['feeReciepts']=$feeReciepts;
        return view('admin/admin_management/print_feeRecieptScreen',$viewData);
    }
    public function getFeeholdScreen(Request $request)
    {
        $feeholdData = Hlholdingfees::where('id',$request->feehold_id)->with('hl_agent','hl_property','users')->get();
        return json_encode($feeholdData);
    }
       public function admin_approval(Request $request){


        $Invoice = New Invoice();
        $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_agent','feeapprovals')
        ->paginate(10);
       // dd($result);
        $viewData['result']=$result;
       $user_id =  Auth::user()->id;
        $invoice_id = $request['invoice_id'];
        if($invoice_id){
        $invoice_id = $request['invoice_id'];
        }
        else{
            $get_invoice_id = Invoice::first();
            $invoice_id = $get_invoice_id['id'];
        }
        $where = array('id' => $invoice_id);
        $data['get_invoice_info'] = Invoice::with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_agent')
        ->where($where)->first();
              // dd($approvalfee);    
              $feeapprovalsdata = FeeApproval::with('apartmentbillings','hlbillings','hsbillings','users','invoices','inv_property','inv_agent')->where('invoicestatus',0)->paginate(15);   
               $data['feeapprovalsdata'] = $feeapprovalsdata; 
               //dd($feeapprovalsdata);
        $request->validate(
            [
            'approved' => 'sometimes',
            'rejected' => 'sometimes',
            ]);
        //$feeapprovals =  FeeApproval::find(Auth::user()->id);
        //$feeapprovals->status = $request->get('status');
        //$feeapprovals->save();
        // dd($result);
     
        return view('admin/admin_management/admin_approval',$viewData,$data); 
    }
     public function admin_approval_invoice(Request $request){
      
        $viewData['billingno'] = $billingno;
        $Invoice = New Invoice();
        $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_agent')->get();
        $viewData['result']=$result;
        $get_agents = Agent::all();
         // dd($get_agents);

        $request->validate(
            [
            'approved' => 'sometimes',
            'rejected' => 'sometimes',
            ]);
        $feeapprovals =  new Invoice();
        $feeapprovals->approved = $request->get('approved');
        $feeapprovals->rejected = $request->get('rejected');
        $feeapprovals->save();
        // dd($result);
     
        return view('admin/admin_management/admin_approval',$viewData,$data,compact('feeapprovals','billingno','billingrec')); 
    }
	 public function deposit(){
        return view('admin/admin_management/manage_deposit'); 
    }
    public function approvalview(Request $request)
    {
          $Invoice = New Invoice();
        $result = $Invoice->with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_agent','feeapprovals')
        ->paginate(10);
       // dd($result);
        $viewData['result']=$result;
       $user_id =  Auth::user()->id;
        $invoice_id = $request['invoice_id'];
        if($invoice_id){
        $invoice_id = $request['invoice_id'];
        }
        else{
            $get_invoice_id = Invoice::first();
            $invoice_id = $get_invoice_id['id'];
        }
        $where = array('id' => $invoice_id);
        $data['get_invoice_info'] = Invoice::with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_agent')
        ->where($where)->first();
              // dd($approvalfee);    
              $feeapprovalsdata = FeeApproval::with('apartmentbillings','hlbillings','hsbillings','users','invoices','inv_property','inv_agent')->get();   
               $data['feeapprovalsdata'] = $feeapprovalsdata; 
         
     
        // return view('admin_approval/view',$viewData,$data,compact('feeapprovals','billingno','billingrec')); 
         return view('admin.admin_management.admin_approval_view',$viewData,$data);
    }
       public function approvaledit(Request $request, $id)
        {
        
           $hsbillingrecords = Hsbillings::max('id');
            $hsbillingid = $hsbillingrecords + 1;

            //apartmenttotalrecors

            $apbillingrecords = AppartmentBilling::count();
            $hlbillingrecords = Hsbillings::count();
            $invoicecount = Invoice::count();
             $lastinvoice = DB::table('invoices')->latest('id')->first();

    $feeapprovalsdata = FeeApproval::with('apartmentbillings','hlbillings','hsbillings','users','invoices','inv_property','inv_agent')->findorFail($id);

        $statData=State::find($feeapprovalsdata['hsbillings']['propertystate']);
         $citydata=City::find($feeapprovalsdata['hsbillings']['propertycity']);
          $zipdata=ZipCode::find($feeapprovalsdata['hsbillings']['propertyzip']);
          $agentid = Agent::find($feeapprovalsdata['apartmentbillings']
                ['agent_id']);
          $hlagentid = Agent::find($feeapprovalsdata['hlbillings']
                ['agent_id']);
          $mgmtcompname = Property::find($feeapprovalsdata['inv_property']);

                //dd($hlagentid);
               $data['feeapprovalsdata'] = $feeapprovalsdata; 
                //dd($feeapprovalsdata);

                // echo "<pre>";
                // print_r($zipdata);
                // exit(1);

     
         //dd($feeapprovalsdata);

          // $agents = Agent::find($id);
          // $offices = OfficeManager::find($id);
          return view('admin.admin_management.admin_approval_view',compact('feeapprovalsdata','agentid','hsbillingid','hlbillingrecords','statData','apbillingrecords','mgmtcompname','citydata','zipdata','hlagentid','invoicecount','lastinvoice'),$data);

        }
        public function approvalstore(Request $request,$id)
        {


           //dd($request->billType);

// $request->auto_pay=$request->auto_pay=='on'?1:0;
//         $request->validate([
//         'lease_term'=>'required',
//         'Verifier'=>'required',
//         'checkboxesname' => 'sometimes',
//        // 'phone_no'=>'numeric|max:11'
//         ]);

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
       // $arrstring = implode(",", $request->checkboxesname);
        //$inputval['checkboxesname'] = $arrstring;  


        $invoice = new Invoice();
        // $invoice->property_id = $request->property_id;
        $invoice->autopay = $request->autopay;
        // $invoice->invoice_type = 1;

        $invoice->billType = $request->billType;     
       // $invoice->InvoiceMgmtCompID = $request->InvoiceMgmtCompId;
        $invoice->InvoiceMgmtCompName = $request->InvoiceMgmtCompName;
       // $invoice->InvoiceHold  = $request->onhold;
       // $invoice->Legal = $request->legal;
       // $invoice->PrintNote = $request->print_billing_note;
       // $invoice->PrintNote = $request->not_advancable;
        $invoice->InvoiceMgmtAddress1 = $request->InvoiceMgmtAddress1;
        $invoice->InvoiceMgmtPhoneNo = $request->InvoiceMgmtPhoneNo;
        $invoice->TenantNames = $request->TenantNames;
        $invoice->TenantAddresss = $request->TenantAddresss;
        $invoice->TenantUnitNo = $request->TenantUnitNo;
      //  $invoice->TenantZipCodeId = $request->TenantZipCodeId;
       // $invoice->invoice_date    =date('Y-m-d H:i:s',strtotime($request->invoice_date));
        $invoice->LeaseStartDate  =date('Y-m-d H:i:s',strtotime($request->LeaseStartDate));
        $invoice->Leaseterm = $request->lease_term;
        $invoice->Verifier = $request->Verifier;
       // $invoice->InvMakerId = $request->InvMakerId;
        $invoice->Rent = $request->Rent;
        $invoice->Bonus = $request->Bonus;
        //$invoice->NoNumber = $request->NoNumber;
        $invoice->AdjustCommission = $request->AdjustCommission;
        $invoice->FiftyFiftySplit = $request->FiftyFiftySplit;
        $invoice->NoPay = $request->NoPay;
        $invoice->VKPPercentage = $request->VKPPercentage;
        $invoice->FlatRate = $request->FlatRate;
        $invoice->AmountDueToVKP = $request->AmountDueToVKP;
        //$invoice->FirstagentId = $request->FirstagentId;
        //$invoice->MONOCount = $request->MONOCount;
      $invoice->FirstAgentCommPercentage=$request->FirstAgentCommPercentage;
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
        $invoice->secondagent = $request->secondagent;
        $invoice->sellingprice = $request->sellingprice;
        $invoice->hscompanyname = $request->hscompanyname;
        $invoice->hlcommunityname = $request->hlcommunityname;
        $invoice->hlbuyerbroke = $request->hlbuyerbroke;
        $invoice->hlreferalamount = $request->hlreferalamount;
        $invoice->buyername = $request->buyername;
        $invoice->sellername = $request->sellername;
       // $invoice->CheckCreatedProperty = $inputval['checkboxesname'];
        $invoice->apartmentbilling_id = $request->apartmentbilling_id;
        $invoice->hlbilling_id = $request->hlbilling_id;
        $invoice->hsbilling_id = $request->hsbilling_id;
        $invoice->save();



        
        $feeapprovals = FeeApproval::findorFail($id);
        $feeapprovals->invoicestatus = 1;
        $feeapprovals->save();
        //dd($feeapprovals);
        return redirect()->back()->with('success','invoice created ');
        // return view('admin.admin_management.admin_approval_view',compact('feeapprovals'),$viewData,$data)->with('success','User Updated Successfully');
    }
        
    public function detial_feehold(Request $request,$id){

       
       $where = array('id' => $id);
       // $get_invoice_info = Invoice::with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_agent')
       //  ->where($where)->first();
        $get_invoice_info = FeeApproval::with('apartmentbillings','hlbillings','hsbillings','users','invoices','inv_property','inv_agent')->where($where)->first();
        // dd($get_invoice_info);
      
        return response()->json($get_invoice_info);
    }
    public function invstore(Request $request ,$id)
    {
      
         
         $invoice = FeeApproval::find($id);
         
        $invoice->status = 3;
        $invoice->agentnotes = $request->agent_comment;
        $invoice->adminnotes = $request->admin_comment;
        // $invoice->invoice_type = null;
        // $invoice->FirstagentId = $request->firstagentid;
        // $invoice->InvoiceHold  = $request->onhold;
      //   $invoice->FirstAgentCommPercentage = $request->agentcommision;
      //   $invoice->SecondAgentID = $request->secondagentid;
      // $invoice->FiftyFiftySplit = $request->CheckboxGroup1;
      // $invoice->Rent = $request->rent;
   
      $invoice->approvaldate = $request->todaydate;

 

       
        
        $invoice->save();
 
        // return Response::json(array('success' => true, 'last_insert_id' => $invoice->id), 200);
       return Response::json(array('success' => true, 'last_insert_id' => $invoice->id ,'message'=>'Invoice added sucessfully'), 200);
    }
     public function minvoiceedit(Request $request ,$id)
    {

                        if ($request->ajax()) {
                              $number=$request->searchnumber;

                                
                                 # code...
                                      $result = Invoice::with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_mangment_cm','inv_tenantcountry','inv_tenatcity','inv_tenantstate','inv_tenantzipcode')->where('id','LIKE','%'.$number."%")->get();

                                      // if (isset($result)) {
                                      // $result->where(function ($query) use ($number) {
                                      // $query->where('id','LIKE','%'.$number."%")->get();

                                      // });

                                       

                                      // }
                                       
                             
                            }








          $property=Property::pluck('propertyName','id');
          $country=Country::pluck('countryname','id');
          $state=State::pluck('statename','id');
          $city=City::pluck('cityname','id');
          // $property=Property::all();
 $agents  = Agent::pluck('agentdisplayname','id');
 
         $result = Invoice::with('inv_property','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list','users','inv_mangment_cm','inv_tenantcountry','inv_tenatcity','inv_tenantstate','inv_tenantzipcode')->where('id',$id)->get();
         $mgtcountry = DB::table('countries')->select('countryname')->where('id', $result[0]['inv_mangment_cm']['country_id'])->first(); 
             
              $mgtstate = DB::table('states')->select('statename')->where('id', $result[0]['inv_mangment_cm']['state_id'])->first();

              $mgtcity = DB::table('cities')->select('cityname')->where('id', $result[0]['inv_mangment_cm']['city_id'])->first();

              $mgtzipcode = DB::table('zipcodes')->select('zipcode')->where('id', $result[0]['inv_mangment_cm']['zip_id'])->first();
                if (isset($mgtcountry)) {
              $result[0]['mgtcountryname']=$mgtcountry->countryname;
                                               }                       
               if (isset($mgtstate)) {
                   $result[0]['mgtstatename']=$mgtstate->statename; 
               }
               if (isset($mgtcity)) {
                  $result[0]['mgtcityname']=$mgtcity->cityname;  
               }
               if (isset($mgtzipcode)) {
                   $result[0]['mgtzipcode']=$mgtzipcode->zipcode; 
               }
             $result= $result[0];
           // dd($result);
        return view('admin.admin_management.admin_manageinvoice_popup',compact('result','property','country','state','city','agents'));
    }
     public function getPropertyList(Request $request)
        {
          $property_id =$request->property_id;
          // dd($property_id);
          $result = Property::with('mangment_company')->where('id',$property_id)->get();
// dd($result[0]['mangment_company']['mgt_company']);
        
        $mgtcountry = DB::table('countries')->select('countryname')->where('id', $result[0]['mangment_company']['country_id'])->first(); 
         $mgtstate = DB::table('states')->select('statename')->where('id', $result[0]['mangment_company']['state_id'])->first();
         $mgtcity = DB::table('cities')->select('cityname')->where('id', $result[0]['mangment_company']['city_id'])->first();

              $mgtzipcode = DB::table('zipcodes')->select('zipcode')->where('id', $result[0]['mangment_company']['zip_id'])->first();
        
         if (isset($mgtcountry)) {
              $result[0]['mgtcountryname']=$mgtcountry->countryname;
                                               } 
                                               if (isset($mgtstate)) {
                   $result[0]['mgtstatename']=$mgtstate->statename; 
               }
               if (isset($mgtcity)) {
                  $result[0]['mgtcityname']=$mgtcity->cityname;  
               }
               if (isset($mgtzipcode)) {
                   $result[0]['mgtzipcode']=$mgtzipcode->zipcode; 
               } 
              

            // $states = company_managment::where("id",$country_id)->pluck("statename","id");
            return response()->json($result[0]);
        }
        public function saveinvoice(Request $request,$id)
    {
            $property_id = $request->property_id;
            $mgt_propertyid = $request->mgt_propertyid;
 $firstagent = $request->firstagent;
 
$invoice = Invoice::find($id);

// dd($invoice);
        $invoice = Invoice::where('id',$id)->first();
        // dd($invoice);
        $invoice->property_id = $request->input('property_id');
        $invoice->InvoiceMgmtCompID = $mgt_propertyid;
        $invoice->TenantNames = $request->Tenant;
        $invoice->TenantAddresss = $request->Address;
        $invoice->TenantUnitNo = $request->Unit;
        $invoice->tenant_country_id = $request->t_country;
        $invoice->tenant_state_id = $request->t_state;
        $invoice->tenant_city_id = $request->t_city;
        $invoice->tenant_zipcode_id = $request->t_zip;
        $invoice->FirstagentId = $firstagent;
        $invoice->SecondAgentID = $request->second_agent;
        $invoice->save();

        
return redirect()->back();

    }
    public function billform(Request $request ,$id)
        {
           $result = Invoice::with('apartmentbillings','hlbillings','hsbillings')->where('id',$id)->get();
           // dd($result);
          return view('admin.admin_management.admin_billform_popup',compact('result'));

        }
        public function viewdata(Request $request ,$id)
        {



          if ($request->invid) {
           $inv_view = Invoice::where('id',$request->invid)->get();
            
           return response()->json([
                    'message'   => 'Form Data View',
                    'data' => $inv_view,
                    'class_name'  => 'alert-success'
                    ]);
          }




         $inv_data['agentdisplayname']=0;
          $inv_data=Invoice::with('inv_property','inv_agent')->where('id',$id)->get();

          // return response()->json($inv_data);
           if ($inv_data[0]['inv_agent']!=NULL ) {
              $agentdisplayname=$inv_data[0]['inv_agent']['agentdisplayname'];
           }else{
              $agentdisplayname=NULL;
           }
           $inv_data['agentdisplayname']=$agentdisplayname;
//            echo'<pre>';
//            print_r($inv_data['agentdisplayname']);
// die;          
          // dd($inv_data);
          return response()->json([
                    'message'   => 'Form Data Add',
                    'data' => $inv_data,
                    'class_name'  => 'alert-success'
                    ]);

        }

       public  function action(Request $request)
    {
      if($request->ajax())
      {
        if($request->action == 'edit')
        {
          $data = array(
            'AmountMO'  =>  $request->AmountMO
          );
      $invoiceediting  =  DB::table('invoices')
            ->where('id', $request->id)
            ->update($data);
            echo "<pre>";
            print_r('invoiceediting');
        }
       
        return response()->json($request);
      }
    }

}
