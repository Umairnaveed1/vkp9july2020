<?php

namespace App\Http\Controllers\miscincome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\miscincome\miscincome;
use App\Models\Agents\Agent;
use App\User;
use Auth;

class miscincomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
    	$misc_income = $request->misc_income;
    	$misc_income_amount = $request->misc_income_amount;
    	$misc_income_comment = $request->misc_income_comment;
    	$agent_id = $request->agent_id;
    	$user_id = Auth::id();
    	$data = array(
    		'income_date' => $misc_income, 
    		'amount' => $misc_income_amount,
    		'comment' => $misc_income_comment,
    		'agent_id' => $agent_id,
    		'user_id' => $user_id,
    	);
    	$result = miscincome::create($data);
    	return response()->json([
					'message'   => 'Misc Income Save Successfully',
					'data' => $result,
					'class_name'  => 'alert alert-success'
					]);

    }
    public function onhold(Request $request){
    	$misc_income_id = $request->misc_income_id;
    	$misc_income_onhold = $request->misc_income_onhold;
    	$where = array('id' => $misc_income_id);
    	$data = array('onhold' => $misc_income_onhold);
    	$miscincome = new miscincome();
    	$miscincome->where($where)->update($data);
    }
    public function delete(Request $request){
		$del_misc_income  = $request->del_misc_income;
		$where = array('id' => $del_misc_income);
    	$miscincome = new miscincome();
    	$miscincome->where($where)->delete();
    	return response()->json([
					'message'   => 'Misc Income delet Successfully',
					'class_name'  => 'alert alert-success'
					]);
    }
    public function get_miscincome_detial(Request $request){
        $detial_misc_income = $request->detial_misc_income;
        $miscincome = new miscincome();
        $where = array('id' => $detial_misc_income);
        $result = $miscincome->with('user','agent')->where($where)->first();
        return response()->json([
                    'message'   => 'Misc Income delet Successfully',
                    'data' => $result,
                    'class_name'  => 'alert alert-success'
                    ]);

    }
}
