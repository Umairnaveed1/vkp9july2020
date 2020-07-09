@extends('admin_layouts.layout')
@section('content')        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">REPORTS SCREEN </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">

        <div class="row">
        
        
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">                          
            
            <div class="mrg_addres_area">
            <div class="col-sm-12">
            
            <div class="row">
            <div class="col-sm-12 col-12">
            <div class="card card_address">
                    <div class="card-body">
                    <!-- <h5 class="label_rule_heading2"> Report Menu</h5> -->
                    <form id="validationform" data-parsley-validate="" novalidate="">  
                            <div class="col-12">
                        <div class="row justify-content-center">
                            
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a type="submit" href="{{route('reports.property') }}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> description</i>Property
                                        <i class="fa fa-angle-right report_cust_arrow_btn" aria-hidden="true"></i> </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a  href="{{route('reports.propertyreceipt') }}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> receipt </i> Property Receipts
                                    <i class="fa fa-angle-right report_cust_arrow_btn " aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{ route('reports.property_deliquency') }}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> portrait </i> Property Deliquency
                                    <i class="fa fa-angle-right report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{route('reports.property.notes')}}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> menu </i> Property Notes
                                    <i class="fa fa-angle-right report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{ route('reports.agent.advance') }}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn">person </i> Agent Advance
                                    <i class="fa fa-angle-right  report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{route('reports.agentproductivity')}}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> people_alt </i> Agent Productivity
                                    <i class="fa fa-angle-right  report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{route('reports.autopayaummary')}}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> library_books </i> Autopay Summary
                                    <i class="fa fa-angle-right report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{route('reports.comissionsummary')}}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> menu_book </i> Commission Summary
                                    <i class="fa fa-angle-right report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-6     my-md-3 mb-3">
                                <a href="{{ route('reports.agentcomission') }}" class="btn btn-space btn_promary_custom report_cust_btn  ">
                                    <i class="material-icons report_cust_file_icn"> speaker_notes </i> Agent Commission
                                    <i class="fa fa-angle-right  report_cust_arrow_btn" aria-hidden="true"></i>
                                </a>
                            </div>

                                <!-- <button type="submit" class="btn btn-space btn_promary_custom">Property Receipts</button>
                                <button class="btn btn-space btn_promary_custom">Property Deliquency</button> -->
                                <!-- <button type="submit" class="btn btn-space btn_promary_custom">Property Notes</button>
                                <button type="submit" class="btn btn-space btn_promary_custom">Agent Advance</button>
                                <button class="btn btn-space btn_promary_custom">Agent Productivity</button>
                                <button type="submit" class="btn btn-space btn_promary_custom">Autopay Summary</button>
                                <button type="submit" class="btn btn-space btn_promary_custom">Commission Summary</button>
                                <button class="btn btn-space btn_promary_custom">Agent Commission</button> -->

                        </div>
                        </div>
                        






                        <!-- <div class="col-12">
                            <div class="form-group row text-left">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn_promary_custom">View</button>
                                    <button type="submit" class="btn btn-space btn_promary_custom">Add</button>
                                    <button class="btn btn-space btn_promary_custom">Search</button>
                                </div>
                            </div>
                        </div> -->
                                                    
                    </form>
                




                

            <div class="col-sm-12">
            
            </div>
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          
                          
                          
                          <div class="clearfix"></div>
                          
                       
                          
                          
                          
                          
                          
                          
                  </div>
                            
                        </div>

                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                             Copyright © 2020 ValleyKing.com. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                            <div class="text-md-right footer-links d-none d-sm-block">
                               Designed & Developed by<a href="https://leadconcept.com/" target="_blank"> LEADconcept</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
 

  


    <script>
                $('.datepicker').datepicker().on('changeDate', function(){
          $(this).blur();
        }); 
    </script>
    
@endsection