<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agents\Agent;
use App\Models\Agents\AgentNotes;
use App\Models\OfficeManager\OfficeManager;
use App\Models\States\State;
use App\Models\Cities\City;
use App\Models\Countries\Country;
use App\Models\ZipCodes\ZipCode;
use App\Models\Rules\Rule;
use App\Models\Tiers\Tier;
use Auth;
use App\Models\AgentTiersSetup\AgentTiersSetup;
use App\Models\AgentRulesSetups\AgentRuleSetup;
use App\Models\AdminExpenceModel\admin_expence;
use App\Models\miscincome\miscincome;
class DashboardController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $agent_id = $request['agent_id'];
        if($agent_id){
        $agent_id = $request['agent_id'];
        }
        else{
            $get_agent_id = Agent::first();
            $agent_id = $get_agent_id['id'];
        }
        $where = array('id' => $agent_id);
        $data['get_agent_info'] = Agent::with('offices','users','state','city')->where($where)->first();
        $agent_where = array('charge_agent_id' => $agent_id);
        $agent_expence = new admin_expence();
        $data['expence_list'] = $agent_expence->Where($agent_where)->get();
        $onhold_where = $arrayName = array('onhold' => 1, 'charge_agent_id' => $agent_id);
        $data['expence_total'] = $agent_expence->Where($onhold_where)->get();
        
        $result_onhold = $data['expence_total'];
        $total = 0;
        foreach ($result_onhold as $key => $onhold_total) {
            $total = $total+$onhold_total['charge_amount'];
        }
        $data['total'] = $total;
        //$status = array('agentInAct' => );
        $data['get_agent_info'] = Agent::with('offices','users','state','city')->where($where)->first();
        $data['get_agent_data'] = Agent::all();
        //$data['get_agent_data_status'] = Agent::all()->where('agentInAct', '=', 2);
        //dd($data['get_agent_data_status']);
        if(isset($request->agent_id)){
          $agentid = $request->agent_id;
        }
        else{
           $agentid = $data['get_agent_data'][0]['id']; 
        }
        $user_id = Auth::id();
        
                    $where = array('agent_id' => $agentid, 'user_id' => $user_id);
                    $data['get_result'] = AgentNotes::with('agent', 'user')->where($where)->get();
                    $obj_agent_rule = new AgentRuleSetup();
                    $obj_agent_tier = new AgentTiersSetup();
                    $data['AgentRuleSetup'] = $obj_agent_rule->where($where)->first();
                    $data['AgentTiersSetup'] = $obj_agent_tier->where($where)->get();
        $data['get_rules'] = Rule::all();
        $data['tier_get'] = Tier::all();
        $data['get_tier'] = AgentTiersSetup::with('Tier')->where($where)->get();
        $miscincome = new miscincome();
        $data['miscincome'] = $miscincome->where($where)->get();
        $onhold_where_misc_income = array('onhold' => 1, 'agent_id' => $agentid);
        $data['misc_income_total'] = $miscincome->Where($onhold_where_misc_income)->get();
        $result_onhold_misc_income = $data['misc_income_total'];
        $total_miscincome = 0;
        $total_misc = 0;
        foreach ($result_onhold_misc_income as $key => $onhold_total_misc) {
            $total_misc = $total_miscincome+$onhold_total_misc['amount'];
        }
        $data['total_misc'] = $total_misc;
    
        // echo "<pre>";
        // print_r($data['get_tier']); die();            
        $data2['get_agent_data_status'] = Agent::where('agentInAct', '=', 2)->get();
        return view('admin.dashboard',$data, $data2);
    }
    public function active()
    {
        //dd($request->all());
        //$id = session('esysid');
        $data['get_agent_data_status'] = Agent::where('agentInAct', '=', 2)->get();
        //dd($userDetail);
        //return redirect()->with('userDetail');
        return redirect()->back()->with('$data');
    }
    public function create(){
        $data['get_agent_data'] = Agent::all();
        //dd($data['get_agent_data']);
        //print_r($data['get_agent_data']);
        //exit();
        $data['get_country'] = Country::all();
        $data['OfficeManager'] = OfficeManager::all();
        return view('admin.agent_create', $data);
    }
    public function state(Request $request){
        $country_name = $request->country_name;
        $where = array('country_id' => $country_name);
        $state = new State();
       $get_state = $state->where($where)->get();
        return Response()->json($get_state);

    }
    public function city(Request $request){
        $state_name = $request->state_name;
        $where = array('state_id' => $state_name);
        $state = new City();
       $get_city = $state->where($where)->get();
        return Response()->json($get_city);

    }
    public function zipcode(Request $request){
        $city_id = $request->city_id;
        $where = array('city_id' => $city_id);
        $state = new ZipCode();
       $get_city = $state->where($where)->get();
        return Response()->json($get_city);

    }
    public function save(Request $request){

        //dd($request->active);

        $validatedData = $request->validate([
            'agent_first_name' => 'required',
            'agent_last_name' => 'required',
            'agent_display_name' => 'required',
            'agent_social_sec_name' => 'required',
            'agent_cell_number' => 'required',
            'agent_ph_number' => 'required',
            'agent_alt_number' => 'required',
            'agent_email_number' => 'required',
            'agent_address' => 'required',
            'agent_address_1' => 'required',
            'agent_country' => 'required',
            'agent_state' => 'required',
            'agent_city' => 'required',
            'agent_zipcode' => 'required',
            'invoice_date' => 'required',
            'hire_date' => 'required',
            'exit_date' => 'required',


        ]);
        //$agent_address = $request->agent_address . ' ' . $request->agent_address_1;
        if($request->agent_inactive == 'inactive'){
           $active = $request->agent_inactive;

        }
        else if($request->active == 'active'){
            $active = $request->active;
        }
        else{
            $active = 2;
        }
        if($request->override_applys){
           $override_applys = $request->override_applys;
        }
        else{
            $override_applys = 0;
        }
        if($request->agent_advanceable){
            $agent_advanceable = $request->agent_advanceable;
        }
        else{
            $agent_advanceable = 0;
        }
         //dd($active);
        $data = array(
        'agentfirstname' => $request->agent_first_name,
        'agentlastname' => $request->agent_last_name,
        'agentdisplayname' => $request->agent_display_name,
        'agentsocial' => $request->agent_social_sec_name,
        'agentcellphone' => $request->agent_cell_number,
        'agenthome' => $request->agent_ph_number,
        'agentAltNo' => $request->agent_alt_number,
        'agentemail' => $request->agent_email_number,
        'agentaddress' => $request->agent_address,
        'agentaddress_1' => $request->agent_address_1,
        'country_id' => $request->agent_country,
        'state_id' => $request->agent_state,
        'city_id' => $request->agent_city,
        'zipcode_id' => $request->agent_zipcode,
        'invoice_date' => $request->invoice_date,
        'agenthiredate' => $request->hire_date,
        'AgentDate' => $request->exit_date,
        'agentInAct' => $active,
        'agentofficeno' => $request->agent_office,
        'agentover' => $override_applys,
        'agentadve' => $agent_advanceable,
        'agentsever' => $request->hire_date,
        );
        
        $original_date = $request->hire_date;
        $timestamp = strtotime($original_date);
        $n1 = date("Y/m/d", $timestamp);
        $data['agenthiredate'] = $n1;
        //dd($n1);
        $original_date = $request->invoice_date;
        $timestamp = strtotime($original_date);
        $new_date = date("Y/m/d", $timestamp);
        $data['invoice_date'] = $new_date;
        // dd($new_date);

        $original_date =$request->exit_date;
        $timestamp = strtotime($original_date);
        $n2 = date("Y/m/d", $timestamp);
        $data['AgentDate'] = $n2;

        $original_date =$request->hire_date;
        $timestamp = strtotime($original_date);
        $n3 = date("Y/m/d", $timestamp);
        $data['agentsever'] = $n3;
        //dd($data);
        $result = Agent::create($data);
        //dd($result);
        return redirect('dashboard');
        
    }
    public function update(Request $request){
        //dd($request->agentInAct);
        //dd($request->all());

       
        $validatedData = $request->validate([
            'agent_first_name' => 'required',
            'agent_last_name' => 'required',
            'agent_display_name' => 'required',
            'agent_social_sec_name' => 'required',
            'agent_cell_number' => 'required',
            'agent_ph_number' => 'required',
            'agent_alt_number' => 'required',
            'agent_email_number' => 'required',
            'agent_address' => 'required',
            'agent_address_1' => 'required',
            'agent_country' => 'required',
            'agent_state' => 'required',
            'agent_city' => 'required',
            'agent_zipcode' => 'required',
            'invoice_date' => 'required',
            'hire_date' => 'required',
            'exit_date' => 'required',


        ]);
        
        // $agent_address = $request->agent_address . ' ' . $request->agent_address_1;
        // if($request->agent_address){
        //     $agent_address = $request->agent_address;    
        // }
        // else{
        //     $agent_address_1 = $request->agent_address_1;
        // }
        //$agent_address = $request->agent_address_1;
        //$active='';
        // $myVar = isset($request->account[0]) ? 1 : 0;
        if($request->agent_inactive == 2){
           $active = $request->agent_inactive;

        }
        else if($request->active == 1){
            $active = $request->active;
        }
        else{
            $active = 3;
        }
        if($request->override_applys){
           $override_applys = $request->override_applys;
        }
        else{
            $override_applys = 0;
        }
        if($request->agent_advanceable){
            $agent_advanceable = $request->agent_advanceable;
        }
        else{
            $agent_advanceable = 0;
        }
        //dd($agent_address);
        $data = array(
        'agentfirstname' => $request->agent_first_name,
        'agentlastname' => $request->agent_last_name,
        'agentdisplayname' => $request->agent_display_name,
        'agentsocial' => $request->agent_social_sec_name,
        'agentcellphone' => $request->agent_cell_number,
        'agenthome' => $request->agent_ph_number,
        'agentAltNo' => $request->agent_alt_number,
        'agentemail' => $request->agent_email_number,
        'agentaddress' => $request->agent_address,
        'agentaddress_1' => $request->agent_address_1,
        'country_id' => $request->agent_country,
        'state_id' => $request->agent_state,
        'city_id' => $request->agent_city,
        'zipcode_id' => $request->agent_zipcode,
        'invoice_date' => $request->invoice_date,
        'agenthiredate' => $request->hire_date,
        'AgentDate' => $request->exit_date,
        'agentInAct' => $active,
        'agentofficeno' => $request->agent_office,
        'agentover' => $override_applys,
        'agentadve' => $agent_advanceable,
        'agentsever' => $request->hire_date,
        );
        $Agent = new Agent();
        $ids = $request->agent_ids;
        $result = $Agent->where('id', $ids)->update($data);
        return redirect('dashboard');
    }
    public function get(Request $request){
        $data['get_agent_data'] = Agent::all();
        $data['get_country'] = Country::all();
        $data['OfficeManager'] = OfficeManager::all();
        $agent_id = $request['id'];
        if($agent_id){
        $agent_id = $request['id'];
        }
        else{
            $get_agent_id = Agent::first();
            $agent_id = $get_agent_id['id'];
        }
        $where = array('id' => $agent_id);
        //dd($where);
        $data['get_agent_info'] = Agent::with('offices','users','state','city', 'country','zipcodes')->where($where)->first();
        //dd($data['get_agent_info'] );
        return view('admin.agent_edit', $data);
    }
        public function create_agent_expence(Request $request)
    {
        $validatedData = $request->validate([
          'expence_amount' => 'required',
          'charge_type' => 'required'
        ]);

        $charge_type = $request->charge_type;
        $charge_date = $request->charge_date;
        $amount = $request->expence_amount;
        $comment = $request->expence_comment;
        $expence_agent_id = $request->expence_agent_id;
            $data = array(
                'charge_agent_id' => $expence_agent_id,
                'charge_type' => $charge_type,
                'charge_date' => $charge_date,
                'charge_amount' => $amount,
                'commit' => $comment, 
            );
            $result = admin_expence::create($data);
            return response()->json([
                    'message'   => 'Agent Expence Save Successfully',
                    'data' => $result,
                    'class_name'  => 'alert alert-success'
                    ]);

    }
    public function delete_expence(Request $request){
        $delete_charge_type = $request->delete_charge_type;
        $admin_expence = new admin_expence();
        $where = array('id' => $delete_charge_type);
        $result = $admin_expence->where($where)->delete();
        return response()->json([
                    'message'   => 'Agent Expence Delete Successfully',
                    'data' => $result,
                    'class_name'  => 'alert alert-success'
                    ]);

    }
    public function expence_onhold(Request $request){
        $expence_onhold = $request->expence_onhold;
        $expence_id = $request->expence_id;
        $where = array('id' => $expence_onhold);
        $data = array('onhold' => $expence_id);
        $admin_expence = new admin_expence();
        $result = $admin_expence->where($where)->update($data);
        return response()->json([
                    'message'   => 'Agent Expence On Hold',
                    'data' => $result,
                    'class_name'  => 'alert alert-success'
                    ]);

    }
    public function productivity_save(Request $request){
        if($request->office_manager_overide){
            $office_manager_overide = $request->office_manager_overide;
        }
        else{
            $office_manager_overide = 0;
        }
        if($request->vkp_slit_only){
            $vkp_slit_only = $request->vkp_slit_only;
        }
        else{
            $vkp_slit_only = 0;
        }
        if($request->gross_x_50){
            $gross_x_50 = $request->gross_x_50;
        }
        else{
            $gross_x_50 = 0;
        }
        if($request->spilt_over_beteen_2_mangers){
            $spilt_over_beteen_2_mangers = $request->spilt_over_beteen_2_mangers;
        }
        else{
            $spilt_over_beteen_2_mangers = 0;
        }
        
        $rent_tiers = $request->rent_tiers;
        $sale_tier = $request->sale_tier;
        $office_manage_override = $request->office_manage_override;
        $productivity_agent_id = $request->productivity_agent_id;
        $user_id = Auth::id();
        $productivity_rule = $request->productivity_rule;
        if(!empty($productivity_rule)){
            if($productivity_rule[1]){
                $rule_1 = $productivity_rule[1];
            }
            else{
                $rule_1 = 0;
            }
            if($productivity_rule[2]){
                $rule_2 = $productivity_rule[2];
            }
            else{
                $rule_2 = 0;
            }
            if(isset($productivity_rule[3])){
                $rule_3 = $productivity_rule[3];
            }
            else{
                $rule_3 = 0;
            }
            if(isset($productivity_rule[4])){
                $rule_4 = $productivity_rule[4];
            }
            else{
                $rule_4 = 0;
            }
            if(isset($productivity_rule[5])){
                $rule_5 = $productivity_rule[5];
            }
            else{
                $rule_5 = 0;
            }
            if(isset($productivity_rule[6])){
                $rule_6 = $productivity_rule[6];
            }
            else{
                $rule_6 = 0;
            }
            $where = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id);
            $AgentRuleSetup = new AgentRuleSetup();
            $result = $AgentRuleSetup->where($where)->get();
            $productivity_data = array(
                'officemanager' => $office_manager_overide,
                'wpsplitonly' => $vkp_slit_only,
                'gossfiftyp' => $gross_x_50,
                'splitbwtwo' => $spilt_over_beteen_2_mangers,
                'rule1' => $rule_1,
                'rule2' => $rule_2, 
                'rule3' => $rule_3,
                'rule4' => $rule_4,
                'rule5' => $rule_5,
                'rule6' => $rule_6,
                'user_id' => $user_id,
                'agent_id' => $productivity_agent_id,
            );
            if($result){
                $AgentRuleSetup->where($where)->delete();
                $AgentRuleSetup->create($productivity_data);
            }
            else{
                $AgentRuleSetup->create($productivity_data);
            }
            

        }


        $where = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id);

        $AgentTiersSetup = new AgentTiersSetup();
        $result = $AgentTiersSetup->where($where)->get();
        if($result){
            $AgentTiersSetup->where($where)->delete();
            $data = [];
            $data_sale_tier = [];
            $data_office_manage = [];
            if(!empty($rent_tiers)){
        foreach ($rent_tiers as $key => $rent_tiers_list) {
                $data = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id, 'tier_id' => $key, 'tierpercent' => $rent_tiers_list[0] );
                $results = $AgentTiersSetup->create($data);
        }
    }
    if(!empty($sale_tier)){
        foreach ($sale_tier as $keys => $sale_tier_list) {
            $data_sale_tier = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id, 'tier_id' => $keys, 'tierpercent' => $sale_tier_list[0] );
                $results = $AgentTiersSetup->create($data_sale_tier);
        }
    }
    if(!empty($office_manage_override)){
        foreach ($office_manage_override as $keys => $office_manage_list) {
            $data_office_manage = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id, 'tier_id' => $keys, 'tierpercent' => $office_manage_list[0] );
                $results = $AgentTiersSetup->create($data_office_manage);
        }
    }
        }
        else{
            $data = [];
            $data_sale_tier = [];
            $data_office_manage = [];
            if(!empty($rent_tiers)){
            foreach ($rent_tiers as $key => $rent_tiers_list) {
                $data = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id, 'tier_id' => $key, 'tierpercent' => $rent_tiers_list[0] );
                $results = $AgentTiersSetup->create($data);
        }
    }
    if(!empty($sale_tier)){
        foreach ($sale_tier as $keys => $sale_tier_list) {
            $data_sale_tier = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id, 'tier_id' => $keys, 'tierpercent' => $sale_tier_list[0] );
                $results = $AgentTiersSetup->create($data_sale_tier);
        }
    }
    if(!empty($office_manage_override)){
        foreach ($office_manage_override as $keys => $office_manage_list) {
            $data_office_manage = array('agent_id' => $productivity_agent_id, 'user_id' => $user_id, 'tier_id' => $keys, 'tierpercent' => $office_manage_list[0] );
                $results = $AgentTiersSetup->create($data_office_manage);
        }
}
        }
        return response()->json([
                    'message'   => 'Agent Expence Delete Successfully',
                    'class_name'  => 'alert alert-success'
                    ]);


    }
    public function expence_detial(Request $request){
        $detial_charge_type = $request->detial_charge_type;
        $where = array('id' => $detial_charge_type);
        $admin_expence = new admin_expence();
        $result = $admin_expence->with('agent_tbl')->where($where)->first();
        return response()->json([
                    'message'   => 'Agent Expence Delete Successfully',
                    'data' => $result,
                    'class_name'  => 'alert alert-success'
                    ]);

    }
    
}
