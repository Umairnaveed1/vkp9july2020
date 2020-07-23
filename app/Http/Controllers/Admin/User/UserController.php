<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use DB;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
 use App\Models\Agents\Agent;
 use App\Models\OfficeManager\OfficeManager;






class UserController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index(Request $request)
    {

         
             $users =DB::table('users')

                ->join('agents','users.id', '=', 'agents.user_id')
                ->join('offices', 'users.id', '=', 'offices.user_id')
                ->select('agents.agentfirstname','offices.*','users.*')
                ->paginate(20);
                 
              
                
return view('admin.users.index',compact('users'))->with('i', (request()->input('page', 1)
         - 1) * 5);

             


    	 

    	}

     public function create(Request $request)
    {
    	$users = User::all();

    	return view('admin.users.create');
   }
   public function status(Request $request, $id){
    $data = User::find($id);
 
    if ($data->status == 0) {
        # code...
        $data->status=1;
    }else{
        $data->status=0;
    }
    $data->save();
 
    return Redirect::to('users/index')->with('message', $data->UserName.' Status has been changed sucessfully.');
}

        public function setting(Request $request)
      {
        $users = User::orderby('created_at','desc')->paginate(5);
       // dd($users);
         return view('admin.users.users_setting',compact('users'));
      }


       public function settingsedit($id)
       {
            $userslist =  User::orderby('created_at','DESC')->where('id','>',0)->paginate(5);
          $users = User::findorFail($id);
          // dd($users);
          // $agents = Agent::find($id);
          // $offices = OfficeManager::find($id);
          return view('admin.users.users_edit_setting',compact('users','userslist'));
      
    }

    public function settingsupdate(Request $request, $id)
    {
       $request->validate(
                  [

                'UserName'     => 'sometimes|max:255',
                'dayname'    =>  'required|max:500',
            'timefrom' => 'required',
            'timeto' => 'required',
            'locked' => 'accepted|sometimes',

      
          ]);
                $users =

            [

                'UserName' => $request->UserName,

                'dayname' => $request->dayname,

                // 'password' => $request->password,

                'timefrom' => $request->timefrom,

                'timeto' => $request->timeto,
                'locked' => $request->locked,

            ];
               


        User::whereId($id)->update($users);
        return redirect('users/setting')->with('success','User setting Updated Successfully');;
    }




    

      public function settingstore(Request $request)
      {
          $request->validate([
          
           'dayname'   => 'required',
      'timefrom' => 'required',
        'timeto' => 'required|after:timefrom',
            'locked' => 'accepted|sometimes',
        ],[
             
              'dayname.required' => 'day name is required',
              'timefrom.required' => 'time from is required',
                'timeto.required' => 'time to is required',
                  'locked.required' => 'Locked is required',
            
        ]);

            $user = new User();
            $user->dayname = $request->get('dayname');
            $user->timefrom = $request->get('timefrom');
            $user->timeto = $request->get('timeto');
            $user->locked = $request->get('locked');
            $user->save();
            

            if($request->has('locked')){

              return redirect()->back()->with('success','User locked');
            }
            else{

                return redirect()->back()->with('info','User not locked');

            }

        }

     public function store(Request $request)
    {


        $request->validate([
           'UserName'       => 'required|string',
            'email'      => 'required|unique:users,email',
            'office_id' => 'sometimes',
            'PageSecurity' => 'required|integer',
            'AdminUser' => 'nullable|string',
            'agent_id' => 'sometimes',
             'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
			'password_confirmation' => 'min:6'
        ],[
              'UserName.required' => 'UserName is required',
              'PageSecurity.required' => 'Page Security is required',
              'AdminUser.required' => 'AdminUser is required',
              'password.min:6|required_with:password_confirmation|same:password_confirmation' =>
              'Password is required',
              'password_confirmation.min:6' => 'Password must be matched with new Password', 
        ]);

        
    	// $office = OfficeManager::find($id);
     //    $agent = Agent::find($id);

        $input = request()->all();

        $input['password'] = bcrypt($input['password']);

        // $users = array(
        //     'UserName'  =>   $request->UserName,
        //     'email' => $request->email,
        //     'PageSecurity'    => $request->PageSecurity,
        //     'AdminUser'  => $request->AdminUser,
        //     'password' =>bcrypt('password'),
        // );

         if($request->has('AdminUser'))
        {
        	
        	 User::create($input);
        	 // dd($users);
        	  return redirect()->back()->with('success', 'New User Added successfully.');
        	
        }
        else{

               User::create($input);
        	  return redirect()->back()->with('success', 'New User Added successfully.');
        		}
       
    		}

        public function edit($id)
        {

          $users = User::findorFail($id);
          // $agents = Agent::find($id);
          // $offices = OfficeManager::find($id);
          return view('admin.users.edit',compact('users'));

        }
      



           public function update(Request $request, $id)
    {


              $request->validate(
                  [

                'UserName'     => 'sometimes|max:255',
                'email'    =>  'required|email|unique:users,email,'. $id,
            'PageSecurity' => 'required|integer',
            'AdminUser' => 'nullable|string',
            'password' => 'same:password_confirmation',

      
          ]);
                $users =

            [

                'UserName' => $request->UserName,

                'email' => $request->email,

                // 'password' => $request->password,

                'PageSecurity' => $request->PageSecurity,

                'AdminUser' => $request->AdminUser,

            ];
                if($request->has('password')){


                      $users['password'] = $request->password;  
                      $password=User::findorFail($id);
                      $password->delete();

                }


        User::whereId($id)->update($users);
        return redirect('users/index')->with('success','User Updated Successfully');;
    }


	 }
