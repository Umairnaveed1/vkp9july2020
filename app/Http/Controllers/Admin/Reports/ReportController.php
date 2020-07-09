<?php

namespace App\Http\Controllers\Admin\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ReportController extends Controller
{
    public function __construct()
    {
    	return $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.reports.index');
    }
     public function property()
    {
    	return view('admin.reports.report_property');
    }
    
     public function propertyreceipt()
    {
    	return view('admin.reports.reports_receipt');
    }
      public function propertydeliquency()
    {
    	return view('admin.reports.reports_property_deliquency');
    }
      public function propertynotes()
    {
    	return view('admin.reports.propertynotes');
    }
      public function agentadvance()
    {
    	return view('admin.reports.agentadvance');
    }


      public function agentproductivity()
    {
    	return view('admin.reports.reports_agent_productivity');
    }
      public function autopayaummary()
    {
    	return view('admin.reports.reports_Property_AutoPay_Summary');
    }
      public function agentcomission()
    {
    	return view('admin.reports.reports_Agent_Commission_Summary');
    }
    public function comissionsummary()
    {
    	return view('admin.reports.comissionsummary');
    } 


}
