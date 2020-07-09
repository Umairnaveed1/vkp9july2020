@extends('admin_layouts.layout')
@section('content')
    <style>
        .uper {
            margin-top: 0.5%;
        }
    </style>
    <div class="card uper">
        {{--  <div class="card-header">--}}
        {{--  --}}
        {{--  </div>--}}
    </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    @if ($errors->any())
                          <div id="errormessage" class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)

                                                    <li>{{ ($error)}}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif

                                     
                                    @if(session()->get('success'))
                                        <div id="successmessage" class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div><br />
                                    @endif
                <div class="page-header">
                    <h2 class="pageheader-title"> Country State City Zip Manage </h2>
                              
                                
                            </div>
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                          <div class="row">
        <div class=" col-12">
            <!-- Left Box Start -->
            <div id="message"></div>
                <div class="card card_address pl-3 pr-3 ">
                  <h5 class="label_rule_heading2 ">Add Country</h5>
                    <div class="card-body country_cty_zip_w">
                     
                          
                            <div class="form-group">
                              <label for="email">Country</label>
                              <input type="text" class="form-control" id="countryname"  name="countryname">
                            </div>
                            <div class="form-group">
                                <label for="email">Country Short Name</label>
                                <input type="text" class="form-control" id="countrysh" name="countrysh">
                              </div>
                              <div class=" text-right">
                                <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn submit_country_form btn_add_country">Add Country</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card_address pl-3 pr-3">
                      <h5 class="label_rule_heading2 ">Remove Country</h5>
                      <div class="card-body country_cty_zip_w">
                                            
                   
                         
                           
                              <div class="form-group append_country_data">
                                  <label for="sel1">Country</label>
              
                                  
                
                <input type="hidden" name="edit_user_id" class="edit_user_id">

                <select class="form-control cust_frm_cntrl all_country_id"  id="sel1">
                  <option value="">-------Select--------</option>
                @foreach($country as $form_list)

        <option name="countryname" class="countryname form_country  edit_country" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                              </div>
                             
                           
                           
                            
                                <div class=" text-right">
                                <a href="javascript:void(0);" type="" class="btn btn-primary form_box_cust_btn delete delete_country_form"   title="delete" 
                                data-toggle="tooltip" data-attr-id="{{ $form_list->id }}">

                                <span data-attr-id="{{ $form_list->id }}">Remove Country</span>
                                </a> 

                               
                              </div>
    
                              
                             
                          </div>
                      </div>
                    <!-- Left Box End  -->
                    <div id="message_state"></div>
                    <div class="card card_address pl-3 pr-3">
                      <h5 class="label_rule_heading2">Add State</h5>
                        <div class="card-body country_cty_zip_w">

                                <div class="form-group">
                               
                                
                                 
                                    <label for="sel1">Country</label>
                                    <select class="form-control cust_frm_cntrl all_country_id"  id="sel1">
                                      <option value="">-------Select--------</option>
                @foreach($country as $form_list)

        <option name="country_state" class="countryname form_country country_state" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                  <label for="email">State Name</label>
                                  <input type="text" class="form-control" id="statename"  name="statename">
                                </div>
                                <div class="form-group">
                                    <label for="email">State Abbrevation</label>
                                    <input type="text" class="form-control" id="stateabbr" name="stateabbr">
                                  </div>
                                  <div class=" text-right">
                                    <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn btn_add_state">Add State</a>
                                </div>
                            </div>
                        </div>
<div id="message_state_remove"></div>
                        <div class="card card_address pl-3 pr-3">
                          <h5 class="label_rule_heading2 ">Remove State</h5>
                          <div class="card-body country_cty_zip_w">
 
                                  <div class="form-group">
                                      <label for="sel1">Country</label>
                                                      <select class="form-control cust_frm_cntrl remove_state_country_id"  id="sel1">
                                                        <option value="">-------Select--------</option>
                @foreach($country as $form_list)

        <option name="countryname" class="countryname form_country  edit_country" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="sel1">State</label>   
                             <select class="form-control cust_frm_cntrl" 
                             name="statename" id="remove_state_id">
                                        <option value="">
                                         ------Select-------
                                        </option>
                                     
                                      </select>
                                  </div>
                                  
                                    
                                    <div class="text-right">
                                      <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn btn_remove_state">Remove State</a>
                                  </div>
                                
                             
                                <div class="cust_tbl_search text-right pb-2">
                                      <label for="email">Search State :  </label>
                                      <input type="text" class="form-control ml-2" id="search_state">
                                      <div class="">
                                          <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn ml-1 btn_search_state">Search</a>
                                      </div>
                                  </div>
                                <table class="table table-striped mt-4">
                                  <thead class="border-0">
                                    <tr>
                                      <th>State Name</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody class="append_state_search">
                                    @foreach($get_state_data as $state_list)
                                    <tr>
                                      <td>{{ $state_list['statename'] }}</td>
                                      <td><a href="javascript:void(0);" class="state_search_del" data-attr-id="{{ $state_list['id'] }}"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                    @endforeach

                                  </tbody>
                                </table>
                                <div class="clearfix" style="margin-bottom: 20px"></div>
{{ $get_state_data->render() }}
                                
                              </div>
                          </div>

<div id="message_city"></div>
                        <div class="card card_address pl-3 pr-3">
                          <h5 class="label_rule_heading2">Add City</h5>
                            <div class="card-body country_cty_zip_w">
 
                                    <div class="form-group">
                                        <label for="sel1">Country</label>
                                        <select class="form-control cust_frm_cntrl add_city_country_id"  id="sel1">
                                          <option value="">------Select-------</option>
                @foreach($country as $form_list)

        <option name="countryname" class="countryname form_country  edit_country" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">State</label>
                                        <select class="form-control cust_frm_cntrl add_city_state_id" id="sel1">
                                          <option value="">------Select-------</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">City</label>
                                        <input type="text" class="form-control" id="add_city_name" name="email">
                                      </div>
                                      <div class=" text-right">
                                        <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn btn_save_city">Add City</a>
                                    </div>
                                </div>
                            </div>

<div id="message_city_reomve"></div>
                            <div class="card card_address pl-3 pr-3">
                              <h5 class="label_rule_heading2">Remove city</h5>
                              <div class="card-body country_cty_zip_w">

                                  <div class="">
                                      <div class="form-group">
                                          <label for="sel1">Country</label>
                                          <select class="form-control cust_frm_cntrl remove_city_country_id"  id="sel1">
                                            <option value="">------Select-------</option>
                @foreach($country as $form_list)

        <option name="countryname" class="countryname form_country  edit_country" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="sel1">State</label>
                                          <select class="form-control cust_frm_cntrl rmv_city_state_id" id="sel1">
                                            <option value="">------Select-------</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="sel1">City</label>
                                          <select class="form-control cust_frm_cntrl rmv_city_id" id="sel1">
                                            <option value="">------Select-------</option>
                                          </select>
                                      </div>
  
                                        <div class="text-right">
                                          <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn btn_remove_city">Remove City</a>
                                      </div>
                                  </div>
                                    <div class="cust_tbl_search text-right pb-2">
                                          <label for="email">Search City :  </label>
                                          <input type="text" class="form-control ml-2"  id="search_city">
                                          <div class="">
                                              <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn ml-1 btn_search_city">Search</a>
                                          </div>
                                      </div>
                                    <table class="table table-striped mt-4">
                                      <thead class="border-0">
                                        <tr>
                                          <th>City Name</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="append_city_search">
                                        @foreach($get_city_data as $city_list)
                                    <tr>
                                      <td>{{ $city_list['cityname'] }}</td>
                                      <td><a href="javascript:void(0);" class="city_search_id" data-attr-id="{{ $city_list['id'] }}"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                    @endforeach
                                      </tbody>
                                    </table>
                                    <div class="clearfix" style="margin-bottom: 20px"></div>
                                    {{ $get_city_data->render() }}
                                  </div>
                              </div>

<div id="message_zipcode"></div>
                            <div class="card card_address pl-3 pr-3">
                              <h5 class="label_rule_heading2 ">Add Zip Code</h5>
                                <div class="card-body country_cty_zip_w">
                                        <div class="form-group">
                                            <label for="sel1">Country</label>
                                            <select class="form-control cust_frm_cntrl zipcode_country_id"  id="sel1">
                                              <option value="">-------Select--------</option>
                @foreach($country as $form_list)

        <option name="countryname" class="countryname form_country  edit_country" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">State</label>
                                            <select class="form-control cust_frm_cntrl zipcode_state_id" id="sel1">
                                              <option value="">-------Select--------</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">City</label>
                                            <select class="form-control cust_frm_cntrl zipcode_city_id" id="sel1">
                                              <option value="">------Select-------</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Zip Code</label>
                                            <input type="number" class="form-control zipcode_name" id="text" name="email">
                                          </div>
                                          <div class="text-right">
                                            <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn btn_zipcode">Add Zip</a>
                                        </div>
                                      </div>
                                      </div>


<div id="message_zipcode_remove"></div>
                            <div class="card card_address pl-3 pr-3">
                                <div class="card-body country_cty_zip_w">
                                    <h5 class="label_rule_heading2 ">Remove Zip Code</h5>
                                        <div class="form-group">
                                            <label for="sel1">Country</label>
                                            <select class="form-control cust_frm_cntrl rmv_zipcode_country_id"  id="sel1">
                                              <option selected="">------Select-----</option>
                @foreach($country as $form_list)

        <option name="countryname" class="countryname form_country  edit_country" data-attr-id="{{ $form_list->id }}" value="{{ $form_list->id }}">{{ $form_list->countryname }}</option>
                                    @endforeach
                                  </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">State</label>
                                            <select class="form-control cust_frm_cntrl rmv_zipcode_state_id" id="sel1">
                                              <option selected="">------Select-----</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">City</label>
                                            <select class="form-control cust_frm_cntrl rmv_zipcode_city_id" id="sel1">
                                              <option selected="">------Select-----</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Zip Code</label>
                                             <select class="form-control cust_frm_cntrl rmv_zipcode_zipcode_id" id="sel1">
                                              <option selected="">------Select-----</option>
                                            </select>
                                          </div>
                                          <div class="text-right">
                                            <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn btn_remove_zipcode">Remove Zip</a>
                                        </div>
                                      <div class="cust_tbl_search text-right pb-2">
                                            <label for="email">Zip Code :  </label>
                                            <input type="text" class="form-control ml-2"  id="search_zipcode">
                                            <div class="">
                                                <a href="javascript:void(0);" class="btn btn-primary form_box_cust_btn ml-1 btn_search_zipcode">Search</a>
                                            </div>
                                        </div>
                                      <table class="table table-striped mt-4">
                                        <thead class="border-0">
                                          <tr>
                                            <th>ZipCode</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody class="append_zipcode_search">
                                          @foreach($get_zipcode_data as $zipcode_list)
                                    <tr>
                                      <td>{{ $zipcode_list['zipcode'] }}</td>
                                      <td><a href="javascript:void(0);" class="zipcode_search_id" data-attr-id="{{ $zipcode_list['id'] }}"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                    @endforeach
                                        </tbody>
                                      </table>
                                      <div class="clearfix" style="margin-bottom: 20px"></div>
                                    {{ $get_zipcode_data->render() }}
                                    </div>
                                </div>




                    </div>




    </div>
                          
                          
                          
                          
                          <div class="clearfix"></div>
                          
                       
                          
                          
                          
                          
                          
                          
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
        <script type="text/javascript">
  setTimeout(function() {
    $('#successmessage').delay(5000).slideUp(300);
}, 3000); 

setTimeout(function() {
    $('#errormessage').delay(5000).slideUp(300)
}, 3000);


$(document).ready(function(){
$(document).on('click', '.btn_add_country', function(event){
 var countryname = $('#countryname').val();
 var countrysh = $('#countrysh').val();
   $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('country/save') }}",
   method:"POST",
   data:{countryname:countryname, countrysh:countrysh},
   dataType:'JSON',
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.edit_user_id').val('');
    $('.all_country_id').append('<option scope="row" value="'+data['data']['id']+'" data-attr-id="'+data['data']['id']+'">'+data['data']['countryname']+'</option>');
    $('.remove_state_country_id').append('<option scope="row" value="'+data['data']['id']+'" data-attr-id="'+data['data']['id']+'">'+data['data']['countryname']+'</option>');
    $('.add_city_country_id').append('<option scope="row" value="'+data['data']['id']+'" data-attr-id="'+data['data']['id']+'">'+data['data']['countryname']+'</option>');
    $('.remove_city_country_id').append('<option scope="row" value="'+data['data']['id']+'" data-attr-id="'+data['data']['id']+'">'+data['data']['countryname']+'</option>');
    $('.zipcode_country_id').append('<option scope="row" value="'+data['data']['id']+'" data-attr-id="'+data['data']['id']+'">'+data['data']['countryname']+'</option>');
    $('.rmv_zipcode_country_id').append('<option scope="row" value="'+data['data']['id']+'" data-attr-id="'+data['data']['id']+'">'+data['data']['countryname']+'</option>');
   }
  });
 });
});

// $(document).on('click', '.edit_country', function(){
// var edit_country_id = $(this).attr('data-attr-id');
//   $.ajax({
//     headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           },
//    url:"{{ url('admin/form/edit') }}",
//    method:"POST",
//    data:{edit_country_id:edit_country_id},
//    success:function(data)
//    {
//     $('.form_country').val(data['data']['countryname']);
//     $('.edit_user_id').val(data['data']['id']);
//    }
//   });
// });   


$(document).on('click','.delete_country_form', function(){
  var country_delete_id = $(this).parent().siblings().children().find('option:selected').attr('data-attr-id');
  let country_delete_text = $(this).parent().siblings().children().find('option:selected').text();
  
    $(this).parent().parent('tr').remove();
    var $country_this = $(this);

    
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('country/delete') }}",
   method:"POST",
   data:{country_delete_id:country_delete_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    if(data['status'] == 'true'){
      $country_this.parent().siblings().children().find('option:selected').remove();
      
      $("option:contains('"+country_delete_text+"')").remove();
    }
    
   }
  });

});
$(document).on('click','.btn_add_state', function(){
var all_country_id = $(this).parent().siblings().children().find('option:selected').attr('data-attr-id');
//var all_country_id = $('.all_country_id').val();
var stateabbr = $('#stateabbr').val();
var statename = $('#statename').val();
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/state/save') }}",
   method:"POST",
   data:{all_country_id:all_country_id, stateabbr:stateabbr, statename:statename},
   success:function(data)
   {
    $('#message_state').css('display', 'block');
    $('#message_state').html(data.message);
    $('#message_state').addClass(data.class_name);
    $('.form_country').val(data['data']['countryname']);
    $('.edit_user_id').val(data['data']['id']);
   }
  });
});
$(document).on('change', '.remove_state_country_id', function(){
var remove_state_country_id = $('.remove_state_country_id').val();
$('#remove_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/state/get') }}",
   method:"POST",
   data:{remove_state_country_id:remove_state_country_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#remove_state_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
$('#remove_state_id').append('<option scope="row" value="'+v['id']+'">'+v['statename']+' </option>');
    });
    
   }
  });
});

$(document).on('click', '.btn_remove_state', function(){
var remove_state_country_id = $('.remove_state_country_id').val();
var remove_state_id = $('#remove_state_id').val();
$('#remove_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/state/delete') }}",
   method:"POST",
   data:{remove_state_country_id:remove_state_country_id, remove_state_id:remove_state_id},
   success:function(data)
   {
    $('#message_state_remove').css('display', 'block');
    $('#message_state_remove').html(data.message);
    $('#message_state_remove').addClass(data.class_name);
    
   }
  });
});
$(document).on('change', '.add_city_country_id', function(){
var add_city_country_id = $('.add_city_country_id').val();
var add_city_state_id = $('.add_city_state_id').val();
$('.add_city_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/get_state') }}",
   method:"POST",
   data:{add_city_country_id:add_city_country_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.add_city_state_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.add_city_state_id').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
    });
    
    
   }
  });

});
$(document).on('click', '.btn_save_city', function(){
var add_city_country_id = $('.add_city_country_id').val();
var add_city_state_id = $('.add_city_state_id').val();
var add_city_name = $('#add_city_name').val();
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/save') }}",
   method:"POST",
   data:{add_city_country_id:add_city_country_id, add_city_state_id:add_city_state_id, add_city_name:add_city_name},
   success:function(data)
   {
    $('#message_city').css('display', 'block');
    $('#message_city').html(data.message);
    $('#message_city').addClass(data.class_name);
    
   }
  });
});
$(document).on('change', '.remove_city_country_id', function(){
  var add_city_country_id = $('.remove_city_country_id').val();
$('.rmv_city_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/get_state') }}",
   method:"POST",
   data:{add_city_country_id:add_city_country_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.rmv_city_state_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.rmv_city_state_id').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
    });
    
    
   }
  });

});

$(document).on('change', '.rmv_city_state_id', function(){
  var rmv_city_state_id = $('.rmv_city_state_id').val();
$('.rmv_city_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/get_city') }}",
   method:"POST",
   data:{rmv_city_state_id:rmv_city_state_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.rmv_city_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.rmv_city_id').append('<option value="'+v['id']+'">'+v['cityname']+'</option>');
    });
    
    
   }
  });

});
$(document).on('click', '.btn_remove_city', function(){
  var rmv_city_state_id = $('.rmv_city_state_id').val();
  var add_city_country_id = $('.remove_city_country_id').val();
  var rmv_city_id = $('.rmv_city_id').val();
$('.rmv_city_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/delete') }}",
   method:"POST",
   data:{rmv_city_state_id:rmv_city_state_id, rmv_city_id:rmv_city_id},
   success:function(data)
   {
    $('#message_city_reomve').css('display', 'block');
    $('#message_city_reomve').html(data.message);
    $('#message_city_reomve').addClass(data.class_name);
    
    
   }
  });
});
$(document).on('change', '.zipcode_country_id', function(){
var zipcode_country_id = $('.zipcode_country_id').val();
$('.zipcode_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/get_state') }}",
   method:"POST",
   data:{zipcode_country_id:zipcode_country_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.zipcode_state_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.zipcode_state_id').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
    });
    
    
   }
  });
});
$(document).on('change', '.zipcode_state_id', function(){
var zipcode_state_id = $(this).val();
$('.zipcode_city_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/get_city') }}",
   method:"POST",
   data:{zipcode_state_id:zipcode_state_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.zipcode_city_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.zipcode_city_id').append('<option value="'+v['id']+'">'+v['cityname']+'</option>');
    });
    
    
   }
  });
});
$(document).on('click', '.btn_zipcode', function(){
  var zipcode_city_id = $('.zipcode_city_id').val();
  var zipcode_name = $('.zipcode_name').val();
  $('.zipcode_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/save') }}",
   method:"POST",
   data:{zipcode_city_id:zipcode_city_id, zipcode_name:zipcode_name},
   success:function(data)
   {
    $('#message_zipcode').css('display', 'block');
    $('#message_zipcode').html(data.message);
    $('#message_zipcode').addClass(data.class_name);
    
    
   }
  });

});
$(document).on('change', '.rmv_zipcode_country_id', function(){
  var zipcode_country_id = $('.rmv_zipcode_country_id').val();
$('.rmv_zipcode_state_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/get_state') }}",
   method:"POST",
   data:{zipcode_country_id:zipcode_country_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.rmv_zipcode_state_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.rmv_zipcode_state_id').append('<option value="'+v['id']+'">'+v['statename']+'</option>');
    });
    
    
   }
  });

});
$(document).on('change', '.rmv_zipcode_state_id', function(){
var zipcode_state_id = $(this).val();
$('.rmv_zipcode_city_id').html('');
    $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/get_city') }}",
   method:"POST",
   data:{zipcode_state_id:zipcode_state_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('.rmv_zipcode_city_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.rmv_zipcode_city_id').append('<option value="'+v['id']+'">'+v['cityname']+'</option>');
    });
    
    
   }
  });
});
$(document).on('change', '.rmv_zipcode_city_id', function(){
var rmv_zipcode_city_id = $(this).val();
$('.rmv_zipcode_zipcode_id').html('');
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
    $('.rmv_zipcode_zipcode_id').append('<option value="">------Select-------</option>');
    $.each(data['data'], function(i,v){
      $('.rmv_zipcode_zipcode_id').append('<option value="'+v['id']+'">'+v['zipcode']+'</option>');
    });
    
    
   }
  });
});
$(document).on('click', '.btn_remove_zipcode', function(){
  var rmv_zipcode_city_id = $('.rmv_zipcode_city_id').val();
  var rmv_zipcode_zipcode_id = $('.rmv_zipcode_zipcode_id').val();
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/delete') }}",
   method:"POST",
   data:{rmv_zipcode_city_id:rmv_zipcode_city_id, rmv_zipcode_zipcode_id:rmv_zipcode_zipcode_id},
   success:function(data)
   {
    $('#message_zipcode_remove').css('display', 'block');
    $('#message_zipcode_remove').html(data.message);
    $('#message_zipcode_remove').addClass(data.class_name);
    
    
   }
  });

});
$(document).on('click', '.state_search_del', function(){
    var state_delete = $(this).attr('data-attr-id');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/state/state_delete') }}",
   method:"POST",
   data:{state_delete:state_delete},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    
    
   }
  });

});
$(document).on('click', '.state_search_del', function(){
    var state_delete = $(this).attr('data-attr-id');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/state/state_delete') }}",
   method:"POST",
   data:{state_delete:state_delete},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    
    
   }
  });

});
$(document).on('click', '.zipcode_search_id', function(){
    var zipcode_delete = $(this).attr('data-attr-id');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/zipcode_delete') }}",
   method:"POST",
   data:{zipcode_delete:zipcode_delete},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    
    
   }
  });
});
$(document).on('click', '.city_search_id', function(){
    var city_delete = $(this).attr('data-attr-id');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/city_delete') }}",
   method:"POST",
   data:{city_delete:city_delete},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    
    
   }
  });
});
$(document).on('click', '.btn_search_state', function(){
var search_state = $('#search_state').val();
$('.append_state_search').html('');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/state/search_state') }}",
   method:"POST",
   data:{search_state:search_state},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
$('.append_state_search').append('<tr>'+
                                      '<td>'+v["statename"]+'</td>'+
                                      '<td><a href="#" class="state_search_del" data-attr-id="'+v['id']+'"><i class="material-icons">delete</i></a></td>'+
                                    '</tr>');
    });
    
    
   }
  });

});
$(document).on('click', '.btn_search_city', function(){
var search_city = $('#search_city').val();
$('.append_city_search').html('');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/city/search_city') }}",
   method:"POST",
   data:{search_city:search_city},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
$('.append_city_search').append('<tr>'+
                                      '<td>'+v["cityname"]+'</td>'+
                                      '<td><a href="#" class="state_search_del" data-attr-id="'+v['id']+'"><i class="material-icons">delete</i></a></td>'+
                                    '</tr>');
    });
    
    
   }
  });

});
$(document).on('click', '.btn_search_zipcode', function(){
var search_zipcode = $('#search_zipcode').val();
$('.append_zipcode_search').html('');
      $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/zipcode/search_zipcode') }}",
   method:"POST",
   data:{search_zipcode:search_zipcode},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
$('.append_zipcode_search').append('<tr>'+
                                      '<td>'+v["zipcode"]+'</td>'+
                                      '<td><a href="#" class="state_search_del" data-attr-id="'+v['id']+'"><i class="material-icons">delete</i></a></td>'+
                                    '</tr>');
    });
    
    
   }
  });

});
</script>
@endsection
