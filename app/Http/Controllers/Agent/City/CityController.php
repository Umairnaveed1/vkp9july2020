<?php



namespace App\Http\Controllers\Agent\City;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Session;
use Auth;
use Validator;
use App\Models\States\State;
use App\Models\Cities\City;

class CityController extends Controller

{
	public function get_state(Request $request){
		    $add_city_country_id = $request->add_city_country_id;
        	$where = array('country_id' => $add_city_country_id);

        	$obj_state = new State();
        	$result = $obj_state->where($where)->get();

                return response()->json([
                'message'   => 'City Saved Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

	}
   public function create(Request $request){
        $add_city_country_id = $request->add_city_country_id;
        $add_city_state_id = $request->add_city_state_id;
        $add_city_name = $request->add_city_name;
                $form_data = array(
                'cityname'   =>   $add_city_name,
                'state_id'  =>   $add_city_state_id,
                'country_id' => $add_city_country_id,
                );

                $result = City::create($form_data);
                $get_form_data = City::find($result->id);

                return response()->json([
                'message'   => 'City Saved Successfully',
                'data' => $get_form_data,
                'class_name'  => 'alert alert-success'
                ]);
        }
        public function get(Request $request){
        	$remove_state_country_id = $request->remove_state_country_id;
        	$where = array('country_id' => $remove_state_country_id);

        	$obj_state = new State();
        	$result = $obj_state->where($where)->get();

                return response()->json([
                'message'   => 'City Saved Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }

        public function get_city(Request $request){
        	$rmv_city_state_id = $request->rmv_city_state_id;
        	$where = array('state_id' => $rmv_city_state_id);

        	$obj_state = new City();
        	$result = $obj_state->where($where)->get();

                return response()->json([
                'message'   => 'City Saved Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }
        public function delete(Request $request){
        	$rmv_city_state_id = $request->rmv_city_state_id;
        	$rmv_city_id = $request->rmv_city_id;
        	$where = array('state_id' => $rmv_city_state_id, 'id' => $rmv_city_id);
        	$obj_state = new City();
        	$result = $obj_state->where($where)->delete();

                return response()->json([
                'message'   => 'City delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }
        public function search_delete(Request $request){
            $city_delete = $request->city_delete;
            $where = array('id' => $city_delete);
            $obj_state = new City();
            $result = $obj_state->where($where)->delete();
            if($result){
                 return response()->json([
                'message'   => 'City delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

            }
            else{
               
                return response()->json([
                'message'   => 'Please Delete Zipcode Before City',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

            }
                

        }
                public function search_city(Request $request){
            $search_city = $request->search_city;
            $obj_state = new City();
            $result = $obj_state->where('cityname','LIKE','%'.$search_city.'%')->get();
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

