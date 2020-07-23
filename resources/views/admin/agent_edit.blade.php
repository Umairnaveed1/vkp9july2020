@extends('admin_layouts.layout')

@section('content')
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><img src="images/agent_icon.png" width="22" height="23" alt=""> Agent Main Screen </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                         
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card egent_list_box">
                                    <h5 class="card-header">Agent List <img src="images/agent_list_icon.png" width="20" height="25" alt=""> </h5>
                                    <div class="card-body agent_list_body">
                                    
                                    <ul>
                                    @foreach($get_agent_data as $agent_list)
                                    <li><a href="{{ url('dashboard?') .'agent_id='. $agent_list['id'] }}">
                                      <i class="fa fa-angle-right" aria-hidden="true"></i> 
                                    {{ $agent_list['agentdisplayname'] }}</a></li>
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
                            
                            
                                
                          
                          
                          
                          <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                         <div class="page-header">
                                <h2 class="pageheader-title"><img src="images/agent_info_icon.png"  style="width:30px; height:26px;" alt=""> Agent Information </h2> 
                            </div>
                            <form action="{{ route('agent.update') }}" method="POST" id="validationform">   
                              @csrf 
                            <div class="row">
                               
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <div class="col-sm-12"><h5 class="text_address">  Agent Info	</h5></div>
                                        
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                  <label for="email">First Name :	</label>
                                  <input type="text" class="form-control" id="name" name="agent_first_name" placeholder="A.Atencio PLLC" required="" value="{{ $get_agent_info['agentfirstname'] }}">
                                  <input type="hidden" class="form-control" id="name" name="agent_ids" placeholder="A.Atencio PLLC" required="" value="{{ $get_agent_info['id'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Last Name :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_last_name" placeholder="" required="" value="{{ $get_agent_info['agentlastname'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Display Name :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_display_name" placeholder="Abbie" required="" value="{{ $get_agent_info['agentdisplayname'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Social Sec # :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_social_sec_name" placeholder="3265" required="" value="{{ $get_agent_info['agentsocial'] }}">
                                </div>
                                
                                
                                         </div>  
                                          </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                       <div class="col-sm-12"> <h5 class="text_address"> Contact</h5></div>
                                        
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                  <label for="name">Cell # :	</label>
                                  <input type="text" class="form-control" id="name" name="agent_cell_number" placeholder="602-299-9927" required="" value="{{ $get_agent_info['agentcellphone'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="name">Home Ph# :			</label>
                                  <input type="text" class="form-control" id="name" name="agent_ph_number" placeholder="623-748-3254" required="" value="{{ $get_agent_info['agenthome'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="name">Alt # :	</label>
                                  <input type="text" class="form-control" id="name" name="agent_alt_number" placeholder="Abbie" required="" value="{{ $get_agent_info['agentAltNo'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Email :			</label>
                                  <input type="email" class="form-control" id="email" name="agent_email_number" placeholder="abigail@valleyking.com" required="" value="{{ $get_agent_info['agentemail'] }}">
                                </div>
                                
                                
                                         </div>
                                        
                                          </div>
                                    </div>
                                </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                       <div class="col-sm-12"> <h5 class="text_address"> Address</h5></div>
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                  <label for="name">Address :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_address" placeholder="8449 W Ross Ave" value="{{ $get_agent_info['agentaddress'] }}">
                                  <div class="clear5"></div>
                                   <input type="text" class="form-control" id="name_1" name="agent_address_1" placeholder="" value="{{ $get_agent_info['agentaddress_1'] }}">
                                </div>
                                
                                <div class="form-group">
                                  <label for="sel1">Country</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_country" name="agent_country" required="">
                                    @foreach($get_country as $list_country)
                                    <option {{ $list_country['id']==$get_agent_info['country_id']?'selected':''}} value="{{ $list_country['id'] }}" >{{ $list_country['countryname']}}</option>
                                    <!-- <option value="{{ $list_country['id'] }}"  >{{ $list_country['countryname']}}</option> -->
                                    <!-- value="{{ $list_country['id'] }}">{{ $list_country['countryname'] }} -->
                                    @endforeach
                                  </select>
                              </div>
                                
                                <div class="form-group">
                                  <label for="sel1">State</label>
                                  <select class="form-control cust_frm_cntrl" name="agent_state" id="agent_state" required="">
                                
		
                                    <option value="{{ $get_agent_info['state']['id'] }}">{{ $get_agent_info['state']['statename'] }}</option>


                                  </select>
                              </div>
                                
                                <div class="form-group">
                                  <label for="sel1">City</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_city" name="agent_city">
                                
		<option value="{{ $get_agent_info['city']['id'] }}">{{ $get_agent_info['city']['cityname'] }}</option>
                                  </select>
                              </div>
                                
                                <div class="form-group">
                                  <label for="sel1">ZipCode</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_zipcode" name="agent_zipcode">
                                 
		<option value="{{ $get_agent_info['zipcodes']['id'] }}">{{ $get_agent_info['zipcodes']['zipcode'] }}</option>


                                  </select>
                              </div>
                                
                                
                                         </div>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                      <div class="col-sm-12 col-12">  <h5 class="text_address"> Dates</h5></div>
                                      <div class="col-md-12">
                          <label for="COM">Invoice Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker1" name="invoice_date" type="text" required="" value="{{ $get_agent_info['invoice_date'] }}" />
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-12">
                          <label for="COM">Hire :	</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker2" name="hire_date" type="text" required="" value="{{ $get_agent_info['agenthiredate'] }}" />
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-12">
                          <label for="COM">Exit Date :	</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker3" name="exit_date" required="" type="text" value="{{ $get_agent_info['AgentDate'] }}" />
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-12">
                        <label class="custom-control custom-checkbox custom-control-inline">
                        @if($get_agent_info['agentInAct'] == 1) 
          <input type="checkbox" class="custom-control-input" id="active" name="active" value="0" checked="">
        @else 
          <input type="checkbox" class="custom-control-input" id="active "name="active" value="1">
        @endif
                <span class="custom-control-label"></span>Active</label> </div>
                                        
                                          </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="card card_address">
                                    <div class="card-body">
                                       <div class="col-md-12 col-sm-12 col-12">
                                        <h5 class="text_address"> Misc</h5></div>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
                                        
                              <tr>
  



  
    <td class="">
    
    <div class="form-group" style="padding-right:20px;">
                                  <label for="sel1">Office :	</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_office" name="agent_office" required="">
                                    @foreach($OfficeManager as $office_list)
                                    <!-- {{ $list_country['id']==$get_agent_info['country_id']?'selected':''}} value="{{ $list_country['id'] }}" -->
       <option {{ $office_list['id']==$get_agent_info['agentofficeno']?'selected':''}} value="{{ $office_list['id'] }}"  >{{ $office_list['office_description'] }}</option>                                                          
	<!-- <option value="{{ $office_list['id'] }}"  checked="@if($get_agent_info['agentofficeno'] == $office_list['id']) checked @endif">{{ $office_list['office_description'] }}</option> -->
@endforeach
                                   
                                  </select>
                              </div>
        </td>
  </tr>
  <tr>
  



  
    <td class="address_td_1">
      <label class="home_check">Override Applys

        @if($get_agent_info['agentover'] == 1)
          <input type="checkbox" name="override_applys" value="1" checked="">
        @else 
          <input type="checkbox" name="override_applys" value="1">
        @endif
        <span class="checkmark"></span>
  </label>      </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">Agent Advanceable
        @if($get_agent_info['agentadve'] == 1) 
          <input type="checkbox" name="agent_advanceable" value="1" checked="">
        @else 
          <input type="checkbox" name="agent_advanceable" value="1">
        @endif
        <span class="checkmark"></span>
  </label>  
    </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">Agent Inactive
        @if($get_agent_info['agentInAct'] == 2) 
          <input type="checkbox" name="agent_inactive" id="agent_inactive" value="0" checked="">
        @else 
          <input type="checkbox" name="agent_inactive" id="agent_inactive" value="2"> -->
            <!-- footer -->
// $('.btn_save_agent').on('click', function(){
// $('#save_agent').click();
// });   
$(document).click("#agent_inactive",function(){
	$.each($("input[name='agent_inactive']:checked"), function(){
    //alert($(this).val());
	if($(this).val()==2){
	$(this).val(0); 
	}else{
	$(this).val(2);	 
	}
	});
	});

  $(document).click("#active",function(){
	$.each($("input[name='active']:checked"), function(){
	if($(this).val()==1){
	$(this).val(0); 
	}else{
	$(this).val(1);	 
	}
	});
  });
  $('.btn_save_agent').on('click', function(){
$('#save_agent').click();
});
</script>
        
@endsection