<?php

namespace App\Http\Controllers\Admin\SearchInvoice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\SearchInvoice\SearchInvoice;
use DB;
use Auth;
use App\Models\Properties\Property;
use App\Models\Company_Managment\company_managment;
use App\Models\Agents\Agent;
use Illuminate\Support\Carbon;
use App\User;
use Input;
use App\Models\Invoices\Invoice;


class SearchInvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['property'] = Property::pluck('propertyName','id');
        $data['mgmt_company'] = company_managment::pluck('mgt_company','id');
        $data['agent'] = Agent::pluck('agentfirstname','id');
      
        // dd($result); // this will print out the results

        // dd($models);
        return view('admin.searchinvoice.index',$data);
    }

    public function search(){
        return view('admin.searchinvoice.index');

    }
    public function get_search(Request $request){
        $search_from = $request->search_from;
        $search_to = $request->search_to;
        $Invoice = new Invoice();
        $result = $Invoice->with('inv_property','agents','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->whereBetween('id', [$search_from,$search_to])->get();
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);


    }
    public function get_search_first(Request $request){
        $search_from = $request->search_from;
        $Invoice = new Invoice();
        $result = $Invoice->with('inv_property','agents','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->where(['id' => $search_from])->get();
        // dd($result);
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);


    }
    public function get_property_search(Request $request){
        $property_search = $request->property_search;
        $Invoice = new Invoice();
        $result = $Invoice->with('inv_property','agents','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->where(['id' => $property_search])->get();
        // dd($result);
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);


    }
    public function get_tenant(Request $request){
        $tenant_name = $request->tenant_name;
        $Invoice = new Invoice();
        $result = $Invoice->with('inv_property','agents','inv_city_list','inv_country_list','inv_state_list','inv_zipcode_list')->where(['id' => $tenant_name])->get();
        // dd($result);
        return response()->json([
                    'message'   => 'Form Data Updated Successfully',
                    'data' => $result,
                    'class_name'  => 'alert-success'
                    ]);


    } 

}
