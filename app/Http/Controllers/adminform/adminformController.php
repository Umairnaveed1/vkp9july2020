<?php

namespace App\Http\Controllers\adminform;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminForm\admin_form;
use Validator;
use DB;
class adminformController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
        public function index()
    {
    	$data['get_form_data_admin'] =  DB::table('adminform')->where(['user_type' => 'admin'])->paginate(2);
    	$data['get_form_data_agent'] =  DB::table('adminform')->where(['user_type' => 'agent'])->get();
        return view('adminform.adminform_create', $data);
    }
    public function save(Request $request){
		if($request->admin == 'admin'){

			$validation = Validator::make($request->all(), [
			'document' => 'required',
			'form_name' => 'required'
			]);
			if($validation->passes())
			{
				$image = $request->file('document');

				$new_name = rand() . '.' . $image->getClientOriginalExtension();
				$image->move(public_path('images'), $new_name);
				if(isset($request->edit_admin_id)){
					$form_data = array(
					'form_name'       =>   $request->form_name,
					'user_type'        =>   $request->admin,
					'document'            =>   $new_name
					);
					$where = array('id' => $request->edit_admin_id);
					$result = admin_form::where($where)->update($form_data);

					return response()->json([
					'message'   => 'Form Data Updated Successfully',
					'class_name'  => 'alert-success'
					]);

				}
				else{
					$form_data = array(
					'form_name'       =>   $request->form_name,
					'user_type'        =>   $request->admin,
					'document'            =>   $new_name
					);
					$result = admin_form::create($form_data);
					$get_form_data = admin_form::find($result->id);

					return response()->json([
					'message'   => 'Form Data Save Successfully',
					'data' => $get_form_data,
					'class_name'  => 'alert alert-success'
					]);
				}
				

			}
			else{

				return response()->json([
				'message'   => $validation->errors()->all(),
				'uploaded_image' => '',
				'class_name'  => 'alert alert-success'
				]); 
			}
		}
		else{
			$validation = Validator::make($request->all(), [
			'document' => 'required',
			'form_name' => 'required'
			]);
			if($validation->passes())
			{
				$image = $request->file('document');

				$new_name = rand() . '.' . $image->getClientOriginalExtension();
				$image->move(public_path('images'), $new_name);
				if(isset($request->edit_agent_id)){ 
					$form_data = array(
					'form_name'       =>   $request->form_name,
					'user_type'        =>   $request->agent,
					'document'            =>   $new_name
					);
					$where = array('id' => $request->edit_agent_id);
					$result = admin_form::where($where)->update($form_data);
					return response()->json([
					'message'   => 'Form Data Updated Successfully',
					'class_name'  => 'alert alert-success'
					]);
				}
				else{
					$form_data = array(
					'form_name'       =>   $request->form_name,
					'user_type'        =>   $request->agent,
					'document'            =>   $new_name
					);
					$result = admin_form::create($form_data);
					$get_form_data = admin_form::find($result->id);
					return response()->json([
					'message'   => 'Form Data Save Successfully',
					'data' => $get_form_data,
					'class_name'  => 'alert alert-success'
					]);
				}
				

			}
			else{

				return response()->json([
				'message'   => $validation->errors()->all(),
				'uploaded_image' => '',
				'class_name'  => 'alert-danger'
				]); 
			}
		}   
    }
    public function edit(Request $request){
    	$edit_form_id = $request->edit_form_id;
    	$get_form_data = admin_form::find($edit_form_id);
		return response()->json([
       'message'   => 'true',
       'data' => $get_form_data
      ]);
    }
    public function delete(Request $request){
    	$delete_form_id = $request->form_delete_id;
    	$get_form_data = admin_form::where('id', $delete_form_id)->delete();
		return response()->json([
       'message'   => 'Form Data Delete Successfully',
		'class_name'  => 'alert alert-success'
      ]);
    }
}
