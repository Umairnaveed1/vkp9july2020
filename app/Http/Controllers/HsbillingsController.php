<?php

namespace App\Http\Controllers;

use App\Models\Agents\Hsbillings;
use Illuminate\Http\Request;
use Session;
use App\Models\Company_Managment\company_managment;
use App\Models\Admin\FeeApprovals\FeeApproval;

class HsbillingsController extends Controller
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
		 $request->validate([
            'agentcomp' => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            'secondage'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            'sellingprice'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'buyerbroke'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'referalamount'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'commper'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            'totaldueto'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            'duetofirst'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            'duetosecond'=>'regex:/^([0-9\s\-\+\(\)]*)$/',
            'buyerbroke'=>'regex:/^([0-9\s\-\+\(\)]*)$/'
                ]);
        $hsbillings = new Hsbillings();
        $hsbillings->homesaleno = $request->homesaleno;
        $hsbillings->agentcomp = $request->agentcomp;
        $hsbillings->secondage = $request->secondage;
        $hsbillings->percentagesplit = $request->percentagesplit;
        $hsbillings->listingagent = $request->listingagent;
        $hsbillings->leesingagent = $request->leesingagent;
        
        $hsbillings->contractdate = date('Y-m-d',strtotime($request->contractdate)); 
        $hsbillings->closedofesc = date('Y-m-d',strtotime($request->closedofesc));
        $hsbillings->sellingprice = $request->sellingprice;
        $hsbillings->escrowno = $request->escrowno;
        $hsbillings->titlecomp = $request->titlecomp;
        $hsbillings->titlecompany2 = $request->titlecompany2;
        $hsbillings->totaldueto = $request->totaldueto;
        $hsbillings->duetofirst = $request->duetofirst;
        $hsbillings->duetosecond = $request->duetosecond;
        $hsbillings->giftcard = $request->giftcard;

        $hsbillings->pono = $request->pono;
        $hsbillings->cobrokeco = $request->cobrokeco;
        $hsbillings->buyerbroke = $request->buyerbroke;
        $hsbillings->agentname = $request->agentname;
        $hsbillings->referalamount = $request->referalamount;
        $hsbillings->companyname = $request->companyname;
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
         $hs=$hsbillings->id;
       $feeapprovals = new FeeApproval;
       $feeapprovals->hsbilling_id = $hs;
       $feeapprovals->save();
		Session::flash('billingMsg','Billing added sucessfully.');
        return redirect('agents/homesalebilling')->with('billingMsg','Billing added sucessfully.'); 
        //
    } 
	
	public function fetchCompanyDetails(Request $request){
		$company_id=$request->input('company_id');
		$where = array('id' => $company_id);
		$companyData=company_managment::with('city_list','country_list','state_list','zipcode_list')->where($where)->first();
			return response()->json([
					'message'   => 'Data Retrieved Successfully',
					'data' => $companyData,
					'class_name'  => 'alert-success'
					]);
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agents\hsbillings  $hsbillings
     * @return \Illuminate\Http\Response
     */
    public function show(hsbillings $hsbillings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agents\hsbillings  $hsbillings
     * @return \Illuminate\Http\Response
     */
    public function edit(hsbillings $hsbillings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agents\hsbillings  $hsbillings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hsbillings $hsbillings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agents\hsbillings  $hsbillings
     * @return \Illuminate\Http\Response
     */
    public function destroy(hsbillings $hsbillings)
    {
        //
    }
}
