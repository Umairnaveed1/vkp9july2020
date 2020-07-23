<?php

namespace App\Http\Controllers\Admin\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests;
use App\Models\Properties\Property;
use PDF;
use DB;

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

        $propertyreport = Property::pluck('propertyName','id');
        // dd($propertyreport);
    	return view('admin.reports.report_property',compact('propertyreport'));
    }
     public function printPDF(Request $request,$id)
    {
       // This  $data array will be passed to our PDF blade
              if ($request->ajax()) {
                
                $reportID = $request->reportID;
                    //dd($reportID);
                $propertydata = DB::table("properties")->get();
                           
                            }

        $propertydata = DB::table("properties")->get();

        view()->share('propertydata',$propertydata);


        if($request->has('download')){
            $pdf = PDF::loadView('admin.reports.property_report_pdf_view',compact('propertydata'));
            return $pdf->download('pdfview.pdf');
        }


        return view('admin.reports.property_report_pdf_view',compact('propertydata'));
    }

        //return $pdf->download('medium.pdf');
    

  public function export_pdf(Request $request)
  {
    // Fetch all customers from database
    
    $propertydata = Property::all();
  

        
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('admin.reports.property_report_pdf_view',compact('propertydata'));
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path('app') .'/'. 'myfile.pdf');
    // $file = storage_path('app') . '/' . $filename;
    // Finally, you can download the file using download function
    return $pdf->download('property.pdf');
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
