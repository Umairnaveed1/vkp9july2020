@extends('admin_layouts.layout')
@section('content')




<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">  COMPANY INFORMATION </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                         
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card egent_list_box">
                                    <h5 class="card-header">Management List <img src="images/agent_list_icon.png" width="20" height="25" alt=""> </h5>
                                    <div class="card-body agent_list_body">
                                    
                                    <ul>	
                                    @foreach($get_company_data as $company_list)
                   <li><a href="{{ url('compnay/managment?') .'company_id='. $company_list['id'] }}" class="get_company" 
                   data-attr-id="{{ $company_list['id'] }}">
                   <i class="fa fa-angle-right" aria-hidden="true"></i> 
                   {{ $company_list['mgt_company'] }}</a>
                   </li>
@endforeach
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                <!-- <a href="#" class="btn_add_agent btn_add_agent_active btn_add_agent2"><img src="images/ad_icon.png" alt=""> Add Management</a> -->
                                <a href="{{ url('compnay/managment/create') }}" class="btn_add_agent btn_add_agent_active btn_add_agent2">
                                <img src="{{ URL::asset('public/assets/images/ad_icon.png') }}" alt=""> Add Management</a>

                              <div class="clear20"></div>
                                  <a href="#" class="btn_show_inactive m-0"><img src="images/icon1.png" alt=""> Show Inactive</a>
                                  </div>
                                  <div class="clear20"></div>
                            </div>
                           
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                            
                                
                          
                        
                          <div class="col-sm-12 p-0">
                         
                            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
                           
                            
							 <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                            <div class="card card_address">
                                    <div class="card-body">
                                     <div class="col-sm-12">
                                      <div class="row">
       <div class="col-sm-12">  <h5 style="color:#000 !important;"> Management Company:
       @if(isset($get_company_info['mgt_company']))<quo> {{ $get_company_info['mgt_company'] }}</quo> 
       @else 1st to Rent
        @endif

       </h5>
       
       </div>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
            <div class="clear20">
            </div>               
               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table table-responsive table">
  <tr>
    <td class="address_td_1 ">Address:
</td>
    <td class="address_td_2 office_address_1">
    @if(isset($get_company_info['office_address'])) 
    {{ $get_company_info['office_address'] }} @else 801 E Beck Lane
     @endif</td>
    <td class="address_td_2">
    &nbsp;
    </td>
    <td class="address_td_2">&nbsp;</td>
  </tr>
  <tr>
    <td class="address_td_1">City:
</td>
    <td class="address_td_2 city_1">@if(isset($get_company_info['city_list']['cityname'])) {{ $get_company_info['city_list']['cityname'] }} @else Phoenix @endif</td>
    <td  class="address_td_2">State: </td>
    <td class="address_td_2 state_1">
    @if(isset($get_company_info['state_list']['statename'])) {{ $get_company_info['state_list']['statename'] }}
     @else 
    State Name @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_1 zip_1">Zip:
</td>
    <td class="address_td_2">@if(isset($get_company_info['zipcode_list']['zipcode'])) {{ $get_company_info['zipcode_list']['zipcode'] }} @else 85022 @endif</td>
    <td class="address_td_2">Country:</td>
    <td class="address_td_2">
    @if(isset($get_company_info['country_list']['countrysh'])) 
    {{ $get_company_info['country_list']['countrysh'] }} 
    @else USA @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Phone #:
    </td>
    <td class="address_td_2 phone_1">
    @if(isset($get_company_info['phone'])) {{ $get_company_info['phone'] }} 
    @else
     602-374-7288
      @endif
    </td>
    <td  class="address_td_1">Fax #: </td>
    <td class="address_td_2 fax_1">
    @if(isset($get_company_info['fax'])) {{ $get_company_info['fax'] }} @else 623-321-9899 @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_1">Alternate #:
</td>
    <td class="address_td_2 alt_1"
    >@if(isset($get_company_info['alt']))
     {{ $get_company_info['alt'] }}
      @endif
     </td>
    <td class="address_td_1">Email :</td>
    <td class="address_td_2 email_1">
    @if(isset($get_company_info['email'])) 
    {{ $get_company_info['email'] }} 
    @else 
     @endif</td>
  </tr>
  <tr>
  
    <td class="address_td_2">
      <form class="active_1">
        
        <label class="custom-control custom-checkbox custom-control-inline">
            Active :
          <input type="checkbox" name="active" class="custom-control-input"
           @if(isset($get_company_info['active']) == 1) 
           checked 
          @endif >
          <span class="custom-control-label"></span>
          </label>
      </form></td>
    <td class="address_td_1">&nbsp;</td>
    <td class="address_td_2">
    <form class="active_2">
      <label class="custom-control custom-checkbox custom-control-inline">
          Inactive
        <input type="checkbox" name="active" class="custom-control-input" 
        @if(isset($get_company_info['active']) == 0) 
          checked
         @endif>
        <span class="custom-control-label"></span> </label>
    </form></td>
    <td class=""></td>
  </tr>
</table>
                                     
                                    </div></div></div>
                                          </div>
                                    </div>
                                    </div>
									
									
									
									</div>
									
									
									
									
									
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                         
                          
                          
                          <div class="clearfix"></div>
                          
                          <div class="row">
                          <div class="col-sm-12">
                          
                          
                          <!-- <a href="#" class="btn_add_agent"><img src="images/edit_icon.png" alt=""> Edit</a> -->
                          <a href="{{ url('compnay/managment/edit?') . 'id=' .  $get_company_info['id'] }}" class="btn_add_agent edit_company"><img src="{{ URL::asset('public/assets/images/edit_icon.png') }}" alt=""> Edit</a>

                          <a href="#" class="btn_add_agent"><img src="images/save_icon.png" alt=""> Save</a>
                          
                          <a href="#" class="btn_add_agent"><img src="images/cancel_icon.png" alt=""> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          
                            <div class="clear20"></div>
                          
                          <div class="row">
                          <div class="col-sm-12 meg_btn_general">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General</a>
                          
                          <a href="#" class="btn_general_h"> Properties</a>
                           <a href="#" class="btn_general_h"> History / Notes</a>
                           <a href="#" class="btn_general_h"> Email Invoices</a>
                          
                          
                          </div> 
                          </div>
                          
                          
                          
                          
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



 <!-- <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Management Companies </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                         
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card egent_list_box">
                                    <h5 class="card-header">Management List <img src="images/agent_list_icon.png" width="20" height="25" alt=""> </h5>
                                    <div class="card-body agent_list_body">
                                    
                                    <ul>	

@foreach($get_company_data as $company_list)
<li><a href="#" class="get_company" data-attr-id="{{ $company_list['id'] }}"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $company_list['mgt_company'] }}</a></li>
@endforeach




                                    
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                  <a href="#" class="btn_show_inactive m-0"><img src="images/icon1.png" alt=""> Show Inactive</a>
                                  </div>
                                  <div class="clear20"></div>
                            </div>
                           
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                            
                                
                          
                        
                          <div class="col-sm-12 p-0">
                         
                            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							 <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                            <div class="card card_address">
                                    <div class="card-body">
                                        
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
    <td class="address_td_1">MGT. Company :</td>
    <td class="address_td_2 mgt_company_1">@if(isset($get_company_info['mgt_company'])) {{ $get_company_info['mgt_company'] }} @else 1st to Rent @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Country :</td>
    <td class="address_td_2 country_1">@if(isset($get_company_info['country_list']['countrysh'])) {{ $get_company_info['country_list']['countrysh'] }} @else USA @endif</td>

  </tr>
  <tr>
    <td class="address_td_1">City :</td>
    <td class="address_td_2 city_1">
    @if(isset($get_company_info['city_list']['cityname'])) {{ $get_company_info['city_list']['cityname'] }} @else Phoenix @endif</td>

  </tr>
  <tr>
    <td class="address_td_1">Ph# :	</td>
    <td class="address_td_2 phone_1">@if(isset($get_company_info['phone'])) {{ $get_company_info['phone'] }} @else 602-374-7288 @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Alt # :</td>
    <td class="address_td_2 alt_1">@if(isset($get_company_info['alt'])) {{ $get_company_info['alt'] }} @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Active :	</td>
    <td class="address_td_2 "><form class="active_1">
                                           
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" 
                                                @if(isset($get_company_info['active']) == 1) checked @endif
                                                ><span class="custom-control-label"></span>
                                            </label>
                                        </form></td>
  </tr>
</table>
                                          </div>
                                    </div>
                                    </div>
									<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                            <div class="card card_address">
                                    <div class="card-body">
                                        
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
   
    <td  class="address_td_2"><span class="address_td_1">Office Address : </span></td>
    <td class="address_td_2 office_address_1">@if(isset($get_company_info['office_address'])) {{ $get_company_info['office_address'] }} @else 801 E Beck Lane @endif</td>
  </tr>
  <tr>
  
    <td class="address_td_2"><span class="address_td_1">State :</span></td>
    <td class="address_td_2 state_1">@if(isset($get_company_info['state_list']['statename'])) {{ $get_company_info['state_list']['statename'] }} @else Arizona @endif</td>
  </tr>
  <tr>
  
    <td  class="address_td_1">Zip :	</td>
    <td class="address_td_2 zip_1">@if(isset($get_company_info['zipcode_list']['zipcode'])) {{ $get_company_info['zipcode_list']['zipcode'] }} @else 85022 @endif</td>
  </tr>
  <tr>
    
    <td class="address_td_1">Fax # :	</td>
    <td class="address_td_2 fax_1">@if(isset($get_company_info['fax'])) {{ $get_company_info['fax'] }} @else 623-321-9899 @endif</td>
  </tr>
  <tr>
   
    <td class="address_td_1">Email :</td>
    <td class="address_td_2 email_1">@if(isset($get_company_info['email'])) {{ $get_company_info['email'] }} @else  @endif</td>
  </tr>
  <tr>
   
    <td class="address_td_2">&nbsp;</td>
    <td class="address_td_2">&nbsp;</td>
  </tr>
</table>
                                          </div>
                                    </div>
                                    </div>
									
									
									
									
                                    </div>
									
									
									
									
									
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                         
                          
                          
                          <div class="clearfix"></div>
                          
                          <div class="row">
                          <div class="col-sm-12">
                          <a href="{{ url('compnay/managment/create') }}" class="btn_add_agent btn_add_agent_active"><img src="{{ URL::asset('public/assets/images/ad_icon.png') }}" alt=""> Add Management</a>
                          
                          <a href="{{ url('compnay/managment/edit?') . 'id=' .  $get_company_info['id'] }}" class="btn_add_agent edit_company"><img src="{{ URL::asset('public/assets/images/edit_icon.png') }}" alt=""> Edit</a>
                          
                          <a href="#" class="btn_add_agent"><img src="{{ URL::asset('public/assets/images/save_icon.png') }}" alt=""> Save</a>
                          
                          <a href="#" class="btn_add_agent"><img src="{{ URL::asset('public/assets/images/cancel_icon.png') }}" alt=""> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          
                            <div class="clear20"></div>
                          
                          <div class="row">
                          <div class="col-sm-12 meg_btn_general">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General</a>
                          
                          <a href="#" class="btn_general_h"> Properties</a>
                           <a href="#" class="btn_general_h"> History / Notes</a>
                           <a href="#" class="btn_general_h"> Email Invoices</a>
                          
                          
                          </div> 
                          </div>
                          
                          
                          
                          
                  </div>
                            
                        </div>

                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
   <!-- </div> -->
  

 <script type="text/javascript">
   $('.get_company').on('click', function(){
    $('.zip_id').html('');
      var get_company = $(this).attr('data-attr-id');
      
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type:"POST",
        url: "{{ url('compnay/managment/get_list') }}",
        data: {get_company:get_company},
        success: function(data){
          console.log(data);
          $('.active_1').html('');
          $('.active_2').html('');
         $('.mgt_company_1').text(data['mgt_company']);
         $('.country_1').text(data['country_list']['countrysh']);
         $('.state_1').text(data['state_list']['statename']);
         $('.city_1').text(data['city_list']['cityname']);
         $('.zip_1').text(data['zipcode_list']['zipcode']);
         $('.fax_1').text(data['fax']);
         $('.phone_1').text(data['fax']);
         $('.alt_1').text(data['alt']);
         $('.email_1').text(data['email']);
         $('.office_address_1').text(data['office_address']);
         $('.edit_company').attr('href', url +"?id="+data['id']);
         if(data['active'] == 1){
          $('.active_1').append('<label class="custom-control custom-checkbox custom-control-inline">'+
                                                '<input type="checkbox" class="custom-control-input" checked><span class="custom-control-label"></span>'+
                                            '</label>');
         }
         else{
          $('.active_2').append('<label class="custom-control custom-checkbox custom-control-inline">'+
                                                '<input type="checkbox" class="custom-control-input" checked><span class="custom-control-label"></span>'+
                                            '</label>');
         }

         }
         
        }
      });

   });

   
 </script>
 @endsection