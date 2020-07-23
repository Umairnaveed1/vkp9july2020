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

                                     
                                    </div>
<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" style="width: 100%">
                    <div class="tab-pane fade" id="general_notes" role="tabpanel" aria-labelledby="nav-home-tab">
                     
                     
                                   
                    <div class="col-sm-12">
                                    <a href="#" class="btn_general_h btn_general_h_active"> Print</a>
                          
                          <a href="#" class="btn_general_h"> Delete</a>
                           <a href="#" class="btn_general_h"> Detail</a>
                           </div>
                     
                     
                    </div>
                    <div class="tab-pane fade show active" id="transactions" role="tabpanel" aria-labelledby="nav-profile-tab" style="width: 100%">
                    <div class="col-sm-12"> <h5>Properties</h5></div>
                               <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            
                                            <tr>
                                                    
                                                <th width="14%" scope="col"> Property Name  </th>
                                                <th width="17%" scope="col">Address</th>
                                             
                                            </tr>
                                        </thead>
                                           @foreach($property_data as $property)
                                        <tbody>
                                       
                                            <tr>
                     
                                                <!-- <th scope="row">07/30/15</th> -->
                                                <td>{{$property->propertyName}}</td>
                                                <td>{{$property->propertyAd}}</td>
                                            </tr>
                                           
                                            
                                            
                                        </tbody>
                                         @endforeach
                                    </table>   
                                    <div class="clear20"></div>
                                    <div class="col-sm-12">  <a href="{{URL::to('companyprint')}}/{{$get_company_info['id']}}" class="btn_general_h" id="btnprintcompany"> Print</a> </div>
                                     
                                    
                    </div>
                    <div class="tab-pane fade" id="delinquencies" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="col-sm-12"> <h5>History / Notes</h5></div>
                    

                                <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            
                                            <tr>
                                                    
                                                <th width="14%" scope="col"> Date</th>
                                                <th width="17%" scope="col">Time</th>
                                              <th width="17%" scope="col">Managment Company </th>
                                                <th width="17%" scope="col">Property Name </th>
                                                <th width="17%" scope="col">&nbsp;</th>
                                                <th width="17%" scope="col">A</th>
                                                <th width="17%" scope="col">User</th>
                                             
                                            </tr>
                                        </thead>
                                        @foreach($history_notes as $notes)

                                        <tbody>
                                            <tr>
                     
                                                <!-- <th scope="row">07/30/15</th> -->
                                                <td>{{$notes->propertynotesdate}}</td>
                                                <td>{{$notes->propertynotestime}}</td>
                                                <td>{{$notes->mgt_company}} </td>
                                                <td>{{$notes->propertyName}}</td>
                                                <td>{{$notes->propertynotes}}</td>
                                              <td>&nbsp;</td>
                                                <td>admin</td>
                                            </tr>
                                             
                                            
                                        </tbody>
                                        @endforeach
                                    </table>   

                                    <div class="clear20"></div>
                                    <div class="col-sm-12">  <a href="{{URL::to('companyhistory')}}/{{$get_company_info['id']}}" class="btn_general_h" id="print_data"> Print</a>
                              <a href="#" class="btn_general_h" data-toggle="modal" data-target="#myModal_delete_notes"  > Delete</a> 
                                <a href="#" class="btn_general_h" data-toggle="modal" data-target="#myModal_hnotes_detial" > Detail</a> 
                                <a href="#" class="btn_general_h" data-toggle="modal" data-target="#myModal_addhistory_note"> Add</a> 
                              </div>
                      
                    </div>
                    <div class="tab-pane fade" id="system_notes" role="tabpanel" aria-labelledby="nav-about-tab">
                    
                    
                  
                  
                  <div class="col-xl-12 p-0">
                            </div>
                  
                    </div>
                    
                  </div>
                                  </div></div>
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
                          
                         <!--  <div class="row">
                          <div class="col-sm-12 meg_btn_general">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General</a>
                          
                          <a href="#" class="btn_general_h"> Properties</a>
                           <a href="#" class="btn_general_h"> History / Notes</a>
                           <a href="#" class="btn_general_h"> Email Invoices</a>
                          
                          
                          </div> 
                          </div> -->
                                <div class="nav_tab1">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    
                      
                    
                    
                      <a class="nav-item nav-link btn_general_h_tab1" id="nav-home-tab" data-toggle="tab" href="#general_notes" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
                      <a class="nav-item nav-link btn_general_h_tab1  active" id="nav-profile-tab" data-toggle="tab" href="#transactions" role="tab" aria-controls="nav-profile" aria-selected="false">Properties</a>
                      <a class="nav-item nav-link btn_general_h_tab1" id="nav-contact-tab" data-toggle="tab" href="#delinquencies" role="tab" aria-controls="nav-contact" aria-selected="false">History / Notes</a>
          <a class="nav-item nav-link btn_general_h_active_tab1 " id="nav-about-tab" data-toggle="tab" href="#system_notes" role="tab" aria-controls="nav-about" aria-selected="false">Email Invoices</a>
           
                    </div>
                  </div>
                          
                          
                          
                  </div>
                            
                        </div>

                        
                        
                        
                    </div>
                </div>
            </div>


<!-- detail box modal start -->
<div class="modal" id="myModal_hnotes_detial">
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
                               <select name="charge_type" id="detial_type2" class="form-control" required="">
  <option value="">------Select--------</option>

  @if(isset($history_notes))

                                          @foreach($history_notes as $detail_expence)

                                          <option value="{{$detail_expence->notes_id }}" data-attr-expence="{{ $detail_expence->propertynotes }}">{{ $detail_expence->propertynotes}}</option>
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
<!-- Delete Expence Model Box -->
<div class="modal" id="myModal_delete_notes">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete history/Notes</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
        <div id="delete_history_notes"></div>
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Regarding Type : </label>
                               <select name="charge_type" id="delete_id" class="form-control" required="">
  <option value="">------Select--------</option>
  @if(isset($history_notes))
                                          @foreach($history_notes as $notes)

                                          <option value="{{$notes->notes_id}}" data-attr-expence="{{$notes->propertynotes}}">{{ $notes->propertynotes }}</option>
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
        <a type="button" class="btn btn-danger btn_close_pop3" id="delete_admin_notes">Delete</a>
      </div>

    </div>
  </div>
</div>
<!-- End Model Box -->
              <div class="modal" id="myModal_addhistory_note">
  <div class="modal-dialog">
    <div class="modal-content">
 <form class="form-group mt-2 "   id="historynotes"  enctype="multipart/form-data">
      <!-- Modal Header -->
       <div class="modal-body">
        <div class="textmesagealert alert-danger" id="textmesage"> </div>
      <div class="modal-header">
        <h4 class="modal-title">History / Notes Item Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
       <input type="hidden" name="companyid" id="companyid" value="{{$get_company_info['id']}}">
     <!--  -->
                        <div class="row">
      <div class="col-md-12">
        <div id="expence_notes"></div>
<!--   -->
                           <div class="col-md-12">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_ex" type="text" name="notedate" class="charge_date" required="" />
                            </div>
                        </div> 
                        </div>  
                      
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">
                                                   Time:
                                                  </label>
                                  <input type="time" class="form-control" id="note_time" name="note_time" placeholder="" required="">
                                  
                                </div>
                           
                        </div>
                        
                       
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Regrading </label>
                           <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows=""></textarea>
                                  
                          </div>
                           
                        </div>
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">   Attachment :</label>
                        <input name="file" type="file" class="form-control" id="file">
                                  
                          </div>
                           
                        </div>
                        <div class="col-md-12">
                         <label class="custom-control custom-checkbox custom-control-inline">
                          Information Locked : Editable only by Original User
            <input type="checkbox" class="custom-control-input" id="InformationLocked" name="checkbox[]" value="Information Locked : Editable only by Original User">
            <span class="custom-control-label"> </span></label>
                           
                        </div>
                        <div class="col-md-12">
                         <label class="custom-control custom-checkbox custom-control-inline">
                         Show Note on Billing Screen
            <input type="checkbox" class="custom-control-input" id="Shownote" name="checkbox[]" value="Show Note on Billing Screen">
            <span class="custom-control-label"> </span></label>
                           
                        </div>
                        
                        
                       
                        
                        </div>
                          </div>
                
                                                           
                                                
   
   
                                                    
                                                
   
 
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
     <!--    <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a> -->
        <button type="submit" class="btn btn-danger btn_close_pop3" id="btnAdd">Save</button><br>
 
 <button type="reset" class="btn btn-danger btn_close_pop3"  >Cancel</button>
      </div>
  </form>
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
         
      
      });

   });

   
 </script>
 <script type="text/javascript">
    $(document).on('click', '#delete_admin_notes', function(){
    var delete_charge_type = $('#delete_id').val();
    var delete_charge_type_test = $('#delete_id option:selected').text();
          $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('admin/delete_historynotes') }}",
       method:"POST",
       data:{delete_charge_type:delete_charge_type},
       success:function(data)
       {
        $('#delete_history_notes').css('display', 'block');
        $('#delete_history_notes').html(data.message);
        $('#delete_history_notes').addClass(data.class_name);
        $("#delete_charge_type option:contains('"+delete_charge_type_test+"')").remove();
       }
    });
  });
 </script>
 <script type="text/javascript">
   $(document).on('change', '#detial_type2', function(){
      var detial_charge_type = $('#detial_type2').val();
      // let onhold = '';
        $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('detial_view_history') }}",
       method:"POST",
       data:{detial_charge_type:detial_charge_type},
       success:function(data)
       {
     // var json = $.parseJSON(data); 

      console.log(data.propertynotesdate); 
       
       
      
        // alert(data['data']['propertynotestime']);
         $('.show_expence_detial').html('');
        $('.show_expence_detial').append('<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Date</h6></div>'+
              '<div class="col-md-6">'+data['data']['propertynotesdate']+'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Time</h6></div>'+
              '<div class="col-md-6"> '+data['data']['propertynotestime']+'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Regrading</h6></div>'+
              '<div class="col-md-6">'+ data['data']['propertynotes'] +'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Document</h6></div>'+
              '<div class="col-md-6">'+ data['data']['propertynotesattachment'] +'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-12">'+
              '<div class="col-md-4"><h6 style="color: #a63651 !important;">BILL note</h6></div>'+
              '<div class="col-md-8"type="checkbox" checked="checked">'+data['data']['propertybillnote']+
              '<span class="custom-control-label"> </span>'+'</div>'+
            '</div>'+
            '</div>');
         
       
       }
    });
  });
 </script>
 <script type="text/javascript">
    jQuery(function ($) { 
    $('#btnprintcompany').printPage();
    
});

 </script>
 <script type="text/javascript">
   jQuery(function ($) { 
    $('#print_data').printPage();
});
 </script>
   <script type="text/javascript">
   
 $('#historynotes').on('submit', function(event){
event.preventDefault();

 var companyid =$('#companyid').val();
// var pro=$('#productid').val();
 
 // alert(pro);
   $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{url('historynotes')}}"+'/'+companyid,
   
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log(data.message);
    $("#textmesage").append(data.message);
 
    console.log(data.messageinsert)

     // $(".charge_date").val("");
     //      $("#note_time").val("");
     //      $("#expence_comment").val("");
     //      $("#file").val("");
     //      $("#InformationLocked").val("");
     //      $("#Shownote").val("");
         
       alert('Data Uploaded successfully')
 location.reload();
   }
  });
  
});

 </script>
  <style>
  .address_table
  {
    display:table;
  }
  
  
.btn_add_agent2 {
  font-size: 12px !important;
padding-left: 25px !important;
    padding-right: 25px !important;
} 
@media (min-width: 1150px) and   (max-width: 1330px){
.btn_add_agent2 {
    padding-left: 5px !important;
    padding-right: 5px !important;
  font-size: 12px !important;
} 
}
@media (min-width: 768px) and   (max-width: 1149px){
.btn_add_agent2 {
    padding-left: 5px !important;
    padding-right: 5px !important;
  font-size: 9px !important;
} 
}
@media (min-width: 320px) and   (max-width: 1150px){
.table_companies3
{
   width:90%;
   margin:auto; 
} 
}
@media (min-width: 320px) and   (max-width: 767px){

.btn_add_agent2
{
float: inherit;
    width: 203px;
    margin: auto;
}
}
  </style>
    
    

    <style>
    
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
    color:#fff !important;
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















    
    </style>
    
    
  
<style>
.table_companies3
{
   width:600px;
   margin:auto; 
}
.table_companies3 table
{
  border:solid 1px #000 !important;
  width: 100% !important;
    display: table !important;
      table-layout: inherit !important;
}
.table_companies3 table td
{
  border:solid 1px #000 !important;
}

.btn_add_agent_p2
{
  border-radius:50px;
  color:#fff;
  text-align:center;
  font-size:13px;
  font-family:'Open Sans', sans-serif;
  text-transform:uppercase;
  line-height:41px;
  font-weight:bold;
  background-repeat:no-repeat;
  background-position:left top;
  padding:5px;
  background: rgba(0,29,86,1);
background: -moz-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0,29,86,1)), color-stop(100%, rgba(0,18,55,1)));
background: -webkit-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -o-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -ms-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: linear-gradient(to right, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001d56', endColorstr='#001237', GradientType=1 );
margin-right:5px;
display:block;
width:100%;
}
.btn_add_agent_p2:hover
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
}
.btn_add_agent_p2_alctive
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
display:block;
width:100%;
}
@media (min-width: 1150px) and   (max-width: 1330px){
.btn_add_agent {
    padding-left: 5px;
    padding-right: 5px;
  font-size: 12px !important;
} 
}
@media (min-width: 768px) and   (max-width: 1149px){
.btn_add_agent {
    padding-left: 5px;
    padding-right: 5px;
  font-size: 9px;
} 
}
@media (min-width: 320px) and   (max-width: 1150px){
.table_companies3
{
   width:90%;
   margin:auto; 
} 
}







.nav_tab1 > .nav.nav-tabs{

  border: none;
    color:#fff;

}
.nav_tab1 > div a.nav-item.nav-link,
.nav_tab1 > div a.nav-item.nav-link.active
{
  border-radius:5px;
  color:#fff;
  text-align:center;
  font-size:14px;
  font-family:'Open Sans', sans-serif;
  line-height:25px;
  font-weight:normal;
  background-repeat:no-repeat;
  background-position:left top;
  padding:7px;
  padding-left:10px;
  padding-right:10px;
  background: rgba(0,29,86,1);
background: -moz-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0,29,86,1)), color-stop(100%, rgba(0,18,55,1)));
background: -webkit-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -o-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: -ms-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
background: linear-gradient(to right, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001d56', endColorstr='#001237', GradientType=1 );
margin-right:5px;
    max-width: 125px !important;
    float: left;
    border: none !important;
}

.nav_tab1 > div a.nav-item.nav-link.active:after
 {
  content: "";
  position: relative;
  bottom: -60px;
  left: -10%;
}
.tab-content{

}

.nav_tab1 > div a.nav-item.nav-link:hover,
.nav_tab1 > div a.nav-item.nav-link:focus
{
  border: none;
    background: #e74c3c;
    color:#fff;
    transition:background 0.20s linear;
}

.nav-tabs .nav-link.active
{
    color:#fff !important;
  background: rgba(156,39,68,1) !important;
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1))) !important;
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 ) !important;
display:block !important;
width:100% !important;
}
.nav-tabs .nav-link:hover
{
      color:#fff !important;
  background: rgba(156,39,68,1) !important;
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1))) !important;
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 ) !important;
display:block !important;
width:100% !important;
}
.nav-tabs .nav-link:hover
{
  border:none;
}




.btn_general_h_tab1
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

}
.btn_general_h_tab1:hover
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
}
.btn_general_h_tab1_active
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
}


@media (min-width: 992px) and   (max-width: 1199px){


.nav_tab1 > div a.nav-item.nav-link,
.nav_tab1 > div a.nav-item.nav-link.active
{
  color:#fff;
  font-size:12px;
  padding-left:6px;
  padding-right:6px;
    width: 80px !important;
    float: left;
    border: none !important;
}
  
}

@media (min-width: 768px) and   (max-width: 991px){


.nav_tab1 > div a.nav-item.nav-link,
.nav_tab1 > div a.nav-item.nav-link.active
{
  color:#fff;
  font-size:12px;
  padding-left:6px;
  padding-right:6px;
    width: 100px !important;
    float: left;
    border: none !important;
  margin-bottom:10px;
}
  
}
@media (min-width: 320px) and   (max-width: 767px){


.nav_tab1 > div a.nav-item.nav-link,
.nav_tab1 > div a.nav-item.nav-link.active
{
  color:#fff;
  font-size:10px;
  padding-left:5px;
  padding-right:5px;
    width: 80px !important;
    float: left;
    border: none !important;
  margin-bottom:10px;
}
  
}
.property_trans_tab
{
  height:300px;
  overflow:scroll;
  width:100%;
}






</style>
 @endsection