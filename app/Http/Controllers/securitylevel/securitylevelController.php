<?php

namespace App\Http\Controllers\securitylevel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Security_Level\security_level;
class securitylevelController extends Controller
{
   public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data['security_data'] = security_level::all();
    	return view('security_level.security_level', $data);
    }
    public function create(Request $request){

    	$security_array = [];
    	
    	foreach ($request->security as $key => $security_list) {
    		
    	$security_array[$key] = $security_list[0];
    	}

        $data = array(
            'security_name' => $request->email,
            'security_role' => serialize($security_array), 
        );
        $result = security_level::create($data);
        return redirect('admin/security_level')->with('success', 'Security Data Saved Successfully');;
    }
    public function update(Request $request){
        $security_array = [];
        foreach ($request->security as $key => $security_list) {
            
        $security_array[$key] = $security_list[0];
        }
        $id = $request->security_id;
        $where = array('id' => $id);
        $data = array(
            'security_name' => $request->email,
            'security_role' => serialize($security_array), 
        );
        $result = security_level::where($where)->update($data);
        return redirect('admin/security_level')->with('success', 'Security Data Updated Successfully');
    }
    public function get(Request $request){
        $id = $request->id;
        $data['security_list'] = security_level::find($id);
        $data['security_data'] = security_level::all();
        return view('security_level.security_level_create', $data);

    }

    public function delete(Request $request){

    }
}
