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
    <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">

            <div class="col-sm-12 text-right">

               <a href="{{ route('agents.billing') }}" class="btn_add_agent "> Billing</a>

            <a href="{{route('home')}}" class="btn_add_agent "> Phone List</a>
            
            <a href="{{route('agent.resource')}}" class="btn_add_agent btn_add_agent_active"> Resources</a>

              <a href="#" class="btn_add_agent"> Forms</a>

              <div class="clear20"></div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">
                  <div class="row">
                    <div class="col-auto">Apartment Billing move in for the month of</div>
                    <div class="col-12 col-md-auto p-0">
                    <form action="{{route('appartmentbilling.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
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


          <div class="ecommerce-widget">

            <div class="row">
              <div class="col-lg-7 col-12">
                <!-- Left Box End  -->
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">Curerently your count is # :  for the month of</h5>
                    
                      <div class="row">
                        <div class="col-md-10">
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center"> No :</label>
                              <div class="col-md-12">
                       

                                <input type="text" class="form-control" id="moveinno" name="moveinno" value="{{$apbillingId}}" disabled>
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
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
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
                              <label for="email" class="col-md-12 align-self-center">Agent Comm % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" name="" id="email" value="{{$commission}}" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">2ND Agent :</label>
                              <div class="col-md-12">
                                <select id="secongage" name="secongage"  class="form-control cust_frm_cntrl"  >
                           <option value="" name="secongage">select</option>
                                      @foreach($get_agents_data as $key=>$agents)
                                     <option value="{{$agents}}">{{$agents}}</option>
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
                                  <input type="checkbox" name="checkboxes[]" value="fiftyfiftysplit">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <label class="col-12"><strong>Apartment Move IN</strong></label>
                              
                              
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Rent :</label>
                              <div class="col-md-12">
                                <input type="text" name="rent"class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Lease Term :</label>
                              <div class="col-md-12">
                                <input type="text" name="leaseterm" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Commission % :</label>
                              <div class="col-md-12">
                                <input type="text" name="comission" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Flat Rate :</label>
                              <div class="col-md-12">
                                <input type="text" name="flatrate" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Bonus :</label>
                              <div class="col-md-12">
                                <input type="text" name="bonus" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Total Due to VKP :</label>
                              <div class="col-md-12">
                                <input type="text" name="totaldueto" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Due to 1st Agent :</label>
                              <div class="col-md-12">
                                <input type="text"  name="duetofirst"class="form-control" id="email" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Due to 2nd Agent </label>
                              <div class="col-md-12">
                                <input type="text" name="duetosec"class="form-control" id="email" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Verified By :</label>
                              <div class="col-md-12">
                                <input type="text" name="verifiedby" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Gift Card :</label>
                              <div class="col-md-12">
                                <input type="text" name="giftcard" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">PO # </label>
                              <div class="col-md-12">
                                <input type="text" name="pono"class="form-control" id="email">
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
                          <select name="property_id" class="form-control" id="community">
                          <option value="">Select</option>
                          @foreach($properties as $propty)
							<option value="{{$propty->id}}">{{$propty->propertyName}}</option>
							@endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                    <div class="clear10"></div>
                    <h4>MGMT Company :</h4>
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
                          <label> State :</label>
                        </div>
                        <div class="col-md-6">
                        <label id="propertyState"></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> City :</label>
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
                    
                
                    <div class="col-md-12 mb-2 mt-4">
                      <div class="row form-group p-0">
                        <div class="col-md-12">
                          <label class="home_check white_space_res"> <b>Click to Confirm That This is The Correct Billing Address</b>
                            <input type="checkbox" name="checkboxes[]" value="correct adress">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address" style="margin:0px;">
                      Tenant Information</h5> 
                  </div>
                  <div class="col-md-12 text-left mb-2">
                    <div class="row no-gutters mr-3">
                      <label for="email" class="col-md-12 align-self-center">Tenant Name :</label>
                      <div class="col-md-12">
                        <input type="text" name="tenantname" class="form-control" id="email">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Address :</label>
                        <div class="col-md-12">
                          <input type="text" name="tenantaddress" class="form-control" id="email">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Unit # :</label>
                        <div class="col-md-12">
                          <input type="text" name="tenantunit" class="form-control" id="email">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Country:</label>
                        <div class="col-md-12">
                          <select id="country" name="country"  class="form-control cust_frm_cntrl"  >
                           <option value="" name="country" selected="" disabled="">select</option>
                                      @foreach($country as $key=>$countries)
                                     <option value="{{$key}}">{{$countries}}</option>
                                     @endforeach
                            </select>

                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">State :</label>
                        <div class="col-md-12">
                          <select  class="form-control" id="state" name="state">
                            <option>Select</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">city :</label>
                        <div class="col-md-12">
                          <select id="city" name="city" class="form-control">
                            <option>Select</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">zip :</label>
                        <div class="col-md-12">
                          <select id="zipcode" name="zip"  class="form-control">
                            <option>Select</option>
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
                              <input type ="date" id="" class="form-control" name="leesestart" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Lease Term :	</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" name="leeseterms" id="email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="row form-group p-0">
                      <div class="col-md-12">
                        <label class="home_check white_space_res"> <b>Click to Confirm That This is Correct Address of Residence</b>
                          <input type="checkbox" name="checkboxes[]" value="confirmaddress">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="row form-group p-0">
                      <div class="col-md-12">
                        <label class="home_check"> <b>Change Tenant Address</b>
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
                        <textarea type="text" name="agentnotes" rows="5" class="form-control"></textarea>
                      </div>
                    </div>


                    <h5 class="text_address ">
                      Attachment :</h5>

                    <div class="row no-gutters mr-3">
                      <div class="col-md-12">
                        <input type="file" name="file" rows="5" class="form-control attached_file">
                      </div>
                      <div class="col-md-12 text-left mt-2">

                        <a href="#" class="btn_add_agent btn_add_agent_active"> Upload</a>
                      </div>
                    </div>
                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12 text-center mt-5">
                        <img src="images/logo.png" class="w-50 h-auto mx-auto" alt="">
                      </div>
                      <div class="col-sm-12 text-center pt-4">
                    <button type="submit" value="submit" name="submit" formaction="{{route('appartmentbilling.store')}}"class="btn_add_agent btn_add_agent_active">Submit </button>
                        

                        <a href="#" type="reset" class="btn_add_agent "> Cancel</a>
                      </div>
                    </div>
                     </form>


                  </div>

                </div>
                <div class="card card_address pl-3 pr-3"  id="community_info_boxes">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Community Info</h5> 
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Slow Pay
                        <input type="checkbox" id="slowpay" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Not Advancable
                        <input type="checkbox" " id="notadvancable" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Do Not Place
                        <input type="checkbox"  id="donotplace" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Off Line
                        <input type="checkbox"  id="offline" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> On Hold
                        <input type="checkbox" id="onhold" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Legal
                        <input type="checkbox" id="legal" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-5 p-0">
                      <label class="home_check"> Guarantee Contract
                        <input type="checkbox" id="guaranteecontract" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Auto Pay
                        <input type="checkbox" id="autopay" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> No Contract
                        <input type="checkbox" id="nocontract" value="0" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                     Last Contract Date :
                      <div class="clear10"></div>
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

<script>

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
	url: '{{ route('appartmentbilling.property') }}',
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
	// alert('success');
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
  <script>
    $('#datepicker1').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  <script>
    $('#datepicker2').datepicker({
      uiLibrary: 'bootstrap4'
    });
    
  </script>
  <script type="text/javascript">
   $('#country').change(function(){
    var countryID = $(this).val();    
 
 
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){     

            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
               
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
   $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $("#city").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
        $("#zipcode").empty();
    }
        
   });
   $('#city').on('change',function(){
    var cityID = $(this).val();    
    if(cityID){
        $.ajax({
           type:"GET",
           url:"{{url('get-zipcode-list')}}?city_id="+cityID,
           success:function(res){               
            if(res){
                $("#zipcode").empty();
                $.each(res,function(key,value){
                    $("#zipcode").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#zipcode").empty();
            }
           }
        });
    }else{
        $("#zipcode").empty();
    }
        
   });
</script>

@endsection