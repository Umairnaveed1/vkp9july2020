@extends('admin_layouts.layout')
@section('content')
<style>
.text_address{
	text-transform:none !important;
}
.btn_add_agent{
	text-transform:none !important;
} 
</style>
@php
$userInfo               = Auth::user();
$loggedAgent               = \App\Models\Agents\Agent::find($userInfo->id);
@endphp
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
                    <div class="col-auto">Auto Pay / Home Lease Holding Fee</div>
                    
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
				@if(Session::has('billingMsg'))
				<div class="alert alert-success"  style="font-size: 17px;margin:10px;">        
				<strong>Success! </strong>{{Session::get('billingMsg')}}
				</div>
				<?php session()->forget('billingMsg'); ?> 
				@endif
                    <form action="{{ route('agents/billing/store_AutoHomeHoldFee') }}" method="post" enctype="multipart/form-data" id="autoPay_homeLeaseHold">
                      @csrf
					  <input type="hidden" name="agent_id" value="{{$loggedAgent->id}}">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                           <div class="col-md-12">
                          <label for="COM">Date :   </label>
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker3" name="hldate" value="{{old('hldate')}}" />
                            </div>
                          </div>
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
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              
                              <div class="col-md-8">
                                <label class="home_check">
                                  <input type="checkbox" id="adminprop" name="adminprop" value="0">
                                  <span class="checkmark" ></span>
                                  Continue Add for the Community Agent :
                                </label>
                              </div>
                            </div>
                          </div>
						 
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                                <label> Apartment Community :</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                              
                                    
                                    <select name="property_id" data-table="tbl_soldship" class="form-control" id="community_fee" >
                                      <option value="">Select</option>
                                      @foreach ($properties as $property)
                                          <option  value="{{ $property->id }}">{{ $property->propertyName }}</option>
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
                          <label> Unit # :  </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="unitno" name="unitno" value="{{old('unitno')}}" style="width:35%">
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> State :   </label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertyState"></label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> City :    </label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertyCity"></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> Zip:  </label>
                        </div>
                        <div class="col-md-6">
                          <label id="propertZip"></label>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                          <div class="col-md-12 text-left mb-2">
                      
                       
                              <div class="col-md-12 p-0">
                          <label for="COM">Move in Scheduled For :</label>
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker4" id="hlmoveins" name="hlmoveins" value="{{old('hlmoveins')}}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 p-0">
                          <label for="COM">Holding Fee :        </label>
                          <div class="clear5"></div>
                          <div class="form-group row">
                          
                          <div class="col-sm-4">
                            $ <input type="text" class="form-control" id="holdingfee" name="holdingfee" value="{{old('holdingfee')}}">
                            </div>
                            <div class="col-sm-4">
                            M/O # :  <input type="text" class="form-control" id="mcno" name="mcno" value="{{old('mcno')}}">
                            </div>
                          </div>
                        </div>
                          
                          </div>

                          
                          
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Date Fee RCVD :</label>
                              <div class="form-group ">
                            <div class="">
                              <input id="datepicker5" name="datefeerec" value="{{old('datefeerec')}}" id="datefeerec"/>
                            </div>
                          </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Amount Due :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="amountdue" name="amountdue" value="{{old('amountdue')}}">
                              </div>
                            </div>
                          </div>
                          
                          
                          
                          
                          
                          
                          
                          
                          

                        </div>



                      </div>

                    
                  </div>
                </div>

                


                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address m-0">  Customer Information</h5> 
                   

                  </div>
                  
                    <div class="col-sm-12">
                    <div class="row">
                  <div class="col-md-6 text-left mb-2">
                    <div class="row no-gutters mr-3">
                      <label for="email" class="col-md-12 align-self-center">First Name :</label>
                      <div class="col-md-12">
                        <input type="text" class="form-control" id="customerf" name="customerf" value="{{old('customerf')}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 text-left mb-2">
                    <div class="row no-gutters mr-3">
                      <label for="email" class="col-md-12 align-self-center">Last Name :</label>
                      <div class="col-md-12">
                        <input type="text" class="form-control" id="customerl" name="customerl" value="{{old('customerl')}}">
                      </div>
                    </div>
                  </div>
                  </div></div>
                  
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Current Address :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="customera" name="customera" value="{{old('customera')}}">
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">State :</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="customerstate" name="customerstate" value="{{old('customercity')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">City :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="customercity" name="customercity" value="{{old('customercity')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Zip :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="customerzip" name="customerzip" value="{{old('customerzip')}}">
                        </div>
                      </div>
                    </div>
                  </div>
<div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Home :</label>
                        <div class="col-md-12">
                           <input type="text" class="form-control" id="customerh" name="customerh" value="{{old('customerh')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Cell#    </label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="customerc" name="customerc" value="{{old('customerc')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">Alt :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="customeral" name="customeral" value="{{old('customeral')}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clear20"></div>
                  
                </div>

              </div>
              <div class="col-lg-5 col-12">
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                  
                  <div class="row no-gutters mr-3">
                      
                      {{-- <div class="col-sm-12 text-center pt-4">

                        <a href="#" class="btn_add_agent btn_add_agent_active"> Submit</a>

                        <a href="#" class="btn_add_agent "> Cancel</a>
                        
                        
                      </div> --}}
                      <div class="col-md-12 text-center mt-3">
                       WHEN RECIEPT OF THE HOLDING FEE HAS BEEN VERIFIED YOU WILL RECIEVE CONFIRMATION WITH A REFERENCE # TO INCLUDE IN THE BILLING.
                      </div>
                      
                      
                    </div>
                  
                  <div class="clear40"></div>
                  
                    <h5 class="text_address ">
                      Agent Notes :</h5>

                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12">
                        <textarea type="text" rows="5" class="form-control" name="agentnotes" id="agentnotes" value="{{old('agentnotes')}}"> </textarea>
                      </div>
                    </div>


                    <h5 class="text_address ">
                      Attachment :</h5>

                    <div class="row no-gutters mr-3">
                      <div class="col-md-12">
                        <input type="file" rows="5" class="form-control attached_file" name="attachment_file">
                      </div>
                      {{-- <div class="col-md-12 text-left mt-2">

                        <a href="#" class="btn_add_agent btn_add_agent_active"> Upload</a>
                      </div> --}}
                    </div>
                     <div class="row no-gutters mr-3">
                      
                      <div class="col-sm-12 text-center pt-4">

                        <a href="javascript:void(0)" class="btn_add_agent " id="hlfees_submit" > Submit</a>

                        <a href="{{url('agents/home')}}" class="btn_add_agent "> Cancel</a>
                        
                        
                      </div>
                    
                    </div>
                    </form>



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


  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- jQuery library -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="js/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
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
        $('#datepicker3').datepicker({
      uiLibrary: 'bootstrap4'
    });
            $('#datepicker4').datepicker({
      uiLibrary: 'bootstrap4'
    });
                $('#datepicker5').datepicker({
      uiLibrary: 'bootstrap4'
    });

    $("select[name='change_property']").change(function(){
        var propertyID = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('agents.billing.getPropertyData') ?>",
            method: 'POST',
            data: {propertyID:propertyID, _token:token},
            success: function(response) {
                console.log("id " + response.id);
            }
        });
    });
    $("#hlfees_submit").on("mouseover",function(){
		
	var community=$("#community_fee").val();
	if(community==''){
		alert('Please select community');
		return;
	}
	});
	$("#hlfees_submit").on("click",function(){
	$("#autoPay_homeLeaseHold").submit();
	});
	$(document).click("adminprop",function(){
	$.each($("input[name='adminprop']:checked"), function(){
	if($(this).val()==0){
	$(this).val(1); 
	}else{
	$(this).val(0);	 
	}
	});
	});			
  </script>

 

  <style>
  .bill_main_w
  {
	  width:180px;
	  margin:auto;
  }
  
  </style> 
<script> 
$(document).on("change","#community_fee",function()
{	
var propertyId=$(this).val();	
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');	
$.ajax({	type : 'POST',	
url: '{{url('get_property')}}',	
dataType :"JSON",	data : {propertyId:propertyId,_token:CSRF_TOKEN},
	success: function(data){ 
	// console.log(data);
	// alert(data['data']['propertyAd']);
	$("#propertyAdd").text(data['data']['propertyAd']);
	$("#propertyState").text(data['data']['statename']);
	$("#propertyCity").text(data['data']['cityname']);
	$("#propertZip").text(data['data']['zipcode']);	
}	
});		
});
</script>
@endsection