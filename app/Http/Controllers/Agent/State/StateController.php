<?php



namespace App\Http\Controllers\Agent\State;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use Validator;
use App\Models\States\State;

class StateController extends Controller

{

       public function state_create(Request $request){
        $all_country_id = $request->all_country_id;
        $stateabbr = $request->stateabbr;
        $statename = $request->statename;
        $validation = Validator::make($request->all(), [
        'stateabbr' => 'required',
        'statename' => 'required'
        ]);
        if($validation->passes())
            {
                $form_data = array(
                'stateabbr'   =>   $stateabbr,
                'country_id'  =>   $all_country_id,
                'statename'   =>   $statename,

                );

                $result = State::create($form_data);
                $get_form_data = State::find($result->id);

                return response()->json([
                'message'   => 'State Saved Successfully',
                'data' => $get_form_data,
                'class_name'  => 'alert alert-success'
                ]);
                 }
        }
        public function get(Request $request){
        	$remove_state_country_id = $request->remove_state_country_id;
        	$where = array('country_id' => $remove_state_country_id);

        	$obj_state = new State();
        	$result = $obj_state->where($where)->get();

                return response()->json([
                'message'   => 'State Saved Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }
        public function delete(Request $request){
        	$remove_state_country_id = $request->remove_state_country_id;
        	$remove_state_id = $request->remove_state_id;
        	$where = array('country_id' => $remove_state_country_id, 'id' => $remove_state_id);
        	$obj_state = new State();
        	$result = $obj_state->where($where)->delete();

                return response()->json([
                'message'   => 'State delete Successfully',
                'data' => $result,
                'class_name'  => 'alert alert-success'
                ]);

        }
        public function search_delete(Request $request){
            $state_delete = $request->state_delete;
            $where = array('id' => $state_delete);
            $obj_state = new State();
            $result = $obj_state->where($where)->delete();
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
        public function search_state(Request $request){
            $search_state = $request->search_state;
            $obj_state = new State();
            $result = $obj_state->where('statename','LIKE','%'.$search_state.'%')->get();
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

