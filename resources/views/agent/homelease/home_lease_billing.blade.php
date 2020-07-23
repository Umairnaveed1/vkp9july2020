@extends('admin_layouts.layout')
@section('content')
@php
$userInfo               = Auth::user();
$loggedAgent               = \App\Models\Agents\Agent::find($userInfo->id);
@endphp
<style>
.text_address{
	text-transform:none !important;
}
.btn_add_agent{
	text-transform:none !important;
} 
</style>
<?php //echo base_path('get_property');?>
    <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">

            <div class="col-sm-12 text-right">

              <a href="#" class="btn_add_agent btn_add_agent_active"> Billing</a>

              <a href="#" class="btn_add_agent "> Phone List</a>

              <a href="#" class="btn_add_agent"> Resources</a>

              <a href="#" class="btn_add_agent"> Forms</a>

              <div class="clear20"></div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">
                  <div class="row">
                    <div class="col-auto">Home Lease Billing move in for the month of</div>
                    <div class="col-12 col-md-auto p-0">
                      <!--<select name="" class="form-control">
                        <option selected="selected" value="01">January</option>
                        <option value="02">Feburary</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>-->
                      </select>
                    </div>
                  </div>

                </h2>
              </div>
            </div>
          </div>
			@if(Session::has('billingMsg'))
			<div class="alert alert-success"  style="font-size: 17px;margin:10px;">        
			<strong>Success! </strong>{{Session::get('billingMsg')}}
			</div>
			<?php session()->forget('billingMsg'); ?> 
			@endif
		 <form action="{{ route('addHomeLeaseBillings') }}" method="POST" id="hlbillingsForm" enctype="multipart/form-data">
		{{ csrf_field() }}
		 <div class="ecommerce-widget">
            <div class="row">
              <div class="col-lg-7 col-12">
                <!-- Left Box End  -->
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <!--<h5 class="text_address ">Curerently your count is # : 0 for the month of January</h5>-->
                    
                      <div class="row">
                        <div class="col-md-10">
                          <div class="col-md-12 text-left mb-2"> 
                            <div class="row no-gutters mr-3">
                              <label for="moveinno" class="col-md-12 align-self-center">Move In # :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="moveinno" name="moveinno" value="{{$homeLeaseBillId}}" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                                <label> No# :</label>
                              </div>
                              <div class="col-md-6">
                                <label class="home_check">
                                  <input type="checkbox" name="no" value="0">
                                  <span class="checkmark" ></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                                <label> Agent :</label>
                              </div>
                              <div class="col-md-6">
                                <label>{{$loggedAgent->agentdisplayname}}</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-3">
                            <div class="row no-gutters mr-3">
                              <label for="agentcomm" class="col-md-12 align-self-center">Agent Comm % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="agentcomm" name="agentcomm" value="{{$commission}}" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="secondage" class="col-md-12 align-self-center">2ND Agent :</label>
                              <div class="col-md-12">
                                <select name="secondage" class="form-control">
                                  <option value="0">Select</option>
								   <option value="26">Abbie</option>
								  @foreach($agents as $agnt)
								  <option  value="{{$agnt->id}}">{{$agnt->agentdisplayname}}</option>
								  @endforeach
                               
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6 align-self-center">
                                <label> Comm Split By Default 25 % :</label>
                              </div>
                              <div class="col-md-6">
                                <label class="home_check">50 / 50 Split
                                  <input type="checkbox">
                                  <span class="checkmark" name="fiftyfiftysplit" value="0" id="fiftyfiftysplit"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <label class="col-12">Primary Agent Is :</label>
                              <div class="col-md-6">
                                <label class="home_check"> Listing Agent
                                  <input type="checkbox" id="listingagent" name="listingagent" value="0">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                              <div class="col-md-6">
                                <label class="home_check"> Leasing Agent
                                  <input type="checkbox" id="leesingagent" name="leesingagent" value="0">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="rentamount" class="col-md-12 align-self-center">Rent :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="rentamount" name="rentamount" value="{{old('rentamount')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="leeseterms" class="col-md-12 align-self-center">Lease Term :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="leeseterms" name="leeseterms" value="{{old('leeseterms')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="commission" class="col-md-12 align-self-center">Commission % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="commission" name="commission" value="{{old('commission')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="flatrate" class="col-md-12 align-self-center">Flat Rate :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="flatrate" name="flatrate" value="{{old('flatrate')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="bonus" class="col-md-12 align-self-center">Bonus :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="bonus" name="bonus" value="{{old('bonus')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Total Due to VKP :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="totaldueto" name="totaldueto" value="{{old('totaldueto')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Due to 1st Agent :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="duetofirst" name="duetofirst" value="{{old('duetofirst')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Due to 2nd Agent </label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="duetosec" name="duetosec" value="{{old('duetosec')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Verified By :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="verifiedby" name="verifiedby" value="{{old('verifiedby')}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Gift Card :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="giftcard"  name="giftcard" value="{{old('giftcard')}}">
                              </div>
                            </div> 
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">PO # </label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="pono" name="pono" value="{{old('pono')}}">
                              </div>
                            </div>
                          </div>

                        </div>



                      </div>

                    
                  </div>
                </div>

                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Billing Information</h5>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center"> Community Name :</label>
                        <div class="col-md-12">
                          <select name="property_id" class="form-control" id="community" >
                            <option value="">Select</option>
                          @foreach($properties as $propty)
							<option value="{{$propty->id}}">{{$propty->propertyName}}</option>
                            <!--<option value="11274" >@Home Properties &amp; Management</option>
                            <option value="1659">10022 N 15th St #1</option>
                            <option value="11772">1017 E Maryland Ave </option>
                            <option value="11874">1023 E. Silversmith Trl</option>
                            <option value="11870">1041 W McLellan</option>
                            <option value="11137">10416 W. Deanne Dr.</option>-->
							@endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> Address :</label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertyAdd"></label>
                        </div>
                      </div>
                    </div>
					
                     <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label > State :</label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertyState"></label>
                        </div>
                      </div>
                    </div>
                   <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label > City :</label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertyCity"></label>
                        </div>
                      </div>
                    </div>
                   <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> Zip :</label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertZip"></label>
                        </div>
                      </div>
                    </div>
					
				<div class="col-md-12 text-left mb-2 pre-scrollable" id="autopayData" style="display:none">
					
				</div>	
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">Buyer Broker % :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="buyerbroke" name="buyerbroke" value="{{old('buyerbroke')}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">Agent :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="agentname" name="agentname" value="{{old('agentname')}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">Referral Amount/ Flat Rate :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="referralamount" name="referralamount" value="{{old('referralamount')}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">Company Name (Co-Broke) :</label>
                        <div class="col-md-12">
                          <select name="companyn" class="form-control">
						  @foreach($company_managment as $company)
						  <option value="{{$company->id}}">{{$company->mgt_company}}</option>
						  @endforeach
                            
                          </select>
                        </div>
                      </div>
                    </div> 
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">Address :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="companyadd" name="companyadd" value="{{old('companyadd')}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">City :</label>
                        <div class="col-md-12">
                          <select name="companycity" class="form-control">
                            @foreach($state as $stt)
							  <option value="{{$stt->id}}">{{$stt->statename}}</option>
							  @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">State :</label>
                        <div class="col-md-12">
                          <select name="companystate" class="form-control">
                             @foreach($city as $cty)
							  <option value="{{$cty->id}}">{{$cty->cityname}}</option>
							  @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center">Zip :</label>
                        <div class="col-md-12">
                          <select name="companyzip" class="form-control">
                             @foreach($zipCode as $zip)
							  <option value="{{$zip->id}}">{{$zip->zipcode}}</option>
							  @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 mb-2 mt-4">
                      <div class="row form-group p-0">
                        <div class="col-md-12">
                          <label class="home_check"> <b>Click to Confirm That This is The Correct Billing Address</b>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Tenant Information</h5>
                  </div>
                  <div class="col-md-12 text-left mb-2">
                    <div class="row no-gutters mr-3">
                      <label for="email" class="col-md-12 align-self-center">Tenant Name :</label>
                      <div class="col-md-12">
                        <input type="text" class="form-control" id="tenantname" name="tenantname" value="{{old('tenantname')}}" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Address :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="tenantadd" name="tenantadd" value="{{old('tenantadd')}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Unit # :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="tenantunit" name="tenantunit" value="{{old('tenantunit')}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">State :</label>
                        <div class="col-md-12">
                          <select name="tenantstate" class="form-control">
                            <option selected>Select</option>
                            @foreach($state as $stt)
							  <option value="{{$stt->id}}">{{$stt->statename}}</option>
							@endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">City :</label>
                        <div class="col-md-12">
                          <select name="tenantcity" class="form-control">
                            <option selected>Select</option>
                             @foreach($city as $cty)
							  <option value="{{$cty->id}}">{{$cty->cityname}}</option>
							  @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Zip :</label>
                        <div class="col-md-12">
                          <select name="tanantzip" class="form-control">
                            <option selected>Select</option>
                             @foreach($zipCode as $zip)
							  <option value="{{$zip->id}}">{{$zip->zipcode}}</option>
							  @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-6">
                        <div class="col-md-12">
                          <label for="COM">Lease Start :</label>
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker1" name="leesestart" value="{{old('leesestart')}}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Phone # :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{old('phonenumber')}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 mt-4">
                    <div class="row form-group p-0">
                      <div class="col-md-12">
                        <label class="home_check"> <b>Click to Confirm That This is The Correct Address of Residence</b>
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-5 col-12">
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Agent Notes :</h5>

                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12">
                        <textarea type="text" rows="5" class="form-control" name="agentnotes" value="{{old('agentnotes')}}"></textarea>
                      </div>
                    </div>


                    <h5 class="text_address ">
                      Attachment :</h5>

                    <div class="row no-gutters mr-3">
                      <div class="col-md-12">
                        <input type="file" rows="5" class="form-control attached_file" name="fileattachement">
                      </div>
                      <div class="col-md-12 text-left mt-2">

                        <!--<a href="javascript:void(0)" class="btn_add_agent btn_add_agent_active"> Upload</a>-->
                      </div>
                    </div>
                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12 text-center mt-5">
                        <img src="images/logo.gif" class="w-50 h-auto mx-auto" alt="">
                      </div>
                      <div class="col-sm-12 text-center pt-4">

                       <!-- <button href="javascript:void(0)" class="btn_add_agent btn_add_agent_active" id="hLBillingsButton"> Submit</button>-->
                        <a href="javascript:void(0)" class="btn_add_agent " id="hLBillingsButton"> Submit</a>

                        <a href="{{url('agents/home')}}" class="btn_add_agent "> Cancel</a>
                      </div>
                    </div>



                  </div>

                </div>
                <div class="card card_address pl-3 pr-3" id="community_info_boxes">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Community Info</h5> 
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Slow Pay
                        <input type="checkbox" name="slowpay" id="slowpay" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Not Advancable
                        <input type="checkbox" name="notadvancable" id="notadvancable" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Do Not Place
                        <input type="checkbox" name="donotplace" id="donotplace" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Offline
                        <input type="checkbox" name="offline" id="offline" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> On Hold
                        <input type="checkbox" name="onhold" id="onhold" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Legal
                        <input type="checkbox" name="legal" id="legal" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-5 p-0">
                      <label class="home_check"> Guarantee Contract
                        <input type="checkbox" name="guaranteecontract" id="guaranteecontract" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Auto Pay
                        <input type="checkbox" name="autopay" id="autopay" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> No Contract
                        <input type="checkbox" name="nocontract" id="nocontract" value="0" disabled>
                        <span class="checkmark" ></span>
                      </label>
                    </div>
                    <div class="row no-gutters mr-3 mb-2">
                      <label>Property Notes</label>
                      <div class="col-md-12">
                        <textarea type="text" rows="5" class="form-control"></textarea>
                      </div>
                    </div>


                  </div>

                </div>
              </div>
            </div>
          </div>
		  </form>
          <div class="clearfix"></div>
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

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Instructions</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          If you are entering a real estate company the property name would be the real estate company name and the
          property address would be the address where we would send invoices or checks. If this is the case please
          select real estate company from the management company drop down list.
        </div>

        <!-- Modal footer -->


      </div>
    </div>
  </div>


 
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script>
    $('#datepicker1').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  <script>
    $('#datepicker2').datepicker({
      uiLibrary: 'bootstrap4'
    });
	
	$("#hLBillingsButton").click(function(){
			$( "#hlbillingsForm" ).submit();
		
	});
	$("#hLBillingsButton").on("mouseover",function(){
		var community=$("#community").val();
		if(community==''){
		alert('Please Select Community');
		}
		return;
	});
	
	$(document).click("fiftyfiftysplit",function(){
	$.each($("input[name='fiftyfiftysplit']:checked"), function(){
	if($(this).val()==0){
	$(this).val(1); 
	}else{
	$(this).val(0);	 
	}
	});
	});
	
	$(document).click("listingagent",function(){
	$.each($("input[name='listingagent']:checked"), function(){
	if($(this).val()==0){
	$(this).val(1); 
	}else{
	$(this).val(0);	 
	}
	});
	});
	$(document).click("leesingagent",function(){
	$.each($("input[name='leesingagent']:checked"), function(){
	if($(this).val()==0){
	$(this).val(1); 
	}else{
	$(this).val(0);	 
	}
	});
	});
$("#community").change(function(){
	var propertyId=$(this).val();
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	//alert(propertyId);
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	}); 

	$.ajax({

	type : 'POST',
	url: '{{url('get_property')}}',
	dataType : "JSON",
	data : {propertyId:propertyId},
	success: function(data){ 
		console.log(data);
		//return false;
	$('#community_info_boxes input:checkbox').removeAttr('checked');
	$("#propertyAdd").text(data['data']['propertyAd']);
	$("#propertyState").text(data['data']['statename']);
	$("#propertyCity").text(data['data']['cityname']);
	$("#propertZip").text(data['data']['zipcode']);
	//alert('success');
	   if(data['data']['propertyoffline']){
      $("#offline").prop("checked",true);
	  $("#offline").prop("disabled",false);
      $("#offline").val(data['data']['propertyoffline']);
    }
    if(data['data']['propertyonhold']){
      $("#onhold").prop("checked",true);
	  $("#onhold").prop("disabled",false);
      $("#onhold").val(data['data']['propertyonhold']);
    }
    if(data['data']['propertylegal']){
      $("#legal").prop("checked",true);
	  $("#legal").prop("disabled",false);
      $("#legal").val(data['data']['propertylegal']);
    }
    if(data['data']['PropertySlowpay']){
      $("#slowpay").prop("checked",true);
	  $("#slowpay").prop("disabled",false);
      $("#slowpay").val(data['data']['PropertySlowpay']);
    }
	if(data['data']['PropertDonotplace']){
      $("#donotplace").prop("checked",true);
	  $("#donotplace").prop("disabled",false);
      $("#donotplace").val(data['data']['PropertySlowpay']);
    }
    if(data['data']['ispayautopay']){
      $("#autopay").prop("checked",true);
	  $("#autopay").prop("disabled",false);
      $("#autopay").val(data['data']['ispayautopay']);
    }
    if(data['data']['PropertyNotadvancable']){
      $("#notadvancable").prop("checked",true);
	  $("#notadvancable").prop("disabled",false);
      $("#notadvancable").val(data['data']['PropertyNotadvancable']);
    }
    if(data['data']['propertyguaranteecontract']){
      $("#guaranteecontract").prop("checked",true);
	  $("#guaranteecontract").prop("disabled",false);
      $("#guaranteecontract").val(data['data']['propertyguaranteecontract']);
    }   
	if(data['data']['propertynocontract']){
      $("#nocontract").prop("checked",true);
      $("#nocontract").prop("disabled",false);
      $("#nocontract").val(data['data']['propertyguaranteecontract']);
    } 
	if(data['htmldata']!=''){
	$("#autopayData").show();
	$("#autopayData").html(data['htmldata']);
	}else{
	$("#autopayData").hide();	
	}
	}
	}); 

	});
  </script>

@endsection
