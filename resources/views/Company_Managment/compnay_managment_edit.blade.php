 @extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
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


                                    <li><a href="{{ url('compnay/managment?') .'company_id='. $company_list['id'] }}"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $company_list['mgt_company'] }}</a></li>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <div class="ad_management_comapny">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
<form action="{{ route('compnay.managment.update') }}" method="POST">   @csrf                                  	
  <tr>
    <td class="address_td_1">MGT. Company :</td>
    <td class="address_td_2"><div class="col-sm-11"><input name="mgt_company_name" id="mgt_company_name" class="form-control @error('mgt_company_name') is-invalid @enderror" placeholder="1st to Rent" type="text" required="required" value="{{ $get_company['mgt_company'] }}"></div></td>
  </tr>
  <tr>
   
    <td  class="address_td_2"><span class="address_td_1">Office Address : </span></td>
    <td class="address_td_2"><div class="col-sm-11"><input name="office_address" id="office_address" class="form-control @error('office_address') is-invalid @enderror" placeholder="801 E Beck Lane" type="text" required="required" value="{{ $get_company['office_address'] }}"></div></td>
  </tr>
  <tr>
        <td class="address_td_1">Country :</td>
        <td class="address_td_2">
        
         <div class="col-sm-11">
          <input type="hidden" name="company_get_id" value="{{ $get_company['id'] }}">
    <select name="country_name" id="country_name" class="form-control country_name @error('country_name') is-invalid @enderror" required="required">
    	<option value="">----------Select-----------</option>
      @if(isset($get_company['country_list']['countryname'])) 
      <option value="{{ $get_company['country_list']['id'] }}" selected="">{{ $get_company['country_list']['countryname'] }}</option>
       @endif
    	@foreach($country as $list)
                		<option value="{{ $list['id'] }}">{{ $list['countryname'] }}</option>
		@endforeach
		

	</select>
    </div>
        </td>
    
      </tr>
        <tr>
  
                <td class="address_td_2"><span class="address_td_1">State :</span></td>
                <td class="address_td_2"><div class="col-sm-11">
                <select class="form-control state_name" name="state_name" required="required">
                	<option value="">----------Select-----------</option>
                   @if(isset($get_company['state_list']['statename'])) 
      <option value="{{ $get_company['state_list']['id'] }}" selected="">{{ $get_company['state_list']['statename'] }}</option>
       @endif

	</select>
                </div></td>
              </tr>

  <tr>
    <td class="address_td_1">City :</td>
    <td class="address_td_2">
    <div class="col-sm-11">
    <select name="city_id" id="city_id" class="form-control city_id @error('city_id') is-invalid @enderror" required="required">
    	<option value="">----------Select-----------</option>
       @if(isset($get_company['city_list']['cityname'])) 
      <option value="{{ $get_company['city_list']['id'] }}" selected="">{{ $get_company['city_list']['cityname'] }}</option>
       @endif
		</select>
    </div>
    </td>

  </tr>
  <tr>
        <td class="address_td_1">Zip :</td>
        <td class="address_td_2">
    <div class="col-sm-11">
    <select name="zip_id" id="zip_id" class="form-control zip_id @error('zip_id') is-invalid @enderror">
    	<option value="">----------Select-----------</option>
      @if(isset($get_company['zipcode_list']['zipcode'])) 
      <option value="{{ $get_company['zipcode_list']['id'] }}" selected="">{{ $get_company['zipcode_list']['zipcode'] }}</option>
       @endif

	</select>
    </div></td>
    
      </tr>
  <tr>
    <td class="address_td_1">Ph# :	</td>
    <td class="address_td_2"><div class="col-sm-11"><input name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="602-374-7288" type="tel" required="required" value="{{ $get_company['phone'] }}"></div></td>
  </tr>
  <tr>
    <td class="address_td_1">Fax :	</td>
    <td class="address_td_2"><div class="col-sm-11"><input name="fax_number" id="fax_number" class="form-control @error('fax_number') is-invalid @enderror" placeholder="602-374-7288" type="text" required="required" value="{{ $get_company['fax'] }}"></div></td>
  </tr>
  <tr>
    <td class="address_td_1">Alt # :</td>
    <td class="address_td_2"><div class="col-sm-11"><input name="alt_number" class="form-control" placeholder="" type="text" value="{{ $get_company['alt'] }}"></div></td>
  </tr>
  <tr>
        <td class="address_td_1">Email :</td>
        <td class="address_td_2" required="required"><div class="col-sm-11"><input name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="" type="text" value="{{ $get_company['email'] }}"></div></td>
      </tr>
  <tr>
    <td class="address_td_1">Active :	</td>
    <td class="address_td_2">
                                           
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" name="active" value="@if($get_company['active'] == 1) 1 @else @endif"><span class="custom-control-label"></span>
                                            </label>

                                            <button type="submit" style="display: none;" id="save_manag"></button>
                                        </form></td>
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
                          <div class="col-sm-12 text-center">
                          
                          <a href="#" class="btn_add_agent btn_add_agent_active"><img src="{{ URL::asset('public/images/edit_icon.png') }}" alt=""> Edit</a>
                          
                          <a class="btn_add_agent btn_add_agent_2"><img src="{{ URL::asset('public/images/save_icon.png') }}"> Save</a>
                          
                          <a href="#" class="btn_add_agent"><img src="{{ URL::asset('public/images/ad_icon.png') }}" alt=""> Add</a>
                          
                          
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
                             Copyright ?? 2020 ValleyKing.com. All rights reserved.
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
<script type="text/javascript">
	$('.country_name').on('change', function(){
		$('.state_name').html('');
		var country_name = $('.country_name').val();
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		  $.ajax({
		    type:"POST",
		    url: "{{ url('compnay/managment/get_state') }}",
		    data: {country_name:country_name},
		    success: function(data){
		    	$('.state_name').append('<option value="">----------Select-----------</option>');
		      $.each(data, function(i,v){
		      	$('.state_name').append('<option value="'+v['id']+'">'+v['statename']+'</option>')
		      });
		    }
		  });
	});
	$(document).on('change', '.state_name', function(){
		$('.city_id').html('');
		var state_name = $('.state_name').val();
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		  $.ajax({
		    type:"POST",
		    url: "{{ url('compnay/managment/get_city') }}",
		    data: {state_name:state_name},
		    success: function(data){
		    	$('.city_id').append('<option value="">----------Select-----------</option>');
		      $.each(data, function(i,v){
		      	$('.city_id').append('<option value="'+v['id']+'">'+v['cityname']+'</option>')
		      });
		    }
		  });
	});

		$(document).on('change', '.city_id', function(){
		$('.zip_id').html('');
		var city_id = $('.city_id').val();
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		  $.ajax({
		    type:"POST",
		    url: "{{ url('compnay/managment/get_zip_code') }}",
		    data: {city_id:city_id},
		    success: function(data){
		    	$('.zip_id').append('<option value="">----------Select-----------</option>');
		      $.each(data, function(i,v){
		      	$('.zip_id').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>')
		      });
		    }
		  });
	});

$('.btn_add_agent_2').on('click', function(){
$('#save_manag').click();
});		
</script>
@endsection