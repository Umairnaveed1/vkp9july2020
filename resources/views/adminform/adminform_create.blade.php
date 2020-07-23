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
                                                                                <select name="" id="officedetail" class="form-control">
                                                                                    @foreach($offices as $office)
                                                                                    <option value="{{$office->id}}">
                                                                                        {{$office->office_description}}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 text-left mb-2 pre-scrollable" id="agentofficedetail" style="display:none">

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
            <script type="text/javascript">
                $(document).ready(function() { 
                $("#officedetail").change(function(){
                        //alert('helo');
              
               var agentId=$(this).val();
               var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    //alert(propertyId);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 

    $.ajax({

        type : 'POST',
        url: '{{ route('compnay.agentsdetail') }}',
        dataType : "JSON",
        data : {agentId:agentId},
        success: function(data){ 
            console.log(data);



            //alert(data);
        //return false;
        // console.log();



        if(data['htmldata']!='')
        {
            $("#agentofficedetail").show();
            $("#agentofficedetail").html(data['htmldata']);
        }
        else if(empty(data['htmldata']))
        {
            alert('record does not exist');
        }
        else
        {

            $("#agentofficedetail").hide();   
        }


    }
}); 

});
});
</script>
<script>
    $(document).ready(function(){

       $('#admin_form_submit').on('submit', function(event){
         // event.preventDefault();
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
  

      </div>
      <div class="modal-body">
      </div>
  </div>

</div>
</div>


@endsection