@extends('admin_layouts.layout')
@section('content')

    <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">Property Main Screen </h2>
              </div>
            </div>
          </div>
            <!-- @if ($errors->any())
                                        <div class="alert alert-danger ">
                                            <ul>
                                                @foreach ($errors->all() as $error)

                                                    <li>{{ ($error)}}</li>
                                                @endforeach
                                            </ul>
                                        </div> 
                                    @endif
                          @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif -->
          <div class="ecommerce-widget">

            

               <div class="row">
              <div class="col-md-12 col-12">
              
                 
               <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                       <div class="add_property_w1"> 
                  <div class="row">
             
                   <div class="col-md-6 col-12">
               
                    <form action="{{url('/propertymanage/update')}}/{{$get_property->id}}" method="POST">
                      <div class="row">
                        
                       {{csrf_field()}}
    {{ method_field('PATCH') }}
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="COM">Property Name :  </label>
                            <input type="text" class="form-control" name="propertyName" value="{{$get_property->propertyName}}" >
                          </div>
                        </div>
                         <div class="col-md-12">
                          <div class="form-group">
                            <label for="Address1">Property Address :  </label>
                            <input type="text" class="form-control" id="Address1" name="propertyAd" value="{{$get_property->propertyAd}}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="Address2">Country : </label>
                            <input type="hidden" name="company_get_id" value="{{ $get_property['id'] }}">
    <select name="country_name" id="country_name" class="form-control country_name @error('country_name') is-invalid @enderror" required="required">
    	<option value="">----------Select-----------</option>
      @if(isset($get_property['country_list']['countryname'])) 
      <option value="{{ $get_property['country_list']['id'] }}" selected="">{{ $get_property['country_list']['countryname'] }}</option>
       @endif
    	@foreach($country as $list)
                		<option value="{{ $list['id'] }}">{{ $list['countryname'] }}</option>
		@endforeach
		

	</select>
                          </div>
                        </div>
                         <div class="col-md-12">
                          <div class="form-group">
                            <label for="Country">State :  </label>
                            <select class="form-control state_name" name="state_name" required="required">
                	<option value="">----------Select-----------</option>
                   @if(isset($get_property['state_list']['statename'])) 
      <option value="{{ $get_property['state_list']['id'] }}" selected="">{{ $get_property['state_list']['statename'] }}</option>
       @endif

	</select>
                          </div>
                        </div>
                         <div class="col-md-12">
                          <div class="form-group">
                            <label for="State">City :   </label>
                            <select name="city_id" id="city_id" class="form-control city_id @error('city_id') is-invalid @enderror" required="required">
    	<option value="">----------Select-----------</option>
       @if(isset($get_property['city_list']['cityname'])) 
      <option value="{{ $get_property['city_list']['id'] }}" selected="">{{ $get_property['city_list']['cityname'] }}</option>
       @endif
		</select>
                          </div>
                        </div>
                     
                       <div class="col-md-12">
                          <div class="form-group">
                            <label for="Zip">Zip Code :</label>
                            <select name="zipcode_id" id="zip_id" class="form-control zip_id @error('zip_id') is-invalid @enderror">
    	<option value="">----------Select-----------</option>
      @if(isset($get_property['zipcode_list']['zipcode'])) 
      <option value="{{ $get_property['zipcode_list']['id'] }}" selected="">{{ $get_property['zipcode_list']['zipcode'] }}</option>
       @endif

	</select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="phone">Phone # :  </label>
                            <input type="text" class="form-control" id="phone" name="propertyphone" value="{{$get_property->propertyphone}}">
                          </div>
                        </div> 
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="phone">Alt # :      </label>
                            <input type="text" class="form-control" id="phone" name="propertyAltNo" value="{{$get_property->propertyAltNo}}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="phone">FAX # :    </label>
                            <input type="text" class="form-control" name="propertyFax" value="{{$get_property->propertyFax}}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="phone">Email :    </label>
                            <input type="text" class="form-control" id="phone" name="email" value="{{$get_property->propertyEmail}}">
                          </div>
                        </div>
                       <div class="col-md-12">
                          <div class="form-group">
                            <label for="email">State Abbrevation</label>
                            <input type="text" class="form-control" id="email" name="abbrevation" value="{{$get_property->abbrevation}}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Main Billing Address
                              <input type="checkbox" name="invoices[]" value="Main Billing Address">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Inactive
                              <input type="checkbox" name="invoices[]" value="Inactive">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check">Alternative Billing Address
                              <input type="checkbox" name="invoices[]" value="Alternative Billing Address">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check">Email Invoice        Required:
                              <input type="checkbox" name="invoices[]" value="Email Invoice">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                        
 
                  </div> 
                  
                  <div class="col-md-6 col-12">
               
                    
                      <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check">Main Billing Address
                              <input type="checkbox" name="invoices[]" value="Main Billing Address">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="sel1">MGT Company : </label>
                            <select class="form-control cust_frm_cntrl" name="mgt"  id="sel1">
                             <option>{{$get_property->MgmtCompID}}</option>
                           @foreach($company_managment as $key=>$company)
    <option value="{{$key}}">{{$company}}</option>
   @endforeach
                            </select>
                          </div>
                        </div>
                        
                        
                        

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check">Real Estate Company
                              <input type="checkbox" name="invoices[]" value="Real Estate Company">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        
                        








                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Do Not Place
                              <input type="checkbox" name="invoices[]" value="Do Not Place">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Off Line
                              <input type="checkbox" name="invoices[]" value="Off Line">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> On Hold
                              <input type="checkbox" name="invoices[]" value="On Hold">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Legal
                              <input type="checkbox" name="invoices[]" value="Legal">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Slow Pay
                              <input type="checkbox" name="invoices[]" value="Slow Pay">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> 
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Not Advancable
                              <input type="checkbox" name="invoices[]" value="Not Advancable">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Guarantee Contract
                              <input type="checkbox" name="invoices[]" value="Guarantee Contract">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Auto Pay
                              <input type="checkbox" name="invoices[]" value="Auto Pay">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> No Contract
                              <input type="checkbox" name="invoices[]" value="No Contract">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check">Super Auto Pay
                              <input type="checkbox" name="invoices[]" value="Super Auto Pay">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        
                        
                      </div> 
                      
                   
                  </div> 
                    </div>
                    <div class="clear20"></div>
                    <div class="col-md-6 p-0">
                          <label for="COM">Last Contract Date : </label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker1" name="lastdatepic"  value="{{$get_property->lastcontract}}" />
                            </div>
                        </div> 
                        </div>
                        <div class="clear20"></div>
                                  <!-- <button type="submit" class="btn btn-primary form_box_cust_btn">Edit</button> -->
                                            <button type="submit" class="btn btn-primary form_box_cust_btn">Save</button>
                                                      <button type="reset" class="btn btn-primary form_box_cust_btn">Cancel</button>
 </form>
                </div>
               </div>
                     
                
                

                 
                 
                 </div> 
              </div> 
               
                </div>
            <div class="clearfix"></div> 
            <div class="row">
                          <div class="col-sm-12 ">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General</a>
                          
                          <a href="#" class="btn_general_h"> Notes</a>
                           <a href="#" class="btn_general_h"> Productivity</a>
                           <a href="#" class="btn_general_h"> Transactions</a>
                           <a href="#" class="btn_general_h"> Expense</a>
                           <a href="#" class="btn_general_h"> Misc. Income</a>
                           <a href="#" class="btn_general_h"> Sever</a>
                          
                           <div class="clear20"></div> 
                          </div> 
                           
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
	$('.country_name').on('change', function(){
		$('.state_name').html('');
		var country_name = $('.country_name').val();
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		  $.ajax({
		    type:"POST",
		    url: "{{ url('property/get-state-list') }}",
		    data: {country_name:country_name},
		    success: function(data){
		    	$('.state_name').append('<option value="">----------Select-----------</option>');
		      $.each(data, function(i,v){
		      	$('.state_name').append('<option value="'+v['id']+'">'+v['statename']+'</option>')
		      });
		    }
		  });
	});
	$(document).on('change', '.state_name', function(){
		$('.city_id').html('');
		var state_name = $('.state_name').val();
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		  $.ajax({
		    type:"POST",
		    url: "{{ url('property/get-city-list') }}",
		    data: {state_name:state_name},
		    success: function(data){
		    	$('.city_id').append('<option value="">----------Select-----------</option>');
		      $.each(data, function(i,v){
		      	$('.city_id').append('<option value="'+v['id']+'">'+v['cityname']+'</option>')
		      });
		    }
		  });
	});

		$(document).on('change', '.city_id', function(){
		$('.zip_id').html('');
		var city_id = $('.city_id').val();
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		  $.ajax({
		    type:"POST",
		    url: "{{ url('property/get-zipcode-list') }}",
		    data: {city_id:city_id},
		    success: function(data){
		    	$('.zip_id').append('<option value="">----------Select-----------</option>');
		      $.each(data, function(i,v){
		      	$('.zip_id').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>')
		      });
		    }
		  });
	});

$('.btn_add_agent_2').on('click', function(){
$('#save_manag').click();
});		
</script>
<!-- <script type="text/javascript">
   $('#country').change(function(){
    var countryID = $(this).val();    
 
 
    if(countryID){
        $.ajax({
           type:" POST",
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
           type:"POST",
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
           type:"post",
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
</script> -->


@endsection