<?php

namespace App\Http\Controllers\Admin\PropertyManage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;
use Auth;
use Session;
use App\Models\Company_Managment\company_managment;

class PropertyManageController extends Controller
{
    public function index(Request $request)
    {
        $property_id = $request['property_id'];
    	if($property_id){
		$property_id = $request['property_id'];
    	}
    	else{
    		$get_property_id = Property::first();
    		$property_id = $get_property_id['id'];
    	}
    	$where = array('id' => $property_id);
		$data['get_property_info'] = Property::with('country_list','state_list','city_list','zipcode_list')
		->where($where)->first();

    	$data['get_property_data'] = Property::all();
    	
        return view('admin.property_manage.index', $data); 
       }

       public function create(){
    	
    	$data['get_property_data'] = Property::all();
    	
    	$data['country']  = Country::pluck('countrysh', 'id');
        $company_managment = company_managment::pluck("mgt_company","id");
    	return view('admin.property_manage.create', $data ,compact('company_managment'));
    }

       public function get_property_list(Request $request)
       {
		$get_property = $request->get_property;
		$where = array('id' => $get_property);
		$result = Property::with('country_list','state_list','city_list','zipcode_list')
		->where($where)->first();

	if($result){
			return Response()->json($result);
	    }

    }




    public function getStateList(Request $request)
        {
          $country_id =$request->country_id;
            $states = State::where("country_id",$country_id)->pluck("statename","id");
            return response()->json($states);
        }


        public function getCityList(Request $request)
        {
           
            $cities = City::where("state_id",$request->state_id)->pluck("cityname","id");
    
            return response()->json($cities);
        }
         public function getZipcodeList(Request $request)
        {
           
            $zipcode = ZipCode::where("city_id",$request->city_id)->pluck("zipcode","id");
    
            return response()->json($zipcode);
        }





    
    public function edit(Request $request){
        $get_company = $request->id;
		$where = array('id' => $get_company);
		$data['get_property'] = Property::with('country_list','state_list','city_list','zipcode_list')->where($where)->first();
    	$data['get_property_data'] = Property::all();
        $data['country'] = Country::all();
        $data['get_property_data'] = Property::all();
        $company_managment = company_managment::pluck("mgt_company","id");
    	return view('admin.property_manage.property_edit',$data,compact('company_managment'));
    }



    public function store(Request $request)
    {
         

  







        $user_id =  Auth::user()->id;


        $request->validate([

            'propertyName' => 'required',
            'propertyAd' => 'required',
            'propertyphone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'propertyFax' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'propertyAltNo' => 'required',
            'email' => 'required|email',
            'mgt' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'lastdatepic' =>'required',
            'abbrevation' =>'required',
            'invoices'   => 'required',
            // 'property_state' => 'required',
            //  'property_city' => 'required',
            //  'propertyZiPID' => 'required',
                ]);



$arrstring = implode(",", $request->invoices);
   $inputval['invoices'] = $arrstring;

              $data = new Property();
            $data->propertyName = $request->propertyName;
            $data->propertyAd = $request->propertyAd;
            $data->propertyphone = $request->propertyphone;
            $data->propertyFax = $request->propertyFax;
            $data->propertyAltNo = $request->propertyAltNo;
            $data->propertyEmail = $request->email;
            $data->MgmtCompID = $request->mgt;
            $data->country_id = $request->country;
            $data->state_id = $request->state;
            $data->city_id = $request->city;
            $data->zipcode_id = $request->zip;
            $data->lastcontract = $request->lastdatepic;
            $data->abbrevation = $request->abbrevation;
            $data->admininvoices = $inputval['invoices'];
            $data->user_id = $user_id;

 
    $data->save();
     Session::flash('message', 'Data has been Submit!'); 
    return redirect()->back();





    

    }

public function update(Request $request ,$id)
{

    // dd($id);
    $user_id =  Auth::user()->id;



        $request->validate([

            'propertyName' => 'required',
            'propertyAd' => 'required',
            'propertyphone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'propertyFax' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'propertyAltNo' => 'required',
            'email' => 'required|email',
            'mgt' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'lastdatepic' =>'required',
            'abbrevation' =>'required',
            'invoices'   => 'required',
            // 'property_state' => 'required',
            //  'property_city' => 'required',
            //  'propertyZiPID' => 'required',
                ]);





    $arrstring = implode(",", $request->invoices);
   $inputval['invoices'] = $arrstring;
    $data = Property::find($id);
      $data->propertyName = $request->propertyName;
            $data->propertyAd = $request->propertyAd;
            $data->propertyphone = $request->propertyphone;
            $data->propertyFax = $request->propertyFax;
            $data->propertyAltNo = $request->propertyAltNo;
            $data->propertyEmail = $request->email;
            $data->MgmtCompID = $request->mgt;
            $data->country_id = $request->country;
            $data->state_id = $request->state;
            $data->city_id = $request->city;
            $data->zipcode_id = $request->zip;
            $data->lastcontract = $request->lastdatepic;
            $data->abbrevation = $request->abbrevation;
            $data->admininvoices = $inputval['invoices'];
          
            $data->save();
             Session::flash('message', 'Data has been Updated!'); 
    return redirect()->back();
}

}
