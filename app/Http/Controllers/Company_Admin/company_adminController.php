<?php

namespace App\Http\Controllers\Company_Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company_Admin\company_admin;
use Validator;

class company_adminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
    	$data['admin_all'] = company_admin::all();
        return view('company_admin.create_company_admin', $data);
    }

    public function create(Request $request){
    	$validatedData = $request->validate([
          'administrator_name' => 'required',
          'cell_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
          'email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
        ]);
  //       if ($validatedData->fails())
		// {
		//     return redirect()->back()->withErrors($validatedData->errors());
		// }
		// else{
			$administrator_name = $request->administrator_name;
    		$cell_no = $request->cell_no;
    		$email = $request->email;
			$class_array = array( 'administrator_name' => $administrator_name, 'cell_no' => $cell_no, 'email' => $email);
			company_admin::create($class_array);
			return redirect('compnay/admin')->with('success', 'Company admin successfully saved');
		// }
    	
    }
    public function edit(Request $request){
    	$id = $request['id'];
$data['admin_all'] = company_admin::all();
$data['admin_edit'] = company_admin::find($id);
    	return view('company_admin.edit_company_admin', $data);
    }
    public function delete(Request $request){
            $id = $request['id'];
           $result = company_admin::find($id);
           $result->delete();
      return redirect('compnay/admin')->with('success', 'Company Admin Deleted  successfully');
    }
    public function update(Request $request){
    	$validatedData = $request->validate([
          'administrator_name' => 'required',
          'cell_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
          'email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
        ]);
  //       if ($validatedData->fails())
		// {
		//     return redirect()->back()->withErrors($validatedData->errors());
		// }
		// else{
			$administrator_name = $request->administrator_name;
    		$cell_no = $request->cell_no;
    		$email = $request->email;
			$class_array = array( 'administrator_name' => $administrator_name, 'cell_no' => $cell_no, 'email' => $email);
			$where = array('id' => $request->compnay_id);
			company_admin::where($where)->update($class_array);
			return redirect('compnay/admin')->with('success', 'Company admin successfully edit');;
		// }

    }
}
