<?php

namespace App\Http\Controllers\Agent\Country;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Countries\Country;
use Session;
use Auth;
use Validator;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;

class CountryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index()
    {
    	$country['get_form_data_country'] =  DB::table('countries')->get();
    	// $country['get_form_data_agent'] =  DB::table('adminform')->where(['user_type' => 'agent'])->get();
        return view('agent.country.create', $country);
    }

    public function create(Request $request)
    {
    	$data['country'] = Country::all();
        $data['get_state_data'] = State::paginate(2);
        $data['get_city_data'] = City::paginate(2);
        $data['get_zipcode_data'] = ZipCode::paginate(2);
        // dd($country);

    	return view('agent.country.create', $data);
    }

    public function store(Request $request)
    {

    	    $validatedData = $request->validate([

            'countryname' => 'required|string|max:255',
            'countrysh' => 'required|string',
        ]);

        $country = Country::create($validatedData);
        //dd($country)->toArray();
        	
        return redirect()->back()->with('success', 'Country successfully saved');		
        	}
        	public function stateindex(Request $request)
        	{
        		$states = State::all();
        			//dd($states)->toArray();
        		return view('agent.country.create',compact('states'));
        	}
        	public function statestore(Request $request)
				{
				
				$statevalidate = $request->validate([
        		'statename' => 'required|string|max:255',
        		'stateabbr' => 'required|string|max:255',
                'country_id' => 'sometimes',

        		]);

        		$states = State::create($statevalidate);
        		//dd($state);

        		return redirect()->back()->with('success','State successfully saved');
				}   

				public function deletestate(Request $request, $id)
				{
					$states = State::where('statename','>' ,'0')->delete();
					return view('agent.country.create',compact('states'))->with('error','states deleted');
				}
     public function save(Request $request){

			$validation = Validator::make($request->all(), [
			'countryname' => 'required',
			'countrysh' => 'required'
			]);
			if($validation->passes())
			{
				
                if(isset($request->edit_admin_id)){
					$form_data = array(
					'form_name'       =>   $request->form_name,
					'user_type'        =>   $request->admin,
					'document'            =>   $new_name
					);
					$where = array('id' => $request->edit_admin_id);
					$result = admin_form::where($where)->update($form_data);

					return response()->json([
					'message'   => 'Form Data Updated Successfully',
					'class_name'  => 'alert-success'
					]);

				}else{
                    $form_data = array(
                        'countryname'       =>   $request->countryname,
                        'countrysh'        =>   $request->countrysh,
                        
                        );
                }
					
					$result = Country::create($form_data);
					$get_form_data = Country::find($result->id);

					return response()->json([
					'message'   => 'Country Saved Successfully',
					'data' => $get_form_data,
					'class_name'  => 'alert alert-success'
					]);
				
				

			
		}
     }


     public function edit($id)
     {
        $edit_country_id = $request->edit_country_id;

     	$country = Country::findorFail($edit_country_id);
         //dd($country_edit);
         return response()->json([
                'message' => true,
                'data'  => $country,

         ]);
     	// return view('agent.country.create',compact('country'));
     }
     public function delete(Request $request){
    	$delete_country_id = $request->country_delete_id;
    	$get_form_data = Country::where('id', $delete_country_id)->delete();
        if($get_form_data){
            return response()->json([
               'message'   => 'Country Data Delete Successfully',
               'status' => 'true',
                'class_name'  => 'alert alert-success'
              ]);
        }
        else{
           return response()->json([
               'message'   => 'Country is assign to other state',
               'status' => 'false',
                'class_name'  => 'alert alert-success'
              ]); 
        }
		
    }
    public function update(Request $request, $id)
    {
        // $country =Country::findorFail($id);
    	  
           if($request->has('form2')){
            $request->validate(
                [
                'countryname' => 'required|max:255',
                 ]);
        $coun =
            [
                'countryname' => $request->countryname,
            ];
        $country = Country::whereId($id)->update($coun);
        //dd($country_update);
    }
        return view('agent.country.create',compact('country'))->with('update', 'Country successfully updated!');

    }
      public function stateupdate(Request $request, $id)
    {
    	  $request->validate(
                [
                'statename' => 'required|max:255',
                'stateabbr' => 'required|max:255',
                'country_id' => 'sometimes',
                 ]);

        $st =
            [
                'statename' => $request->statename,
                'stateabbr' => $request->stateabbr,
                'country_id' => $request->country_id,
            ];

        $states=State::whereId($id)->update($st);
        //dd($country_update);
        return view('agent.country.create',compact('states'))->with('update', 'Country successfully updated!');

    }
    //  public function destroy(Request $request, $id)
    // 	{

    //         $country = Country::findorFail($id)->delete();
    //          // dd($country)->toArray();
    //         return redirect()->back()
    //                ->with('error','country deleted successfully');
    // }



    

    }

