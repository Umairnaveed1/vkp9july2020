@extends('admin_layouts.layout')
@section('content')
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                     <div class="row">
       
            <div class="col-sm-12 text-right">

              <a href="{{ route('agents.billing') }}" class="btn_add_agent "> Billing</a>

            <a href="{{route('home')}}" class="btn_add_agent "> Phone List</a>
            
            <a href="{{route('agent.resource')}}" class="btn_add_agent btn_add_agent_active"> Resources</a>
            
            <div class="clear20"></div>
            </div> 
         
           
          </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> Welcome to Valley King Properties Agent Billing</h2>
                              
                                
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
                                 
                               <div class="text-center">  Hello Mike You are at 0 for the Month of April  2020</div>
                                 
                                    <form action="#" id="validationform" data-parsley-validate="" novalidate="">
                                        <div class="row justify-content-center align-center">

                                            <div class="col-sm-12 text-center mt-4">
                                                <img src="{{asset('public/assets/images/logo.png') }}" width="135" height="117" style="width:135px !important; height:117px !important; margin:0px;">
                                                <br>

                                            </div>
                                           
                                            <div class="text-center"> 
                                             <div class="clear10"></div>
                                             Hello Mike You are at 0 for the Month of April  2020</div>
                                        <div class="col-12 mt-4 text-center">                        
                                    <div class="form-group text-left m-auto bill_main_w">
                                        <label class="custom-control custom-radio">
                                            <form>
                                            <input type="radio" value="bx1" id="websites" name="billing"  class="custom-control-input">
                                            <span class="custom-control-label">Apartment</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" id="websites" value="bx2" name="billing" class="custom-control-input">
                                            <span class="custom-control-label">Home Lease</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" id="websites"  value="bx3" name="billing" class="custom-control-input">
                                            <span class="custom-control-label">Home Sale</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" value="bx4" id="websites" name="billing" class="custom-control-input">
                                            <span class="custom-control-label">Fee Voucher / Autopay</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mt-3 text-center">
                                    <div class="col-12">
                   <a href=""  id="open_new_tab" class="btn btn-space btn_promary_custom continue">Continue</a>

                                    </form>
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

 

  <style>
  .bill_main_w
  {
	  width:180px;
	  margin:auto;
  }
  
  </style>

@endsection