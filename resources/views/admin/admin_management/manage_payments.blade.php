        @extends('admin_layouts.layout')

 -->
            <!-- footer -->

    //               $(".errertest").html("");
    alert("Error this number Invoice is not exist!.");
    // $('.errertest').append('Not exist!');
  }

});





        })

      </script>

      <script type="text/javascript">
       $('#view_invoice').on('click',function (e) {
        e.preventDefault();
        var invid =$('#invoice_number').val();
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:"{{url('viewinvoice')}}"+'/'+invid,
          method:"GET",
          data:{invid:invid},

          success:function(data){


           $('.inv_view').html("");

           $('.inv_view').append('<tr>'+
            '<td width="8%" align="left" scope="row"></td>'+
            '<td width="8%" align="left" id="propertyName">'+'Not Paid'+'</td>'+
            '</tr>'+
            ' <tr>'+
            ' <td width="8%" align="left" scope="row">'+'Invoice Date :'+'</td>'+
            '<td width="8%" align="left" id="propertyName">'+data['data'][0]['invoice_date']+'</td>'+
            '</tr>'+

            '<tr>'+
            '<td align="left" scope="row">'+'Lease Start :'+'</td>'+
            ' <td align="left" id="Address">'+data['data'][0]['LeaseStartDate']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Lease Term :'+'</td>'+
            ' <td align="left" id="unit">'+data['data'][0]['Leaseterm']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Verifier :'+'</td>'+
            '<td align="left" id="state">'+data['data'][0]['Verifier']+'</td>'+
            ' </tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Inv. Maker :'+   
            '</td>'+
            '<td align="left" id="city">'+data['data'][0]['InvMakerId']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Rent :'+'</td>'+
            '<td align="left" id="zip">'+data['data'][0]['Rent']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Bonus :'+'</td>'+
            '<td align="left" id="movein">'+data['data'][0]['Bonus']+'</td>'+
            ' </tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'VKP % :'+'</td>'+
            '<td align="left">'+data['data'][0]['VKPPercentage']+'</td>'+
            '</tr>' +
            '<tr>'+
            '<td align="left" scope="row">'+'Flat Rate :'+ '</td>'+
            '<td align="left" id="mcno">'+data['data'][0]['FlatRate']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Amount due to VKP :'+'</td>'+
            ' <td align="left" id="daterecievd">'+data['data'][0]['AmountDueToVKP']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Ist Agent :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['FirstagentId']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'No # :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['NoNumber']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Advance :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['Advance']+'</td>'+
            '</tr>'+

            ' <tr>'+
            ' <td align="left" scope="row">'+'Monthly Adv. Count :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['MontlyAdvanceCount']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Due to Ist Agent :' +'</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['DueToFirstAgent']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'VKP Split :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['VKPSplit']+'</td>'+
            ' </tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'2nd Agent :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['SecondAgentID']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Due to 2nd :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['DueToSecondAgent']+'</td>'+
            '</tr>'+
            '  <tr>'+
            '<td align="left" scope="row">'+'50 / 50 Split :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['FiftyFiftySplit']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Legal :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['Legal']+'</td>'+
            '</tr>'+
            ' <tr>'+
            '<td align="left" scope="row">Adjust Comm. : </td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['AdjustCommission']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'No Pay :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['NoPay']+'</td>'+
            '</tr>'+
            ' <tr>'+
            '<td align="left" scope="row">'+'Type :'+ '</td>'+
            '<td align="left" id="ammount">'+'null'+'</td>'+
            '  </tr>'+

            ' <tr>'+
            '<td align="left" scope="row">'+'&nbsp;'+'</td>'+
            '<td align="left">&nbsp;</td>'+
            '</tr>');


        $('#myModal_pendingfee').modal('show');



      },error: function (jqXHR, status, err) {

        alert("Error this number Invoice is not exist!.");

      }

    });





      })

    </script>

   <!--  <script type="text/javascript">
      
      $.ajaxSetup({
          headers:{
        'X-CSRF-TOKEN' : $('meta(name="csrf-token")').attr('content');
          }
      });

      $('#paymentInvoiceForm').submit(function(){

          e.preventDefault();

          var data = $(this).serialize();
          var invoicedate = $('inout[name=invoicedate]').val();
          var comdue = $('input[name=comdue]').val();
          var latefees = $('input[name=latefees]').val();
          var AmountPaid = $('inout[name=AmountPaid]').val();
          var AmountPaid = $('inout[name=AmountPaid]').val();

          var url = '{{ url('postinsert') }}';
          $.ajax({

            url:url,
            method:post,
            data:{

              invoicedate:invoicedate,
              comdue:comdue,
              latefees:latefees,
              AmountPaid:AmountPaid
            },
            success:function(response){
              if(response.success)
              {
                  alert(response.message);
              }
              else
              {
                  alert('error');
              }
            },
            error:function(error)
            {
              console.log(error);
            }
          });

      });
    </script> -->
    <script type="text/javascript">
      function viewfunction(id) {
        var invid = id;

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:"{{url('viewinvoice')}}"+'/'+invid,
          method:"GET",
          data:{invid:invid},
          success:function(data)
          {
           $('.inv_view').html("");

           $('.inv_view').append('<tr>'+
            '<td width="8%" align="left" scope="row"></td>'+
            '<td width="8%" align="left" id="propertyName">'+'Not Paid'+'</td>'+
            '</tr>'+
            ' <tr>'+
            ' <td width="8%" align="left" scope="row">'+'Invoice Date :'+'</td>'+
            '<td width="8%" align="left" id="propertyName">'+data['data'][0]['invoice_date']+'</td>'+
            '</tr>'+

            '<tr>'+
            '<td align="left" scope="row">'+'Lease Start :'+'</td>'+
            ' <td align="left" id="Address">'+data['data'][0]['LeaseStartDate']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Lease Term :'+'</td>'+
            ' <td align="left" id="unit">'+data['data'][0]['Leaseterm']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Verifier :'+'</td>'+
            '<td align="left" id="state">'+data['data'][0]['Verifier']+'</td>'+
            ' </tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Inv. Maker :'+   
            '</td>'+
            '<td align="left" id="city">'+data['data'][0]['InvMakerId']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Rent :'+'</td>'+
            '<td align="left" id="zip">'+data['data'][0]['Rent']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Bonus :'+'</td>'+
            '<td align="left" id="movein">'+data['data'][0]['Bonus']+'</td>'+
            ' </tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'VKP % :'+'</td>'+
            '<td align="left">'+data['data'][0]['VKPPercentage']+'</td>'+
            '</tr>' +
            '<tr>'+
            '<td align="left" scope="row">'+'Flat Rate :'+ '</td>'+
            '<td align="left" id="mcno">'+data['data'][0]['FlatRate']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Amount due to VKP :'+'</td>'+
            ' <td align="left" id="daterecievd">'+data['data'][0]['AmountDueToVKP']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Ist Agent :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['FirstagentId']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'No # :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['NoNumber']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Advance :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['Advance']+'</td>'+
            '</tr>'+

            ' <tr>'+
            ' <td align="left" scope="row">'+'Monthly Adv. Count :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['MontlyAdvanceCount']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Due to Ist Agent :' +'</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['DueToFirstAgent']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'VKP Split :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['VKPSplit']+'</td>'+
            ' </tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'2nd Agent :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['SecondAgentID']+'</td>'+
            '</tr>'+
            '<tr>'+
            ' <td align="left" scope="row">'+'Due to 2nd :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['DueToSecondAgent']+'</td>'+
            '</tr>'+
            '  <tr>'+
            '<td align="left" scope="row">'+'50 / 50 Split :'+ '</td>'+
            '<td align="left" id="ammount">'+data['data'][0]['FiftyFiftySplit']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'Legal :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['Legal']+'</td>'+
            '</tr>'+
            ' <tr>'+
            '<td align="left" scope="row">Adjust Comm. : </td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['AdjustCommission']+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td align="left" scope="row">'+'No Pay :'+ '</td>'+
            ' <td align="left" id="ammount">'+data['data'][0]['NoPay']+'</td>'+
            '</tr>'+
            ' <tr>'+
            '<td align="left" scope="row">'+'Type :'+ '</td>'+
            '<td align="left" id="ammount">'+'null'+'</td>'+
            '  </tr>'+

            ' <tr>'+
            '<td align="left" scope="row">'+'&nbsp;'+'</td>'+
            '<td align="left">&nbsp;</td>'+
            '</tr>');


        $('#myModal_pendingfee').modal('show');


      }
    });



      }
    </script>
    <script>
//-----------------
$(document).ready(function(){
$('#send_form').click(function(e){
   e.preventDefault();
   /*Ajax Request Header setup*/
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

   $('#send_form').html('Post');
   
   /* Submit form data using ajax*/
   $.ajax({
      url: "{{ url('jquery-ajax-paymentpost-submit')}}",
      method: 'post',
      data: $('#paymentInvoiceForm').serialize(),
      success: function(response){
      
        if(response.id)
        {
          alert('record already exist');
        }
       


      
         //------------------------
            $('#send_form').html('Submit');
            $('#res_message').show();
            $('#res_message').html(response.msg);
            $('#msg_div').removeClass('d-none');

            
             e.preventDefault();
              $('#testimonialOpen').dialog('open');
          

            document.getElementById("paymentInvoiceForm").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();
            },10000);
         //--------------------------
      }});
   });
});
//-----------------
</script>
   
   
    <script type="text/javascript">




      $(document).on("click","#tt",function(e) {
       e.preventDefault();

       $(this).closest("tr").remove();

     })


//   $(document).on("click","#editable",function(e) {
//      e.preventDefault();
// $('#add').attr('contenteditable', true);


// })
$(document).on("click", "#editable", function(){
  var d=$(this).parents("tr").children('td').siblings('td:nth-child(9)').val();
  

  $(this).parents("tr").children('td').siblings('td:nth-child(9)').each(function(){
    $(this).html('<input type="text" name="rules" id="err" class="form-control" value="' + $(this).text() + '" style="width: 50px;">');


    

  });     
  $(this).parents("tr").children('td').find(".add").show();
  $(this).parents("tr").children('td').find(".edit").hide();

});

$(document).on("click", ".cancel", function(){


  var empty = false;
  var input =        $(this).parents("tr").children('td').siblings('td:nth-child(9)').find('input[type="text"]');
  input.each(function(){
    if(!$(this).val()){
      $(this).addClass("error");
      empty = true;
    } else{
      $(this).removeClass("error");
    }
  });
  $(this).parents("tr").children('td').siblings('td:nth-child(9)').find(".error").first().focus();
  if(!empty){
    input.each(function(){
      $(this).parents("tr").children('td').siblings('td:nth-child(9)').html($(this).val());
    });         
    $(this).parents("tr").children('td').find(".add").hide();
    $(this).parents("tr").children('td').find(".edit").show();

  }












});



function latefee(id) {
  var feeid = id;
  alert(id);
}
</script>
@endsection
