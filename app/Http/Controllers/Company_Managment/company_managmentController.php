<?php

namespace App\Http\Controllers\Company_Managment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Company_Managment\company_managment;
use App\Models\Countries\Country;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;
use App\Models\Properties\Property;
use DB;
use Auth;

class company_managmentController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	$company_id = $request['company_id'];
    	if($company_id){
$company_id = $request['company_id'];
    	}
    	else{
    		$get_company_id = company_managment::first();
    		$company_id = $get_company_id['id'];
    	}
    	$where = array('id' => $company_id);
    	$data['get_company_info'] = company_managment::with('country_list','state_list','city_list','zipcode_list')->where($where)->first();

    	$data['get_company_data'] = company_managment::where('adentcompany_id' ,'=', NULL)->get();
    	$property_data = Property::where('MgmtCompID','=',$where)->get(); 

    	$history_notes = DB::table('properties')->select('*','properties.id','properties.propertyName','propertiesnotes.id as notes_id')
    ->join('companymanagment', 'companymanagment.id', '=', 'properties.MgmtCompID')
    ->join('propertiesnotes', 'propertiesnotes.propertyID', '=', 'properties.id')
    ->where('companymanagment.id', '=', $company_id)
    ->get();
// dd($history_notes);
        return view('Company_Managment.company_managment_list', $data,compact('property_data','history_notes'));
    }

    public function create(){
    	
    	$data['get_company_data'] = company_managment::all();
    	
    	$data['country'] = Country::all();
    	return view('Company_Managment.compnay_managment_create', $data);
    }
        public function edit(Request $request){
    	$get_company = $request->id;
		$where = array('id' => $get_company);
		$data['get_company'] = company_managment::with('country_list','state_list','city_list','zipcode_list')->where($where)->first();
    	$data['get_company_data'] = company_managment::all();
    	$data['country'] = Country::all();
    	return view('Company_Managment.compnay_managment_edit', $data);
    }
    public function get_state(Request $request){
    	$country_id = $request->country_name;
$state = new State();
    	$where = array('country_id' => $country_id);

    	$get_state = $state->where($where)->get();

	if($get_state){
			return Response()->json($get_state);
	    }
	}

	public function get_city(Request $request){
    	$state_id = $request->state_name;
		$state = new City();
    	$where = array('state_id' => $state_id);

    	$get_state = $state->where($where)->get();

	if($get_state){
			return Response()->json($get_state);
	    }
	}
	public function get_zip_code(Request $request){
    	$city_id = $request->city_id;
		$zipcode = new ZipCode();
    	$where = array('city_id' => $city_id);

    	$get_zipcode = $zipcode->where($where)->get();

		if($get_zipcode){
			return Response()->json($get_zipcode);
	    }
	}

	public function save(Request $request){
		$validatedData = $request->validate([

            'mgt_company_name' => 'required',
            'office_address' => 'required',
            'country_name' => 'required',
            'state_name' => 'required',
            'city_id' => 'required',
            'zip_id' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'fax_number' => 'required',

        ]);
		$mgt_company_name = $request->mgt_company_name;
		$office_address = $request->office_address;
		$country_name = $request->country_name;
		$state_name = $request->state_name;
		$city_id = $request->city_id;
		$zip_id = $request->zip_id;
		$phone_number = $request->phone_number;
		$email = $request->email;
		$fax_number = $request->fax_number;
		$alt_number = $request->alt_number;
		$active = $request->active;
		if($active){
		$active = $request->active;
		}
		else{
		$active = '0';	
		}
		$data = array(
					'mgt_company' => $mgt_company_name,
					'office_address' => $office_address,
					'country_id' => $country_name,
					'state_id' => $state_name,
					'city_id' => $city_id,
					'zip_id' => $zip_id,
					'phone' => $phone_number,
					'fax' => $fax_number,
					'alt' => $alt_number,
					'email' => $email,
					'active' => $active,
				);

		$result = company_managment::create($data);

		return redirect('compnay/managment')->with('success', 'Company Managment Data Save Successfully');
	}
	public function get_list(Request $request){
		$get_company = $request->get_company;
		$where = array('id' => $get_company);
		$result = company_managment::with('country_list','state_list','city_list','zipcode_list')->where($where)->first();

	if($result){
			return Response()->json($result);
	    }

	}

	public function update(Request $request){
		$validatedData = $request->validate([

            'mgt_company_name' => 'required',
            'office_address' => 'required',
            'country_name' => 'required',
            'state_name' => 'required',
            'city_id' => 'required',
            'zip_id' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'fax_number' => 'required',

        ]);
        $where = array('id' => $request->company_get_id);
		$mgt_company_name = $request->mgt_company_name;
		$office_address = $request->office_address;
		$country_name = $request->country_name;
		$state_name = $request->state_name;
		$city_id = $request->city_id;
		$zip_id = $request->zip_id;
		$phone_number = $request->phone_number;
		$email = $request->email;
		$fax_number = $request->fax_number;
		$alt_number = $request->alt_number;
		$active = $request->active;
		if($active){
		$active = $request->active;
		}
		else{
		$active = '0';	
		}
		$data = array(
					'mgt_company' => $mgt_company_name,
					'office_address' => $office_address,
					'country_id' => $country_name,
					'state_id' => $state_name,
					'city_id' => $city_id,
					'zip_id' => $zip_id,
					'phone' => $phone_number,
					'fax' => $fax_number,
					'alt' => $alt_number,
					'email' => $email,
					'active' => $active,
				);

		$result = company_managment::where($where)->update($data);

		return redirect('compnay/managment')->with('success', 'Company Managment Data Updated Successfully');
	}

	public function print(Request $request ,$id)
	{
		 $property_data = Property::where('MgmtCompID','=',$id)->get(); 

		return view('Company_Managment.viewprint',compact('property_data')); 
	}
	public function historynotes(Request $request ,$id)
	{
 
		
		$property_data = Property::where('MgmtCompID','=',$id)->get(); 
		// dd($property_data);
		

$user_id =  Auth::user()->id;
if(!empty($request->checkbox)){
		$arrstring = implode(",", $request->checkbox);
   $inputval['checkbox'] = $arrstring;
}
else{
   $inputval['checkbox'] = '';
}


     
     $project = $request->file('file');
   
      // $new_name = 'admin_notes' . rand() . '.' . $project->getClientOriginalExtension();
     $new_name = rand() . '.' . $project->getClientOriginalExtension();
      $project->move(public_path('historynotesfile'), $new_name);
foreach($property_data as $history){

    $form_data = array(
            'propertyID'   =>$history['id'],
            'propertynotesdate'       =>   $request->notedate,
            'propertynotestime' =>   $request->note_time,
            'propertynotes' =>   $request->expence_comment,
            'propertybillnote' =>   $inputval['checkbox'],
            'propertynotesattachment'    => $new_name,
             'user_id'    =>   $user_id,
              
        );
 

     DB::table('propertiesnotes')->insert(array($form_data));
		}
	    
     return response()->json(['message' => 'Uploaded successfully']);
		


	}

	 public function historydetails(Request $request){
        $detial_charge_type = $request->detial_charge_type;
        
       

 $data_note = DB::table('propertiesnotes')
->select('propertynotesdate','propertynotestime','propertynotes','propertynotesattachment','id','propertyID','propertybillnote')
->where(['id' => $detial_charge_type])
->get();
 

       // dd($data_note[0]);
        return response()->json([
                    'message'   => 'detail view Successfully',
                    'data' => $data_note[0],
                    'class_name'  => 'alert alert-success'
                    ]);

    }
      public function deletehistorynotes(Request $request){
        $delete_charge_type = $request->delete_charge_type;


$result = DB::table('propertiesnotes')->where('id', $delete_charge_type)->delete();
        
     
        return response()->json([
                    'message'   => 'Notes Delete Successfully',
                    'data' => $result,
                    'class_name'  => 'alert alert-success'
                    ]);

    }

    public function printhistory(Request $request,$id)
    {
         	// dd($id);
         	$property_data = DB::table('properties')->select('*','properties.id','properties.propertyName','propertiesnotes.id as notes_id')
    ->join('companymanagment', 'companymanagment.id', '=', 'properties.MgmtCompID')
    ->join('propertiesnotes', 'propertiesnotes.propertyID', '=', 'properties.id')
    ->where('companymanagment.id', '=', $id)
    ->get();
    // dd($property_data);
    return view('Company_Managment.notespage',compact('property_data')); 
    // dd($history_notes);
    }

}
