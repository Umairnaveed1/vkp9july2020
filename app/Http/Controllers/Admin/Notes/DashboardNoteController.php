<?php

namespace App\Http\Controllers\Admin\Notes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agents\Agent;
use App\User;
use App\Models\Properties\Property;

class DashboardNoteController extends Controller
{
    public function index(Request $request)
    {
        $agent_id = $request['agent_id'];
        if($agent_id){
            $agent_id = $request['agent_id'];
        }
        else {
                $get_agent_id = Agent::first();
                $agent_id = $get_agent_id['id'];
        }
        $where = array('id' => $agent_id);
        $data['get_agent_info'] = Agent::with('users')->where($where)->first();
        $data['get_agent_data'] = Agent::all();

       return view('admin.notes.dashboard-notes',$data);

    }
}
