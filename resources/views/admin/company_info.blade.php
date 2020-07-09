
@extends('admin_layouts.layout')



@section('content')

        <div class="dashboard-wrapper">

            <div class="dashboard-ecommerce">

                <div class="container-fluid dashboard-content ">



/*@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif*/



                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="page-header">

                                <h2 class="pageheader-title"> Company Information </h2>

                              

                                

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

                <div class="card-body add_office_cardbody company_info_input">

                

                <form id="validationform" method="post" enctype="multipart/form-data" action="{{ route('company.create') }}">

                	@csrf

                    <div class="row mt-2 mb-4">

                        <div class="col-md-6 col-12">



                            <div class="form-group ">

                                <label for="text">Company Name : </label>

                                <div class="">

                                    <input type="text" data-parsley-min="6" placeholder="Valley King Properties" name="company_name" id="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{old('company_name')}} @if(isset($company_info['company_name'])) {{ $company_info['company_name'] }} @endif" required="required">
                                    

                                </div>

                            </div>       

                                



                            <div class="form-group ">

                                <label for="text">Company Address :	</label>

                                <div class="">

                                    <input type="text" required="" data-parsley-min="6" placeholder="15610 N 35th Ave , Ste 9" class="form-control @error('company_address') is-invalid @enderror" name="company_address" id="company_address" value="{{ old('company_address') }} @if(isset($company_info['company_address'])) {{ $company_info['company_address'] }} @endif">
                                </div>

                            </div> 



                    <div class="form-group ">

                        <label for="text">Company Phone :	</label>

                        <div class="">

                            <input type="number" required="" data-parsley-maxlength="8" placeholder="(602) 978-2558" class="form-control @error('company_phone') is-invalid @enderror" name="company_phone" id="company_phone" value="@if(isset($company_info['company_phone'])){{ $company_info['company_phone'] }}@endif{{ old('company_phone')}}" minlength="10">
                                  
                        </div>

                    </div>

                    <div class="form-group ">

                        <label for="text">Company Fax :	</label>

                        <div class="">

                            <input type="number" required="" data-parsley-maxlength="8" placeholder="(602) 375-0366" class="form-control @error('company_fax') is-invalid @enderror" name="company_fax" id="company_fax" value="@if(isset($company_info['company_fax'])){{ $company_info['company_fax'] }}@endif{{ old('company_fax')}}">
                            
                        </div>

                    </div>

                    <div class="form-group ">

                        <label for="text" class="bold">Disclaimer :	</label>

                        <div class="">

                            <textarea required="" placeholder="Test Disclaimer" class="form-control @error('disclaimer') is-invalid @enderror" name="disclaimer" id="disclaimer" value="{{ old('disclaimer')}}">{{ old('disclaimer')}} @if(isset($company_info['disclaimer'])) {{ $company_info['disclaimer'] }} @endif</textarea>
                        </div>

                    </div>



                        </div>





                        <div class="col-md-6 col-12">



                            <div class="form-group ">

                                <label for="text">Company Abbrevation</label>

                                <div class="">

                                    <input type="text" required="" data-parsley-min="6" placeholder="V.K.P." class="form-control @error('company_abbrevation') is-invalid @enderror" name="company_abbrevation" id="company_abbrevation" value="{{ old('company_abbrevation')}} @if(isset($company_info['company_abbrevation'])) {{ $company_info['company_abbrevation'] }} @endif">
                                    
                                </div>

                            </div> 



                                <div class="form-group ">

                                    <label for="text">&nbsp	</label>

                                    <div class="">
<input type="hidden" name="company_info_id" value="@if(isset($company_info['id'])) {{ $company_info['id'] }} @endif">
                                        <input type="text" required="" data-parsley-min="" placeholder="Phoenix , AZ 85053" class="form-control @error('company_address_1') is-invalid @enderror" name="company_address_1" id="company_address_1" value="{{ old('company_address_1')}} @if(isset($company_info['company_address_1'])) {{ $company_info['company_address_1'] }} @endif">
                                    </div>

                                </div>



                                <div class="form-group ">

                                    <label for="text">&nbsp	</label>

                                    <div class="">

                                        <input type="text" required="" data-parsley-min="" placeholder="" class="form-control @error('company_phone_1') is-invalid @enderror" name="company_phone_1" id="company_phone_1" value="{{ old('company_phone_1')}} @if(isset($company_info['company_phone_1'])) {{ $company_info['company_phone_1'] }} @endif">
                                    </div>

                                </div>

                                <div class="form-group ">

                                    <label for="text">Company Email :	</label>

                                    <div class="">

                                        <input type="email" required="" data-parsley-min="" placeholder="billing@valleyking.com" class="form-control @error('company_emial') is-invalid @enderror" name="company_emial" id="company_emial" value="{{ old('company_emial')}} @if(isset($company_info['company_email'])) {{ $company_info['company_email'] }} @endif">
                                   
                                    </div>

                                </div>



                        </div>

                        <div class="col-12">

                            <div class="form-group row text-left">

                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0 ">

                                    <button type="submit" class="btn btn-space btn_promary_custom ">Save</button>



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

                

                

                

                          

<!--                           

                          <div class="mrg_addres_area">

                          <div class="col-sm-12">

                         

                            <div class="row">

                            <div class="col-sm-12 col-12">

                            <div class="card card_address">

                                    <div class="card-body">

                                    <h5 class="label_rule_heading2"> Disclaimer</h5>

                                    <form id="validationform" data-parsley-validate="" novalidate="">        

                                        <div class="form-group ">

                                            <label for="text">Office Address :	</label>

                                            <div class="">

                                                <textarea required="" class="form-control"></textarea>

                                            </div>

                                        </div>

                                    

                                                                            

                                    <div class="form-group row text-right">

                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">

                                            <button type="submit" class="btn btn-space btn_promary_custom">Delete</button>



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

                          

                          </div> -->

                          

                          

                          

                          

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