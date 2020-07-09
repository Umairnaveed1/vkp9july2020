@extends('admin_layouts.layout')
@section('content')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    @if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ $message }}</strong>

</div>

@endif
                            <div class="page-header">
                                <h2 class="pageheader-title"> Add/Edit Company Admin </h2>
                              
                                
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
                                   <div class="company_manage_w1">
                                        	<form id="validationform" method="POST" action="{{ route('compnay.admin.create') }}" enctype="multipart/form-data">
                                        		@csrf
                                            <div class="row">
                                             
    
           
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="text">Administrator Name :	</label>
                                                <div class="">
                                                    <input type="text" data-parsley-minlength="8" placeholder="Administrator Name" class="form-control @error('administrator_name') is-invalid @enderror" id="administrator_name" name="administrator_name" value="{{ old('administrator_name') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label for="text">Cell No :	</label>
                                                <div class="">
                                                    <input type="tel" placeholder="Cell Number" data-parsley-minlength="8" class="form-control @error('cell_no') is-invalid @enderror"name="cell_no" id="cell_no" value="{{ old('cell_no') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                     

                                      <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label for="text">Email :	</label>
                                                <div class="">
                                                    <input type="email" placeholder="Email" data-parsley-minlength="8" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                                </div>
                                            </div>
                                        </div>
                               
                                        
                                  
                                    
                                                
    
                                 
                                            <div class="col-12">
                                            <div class="form-group text-left">
                                               
                                                    <button type="submit" class="btn btn-space btn_promary_custom">Save</button>
                                                    <a href="javascript:void(0)" class="btn btn-space btn_promary_custom" id="btnClear">Cancel</a>
    
                                                
                                            </div>
                                        </div>
                                        </div>
                                        </form>
                               




                                
     
              </div>
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          
                          
                          
                          
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                    <h5 class="label_rule_heading2">View User List</h5>
                                    <form id="validationform" data-parsley-validate="" novalidate="">        
                                      
                                    <div class="form-group row text-center">
                                          
                                          
                                          <div class="col-sm-12">
                                                        <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Admin Name	</th>
                                                                    <th scope="col">Cell No	</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            	@foreach($admin_all as $list)
                                                                <tr>
                                                                    <th scope="row">{{ $list['administrator_name']}} </th>
                                                                    <th>{{ $list['cell_no']}}</th>
                                                                    <td>{{ $list['email']}}</td>
                                                                  <td> <a href="{{ url('compnay/admin/edit?').'id='. $list['id']}}" class="edit mr-2" title="edit" data-toggle="tooltip">
                                                                      <i class="material-icons"></i></a>
                                                                      <a href="{{ url('compnay/admin/delete?').'id='. $list['id']}}" class="delete  mr-2" title="Activate" data-toggle="tooltip">
                                                    
                                                                      <i class="material-icons">settings</i></a> 
                                                                        
                                                                  </td>
                                                                </tr>
                                                            @endforeach   
                                                                
                                                            </tbody>
                                                        </table>
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
@endsection