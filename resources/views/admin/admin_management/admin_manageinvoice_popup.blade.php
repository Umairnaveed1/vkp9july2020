@extends('layouts.login_layout')
@section('content')

<!-- <div class="modal" id="myModal_viewapprove_bill">
  <div class="modal-dialog w_viewapprove_bill">
    <div class="modal-content"> -->

      <!-- Modal Header -->
      <div class="modal-header">
        
        <h4 class="modal-title">Invoicing Screen</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>
<div class="errertest" style="text-align: center;"></div>
      <!-- Modal body -->
     
      <div class="modal-body">
        
                     
      <div class="col-md-12">
      
         <div class="row">
                             
                    <div class="ecommerce-widget">

            <div class="row"> 
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

   
                    <!-- Left Box Start -->

                    <div class="pl-3 pr-3">
                      <h5 class="text_address mt-3 mb-0">Move in invoice</h5>
                      <div class="card-body">
                        <div class="cust_tbl_search text-right">
                         <!--  <form class="form-group mt-2 " action="/action_page.php"> -->
                            <div class="row">
                              <div class="col-12 col-xl-12">
                                <div class="row no-gutters">
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-3">
                                    <label for="email" class="col-md-12 align-self-center">Invoice Number: </label>
                                    <div class="col-md-12">
                                    	@if(isset($result->id))
             <input type="text" class="form-control" id="inumber" value="{{$result->id}}">
             @else
                            <input name="Unit" type="text" class="form-control" id="Unit" value="">
             @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Find invoice #: </label>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control"  id="numberinvoice">
                                    </div>
                                  </div> 
                                </div> 
                              </div>
                            </div>
                            <div class="col-12 col-xl-12">
                              <div class=" mt-3">
                                <button type="button" id="btnSearch" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Search</button>
                                <button type="button" class="btn btn-primary form_box_cust_btn ml-3 pay_new_invoice">New Invoice</button>
                               </div> 
                            </div>
                            </div>
                         <!--  </form> -->
                        </div> 
                      </div>
                    </div> 
              </div>
            </div>
<form action="{{route('invoiceupdate',$result->id)}}" method="post">
                            {{csrf_field()}}
    {{ method_field('PATCH') }}
            <div class="row">
              <div class="col-xl-6 col-12">
                <!-- Left Box End  -->
                <div class="pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">Property :</h5>
                    
                      <div class="row">
                        <div class="col-md-6">

                          <div class="form-group">
                            <label for="sel1">Select</label>
                            <select class="form-control cust_frm_cntrl property_select" name="property_id" id="property_select">
                             <!--  <option>Select</option> -->
                             @if(isset($result->inv_property))
                              <option selected="selected"  value="{{$result->inv_property->id}}">{{$result->inv_property->propertyName}}</option>
                              @endif

                              @foreach($property as $key=>$propert)
                                

                              <option value="{{$key}}">{{$propert}}</option>
                              @endforeach
                             <!--  <option></option> -->
                           <!--    <option>4</option> -->

                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">Last Contract Date</label>
                            @if(isset($result->inv_property))
                            <input type="date" class="form-control" id="email" name="last_cdate" value="{{$result->inv_property->lastcontract}}">
                            @else
                            <input name="Unit" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="home_check"> Do Not Place
                            	@if(isset($result->inv_property->PropertDonotplace))
                              <input type="checkbox" name="donotplace" value="Do Not Place" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class=" text-right">
                              <button type="button" class="btn btn-primary form_box_cust_btn">Notes</button>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Offline
                               
                              @if(isset($result->inv_property->propertyoffline))
                              <input type="checkbox" name="offline" value="Offline" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> On Hold
                              @if(isset($result->inv_property->propertyonhold))
                              <input type="checkbox" name="onhold" value="On Hold" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Legal
                              @if(isset($result->inv_property->propertylegal))
                              <input type="checkbox" name="legal" value="Legal" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Print billing Note
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Auto Pay
                              @if(isset($result->inv_property->PropertyAutopay))
                              <input type="checkbox" name="autopay" value="Auto Pay" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Not Advancable
                               @if(isset($result->inv_property->PropertyNotadvancable))
                              <input type="checkbox" name="notadvancable" value="Not Advancable" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> 
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Guarantee Contract
                              @if(isset($result->inv_property->propertyguaranteecontract))
                              <input type="checkbox" name="guranteecontract" value="Guarantee Contract" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        
                      </div> 
                      
                    
                  </div> 
                </div>  
                <div class="pl-3 pr-3">
                  <div class="card-body"> 
                    
                      <div class="row">
                        <div class="col-md-5">
                          <h5 class="text_address mb-0">Billing Address</h5>
                        </div>
                        <div class="col-md-7 mb-3">
                          <div class="form-group">
                            <div class=" text-right">
                              <button type="button" class="btn btn-primary form_box_cust_btn" id="change_address">Change Billing Address</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">COM / MGT CO :</label>

<select class="form-control cust_frm_cntrl mgt_property" name="mgt_propertyid" id="mgt_property">
                               <option value="">select</option>
                              @if(isset($result->inv_mangment_cm->mgt_company))
                              <option selected="selected" value="{{$result->inv_mangment_cm->id}}">{{$result->inv_mangment_cm->mgt_company}}</option>
                              <option></option>

                              @endif
                             <!--  <option>CA</option>
                              <option>UK</option>  -->
                            </select>


                             
                            <!-- <input type="hidden" name="mgt_propertyid" class="mgt_propertyid" value=""> -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address1">Address  :</label>
                             @if(isset($result->inv_mangment_cm->office_address))
                            <input name="mgt_addess" type="text" class="form-control mgt_office" id="mgtAddress1" value="{{$result->inv_mangment_cm->office_address}}" readonly>
                            @else
                            <input name="mgt_addess" type="text" class="form-control mgt_office" id="mgtAddress1" value="" readonly>
                            @endif
                          </div>
                        </div>
                        <!-- <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Address 2 :</label>
                            <input name="Address2" type="text" class="form-control" id="Address2" value="PO Box 1892">
                          </div>
                        </div> -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Country">Country :</label>
                           
                            
                               
                             
                            @if(isset($result->mgtcountryname))
                         <input name="mgt_country" type="text" class="form-control mgt_country" id="mgt_country" value="{{$result->mgtcountryname}}">
                            @else
                            <input name="mgt_property" type="text" class="form-control mgt_country" id="mgt_country" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="State">State :	</label>
                          
                            
                            @if(isset($result->mgtstatename))
                         <input name="mgt_state" type="text" class="form-control mgt_state" id="State" value="{{$result->mgtstatename}}">
                            @else
                            <input name="mgt_property" type="text" class="form-control mgt_state" id="State" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="City">City :	</label>
                            
                            @if(isset($result->mgtcityname))
                         <input name="mgt_city" type="text" class="form-control mgt_city" id="City" value="{{$result->mgtcityname}}">
                            @else
                            <input name="mgt_property" type="text" class="form-control mgt_city" id="City" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Zip">Zip Code :</label>
                           
                            @if(isset($result->mgtzipcode))
                         <input name="mgt_zipcode" type="text" class="form-control mgt_zipcode" id="mgt_zipcode" value="{{$result->mgtzipcode}}">
                            @else
                            <input name="mgt_property" type="text" class="form-control mgt_zipcode" id="mgt_zipcode" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone">Phone :</label>
                            @if(isset($result->inv_mangment_cm->phone))
                            <input type="text" class="form-control mgtphone" id="phone" value="{{$result->inv_mangment_cm->phone}}" name="Phone">
                            @else
                            <input name="Phone" type="text" class="form-control mgtphone" id="Unit" value="">
                            @endif
                          </div>
                        </div> 
                      </div>
                      
                      
                    
                  </div> 
                </div> 
                <div class="pl-3 pr-3">
             
                  <div class="card-body"> 
                    <h5 class="text_address mt-2">Tenant Address</h5>
                    <!-- <form action="/action_page.php"> -->
                      <div class="row">  
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Tenant">Tenant :</label>
                            @if(isset($result->TenantNames))
                            <input name="Tenant" type="text" class="form-control" id="Tenant" value="{{$result->TenantNames}}">
                            @else
                            <input name="Tenant" type="text" class="form-control" id="Tenant" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address">Address :</label>
                             @if(isset($result->TenantAddresss))
                            <input name="Address" type="text" class="form-control" id="Address" value="{{$result->TenantAddresss}}">
                            @else
                            <input name="Address" type="text" class="form-control" id="Address" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Unit">Unit# :</label>
                            @if(isset($result->TenantUnitNo))
                            <input name="Unit" type="text" class="form-control" id="Unit" value="{{$result->TenantUnitNo}}">
                            @else
                            <input name="Unit" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCountry">Country :</label>
                            <select class="form-control cust_frm_cntrl country2" name="t_country" id="TenantCountry">
                              @foreach($country as $key=>$countries)
                                     <option value="{{$key}}">{{$countries}}</option>
                                     @endforeach
                            	@if(isset($result->inv_tenantcountry->countryname))
                              <option selected="selected" value="{{$result->inv_tenantcountry->id}}">{{$result->inv_tenantcountry->countryname}}</option>

                              @endif
                             <!--  <option>CA</option>
                              <option>UK</option>  -->
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantState">State :	</label>
                            <select class="form-control cust_frm_cntrl state2" id="TenantState" name="t_state">
                            	@if(isset($result->inv_tenantstate->statename))
                              <option selected="selected" value="{{$result->inv_tenantstate->id}}">{{$result->inv_tenantstate->statename}}</option> 
                              @endif
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCity">City :	</label>
                            <select class="form-control cust_frm_cntrl city2" name="t_city" id="TenantCity">
                              @if(isset($result->inv_tenatcity->cityname))
                              <option selected="selected" value="{{$result->inv_tenatcity->id}}">{{$result->inv_tenatcity->cityname}}</option> 
                              @endif
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantZip">Zip Code :</label>
                            <select class="form-control cust_frm_cntrl zipcode2" name="t_zip" id="TenantZip">
                              @if(isset($result->inv_tenantzipcode->zipcode))
                              <option selected="selected" value="{{$result->inv_tenantzipcode->id}}">{{$result->inv_tenantzipcode->zipcode}}</option> 
                              @endif
                              <!-- <option>85201</option>
                              <option>85208</option>  -->
                            </select>
                          </div>
                        </div> 
                      </div> 
                      
                     
                  </div>
                </div> 
                
              </div> 
              <div class="col-xl-6 col-12">
                <div class="pl-3 pr-3">
                  <div class="card-body"> 
                     
                      <div class="row">
                        <div class="col-md-6">
                          <label for="COM">Invoice Date :</label>
                          <div class="form-group ">
                            <div class="">
                            	
                                <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                                	@if(isset($result->invoice_date))
                                	<input class="form-control" name="invoice_date" id="datepicker1" value="{{$result->invoice_date}}" data-type="datepicker" data-guid="490c57e7-fb37-22c9-f89c-7c7f99a67f1c" data-datepicker="true" role="input">
                                	@else
                                	<input class="form-control" id="datepicker1" value="" data-type="datepicker" name="invoice_date" data-guid="490c57e7-fb37-22c9-f89c-7c7f99a67f1c" data-datepicker="true" role="input">@endif<span class="input-group-append" role="right-icon"><button class="btn btn-outline-secondary border-left-0" type="button"><i class="gj-icon">event</i></button></span></div>
                            </div>
                        </div> 
                        </div> 
                        <div class="col-md-6">
                          <label for="COM">Lease Start :</label>
                          <div class="form-group ">
                            <div class="">
                                <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">

                                @if(isset($result->LeaseStartDate))
                                	<input class="form-control" name="lease_date" id="datepicker2" value="{{$result->LeaseStartDate}}" data-type="datepicker" data-guid="c2e76cc5-d02e-abe5-64ab-0c21833c3612" data-datepicker="true" role="input">@else
                                	<input class="form-control" id="datepicker1" value="" data-type="datepicker" name="lease_date" data-guid="490c57e7-fb37-22c9-f89c-7c7f99a67f1c" data-datepicker="true" role="input">@endif<span class="input-group-append" role="right-icon"><button class="btn btn-outline-secondary border-left-0" type="button"><i class="gj-icon">event</i></button></span></div>
                            </div>
                        </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">Lease Term :</label>
                            @if(isset($result->Leaseterm))
                            <input name="COM" type="text" name="lease_term" class="form-control" id="COM" value="{{$result->Leaseterm}}">
                            @else
                            <input  " type="text" name="lease_term" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address1">Verifier :</label>
                            @if(isset($result->Verifier))
                            <input name="Address1" type="text" name="verifier" class="form-control" id="Address1" value="{{$result->Verifier}}">
                            @else
                            <input  type="text" name="verifier" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Inv. Maker :</label>
                            @if(isset($result->InvMakerId))
                            <input name="inv_maker" type="text" class="form-control" id="Address2" value="{{$result->InvMakerId}}">
                            @else
                            <input   name="inv_maker" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Rent :</label>
                            @if(isset($result->Rent))
                            <input name="rent" type="text" class="form-control" id="Address2" value="{{$result->Rent}}">
                            @else
                            <input name="rent" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Bonus :	</label>
                            @if(isset($result->Bonus))
                            <input name="bonus" type="text" class="form-control" id="Address2" value="{{$result->Bonus}}">
                            @else
                            <input name="bonus" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">VKP % :</label>
                            @if(isset($result->VKPPercentage))
                            <input name="vkp_percent" type="text" class="form-control" id="Address2" value="{{$result->VKPPercentage}}">
                            @else
                            <input name="vkp_percent" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Flat Rate :</label>
                            @if(isset($result->FlatRate))
                            <input name="flatrate" type="text" class="form-control" id="Address2" value="{{$result->FlatRate}}">
                            @else
                            <input name="flatrate" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Amount due to VKP :</label>
                            @if(isset($result->AmountDueToVKP))
                            <input name="duetovkp" type="text" class="form-control" id="Address2" value="{{$result->AmountDueToVKP}}">
                            @else
                            <input name="duetovkp" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Country">Ist Agent :</label>
                            <select class="form-control cust_frm_cntrl" name="firstagent" id="Country">
                             <option value="">select</option>
                              @foreach($agents as $key=>$agent)
                              <option value="{{$key}}">{{$agent}}</option>
                             @endforeach
                              
                                                     @if(isset($result->FirstagentId))
                                                     <?php $getDeaths = DB::table('agents')->where('id', $result->FirstagentId)->first();  ?>
                                                     <option value="{{$getDeaths->id}}" selected="">{{$getDeaths->agentdisplayname}}</option>
                                                     @endif
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">MO# Count :</label>
                            @if(isset($result->MONOCount))
                            <input type="text" class="form-control" id="Address2" name="m_count" value="{{$result->MONOCount}}">
                            @else
                            <input name="m_count" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Ist Agent Comm. % :</label>
                            @if(isset($result->FirstAgentCommPercentage))
                            <input type="text" class="form-control" id="Address2" name="firstagent_percentage" value="{{$result->FirstAgentCommPercentage}}">
                            @else
                            <input name="firstagent_percentage" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Monthly Adv. Count :</label>
                             @if(isset($result->MontlyAdvanceCount))
                            <input type="text" class="form-control" id="Address2" name="advance_count" value="{{$result->MontlyAdvanceCount}}">
                            @endif
                          </div>
                        </div>
                        <!-- checkbox here -->
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> No #
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> Advance
                            	@if(isset($result->Advance))
                              <input type="checkbox" name="advance" value="Advance" checked>
                              @else
                              <input type="checkbox" name="advance" >
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <!-- end -->

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Due to Ist Agent :</label>
                            @if(isset($result->DueToFirstAgent))
                            <input type="text" class="form-control" value="{{$result->DueToFirstAgent}}" id="Address2" name="duetofirstagent">
                            @else
                            <input name="duetofirstagent" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">VKP Split :</label>
                            @if(isset($result->VKPSplit))
                            <input type="text" class="form-control" id="Address2" name="vkp_split" value="{{$result->VKPSplit}}">
                            @else
                            <input name="vkp_split" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Country">2nd Agent :</label>
                            <select class="form-control cust_frm_cntrl" name="second_agent" id="Country">
                              <option value="">select</option>
                            	 @foreach($agents as $key=>$agent)
                              <option value="{{$key}}">{{$agent}}</option>
                             @endforeach
                         
                                                     @if(isset($result->SecondAgentID))
                                                     <?php $getDeaths = DB::table('agents')->where('id', $result->SecondAgentID)->first();  ?>
                                                     <option value="{{$getDeaths->id}}" selected="">{{$getDeaths->agentdisplayname}}</option>
                                                     @endif
                            </select>
                          </div>
                        </div>
                        <div class=" col-md-6">
                          <div class=" form-group">
                            <label for="Address2">Due to 2nd :</label>
                            @if(isset($result->DueToSecondAgent))

                            <input type="text" class="form-control" id="Address2" name="duetosecond" value="{{$result->DueToSecondAgent}}">
                            @else
                            <input name="duetosecond" type="text" class="form-control" id="Unit" value="">
                            @endif

                          </div>
                        </div>
                        <div class="col-md-12">                        
                          <div class="form-group  row pl-3">
                              <label class="custom-control custom-radio custom-control-inline">
                                @if($result->billType == 1)
                                  <input type="radio" name="radio-inline" checked="" class="custom-control-input">
                                  @else
                                  <input type="radio" name="radio-inline"  class="custom-control-input">
                                  @endif
                                  <span class="custom-control-label">Apartment Rental</span>
                              </label>
                              <label class="custom-control custom-radio custom-control-inline">
                                @if($result->billType == 2)
                                  <input type="radio" name="radio-inline" class="custom-control-input" checked="">
                                  @else
                                  <input type="radio" name="radio-inline" class="custom-control-input">
                                  @endif
                                  <span class="custom-control-label">Home Lease</span>
                              </label>
                              <label class="custom-control custom-radio custom-control-inline">
                                @if($result->billType == 3)
                                  <input type="radio" name="radio-inline" class="custom-control-input" checked="">
                                  @else
                                   <input type="radio" name="radio-inline" class="custom-control-input">
                                  @endif
                                  <span class="custom-control-label">Home Sale</span>
                              </label>

                          </div>
                      </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> Legal
                            	@if(isset($result->Legal))
                              <input type="radio" name="Legal" value="Legal" checked="checked">
                              @else
                              <input type="radio" name="Legal">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> Adjust Comm.
                              @if(isset($result->AdjustCommission))
                              <input type="radio" name="home" value="Adjust Comm" checked="checked">
                              @else
                              <input type="radio" name="home">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> 50 / 50 Split
                            	@if(isset($result->FiftyFiftySplit))
                              <input type="checkbox" value="50 / 50 Split" checked>
                              @else
                              <input type="checkbox">
                              @endif
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> No Pay
                            	@if(isset($result->FiftyFiftySplit))
                              <input type="checkbox" value="No Pay" checked>
                              @else
                              <input type="checkbox">
                              @endif

                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Gift Card :</label>
                            @if(isset($result->GiftCard))
                            <input type="text" class="form-control" id="Address2" name="Address2" value="{{$result->GiftCard}}">
                            @else
                            <input name="Unit" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">PO # :</label>
                            @if(isset($result->PONO))
                            <input type="text" class="form-control" id="Address2" name="po" value="{{$result->PONO}}">
                            @else
                            <input name="po" type="text" class="form-control" id="Unit" value="">
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check">Delinquent Water Mark
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group ">
                            <label for="text" class="bold">Notes :	</label>
                            <div class="">
                                <textarea   placeholder="" class="form-control"></textarea>
                            </div>
                        </div>
                        </div>
                           
                      </div> 
                    
                  </div>
                </div>  
              </div> 

            </div> 
 <div class="modal-footer">
<!--        <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a><br>-->
 <input type="submit" value="Save" class="btn btn-danger btn_close_pop3">
 <!-- <a type="submit" class="btn btn-danger btn_close_pop3"></a> -->
  <a href="" onclick="window.open('{{ route('bill.form',$result->id)}}', '_blank', 'location=yes,height=560,width=1000,scrollbars=yes,status=yes');" type="button" class="btn btn-danger btn_close_pop3">View Billig Form</a>
   <a type="button" class="btn btn-danger btn_close_pop3">Email Invoice</a>
    <a type="button" class="btn btn-danger btn_close_pop3">Cancel</a>
      </div>
</form> 
            <div class="clearfix"></div> 
          </div>
                        
                        
                        
                        
                       
                        
                        </div>
                          </div>
                
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
     
 <!--    </div>
  </div>
</div> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
          $("#change_address").click(function() {
          $('#mgtAddress1').attr('readonly', false);
          });
        });
  
  
</script>
<script type="text/javascript">

  $('.property_select').change(function(){
    var propertyid = $(this).val();    
 // alert(propertyid);
 
    if(propertyid){
        $.ajax({
           type:"GET",
           url:"{{url('get-property-list')}}?property_id="+propertyid,
           success:function(res){ 

           $('.mgt_property').html('');    

            if(res){
                // $(".mgt_property").empty();
                $(".mgt_property").append('<option value="'+res['mangment_company']['id']+'" selected>'+res['mangment_company']['mgt_company']+'</option>');
                $(".mgt_propertyid").val(res['mangment_company']['id']);
                $(".mgt_office").val(res['mangment_company']['office_address']);
                $(".mgt_country").val(res['mgtcountryname']);
                $(".mgt_state").val(res['mgtstatename']);
                $(".mgt_city").val(res['mgtcityname']);
                $(".mgt_zipcode").val(res['mgtzipcode']);
                $(".mgtphone").val(res['mangment_company']['phone']);

                 
           
            }else{
               $(".mgt_property").empty();
               $(".mgt_office").empty();
               $(".mgt_country").empty();
               $(".mgt_state").empty();
               $(".mgt_city").empty();
               $(".mgt_zipcode").empty();


            }
           }
        });
    }else{
       $(".mgt_property").empty();
               $(".mgt_office").empty();
               $(".mgt_country").empty();
               $(".mgt_state").empty();
               $(".mgt_city").empty();
               $(".mgt_zipcode").empty();
            }      
   });
  
</script>
<script type="text/javascript">
   $('.country2').change(function(){
    var countryID = $(this).val();    
 
 
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){     

            if(res){
                $(".state2").empty();
                $(".state2").append('<option>Select</option>');
                $.each(res,function(key,value){
               
                    $(".state2").append('<option value="'+key+'" class="t_state">'+value+'</option>');
                });
           
            }else{
               $(".state2").empty();
            }
           }
        });
    }else{
        $(".state2").empty();
        $(".city2").empty();
    }      
   });
   $('.state2').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("city2").empty();
               
                $.each(res,function(key,value){
                    $(".city2").append('<option value="'+key+'" class="t_city">'+value+'</option>');
                });
           
            }else{
               $(".city2").empty();
            }
           }
        });
    }else{
        $(".city2").empty();
        $(".zipcode2").empty();
    }
        
   });
   $('.city2').on('change',function(){
    var cityID = $(this).val();    
    if(cityID){
        $.ajax({
           type:"GET",
           url:"{{url('get-zipcode-list')}}?city_id="+cityID,
           success:function(res){               
            if(res){
                $(".zipcode2").empty();
                $.each(res,function(key,value){
                    $(".zipcode2").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $(".zipcode2").empty();
            }
           }
        });
    }else{
        $(".zipcode2").empty();
    }
        
   });
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#btnSearch').on('click',function (e) {
    e.preventDefault();
    var searchnumber = $('#numberinvoice').val();
    $.ajax({
                
                url: "{{url('manageinvoice/edit')}}"+'/'+searchnumber,
                method: 'GET',
                headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                data:{searchnumber:searchnumber} ,
        
                success:function(data){
                
                // console.log(data);
 
                $('body').html(data);
                 

                },error: function (jqXHR, status, err) {
                  $(".errertest").html("");
    alert("Error this number is not exist!.");
    $('.errertest').append('Not exist!');
  }

            });
     
})
});
 
</script>

@endsection