<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
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
use App\Models\Agents\Hsbillings;

class ViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	  public function __construct()
    {
       $this->middleware('auth');
    }
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
    public function view_approved_bill(){
		$feeapprovalsdata = FeeApproval::where('status','=','1')->with('apartmentbillings','hlbillings','hsbillings','users','invoices')->paginate(10); 
        // dd($feeapprovalsdata); 
        return view('agent/billviews/view_approved_bill',compact('feeapprovalsdata'));
    }
    public function viewapprovedbill(Request $request, $id){
        // $feeapprovalsdata = FeeApproval::where('status','=','1')->with('apartmentbillings','hlbillings','hsbillings','users','invoices')->get(); 
        $feeapprovalsdata = FeeApproval::where('status','=','1')->
              with('apartmentbillings','hlbillings','hsbillings','users','invoices','inv_property','inv_agent')->findorFail($id);  
              $invoicecount = Invoice::count();
        // dd($feeapprovalsdata); 
        return view('agent/billviews/viewapprovedbill',compact('feeapprovalsdata','invoicecount'));
    }
    

    public function auto_home_hold_fee()
    {
        $autoHomeHoldFees = Hlholdingfees::where('verifiedby','1')->with('hl_agent','hl_property','users')->paginate(10);
        $viewData['autoHomeHoldFees']=$autoHomeHoldFees;
        return view('agent/billviews/auto_home_hold_fee',$viewData);
    }
    public function get_auto_home_hold_fee(Request $request)
    {
        $feeholdData = Hlholdingfees::where('id',$request->feehold_id)->with('hl_agent','hl_property','users')->get();
        return json_encode($feeholdData);
    }
    public function view_pending_fee()
    {

	    $feeapprovalsdata = FeeApproval::where('status','=','0')->with('apartmentbillings','hlbillings','hsbillings','users','invoices')->paginate(10);  
        
		// echo'<pre>';
		// print_r($feeapprovalsdata[0]['hsbillings']);
		// echo'</pre>';
		// die; 
		return view('agent/billviews/view_pending_fee',compact('feeapprovalsdata')); 
    }
    public function get_view_pending_fee(Request $request)
    {
        $feeapprovalsdata = FeeApproval::where('id',$request->fee_pending_id)->with('apartmentbillings','hlbillings','hsbillings','users','invoices')->get();
        //echo "<pre>"; print_r($feeapprovalsdata); exit('okiii');
        return json_encode($feeapprovalsdata);
    }
    public function view_rejected_bill(){

		$feeapprovalsdata = FeeApproval::where('status','=','2')
        ->with('apartmentbillings','hlbillings','hsbillings','users','invoices')
        ->paginate(10);  
        // dd($feeapprovalsdata);
        return view('agent.billviews.view_rejected_bill',compact('feeapprovalsdata'));
    }
     public function viewrejectedbill($id){
        $feeapprovalsdata = FeeApproval::where('status','=','2')->with('apartmentbillings','hlbillings','hsbillings','users','invoices')->findorFail($id); 
         $invoicecount = Invoice::count();
        return view('agent.billviews.viewrejectedbill',compact('feeapprovalsdata','invoicecount'));
    }
    public function rejectedbillstore(Request $request)
    {
        $input=$request->all();
         $request->validate([
            // 'agentcomp' => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'secondage'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'sellingprice'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'buyerbroke'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'referalamount'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'commper'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'totaldueto'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'duetofirst'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'duetosecond'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'buyerbroke'=>'required'
                ]);
        $hsbillings =  new Hsbillings();
       $hsbillings->homesaleno = $request->homesaleno;
        $hsbillings->agentcomp = $request->agentcomp;
        $hsbillings->secondage = $request->secondage;
        $hsbillings->percentagesplit = $request->percentagesplit;
       // $hsbillings->listingagent = $request->listingagent;
        //$hsbillings->leesingagent = $request->leesingagent;
        $hsbillings->contractdate = date('Y-m-d',strtotime($request->contractdate)); 
        $hsbillings->closedofesc = date('Y-m-d',strtotime($request->closedofesc));
        $hsbillings->sellingprice = $request->sellingprice;
        $hsbillings->escrowno = $request->escrowno;
        $hsbillings->titlecomp = $request->titlecomp;
        $hsbillings->titlecompany2 = $request->titlecompany2;
        $hsbillings->totaldueto = $request->totaldueto;
       //$hsbillings->duetofirst = $request->duetofirst;
        //$hsbillings->duetosecond = $request->duetosecond;
        $hsbillings->giftcard = $request->giftcard;
        $hsbillings->pono = $request->pono;
        $hsbillings->cobrokeco = $request->cobrokeco;
        $hsbillings->buyerbroke = $request->buyerbroke;
        $hsbillings->agentname = $request->agentname;
        $hsbillings->referalamount = $request->referalamount;
       // $hsbillings->companyname = $request->companyname;
        $hsbillings->buyername = $request->buyername;
        $hsbillings->buyerphone = $request->buyerphone;
        $hsbillings->sellerphone = $request->sellerphone;
        $hsbillings->propertyad = $request->propertyad;
        $hsbillings->propertystate = $request->propertystate;
        $hsbillings->propertycity = $request->propertycity;
        $hsbillings->propertyzip = $request->propertyzip;
        $hsbillings->agentnotes = $request->agentnotes;

         if($request->hasfile('agent_image'))
        {
            $file=$request->file('agent_image');
            //echo $fileName=$file->getClientOriginalExtension();
            $fileName=$request->file('agent_image')->getClientOriginalName();
            $file->move(public_path('agentfile'), $fileName);

            $hsbillings->agent_image = '/public/agentfile/'.$fileName;  
        }

        $hsbillings->save();
        //dd($hsbillings);

         $hs=$hsbillings->id;
         $status=0;
       $feeapprovals = new FeeApproval;
       $feeapprovals->hsbilling_id = $hs;
       $feeapprovals->status= $status;
       $feeapprovals->save();
       

        Session::flash('billingMsg','Billing added sucessfully.');
       return redirect()->back()->with('success', 'Bill Restore Successfully!');
        // return view('agent.billviews.view_rejected_bill')->with('billingMsg','Billing added sucessfully.'); 
    }
}
