@extends('admin_layouts.layout')
@section('content')
@php
$userInfo               = Auth::user();
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
                    <div class="col-auto">Home Sale Billing</div>
                    <!-- <div class="col-12 col-md-auto p-0">
                      <select name="" class="form-control">
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
                        <option value="12">December</option>
                      </select>
                    </div> --> 
                  </div>

                </h2>
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
			<form action="{{ route('addHomeSaleBilling') }}" method="POST" id="hsbillingsForm">
				{{ csrf_field() }}
            <div class="row">
              <div class="col-lg-7 col-12">
                <!-- Left Box End  -->
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address "></h5>
                    
                      <div class="row">
                        <div class="col-md-10">
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="homesaleno" class="col-md-12 align-self-center">Home Sale # :</label>
                              <div class="col-md-12">
                                <input type="text" name="homesaleno" class="form-control" id="homesaleno" value="{{$homeSaleId}}" readonly>
                              </div> 
                            </div>
                          </div>
                          <!-- <div class="col-md-12 mb-2">
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
                          </div> -->
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                                <label> Agent :</label>
                              </div>
                              <div class="col-md-6">
                                <label>{{ucfirst($userInfo['UserName'])}}</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-3">
                            <div class="row no-gutters mr-3">
                              <label for="agentcomp" class="col-md-12 align-self-center">Agent Comm % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="agentcomp" name="agentcomp" value="{{$commission}}" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="secondage" class="col-md-12 align-self-center">2ND Agent :</label>
                              <div class="col-md-12">
                                <select name="secondage" class="form-control" id="secondage">
                                  <option  value="">Select</option>
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
                                  <input type="checkbox" name="percentagesplit" id="percentagesplit" value="0">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <label class="col-12">Primary Agent Is :</label>
                              <div class="col-md-6">
                                <label class="home_check"> Listing Agent
                                  <input type="checkbox" name="listingagent" id="listingagent" value="0">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                              <div class="col-md-6">
                                <label class="home_check"> Buyer Agent
                                  <input type="checkbox" name="leesingagent" id="leesingagent" value="0">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                            <div class="row no-gutters mr-3">
                              <label for="COM" class="col-md-12">Contract Date :</label> 
                                <div class="col-md-12">
                                  <input id="datepicker1" name="contractdate" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="sellingprice" class="col-md-12 align-self-center">Selling Price $ :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="sellingprice" name="sellingprice" >
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                            <div class="row no-gutters mr-3">
                              <label for="COM" class="col-md-12">Close of Escrow :</label>
                              
                                <div class="col-md-12">
                                  <input id="datepicker2" name="closedofesc" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="escrowno" class="col-md-12 align-self-center">Escrow # :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="escrowno" name="escrowno">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="titlecomp" class="col-md-12 align-self-center">Title Company :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="titlecomp" name="titlecomp">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="titlecompany2" class="col-md-12 align-self-center">Title Co PH # :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="titlecompany2" name="titlecompany2">
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="commper" class="col-md-12 align-self-center">Commision % </label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="commper" name="commper">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="totaldueto" class="col-md-12 align-self-center">total Due to VKP :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="totaldueto" name="totaldueto">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="duetofirst" class="col-md-12 align-self-center">Due to 1st Agent :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="duetofirst" name="duetofirst">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="duetosecond" class="col-md-12 align-self-center">Due to 2nd Agent :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="duetosecond" name="duetosecond">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="giftcard" class="col-md-12 align-self-center">Gift Card</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="giftcard" name="giftcard">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="pono" class="col-md-12 align-self-center">PO #</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="pono" name="pono">
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
                      Buyer Broker</h5> 

                      <div class="col-md-12 text-left mb-2">
                        <div class="row no-gutters mr-3">
                          <label for="cobrokeco" class="col-md-12 align-self-center">Co Broke Company :</label>
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="cobrokeco" name="cobrokeco">
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12 text-left mb-2">
                        <div class="row no-gutters mr-3">
                          <label for="buyerbroke" class="col-md-12 align-self-center">Buyer Broker % :</label>
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="buyerbroke" name="buyerbroke" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 text-left mb-2">
                        <div class="row no-gutters mr-3">
                          <label for="agentname" class="col-md-12 align-self-center">Agent :</label>
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="agentname" name="agentname">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 text-left mb-2">
                        <div class="row no-gutters mr-3">
                          <label for="referalamount" class="col-md-12 align-self-center">Referral Amount :</label>
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="referalamount" name="referalamount" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 text-left mb-2">
                        <div class="row no-gutters mr-3">
                          <label for="companyname" class="col-md-12 align-self-center">Re Company :</label>
                          <div class="col-md-12">
                            <select name="companyname" class="form-control" id="companyname">
                             @foreach($company_managment as $company)
						  <option value="{{$company->id}}">{{$company->mgt_company}}</option>
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
                            <label id="company_address">33765 N Scottsdale Rd</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <div class="row form-group p-0">
                          <div class="col-md-6">
                            <label> State :</label>
                          </div>
                          <div class="col-md-6">
                            <label id="company_state">Arizona</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <div class="row form-group p-0">
                          <div class="col-md-6">
                            <label> City :</label>
                          </div>
                          <div class="col-md-6">
                            <label id="company_city">Scottsdale</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <div class="row form-group p-0">
                          <div class="col-md-6">
                            <label> Zip :</label>
                          </div>
                          <div class="col-md-6">
                            <label id="company_zip">85266</label>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                </div>


                <div class="card card_address pl-3 pr-3">
                    <div class="card-body">
                      <h5 class="text_address ">    </h5> 
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="buyername" class="col-md-12 align-self-center">Buyer :</label>
                            <div class="col-md-12">
                              <input type="text" class="form-control" id="buyername" name="buyername">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="buyerphone" class="col-md-12 align-self-center">Buyer PH # :</label>
                            <div class="col-md-12">
                              <input type="text" class="form-control" id="buyerphone" name="buyerphone">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="sellername" class="col-md-12 align-self-center">Seller :</label>
                            <div class="col-md-12">
                              <input type="text" class="form-control" id="sellername" name="sellername">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="sellerphone" class="col-md-12 align-self-center">Seller PH # :</label>
                            <div class="col-md-12">
                              <input type="text" class="form-control" id="sellerphone" name="sellerphone">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="propertyad" class="col-md-12 align-self-center">Property Address :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="propertyad" name="propertyad">
                              </div>
                            </div>
                          </div> 
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="propertystate" class="col-md-12 align-self-center">State :</label>
                            <div class="col-md-12">
                              <select name="propertystate" class="form-control">
                                 @foreach($state as $stt)
							  <option value="{{$stt->id}}">{{$stt->statename}}</option>
							  @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="propertycity" class="col-md-12 align-self-center">City :</label>
                            <div class="col-md-12">
                              <select name="propertycity" class="form-control">
                                @foreach($city as $cty)
							  <option value="{{$cty->id}}">{{$cty->cityname}}</option>
							  @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-left mb-2">
                          <div class="row no-gutters mr-3">
                            <label for="propertyzip" class="col-md-12 align-self-center">Zip :</label>
                            <div class="col-md-12">
                              <select name="propertyzip" class="form-control">
                                 @foreach($zipCode as $zip)
							  <option value="{{$zip->id}}">{{$zip->zipcode}}</option>
							  @endforeach
                              </select>
                            </div>
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
                        <textarea type="text" rows="5" class="form-control" name="agentnotes"></textarea>
                      </div>
                    </div>


                    <h5 class="text_address ">
                      Attachment :</h5>

                    <div class="row no-gutters mr-3">
					
					
					  <div class="col-md-12">
                        <input type="file" rows="5" class="form-control attached_file" name="agent_image" id="agent_image">
						<div id="requiredError" style="display:none;"><p style="color:red">Please select image</p></div>
                      </div>
                      <div class="col-md-12 text-left mt-2">

                        <!--<button type="button" class="btn_add_agent btn_add_agent_active" id="uploadImgHsb"> Upload</button>-->
                      </div>
					 
                    </div>
                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12 text-center mt-5">
                        <img src="images/logo.gif" class="w-50 h-auto mx-auto" alt="">
                      </div>
                      <div class="col-sm-12 text-center pt-4">

                       <!-- <button  class="btn_add_agent btn_add_agent_active" type="submit" id="hsbill_sumit">Submit</button>-->
                        <a href="javascript:void(0)"  class="btn_add_agent "  id="hsbill_sumit">Submit</a>

                        <a href="{{url('agents/home')}}" class="btn_add_agent "> Cancel</a>
                      </div>
                    </div>



                  </div>

                </div>
              </div>
            </div>
			 </form>
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
    // $('#datepicker1').datepicker({
      // uiLibrary: 'bootstrap4'
    // });
	//showDate($("#datepicker1").datepicker('getDate'));
  </script>
  <script>
    // $('#datepicker2').datepicker({
      // uiLibrary: 'bootstrap4'
    // });
	//alert('here');
	$(document).click("percentagesplit",function(){
	$.each($("input[name='percentagesplit']:checked"), function(){
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
	
	$("#hsbill_sumit").click(function(){
		
		
		// var sellingprice=$("#sellingprice").val();
		// var buyerbroke=$("#buyerbroke").val();
		// var referalamount=$("#referalamount").val();
		// if(sellingprice !='' && buyerbroke !='' && referalamount !=''){
			//alert('submit');
			//$(this).submit();
			$( "#hsbillingsForm" ).submit();
		//}
		
	});
	
	$("#uploadImgHsb").click(function(){
		//alert('out');
		var agentImg=$("#agent_image").val();
		if(agentImg==''){
		$("#requiredError").show();
		setTimeout(function(){ $("#requiredError").hide(); }, 2000);
		return false;
		}
		 
	});
	$("#companyname").change(function(){
	var company_id=$(this).val();
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	//alert(propertyId);
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});

	$.ajax({

	type : 'POST',
	url: '{{url('get_company_details')}}',
	dataType : "JSON",
	data : {company_id:company_id},
	success: function(data){ 
   // console.log(data);
	$("#company_address").text(data['data']['mgt_company']);
	$("#company_state").text(data['data']['state_list']['statename']);
	$("#company_city").text(data['data']['city_list']['cityname']);
	$("#company_zip").text(data['data']['zipcode_list']['zipcode']);
	}
	
	}); 

	});
  </script>


@endsection