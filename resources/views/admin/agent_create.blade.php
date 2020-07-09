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
                            <form action="{{ route('agent.save') }}" method="POST" id="validationform">   
                              @csrf 
                            <div class="row">
                               
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <div class="col-sm-12"><h5 class="text_address">  Agent Info	</h5></div>
                                        
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                  <label for="email">First Name :	</label>
                                  <input type="text" class="form-control" id="name" name="agent_first_name" placeholder="A.Atencio PLLC" required="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Last Name :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_last_name" placeholder="" required="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Display Name :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_display_name" placeholder="Abbie" required="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Social Sec # :		</label>
                                  <input type="text" class="form-control" id="name" name="agent_social_sec_name" placeholder="3265" required="">
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
                                  <input type="text" class="form-control" id="name" name="agent_cell_number" placeholder="602-299-9927" required="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="name">Home Ph# :			</label>
                                  <input type="text" class="form-control" id="name" name="agent_ph_number" placeholder="623-748-3254" required="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="name">Alt # :	</label>
                                  <input type="text" class="form-control" id="name" name="agent_alt_number" placeholder="Abbie" required="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">Email :			</label>
                                  <input type="email" class="form-control" id="email" name="agent_email_number" placeholder="abigail@valleyking.com" required="">
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
                                  <input type="text" class="form-control" id="name" name="agent_address" placeholder="8449 W Ross Ave">
                                  <div class="clear5"></div>
                                   <input type="text" class="form-control" id="name" name="agent_address_1" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                  <label for="sel1">Country</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_country" name="agent_country" required="">
                                    @foreach($get_country as $list_country)
                                    <option value="{{ $list_country['id'] }}">{{ $list_country['countryname'] }}</option>
                                    @endforeach
                                  </select>
                              </div>
                                
                                <div class="form-group">
                                  <label for="sel1">State</label>
                                  <select class="form-control cust_frm_cntrl" name="agent_state" id="agent_state" required="">
                                
		<option>Alabama</option>


                                  </select>
                              </div>
                                
                                <div class="form-group">
                                  <label for="sel1">City</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_city" name="agent_city">
                                
		<option value="1">Aguila</option>
                                  </select>
                              </div>
                                
                                <div class="form-group">
                                  <label for="sel1">ZipCode</label>
                                  <select class="form-control cust_frm_cntrl" id="agent_zipcode" name="agent_zipcode">
                                 
		<option>85302</option>


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
                                <input id="datepicker1" name="invoice_date" required="" />
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-12">
                          <label for="COM">Hire :	</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker2" name="hire_date" required="" />
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-12">
                          <label for="COM">Exit Date :	</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker3" name="exit_date" required="" />
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-12">
                        <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="active" value="1">
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
	<option value="{{ $office_list['id'] }}">{{ $office_list['office_description'] }}</option>
@endforeach
                                   
                                  </select>
                              </div>
        </td>
  </tr>
  <tr>
  



  
    <td class="address_td_1">
      <label class="home_check">Override Applys

        <input type="checkbox" name="override_applys" value="1">
        <span class="checkmark"></span>
  </label>      </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">Agent Advanceable
        <input type="checkbox" name="agent_advanceable" value="1">
        <span class="checkmark"></span>
  </label>  
    </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">Agent Inactive
        <input type="checkbox" name="agent_inactive" value="0">
        <span class="checkmark"></span>
  </label>  
    
    </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">Forms
        <input type="checkbox" name="forms" value="1">
        <span class="checkmark"></span>
  </label>  
    
    </td>
  </tr>
  
</table>
                                          </div>
                                    </div>
                                </div>
                                </div>
                                <button type="submit" id="save_agent" style="display: none;"></button>
                                </form>
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          
                          <div class="clearfix"></div>
                          
                          <div class="row">
                          <div class="col-sm-12">
                          <a href="{{ url('agent/create') }}" class="btn_add_agent btn_add_agent_active"><img src="images/ad_icon.png" alt=""> Add New Agent</a>
                          
                          <!-- <a href="javascript:void(0)" class="btn_add_agent"><img src="images/edit_icon.png" alt=""> Edit</a> -->
                          
                          <a href="javascript:void(0)" class="btn_add_agent btn_save_agent"><img src="images/save_icon.png" alt=""> Save</a>
                          
                          <a href="javascript:void(0)" class="btn_add_agent" id="btnClear"><img src="images/cancel_icon.png" alt=""> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          
                            <div class="clear20"></div>
                          
                          <div class="row">
                          <div class="col-sm-12 meg_btn_general">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General</a>
                          
                          <a href="#" class="btn_general_h"> Notes</a>
                           <a href="#" class="btn_general_h"> Productivity</a>
                           <a href="#" class="btn_general_h"> Transactions</a>
                           <a href="#" class="btn_general_h"> Expense</a>
                           <a href="#" class="btn_general_h"> Misc. Income</a>
                           <a href="#" class="btn_general_h"> Sever</a>
                          
                          
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

    <script type="text/javascript">
  $('#agent_country').on('change', function(){
    $('#agent_state').html('');
    var country_name = $('#agent_country').val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type:"POST",
        url: "{{ url('agent/state') }}",
        data: {country_name:country_name},
        success: function(data){
          $('#agent_state').append('<option value="">----------Select-----------</option>');
          $.each(data, function(i,v){
            $('#agent_state').append('<option value="'+v['id']+'">'+v['statename']+'</option>')
          });
        }
      });
  });
  $(document).on('change', '#agent_state', function(){
    $('#agent_city').html('');
    var state_name = $('#agent_state').val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type:"POST",
        url: "{{ url('agent/city') }}",
        data: {state_name:state_name},
        success: function(data){
          $('#agent_city').append('<option value="">----------Select-----------</option>');
          $.each(data, function(i,v){
            $('#agent_city').append('<option value="'+v['id']+'">'+v['cityname']+'</option>')
          });
        }
      });
  });

    $(document).on('change', '#agent_city', function(){
    $('#agent_zipcode').html('');
    var city_id = $('#agent_city').val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type:"POST",
        url: "{{ url('agent/zipcode') }}",
        data: {city_id:city_id},
        success: function(data){
          $('#agent_zipcode').append('<option value="">----------Select-----------</option>');
          $.each(data, function(i,v){
            $('#agent_zipcode').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>')
          });
        }
      });
  });

$('.btn_save_agent').on('click', function(){
$('#save_agent').click();
});   
</script>
        
@endsection