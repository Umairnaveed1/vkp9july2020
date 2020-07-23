<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;
use Auth;
use Session;
use Validator;
use App\Http\Controllers;

class PropertyController extends Controller
{
    public function index()
    {
    	return view('property.manage');
    }
    public function create()
    {
    	 $country = Country::pluck('countrysh', 'id');

    	return view('property.create',compact('country'));
    }
    public function post(Request $request)
    {
				$user_id =  Auth::user()->id;
 
	 
 


  // $validatedData = $request->validate([

  //             'propertyName' => 'required',
  //   'propertyAd' => 'required',
  //   'propertyphone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
  //      'propertyFax' => 'required',
  //   'propertyAltNo' => 'required',
  //   'propertyEmail' => 'required|email',
  //      'MgmtCompName' => 'required',
  //   'country' => 'required',
  //   'property_state' => 'required',
  //    'property_city' => 'required',
  //    'propertyZiPID' => 'required',
  //       ]);

  //       $offices = Property::create($validatedData);
 
        // return redirect('addmanagement')->with('success', 'office  successfully saved');







  $school = new Property();
            $school->propertyName= $request->p_name;
            $school->propertyAd= $request->address;
            $school->propertyphone= $request->phone;
            $school->propertyFax= $request->fax;
            $school->propertyAltNo= $request->alt;
            $school->propertyEmail= $request->email;
            $school->MgmtCompName= $request->mgt;
            $school->country_id= $request->country;
            $school->state_id= $request->state;
            $school->city_id= $request->city;
            $school->propertyZiPID= $request->zip;
            $school->user_id = $user_id;

 
    $school->save();
   Session::flash('message', 'Data Inserted!'); 
         return redirect()->back();
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


}
