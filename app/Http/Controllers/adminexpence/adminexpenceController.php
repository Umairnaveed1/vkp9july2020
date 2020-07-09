<?php

namespace App\Http\Controllers\adminexpence;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agents\Agent;
use App\Models\AdminExpenceModel\admin_expence;

class adminexpenceController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $charge_agent_id = 'charge_agent_id';
        $data['agent'] = Agent::all();
        $data['expence_list'] = admin_expence::with('agent_tbl')->get();
        
        return view('Agent_Expence.agent_expence', $data);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
          'charge_date' => 'required',
          'amount' => 'required',
          'agent_id' => 'required',
          'charge_type' => 'required'
        ]);

        $agent_id = $request->agent_id;
        $charge_type = $request->charge_type;
        $charge_date = $request->charge_date;
        $amount = $request->amount;
        $comment = $request->comment;
        if(isset($agent_id) && $agent_id){
        foreach ($agent_id as $key => $ag_id) {
            $data = array(
                'charge_agent_id' => $ag_id,
                'charge_type' => $charge_type,
                'charge_date' => $charge_date,
                'charge_amount' => $amount,
                'commit' => $comment, 
            );

            $result = admin_expence::create($data);

        }
        return redirect('agent/expense')->with('success', 'Agent Expense successfully saved');
        }
        else{
            return redirect('agent/expense')->with('success', 'Please Select Agent');
        }

    }
}
