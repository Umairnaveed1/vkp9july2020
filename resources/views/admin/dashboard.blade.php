@extends('admin_layouts.layout')



@section('content')

      
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                @if(auth()->user()->is_admin===1)

                                <h2 class="pageheader-title"><img src="{{ asset('public/assets/images/agent_icon.png') }}" width="22" height="23" alt="">  

                                    {{ Auth::user()->UserName }}

                                </h2>

                              @endif
                              
                                
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
                                  <a href="#" class="btn_show_inactive m-0"><img src="{{ asset('public/assets/images/icon1.png') }}" alt=""> Show Inactive</a>
                                  </div>
                                  <div class="clear20"></div>
                            </div>
                           
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                            <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 avatar_profile">
                                
                            <img src="{{ asset('public/assets/images/avator.png') }}" alt="">
                            
                            
                            
                            </div> 
                                       
                     <div class="col-xl-5 col-lg-9 col-md-12 col-sm-12 col-12 user_prolfile_middle">
                                
                            <div>
                            <table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td>
    <div class="first_name_bg">First Name </div> 
    </td>
    <td><div class="last_name_bg">@if(isset($get_agent_info['agentfirstname'])) {{ $get_agent_info['agentfirstname'] }} 
      @else 1st to Rent
       @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Last Name</div></td>
    <td><div class="last_name_bg">@if(isset($get_agent_info['agentlastname'])) {{ $get_agent_info['agentlastname'] }} 
      @else 1st to Rent
       @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Display Name</div></td>
    <td> <div class="last_name_bg">@if(isset($get_agent_info['agentdisplayname'])) {{ $get_agent_info['agentdisplayname'] }} 
      @else 1st to Rent
       @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Email</div></td>
    <td><div class="last_name_bg2"> @if(isset($get_agent_info['agentemail'])) {{ $get_agent_info['agentemail'] }} 
      @else Agent Email
       @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Cell #</div></td>
    <td><div class="last_name_bg">@if(isset($get_agent_info['agentcellphone'])) {{ $get_agent_info['agentcellphone'] }} 
      @else Agent Cell
       @endif</div></td>
  </tr>
</table>

                            </div>
                            
                            
                            
                            </div> 
                              <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 user_prolfile_right">
                                
                         <div>
                            <table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td>



    <div class="first_name_bg">Home Ph# :  </div> 
    </td>
    <td><div class="last_name_bg3">@if(isset($get_agent_info['agentofficeno'])) {{ $get_agent_info['agentofficeno'] }} 
      @else Agent Home Phone
       @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Alt # : </div></td>
    <td><div class="last_name_bg3">@if(isset($get_agent_info['agentAltNo'])) {{ $get_agent_info['agentAltNo'] }} 
      @else Agent Home Phone
       @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Office : </div></td>
    <td> <div class="last_name_bg3">@if(isset($get_agent_info['offices']['office_description']))
     {{ $get_agent_info['offices']['office_description'] }} 
    @else Office Name @endif</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Social Sec # :</div></td>
    <td><div class="last_name_bg3">@if(isset($get_agent_info['agentsocial']))
     {{ $get_agent_info['agentsocial'] }} 
    @else Agent Social Name @endif</div></td>
  </tr>
  



</table>

                            </div>
                            
                            
                            
                            </div> 
                            
                            
                          </div>
                                
                          
                          
                              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                              
                              
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    
                       
                          <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                         <div class="page-header">
                                <h2 class="pageheader-title"><img src="{{ asset('public/assets/images/agent_info_icon.png') }}"  style="width:30px; height:26px;" alt=""> Agent Information </h2> 
                            </div>
                            <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="{{ asset('public/assets/images/address_icon.png') }}" width="22" height="32" alt=""> Address</h5>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
    <td class="address_td_1">Address</td>
    <td class="address_td_2">@if(isset($get_agent_info['agentaddress'])) {{ $get_agent_info['agentaddress'] }}
     @else State Name @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">State </td>
    <td class="address_td_2">@if(isset($get_agent_info['state']['statename'])) {{ $get_agent_info['state']['statename'] }}
     @else State Name @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">City</td>
    <td class="address_td_2">@if(isset($get_agent_info['city']['cityname'])) {{ $get_agent_info['city']['cityname'] }}
     @else City  Name @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Email</td>
    <td class="address_td_2">@if(isset($get_agent_info['agentemail']))
      {{ $get_agent_info['agentemail'] }}
      @else
      Eamil Address
      @endif</td>
  </tr>
</table>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="images/date_icon.png" class="dates_icon" alt=""> Dates</h5>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
  

    <td class="address_td_1">DOB</td>
    <td class="address_td_2">@if(isset($get_agent_info['agenthiredate']))
      {{ $get_agent_info['agenthiredate'] }}
      @else
      Eamil Address
      @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Hire </td>
    <td class="address_td_2">@if(isset($get_agent_info['agenthiredate']))
      {{ $get_agent_info['agenthiredate'] }}
      @else
      Eamil Address
      @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Exit Date</td>
    <td class="address_td_2">@if(isset($get_agent_info['AgentDate']))
      {{ $get_agent_info['AgentDate'] }}
      @else
      Eamil Address
      @endif</td>
  </tr>
  <tr>
    <td class="address_td_1">Sever Date</td>
    <td class="address_td_2">@if(isset($get_agent_info['agenthiredate']))
      {{ $get_agent_info['agenthiredate'] }}
      @else
      Eamil Address
      @endif</td>
  </tr>
</table>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="images/misc_icon.png" class="misc_icon" alt=""> Address</h5>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
  



  
    <td class="address_td_1">
      <label class="home_check">Agent Inactive
        <input type="checkbox" @if(isset($get_agent_info['agentInAct']) && $get_agent_info['agentInAct'] == 1)
      checked
      @endif>
        <span class="checkmark"></span>
  </label>      </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">State Override Apply
        <input type="checkbox" @if(isset($get_agent_info['agentover']) && $get_agent_info['agentover'] == 1)
      checked
      @endif>
        <span class="checkmark"></span>
  </label>  
    </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">Agent Advanceable
        <input type="checkbox" @if(isset($get_agent_info['agentadve']) && $get_agent_info['agentadve'] == 1)
      checked
      @endif>
        <span class="checkmark"></span>
  </label>  
    
    </td>
  </tr>
  
</table>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          
                          <div class="clearfix"></div>
                          
                          <div class="row">
                          <div class="col-sm-12">
                          <a href="{{ url('agent/create') }}" class="btn_add_agent btn_add_agent_active"><img src="images/ad_icon.png" alt=""> Add New Agent</a>
                          
                          <a href="{{ url('agent/edit?') .'id='. $get_agent_info['id'] }}" class="btn_add_agent"><img src="images/edit_icon.png" alt=""> Edit</a>
                          
                          <a href="javascript:void(0)" class="btn_add_agent"><img src="images/save_icon.png" alt="" disabled="disabled"> Save</a>
                          
                          <a href="javascript:void(0)" class="btn_add_agent"><img src="images/cancel_icon.png" alt="" disabled="disabled"> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          <div class="clear40"></div>
                    
                    </div>
                    
                    
                      <div class="tab-pane fade" id="nav-notes" role="tabpanel" aria-labelledby="nav-notes-tab">
                    
                    
                 <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                         
                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                      <h5 class="label_rule_heading">History / Notes
</h5>
     
            <div class="col-sm-12">
            <table class="table table-bordered table-bordered_rule table_responsive2 append_agent_notes" width="100%">
                <thead>
                    <tr>   
                      <th width="5%"></th>  
                      <th width="15%"> Date </th>
                      <th width="15%">Time   </th>
                      <th width="55%">&nbsp;</th>
                      <th width="5%">A </th>
                      <th width="5%">User</th>
                       
                    </tr>
                </thead>
                @if(isset($get_result))
                @foreach($get_result as $agent_notes)
                <tbody>
                  <tr>
                    <td><input type="checkbox" name="agent_notes_checked" class="agent_notes_checked" value="{{ $agent_notes['id'] }}"></td>
                    <td>{{ $agent_notes['agentnote'] }}</td>
                    <td>{{ $agent_notes['agentnott'] }}</td>
                    <td>{{ $agent_notes['agentnotes'] }}</td>
                    <td> @if(isset($agent_notes['document'])) <a href="http://127.0.0.1:8000/agent_notes_document/{{ $agent_notes['document'] }}"><img src="public/images/pdf.png"/></a> @else <a href="#"><img src="public/images/pdf.png"/></a> @endif</td>
                    <td>@if(isset($agent_notes['document']) && $agent_notes['document'] == 1) admin @else agent @endif</td>
                  </tr>
                </tbody>
                @endforeach
                @endif
            </table>
            <div class="clear20"></div>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Print</button>
            <a href="#" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn agent_notes_delete">Delete</a>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Details</button>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn"  data-toggle="modal" data-target="#myModal">Add</button>
            </div>
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                    
                    
                    </div>
                    
                    <div class="tab-pane fade" id="nav-productivity" role="tabpanel" aria-labelledby="nav-productivity-tab">
                    
                    
                   <form id="productivity_save">
                    <input type="text" name="productivity_agent_id" value="{{ $get_agent_info['id'] }}">
                    
                                         <div class="mrg_addres_area productivity_edit_area" style="display: none;">
                          <div class="col-sm-12 p-0">
                             <div class="row">
                            <div class="col-sm-6">
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                                    <div class="col-sm-12">
                        <label class="custom-control custom-checkbox">
                        Office Manager Override
                                                <input type="checkbox" class="custom-control-input" value="1" name="office_manager_overide">
                                                <span class="custom-control-label"></span></label></div>
                                                <div class="col-sm-12">
                        <label class="custom-control custom-checkbox">
                        VKP Split Only
                                                <input type="checkbox" class="custom-control-input" value="1" name="vkp_slit_only">
                                                <span class="custom-control-label"></span></label></div>
                                                <div class="col-sm-12">
                        <label class="custom-control custom-checkbox">
                       Gross X 50%
                                                <input type="checkbox" class="custom-control-input" value="1" name="gross_x_50">
                                                <span class="custom-control-label"></span></label></div>
                                                <div class="col-sm-12">
                        <label class="custom-control custom-checkbox">
                        Split Over Between 2 Managers
                                                <input type="checkbox" class="custom-control-input" name="spilt_over_beteen_2_mangers" value="1">
                                                <span class="custom-control-label"></span></label></div>
                            
                          
                           </div></div></div>
                           
                           
                           
                           <div class="col-sm-6">
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                                    <div class="col-sm-12">
                                  <h5>  Rental</h5>
                                    <table width="100%" class="table-responsive table" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="20%">Start</td>
    <td width="20%">Stop</td>
    <td width="30%">Percentage</td>
  </tr>
  @foreach($tier_get as $key => $tier_list)
    @if($tier_list['tiertype'] == 'Rent')
  <tr>

    <td>Tier {{ $key + 1 }}</td>
    <td>{{$tier_list['tierstart']}}</td>
    <td>{{$tier_list['tierend']}}</td>
    <td>
    <input type="text" name="rent_tiers[{{ $tier_list['id'] }}][]" class="form-control" id="textfield" placeholder="50" value="{{$tier_list['tierpercent']}}"></td>
  </tr>
  @endif
  @endforeach
</table>

                                    
                                    
                                    
                                    
                                    </div>
                                    
                        
                            
                          
                           </div></div></div>
                           
                           
                           </div>
                           
                           
                           </div>
                           
                           <div class="row">
                               
                           
                           <div class="col-sm-6 mrg_top_homr_lease">
                             
                           
                           
                           <div class="col-sm-12 p-0">
                             <div class="card card_address">
                                    <div class="card-body">
                                    
                                
                                      <div class="col-sm-12"> <h5>
                                   Sales

                                    </h5></div>
                                    
                                    <div class="clear10"></div>
                                     
                                 <table width="100%" class="table-responsive table" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="20%">Start</td>
    <td width="20%">Stop</td>
    <td width="30%">Percentage</td>
  </tr>
  <?php $keys = 1; ?>
  @foreach($tier_get as $key => $tier_list)
    @if($tier_list['tiertype'] == 'Sale')
  <tr>

    <td>Tier {{ $keys++ }}</td>
    <td>{{$tier_list['tierstart']}}</td>
    <td>{{$tier_list['tierend']}}</td>
    <td>
    <input type="text" name="sale_tier[{{$tier_list['id']}}][]" class="form-control" id="textfield" placeholder="50" value="{{$tier_list['tierpercent']}}"></td>
  </tr>
  @endif
  @endforeach
  
</table>


                                                
                                                
                                                
                                                
                                     
                                     </div>
                                    

                           
                           </div>
                           
                               
                           </div>
                           
                           <div class="col-sm-12 p-0">
                             <div class="card card_address">
                                    <div class="card-body">
                                    
                                
                                      <div class="col-sm-12"> <h5>
                                   Office Manager Override


                                    </h5></div>
                                    
                                    <div class="clear10"></div>
                                     
                                 <table width="100%" class="table-responsive table" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="20%">Start</td>
    <td width="20%">Stop</td>
    <td width="30%">Percentage</td>
  </tr>
  <?php $keyss = 1; ?>
  @foreach($tier_get as $key => $tier_list)
    @if($tier_list['tiertype'] == 'Office Manager Override')
  <tr>

    <td>Tier {{ $keyss++ }}</td>
    <td>{{$tier_list['tierstart']}}</td>
    <td>{{$tier_list['tierend']}}</td>
    <td>
    <input type="text" name="office_manage_override[{{$tier_list['id']}}][]" class="form-control" id="textfield" placeholder="50" value="{{$tier_list['tierpercent']}}"></td>
  </tr>
  @endif
  @endforeach
  
  
</table>


                                                
                                                
                                                
                                                
                                     
                                     </div>
                                    

                           
                           </div>
                           
                               
                           </div>
                           
                               
                           </div>
                           
                           <div class="col-sm-6">
                             <div class="card card_address">
                                    <div class="card-body">
                                    
                                
                                      <div class="col-sm-12"> 
                                      <h5>
                                    Commission Rules
                                    </h5></div>
                                    
                                    <div class="clear10"></div>
                                     <div class="col-sm-12">
                                      @foreach($get_rules as $key => $rule_list)
                                    <span disabled="disabled"><input id="" type="checkbox" name="productivity_rule[{{ $rule_list['id'] }}]" checked="checked" data-attr-id="{{ $rule_list['id'] }}" value="{{ $rule_list['id'] }}">
                                    <label for="">{{ $rule_list['ruledescription'] }}</label></span>
                                    <div class="clear5"></div>
                                    @endforeach
                                  
                                    </div></div>
                                    

                           
                           </div>
                            <button type="button" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;" disabled="disabled">Edit</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Save</button>
                           <button type="button" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Cancel</button>
                           </div>
                           
                           
                           </div>
                      
                           
                           
                          
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Count</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Save</button>
                           <div class="clear20"></div>
                          
                          </div>
                          </form>
                      <!-- end role and tries edit -->
                    
                    
                   <div class="mrg_addres_area productivity_list_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                    <table class="table-responsive table_note_2 table_product_res" cellspacing="0" cellpadding="0" border="0">
  <tr class="tr_dashboard_product">
    <td style="width: 20%" class="heading_black"> Rentals </td>
    <td style="width: 20%" class="heading_black"> Sales </td>
    <td style="width: 60%; padding-top:20px;" class="label_normal_bold">
    <span disabled="disabled" >
      <input id="c" type="checkbox" name="" checked="checked" disabled="disabled">
      <label for="">Office Manager Override</label>
      </span></td>
  </tr>
  <tr>
    <td style="vertical-align: top">
    <div style="overflow: scroll; width: 100%; height: 375px">
        <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td style="vertical-align: top; width: 10%"><table style="vertical-align: middle; width: 100%; text-align: left" cellspacing="0" cellpadding="0" align="center" border="0">
              @for ($i = 1; $i <= 100; $i++)
              
                  <tr>
                    <td style="height: 18px" class="label_normal" align="center"> {{ $i }} </td>
                    @foreach($get_tier as $key => $tiers_list) 
                 @php
                  $varstart = 1;
                  $varend = 20;
                @endphp
                @if($tiers_list['Tier']['tiertype'] == 'Rent')
                @if($i >= $tiers_list['Tier']['tierstart'] && $i <= $tiers_list['Tier']['tierend'])
                <td valign="top">
                @if($i == $tiers_list['Tier']['tierstart']) <span id="ctl00_ContentPlaceHolder1_lblRentPercentage" class="label_normal"> {{ $tiers_list['tierpercent'] }} %</span>
                @endif
                      <div id="ctl00_ContentPlaceHolder1_divRent" style="background-color:white;width:2px;height:21px;border-right:solid 2px #000000;"> </div>
                    
                  </td>
                  @endif
                  @endif
                  @endforeach
                </tr>
                
              @endfor
                
              </table>
          </tr>
        </table>
      </div></td>
    <td valign="top">
    <div style="overflow: scroll; width: 100%; height: 375px">
        <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td style="vertical-align: top; width: 10%"><table style="vertical-align: middle; width: 100%; text-align: left" cellspacing="0" cellpadding="0" align="center" border="0">
              
                @for ($i = 1; $i <= 100; $i++)
              
                  <tr>
                    <td style="height: 18px" class="label_normal" align="center"> {{ $i }} </td>
                     @foreach($get_tier as $key => $tiers_list) 
                 @php
                  $varstart = 1;
                  $varend = 20;
                @endphp
                @if($tiers_list['Tier']['tiertype'] == 'Sale')
                @if($i >= $tiers_list['Tier']['tierstart'] && $i <= $tiers_list['Tier']['tierend'])
                <td valign="top">
                @if($i == $tiers_list['Tier']['tierstart']) <span id="ctl00_ContentPlaceHolder1_lblRentPercentage" class="label_normal"> {{ $tiers_list['tierpercent'] }} %</span>
                @endif
                      <div id="ctl00_ContentPlaceHolder1_divRent" style="background-color:white;width:2px;height:21px;border-right:solid 2px #000000;"> </div>
                    
                  </td>
                  @endif
                  @endif
                  @endforeach
                </tr>
                
              @endfor
              </table>
              </td>
          </tr>
        </table>
      </div></td>
    <td><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; width: 10%"><div style="overflow: scroll; width: 100%; height: 375px">
              <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                  <td style="vertical-align: top; width: 10%"><table style="vertical-align: middle; width: 100%; text-align: left" cellspacing="0" cellpadding="0" align="center" border="0">
                    @for ($i = 1; $i <= 100; $i++)
              
                  <tr>
                    <td style="height: 18px" class="label_normal" align="center"> {{ $i }} </td>
                     @foreach($get_tier as $key => $tiers_list) 
                 @php
                  $varstart = 1;
                  $varend = 20;
                @endphp
                @if($tiers_list['Tier']['tiertype'] == 'Office Manager Override')
                @if($i >= $tiers_list['Tier']['tierstart'] && $i <= $tiers_list['Tier']['tierend'])
                <td valign="top">
                @if($i == $tiers_list['Tier']['tierstart']) <span id="ctl00_ContentPlaceHolder1_lblRentPercentage" class="label_normal"> {{ $tiers_list['tierpercent'] }} %</span>
                @endif
                      <div id="ctl00_ContentPlaceHolder1_divRent" style="background-color:white;width:2px;height:21px;border-right:solid 2px #000000;"> </div>
                    
                  </td>
                  @endif
                  @endif
                  @endforeach
                </tr>
                
              @endfor
                      
                    </table></td>
                </tr>
              </table>
            </div></td>
          <td style="vertical-align: top; width: 80%"><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
              <tr>
                <td class="label_normal_bold" style=" padding-top:10px;"><span disabled="disabled">
                  @if($AgentRuleSetup['wpsplitonly'] == 1)
                  <input id="ctl00_ContentPlaceHolder1_chkViewVKPSplit" type="checkbox" name="ctl00$ContentPlaceHolder1$chkViewVKPSplit" checked="checked" disabled="disabled">
                  @else
<input id="ctl00_ContentPlaceHolder1_chkViewVKPSplit" type="checkbox" name="ctl00$ContentPlaceHolder1$chkViewVKPSplit" disabled="disabled">
                  @endif
                  <label for="ctl00_ContentPlaceHolder1_chkViewVKPSplit">VKP Split Only</label>
                  </span></td>
              </tr>
              <tr>
                <td class="label_normal_bold"><span disabled="disabled">
                  @if($AgentRuleSetup['gossfiftyp'] == 1)
                  <input id="" type="checkbox" name="" disabled="disabled" checked="checked">
                  @else 
                  <input id="" type="checkbox" name="" disabled="disabled">
                  @endif
                  <label for="">Gross X 50%</label>
                  </span></td>
              </tr>
              <tr>
                <td class="label_normal_bold"><span disabled="disabled">
                  @if($AgentRuleSetup['splitbwtwo'] == 1)
                  <input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                  @else
                  <input id="" type="checkbox" name="" disabled="disabled">
                  @endif
                  <label for="">Split Over Between 2 Manager</label>
                  </span></td>
              </tr>
              <tr>
                <td class="label_normal_bold"><span disabled="disabled">
                  @if($AgentRuleSetup['officemanager'] == 1)
                  <input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                  @else
                  <input id="" type="checkbox" name="" disabled="disabled">
                  @endif
                  <label for="">Office Manager</label>
                  </span></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
                        
                            
                          
                           </div></div></div>
                           
                           <div class="row">
                               <div class="col-sm-6">
                             <div class="card card_address">
                                    <div class="card-body">
                                    
                                
                                      <div class="col-sm-12"> <h5>
                                    Commission Rules
                                    </h5></div>
                                    
                                    <div class="clear10"></div>
                                     <div class="col-sm-12">
                                    <span disabled="disabled">
@if($AgentRuleSetup['rule1'] == 1)
                                      <input id="" type="checkbox" name="" checked="checked" disabled="disabled" style="float: left;">
                                      @else
                                      <input id="" type="checkbox" name=""  disabled="disabled" style="float: left;">
                                      @endif
                                    <label for="">VKP Split Only</label></span>
                                    <div class="clear5"></div>
                                    <span disabled="disabled">@if($AgentRuleSetup['rule2'] == 2)
                                      <input id="" type="checkbox" name="" checked="checked" disabled="disabled" style="float: left;">
                                      @else
                                      <input id="" type="checkbox" name=""  disabled="disabled" style="float: left;">
                                      @endif
                                    <label for="">All Bonuses are always 50/50 split</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled">
                                    @if($AgentRuleSetup['rule3'] == 3)
                                      <input id="" type="checkbox" name="" checked="checked" disabled="disabled" style="float: left;">
                                      @else
                                      <input id="" type="checkbox" name=""  disabled="disabled" style="float: left;">
                                      @endif
                                    <label for="" class="float-left w_check1">On all VKP% over 50%, agent % reverts to lowest commission tier if billing falls in 3rd commission tier</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled">
                                    @if($AgentRuleSetup['rule4'] == 4)
                                      <input id="" type="checkbox" name="" checked="checked" disabled="disabled" style="float: left;">
                                      @else
                                      <input id="" type="checkbox" name=""  disabled="disabled" style="float: left;">
                                      @endif
                                    <label for="" class="float-left w_check1">NO # reverts invoices to the lowest commission tier & does not increase monthly count. Invoices go into No # slots</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled">
                                    @if($AgentRuleSetup['rule5'] == 5)
                                      <input id="" type="checkbox" name="" checked="checked" disabled="disabled" style="float: left;">
                                      @else
                                      <input id="" type="checkbox" name="" style="float: left;"  disabled="disabled">
                                      @endif
                                    <label for="" class="float-left w_check1">In Flat rate higher than 50% of Months rent, comm% applies</label></span>
                                  
                                    </div></div>
                                    

                           
                           </div></div>
                           
                           <div class="col-sm-6">
                             
                           
                                <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn productivity_btn_list" style="margin-left:0px !important;">Edit</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" disabled="disabled">Save</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" disabled="disabled">Cancel</button>
                           </div>
                           </div>
                      
                           
                           
                          
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Count</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Save</button>
                           <div class="clear20"></div>
                          
                          </div>
                    
                    
                    </div>
                          
                          
                          
                          <div class="tab-pane fade" id="nav-Transactions" role="tabpanel" aria-labelledby="nav-Transactions-tab">
                    <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                      <div class="col-sm-12 black">
                                      <div class="row">
                                      <div class="col-md-6 col-lg-2">
                                      Transactions :   </div>
                                      
                                      <div class="col-md-6 col-lg-1">
                                     Paid   </div> 
                                     <div class="col-lg-9 trans_right_input1">
                            <div class="float-left col-lg-2">         
<input type="radio" class="float-left input_trans_4" name="tab" value="igotnone" checked onclick="show1();" />
None
</div>
 <div class="float-left col-lg-2">   
<input type="radio" name="tab" value="igottwo" class="float-left input_trans_4" onclick="show2();" />
Two
</div>
<div id="div1" class="hide  col-lg-8 float-left">

<div class="row">
  <div class="col-md-6">
                          <label for="COM">&nbsp;</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker3" />
                            </div>
                        </div> 
                        </div>

  <div class="col-md-6">
                          <label for="COM">To</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker4" />
                            </div>
                        </div> 
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
</div>
</div>
                                     
                                     
                                        </div>
                                     
                                      
                                      </div>
                                      
                                      <div class="clear5"></div>
                                      
                                      
                                      <div class="table_trans_h">
                                      <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                                    
                                                <th width="10%" scope="col"> Paid To Agent</th>
                                                <th width="7%" scope="col">INV #  </th>
                                             
                                                <th width="10%" scope="col">#</th>
                                                <th width="8%" scope="col">M/I Date</th>
                                                <th width="13%" scope="col">Property</th>
                                                <th width="14%" scope="col">Tenant</th>
                                                <th width="8%" scope="col">Type</th>
                                                   <th width="12%" scope="col">Comm Total</th>
                                                   <th width="13%" scope="col">Check #</th>
                                                   <th width="4%" scope="col">CB</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                     
                                                
                                                <td>06/30/09</td>
                                                <td>60</td>
                                                <td>06/02/09</td>
                                                <td>06/02/09</td>
                                                <td>Copper Ridge</td>
                                                <td>Stephanie Duiven & James Hudson </td>
                                                <td>A</td>
                                                <td>
                                                    $324.50
                                                </td>
                                                <td>  1038</td>
                                                <td><label class="custom-control custom-checkbox">
                                                  <input type="checkbox"  class="custom-control-input">
                                                  <span class="custom-control-label"></span> </label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                      </div>
                                      <div class="clear20"> </div>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Charge Back</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">View Invoice</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Print</button>
                                      
                                       <div class="clear20"> </div>
                                       
                                       <div class="row">
                                       <div class="col-md-6">
                                       <div class="row">
                                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">Total Unpaid</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$11,712.00">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">YTD Paid</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$11,712.00">
                          </div>  </div>
                            </div>
                        </div> 
                        
                        
                          <div class="col-md-6">
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Paid</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">UnPaid</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Pending</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Refresh</button>
                           </div>
                        
                        </div>

                                      
                                      
                                      
                                      
                                      
                                      </div>
                                    
                                    
                                    
                                    
                                    
                                    </div> </div> </div> </div>
                    
                    </div>
                    
                    
                    <div class="tab-pane fade" id="nav-Expense" role="tabpanel" aria-labelledby="nav-Expense-tab">
                    
                  <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                        
                        <h5 class="label_rule_heading">Expense</h5>

                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                                    
                                                <th width="19%" scope="col"> DT Create</th>
                                                <th width="16%" scope="col">DT PD   </th>
                                             
                                                <th width="14%" scope="col">Description </th>
                                                <th width="29%" scope="col">Comment </th>
                                                <th width="18%" scope="col">Amount</th>
                                                <th width="4%" scope="col">Hold</th>

                                            </tr>
                                        </thead>
                                        <tbody class="append_expence">
                                          @if(isset($expence_list))
                                          @foreach($expence_list as $agent_expence)
                                            <tr>
                                              <td>{{ $agent_expence['charge_date'] }}</td>
                                              <td>{{ $agent_expence['charge_date'] }}</td>
                                              <td>{{ $agent_expence['charge_type'] }}</td>
                                              <td>{{ $agent_expence['commit'] }}</td>
                                              <td>${{ $agent_expence['charge_amount'] }}</td>
                                              <td><label class="custom-control custom-checkbox">
                                               @if($agent_expence['onhold'] == 1)
                                               <input type="checkbox" class="custom-control-input expence_onhold" data-attr-expece-id="{{ $agent_expence['id'] }}" value="1" checked="">
                                               @else
                                               <input type="checkbox" class="custom-control-input expence_onhold" data-attr-expece-id="{{ $agent_expence['id'] }}" value="1">
                                               @endif
                                                <span class="custom-control-label"></span></label></td>
                                                
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                            <td colspan="6">

                                              <h3>No Expence Found</h3>
                                            </td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    
                                    <input type="hidden" name="expence_agent_id" id="expence_agent_id" value="{{ $get_agent_info['id'] }}">
                                    
                                    
                                </div>
                                <div class="col-sm-12">
                                <div class="row">
                                <div class="col-sm-4">
                                <div class="form-group">
                            <label for="COM">Balance on Hold :</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="${{$total}}">
                          </div>
                          </div>
                          
                          <div class="col-sm-7">
                            
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Print</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_delete_expense">Delete</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_expense_detial">Detail</button>
                   <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_add_expense">Add</button>
                                      
                          
                                
                                
                                
                          </div> </div>
                                 


                                
                                </div>
                                
                                
                                
                                </div></div></div>    
                                    
                                    
                                    
                    
                    </div>
                    
                     <div class="tab-pane fade" id="nav-Misc" role="tabpanel" aria-labelledby="nav-Misc-tab">
                <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                        
                        <h5 class="label_rule_heading">Misc Income
</h5>

                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                                    
                                                <th width="11%" scope="col"> Inv#</th>
                                                <th width="12%" scope="col">Date    </th>
                                             
                                                <th width="38%" scope="col">Comment </th>
                                                <th width="10%" scope="col">Amount  </th>
                                                <th width="10%" scope="col">Hold</th>
                                                <th width="12%" scope="col">DT Paid </th>
                                                <th width="7%" scope="col">Chk #
</th>

                                            </tr>
                                        </thead>
                                        <tbody id="append_misc_income">
                                          @foreach($miscincome as $list_miscincome)
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>{{ $list_miscincome['income_date'] }}</td>
                                              <td>{{ $list_miscincome['comment'] }}</td>
                                              <td>${{ $list_miscincome['amount'] }}</td>
                                              <td><label class="custom-control custom-checkbox">
                                                @if($list_miscincome['id'] == 1)
                                                <input type="checkbox"  class="custom-control-input income_onhold" value="1" checked="checked" data-attr-misc-id="{{ $list_miscincome['id'] }}">
                                                @else
<input type="checkbox"  class="custom-control-input income_onhold" value="1" data-attr-misc-id="{{ $list_miscincome['id'] }}">
                                                @endif
                                                <span class="custom-control-label"></span></label></td>
                                              
                                              <td>{{ $list_miscincome['income_date'] }}</td>
                                              <td> 5336</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                    
                                    
                                    
                                </div>
                                <div class="col-sm-12">
                                <div class="row">
                                <div class="col-sm-4">
                                <div class="form-group">
                            <label for="COM">Balance on Hold :</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$0.00" value="${{ $total_misc }}">
                          </div>
                          </div>
                          
                          <div class="col-sm-7">
                            
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Print</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_misc_del">Delete</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_misc_detial">Detail</button>
                   <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_misc">Add</button>
                                      
                          
                                
                                
                                
                          </div> </div>
                                 


                                
                                </div>
                                
                                
                                
                                </div></div></div>
                    
                    
                    </div>
                    
                      <div class="tab-pane fade" id="nav-Sever" role="tabpanel" aria-labelledby="nav-Sever-tab">
                  
                 <div class="mrg_addres_area">
                      
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                                    
                                   <div class="sever_w1">
                                   
                                    
                          <div class="col-sm-12">
                     <div class="row">
                     
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label class="home_check">Sever Agent :
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="clear10"></div>
                         <a href="#" class="btn_add_agent btn_add_agent"> Recalulate Commissions</a>
                          
                          
                        </div>
                        
                        
                        <div class="col-lg-6">
                          <label for="COM"> Sever Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_sever" />
                            </div>
                        </div> 
                        </div>
                        
                      
                        <div class="col-sm-12">
                          <div class="clear20"></div>
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Save</button>
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Cancel</button>
                         <div class="clear10"></div>
                        </div>
                       
                        
                        
                        
                        
                        <div class="col-md-12">
                          <label for="COM"> Comments</label>
                          <div class="form-group ">
                            <div class="">
                              <textarea name="" cols="" class="form-control" rows=""></textarea>
                            </div>
                        </div> 
                        </div>
                     
                  
                     </div> </div>
                     
                     </div>
                    
                    </div></div></div>
                    
                    
                    </div>
                          
                          
                          
                          <div class="row">
                          <div class="col-sm-12 p-0">
                                                                                                    
                         
                           
                             <nav>
                             
                             
                             
                             
                    <div class="nav nav-tabs nav-tabs_new nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link  btn_general_h  active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> General</a>
                
                          
          <a class="nav-item nav-link  btn_general_h" id="nav-notes-tab" data-toggle="tab" href="#nav-notes" role="tab" aria-controls="nav-notes" aria-selected="false"> Notes</a>
          
         <a class="nav-item nav-link btn_general_h" id="nav-productivity-tab" data-toggle="tab" href="#nav-productivity" role="tab" aria-controls="nav-productivity" aria-selected="false">Productivity </a>
         
 <a class="nav-item nav-link  btn_general_h" id="nav-Transactions-tab" data-toggle="tab" href="#nav-Transactions" role="tab" aria-controls="nav-Transactions" aria-selected="false"> Transactions</a>
      
<a class="nav-item nav-link  btn_general_h" id="nav-Expense-tab" data-toggle="tab" href="#nav-Expense" role="tab" aria-controls="nav-Expense" aria-selected="false"> Expense</a>
       
<a class="nav-item nav-link  btn_general_h" id="nav-Misc-tab" data-toggle="tab" href="#nav-Misc" role="tab" aria-controls="nav-Misc" aria-selected="false"> Misc. Income</a>
<a class="nav-item nav-link  btn_general_h" id="nav-Sever-tab" data-toggle="tab" href="#nav-Sever" role="tab" aria-controls="nav-Sever" aria-selected="false"> Sever</a>
                    
                    
                    
                    
                     
                      
                     
                    </div>
                  </nav>
                           
                          
                          
                          </div> 
                          </div>
                          <div class="clear40"></div>
                          
                          
                          
                          
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
         <!-- jQuery library -->





<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="message_notes"></div>

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">History /  Notes Item Detail </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="add_agent_notes">
          <input type="hidden" name="agent_id" value="{{ $get_agent_info['id'] }} ">
                        <div class="row">
      <div class="col-md-6">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker1" type="text" name="agent_notes_date" required="" />
                            </div>
                        </div> 
                        </div>
                      
                        <div class="col-md-6">
                         <div class="form-group">
                                  <label for="name">Time  </label>
                                  <input type="time" class="form-control" id="name" name="agent_notes_time" placeholder="5:53 AM" required="">
                                  
                                </div>
                           
                        </div>
                        
                        </div>
                        <div class="col-md-12 p-0">
                         <div class="form-group">
                                  <label for="name">Regarding </label>
                           <textarea name="agent_notes_discreption" class="form-control" cols="" rows=""></textarea>
                                  
                                </div>
                           
                        </div>
                        
                         <div class="col-md-12 p-0">
                         <div class="form-group">
                                  <label for="name">Attachment :  </label>
                     <input name="agent_notes_file" class="form-control" type="file" required="">
                                  
                                </div>
                           
                        </div>
                        <div class="clear10"></div>
                          <div class="col-md-12 p-0">
                        <label class="home_check">Information Locked : Editable only by Orignal User

        <input type="checkbox" name="checked_agent" value="1">
        <span class="checkmark"></span>
  </label>
                        </div>                                 
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn_close_pop3">Save</button><br>
 <a href="#" class="btn btn-danger btn_close_pop3">Cancel</a>
 </form>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="myModal_add_expense">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
        <div id="expence_notes"></div>
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Charge Type : </label>
                               <select name="charge_type" id="charge_type" class="form-control" required="">
  <option value="CHARGEBACK">CHARGEBACK</option>
  <option value="OFFICE FEE">OFFICE FEE</option>
  <option value="CREDIT REPORTS">CREDIT REPORTS</option>
  <option value="ADMINISTRATION FEE">ADMINISTRATION FEE</option>
  <option value="LEGAL FEES">LEGAL FEES</option>
  <option value="MARKETING SUPPLIES">MARKETING SUPPLIES</option>
  <option value="CARDS/FLIERS">CARDS/FLIERS</option>
  <option value="ADJUSTMENT">ADJUSTMENT</option>
  <option value="REALTOR FEES">REALTOR FEES</option>
  <option value="MISC.">MISC.</option>

</select>
                                  
                                </div>
                           
                        </div>
                           <div class="col-md-12">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_ex" type="text" name="charge_date" class="charge_date" required="" />
                            </div>
                        </div> 
                        </div>  
                      
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">
                                                    Amount :
                                                  </label>
                                  <input type="number" class="form-control" id="expence_amount" name="expence_amount" placeholder="" required="">
                                  
                                </div>
                           
                        </div>
                        
                       
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Comment </label>
                           <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows="">Flyer Stands</textarea>
                                  
                          </div>
                           
                        </div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a><br>
 <a type="button" class="btn btn-danger btn_close_pop3">Cancel</a>
      </div>

    </div>
  </div>
</div>


<!-- Delete Expence Model Box -->
<div class="modal" id="myModal_delete_expense">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Expense</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
        <div id="delete_expence_notes"></div>
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Charge Type : </label>
                               <select name="charge_type" id="delete_charge_type" class="form-control" required="">
  <option value="">------Select--------</option>
  @if(isset($expence_list))
                                          @foreach($expence_list as $agent_expence)
                                          <option value="{{ $agent_expence['id'] }}" data-attr-expence="{{ $agent_expence['charge_type'] }}">{{ $agent_expence['charge_type'] }}</option>
                                          @endforeach
                                          @endif

</select>
                                  
                                </div>
                           
                        </div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a type="button" class="btn btn-danger btn_close_pop3" id="delete_agent_expence">Delete</a>
      </div>

    </div>
  </div>
</div>
<!-- End Model Box -->

<div class="modal" id="myModal_expense_detial">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detial Expense</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
        <div id="delete_expence_notes"></div>
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Charge Type : </label>
                               <select name="charge_type" id="detial_charge_type" class="form-control" required="">
  <option value="">------Select--------</option>
  @if(isset($expence_list))
                                          @foreach($expence_list as $agent_expence)
                                          <option value="{{ $agent_expence['id'] }}" data-attr-expence="{{ $agent_expence['charge_type'] }}">{{ $agent_expence['charge_type'] }}</option>
                                          @endforeach
                                          @endif

</select>
                                  
                                </div>
                           
                        </div>
                        <div class="show_expence_detial"></div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      

    </div>
  </div>
</div>
<!-- End Model Box -->





<div class="modal" id="myModal_misc">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Misc. Income</h4>
        <div id="misc_imcome_alert"></div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
      <form id="misc_income_form">
                           <div class="col-md-12">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_misc" type="text" name="misc_income" class="misc_income" />
                                <input type="hidden" name="agent_id" value="{{ $get_agent_info['id'] }}">
                            </div>
                        </div> 
                        </div>  
                      
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">
                                                    Amount :
                                                  </label>
                                  <input type="text" class="form-control" id="misc_income_amount" name="misc_income_amount" class="misc_income_amount" placeholder="">
                                  
                                </div>
                           
                        </div>
                        
                       
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Comment </label>
                           <textarea name="misc_income_comment" class="form-control misc_income_comment" cols="" rows="">Flyer Stands</textarea>
                                  
                          </div>
                           
                        </div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn_close_pop3">Save</button><br>
 <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal" disabled="disabled">Cancel</button>
      </div>
</form>
    </div>
  </div>
</div>
</div>
<div class="modal" id="myModal_misc_detial">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Misc. Income</h4>
        <div id="misc_imcome_alert"></div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <select class="form-control detial_misc_income" id="sel1">
            <option>----Select-----</option>
            @foreach($miscincome as $list_income)
            <option value="{{ $list_income['id'] }}">{{ $list_income['comment'] }}</option>
            @endforeach
          </select>
          <div class="detial_misc_income_show" style="margin-top: 10px; ">
            
    </div>
        </div>

    </div>
  </div>
</div>
</div>

<div class="modal" id="myModal_misc_del">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Misc. Income</h4>
        <div id="misc_imcome_alert"></div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <select class="form-control del_misc_income" id="sel1">
            <option>----Select-----</option>
            @foreach($miscincome as $list_income)
            <option value="{{ $list_income['id'] }}">{{ $list_income['comment'] }}</option>
            @endforeach
          </select>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="#" class="btn btn-danger btn_close_pop3 del_agent_income">delete</a>
      </div>
    </div>
  </div>
</div>

</script>
<script>
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>


<style>
.nav-item.nav-link.active
{
 
    color:#fff !important;
  background: rgba(156,39,68,1);
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1)));
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 ); 
   
}


nav > div a.nav-item.nav-link.active:after
 {
  color:#fff !important;
  background: rgba(156,39,68,1);
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1)));
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 );

}
.tab-content{


}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  background: rgba(156,39,68,1);
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1))) !important;
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 ) !important;
color:#fff !important;


   
}
.btn_close_pop3
{
  border-radius:5px;
  color:#fff;
  text-align:center;
  font-size:14px;
  font-family:'Open Sans', sans-serif;
  line-height:32px;
  font-weight:normal;
  background-repeat:no-repeat;
  background-position:left top;
  padding:7px;
  padding-left:20px;
  padding-right:20px;
  background: rgba(0,29,86,1);
background: -moz-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0,29,86,1)), color-stop(100%, rgba(0,18,55,1)));
background: -webkit-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -o-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -ms-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: linear-gradient(to right, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001d56', endColorstr='#001237', GradientType=1 );
margin-right:5px;
border:none !important;
}
.btn_close_pop3:hover
{
    color:#fff;
  background: rgba(156,39,68,1);
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1)));
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 );
border:none !important;
}


.tr_dashboard_product
{
  background-color:#85223a;
  color:#fff !important;
  padding:5px;
}
.tr_dashboard_product td
{
  background-color:#85223a;
  color:#fff !important;
  padding:5px;
}
.tr_dashboard_product td label
{

  color:#fff !important;
}
.label_normal_bold
{
  padding-left:10px;
}
.table_note_2 tr td
{
  color:#000;
}
.w_check1
{
  float:left !important;
  width:95% !important;
  padding-left:5px;
}
.table_product_res
{
  display:table !important;
}
.nav-tabs .nav-link
{
  line-height:18px !important;
  margin-bottom:5px;
}
.pay_search_btn
{
  margin-bottom:10px;
}
.nav-tabs_new
{
  border-bottom: none !important;
}

.hide {
  display: none;
}
.trans_right_input1input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    display: block !important;
}
.input_trans_4
{
  margin-top: 4px;
    margin-right: 5px;
}
.table_trans_h
{
  height:300px;
  overflow-y:scroll;
}
.table_trans_h table.table th:last-child {
        width: auto;
    }
.paybtn_m1
{
  margin-left:5px !important;
  padding-left:20px !important;
  padding-right:20px !important;
  margin-top:30px !important;
}
.sever_w1
{
  width:600px;
  margin:auto;
}
@media (min-width: 600px) and   (max-width: 1100px){
.sever_w1
{
  width:100%;
}
.btn_dever_calc {
    font-size: 9px;
    padding-left: 6px;
    padding-right: 7px;
}
}
@media (min-width: 768px) and   (max-width: 1024px){
  .paybtn_m1
{

  margin-top:5px !important;
}

}
@media (min-width: 320px) and   (max-width: 600px){
.sever_w1
{
  width:100%;
} 

.table_product_res
{
  display:block !important;
} 
  
}
</style>




@endsection