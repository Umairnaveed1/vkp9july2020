<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agents\Agent;
use App\Models\Agents\AgentNotes;
use App\User;
use Validator;
use Auth;
class agentnotesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
   public function create(Request $request)
   {
   			$validation = Validator::make($request->all(), [
			'agent_notes_date' => 'required',
			'agent_notes_time' => 'required'
			]);
			if($validation->passes())
			{
				if($request->checked_agent == 1){
					$checked_agent = $request->checked_agent;
				}
				else{
					$checked_agent = 0;
				}
				$userId = Auth::id();
				$image = $request->file('agent_notes_file');

				$new_name = 'agent_notes' . rand() . '.' . $image->getClientOriginalExtension();
				$image->move(public_path('agent_notes_document'), $new_name);
					$form_data = array(
					'agentnote'       =>   $request->agent_notes_date,
					'agentnoted'        =>   $checked_agent,
					'agentnott'        =>    $request->agent_notes_time,
					'agentnotes'        =>   $request->agent_notes_discreption,
					'document'            =>   $new_name,
					'agent_id' => $request->agent_id,
					'user_id' => $userId,
					);

					$result = AgentNotes::create($form_data);

					$get_user_id = $result['user_id'];
					$get_agent_id = $result['agent_id'];
					$id = $result['id'];
					$where = array('user_id' => $get_user_id, 'agent_id' => $get_agent_id, 'id' => $id);
					$get_result = AgentNotes::with('agent', 'user')->first();
					
					$agent_array  = array(
						'agentnote' => $get_result['agentnote'],
						'id' => $get_result['id'],
						'agentnott' => $get_result['agentnott'], 
						'agentnotes' => $get_result['agentnotes'],
						'document' => $get_result['document'],
						'is_admin' => $get_result['user']['is_admin'],

					); 
					return response()->json([
					'message'   => 'Agent Notes Save Successfully',
					'data' => $result,
					'class_name'  => 'alert alert-success'
					]);
				

			}
   }
   public function delete(Request $request){
   	$agent_notes_checked = $request->agent_notes_checked;
   	$AgentNotes = new AgentNotes();
   	$AgentNotes->where('id', $agent_notes_checked)->delete();
   	return response()->json([
					'message'   => 'Agent Notes Deleted Successfully',
					'class_name'  => 'alert alert-success'
					]);
   }
}
