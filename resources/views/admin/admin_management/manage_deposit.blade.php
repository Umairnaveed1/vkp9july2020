        @extends('admin_layouts.layout')

        @section('content')



<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> Deposite Screen </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">

                        <div class="row">
                       
                        
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                                                   
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class=" col-12">
                            <div class="card card_address pl-3 pr-3 ">
                                    <div class="card-body add_office_cardbody search_inovice_w">
                                 
                <form action="/action_page.php" id="validationform" data-parsley-validate="" novalidate="">
                    <div class="col-md-12 col-12">
                        <div class="row">



                <div class="col-lg-6 col-12">
                    <div class="form-group ">
                        <label class="home_check"> &nbsp
                        <input type="checkbox">Unpaid Invoices
                        <span class="checkmark"></span>
                        </label>
                    </div>
                    </div>
                     
                    <div class="col-lg-6 col-12">
                    <div class="form-group  ">
                        <label class="home_check"> Paid Invoices
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                    </div>
                    </div>
                   
                    <div class="col-lg-12 col-12">
                     <div class="clear10"></div>
(Shows payments for the screen that is selected only)
  <div class="clear10"></div>
</div>

       <div class="col-lg-12 col-12">
                   <div class="clear10"></div>
<h5>Select Amount</h5>
  <div class="clear10"></div>
</div>

   
                    <div class="col-lg-6 col-12">
                        <div class="form-group ">
                            <label for="sel1">Bank Account :	</label>
                            <div class="">
                                <select class="form-control cust_frm_cntrl" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    </select>
                            </div>
                        </div>
                        <div class=" mt-3">
                                <button type="submit" class="btn btn-primary form_box_cust_btn pay_search_btn">Refresh</button>
                                <div class="clear20"></div>
                               </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="form-group ">
                            <label for="text">Comment :	</label>
                            <div class="">
                                <input type="text" required="" data-parsley-maxlength="8" placeholder="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="form-group ">
                            <label for="sel1">Deposite Date	</label>
                            <div class="">
                                <input id="datepicker1" />
                            </div>
                        </div>
                    </div>

                

                    
                                
                        </div>
                </div>
                </form>
                <div class="col-sm-12">
                               
<table width="100%" class="table table-bordered table_office_manage tbl_security_mnge table_responsive2 mt-3">
            <thead>
                <!-- <tr>
                                   
                    <th   scope="col"> Cash</th>
                    <th  scope="col">Checks</th>
                    <th  scope="col">Money Orders</th>
                    <th  scope="col">Total Deposits</th>
                 

                </tr> -->
            </thead>
            <tbody>
                <tr>
                    <td width="20%">Cash</td>
                <td width="40%"> $ 864 </td>
                    <td width="40%"> $ 864 </td>
                </tr>
                <tr>
                    <td>Checks</td>
                    <td>	(15202)</td>

                    <td> $ 9430186.43</td>
                </tr>
                <tr>
                    <td>Money Orders</td>
                    <td>(7999)</td>

                    <td>$ 3686050.98</td>
                </tr>
                <tr>
                    <td class="bold">Total Deposits</td>
                    <td>(23202</td>

                    <td>$ 13116885.41 </td>
                </tr>
            </tbody>
        </table>
        <div class=" mt-3">
                                <button type="submit" class="btn btn-primary form_box_cust_btn pay_search_btn">
                                Export Deposit
                                </button>
                                <div class="clear20"></div>
                                (Export Data to quick books)	
                               </div>
        </div>
     
            
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>

        
                  
                          <div class="col-xl-12 pl-0">
                            <div class="card card_address  pl-3 pr-3">
                                    <div class="card-body">
                                    
                                    <div class="col-sm-12"><h5></h5></div>

                                    
                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                           					
                                                <th width="13%" scope="col">Date</th>
                                                <th width="15%" scope="col">Type</th>
                                             
                                                <th width="35%" scope="col">
                                        CK / MO #	
                                           </th>
                                                <th width="13%" scope="col">Payee</th>
                                                <th width="15%" align="center" scope="col">Amount</th>
                                              <th width="13%" scope="col" align="center">Select All
                                               <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-label"> </span></label>
                                              </th>
                                               
                                        </thead>
                                        <tbody>
                                            <tr>
                     
                                                <td align="left" scope="row"> 11/17/14</td>
                                                <td align="left">Auto Pay</td>
                                                <td align="left">864839373938</td>
                                                <td>Canyon Springs</td>
                                          <td align="left">350</td>
                                                <td align="center">
          <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-label"> </span></label>
        </td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row"> 03/02/2020
                                                </td>
                                              <td align="left"> 3:11 AM</td>
                                              <td align="left">5 star management Company</td>
                                              <td> tft</td>

                                              <td align="left">admin</td>
                                              <td align="center">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                  <input type="checkbox" class="custom-control-input">
                                                  <span class="custom-control-label"> </span></label>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row"> 03/02/2020
                                                </td>
                                              <td align="left"> 3:11 AM</td>
                                              <td align="left">5 star management Company</td>
                                              <td> tft</td>

                                              <td align="left">admin</td>
                                              <td align="center">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                  <input type="checkbox" class="custom-control-input">
                                                  <span class="custom-control-label"> </span></label>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td align="left" scope="row"> 03/02/2020
                                                </td>
                                              <td align="left"> 3:11 AM</td>
                                              <td align="left">5 star management Company</td>
                                              <td> tft</td>

                                              <td align="left">admin</td>
                                              <td align="center">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                  <input type="checkbox" class="custom-control-input">
                                                  <span class="custom-control-label"> </span></label>
                                              </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                    <div class=" mt-3">
                                <button type="submit" class="btn btn-primary form_box_cust_btn pay_search_btn">Refresh</button>
                                <div class="clear20"></div>
                               </div>
                          
                                    </div>
                                    
                                    </div></div>




                          <!-- ******************************** -->
                                               <!-- Six Six Section -->

 
                          
                          
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



        @endsection