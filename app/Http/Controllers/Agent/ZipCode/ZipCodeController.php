<?php



namespace App\Http\Controllers\Agent\ZipCode;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Session;
use Auth;
use Validator;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\ZipCodes\ZipCode;

class ZipCodeController extends Controller

{

    	public function get_state(Request $request){
		    $zipcode_country_id = $request->zipcode_country_id;
        	$where = array('country_id' => $zipcode_country_id);

        	$obj_state = new State();
        	$result = $obj_state->where($where)->get();
                return response()->json([
                'message'   => 'Get State Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

	}
   public function create(Request $request){
        $zipcode_name = $request->zipcode_name;
        $zipcode_city_id = $request->zipcode_city_id;
        $add_city_name = $request->add_city_name;
                $form_data = array(
                'zipcode'   =>   $zipcode_name,
                'city_id'  =>   $zipcode_city_id,
                );

                $result = ZipCode::create($form_data);
                $get_form_data = ZipCode::find($result->id);

                return response()->json([
                'message'   => 'ZipCode Saved Successfully',
                'data' => $get_form_data,
                'class_name'  => 'alert alert-success'
                ]);
        }
        public function get(Request $request){
        	$rmv_zipcode_city_id = $request->rmv_zipcode_city_id;
        	$where = array('city_id' => $rmv_zipcode_city_id);

        	$obj_state = new ZipCode();
        	$result = $obj_state->where($where)->get();

                return response()->json([
                'message'   => 'Zipcode get data Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }

        public function get_city(Request $request){
        	$zipcode_state_id = $request->zipcode_state_id;
        	$where = array('state_id' => $zipcode_state_id);

        	$obj_state = new City();
        	$result = $obj_state->where($where)->get();

                return response()->json([
                'message'   => 'Get City Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }
        public function delete(Request $request){
        	$rmv_zipcode_city_id = $request->rmv_zipcode_city_id;
        	$rmv_zipcode_zipcode_id = $request->rmv_zipcode_zipcode_id;
        	$where = array('city_id' => $rmv_zipcode_city_id, 'id' => $rmv_zipcode_zipcode_id);
        	$obj_state = new ZipCode();
        	$result = $obj_state->where($where)->delete();
if($result){
return response()->json([
                'message'   => 'Zipcode delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);
}
else{
   return response()->json([
                'message'   => 'Zipcode is assign any other position so not Deleted',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]); 
}
                

        }
        public function search_delete(Request $request){
            $zipcode_delete = $request->zipcode_delete;
            $where = array('id' => $zipcode_delete);
            $obj_state = new ZipCode();
            $result = $obj_state->where($where)->delete();
            if($result){
                return response()->json([
                'message'   => 'Zipcode delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

            }
            else{
                return response()->json([
                'message'   => 'Zipcode delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

            }
                

        }
        public function search_zipcode(Request $request){
             $search_zipcode = $request->search_zipcode;
            $obj_state = new ZipCode();
            $result = $obj_state->where('zipcode','LIKE','%'.$search_zipcode.'%')->get();
            if($result){
                
                return response()->json([
                'message'   => 'State delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

            }
            else{
              return response()->json([
                'message'   => 'Please Delete City Before State',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);  

            }
        }

}

