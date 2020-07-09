@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="page-header">
                                    	<div id="message"></div>
                                        <h2 class="pageheader-title"> Admin </h2> </div>
                                </div>
                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address2">
                                                    <h5 class="label_rule_heading3 pl-4 ml-1 mt-2 mb-0 pb-0">Add Form</h5>
                                                    <div class="card-body add_office_cardbody">
                                                             <form id="admin_form_submit">                            	
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-lg-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Form Name :</label>
                                                                        <input type="text" required="" placeholder="Form Name" name="form_name" class="form-control form_name_admin"> </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-lg-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Upload File</label>
                                                                        <input type="file" required="" data-parsley-min="6" placeholder="" class="choose-f form-control document_admin" name="document">
                                                                        <input type="hidden" name="admin" value="admin">
                                                                         </div>
                                                                         <input type="hidden" name="edit_admin_id" class="edit_admin_id">
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="form-group row text-right">
                                                                <div class="col col-sm-12 p-0">
                                                                    <button type="submit" class="btn btn-space btn_promary_custom float-left admin_form_submit">Save</button>
                                                                    <a class="btn btn-space btn_cancel_custom float-left" href="javascript:void(0)" id="btnClear_11">Cancel</a>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        <div class="col-sm-12"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address">
                                                    <div class="card-body">
                                                        <h5 class="label_rule_heading3">View Forms List</h5>
                                                        <div class="col-sm-12">
                                                        <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                                            <thead>
                                                                <tr>
                                                                    <th  scope="col">Form Name</th>
                                                                    <th  scope="col">Uploaded form</th>
                                                                    <th  scope="col">Date Modified</th>
                                                                    <th  scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody class="append_admin_data">
                                                            	@foreach($get_form_data_admin as $form_list)
                                                            	 @if($form_list->user_type == 'admin')
                                                                <tr>
                                                                    <th scope="row">{{ $form_list->form_name }} </th>
                                                                    <th>{{ $form_list->document }}</th>
                                                                    <td>{{ $form_list->created_at }}</td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="delete  mr-2 view_admin_form_admin" title="View" data-toggle="modal" data-target="#myModal" data-attr-id="{{ $form_list->id }}" data-attr-document="{{ $form_list->document }}">
                                                                            <i class="material-icons">visibility</i></a>
                                                                        <a href="javascript:void(0);" class="edit mr-2 edit_admin_form_admin" title="edit" data-toggle="tooltip" data-attr-id="{{ $form_list->id }}">
                                                                        <i class="material-icons"></i></a>
                                                                         <a href="javascript:void(0);" class="delete  mr-2 delete_admin_form_admin" title="delete" data-toggle="tooltip" data-attr-id="{{ $form_list->id }}">
                                                                        <i class="material-icons" data-attr-id="{{ $form_list->id }}">delete</i></a> 
                                                                        
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                             </tbody>
                                                        </table>

                                                        <ul class="pagination mt-4 align-right">
                                                        	{!! $get_form_data_admin->render() !!}
                                                           
                                                          </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="clearfix"></div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="page-header">
                                        <h2 class="pageheader-title"> Agents </h2> </div>
                                </div>
                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address2">
                                                    <h5 class="label_rule_heading3 pl-4 ml-1 mt-2 mb-0 pb-0">Add Form</h5>
                                                    <div class="card-body add_office_cardbody">
                                                        
                                                        <form id="submit_agent_form">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-lg-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Form Name :</label>
                                                                        <input type="text" required="" placeholder="" name="form_name" class="form-control form_name_agent"> </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-lg-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Upload File</label>
                                                                        <input type="file" required="" data-parsley-min="6" name="document" placeholder="" class="choose-f form-control document_agent"> </div>
                                                                        <input type="hidden" name="agent" value="agent">
                                                                        <input type="hidden" name="edit_agent_id" class="edit_agent_id">
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="form-group row text-right">
                                                                <div class="col col-sm-12 p-0">
                                                                    <button type="submit" class="btn btn-space btn_promary_custom float-left submit_agent_form">Save</button>
                                                                    <a class="btn btn-space btn_cancel_custom float-left" href="javascript:void(0)" id="btnClear_1">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="col-sm-12"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address">
                                                    <div class="card-body">
                                                        <h5 class="label_rule_heading3">View Forms List</h5>
                                                        <div class="col-sm-12">
                                                        <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                                            <thead>
                                                                <tr>
                                                                    <th  scope="col">Form Name</th>
                                                                    <th  scope="col">Uploaded form</th>
                                                                    <th  scope="col">Date Modified</th>
                                                                    <th  scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody class="append_agent_data">
                                                              @foreach($get_form_data_agent as $form_list)
                                                              @if($form_list->user_type == 'agent')
                                                                <tr>
                                                                    <th scope="row">{{ $form_list->form_name }} </th>
                                                                    <th>{{ $form_list->document }}</th>
                                                                    <td>{{ $form_list->created_at }}</td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="delete  mr-2 view_admin_form_agent" title="View" data-toggle="modal" data-target="#myModal" data-attr-id="{{ $form_list->id }}" data-attr-document="{{ $form_list->document }}">
                                                                            <i class="material-icons">visibility</i></a>
                                                                        <a href="javascript:void(0);" class="edit mr-2 edit_admin_form_agent" title="edit" data-toggle="tooltip" data-attr-id="{{ $form_list->id }}">
                                                                        <i class="material-icons"></i></a>
                                                                         <a href="javascript:void(0);" class="delete  mr-2 delete_admin_form_admin" title="delete" data-toggle="tooltip" data-attr-id="{{ $form_list->id }}">
                                                                        <i class="material-icons">delete</i></a> 
                                                                        
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                                
                                                               
                                                                
                                                            </tbody>
                                                        </table>
                                                       
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
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address2">
                                                    <h5 class="label_rule_heading3 pl-4 ml-1 mt-2 mb-0 pb-0">Phone List</h5>
                                                    <div class="card-body add_office_cardbody">
                                                        
                                                        <form id="validationform" data-parsley-validate="" novalidate="">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-lg-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Select Office :</label>
                                                                        <select name="" class="form-control">
                                                                            <option selected="selected" value="0">Please Select Office</option>
                                                                            <option value="">Office 1</option>
                                                                            <option value="">Office 2</option>
                                                                            <option value="">Office 3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                               
                                                               
                                                            </div>
                                                            <div class="form-group row text-right">
                                                                <div class="col col-sm-12 p-0">
                                                                    <button type="submit" class="btn btn-space btn_promary_custom float-left">Print</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="col-sm-12"> </div>
                                                    </div>
                                                </div>
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
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0"> Copyright © 2020 ValleyKing.com. All rights reserved. </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                            <div class="text-md-right footer-links d-none d-sm-block"> Designed & Developed by<a href="https://leadconcept.com/" target="_blank"> LEADconcept</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){

 $('#admin_form_submit').on('submit', function(event){
  event.preventDefault();
  $.ajax({
  	headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/form/save') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
    $('.edit_admin_id').val('');
    $('.append_admin_data').append('<tr>'+
                                    '<th scope="row">'+data['data']['form_name']+' </th>'+
                                    '<th>'+data['data']['document']+'</th>'+
                                    '<td>'+data['data']['created_at']+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:void(0);" class="delete  mr-2 view_admin_form_admin" title="View" data-attr-id="'+data['data']['id']+'" data-toggle="modal" data-target="#myModal" data-attr-document="'+data['data']['document']+'">'+
                                            '<i class="material-icons">visibility</i></a>'+
                                        '<a href="javascript:void(0);" class="edit mr-2 edit_admin_form_admin" title="edit" data-toggle="tooltip" data-attr-id="'+data['data']['id']+'">'+
                                        '<i class="material-icons"></i></a>'+
                                         '<a href="javascript:void(0);" class="delete  mr-2 delete_admin_form_admin" title="delete" data-toggle="tooltip" data-attr-id="'+data['data']['id']+'">'+
                                        '<i class="material-icons">delete</i></a> '+
                                        
                                    '</td>'+
                                '</tr>');
   }
  })
 });

});
$(document).ready(function(){
$('#submit_agent_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
  	headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/form/save') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
    $('.edit_agent_id').val('');
    $('.append_agent_data').append('<tr>'+
                                    '<th scope="row">'+data['data']['form_name']+' </th>'+
                                    '<th>'+data['data']['document']+'</th>'+
                                    '<td>'+data['data']['created_at']+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:void(0);" class="delete  mr-2 view_admin_form_agent" title="View" data-attr-id="'+data['data']['id']+'" data-toggle="modal" data-target="#myModal" data-attr-document="'+data['data']['document']+'">'+
                                            '<i class="material-icons">visibility</i></a>'+
                                        '<a href="javascript:void(0);" class="edit mr-2 edit_admin_form_agent" title="edit" data-toggle="tooltip" data-attr-id="'+data['data']['id']+'">'+
                                        '<i class="material-icons"></i></a>'+
                                         '<a href="javascript:void(0);" class="delete  mr-2 delete_admin_form_admin" title="delete" data-toggle="tooltip" data-attr-id="'+data['data']['id']+'">'+
                                        '<i class="material-icons">delete</i></a> '+
                                        
                                    '</td>'+
                                '</tr>');
   }
  });
 });
});
$(document).on('click', '.edit_admin_form_agent', function(){
var edit_form_id = $(this).attr('data-attr-id');
  $.ajax({
  	headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/form/edit') }}",
   method:"POST",
   data:{edit_form_id:edit_form_id},
   success:function(data)
   {
   	$('.form_name_agent').val(data['data']['form_name']);
   	$('.edit_agent_id').val(data['data']['id']);
   }
  });
});

$(document).on('click', '.edit_admin_form_admin', function(){
var edit_form_id = $(this).attr('data-attr-id');
  $.ajax({
  	headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/form/edit') }}",
   method:"POST",
   data:{edit_form_id:edit_form_id},
   success:function(data)
   {
   	$('.form_name_admin').val(data['data']['form_name']);
   	$('.edit_admin_id').val(data['data']['id']);
   }
  });
});
$(document).on('click', '.view_admin_form_agent', function(){
    $('.modal-body').html('');
	var document_file = $(this).attr('data-attr-document');
$('.modal-body').append("<p><iframe src='https://view.officeapps.live.com/op/view.aspx?src=http://vkprealestate.leadconcept.us/public/images/"+document_file+"' frameborder='0' style='width:100%;min-height:640px;''></iframe>"+
"</p>");
});
$(document).on('click', '.view_admin_form_admin', function(){
    $('.modal-body').html('');
	var document_file = $(this).attr('data-attr-document');
$('.modal-body').append("<p><iframe src='https://view.officeapps.live.com/op/view.aspx?src=http://vkprealestate.leadconcept.us/public/images/"+document_file+"' frameborder='0' style='width:100%;min-height:640px;''></iframe>"+
"</p>");
});
$(document).on('click','.delete_admin_form_admin', function(){
	var form_delete_id = $(this).attr('data-attr-id');
    $(this).parent().parent('tr').remove();
	  $.ajax({
  	headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('admin/form/delete') }}",
   method:"POST",
   data:{form_delete_id:form_delete_id},
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
   	$('.form_name_admin').val(data['data']['form_name']);
   	$('.edit_admin_id').val(data['data']['id']);
   }
  });

});
</script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="min-width: 700px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        </div>
      </div>
      
    </div>
  </div>
  
@endsection