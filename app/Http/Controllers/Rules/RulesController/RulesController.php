<?php

namespace App\Http\Controllers\Rules\RulesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Rules\Rule;
use App\Models\Tiers\Tier;
use App\Models\Percentages\Percentage;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;
use DB;
use Validator;
use Response;

class RulesController extends Controller
{
       public function index()
    {
           $user_id = Auth::user()->id;
 
          
          $data = DB::table('rules')
->select('rules.id','rules.ruledescription')
->join('users','users.id','=','rules.user_id')
->where(['user_id' => $user_id])
->get();
 

 
          
          $tiers = DB::table('tiers')
->select('tiers.id','tiers.tiertype','tiers.tierstart','tiers.tierend','tiers.tierpercent')
->join('users','users.id','=','tiers.user_id')
->where(['user_id' => $user_id])
->get();

$percentages = DB::table('percentages')
->select('percentages.id','percentages.daysfrom','percentages.daysto','percentages.latefee')
->join('users','users.id','=','percentages.user_id')
->where(['user_id' => $user_id])
->get();
 
         
           
        return view('rules.create',compact('data','tiers','percentages'));
         
           
             }
    public function post(Request $request ,$id)
    {
 
        $user_id = Auth::user()->id;
        $rules_data = $request->rules;
          
        $data = Rule::find($id);

        if ($data) {
             
Rule::where('id', $id )->update([
'ruledescription' => $rules_data
]);
 
return response()->json(['message' => 'update description successfully']);

// Session::flash('message', "Update Description");
// return back()->with('success', 'Thanks for contacting us!');
       return redirect()->back();
        }
   if ($id!='') {

        

if($rules_data == '' && $rules_data == Null)
{
    return response()->json(['rulemessage' =>'Cannot Insert The Null Value']);
}

    $form_data = array(
            'ruledescription'       =>   $rules_data,
            'user_id'    =>   $user_id
        );


        Rule::create($form_data);

return response()->json(['messageinsert' => 'Insert description successfully']);

 
       return redirect()->back();
       }    


       
      
     
     
        

    }
 



    public function managetier(Request $request ,$id)
    {
        $user_id = Auth::user()->id;
            $type = $request->type;
            $start = $request->start;
            $end = $request->end;
            $percentage = $request->percentage;
             $data = Tier::find($id);
  if ($data) {
             
Tier::where('id', $id )->update([
'tiertype' =>$type,
'tierstart'=>$start,
'tierend'=>$end,
'tierpercent'=>$percentage
]);
return response()->json(['message' => 'update description successfully']);
return Redirect::back();
        }


if ($id!='') {

    
if($type == '' && $type == Null)
{
    return response()->json(['rulemessage' =>'Cannot Insert The Null Value']);
}
            $tier = new Tier;

        $tier->tiertype = $type;
        $tier->tierstart = $start;
        $tier->tierend = $end;
        $tier->tierpercent = $percentage;
        $tier->user_id = $user_id;
 
        $tier->save();
        return response()->json(['messageinsert' => 'Insert description successfully']);
         }

    }
    // public function delete($idelete){

    //      $rule = Rule::find($idelete);
    //  $rule->delete();
    //  return Redirect()->back();

    // }

  // public function tierdelete($id){
    
  //        $tier = Tier::find($id);
         
  //    $tier->delete();
  //    return Redirect()->back();

  //   }



    public function managepercent(Request $request , $id){
    $daysfrom  = $request->dfrom;
     $daysto   = $request->dayto;
      $latefee = $request->latefee;
      $user_id  = Auth::user()->id;

 $data = Percentage::find($id);
  if ($data) {
             
Percentage::where('id', $id )->update([
'daysfrom' =>$daysfrom,
'daysto'=>$daysto,
'latefee'=>$latefee,
]);
return response()->json(['message' => 'update description successfully']);
        }


if ($id!='') {

    
if($daysfrom == '' && $daysfrom == Null)
{
    return response()->json(['rulemessage' =>'Cannot Insert The Null Value']);
}
        $percentage = new Percentage;

        $percentage->daysfrom = $daysfrom;
        $percentage->daysto = $daysto;
        $percentage->latefee = $latefee;
        $percentage->user_id = $user_id;
 
        $percentage->save();
        return response()->json(['messageinsert' => 'Insert description successfully']);
 

    }
}
}
