<?php

namespace App\Http\Controllers\Agent\Property;

 
use Illuminate\Http\Request;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;
use Auth;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Company_Managment\company_managment;

class PropertyController extends Controller
{
    public function index()
    {
      return view('property.manage');
    }
    public function create()
    {
      $user_id =  Auth::user()->id;
       $country = Country::pluck('countrysh', 'id');
       
       $company_managment = company_managment::where('adentcompany_id' ,'=', $user_id)
       ->orWhere('active', '=', NULL)
       ->orWhere('active', '=', 1)
       ->pluck("mgt_company","id");

      return view('property.create',compact('country','company_managment'));
    }
    public function post(Request $request)
    {

 
 
       



        $user_id =  Auth::user()->id;


        $request->validate([

            'propertyName' => 'required',
            'propertyAd' => 'required',
            'propertyphone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'propertyFax' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:6',
            'propertyAltNo' => 'required',
            'email' => 'required|email',
            'mgt' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            // 'property_state' => 'required',
            //  'property_city' => 'required',
            //  'propertyZiPID' => 'required',
                ]);





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
            $data->user_id = $user_id;

 
    $data->save();
     $lastInsertedId= $data->id;
     // dd($lastInsertedId);
       // $services = $request->input('services');

       // $service= array('services'=> $services ,'project_id'=>$lastInsertedId);
   // Session::flash('message', 'Data Inserted!'); 
   //       return redirect()->back();

$invocedata =  $request->invoices;
  
  if($invocedata == '' && $invocedata==null){



 $validation = $request->validate([

            'file' => 'required',
           
           
                ]);
              
      $project = $request->file('file');
   
      $new_name = rand() . '.' . $project->getClientOriginalExtension();
      $project->move(public_path('agentfile'), $new_name);

 // $property = new Property();
 //            $property->invoices = '';
 //            $property->file = $new_name;
          
 //            $property->user_id = $user_id;

 
 //    $property->save();


$books1 = array("invoices"=>"","file"=>$new_name,"user_id"=>$user_id,"property_id"=>$lastInsertedId);
     

    DB::table('invoicesagents')->insert(array($books1));



 Session::flash('submit', 'file has been Submited!'); 
 
return redirect()->back();
  }
    $arrstring = implode(",", $request->invoices);
   $inputval['invoices'] = $arrstring;

 $validation = $request->validate([

            'file' => 'required',
             
           
                ]);


 
              
      $project = $request->file('file');
   
      $new_name = rand() . '.' . $project->getClientOriginalExtension();
      $project->move(public_path('agentfile'), $new_name);


      $books1 = array("invoices"=>$inputval['invoices'],"file"=>$new_name,"user_id"=>$user_id,"property_id"=>$lastInsertedId);
     

    DB::table('invoicesagents')->insert(array($books1));

 // $property = new Property();
 //            $property->invoices = $inputval['invoices'];
 //            $property->file = $new_name;
          
 //            $property->user_id = $user_id;

 
 //    $property->save();
  
   Session::flash('message', 'Data has been Submit!'); 
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
 
   
   public function postcomantname(Request $request)
   {
   
    $user_id =  Auth::user()->id;


 
 
      // $project = $request->file('file');
   
      // $new_name = rand() . '.' . $project->getClientOriginalExtension();
      // $project->move(public_path('agentcompanymagment'), $new_name);

$image = $request->file('file');

$new_name = rand()  . '.' . $image->getClientOriginalExtension();
$image->move(public_path('agentcompany'), $new_name);


// dd($request->all());




     $comany = new company_managment();
            $comany->mgt_company = $request->company_name;
            $comany->office_address = $request->office;
            $comany->office_address = $request->officeaddress;
            $comany->country_id = $request->country2;
            $comany->state_id = $request->state2;
            $comany->city_id = $request->city2;
            $comany->zip_id = $request->zipcode2;
            $comany->phone = $request->phoneno;
            $comany->fax = $request->fax;
            $comany->alt = $request->alt;
            $comany->email = $request->email;
            $comany->adentcompany_id = $user_id;
            // $comany->file = $new_name;

 
    $comany->save();

     $lastInsertedId= $comany->id;
    


    //   $project = $request->file('file');
   
    //   $new_name = rand() . '.' . $project->getClientOriginalExtension();
    //   $project->move(public_path('agentcompanymagment'), $new_name);


      $mgt = array("companymanagment_id"=>$lastInsertedId,"file"=>$new_name,"user_id"=>$user_id);
     

    DB::table('agentcompanyfiles')->insert(array($mgt));
       
 
    return response()->json(['messageinsert' => 'Insert company name successfully']);
   }
 


}
