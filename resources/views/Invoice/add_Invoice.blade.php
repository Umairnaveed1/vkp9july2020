﻿@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
  <div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
            <h2 class="pageheader-title">ADD INVOICES </h2>
          </div>
        </div>
      </div>
      <div class="ecommerce-widget">
	  	@if(Session::has('billingMsg'))
			<div class="alert alert-success"  style="font-size: 17px;margin:10px;">        
			<strong>Success! </strong>{{Session::get('billingMsg')}}
			</div>
			<?php session()->forget('billingMsg'); ?> 
			@endif
        <form action="{{route('invoice.store')}}" Method="POST" id="invoiceForm">
          {{csrf_field()}}
          <div class="row"> 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


              <!-- Left Box Start -->

              <div class="card card_address pl-3 pr-3">
                <h5 class="text_address mt-3 mb-0">Move in Invoice</h5>
                <div class="card-body">
                  <div class="cust_tbl_search text-right">
                    <!--<form class="form-group mt-2 " action="/action_page.php">-->
                      <div class="row">
                        <div class="col-12 col-xl-12">
                          <div class="row no-gutters">
                            <div class="col-md-6 text-left p-1">
                              <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">
                                Invoice Number : 
                              </label>
                                <div class="col-md-12">

                                 <input type="text" class="form-control" id="invoice_no" name="invoice_no"  value="{{ $current_invoice }}">
                               </div>
                             </div>
                           </div>
                           <div class="col-md-6 text-left p-1">
                            <div class="row no-gutters mr-2">
                              <label for="email" class="col-md-12 align-self-center">FIND INVOICE No: </label>
                              <div class="col-md-12">
                               <input type="text" class="form-control" id="find_invoice" name="find_invoice">
                               <input type="hidden" name="hidden_id" id="hidden_id">
                             </div>
                           </div> 
                         </div> 
                       </div>
                     </div>
                     <div class="col-12 col-xl-12">
                      <div class=" mt-3">
                        <a  class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn btn_w_search ">Search</a>
                        <a  class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn create_new_invoice">New Invoice</a>
                      </div> 
                    </div>
                  </div>
                  <!--</form>-->
                </div> 
              </div>
            </div> 
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 col-12">
            <!-- Left Box End  -->
            <div class="card card_address pl-3 pr-3">
              <input type="hidden" name="find_invoice_type" id="find_invoice_type" value="1">
              <div class="card-body">
                <h5 class="text_address ">Property :</h5>
                <!--<form action="/action_page.php">-->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="sel1">Select</label>
                        <select class="form-control cust_frm_cntrl" id="propety_id" name="property_id">
                          <option value="">Select</option>
                          @foreach($property as $list_property)
                          <option value="{{ $list_property['id'] }}">{{ $list_property['propertyName'] }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Last Contract Date</label>
                        <input type="email" class="form-control" id="last_contract_date" name="last_contract_date" disabled="disabled">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="home_check"> Do Not Place
                          <input type="checkbox" name="do_not_place" id="do_not_place" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class=" text-right">
                          <a  class="btn btn-primary form_box_cust_btn cust1">Notes</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> Offline
                          <input type="checkbox" name="offline" id="offline" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> On Hold
                          <input type="checkbox" name="onhold" id="onhold" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> Legal
                          <input type="checkbox" name="legal" id="legal" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> Print billing Note
                          <input type="checkbox" name="print_billing_note" id="print_billing_note" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> Auto Pay
                          <input type="checkbox" name="auto_pay" id="auto_pay" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> Not Advancable
                          <input type="checkbox" name="not_advancable" id="not_advancable" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div> 
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="home_check"> Guarantee Contract
                          <input type="checkbox" name="guarantee_contract" id="guarantee_contract" value="0" disabled="disabled">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>

                  </div> 

                  <!--</form>-->
                </div> 
              </div>  
              <div class="card card_address pl-3 pr-3">
                <div class="card-body"> 
                  <!--<form action="/action_page.php">-->
                    <div class="row">
                      <div class="col-md-5">
                        <h5 class="text_address mb-0">Billing Address</h5>
                      </div>
                      <div class="col-md-7 mb-3">
                        <div class="form-group">
                          <div class=" text-right">
                            <a  href="#" class="btn btn-primary form_box_cust_btn cust1">Change Billing Address</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="COM">COM / MGT CO :</label>

                          <input type="text" class="form-control criteria_rate span2" readonly="readonly" id="COM_MGT" name="InvoiceMgmtCompName">
                          <input type="hidden" class="form-control criteria_rate span2" readonly="readonly" id="COM_MGT_id" name="InvoiceMgmtCompId">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Address1">Address 1 :</label>
                          <input type="text" class="form-control" id="Address1" name="InvoiceMgmtAddress1" readonly="readonly">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Address2">Address 2 :</label>
                          <input type="text" class="form-control" id="Address2" name="InvoiceMgmtAddress2" disabled="disabled">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Country">Country :</label>
                          <select class="form-control cust_frm_cntrl" name="countrybill" id="billing_address_country">
                            <option>Select</option>
                            @foreach($country_list as $list_country)
                            <option value="{{ $list_country['id'] }}">{{ $list_country['countryname'] }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="State">State :	</label>
                          <select class="form-control cust_frm_cntrl" name="statebill" id="billing_address_state">
                            <option>Alabama</option> 
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="City">City :	</label>
                          <select class="form-control cust_frm_cntrl" name="citybill" id="billing_address_city">
                            <option>Birmingham</option> 
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Zip">Zip Code :</label>
                          <select class="form-control cust_frm_cntrl" id="billing_address_zip" name="zipcodebill">
                            <option>85203</option>
                            <option>85201</option>
                            <option>85208</option> 
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="phone">Phone :</label>
                          <input type="text" class="form-control" id="phone" name="InvoiceMgmtPhoneNo">
                        </div>
                      </div> 
                    </div>


                    <!--</form>-->
                  </div> 
                </div> 
                <div class="card card_address pl-3 pr-3">

                  <div class="card-body"> 
                    <h5 class="text_address mt-2">Tenant Address</h5>
                    <!--<form action="/action_page.php">-->
                      <div class="row">  
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Tenant">Tenant :</label>
                            <input type="text" class="form-control" id="Tenant" name="TenantNames">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address">Address :</label>
                            <input type="text" class="form-control" id="Address_tenant" name="TenantAddresss">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Unit">Unit# :</label>
                            <input type="text" class="form-control" id="Unit" name="TenantUnitNo">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCountry">Country :</label>
                            <select class="form-control cust_frm_cntrl" id="TenantCountry" name="countrytenant">
                              <option value="">Select</option>
                              @foreach($country_list as $list_country)
                              <option value="{{ $list_country['id'] }}">{{ $list_country['countryname'] }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantState">State :	</label>
                            <select class="form-control cust_frm_cntrl" id="TenantState" name="statetenant">
                              <option>-----------Select-----------</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCity">City :	</label>
                            <select class="form-control cust_frm_cntrl" id="TenantCity" name="citytenant">
                             <option>-----------Select-----------</option>
                           </select>
                         </div>
                       </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="TenantZip">Zip Code :</label>
                          <select class="form-control cust_frm_cntrl" id="TenantZip" name="TenantZipCodeId">
                            <option>-----------Select-----------</option>
                          </select>
                        </div>
                      </div> 
                    </div> 

                    <!--</form>-->
                  </div>
                </div> 
                
              </div> 
              <div class="col-xl-6 col-12">
                <div class="card card_address pl-3 pr-3">
                <div class="card-body"> 
                    <!--<form action="/action_page.php">-->
                      <div class="row">
                        <div class="col-md-6">
                          <label for="COM">Invoice Date :</label>
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker1" name="invoice_date" value="{{old('invoice_date')}}" />
                            </div>
                          </div> 
                        </div> 
                        <div class="col-md-6">
                          <label for="COM">Lease Start :</label>
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker2"  name="LeaseStartDate" value="{{old('LeaseStartDate')}}" />
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">Lease Term :</label>
                            <input type="text" class="form-control" id="Leaseterm" name="lease_term" name="Leaseterm" value="{{old('Leaseterm')}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address1">Verifier :</label>
                            <input type="text" class="form-control" id="Verifier" name="Verifier">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Inv. Maker :</label>
                            <input type="text" class="form-control" id="InvMakerId" name="InvMakerId" value="{{ $auth }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Rent :</label>
                            <input type="text" class="form-control" id="total_rent" name="rent">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Bonus :	</label>
                            <input type="text" class="form-control" id="Bonus" name="Bonus">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">VKP % :</label>
                            <input type="text" class="form-control" id="vkp_precent" name="VKPPercentage" value="0">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Flat Rate :</label>
                            <input type="text" class="form-control" id="flat_rate" name="FlatRate" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Amount DUE To VKP :</label>
                            <input type="text" class="form-control" id="amount_due_to_vkp" name="AmountDueToVKP">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
              
                <div class="card card_address pl-3 pr-3">
                <div class="card-body"> 
                    <!--<form action="/action_page.php">-->
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Country">Ist Agent :</label>
                            <select class="form-control cust_frm_cntrl first_agent" id="first_agent" name="FirstagentId">
                              <option value="">SELECT</option>
                              @foreach($agent as $agent_list)
                              <option value="{{ $agent_list['id'] }}">{{ $agent_list['agentdisplayname'] }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">MO# Count :</label>
                            <input type="text" class="form-control" id="mo_count" name="MONOCount" value="1">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Ist Agent Comm. % :</label>
                            <input type="text" class="form-control" id="first_agent_comm" name="FirstAgentCommPercentage" value="" disabled="disabled">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Monthly Adv. Count :</label>
                            <input type="text" class="form-control" id="monthly_adv_count" name="MontlyAdvanceCount">
                          </div>
                        </div>
                        <!-- checkbox here -->
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> No #
                              <input type="checkbox" name="NoNumber" value="0" id="NoNumber">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> Advance
                              <input type="checkbox" name="advance" id="advance" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <!-- end -->

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Due to Ist Agent :</label>
                            <input type="text" class="form-control" id="due_to_ist_agent" name="DueToFirstAgent">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">VKP Split :</label>
                            <input type="text" class="form-control" id="vkp_split" name="VKPSplit">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Country">2nd Agent :</label>
                            <select class="form-control cust_frm_cntrl" id="second_agent" name="SecondAgentID">
                              <option value=""> SELECT</option>
                              @foreach($agent as $agent_list)
                              <option value="{{ $agent_list['id'] }}">{{ $agent_list['agentdisplayname'] }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class=" col-md-6">
                          <div class=" form-group">
                            <label for="Address2">Due to 2nd :</label>
                            <input type="text" class="form-control" id="due_to_second" name="DueToSecondAgent">
                          </div>
                        </div>
                        <div class="col-md-12">                        
                          <div class="form-group  row pl-3">
                            <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="paymentType" checked="" value="apartment" class="custom-control-input">
                              <span class="custom-control-label">Apartment Rental</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="paymentType" value="homelease" class="custom-control-input">
                              <span class="custom-control-label">Home Lease</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="paymentType" value="homesale" class="custom-control-input">
                              <span class="custom-control-label">Home Sale</span>
                            </label>

                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> Legal
                              <input type="radio" name="legal">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> Adjust Comm.
                              <input type="radio" name="AdjustCommission" id="AdjustCommission" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> 50 / 50 Split
                              <input type="checkbox" id="FiftyFiftySplit" name="FiftyFiftySplit" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check"> No Pay
                              <input type="checkbox" name="NoPay" id="NoPay" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Gift Card :</label>
                            <input type="text" class="form-control" id="GiftCard" name="GiftCard">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">PO # :</label>
                            <input type="text" class="form-control" id="PONO" name="PONO">
                          </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <div class="form-group">
                            <label class="home_check">Delinquent Water Mark
                              <input type="checkbox" name="delinquent">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group ">
                            <label for="text" class="bold">Notes :	</label>
                            <div class="">
                              <textarea  placeholder="" value="1" name="InvoiceNote" id="InvoiceNote" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                      </div> 
                    </form> 
                  </div>
                </div>  
              
            </div> 
          </form>
          <div class="clearfix"></div> 
        </div>

        <div class="row mb-3 mt-3 pl-3">
          <div class="col-sm-12">

            <a href="javascript:void(0)" class="btn_add_agent" id="save_invoice"> Save</a>

            <a href="javascript:void(0)" class="btn_add_agent view_billing_form" data-toggle="modal" data-target="#myModal_view_billing_form"> View Billing Form</a>
            
            <a href="javascript:void(0)" class="btn_add_agent"> Email Invoice</a>
            
            <a href="javascript:void(0)" class="btn_add_agent"> Cancel</a>            
</div>
</div>
<div class="modal" id="myModal_view_billing_form">
  <div class="modal-dialog w_viewapprove_bill">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Apartment Billing</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                     
      <div class="col-md-12">
      
         <div class="row">
                             
                  <div class="col-md-6">
                  
                  <div>
                  <table width="100%" class=" table_responsive2">
                                        <tbody>
                                        
                                            <tr>
                                              <td width="8%" align="left" scope="row">Move In # :</td>
                                              <td width="8%" align="left" id="billing_move_id">1</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Agent :</td>
                                              <td align="left" id="billing_agent">Mike</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Agent Comm % :</td>
                                              <td align="left" id="billing_agent_comm">100</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">2ND Agent :</td>
                                              <td align="left" id="billing_second_agent">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">2ND Agent Comm Split % :</td>
                                              <td align="left" id="billing_fifty_split">50 / 50 Split</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Primery agent<br></td>
                                              <td align="left">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row"><label class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label">Listing Agent</span></label></td>
                                              <td align="left"><label class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label">Leasing Agent</span></label></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Rent :</td>
                                              <td align="left" id="billing_rent">600</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Move in RCVD :</td>
                                              <td align="left" id="billing_move_rcvd">12232.26</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Commission % :</td>
                                              <td align="left" id="billing_commission">0</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Flate Rate</td>
                                              <td align="left" id="billing_flate_rate">500</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Bonus :</td>
                                              <td align="left" id="billing_bonus">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Total Due to VKP :</td>
                                              <td align="left" id="billing_due_to_vkp">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Due to 1st Agent :</td>
                                              <td align="left" id="billing_due_to_ist_agent">447.5</td>
                                            </tr>
                                                 <tr>
                                              <td align="left" scope="row">Due to 2nd Agent :</td>
                                              <td align="left" id="billing_due_to_2st_agent">0</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Verified By :</td>
                                              <td align="left" id="billing_verified_by">Mike</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2" align="left" scope="row"><strong><h5>Billing Information</h5>
                                              </strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Community Name :</td>
                                              <td align="left" id="billing_community">4637 Winhcter</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Buyer Broker %</td>
                                              <td align="left" id="billing_buyer_broker">40</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Agent</td>
                                              <td align="left" id="billing_buyer_agent">testlease</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Refrene Amount</td>
                                              <td align="left" id="billing_refrene_amount">0</td>
                                            </tr>
                                            
                                            
                                            <tr>
                                              <td align="left" scope="row">Address :</td>
                                              <td align="left" id="billing_address">4637 W Sunny Side Ave</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row" colspan="2">
                                              
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td> State : </td>
                                                    <td id="billing_state">Arizona</td>
                                                    <td>City :</td>
                                                    <td id="billing_city">Glendale</td>
                                                    <td>Zip :</td>
                                                    <td id="billing_zipcode">85304</td>
                                                  </tr>
                                              </table></td>
                                          
                                            </tr>
                                            <tr>
                                              <td colspan="2" align="left" scope="row"> <label class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label">Click to Confirm That This is The Correct Address of Residence </span></label></td>
                                            </tr>
                                            <tr>
                                             <td colspan="2" align="left" scope="row"> <label class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label">Change Tenant Address</span></label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                  </div>
                  
                  </div>       
                        
                        
                        
                        
                        
                        <div class="col-md-6">
                       <div class="form-group">
                                  <label for="name">Agent Notes :</label>
                           <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows=""></textarea>
                                  
                          </div>
                       
                         <div class="form-group">
                                  <label for="name">   Attachment :</label>
                        <input name="" type="file" class="form-control">
                                  
                          </div>
                          
                          
                          
                          
                          
                           
                     
                  
                  
                  </div>
                        
                        
                        
                       
                        
                        
                        
                        
                        
                        
                        
                       
                        
                        </div>
                          </div>
                
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
<!--        <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a><br>-->
 <a type="button" class="btn btn-danger btn_close_pop3">Print</a>
      </div>

    </div>
  </div>
</div>
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
</div>
<script type="text/javascript">
 $(document).on('change', '#billing_address_country', function(){
  var zipcode_country_id = $('#billing_address_country').val();
  $('#billing_address_state').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('admin/zipcode/get_state') }}",
    method:"POST",
    data:{zipcode_country_id:zipcode_country_id},
    success:function(data)
    {
      $('#billing_address_state').append('<option value="">------Select-------</option>');
      $.each(data['data'], function(i,v){
        $('#billing_address_state').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
      });


    }
  });

});
 $(document).on('change', '#billing_address_state', function(){
  var zipcode_state_id = $(this).val();
  $('#billing_address_city').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('admin/zipcode/get_city') }}",
    method:"POST",
    data:{zipcode_state_id:zipcode_state_id},
    success:function(data)
    {
      $('#billing_address_city').append('<option value="">------Select-------</option>');
      $.each(data['data'], function(i,v){
        $('#billing_address_city').append('<option value="'+v['id']+'">'+v['cityname']+'</option>');
      });


    }
  });
});
 $(document).on('change', '#billing_address_city', function(){
  var rmv_zipcode_city_id = $(this).val();
  $('#billing_address_zip').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('admin/zipcode/get') }}",
    method:"POST",
    data:{rmv_zipcode_city_id:rmv_zipcode_city_id},
    success:function(data)
    {
      $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
      $('#billing_address_zip').append('<option value="">------Select-------</option>');
      $.each(data['data'], function(i,v){
        $('#billing_address_zip').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>');
      });


    }
  });
});
 $(document).on('change', '#TenantCountry', function(){
  var zipcode_country_id = $('#TenantCountry').val();
  $('#TenantState').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('admin/zipcode/get_state') }}",
    method:"POST",
    data:{zipcode_country_id:zipcode_country_id},
    success:function(data)
    {
      $('#TenantState').append('<option value="">------Select-------</option>');
      $.each(data['data'], function(i,v){
        $('#TenantState').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
      });


    }
  });

});
 $(document).on('change', '#TenantState', function(){
  var zipcode_state_id = $(this).val();
  $('#TenantCity').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('admin/zipcode/get_city') }}",
    method:"POST",
    data:{zipcode_state_id:zipcode_state_id},
    success:function(data)
    {
      $('#TenantCity').append('<option value="">------Select-------</option>');
      $.each(data['data'], function(i,v){
        $('#TenantCity').append('<option value="'+v['id']+'">'+v['cityname']+'</option>');
      });


    }
  });
});
 $(document).on('change', '#TenantCity', function(){
  var rmv_zipcode_city_id = $(this).val();
  $('#TenantZip').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('admin/zipcode/get') }}",
    method:"POST",
    data:{rmv_zipcode_city_id:rmv_zipcode_city_id},
    success:function(data)
    {
      $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
      $('#TenantZip').append('<option value="">------Select-------</option>');
      $.each(data['data'], function(i,v){
        $('#TenantZip').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>');
      });


    }
  });
});
 $('#propety_id').on('change', function(){
  var propety_id = $('#propety_id').val();
  $('#TenantState').html('');
  $('#TenantCity').html('');
  $('#TenantZip').html('');
  $('#billing_address_state').html('');
  $('#billing_address_city').html('');
  $('#billing_address_zip').html('');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('invoice/get_property') }}",
    method:"POST",
    data:{propety_id:propety_id},
    success:function(data)
    {
      data = JSON.parse(JSON.stringify(data).replace(/\:null/gi, "\:\"\"")); 
      console.log(data['data']['city_list']['cityname']);
      $('#last_contract_date').val(data['data']['lastcontract']);
      if(data['data']['mangment_company']['mgt_company']){
        $('#COM_MGT').val(data['data']['mangment_company']['mgt_company']);
        $('#COM_MGT_id').val(data['data']['mangment_company']['id']);
      }
      else{}
        $('#Address1').val(data['data']['propertyAd']);
      $('#Address1').val(data['data']['propertyAd']);
      $('#Address_tenant').val(data['data']['propertyAd']);
      $('#billing_address_country option').filter(function() { 
        return ($(this).val() == data['data']['country_id']);
      }).prop('selected', true);
      $('#TenantCountry option').filter(function() { 
        return ($(this).val() == data['data']['country_id']);
      }).prop('selected', true);
      $('#TenantState').append('<option value="'+data['data']['state_list']['statename']+'">'+data['data']['state_list']['statename']+'</option>');
      $('#TenantCity').append('<option value="'+data['data']['city_list']['cityname']+'">'+data['data']['city_list']['cityname']+'</option>');
      $('#TenantZip').append('<option value="'+data['data']['zipcode_list']['zipcode']+'">'+data['data']['zipcode_list']['zipcode']+'</option>');
      $('#billing_address_state').append('<option value="'+data['data']['state_id']+'">'+data['data']['state_list']['statename']+'</option>');
      $('#billing_address_city').append('<option value="'+data['data']['city_id']+'">'+data['data']['city_list']['cityname']+'</option>');
      $('#billing_address_zip').append('<option value="'+data['data']['zipcode_id']+'">'+data['data']['zipcode_list']['zipcode']+'</option>');
      if(data['data']['propertyoffline']){
        $("#offline").prop("checked",true);
        $("#offline").val(data['data']['propertyoffline']);
      }
      if(data['data']['propertyonhold']){
        $("#onhold").prop("checked",true);
        $("#onhold").val(data['data']['propertyonhold']);
      }
      if(data['data']['propertylegal']){
        $("#legal").prop("checked",true);
        $("#legal").val(data['data']['propertylegal']);
      }
      if(data['data']['propertyoffline']){
        $("#print_billing_note").prop("checked",true);
        $("#print_billing_note").val(data['data']['propertyoffline']);
      }
      if(data['data']['ispayautopay']){
        $("#auto_pay").prop("checked",true);
        $("#auto_pay").val(data['data']['ispayautopay']);
      }
      if(data['data']['PropertyNotadvancable']){
        $("#not_advancable").prop("checked",true);
        $("#not_advancable").val(data['data']['PropertyNotadvancable']);
      }
      if(data['data']['propertyguaranteecontract']){
        $("#guarantee_contract").prop("checked",true);
        $("#guarantee_contract").val(data['data']['propertyguaranteecontract']);
      }

    }
  });
});
 $('.first_agent').on('change', function(){
  var first_agent = $('#first_agent').val();
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('invoice/get_month_count') }}",
    method:"POST",
    data:{first_agent:first_agent},
    success:function(data)
    {
      console.log(data);
      $('#mo_count').val(data['data']['count']);
      $('#first_agent_comm').val(data['data']['commission']);
    }
  });
});
 $('.view_billing_form').on('click', function(){
  var invoice_number = $('#hidden_id').val();
  alert(invoice_number);
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('invoice/get_single_invoice') }}",
    method:"POST",
    data:{invoice_number:invoice_number},
    success:function(data)
    {
      $('#first_agent option').filter(function() { 
        if($(this).val() == data['data']['agent_id']){
          var billing_agent = $(this).text();
          $('#billing_agent').text(billing_agent);

        }
      });
    }
  });
 });
 $('#total_rent').keyup(function(){
  $('#due_to_ist_agent').val('');
  $('#due_to_second').val('');
  var vkp_precent = $('#vkp_precent').val();
  var total_rent = $('#total_rent').val();
  var flat_rate = $('#flat_rate').val();
  var amount_due_to_vkp = $('#amount_due_to_vkp').val();
  var first_agent = $('#first_agent').val();
  var first_agent_comm = $('#first_agent_comm').val();
  let second_agent = $('#second_agent').val();
  let due_to_second = $('#due_to_second').val();
  let vkp_amount = $('#amount_due_to_vkp').val();
  let due_to_ist_agent = $('#due_to_ist_agent').val();
  let Bonus = $('#Bonus').val();
  let vkp_precent_amount = 0;
  let vkp_split_count = 0;
  let vkp_split = $('#vkp_split').val();
  let due_vkp_spilt = 0;
  let amount_vkp_split = 0;
  if(flat_rate == '' || flat_rate == 0){
    if(vkp_precent != 0 || vkp_precent != ''){
     vkp_precent_amount = (total_rent * vkp_precent) / 100;
     if(Bonus != 0 && Bonus != ''){
      $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
      var amount_vkp_splits = total_rent - vkp_precent_amount;
      amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
      $('#vkp_split').val(amount_vkp_split);
    }
    else{
      $('#amount_due_to_vkp').val(vkp_precent_amount);
      amount_vkp_split = total_rent - vkp_precent_amount;
      $('#vkp_split').val(amount_vkp_split);
    }


  }
  else{
   $('#amount_due_to_vkp').val('');
 }
 if(first_agent != '' && first_agent_comm != 0 && first_agent_comm != ''){
   vkp_amount = (amount_vkp_split * first_agent_comm) / 100;
   vkp_split_count = amount_vkp_split - vkp_amount; 
   $('#due_to_ist_agent').val(vkp_amount);
   $('#vkp_split').val(vkp_split_count); 
 }
 else if(first_agent != '' && (first_agent_comm == 0 || first_agent_comm == '')){ 
  $('#due_to_ist_agent').val('');
  $('#vkp_split').val(amount_vkp_split);
}
else{

}
if(first_agent != '' && (due_to_ist_agent == '' || due_to_ist_agent == 0)){
  var vkp_split_2nd_agent = $('#vkp_split').val();
  var due_to_ist_agent_2 = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 == 0 || due_to_ist_agent_2 == '')){
   var due_to_second_agent = (vkp_split_2nd_agent * 12.5) / 100;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val('-'+due_to_second_agent);
 }
 else if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 != 0 || due_to_ist_agent_2 != '')){
   var due_to_second_agent = (due_to_ist_agent_2 * 12.5) / 100;
   var final_split1 = due_to_ist_agent_2 - due_to_second_agent;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val(final_split1);
 }
 else{
  $('#due_to_second').val('');
}
}
else if(first_agent != '' && (due_to_ist_agent != '' || due_to_ist_agent != 0)){
  var vkp_split_2nd_agents = $('#vkp_split').val();
  var due_to_ist_agent_2nd = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agents != 0 || vkp_split_2nd_agents != '')){
    var due_to_second_agent = (due_to_ist_agent_2nd * 12.5) / 100;
    $('#due_to_second').val(due_to_second_agent);
    $('#due_to_ist_agent').val('-'+due_to_second_agent);
  }
}
else{
  $('#due_to_second').val('');
  $('#due_to_ist_agent').val('');
}
}
else{
  if(first_agent == '' && second_agent == ''){
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(flat_rate);
    }
    else{
      var ist_agent_comm = (flat_rate * first_agent_comm) / 100;
      var vkp_split_comm = parseInt(flat_rate) - parseInt(ist_agent_comm); 
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(vkp_split_comm);
      $('#due_to_ist_agent').val(ist_agent_comm);
    }

  }
  else if(first_agent != '' && second_agent != ''){
    if(first_agent_comm == '' || first_agent_comm == 0){ 
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#vkp_split').val(flat_rate);
      $('#due_to_ist_agent').val('-' + second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
    }
    else{
      var due_to_first_comm = (flat_rate * first_agent_comm) / 100;
      var second_agent_precent = parseInt(flat_rate) - parseInt(due_to_first_comm);
      var iind_agent_comsion = (due_to_first_comm * 12.5) / 100;
      var due_to_second_val = parseInt(due_to_first_comm) - parseInt(iind_agent_comsion);
      $('#vkp_split').val(second_agent_precent);
      $('#due_to_ist_agent').val(due_to_second_val);
      $('#due_to_second').val(iind_agent_comsion);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
});
$('#vkp_precent').keyup(function(){
  $('#due_to_ist_agent').val('');
  $('#due_to_second').val('');
  var vkp_precent = $('#vkp_precent').val();
  var total_rent = $('#total_rent').val();
  var flat_rate = $('#flat_rate').val();
  var amount_due_to_vkp = $('#amount_due_to_vkp').val();
  var first_agent = $('#first_agent').val();
  var first_agent_comm = $('#first_agent_comm').val();
  let second_agent = $('#second_agent').val();
  let due_to_second = $('#due_to_second').val();
  let vkp_amount = $('#amount_due_to_vkp').val();
  let due_to_ist_agent = $('#due_to_ist_agent').val();
  let Bonus = $('#Bonus').val();
  let vkp_precent_amount = 0;
  let vkp_split_count = 0;
  let vkp_split = $('#vkp_split').val();
  let due_vkp_spilt = 0;
  let amount_vkp_split = 0;
  if(flat_rate == '' || flat_rate == 0){
    if(vkp_precent != 0 || vkp_precent != ''){
     vkp_precent_amount = (total_rent * vkp_precent) / 100;
     if(Bonus != 0 && Bonus != ''){
      $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
      var amount_vkp_splits = total_rent - vkp_precent_amount;
      amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
      $('#vkp_split').val(amount_vkp_split);
    }
    else{
      $('#amount_due_to_vkp').val(vkp_precent_amount);
      amount_vkp_split = total_rent - vkp_precent_amount;
      $('#vkp_split').val(amount_vkp_split);
    }
  }
  else{
   $('#amount_due_to_vkp').val('');
 }
 if(first_agent != '' && first_agent_comm != 0 && first_agent_comm != ''){
   vkp_amount = (amount_vkp_split * first_agent_comm) / 100;
   vkp_split_count = amount_vkp_split - vkp_amount; 
   $('#due_to_ist_agent').val(vkp_amount);
   $('#vkp_split').val(vkp_split_count); 
 }
 else if(first_agent != '' && (first_agent_comm == 0 || first_agent_comm == '')){ 
  $('#due_to_ist_agent').val('');
  $('#vkp_split').val(amount_vkp_split);
}
else{

}
if(first_agent != '' && (due_to_ist_agent == '' || due_to_ist_agent == 0)){
  var vkp_split_2nd_agent = $('#vkp_split').val();
  var due_to_ist_agent_2 = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 == 0 || due_to_ist_agent_2 == '')){
   var due_to_second_agent = (vkp_split_2nd_agent * 12.5) / 100;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val('-'+due_to_second_agent);
 }
 else if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 != 0 || due_to_ist_agent_2 != '')){
   var due_to_second_agent = (due_to_ist_agent_2 * 12.5) / 100;
   var final_split1 = due_to_ist_agent_2 - due_to_second_agent;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val(final_split1);
 }
 else{
  $('#due_to_second').val('');
}
}
else if(first_agent != '' && (due_to_ist_agent != '' || due_to_ist_agent != 0)){
  var vkp_split_2nd_agents = $('#vkp_split').val();
  var due_to_ist_agent_2nd = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agents != 0 || vkp_split_2nd_agents != '')){
    var due_to_second_agent = (due_to_ist_agent_2nd * 12.5) / 100;
    $('#due_to_second').val(due_to_second_agent);
    $('#due_to_ist_agent').val('-'+due_to_second_agent);
  }
}
else{
  $('#due_to_second').val('');
  $('#due_to_ist_agent').val('');
}
}
else{
  if(first_agent == '' && second_agent == ''){
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(flat_rate);
    }
    else{
      var ist_agent_comm = (flat_rate * first_agent_comm) / 100;
      var vkp_split_comm = parseInt(flat_rate) - parseInt(ist_agent_comm); 
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(vkp_split_comm);
      $('#due_to_ist_agent').val(ist_agent_comm);
    }

  }
  else if(first_agent != '' && second_agent != ''){
    if(first_agent_comm == '' || first_agent_comm == 0){ 
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#vkp_split').val(flat_rate);
      $('#due_to_ist_agent').val('-' + second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
    }
    else{
      var due_to_first_comm = (flat_rate * first_agent_comm) / 100;
      var second_agent_precent = parseInt(flat_rate) - parseInt(due_to_first_comm);
      var iind_agent_comsion = (due_to_first_comm * 12.5) / 100;
      var due_to_second_val = parseInt(due_to_first_comm) - parseInt(iind_agent_comsion);
      $('#vkp_split').val(second_agent_precent);
      $('#due_to_ist_agent').val(due_to_second_val);
      $('#due_to_second').val(iind_agent_comsion);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
});
$('#FiftyFiftySplit').on('change', function(){
  // $('#due_to_ist_agent').val('');
  $('#due_to_second').val('');
  var due_to_ist_agent = $('#due_to_ist_agent').val();
  var vkp_split = $('#vkp_split').val();
  var due_to_second = $('#due_to_second').val();
  var first_agent = $('#first_agent').val();
  var second_agent = $('#second_agent').val();
  var first_agent_comm = $('#first_agent_comm').val();
  var flat_rate = $('#flat_rate').val();

  if(first_agent != '' && second_agent != ''){
    if ($('#FiftyFiftySplit').prop('checked')==true){
      if(flat_rate != '' || flat_rate != 0){
       if(first_agent_comm == '' || first_agent_comm == 0){
         var vkp_split_comm = (vkp_split * 50) / 100;
         var vkp_split_first_comm = (vkp_split_comm * 50) / 100;
         $('#due_to_ist_agent').val('-'+vkp_split_first_comm);
         $('#due_to_second').val(vkp_split_first_comm);
       }
       else{
        var vkp_split_comm = (due_to_ist_agent * 50) / 100;
        var vkp_first_agent = due_to_ist_agent - vkp_split_comm;
        $('#due_to_ist_agent').val(vkp_first_agent);
        $('#due_to_second').val(vkp_split_comm);
      }
    }
    else{
      if(first_agent_comm == '' || first_agent_comm == 0){
       var vkp_split_comm = (vkp_split * 50) / 100;
       var vkp_split_first_comm = (vkp_split_comm * 50) / 100;
       $('#due_to_ist_agent').val('-'+vkp_split_first_comm);
       $('#due_to_second').val(vkp_split_first_comm);
     }
     else{
      var vkp_split_comm = (due_to_ist_agent * 50) / 100;
      var vkp_first_agent = due_to_ist_agent - vkp_split_comm;
      $('#due_to_ist_agent').val(vkp_first_agent);
      $('#due_to_second').val(vkp_split_comm);
    }

  }

}
else{
  if(flat_rate != '' || flat_rate != 0){
    if(first_agent_comm == '' || first_agent_comm == 0){
     var vkp_split_comm = (vkp_split * 12.5) / 100;
     $('#due_to_ist_agent').val('-'+vkp_split_comm);
     $('#due_to_second').val(vkp_split_comm);
   }
   else{
    var vkp_split_comm = (vkp_split * 12.5) / 100;
    var vkp_first_agent = vkp_split - vkp_split_comm;
    $('#due_to_ist_agent').val(vkp_first_agent);
    $('#due_to_second').val(vkp_split_comm);
  }
}
else{

  if(first_agent_comm == '' || first_agent_comm == 0){
   var vkp_split_comm = (vkp_split * 12.5) / 100;
   $('#due_to_ist_agent').val('-'+vkp_split_comm);
   $('#due_to_second').val(vkp_split_comm);
 }
 else{
  var vkp_split_comm = (vkp_split * 12.5) / 100;
  var vkp_first_agent = vkp_split - vkp_split_comm;
  $('#due_to_ist_agent').val(vkp_first_agent);
  $('#due_to_second').val(vkp_split_comm);
}
}

}
}
});
$('#first_agent').on('change', function(){
  setTimeout(function(){
    var first_agent_comms = $('#first_agent_comm').val();
    $('#due_to_ist_agent').val('');
    $('#due_to_second').val('');
    $('#first_agent_comm').val(first_agent_comms);
    var vkp_precent = $('#vkp_precent').val();
    var total_rent = $('#total_rent').val();
    var flat_rate = $('#flat_rate').val();
    var amount_due_to_vkp = $('#amount_due_to_vkp').val();
    var first_agent = $('#first_agent').val();
    var first_agent_comm = $('#first_agent_comm').val();
    let second_agent = $('#second_agent').val();
    let due_to_second = $('#due_to_second').val();
    let vkp_amount = $('#amount_due_to_vkp').val();
    let due_to_ist_agent = $('#due_to_ist_agent').val();
    let Bonus = $('#Bonus').val();
    let vkp_precent_amount = 0;
    let vkp_split_count = 0;
    let vkp_split = $('#vkp_split').val();
    let due_vkp_spilt = 0;
    let amount_vkp_split = 0;
    if(flat_rate == '' || flat_rate == 0){
      if(vkp_precent != 0 || vkp_precent != ''){
       vkp_precent_amount = (total_rent * vkp_precent) / 100;
       if(Bonus != 0 && Bonus != ''){
        $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
        var amount_vkp_splits = total_rent - vkp_precent_amount;
        amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
        $('#vkp_split').val(amount_vkp_split);
      }
      else{
        $('#amount_due_to_vkp').val(vkp_precent_amount);
        amount_vkp_split = total_rent - vkp_precent_amount;
        $('#vkp_split').val(amount_vkp_split);
      }
    }
    else{
     $('#amount_due_to_vkp').val('');
   }
   if(first_agent != '' && first_agent_comm != 0 && first_agent_comm != ''){
     vkp_amount = (amount_vkp_split * first_agent_comm) / 100;
     vkp_split_count = amount_vkp_split - vkp_amount; 
     $('#due_to_ist_agent').val(vkp_amount);
     $('#vkp_split').val(vkp_split_count); 
   }
   else if(first_agent != '' && (first_agent_comm == 0 || first_agent_comm == '')){
    $('#due_to_ist_agent').val('');
    $('#vkp_split').val(amount_vkp_split);
  }
  else{
  }
  if(first_agent != '' && (due_to_ist_agent == '' || due_to_ist_agent == 0)){
    var vkp_split_2nd_agent = $('#vkp_split').val();
    var due_to_ist_agent_2 = $('#due_to_ist_agent').val();
    if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 == 0 || due_to_ist_agent_2 == '')){
     var due_to_second_agent = (vkp_split_2nd_agent * 12.5) / 100;
     $('#due_to_second').val(due_to_second_agent);
     $('#due_to_ist_agent').val('-'+due_to_second_agent);
   }
   else if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 != 0 || due_to_ist_agent_2 != '')){
     var due_to_second_agent = (due_to_ist_agent_2 * 12.5) / 100;
     var final_split1 = due_to_ist_agent_2 - due_to_second_agent;
     $('#due_to_second').val(due_to_second_agent);
     $('#due_to_ist_agent').val(final_split1);
   }
   else{
    $('#due_to_second').val('');
  }
}
else if(first_agent != '' && (due_to_ist_agent != '' || due_to_ist_agent != 0)){
  var vkp_split_2nd_agents = $('#vkp_split').val();
  var due_to_ist_agent_2nd = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agents != 0 || vkp_split_2nd_agents != '')){
    var due_to_second_agent = (due_to_ist_agent_2nd * 12.5) / 100;
    $('#due_to_second').val(due_to_second_agent);
    $('#due_to_ist_agent').val('-'+due_to_second_agent);
  }
}
else{
  $('#due_to_second').val('');
  $('#due_to_ist_agent').val('');
}
}
else{
  if(first_agent == '' && second_agent == ''){
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(flat_rate);
    }
    else{
      var ist_agent_comm = (flat_rate * first_agent_comm) / 100;
      var vkp_split_comm = parseInt(flat_rate) - parseInt(ist_agent_comm); 
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(vkp_split_comm);
      $('#due_to_ist_agent').val(ist_agent_comm);
    }

  }
  else if(first_agent != '' && second_agent != ''){
    if(first_agent_comm == '' || first_agent_comm == 0){ 
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#vkp_split').val(flat_rate);
      $('#due_to_ist_agent').val('-' + second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
    }
    else{
      var due_to_first_comm = (flat_rate * first_agent_comm) / 100;
      var second_agent_precent = parseInt(flat_rate) - parseInt(due_to_first_comm);
      var iind_agent_comsion = (due_to_first_comm * 12.5) / 100;
      var due_to_second_val = parseInt(due_to_first_comm) - parseInt(iind_agent_comsion);
      $('#vkp_split').val(second_agent_precent);
      $('#due_to_ist_agent').val(due_to_second_val);
      $('#due_to_second').val(iind_agent_comsion);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
}, 2000);
});
$('#second_agent').on('change', function(){
  $('#due_to_ist_agent').val('');
  $('#due_to_second').val('');
  var vkp_precent = $('#vkp_precent').val();
  var total_rent = $('#total_rent').val();
  var flat_rate = $('#flat_rate').val();
  var amount_due_to_vkp = $('#amount_due_to_vkp').val();
  var first_agent = $('#first_agent').val();
  var first_agent_comm = $('#first_agent_comm').val();
  let second_agent = $('#second_agent').val();
  let due_to_second = $('#due_to_second').val();
  let vkp_amount = $('#amount_due_to_vkp').val();
  let due_to_ist_agent = $('#due_to_ist_agent').val();
  let Bonus = $('#Bonus').val();
  let vkp_precent_amount = 0;
  let vkp_split_count = 0;
  let vkp_split = $('#vkp_split').val();
  let due_vkp_spilt = 0;
  let amount_vkp_split = 0;
  if(flat_rate == '' || flat_rate == 0){
    if(vkp_precent != 0 || vkp_precent != ''){
     vkp_precent_amount = (total_rent * vkp_precent) / 100;
     if(Bonus != 0 && Bonus != ''){
      $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
      var amount_vkp_splits = total_rent - vkp_precent_amount;
      amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
      $('#vkp_split').val(amount_vkp_split);
    }
    else{
      $('#amount_due_to_vkp').val(vkp_precent_amount);
      amount_vkp_split = total_rent - vkp_precent_amount;
      $('#vkp_split').val(amount_vkp_split);
    }
  }
  else{
   $('#amount_due_to_vkp').val('');
 }
 if(first_agent != '' && first_agent_comm != 0 && first_agent_comm != ''){
   vkp_amount = (amount_vkp_split * first_agent_comm) / 100;
   vkp_split_count = amount_vkp_split - vkp_amount; 
   $('#due_to_ist_agent').val(vkp_amount);
   $('#vkp_split').val(vkp_split_count); 
 }
 else if(first_agent != '' && (first_agent_comm == 0 || first_agent_comm == '')){ 
  $('#due_to_ist_agent').val('');
  $('#vkp_split').val(amount_vkp_split);
}
else{

}
if(first_agent != '' && (due_to_ist_agent == '' || due_to_ist_agent == 0)){
  var vkp_split_2nd_agent = $('#vkp_split').val();
  var due_to_ist_agent_2 = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 == 0 || due_to_ist_agent_2 == '')){
   var due_to_second_agent = (vkp_split_2nd_agent * 12.5) / 100;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val('-'+due_to_second_agent);
 }
 else if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 != 0 || due_to_ist_agent_2 != '')){
   var due_to_second_agent = (due_to_ist_agent_2 * 12.5) / 100;
   var final_split1 = due_to_ist_agent_2 - due_to_second_agent;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val(final_split1);
 }
 else{
  $('#due_to_second').val('');
}
}
else if(first_agent != '' && (due_to_ist_agent != '' || due_to_ist_agent != 0)){
  var vkp_split_2nd_agents = $('#vkp_split').val();
  var due_to_ist_agent_2nd = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agents != 0 || vkp_split_2nd_agents != '')){
    var due_to_second_agent = (due_to_ist_agent_2nd * 12.5) / 100;
    $('#due_to_second').val(due_to_second_agent);
    $('#due_to_ist_agent').val('-'+due_to_second_agent);
  }
}
else{
  $('#due_to_second').val('');
  $('#due_to_ist_agent').val('');
}
}
else{
  if(first_agent == '' && second_agent == ''){
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(flat_rate);
    }
    else{
      var ist_agent_comm = (flat_rate * first_agent_comm) / 100;
      var vkp_split_comm = parseInt(flat_rate) - parseInt(ist_agent_comm); 
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(vkp_split_comm);
      $('#due_to_ist_agent').val(ist_agent_comm);
    }

  }
  else if(first_agent != '' && second_agent != ''){
    if(first_agent_comm == '' || first_agent_comm == 0){ 
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#vkp_split').val(flat_rate);
      $('#due_to_ist_agent').val('-' + second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
    }
    else{
      var due_to_first_comm = (flat_rate * first_agent_comm) / 100;
      var second_agent_precent = parseInt(flat_rate) - parseInt(due_to_first_comm);
      var iind_agent_comsion = (due_to_first_comm * 12.5) / 100;
      var due_to_second_val = parseInt(due_to_first_comm) - parseInt(iind_agent_comsion);
      $('#vkp_split').val(second_agent_precent);
      $('#due_to_ist_agent').val(due_to_second_val);
      $('#due_to_second').val(iind_agent_comsion);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
});
$('#flat_rate').on('change', function(){
  $('#due_to_ist_agent').val('');
  $('#due_to_second').val('');
  var vkp_precent = $('#vkp_precent').val();
  var total_rent = $('#total_rent').val();
  var flat_rate = $('#flat_rate').val();
  var amount_due_to_vkp = $('#amount_due_to_vkp').val();
  var first_agent = $('#first_agent').val();
  var first_agent_comm = $('#first_agent_comm').val();
  let second_agent = $('#second_agent').val();
  let due_to_second = $('#due_to_second').val();
  let vkp_amount = $('#amount_due_to_vkp').val();
  let due_to_ist_agent = $('#due_to_ist_agent').val();
  let Bonus = $('#Bonus').val();
  let vkp_precent_amount = 0;
  let vkp_split_count = 0;
  let vkp_split = $('#vkp_split').val();
  let due_vkp_spilt = 0;
  let amount_vkp_split = 0;
  if(flat_rate == '' || flat_rate == 0){
    if(vkp_precent != 0 || vkp_precent != ''){
     vkp_precent_amount = (total_rent * vkp_precent) / 100;
     if(Bonus != 0 && Bonus != ''){
      $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
      var amount_vkp_splits = total_rent - vkp_precent_amount;
      amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
      $('#vkp_split').val(amount_vkp_split);
    }
    else{
      $('#amount_due_to_vkp').val(vkp_precent_amount);
      amount_vkp_split = total_rent - vkp_precent_amount;
      $('#vkp_split').val(amount_vkp_split);
    }
  }
  else{
   $('#amount_due_to_vkp').val('');
 }
 if(first_agent != '' && first_agent_comm != 0 && first_agent_comm != ''){
   vkp_amount = (amount_vkp_split * first_agent_comm) / 100;
   vkp_split_count = amount_vkp_split - vkp_amount; 
   $('#due_to_ist_agent').val(vkp_amount);
   $('#vkp_split').val(vkp_split_count); 
 }
 else if(first_agent != '' && (first_agent_comm == 0 || first_agent_comm == '')){ 
  $('#due_to_ist_agent').val('');
  $('#vkp_split').val(amount_vkp_split);
}
else{

}
if(first_agent != '' && (due_to_ist_agent == '' || due_to_ist_agent == 0)){
  var vkp_split_2nd_agent = $('#vkp_split').val();
  var due_to_ist_agent_2 = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 == 0 || due_to_ist_agent_2 == '')){
   var due_to_second_agent = (vkp_split_2nd_agent * 12.5) / 100;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val('-'+due_to_second_agent);
 }
 else if(second_agent != '' && (vkp_split_2nd_agent != 0 || vkp_split_2nd_agent != '') && (due_to_ist_agent_2 != 0 || due_to_ist_agent_2 != '')){
   var due_to_second_agent = (due_to_ist_agent_2 * 12.5) / 100;
   var final_split1 = due_to_ist_agent_2 - due_to_second_agent;
   $('#due_to_second').val(due_to_second_agent);
   $('#due_to_ist_agent').val(final_split1);
 }
 else{
  $('#due_to_second').val('');
}
}
else if(first_agent != '' && (due_to_ist_agent != '' || due_to_ist_agent != 0)){
  var vkp_split_2nd_agents = $('#vkp_split').val();
  var due_to_ist_agent_2nd = $('#due_to_ist_agent').val();
  if(second_agent != '' && (vkp_split_2nd_agents != 0 || vkp_split_2nd_agents != '')){
    var due_to_second_agent = (due_to_ist_agent_2nd * 12.5) / 100;
    $('#due_to_second').val(due_to_second_agent);
    $('#due_to_ist_agent').val('-'+due_to_second_agent);
  }
}
else{
  $('#due_to_second').val('');
  $('#due_to_ist_agent').val('');
}
}
else{
  if(first_agent == '' && second_agent == ''){
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(flat_rate);
    }
    else{
      var ist_agent_comm = (flat_rate * first_agent_comm) / 100;
      var vkp_split_comm = parseInt(flat_rate) - parseInt(ist_agent_comm); 
      $('#amount_due_to_vkp').val(flat_rate);
      $('#vkp_split').val(vkp_split_comm);
      $('#due_to_ist_agent').val(ist_agent_comm);
    }

  }
  else if(first_agent != '' && second_agent != ''){
    if(first_agent_comm == '' || first_agent_comm == 0){ 
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#vkp_split').val(flat_rate);
      $('#due_to_ist_agent').val('-' + second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
    }
    else{
      var due_to_first_comm = (flat_rate * first_agent_comm) / 100;
      var second_agent_precent = parseInt(flat_rate) - parseInt(due_to_first_comm);
      var iind_agent_comsion = (due_to_first_comm * 12.5) / 100;
      var due_to_second_val = parseInt(due_to_first_comm) - parseInt(iind_agent_comsion);
      $('#vkp_split').val(second_agent_precent);
      $('#due_to_ist_agent').val(due_to_second_val);
      $('#due_to_second').val(iind_agent_comsion);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
});
//#invoiceForm
$('#save_invoice').click(function(){
	$('#invoiceForm').submit();
});

$("#save_invoice").mouseover(function(){
	var propety_id=$("#propety_id").val();
	var first_agent=$("#first_agent").val();
	if(propety_id==''){
		alert('Please Select property');
		return false;
	}
	if(first_agent==''){
		alert('Please Select 1st Agent');
		return false;
	}
});


$(document).click("offline",function(){
  $.each($("input[name='offline']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("legal",function(){
  $.each($("input[name='legal']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("onhold",function(){
  $.each($("input[name='onhold']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("print_billing_note",function(){
  $.each($("input[name='print_billing_note']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("auto_pay",function(){
  $.each($("input[name='auto_pay']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("not_advancable",function(){
  $.each($("input[name='not_advancable']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("guarantee_contract",function(){
  $.each($("input[name='guarantee_contract']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});


$(document).click("NoNumber",function(){
  $.each($("input[name='NoNumber']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});
$(document).on('click', "#NoNumber", function(){
  let append_fee = '';
  if($("#NoNumber").prop('checked') == true){
    var NoPay = 1;
  }
  else{
    var NoPay = 0;
  }

  append_fee = $('#hidden_id').val();
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:"{{ url('autopay/NoPay') }}",
    method:"POST",
    data:{NoPay:NoPay, append_fee:append_fee},
    success:function(data)
    {


    }
  });
});
$(document).click("advance",function(){
  $.each($("input[name='advance']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("AdjustCommission",function(){
  $.each($("input[name='AdjustCommission']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("FiftyFiftySplit",function(){
  $.each($("input[name='FiftyFiftySplit']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});

$(document).click("NoPay",function(){
  $.each($("input[name='NoPay']:checked"), function(){
    if($(this).val()==0){
      $(this).val(1); 
    }else{
      $(this).val(0);	 
    }
  });
});
$('.create_new_invoice').on('click', function(){
  location.reload();
});
</script>
<style type="text/css">
  .btn_w_search
  {
    width: 135px;
  }
  .bot_w_btn
  {
    width: 222px !important;
    display: block !important;
    float: left !important;
    height: 53px !important;
    line-height: 22px !important;
  }

  .cust1
  {
   border-radius:50px;
   color:#fff;
   text-align:center;
   font-size:13px;
   font-family:'Open Sans', sans-serif;
   text-transform:uppercase;
   line-height:7px;
   font-weight:bold;
   background-repeat:no-repeat;
   background-position:left top;
   padding:15px;
   padding-left:40px;
   padding-right:40px;
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
 .form_box_cust_btn

 {
  color: #fff !important;
}
.btn_add_agent{
 /* width: 216px;
  display: block;
  float: left;
  height: 68px;*/
 width: 212px;
    display: block;
    float: left;
    height: 40px;
    line-height: 13px;

}
</style>
@endsection