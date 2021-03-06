         <!-- jQuery library -->
	

	<!-- Popper JS -->
	<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
	
	<!-- slim JS -->

	<!-- Latest compiled JavaScript -->
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script>
            $(document).ready(function(){
                $('#btnClear').click(function(){                
                    if(confirm("Want to clear?")){
                        /*Clear all input type="text" box*/
                        $('#validationform input[type="text"]').val('');
                        /*Clear textarea using id */
                        $('#validationform #txtAddress').val('');
                    }                   
                });
            });
        </script>
        		<!-- <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
                <script>
  
  $("document").ready(function(){
     setTimeout(function(){
        $("div.alert-info.alert").slideUp(3000).remove();
        $("div.alert-success.alert").slideUp(3000).remove();
        $("div.alert-warning.alert").delay(3000).slideUp(3000).remove();
        $("div.alert-danger.alert").fadeTo(2000,500).slideUp(3000).remove();
        
     }, 15000 ); // 5 secs
 
 });
  $(document).on('submit', '#add_agent_notes', function(event){
event.preventDefault();
  $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('agentnotes/create') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    if(data['data']['document']){ 
      var href = 'http://vkprealestate.leadconcept.us/agent_notes_document/'+data['data']['document']; 
    }
      else{
      var href = '#';
      }
    console.log(data['data']['agentnote']);
    $('#message_notes').css('display', 'block');
    $('#message_notes').html(data.message);
    $('#message_notes').addClass(data.class_name);
    $('.append_agent_notes').append('<tr>'+
      '<td><input type="checkbox" name="agent_notes_checked" class="agent_notes_checked" value="'+data['data']['id']+'"></td>'+
                      '<td>'+data['data']['agentnote']+'</td>'+
                      '<td>'+data['data']['agentnott']+'</td>'+
                      '<td>'+data['data']['agentnotes']+'</td>'+
                      '<td>'+
                      '<a href="'+href+'"><img src="images/pdf.png"/></a>'+
                         '</td>'+
                        '<td>admin</td>'+
                    '</tr>');
   }
  });
 });
  $(document).on('click', '.agent_notes_delete', function(){
    event.preventDefault();
$('.agent_notes_checked').each(function () {
  var $this = $(this);
  if(this.checked){
    var agent_notes_checked = $(this).val();
 
        $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('agentnotes/delete') }}",
   method:"POST",
   data:{agent_notes_checked:agent_notes_checked},
   success:function(data)
   {
    $('#message_notes').css('display', 'block');
    $('#message_notes').html(data.message);
    $('#message_notes').addClass(data.class_name);
    $this.parent().parent().remove();
   }

  });
         }
  });

  });
  $(document).on('click', '#add_agent_expence', function(){
    var charge_type = $('#charge_type').val();
    var charge_date = $('.charge_date').val();
    var expence_amount = $('#expence_amount').val();
    var expence_comment = $('#expence_comment').val();
    var expence_agent_id = $('#expence_agent_id').val();
    if(charge_type == '' || charge_date == '' || expence_amount == ''){
      alert('Please Fill All Field');
    }
    var $this = $(this);
      $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/create_agent_expence') }}",
       method:"POST",
       data:{charge_type:charge_type, charge_date:charge_date, expence_amount:expence_amount, expence_comment:expence_comment, expence_agent_id:expence_agent_id},
       success:function(data)
       {
        $('#expence_notes').css('display', 'block');
        $('#expence_notes').html(data.message);
        $('#expence_notes').addClass(data.class_name);
        $('.append_expence').append('<tr>'+
                                  '<td>'+data['data']['charge_date']+'</td>'+
                                  '<td>'+data['data']['charge_amount']+'</td>'+
                                  '<td>'+data['data']['charge_type']+'</td>'+
                                  '<td>'+data['data']['commit']+'</td>'+
                                  '<td>'+data['data']['charge_amount']+'</td>'+
                                  '<td><label class="custom-control custom-checkbox">'+
                                    '<input type="checkbox"  class="custom-control-input">'+
                                    '<span class="custom-control-label"></span></label></td>'+
                                    '<input type="hidden" name="expence_agent_id" id="expence_agent_id" value="'+data['data']['charge_agent_id']+'">'+
                                '</tr>');
       }
    });
  });
  $(document).on('click', '#delete_agent_expence', function(){
    var delete_charge_type = $('#delete_charge_type').val();
    var delete_charge_type_test = $('#delete_charge_type option:selected').text();
          $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/delete_expence') }}",
       method:"POST",
       data:{delete_charge_type:delete_charge_type},
       success:function(data)
       {
        $('#delete_expence_notes').css('display', 'block');
        $('#delete_expence_notes').html(data.message);
        $('#delete_expence_notes').addClass(data.class_name);
        $("#delete_charge_type option:contains('"+delete_charge_type_test+"')").remove();
       }
    });
  });
  $(document).on('click', '.expence_onhold', function(){
        if($(this).prop('checked') == true){
              var expence_id = $(this).val();
          }
          else{
          var expence_id = 0;
          }
    var expence_onhold = $(this).attr('data-attr-expece-id');
    
              $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/expence_onhold') }}",
       method:"POST",
       data:{expence_onhold:expence_onhold, expence_id:expence_id},
       success:function(data)
       {
        $('#delete_expence_notes').css('display', 'block');
        $('#delete_expence_notes').html(data.message);
        $('#delete_expence_notes').addClass(data.class_name);
        $("#delete_charge_type option:contains('"+delete_charge_type_test+"')").remove();
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
$('#datepicker3').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker4').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker11').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker12').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker_ex').datepicker({
format: 'dd/mm/yy',
    uiLibrary: 'bootstrap4'
});
$('#datepicker_misc').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker_sever').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>


<script>
$('#edit').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>
<script>
  
  $(function(){
   $('form').on('click','.continue',function(){
   event.preventDefault();
       var value=$("input[name=billing]:checked").val();
     switch(value){

       case "bx1":  location.href='{{route('agents.appartmentbilling') }}'; break;
       case "bx2":  location.href='{{route('agents.homeleasebilling') }}'; break;
       case "bx3": location.href='{{route('agents.homesalebilling') }}'; break;
       case "bx4": location.href='{{route('agents.billing.autoHomeHoldFee') }}'; break;
    
     }
   });
});

   $('.productivity_btn_list').on('click', function(){
$('.productivity_edit_area').show();
$('.productivity_list_area').hide();

  });
  $('.productivity_btn_edit').on('click', function(){
$('.productivity_edit_area').hide();
$('.productivity_list_area').show();

  });


  $(document).on('submit', '#productivity_save', function(event){
event.preventDefault();
  $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('agent/productivity_save') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('.productivity_edit_area').hide();
$('.productivity_list_area').show();
   }
  });
 });
  $(document).on('click', '.enabled_home_lease', function(){
    
    if ($(this).is(":checked")) {
      $('.home_lease').removeAttr("disabled");
      $('.home_lease_percentage').removeAttr("disabled");
      $('.enabled_in_tier_1').removeAttr("disabled");
      $('.enabled_in_tier_2').removeAttr("disabled");
      $('.enabled_in_tier_3').removeAttr("disabled");
    }
    else{
      $('.home_lease').attr("disabled", true);
      $('.home_lease_percentage').attr("disabled", true);
      $('.enabled_in_tier_1').attr("disabled", true);
      $('.enabled_in_tier_2').attr("disabled", true);
      $('.enabled_in_tier_3').attr("disabled", true);
      }
  });
  $(document).on('submit', '#misc_income_form', function(){
    event.preventDefault();
  $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('agent/miscincome') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#misc_imcome_alert').css('display', 'block');
    $('#misc_imcome_alert').html(data.message);
    $('#misc_imcome_alert').addClass(data.class_name);
    $('#append_misc_income').append('<tr>'+
                                          '<td>&nbsp;</td>'+
                                          '<td>'+data['data']['income_date']+'</td>'+
                                          '<td>'+data['data']['comment']+'</td>'+
                                          '<td>$'+data['data']['amount']+'</td>'+
                                          '<td><label class="custom-control custom-checkbox">'+
                                            '<input type="checkbox"  class="custom-control-input income_onhold" value="'+data['data']['id']+'">'+
                                            '<span class="custom-control-label"></span></label></td>'+
                                          '<td>'+data['data']['income_date']+'</td>'+
                                          '<td>5336</td>'+
                                      '</tr>');
   }
  });

  });
  $(document).on('click', '.income_onhold', function(){
    if($(this).prop('checked') == true){
              var misc_income_onhold = $(this).val();
          }
          else{
          var misc_income_onhold = 0;
          }
    var misc_income_id = $(this).attr('data-attr-misc-id');
    
              $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/miscincome/onhold') }}",
       method:"POST",
       data:{misc_income_id:misc_income_id, misc_income_onhold:misc_income_onhold},
       success:function(data)
       {
       }
    });

  });
  $(document).on('click', '.del_agent_income', function(){
    var del_misc_income = $('.del_misc_income').val();
    var del_misc_income_text = $('.del_misc_income option:selected').text();
                  $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/miscincome/delete') }}",
       method:"POST",
       data:{del_misc_income:del_misc_income},
       success:function(data)
       {
        $(".del_misc_income option:contains('"+del_misc_income_text+"')").remove();
       }
    });

  });
  $(document).on('change', '.detial_misc_income', function(){
      var detial_misc_income = $('.detial_misc_income').val();
      let onhold = '';
        $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/get_miscincome_detial') }}",
       method:"POST",
       data:{detial_misc_income:detial_misc_income},
       success:function(data)
       {
        if(data['data']['onhold'] == 1){
          let onhold = 'Yes';
        }
        else{
          let onhold = 'No';
        }
        $('.detial_misc_income_show').html('');
        $('.detial_misc_income_show').append('<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Income Date</h6></div>'+
              '<div class="col-md-6">'+data['data']['income_date']+'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Amount</h6></div>'+
              '<div class="col-md-6"> $'+data['data']['amount']+'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Onhold</h6></div>'+
              '<div class="col-md-6">'+ onhold +'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Agent Name</h6></div>'+
              '<div class="col-md-6">'+data['data']['agent']['agentdisplayname']+'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-12">'+
              '<div class="col-md-4"><h6 style="color: #a63651 !important;">Comment</h6></div>'+
              '<div class="col-md-8">'+data['data']['comment']+'</div>'+
            '</div>'+
            '</div>');
       }
    });
  });
    $(document).on('change', '#detial_charge_type', function(){
      var detial_charge_type = $('#detial_charge_type').val();
      let onhold = '';
        $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('agent/expence_detial') }}",
       method:"POST",
       data:{detial_charge_type:detial_charge_type},
       success:function(data)
       {
        if(data['data']['onhold'] == 1){
          let onhold = 'Yes';
        }
        else{
          let onhold = 'No';
        }
        $('.show_expence_detial').html('');
        $('.show_expence_detial').append('<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Charge Type</h6></div>'+
              '<div class="col-md-6">'+data['data']['charge_type']+'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Charge Date</h6></div>'+
              '<div class="col-md-6"> $'+data['data']['charge_date']+'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Charge Amount</h6></div>'+
              '<div class="col-md-6">'+ data['data']['charge_amount'] +'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">On Hold</h6></div>'+
              '<div class="col-md-6">'+onhold+'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-12">'+
              '<div class="col-md-4"><h6 style="color: #a63651 !important;">Comment</h6></div>'+
              '<div class="col-md-8">'+data['data']['commit']+'</div>'+
            '</div>'+
            '</div>');
       }
    });
  });
</script>

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

// $('#first_agent').on('change', function(){
// var first_agent = $('#first_agent').val();
// $.ajax({
//     headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           },
//    url:"{{ url('invoice/get_month_count') }}",
//    method:"POST",
//    data:{first_agent:first_agent},
//    success:function(data)
//    {
//     console.log(data);
//     $('#mo_count').val(data['data']['count']);
//     $('#first_agent_comm').val(data['data']['commission']);
//    }
//   });
// });
$('.btn_w_search').on('click', function(){
var find_invoice = $('#find_invoice').val();
var find_invoice_type = $('#find_invoice_type').val();
$.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('invoice/get_prev_invoice') }}",
   method:"POST",
   data:{find_invoice:find_invoice,find_invoice_type:find_invoice_type},
   success:function(data)
   {
    $('#TenantZip').html('');
    $('#TenantState').html('');
    $('#TenantCity').html('');
    $('#billing_address_state').html('');
    $('#billing_address_city').html('');
    $('#billing_address_zip').html('');
    data = JSON.parse(JSON.stringify(data).replace(/\:null/gi, "\:\"\""));
    if(data.status == 'true'){
     if(data['data']['id'] != null){
     $('#invoice_no').val(data['data']['id']); 
    }
    console.log(data['data']['fee_holding_amount']);
    if(data['data']['fee_holding_amount']){
      var e = data['fee_holding_data'];
      $.each(e, function(i,v){
        $('.append_holding_fee_data').append('<div class="row remove_apply_fee">'+
        '<div class="col-2"></div>'+
        '<div class="col-3"><input type="text" value="'+i+'" readonly="readonly" name="fee_holding_mono[]"/></div>'+
        '<div class="col-2"><input type="text" value="'+v+'" readonly="readonly" name="fee_holding_AmountMO[]"/></div>'+
        '<div class="col-2"><a href="#">view</a></div>'+
        '</div>');
    $('.append_holding_fee_data').show();
      });
    }
    if(data['data']['property_id'] != null){
$('#propety_id option').filter(function() { 
    return ($(this).val() == data['data']['property_id']);
    }).prop('selected', true);
    }
    
    if(data['data']['LastContractDate'] != null){
      $('#last_contract_date').val(data['data']['LastContractDate']);
    }
    if(data['data']['LastContractDate'] != null){
      $('#last_contract_date').val(data['data']['LastContractDate']);
    }
    if(data['data']['inv_property']['propertyonhold']){
      $('#onhold').val(data['data']['inv_property']['propertyonhold']);
      $('#onhold').prop('checked', true);
    }
    if(data['data']['inv_property']['propertylegal']){
$('#legal').val(data['data']['inv_property']['propertylegal']);
$('#legal').prop('checked', true);
} 
if(data['data']['inv_property']['propertyoffline']){
$('#offline').val(data['data']['inv_property']['propertyoffline']);
$('#offline').prop('checked', true);
}  
if(data['data']['inv_property']['PropertDonotplace']){
$('#do_not_place').val(data['data']['inv_property']['PropertDonotplace']);
$('#do_not_place').prop('checked', true);
}
if(data['data']['inv_property']['PropertyNotadvancable']){
$('#not_advancable').val(data['data']['inv_property']['PropertyNotadvancable']);
$('#not_advancable').prop('checked', true);
} 
if(data['data']['inv_property']['propertyguaranteecontract']){
$('#guarantee_contract').val(data['data']['inv_property']['propertyguaranteecontract']);
$('#guarantee_contract').prop('checked', true);
}  
// if(data['data']['inv_property']['ispayautopay']){
// $('#NoPay').val(data['data']['inv_property']['ispayautopay']);
// $('#NoPay').prop('checked', true);
// }
if(data['data']['id']){
  $('#invoice_number').val(data['data']['id']);
}    
if(data['data']['InvoiceMgmtCompName'] != null){
 $('#COM_MGT').val(data['data']['InvoiceMgmtCompName']); 
}
   if(data['data']['InvoiceMgmtAddress1'] != null){
    $('#InvoiceMgmtAddress1').val(data['data']['InvoiceMgmtAddress1']);
   } 
    if(data['data']['InvoiceMgmtAddress2'] != null){
      $('#InvoiceMgmtAddress2').val(data['data']['InvoiceMgmtAddress2']);
    }
    if(data['data']['Legal'] != null){
     $('#legal').val(data['data']['Legal']); 
   }
   if(data['data']['bill_country_id'] != null){
    $('#billing_address_country option').filter(function() { 
    return ($(this).val() == data['data']['bill_country_id']);
    }).prop('selected', true);
   }
    if(data['data']['bill_state_id'] != null && data['data']['inv_state_list']['statename'] != null){
      $('#billing_address_state').append('<option value="'+data['data']['bill_state_id']+'">'+data['data']['inv_state_list']['statename']+'</option>');
    }
    if(data['data']['bill_city_id'] != null && data['data']['inv_city_list']['cityname'] != null){
      $('#billing_address_city').append('<option value="'+data['data']['bill_city_id']+'">'+data['data']['inv_city_list']['cityname']+'</option>');
    }
    if(data['data']['bill_zipcode_id'] != null && data['data']['inv_zipcode_list']['zipcode'] != null){
     $('#billing_address_zip').append('<option value="'+data['data']['bill_zipcode_id']+'">'+data['data']['inv_zipcode_list']['zipcode']+'</option>'); 
    }
    
    if(data['data']['InvoiceMgmtPhoneNo'] != null){
      $('#phone').val(data['data']['InvoiceMgmtPhoneNo']);
    }
    if(data['data']['TenantNames'] != null){
      $('#Tenant').val(data['data']['TenantNames']);
    }
    if(data['data']['TenantAddresss'] != null){
     $('#Address_tenant').val(data['data']['TenantAddresss']); 
    }
    
    if(data['data']['TenantUnitNo'] != null){
      $('#Unit').val(data['data']['TenantUnitNo']);
    }
    if(data['data']['tenant_country_id'] != null){
      $('#TenantCountry option').filter(function() { 
    return ($(this).val() == data['data']['tenant_country_id']);
    }).prop('selected', true); 
    }
   if(data['data']['tenant_state_id'] != null){
    $('#TenantState').append('<option value="'+data['data']['tenant_state_id']+'">'+data['data']['tenant_state_id']+'</option>');
   }
    if(data['data']['tenant_city_id'] != null){
$('#TenantCity').append('<option value="'+data['data']['tenant_city_id']+'">'+data['data']['tenant_city_id']+'</option>');
    }
    if(data['data']['tenant_zipcode_id'] != null){
     $('#TenantZip').append('<option value="'+data['data']['tenant_zipcode_id']+'">'+data['data']['tenant_zipcode_id']+'</option>'); 
    }
    
    if(data['data']['invoice_date'] != null){
      $('#datepicker1').val(data['data']['invoice_date']); 
    }
   if(data['data']['LeaseStartDate'] != null){
    $('#datepicker2').val(data['data']['LeaseStartDate']);
   }
    if(data['data']['Leaseterm'] != null){
     $('#Leaseterm').val(data['data']['Leaseterm']); 
    }
    if(data['data']['Verifier'] != null){
      $('#Verifier').val(data['data']['Verifier']);
    }
    if(data['data']['InvMakerId'] != null){
     $('#InvMakerId').val(data['data']['InvMakerId']); 
    }
    if(data['data']['Rent'] != null){
     $('#total_rent').val(data['data']['Rent']); 
    }
    if(data['data']['Bonus'] != null){
     $('#Bonus').val(data['data']['Bonus']); 
    }
    if(data['data']['VKPPercentage'] != null){
      $('#amount_due_to_vkp').val(data['data']['VKPPercentage']);
    }
    if(data['data']['DueToSecondAgent'] != null){
     $('#due_to_second').val(data['data']['DueToSecondAgent']); 
    }
    if(data['data']['FirstagentId'] != null){
      $('#first_agent option').filter(function() { 
    return ($(this).val() == data['data']['FirstagentId']);
    }).prop('selected', true);
    }
    if(data['data']['SecondAgentID'] != null){
     $('#second_agent option').filter(function() { 
    return ($(this).val() == data['data']['SecondAgentID']);
    }).prop('selected', true); 
    }
    
    if(data['data']['VKPSplit'] != null){
    $('#vkp_split').val(data['data']['VKPSplit']);  
    }
    if(data['data']['DueToFirstAgent'] != null){
      $('#due_to_ist_agent').val(data['data']['DueToFirstAgent']);
    }
    if(data['data']['FirstAgentCommPercentage'] != null){
     $('#first_agent_comm').val(data['data']['FirstAgentCommPercentage']); 
    }
    if(data['data']['MontlyAdvanceCount'] != null){
     $('#monthly_adv_count').val(data['data']['MontlyAdvanceCount']); 
    }
    if(data['data']['FlatRate'] != null){
     $('#flat_rate').val(data['data']['FlatRate']); 
    }
    $('#PONO').val(data['data']['PONO']);
    $('#GiftCard').val(data['data']['GiftCard']);
    $('#InvoiceNote').val(data['data']['InvoiceNote']);
    if(data['data']['NoNumber'] == 1){
$('#NoNumber').val(data['data']['NoNumber']);
$('#NoNumber').prop('checked', true);
    }
    if(data['data']['AdjustCommission'] == 1){
     $('#AdjustCommission').val(data['data']['AdjustCommission']);
$('#AdjustCommission').prop('checked', true); 
    }
    
    if(data['data']['AmountDueToVKP'] != null){
      $('#amount_due_to_vkp').val(data['data']['AmountDueToVKP']);
    }
    if(data['data']['FiftyFiftySplit'] == 1){
      $('#FiftyFiftySplit').prop('checked', true);
      $('#FiftyFiftySplit').prop('checked', true);
    }
    if(data['data']['NoPay'] == 1){
      $('#NoPay').prop('checked', true);

    }
    $('#hidden_id').val(data['data']['id']);
   }
   else{
    alert('Invoice Not Found');
   }
   }
  });
});

//
   $('form').on('click','.apprScreenContinue',function(){
   event.preventDefault();
       var value=$("input[name=approval_screen]:checked").val();
     switch(value){

       case "bx1":  location.href='{{route('feeRecieptScreen') }}'; break;
       case "bx2":  location.href='{{route('feeholdScreen') }}'; break;
       case "bx3": location.href='{{route('admin_approval') }}'; break;
       
    
     }
   });
   //fee Reciept Received
	$(document).on("click",".feeRecieptRCVD",function(){
	$.each($("input[name='feeRecieptRCVD']:checked"), function(){
	if($(this).val()==0){
	$(this).val(1); 
	}else{
	$(this).val(0);	 
	}
	});

	var feeRecieptCheckBox = $(this).val();
	var id=$(this).data("id");
	// alert(feeRecieptCheckBox);
	// alert(id);
	var confirmDialog=confirm("Are you sure! You want to approve?");
	if(confirmDialog){
	var status=1; 
	$.ajax({
	 headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
	type : 'POST',
	url:"{{ url('approveHoldingfee') }}",
	dataType : "JSON",
	data : {id:id,status:status},
	success: function(data){ 


	} 

	});
	}

	});
	
	
	//fee Hold Refund
	$(document).on("click",".feeHoldRefund",function(){
	$.each($("input[name='feeHoldRefund']:checked"), function(){
	if($(this).val()==0){
	$(this).val(1); 
	}else{
	$(this).val(0);	 
	}
	});

	var feeRecieptCheckBox = $(this).val();
	var id=$(this).data("id");
	// alert(feeRecieptCheckBox);
	// alert(id);
	var confirmDialog=confirm("Are you sure! You want to refund?");
	if(confirmDialog){
	var status=3; 
	$.ajax({
	 headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
	type : 'POST',
	url:"{{ url('approveHoldingfee') }}",
	dataType : "JSON",
	data : {id:id,status:status},
	success: function(data){ 


	} 

	});
	} 

	});
  </script>