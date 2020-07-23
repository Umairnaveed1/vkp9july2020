@extends('admin_layouts.layout')
@section('content')
   
  <div class="dashboard-wrapper" style="margin-top: 50px">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> Change Password </h2>
                              
                               
                            </div>
                        </div>
                    </div>
                     @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif
       @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif
                    <div class="ecommerce-widget">

                        <div class="row">
                       
                        
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                                                   
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address pl-3 pr-3">
                                    <div class="card-body add_office_cardbody">
          
                                    <form action="{{url('updatepassword')}}" id="validationform"  method="post">


                                    @csrf
                        @method('PUT')
                                        <div class="row">
                                            <div class="change_pass_w1">

      
     
                                    <div class="">
                                        <div class="form-group">
                                            <label for="text">User Name :	</label>
                                            <div class="">
                                                <input type="text"  name="username" placeholder="admin" class="form-control"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group ">
                                            <label for="text">Old Password :	</label>
                                            <div class="">
                                                <input type="password"   placeholder="" class="form-control" name="old_password" required="">
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="">
                                        <div class="form-group ">
                                            <label for="text">New Password :	</label>
                                            <div class="">
                                                <input type="password"    placeholder="" class="form-control" name="new_password" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group ">
                                            <label for="text">Confirm Password :	</label>
                                            <div class="">
                                                <input type="password"   placeholder="" class="form-control" name="confirm_password" required="">
                                            </div>
                                        </div>
                                    </div>
                                  
                              <div class="col-12">
                                        <div class="form-group row text-left">
                                            <div class="">
                                            	 
                                                <button type="submit" class="btn btn-space btn_promary_custom">Save</button>
                                                <button type="reset" class="btn btn-space btn_promary_custom">Cancel</button>

                                            </div>
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




@endsection