<?php

namespace App\Http\Controllers\Agent\Pendingfee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\FeeApprovals\FeeApproval;
use App\Models\Agents\Hlholdingfees;
 use DB;
class pendingfeeController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
     	   
     	  $pendingfee = Hlholdingfees::with('hl_agent','hl_property')->where('verifiedby', 0)
     	  ->orwhere('verifiedby', null)->paginate(15);  
     	  // dd($pendingfee);
     	  return view('agent/billviews/view_pendingfee',compact('pendingfee')); 
     }
     public function viewfee(Request $request ,$id)
     {
        // $pendingfee = Hlholdingfees::with('hl_agent','hl_property')->where('id',$id)
        //   ->get(); 
     $pendingfee = DB::table('hlholdingfees')
            ->select('*')
            ->join('properties', 'hlholdingfees.property_id', '=', 'properties.id')
            ->join('agents', 'hlholdingfees.agent_id', '=', 'agents.id')
            ->join('states', 'properties.state_id', '=', 'states.id')
            ->join('cities', 'properties.city_id', '=', 'cities.id')
            ->join('zipcodes', 'properties.zipcode_id', '=', 'zipcodes.id')
            ->where(['hlholdingfees.id' => $id])
->get();
 
            
            // dd($pendingfee[0]->hlmoveins);
return response()->json($pendingfee[0]);
      // return json_encode($pendingfee);
     }
}
