<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Agents\Homeleasebillings;
use App\Models\Properties\Property;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\Agents\Agent;
use App\Models\Admin\FeeApprovals\FeeApproval;

class HlbillingsController extends Controller
{
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
		$input=$request->all();
		// echo'<pre>';
		// print_r($input);
		// echo'</pre>';
		// echo date('Y-m-d',strtotime($request->leesestart));
		// die('inn');
        //
		$request->validate([
            'rentamount'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'leeseterms'=>'required'
                ]);
        $hlbillings = new Homeleasebillings();
        $hlbillings->agentcomm = $request->agentcomm;
        $hlbillings->secondage = $request->secondage;
        $hlbillings->rentamount = $request->rentamount;
        $hlbillings->fiftyfiftysplit = $request->fiftyfiftysplit;
        $hlbillings->listingagent = $request->listingagent;
        $hlbillings->leesingagent = $request->leesingagent;
        $hlbillings->rentamount = $request->rentamount;
        $hlbillings->leeseterms = $request->leeseterms;
        $hlbillings->commission = $request->commission;
        $hlbillings->flatrate = $request->flatrate;
        $hlbillings->bonus = $request->bonus;
        $hlbillings->duetofirst = $request->duetofirst;
        $hlbillings->duetosec = $request->duetosec;
        $hlbillings->totaldueto = $request->totaldueto;
        $hlbillings->giftcard = $request->giftcard;
        $hlbillings->pono = $request->pono;

        $hlbillings->verifiedby = $request->verifiedby;
        $hlbillings->companyn = $request->companyn;
        $hlbillings->buyerbroke = $request->buyerbroke;
        $hlbillings->agentname = $request->agentname;
        $hlbillings->referralamount = $request->referralamount;
        $hlbillings->companyadd = $request->companyadd;
        $hlbillings->property_id = $request->property_id;
        $hlbillings->companycity = $request->companycity;
        $hlbillings->companystate = $request->companystate;
        $hlbillings->companyzip = $request->companyzip;
        $hlbillings->tenantname = $request->tenantname;
        $hlbillings->tenantadd = $request->tenantadd;
        $hlbillings->tenantunit = $request->tenantunit;
        $hlbillings->tenantstate = $request->tenantstate;
        $hlbillings->tenantcity = $request->tenantcity;
        $hlbillings->tanantzip = $request->tanantzip;
        $hlbillings->leesestart = date('Y-m-d H:i:s',strtotime($request->leesestart));
        $hlbillings->phonenumber = $request->phonenumber;
        $hlbillings->agentnotes = $request->agentnotes;
		
		$hlbillings->slowpay = $request->slowpay;
		$hlbillings->notadvancable = $request->notadvancable;
		$hlbillings->donotplace = $request->donotplace;
		$hlbillings->offline = $request->offline;
		$hlbillings->onhold = $request->onhold;
		$hlbillings->legal = $request->legal;
		$hlbillings->guaranteecontract = $request->guaranteecontract;
		$hlbillings->autopay = $request->autopay;
		$hlbillings->nocontract = $request->nocontract;
		
        if($request->hasfile('fileattachement'))
        {
            $file=$request->file('fileattachement');
            //echo $fileName=$file->getClientOriginalExtension();
            $fileName=$request->file('fileattachement')->getClientOriginalName();
            $file->move(public_path('agentfile'), $fileName);

            $hlbillings->file_attachment = '/public/agentfile/'.$fileName;  
        }
       $hlbillings->save();
       $hl=$hlbillings->id;
       $feeapprovals = new FeeApproval;
       $feeapprovals->hlbilling_id = $hl;
       $feeapprovals->save();

        Session::flash('billingMsg','Lease Billing added sucessfully.');
        return redirect('agents/homeleasebilling')->with('billingMsg','Lease Billing added sucessfully.');
    }
  public function fetchProperty(Request $request){
	  //$input=$request::all();
		$proptery=New Property;
		$propertyId=$request->input('propertyId');
		$propteryData=Property::find($propertyId);
		$country_id=$propteryData['country_id'];
		$countryData=Country::find($country_id);

		$state_id=$propteryData['state_id'];
		$stateData=State::find($country_id);
		$city_id=$propteryData['city_id'];
		$cityData=City::find($country_id);
		$zipcode_id=$propteryData['zipcode_id'];
		$zipCodeData=ZipCode::find($country_id);
	
		$propertyId=$request->input('propertyId');
    	$where = array('id' => $propertyId);
    	$result = $proptery->with('zipcode_list','state_list','country_list','city_list','invoice','mangment_company')->where($where)->first();
		$result['countryname'] =$countryData['countryname'];
		$result['statename']   =$stateData['statename'];
		$result['cityname']    =$cityData['cityname'];
		$result['zipcode']     =$zipCodeData['zipcode'];
		$result['propertyAd']  =$propteryData['propertyAd']; 
		
		$autopayData='';
		if(!$result['invoice']->isEmpty()){  
		$autopayData = view('agent.homelease.hlautopay',['result'=>$result])->render(); 
		}
		// echo'<pre>';
		// print_r($result['invoice']);
		// die;
		$result['autPayData']=$autopayData;
		return response()->json([
					'message'   => 'Form Data Updated Successfully',
					'data' => $result,
					
					'htmldata'=>$autopayData,
					
					'class_name'  => 'alert-success'
					]);
    
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
}
