<?php

namespace App\Http\Controllers\Agent\AppartmentBilling;

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
use App\Models\Company_Managment\company_managment;
use App\Models\Agent\AppartmentBilling\AppartmentBilling;
// use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
use App\Models\Admin\FeeApprovals\FeeApproval;



class AppartmentBillingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $apbillingsrecords = AppartmentBilling::max('id'); 
        $apbillingId=$apbillingsrecords+1;
        $viewData['apbillingId']=$apbillingId;
        $viewData['properties']=Property::all();
        $viewData['country']   =Country::all();
        $viewData['state']     =State::all();
        $viewData['city']      =City::all();
        $viewData['zipCode']   =ZipCode::all();
        $viewData['agents']   =Agent::all(); 
        $viewData['company_managment']   =company_managment::all(); 
        //return view('agent.homelease.home_lease_billing',$viewData);
    		$data['get_property_data'] = Property::all();
    	
    	$data['country']  = Country::pluck('countrysh', 'id');
        // $company_managment = company_managment::pluck("mgt_company","id");
         $company_managment = company_managment::where('adentcompany_id' ,'=', NULL)
         
    
       ->pluck("mgt_company","id");

       $data['get_agents_data'] = Agent::pluck('agentfirstname','id');
      
    //    $fromDate = Carbon::now()->startOfMonth()->toDateString();
    //    $tillDate = Carbon::now()->endOfMonth()->toDateString();
       
    //    $revenueLastMonth = AppartmentBilling::
    //    whereBetween(DB::raw('date(created_at)'), [$fromDate, $tillDate])->count();

        //  dd($revenueLastMonth);
    	return view('agent.appartment_bill.create', $data ,$viewData,compact('company_managment'));
    }

    public function index(Request $request)
    {
        $apbillingsrecords = AppartmentBilling::max('id'); 
        $apbillingId=$apbillingsrecords+1;
        $viewData['apbillingId']=$apbillingId;
        $viewData['properties']=Property::all();
        $viewData['country']   =Country::all();
        $viewData['state']     =State::all();
        $viewData['city']      =City::all();
        $viewData['zipCode']   =ZipCode::all();
        $viewData['agents']   =Agent::all(); 
        $viewData['company_managment']   =company_managment::all(); 
        //return view('agent.homelease.home_lease_billing',$viewData);
    	
        return view('agent.appartment_bill.create',$viewData);
    }


    public function store(Request $request)
    { 
        $user_id = Auth::user()->id;
        $property_id = $request['property_id'];
        if($property_id)
        {
            $property_id = $request['property_id'];
        }
        else{
    		$get_property_id = Property::first();
    		$property_id = $get_property_id['id'];
    	}
        $where = array('id' => $property_id);
        
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
        $input=$request->all();
         $request->validate([
          //   'moveinno' => 'required',
            'secongage'=>'required',
            'rent'=>'required',
            // 'comission'=>'required',
            'flatrate'=>'required',
            'bonus'=>'required',
            'totaldueto'=>'required',
            // 'duetofirst'=>'required',
            // 'duetosec'=>'required',
            'verifiedby'=>'required',
            'giftcard' => 'required',
            'pono' => 'required',
            'communityname' => 'sometimes',
            'tenantname' => 'required',
            'tenantaddress' => 'sometimes',
            'tenantunit' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',   
            'zip' => 'required',
            'leesestart' => 'required',
            'leeseterms' => 'required',
            'agentnotes' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'checkboxes' => 'required',
                ]);
               

                    $original_file = $request->file('file');
        
                    $new_name = time().'_'.$original_file->getClientOriginalName();
            
                    // $image = Image::make($original_file)
                    // ->resize(100, 100)
                    // ->encode($original_file->getClientOriginalExtension());
            
                    Storage::disk('local')->putFileAs(
                        'public/images/appartbill/'.$new_name,
                        $original_file,
                        $new_name
                      );
                    //here you can define any directory name whatever you want, if dir is not exist it will created automatically.
                    // Storage::put('public/images/appartbills/' . $new_name, (string)$image->encode('png', 95));
                               // Storage::put('public/images/appartbills/' . $new_name);
                               //$arraystr = implode(",",$request->checkboxes);
                               //$inputval['checkboxes'] =  $arraystr;
                               $feeapprovals = FeeApproval::find(1);
                
        $apbilling = new AppartmentBilling();
        //'moveinno' => $reques>movt-einno,
        $apbilling->secongage = $request->get('secongage');
        $apbilling->rent = $request->get('rent');
        $apbilling->comission = $request->get('comission');
        $apbilling->flatrate = $request->get('flatrate');
        $apbilling->bonus = $request->get('bonus');
        $apbilling->totaldueto = $request->get('totaldueto');
        $apbilling->duetofirst = $request->get('duetofirst');
        $apbilling->duetosec = $request->get('duetosec');
        $apbilling->verifiedby = $request->get('verifiedby');
        $apbilling->giftcard = $request->get('giftcard');
        $apbilling->pono = $request->get('pono');
        $apbilling->communityname = $request->get('communityname');
        $apbilling->tenantname = $request->get('tenantname');
        $apbilling->tenantaddress = $request->get('tenantaddress');
        $apbilling->tenantunit = $request->get('tenantunit');
        $apbilling->country_id = $request->get('country');
        $apbilling->state_id = $request->get('state');
        $apbilling->city_id = $request->get('city');
        $apbilling->zip_id = $request->get('zip');
        $apbilling->leesestart = $request->get('leesestart');
        $apbilling->leeseterms = $request->get('leeseterms');
        $apbilling->agentnotes = $request->get('agentnotes');
        $apbilling->file = 'images/' . $new_name;
        $apbilling->user_id = Auth::user()->id;
        $apbilling->property_id = $request->get('property_id');
        $apbilling->agent_id = $agent_id;
       // $apbilling->adminprop = $inputval['checkboxes'];


        $apbilling->save();
              $lastid = $apbilling->id;

         
        $feeapprovals = new FeeApproval;

          $feeapprovals->apartmentbilling_id = $lastid;
         $feeapprovals->user_id = Auth::user()->id;
        $feeapprovals->save();

         
       

        Session::flash('success','ApertmentBilling added sucessfully.');
        return redirect('agents/appartmentbilling')->with('success','Appartment Billing added sucessfully.'); 
        //
    }
    public function property(Request $request){
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
        //   $result = Invoice::where('invoice_type','!=',2)->where($where)->first();
          $result['countryname'] =$countryData['countryname'];
          $result['statename']   =$stateData['statename'];
          $result['cityname']    =$cityData['cityname'];
          $result['zipcode']     =$zipCodeData['zipcode'];
          $result['propertyAd']  =$propteryData['propertyAd']; 
          
          $autopayData='';
          if(!$result['invoice']->isEmpty()){  
          $autopayData = view('agent.appartment_bill.apinvoice',['result'=>$result])->render(); 
          }
        //   echo'<pre>';
        //   print_r($result['invoice']);
        //   die;
          $result['autPayData']=$autopayData;
          return response()->json([
                      'message'   => 'Form Data Updated Successfully',
                      'data' => $result,
                      
                      'htmldata'=>$autopayData,
                      
                      'class_name'  => 'alert-success'
                      ]);
      
      }
}
