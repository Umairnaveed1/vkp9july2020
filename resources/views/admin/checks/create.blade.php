@extends('admin_layouts.layout')
@section('content')






        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> Check Screens </h2>
                              
                                
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
                            <div class="card card_address pl-3 pr-3">
                                    <div class="card-body add_office_cardbody">
                                 
                                    <form id="validationform" data-parsley-validate="" novalidate="">

                                        <div class="row">


                                                <div class="col col-sm-10 col-lg-12 offset-sm-1 offset-lg-0 mt-4 mb-4">
                                                    <div class="row float-right ">

                                                    <button type="submit" class="btn btn-space btn_promary_custom chk_scr_top_btn">Process Commissions</button>

                                                    <button type="submit" class="btn btn-space btn_promary_custom chk_scr_top_btn">Process Autopays</button>
                                              
                                            </div>
                                                </div>
                                          

                                            <div class="col-md-6 col-12">


                                                    <div class="form-group ">
                                                        <label for="sel1">Bank Account :    </label>
                                                        <div class="">
                                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                                                <option>Select Bank</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                




                                                    <div class="form-group ">
                                                        <label for="sel1">To Date : </label>
                                                        <div class="">
                                                               <input id="datepicker2" />
                                                        </div>
                                                    </div>        

                                                        <div class="form-group ">
                                                            <label for="text">Ist Check # : </label>
                                                            <div class="">
                                                                <input type="number" required="" data-parsley-maxlength="8" placeholder="" class="form-control">
                                                            </div>
                                                        </div>

                                            </div>


                                            <div class="col-md-6 col-12">


                                                    <div class="form-group ">
                                                        <label for="text">From Date :   </label>
                                                        <div class="">
                                                                <input id="datepicker" />
                                                                
                                                                  
 
                                                        </div>
                                                    </div>        

                                                    <div class="form-group ">
                                                        <label  for="sel1">Bank Account :   </label>
                                                        <div class="">
                                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                                                <option>Property Trust Account</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                              </select>
                                                        </div>
                                                    </div>

                         
                                                    <div class="form-group mt-md-5">
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="radio-inline" checked="" class="custom-control-input">
                                                            <span class="custom-control-label">Export Checks</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="radio-inline" class="custom-control-input">
                                                            <span class="custom-control-label">Pending Checks</span>
                                                        </label>
                                                    </div>
                                            


                                            </div>




                                      <table width="100%" class="table table-bordered table_office_manage table_responsive2 mt-5">
                                        <thead>
                                            <tr>
                                                            
                                                <th width="14%" scope="col"> Date</th>
                                                <th width="17%" scope="col">Vendor</th>
                                             
                                                <th width="10%" scope="col">Bank</th>
                                                <th width="12%" scope="col">Memo</th>
                                                <th width="11%" scope="col">CK#</th>
                                                <th width="10%" scope="col"></th>
                                                <th width="11%" scope="col">Amount</th>
                                                   <th width="11%" scope="col">Create Check</th>
                                                   <th width="11%" scope="col">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                     
                                                <!-- <th scope="row">07/30/15</th> -->
                                                <td>07/30/15</td>
                                                <td>Alice Pecoraro</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#"> Edit </a> </td>
                                                <td>$ 400.00 </td>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                    <input type="checkbox"  class="custom-control-input"><span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#"> Delete </a> </td>


                                            </tr>
                                        </tbody>
                                    </table>      
                                    <div class="col-12">               
                                        <div class="form-group row text-center mt-5">
                                            <div class="col col-sm-10 col-lg-9">
                                                <button type="submit" class="btn btn-space btn_promary_custom float-left">Export Checks</button>
                                                <button type="submit" class="btn btn-space btn_promary_custom float-left">Refresh</button>
                                                <button class="btn btn-space btn_promary_custom float-left">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
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
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
        <script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    
@endsection