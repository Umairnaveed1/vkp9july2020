@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">AUTOPAY SCREEN </h2>
              </div>
            </div>
          </div>
          <div class="ecommerce-widget">
            <form action="{{route('autopay.store')}}" Method="POST" id="autoPayForm">
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
                                    <label for="email" class="col-md-12 align-self-center">Invoice Number #: </label>
                                    <div class="col-md-12">
                                      
									  <input type="text" class="form-control" id="invoice_no" name="invoice_no"  value="{{ $current_invoice }}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Find Invoice #: </label>
                                    <div class="col-md-12">
                                     <input type="text" class="form-control" id="find_invoice" name="find_invoice">
                                    </div>
                                  </div> 
                                </div> 
                              </div>
                            </div>
                            <div class="col-12 col-xl-12">
                              <div class=" mt-3">
                                <a  class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn btn_w_search">Search</a>
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
                  <div class="card-body">
                    <h5 class="text_address ">Property :</h5>
                    <input type="hidden" name="find_invoice_type" id="find_invoice_type" value="2">
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
                          <!-- <div class="form-group">
                            <label class="home_check"> Do Not Place
                              <input type="checkbox" name="do_not_place" id="do_not_place" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div> -->
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class=" text-right">
                              <a  class="btn btn-primary form_box_cust_btn">Notes</a>
                            </div>
                          </div>
                        </div>

                        <!-- <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Offline
                              <input type="checkbox" name="offline" id="offline" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> On Hold
                              <input type="checkbox" name="onhold" id="onhold" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Legal
                              <input type="checkbox" name="legal" id="legal" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Print billing Note
                              <input type="checkbox" name="print_billing_note" id="print_billing_note" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Auto Pay
                              <input type="checkbox" name="auto_pay" id="auto_pay" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <!-- <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Not Advancable
                              <input type="checkbox" name="not_advancable" id="not_advancable" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> 
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Guarantee Contract
                              <input type="checkbox" name="guarantee_contract" id="guarantee_contract" value="0">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> -->
                        
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
                              <a  class="btn btn-primary form_box_cust_btn">Change Billing Address</a>
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
                            <select class="form-control cust_frm_cntrl" name="bill_country_id" id="billing_address_country">
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
                            <select class="form-control cust_frm_cntrl" name="bill_state_id" id="billing_address_state">
                              <option>Alabama</option> 
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="City">City :	</label>
                            <select class="form-control cust_frm_cntrl" name="bill_city_id" id="billing_address_city">
                              <option>Birmingham</option> 
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Zip">Zip Code :</label>
                            <select class="form-control cust_frm_cntrl" id="bill_zipcode_id" name="zipcodebill">
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
                <div class="card card_address pl-3 pr-3 tenant_address_section">
             
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
                            <select class="form-control cust_frm_cntrl" id="TenantCountry" name="tenant_country_id">
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
                            <select class="form-control cust_frm_cntrl" id="TenantState" name="tenant_state_id">
                              <option>-----------Select-----------</option>
                            </select>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCity">City :	</label>
                            <select class="form-control cust_frm_cntrl" id="TenantCity" name="tenant_city_id">
                             <option>-----------Select-----------</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantZip">Zip Code :</label>
                            <select class="form-control cust_frm_cntrl" id="TenantZip" name="tenant_zipcode_id">
                              <option>-----------Select-----------</option>
                            </select>
                          </div>
                        </div> 
                      </div> 
                      
                    <!--</form>-->
                  </div>
                </div> 

                <div class="card card_address pl-3 pr-3 append_holding_fee_data" style="padding:20px; display: none;">
                  <div class="row">
                    <div class="col-2"></div>
                    <div class="col-3">MO #</div>
                    <div class="col-2">Amount</div>
                    <div class="col-2"></div>
                    </div>
                </div>

                <div class="card card_address pl-3 pr-3 home_lease_section" style="display: none;">
             
                  <div class="card-body"> 
                    <h5 class="text_address mt-2">Home Lease Co-Broke</h5>
                    <!--<form action="/action_page.php">-->
                      <div class="row">  
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Tenant">Buyer Broker% :</label>
                            <input type="number" class="form-control" id="buyer_broker" name="buyer_broker">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address">Referral Amount / Flat Rate :</label>
                            <input type="text" class="form-control" id="referral_amount" name="referral_amount">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Unit">Company Name :</label>
                            <input type="text" class="form-control" id="company_name" name="company_name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Unit">agent :</label>
                            <input type="text" class="form-control" id="home_lease_agent" name="home_lease_agent">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCountry">Country :</label>
                            <select class="form-control cust_frm_cntrl" id="home_lease_country" name="home_lease_country">
                              <option value="">Select</option>
                              @foreach($country_list as $list_country)
                              <option value="{{ $list_country['id'] }}">{{ $list_country['countryname'] }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantState">State :  </label>
                            <select class="form-control cust_frm_cntrl" id="home_lease_state" name="home_lease_state">
                              <option>-----------Select-----------</option>
                            </select>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantCity">City :  </label>
                            <select class="form-control cust_frm_cntrl" id="home_lease_city" name="home_lease_city">
                             <option>-----------Select-----------</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TenantZip">Zip Code :</label>
                            <select class="form-control cust_frm_cntrl" id="home_lease_zipcode" name="home_lease_zipcode">
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
                            <input type="text" class="form-control" id="total_rent" name="Rent">
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
                            <input type="text" class="form-control" id="flat_rate" name="FlatRate" value="" disabled="disabled">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Amount Due To VKP :</label>
                            <input type="text" class="form-control" id="amount_due_to_vkp" name="AmountDueToVKP">
                          </div>
                        </div>
 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Country">Ist Agent :</label>
                            <select class="form-control cust_frm_cntrl" id="first_agent" name="FirstagentId">
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
                                  <input type="radio" name="billType" checked="" value="1" class="custom-control-input apartment_rental">
                                  <span class="custom-control-label">Apartment Rental</span>
                              </label>
                              <label class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" name="billType" value="2" class="custom-control-input home_lease">
                                  <span class="custom-control-label">Home Lease</span>
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
                              <input type="hidden" name="hidden_id" id="hidden_id" value="">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12 align-self-center">
                          <div class="form-group">
                            <button type="button" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn apply_holding_fee btn_w_search bot_w_btn" data-toggle="modal" data-target="#myModal">Apply Holding Fee</button>
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
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Amount Collected :	</label>
                            <input type="text" class="form-control" id="APPaymentCollected" name="APPaymentCollected" value="{{old('APPaymentCollected')}}">
                            <input type="text" name="" value="0" id="collected_amount_count" name="collected_amount_count" style="display: none;">
                          </div>
                        </div>
                       <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Amt Due To Property :	</label>
                            <input type="text" class="form-control" id="APAmountDueToProperty" name="APAmountDueToProperty" value="{{old('APAmountDueToProperty')}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Balance :</label>
                            <input type="text" class="form-control" id="balance" name="balance" value="{{old('balance')}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">M / O # :</label>
                            <input type="text" class="form-control" id="MONO" name="MONO" value="{{old('MONO')}}">
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Address2">Amount :</label>
                            <input type="text" class="form-control" id="AmountMO" name="AmountMO" value="{{old('AmountMO')}}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <button type="button" id="add_holding_fee" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn btn_w_search">Add</button>
                          </div>
                        </div> 
                        <div class="col-md-12">
                          <div class="form-group ">
                            <label for="text" class="bold">Notes :	</label>
                            <div class="">
                                <textarea  placeholder="" id="InvoiceNote" name="InvoiceNote" class="form-control"></textarea>
                            </div>
                        </div>
                        </div>
                           
                      </div> 
                    </form> 
                  </div>
                </div>  
              </div> 
            </div> 
			</form>
      <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-box-width">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body append_apply_holding_fee">
        <div class="row">
        <div class="col-1"><h6>Apply</h6></div>
        <div class="col-3"><h6>Tenant Name</h6></div>
        <div class="col-3"><h6>Property Name</h6></div>
        <div class="col-2"><h6>Holding Fee</h6></div>
        <div class="col-1"><h6>Unit#</h6></div>
        <div class="col-2"><h6>Enter MO#</h6></div>
        </div>
      </div>
    </div>

  </div>
</div>
            <div class="clearfix"></div> 
          </div>
		
          <div class="row mb-3 mt-3">
            <div class="col-sm-12">

              <a href="javascript:void(0)" class="btn_add_agent" id="save_autopay"> Save</a>

            <a href="javascript:void(0)" class="btn_add_agent "> View Billing Form</a>
            
            <a href="javascript:void(0)" class="btn_add_agent"> Email Invoice</a>
            
            <a href="javascript:void(0)" class="btn_add_agent"> Cancel</a>
            
            
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
$(document).on('change', '#home_lease_country', function(){
  var zipcode_country_id = $('#home_lease_country').val();
$('#home_lease_state').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/get_state') }}",
   method:"POST",
   data:{zipcode_country_id:zipcode_country_id},
   success:function(data)
   {
    $('#home_lease_state').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('#home_lease_state').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
    });
    
    
   }
  });

});
$(document).on('change', '#home_lease_state', function(){
var zipcode_state_id = $(this).val();
$('#home_lease_city').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/get_city') }}",
   method:"POST",
   data:{zipcode_state_id:zipcode_state_id},
   success:function(data)
   {
    $('#home_lease_city').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('#home_lease_city').append('<option value="'+v['id']+'">'+v['cityname']+'</option>');
    });
    
    
   }
  });
});
$(document).on('change', '#home_lease_city', function(){
var rmv_zipcode_city_id = $(this).val();
$('#home_lease_zipcode').html('');
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
    $('#home_lease_zipcode').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('#home_lease_zipcode').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>');
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
	//console.log(data);
  $('#hidden_id').val(data['data']['id']);
    $('#last_contract_date').val(data['data']['lastcontract']);
    $('#COM_MGT').val(data['data']['mangment_company']['mgt_company']);
    $('#COM_MGT_id').val(data['data']['mangment_company']['id']);
    $('#Address1').val(data['data']['propertyAd']);
    $('#Address1').val(data['data']['propertyAd']);
    $('#Address_tenant').val(data['data']['propertyAd']);
    $('#billing_address_country option').filter(function() { 
    return ($(this).val() == data['data']['country_id']);
    }).prop('selected', true);
    $('#TenantCountry option').filter(function() { 
    return ($(this).val() == data['data']['country_id']);
    }).prop('selected', true);
    $('#TenantState').append('<option value="'+data['data']['state_id']+'">'+data['data']['state_list']['statename']+'</option>');
    $('#TenantCity').append('<option value="'+data['data']['city_id']+'">'+data['data']['state_list']['statename']+'</option>');
    $('#TenantZip').append('<option value="'+data['data']['zipcode_id']+'">'+data['data']['zipcode_id']['zipcode']+'</option>');
    $('#billing_address_state').append('<option value="'+data['data']['state_id']+'">'+data['data']['state_list']['statename']+'</option>');
    $('#billing_address_city').append('<option value="'+data['data']['city_id']+'">'+data['data']['state_list']['statename']+'</option>');
    $('#billing_address_zip').append('<option value="'+data['data']['zipcode_id']+'">'+data['data']['zipcode_id']['zipcode']+'</option>');
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
    if(data['data']['APPaymentCollected']){
      $('#APPaymentCollected').val(data['data']['APPaymentCollected']);

    }
    if(data['data']['APAmountDueToProperty']){
      $('#APAmountDueToProperty').val(data['data']['APAmountDueToProperty']);
    }
    
   }
  });
});
$('#first_agent').on('change', function(){
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
  if ($(".apartment_rental").is(":checked")) {
if(flat_rate == '' || flat_rate == 0){
  if(vkp_precent != 0 || vkp_precent != ''){
   vkp_precent_amount = (total_rent * vkp_precent) / 100;
   if(Bonus != 0 && Bonus != ''){
    $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
      var amount_vkp_splits = total_rent - vkp_precent_amount;
      amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
    $('#vkp_split').val(amount_vkp_split);
    $('#APAmountDueToProperty').val('-' + parseInt(vkp_precent_amount) + parseInt(Bonus));
   }
   else{
    $('#APAmountDueToProperty').val('-' + vkp_precent_amount);
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
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
}
else{
  if(first_agent == '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
$('#vkp_split').val(flat_rate);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
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
if ($(".apartment_rental").is(":checked")) {
if(flat_rate == '' || flat_rate == 0){
  if(vkp_precent != 0 || vkp_precent != ''){
   vkp_precent_amount = (total_rent * vkp_precent) / 100;
   if(Bonus != 0 && Bonus != ''){
    $('#amount_due_to_vkp').val(parseInt(vkp_precent_amount) + parseInt(Bonus));
      var amount_vkp_splits = total_rent - vkp_precent_amount;
      amount_vkp_split = parseInt(amount_vkp_splits) + parseInt(Bonus);
    $('#vkp_split').val(amount_vkp_split);
    $('#APAmountDueToProperty').val('-' + parseInt(vkp_precent_amount) + parseInt(Bonus));
   }
   else{
    $('#amount_due_to_vkp').val(vkp_precent_amount);
      amount_vkp_split = total_rent - vkp_precent_amount;
    $('#vkp_split').val(amount_vkp_split);
    $('#APAmountDueToProperty').val('-' + vkp_precent_amount);
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
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
}
else{
  if(first_agent == '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
$('#vkp_split').val(flat_rate);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
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
if ($(".apartment_rental").is(":checked")) {
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
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
}
else{
   if(first_agent == '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
$('#vkp_split').val(flat_rate);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
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
if ($(".apartment_rental").is(":checked")) {
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
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
}
else{
  if(first_agent == '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
$('#vkp_split').val(flat_rate);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
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
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent == ''){
$('#amount_due_to_vkp').val(flat_rate);
var comm_first_agent = (flat_rate * first_agent_comm) / 100;
var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
$('#due_to_ist_agent').val(comm_first_agent);
$('#vkp_split').val(vkp_split_aft_comm);
$('#APAmountDueToProperty').val('-' + flat_rate);
  }
  else if(first_agent != '' && second_agent != ''){
    var second_agent_comm = (flat_rate * 12.5) / 100;
    if(first_agent_comm == '' || first_agent_comm == 0){
      $('#due_to_ist_agent').val('-'+second_agent_comm);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(flat_rate);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
    else{
      var comm_first_agent = (flat_rate * first_agent_comm) / 100;
      var vkp_split_aft_comm = parseInt(flat_rate) - parseInt(comm_first_agent);
      var second_agent_comm = (flat_rate * 12.5) / 100;
      $('#due_to_ist_agent').val(comm_first_agent);
      $('#due_to_second').val(second_agent_comm);
      $('#vkp_split').val(vkp_split_aft_comm);
      $('#APAmountDueToProperty').val('-' + flat_rate);
    }
  }
  else{
    $('#amount_due_to_vkp').val(flat_rate);
    $('#vkp_split').val(flat_rate);
  }
}
});
//#autoPayForm
$('#save_autopay').click(function(){
	$('#autoPayForm').submit();
});

$("#save_autopay").mouseover(function(){
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

$('.home_lease').on('click', function(){
$('.home_lease_section').show();
$('#flat_rate').attr('disabled', false);
$('#vkp_precent').attr('disabled', true);
$('#total_rent').attr('disabled', true);
});
$('.apartment_rental').on('click', function(){
$('.home_lease_section').hide();
$('#flat_rate').attr('disabled', true);
$('#vkp_precent').attr('disabled', false);
$('#total_rent').attr('disabled', false);
});
$('.apply_holding_fee').on('click', function(){
  $('.remove_apply_fee').remove();
var first_agent = $('#first_agent').val();
var property_id= $('#propety_id').val();
if((first_agent != '' || first_agent != 0) && (property_id  != '' || property_id != 0)){
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('autopay/apply_holding_fee') }}",
   method:"POST",
   data:{first_agent:first_agent, property_id:property_id},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
      $('.append_apply_holding_fee').append('<div class="row remove_apply_fee">'+
        '<div class="col-1"><input type="checkbox" class="append_fee" value="'+v['id']+'"></div>'+
        '<div class="col-3">'+v['customerf']+'</div>'+
        '<div class="col-3">'+v['community']+'</div>'+
        '<div class="col-2"><input type="text" value="'+v['holdingfee']+'" readonly="readonly" /></div>'+
        '<div class="col-1">'+v['unitno']+'</div>'+
        '<div class="col-2">'+v['mcno']+'</div>'+
        '</div>');
    });
    
    
   }
  });
}
});
$(document).on('click', '.append_fee', function(){
var append_fee = $(this).val();
var $this = $(this);
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('autopay/holding_fee_get') }}",
   method:"POST",
   data:{append_fee:append_fee},
   success:function(data)
   {
      $('.append_holding_fee_data').append('<div class="row remove_apply_fee">'+
        '<div class="col-2">del</div>'+
        '<div class="col-3"><input type="text" value="'+data['data']['mcno']+'" readonly="readonly" name="fee_holding_mono[]"/></div>'+
        '<div class="col-2"><input type="text" value="'+data['data']['holdingfee']+'" readonly="readonly" name="fee_holding_AmountMO[]"/></div>'+
        '<div class="col-2"><a href="#">view</a></div>'+
        '</div>');
    $this.parent().parent().remove();
    $('.append_holding_fee_data').show();
    var collected_amount_count = $('#collected_amount_count').val();
    var final_count = parseInt(collected_amount_count) + parseInt(data['data']['holdingfee']);
    $('#collected_amount_count').val(final_count); 
    
   }
  });
});
$('#add_holding_fee').on('click', function(){
  var APPaymentCollected = $('#APPaymentCollected').val();
  let final_count = '';
  if(APPaymentCollected){
    let AmountMO = $('#AmountMO').val();
    var balance = $('#balance').val();
    if(balance != 0){
  let MONO = $('#MONO').val();
        $('.append_holding_fee_data').append('<div class="row remove_apply_fee">'+
        '<div class="col-2">del</div>'+
        '<div class="col-3"><input type="text" readonly="readonly" value="'+MONO+'" name="fee_holding_mono[]" /></div>'+
        '<div class="col-2"><input type="text" value="'+AmountMO+'" readonly="readonly" name="fee_holding_AmountMO[]" /></div>'+
        '<div class="col-2"><a href="#">view</a></div>'+
        '</div>');
    $('.append_holding_fee_data').show();
    var collected_amount_count = $('#collected_amount_count').val();
      final_count = parseInt(balance) - parseInt(AmountMO);
    $('#balance').val(final_count);
  }
  else{
    alert('Your balance is zero');
  }
  }
  else{
    alert('Pleae Enter Some Amount');
  }
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
$('#APPaymentCollected').on('change', function(){
var APPaymentCollected = $('#APPaymentCollected').val();
var APAmountDueToProperty = $('#APAmountDueToProperty').val();
var balance = $('#balance').val();
var amt_due_to_property = parseInt(APPaymentCollected) + parseInt(APAmountDueToProperty);
$('#APAmountDueToProperty').val(amt_due_to_property);
$('#balance').val(APPaymentCollected);
});
$('.create_new_invoice').on('click', function(){
location.reload();
});
  </script>
  <style type="text/css">
    .append_apply_holding_fee .col-2, .append_apply_holding_fee .col-1, .append_apply_holding_fee .col-3{
      border:1px solid;

    }
    .append_apply_holding_fee .col-2 input{
      border:none;

    }
    .append_holding_fee_data .col-2, .append_holding_fee_data .col-1, .append_holding_fee_data .col-3{
      border:1px solid;

    }
    .append_holding_fee_data .col-2 input{
      border:none;

    }
    .modal-box-width{
      width: 600px;
      max-width: 600px;
    }

    .btn_w_search
{
width: 135px;
color: #fff !important;
}
.bot_w_btn
{
width: 222px !important;
    display: block !important;
    float: left !important;
    height: 53px !important;
    line-height: 22px !important;
}
.form_box_cust_btn

{
  color: #fff !important;
}
.btn_add_agent{
      width: 216px;
    display: block;
    float: left;
    height: 68px;

}
 


  </style>
@endsection