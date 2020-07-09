<?php

namespace App\Http\Controllers\Password;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class ChangepassController extends Controller
{
     public function index()
     {

     	return view('changepassword.reset');
     	 
     }



     public function update(Request $request)
     {

    //  	$this->validate($request, [
    //     'old_password'     => 'required',
    //     'new_password'     => 'required|min:6',
    //     'confirm_password' => 'required|same:new_password',
    // ]);

    $data = $request->all();
 
       $user_id = Auth::user()->id;
       $user = User::find($user_id);

      
    if(!\Hash::check($data['old_password'], $user->password)){
 
         Session::flash('message', 'Your old password is Wrong!'); 
         return redirect()->back();
     }

    else{

      if ($data['new_password'] == $data['confirm_password']) { 

   $user->fill([
   	'UserName'         =>  $request->username,
    'password' => Hash::make($request->new_password)

    ])->save();

   Session::flash('message', 'Your password is update!'); 
     return redirect()->back();

}
else{
	 Session::flash('message', 'Your confirm password is Wrong!'); 
         return redirect()->back();
}

    }
    

     }
}
