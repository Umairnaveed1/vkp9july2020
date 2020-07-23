@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> Print Invoice Screen </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">

                        <div class="row">
                       
                        
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                                                   
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class=" col-12">
                            <div class="card card_address pl-3 pr-3 ">
                                    <div class="card-body add_office_cardbody search_inovice_w">
                                 
               
                    <div class="col-md-12 col-12">
                        <div class="row">


                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="text">From Invoice # :		</label>
                        <div class="">
                            <input type="number" required="" id="search_from" data-parsley-maxlength="8" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                        <div class="form-group ">
                            <label for="sel1">To Invoice # :		</label>
                            <div class="">
                              <input type="number" id="search_to" required="" data-parsley-maxlength="8" placeholder="" class="form-control">
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-12 col-12">
                             <button type="submit" id="search_btn" class="btn btn-space btn_promary_custom btn_add_test">Add</button>
                            <button type="cancel" class="btn btn-space btn_promary_custom btn_add_test">Cancel</button>
                        </div>
                    
                    
                
                
                
                
                    
                                    
                                        
                                
                                    
                                
                        </div>
                
               
                </div>
                               




                                
     
            
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class=" col-12">
                            <div class="card card_address pl-3 pr-3 ">
                                    <div class="card-body add_office_cardbody search_inovice_w">
                                 
               
                    <div class="col-md-12 col-12">
                        <div class="row">


                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="text">Invoice # :		</label>
                        <div class="">
                            <input type="number" id="search" required="" data-parsley-maxlength="8" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>
                
                
                    <div class="col-lg-12 col-12">
                             <button type="submit" id="search_btn_one" class="btn btn-space btn_promary_custom btn_add_test">Add</button>
                            <button type="submit" class="btn btn-space btn_promary_custom btn_add_test">Cancel</button>
                        </div>
                    
                    
                
                
                
                
                    
                                    
                                        
                                
                                    
                                
                        </div>
                
               
                </div>
                               




                                
     
            
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          <div class="row search_row" style="display: none">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                              <th width="13%" scope="col">Del</th>
                                                <th width="13%" scope="col">Invoice Date</th>
                                                <th width="18%" scope="col">Invoice No</th>
                                                <th width="16%" scope="col">Property Name</th>
                                                <th width="10%" scope="col">Tenant Name</th>
                                                <th width="11%" scope="col">Tenant Unit No</th>
                                                <th width="12%" scope="col">AmountDueToVKP</th>
                                                <th width="11%" scope="col">View inv</th>
                                                <th width="11%" scope="col">#of copies</th>
                                                <th width="11%" scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="append_searh">
                                          
                                           </tbody>
                                    </table></div>
                                    </div>
                                </div></div></div></div><div class="clearfix"></div>
                          </div></div>
                          
                          
                                               <!-- Six Six Section -->

                  
                          
                          
                          
                          
                          
                          
                    
                          
                          
                          <div class="clearfix"></div>
                          
                       
                          
                          
                          
                          
                          
                          
                  </div>
                            
                        </div>

                        
                        
                        
                    </div>
                </div>
            </div>
            <div class="modal" id="myModal_viewapprove_bill">
  <div class="modal-dialog w_viewapprove_bill">
    <div class="modal-content">
      @if($message = Session::get('success'))
      <strong>{{$message}}</strong>
      @endif
 <form class="form-group mt-2 " method="post"  id="sendemail"  enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Send Invoice as a note</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
       
      <div class="col-md-12 popup">
      
      
                  <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td><strong>To Property</strong></td>
    <td class="data_email"></td>
  </tr>
  <tr>
    <td><strong>To Emial</strong></td>
    <td>
    <input type="email" class="form-control" name="email" id="email"></td>
  </tr>
  <tr>
    <td><strong>Invoice ID</strong></td>
    <td><strong>1</strong></td>
  </tr>
  <tr>
    <td><strong>Subject</strong></td>
    <td> <input type="text" class="form-control" name="subject" id="subject"></td>
  </tr>
  <tr>
    <td><strong>Body</strong></td>
    <td> <textarea type="text" class="form-control" name="body" id="body"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


                             
                         
                        
                        
                        
                       
                          </div>
                
                                                           
                                                
   
   
                                                    
                                                
   
   
  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
<!--        <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a><br>-->
 <button type="submit" class="btn btn-danger btn_close_pop3">Send Invoice</button>
  <a type="button" class="close btn btn-danger btn_close_pop3" data-dismiss="modal">Close</a>
      </div>
 </form>
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
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script type="text/javascript">
        $('#search_btn').on('click', function(){
var search_from = $('#search_from').val();
var search_to = $('#search_to').val();
$('.append_searh').html('');
$.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('invoice/get_search') }}",
   method:"POST",
   data:{search_from:search_from,search_to:search_to},
   success:function(data)
   {
   $('.data_email').html('');
    $.each(data['data'], function(i,v){
$('.append_searh').append('<tr>'+
                                                '<td><a   class="deleteRowButton">Del</a></td>'+
                                                '<td>'+v['invoice_date']+'</td>'+
                                                '<td>'+v['id']+'</td>'+
                                                '<td>'+v['inv_property']['propertyName']+'</td>'+
                                                '<td>'+v['TenantNames']+'</td>'+
                                                '<td>'+v['TenantUnitNo']+'</td>'+
                                                '<td>'+v['AmountDueToVKP']+'</td>'+
                                                '<td><a href="javascript:void(0)">View</a></td>'+
                                                '<td><select id="cars">'+
  '<option value="volvo">1</option>'+
  '<option value="saab">2</option>'+
  '<option value="mercedes">3</option>'+
  '<option value="audi">4</option>'+
'</select></td>'+
                                                '<td><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal_viewapprove_bill">Email</a></td>'+
                                            '</tr>');
 

    });
    $('.search_row').show();
 
     // var f= $('.data_email').append('<td>'+data['data'][0]['inv_property']['propertyName']+'</td>');
     //  $.each(data['data'], function(i,v){
     // var f= $('.data_email').append('<td>'+v['inv_property']['propertyName']+'</td>');
      
     //     });
         
   }
  });
});
        $('#search_btn_one').on('click', function(){
var search_from = $('#search').val();
$('.append_searh').html('');
$.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('invoice/get_search_first') }}",
   method:"POST",
   data:{search_from:search_from},
   success:function(data)
   {
     $('.data_email').html('');
    $.each(data['data'], function(i,v){

$('.append_searh').append('<tr>'+
                                                '<td><a   class="deleteRowButton">Del</a></td>'+
                                                '<td>'+v['invoice_date']+'</td>'+
                                                '<td>'+v['id']+'</td>'+
                                                '<td>'+v['inv_property']['propertyName']+'</td>'+
                                                '<td>'+v['TenantNames']+'</td>'+
                                                '<td>'+v['TenantUnitNo']+'</td>'+
                                                '<td>'+v['AmountDueToVKP']+'</td>'+
                                                '<td><a href="javascript:void(0)">View</a></td>'+
                                                '<td><select id="cars">'+
  '<option value="volvo">1</option>'+
  '<option value="saab">2</option>'+
  '<option value="mercedes">3</option>'+
  '<option value="audi">4</option>'+
'</select></td>'+
                                                '<td><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal_viewapprove_bill">Email</a></td>'+
                                            '</tr>');
    });
    $('.search_row').show();
    $.each(data['data'], function(i,v){
     var f= $('.data_email').append('<td>'+v['inv_property']['propertyName']+'</td>');
      
         });
   }
  });
});      


 // $('#del_search').on('click', function(){  
 //  $('.table_office_manage ').hide();
 // });


    </script>
     <script type="text/javascript">
   
 $('#sendemail').on('submit', function(event){
event.preventDefault();

 
  
 
   $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{url('sendemail')}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log(data.message);
    $("#textmesage").append(data.message);
 
    console.log(data.messageinsert)

     // $(".charge_date").val("");
     //      $("#note_time").val("");
     //      $("#expence_comment").val("");
     //      $("#file").val("");
     //      $("#InformationLocked").val("");
     //      $("#Shownote").val("");
         
       alert('Data Uploaded successfully')
 // location.reload();
   }
  });
  
});

 </script>
    <script type="text/javascript">
       $(document).ready(function() {
        $('.deleteRowButton').click(DeleteRow);
      });
        function DeleteRow()
    {
      $(this).parents('tr').first().remove();
    }
    </script>
    @endsection