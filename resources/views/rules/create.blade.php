  @extends('admin_layouts.layout')
@section('content')
<style type="text/css">

    .table-title .add-new .add-newtest {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new .add-newtest i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #7f2137;
    }
    table.table td a.delete {
        color: #E34724;
    }
    
     table.table td a.deletetiers {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}


/*addinsert table style*/
/* table.table td a.addinsert {
        color: #27C46B;
    }
    table.table td a.editinsert {
        color: #7f2137;
    }*/
    table.table td a.deleteinsert {
        color: #E34724;
    }
    
  
/*   
  table.table td a.addinsert i {
        font-size: 24px;
      margin-right: -1px;
        position: relative;
        top: 3px;
    }    
     table.table td .addinsert {
    display: none;
  }*/



/*end addinser tabel*/
/*new table add start onclick*/
table.test {
        table-layout: fixed;
    }
    table.test tr th, table.test tr td {
        border-color: #e9e9e9;
    }
    table.test th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.test th:last-child {
        width: 100px;
    }
    table.test td a {
    cursor: pointer;
        display: inline-block;
        margin: 0 5px;
    min-width: 24px;
    }    
  table.test td a.onclick {
        color: #27C46B;
    }
    table.test td a.onedit {
        color: #7f2137;
    }
    table.test td a.delete {
        color: #E34724;
    }
    table.test td a.deletetiersinsert {
        color: #E34724;
    }
    table.table td a.deletepercentageinsert {
        color: #E34724;
    }
    table.test td i {
        font-size: 19px;
    }
  table.test td a.onclick i {
        font-size: 24px;
      margin-right: -1px;
        position: relative;
        top: 3px;
    }    
      table.table td a.addpercentage {
        color: #27C46B;
    }
    table.table td a.editpercentage {
        color: #7f2137;
    }
    table.table td a.deletepercentage {
        color: #E34724;
    }
    table.test td i {
        font-size: 19px;
    }
  table.table td a.addpercentage i {
        font-size: 24px;
      margin-right: -1px;
        position: relative;
        top: 3px;
    }   
    table.test .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
  table.test .form-control.error {
    border-color: #f50000;
  }
  table.test td .onclick {
    display: none;
  }
  table.table td .addpercentage {
    display: none;
  }

/*new table add*/

	.table-bordered_rule thead
	{
		background:#85223a;
		color:#fff;
	}
		.table-bordered_rule thead tr th
	{
		color:#fff !important;
		font-weight:bold;
	}
</style>

 
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
 
 
  




	$(document).on("click", ".add", function(e){
    e.preventDefault();
    var rules = $(this).parent('td').siblings().children('input').val();
    
//    if ($(this).parent('td').siblings().children('input').val('') ) {
//     $('#err').addClass("error");
//    }
 
 
     var id = $(this).parent('td').siblings('td:nth-child(2)').children('input').val();
    
 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 

     $.ajax({
       
      type : "POST",
      // {{ csrf_token() }}
      url  :  "{{ url('/ajax') }}/"+ id,
      // url  :  "{{ url('/ajax') }}",
      // url: 'ajax/' + id,

      dataType : "JSON",
      data : {rules:rules,id:id},

      success: function(data){
        if(data.message)
        {
          $(".test1").append(data.message );
        }
         if(data.rulemessage)
         {
          $(".rulenulmessage").append(data.rulemessage);
         }
         if (data.messageinsert) {
          $(".insertmessage").append(data.messageinsert);
         }

          location.reload();
         

    
        console.log(data.rulemessage);

      }
    });




		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){

				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
		 
	
    });


	// Edit row on edit button click
	$(document).on("click", ".edit", function(){

        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" name="rules" id="err" class="form-control" value="' + $(this).text() + '">');


    

		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	

 });


$(document).on("click", ".delete", function(){
  var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
            if(!$(this).val()){
                $(this).addClass("error");
                empty = true;
            } else{
                $(this).removeClass("error");
            }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
            input.each(function(){
                $(this).parent("td").html($(this).val());
            });         
            $(this).parents("tr").find(".add").hide();
            $(this).parents("tr").find(".edit").show();
            $(".add-new").removeAttr("disabled");
        }  
    });


$(document).on("click", ".deleteinsert", function(){

   
   var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
            if(!$(this).val()){
                $(this).addClass("error");
                empty = true;
            } else{
                $(this).removeClass("error");
            }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
            input.each(function(){
                $(this).parent("td").html($(this).val());
            });         
            $(this).parents("tr").find(".add").hide();
            $(this).parents("tr").find(".edit").show();
            $(".add-new").removeAttr("disabled");
        } 
    });
</script>


 


 

<!-- start new script onclick -->

<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var actions = $("table td:last-child").html();
  // Append table with add row form on add new button click
    $(".add-newtest").click(function(){
    $(this).attr("disabled", "disabled");
    var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
      '<td>' + actions + '</td>' +
        '</tr>';
      $("table").append(row);   
    $("table tbody tr").eq(index + 1).find(".onclick, .onedit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
  // Add row on add button click
  $(document).on("click", ".onclick", function(){
    var type = $(this).parent('td').siblings().children('input').val();
    var start = $(this).parent('td').siblings('td:nth-child(2)').children('input').val();
    var end = $(this).parent('td').siblings('td:nth-child(3)').children('input').val();
    var percentage = $(this).parent('td').siblings('td:nth-child(4)').children('input').val();

var id = $(this).parent('td').siblings('td:nth-child(5)').children('input').val();
   
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
     $.ajax({
       
      type : "POST",
      // {{ csrf_token() }}
      url  :  "{{ url('/managetier') }}/" + id,
      // url: 'ajax/' + id,

      dataType : "JSON",
      data : {type:type,start:start,end:end,percentage:percentage},
      success: function(data){
          if(data.message)
        {
          $(".test2").append(data.message+'<i class="fa fa-times" id="updatecross" style="position"></i>' );
        }
         if(data.rulemessage)
         {
          $(".rulenulmessage2").append(data.rulemessage+'<i class="fa fa-times" id="nullcross" style="position"></i>');
         }
         if (data.messageinsert) {
          $(".insertmessage2").append(data.messageinsert+'<i class="fa fa-times" id="insertcross" style="position"></i>');
         }

         location.reload();
        console.log(data);

      },
      error: function (jqXHR, textStatus, errorThrown) { 

        errorFunction();

         }
    });

function errorFunction(type)
      { 
      var number = /^[0-9]+$/;
      if(type == number)
      {
      alert('Your name have accepted : you can try another');
      console.log('succes');
      return true;
      }
      else
      {
      alert('Please input numeric value');
      return false;
      }
      }

    var empty = false;
    var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
      if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
      } else{
                $(this).removeClass("error");
            }
    });
    $(this).parents("tr").find(".error").first().focus();
    if(!empty){
      input.each(function(){
        $(this).parent("td").html($(this).val());
      });     
      $(this).parents("tr").find(".onclick, .onedit").toggle();
      $(".add-newtest").removeAttr("disabled");
    }   
    });
  // Edit row on edit button click
  $(document).on("click", ".onedit", function(){    
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
      $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
    });   
    $(this).parents("tr").find(".onclick, .onedit").toggle();
    $(".add-newtest").attr("disabled", "disabled");
    });
});
  // Delete row on delete button click
 $(document).on("click", ".deletetiers", function(){
var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
            if(!$(this).val()){
                $(this).addClass("error");
                empty = true;
            } else{
                $(this).removeClass("error");
            }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
            input.each(function(){
                $(this).parent("td").html($(this).val());
            });         
            $(this).parents("tr").find(".onclick").hide();
            $(this).parents("tr").find(".onedit").show();
            $(".add-new").removeAttr("disabled");
        } 
    });
  $(document).on("click", ".deletetiersinsert", function(){
       
var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        // input.each(function(){
        //     if(!$(this).val()){
        //         $(this).addClass("error");
        //         empty = true;
        //     } else{
        //         $(this).removeClass("error");
        //     }
        // });
        // $(this).parents("tr").find(".error").first().focus();
        if(!empty){
            input.each(function(){
                $(this).parent("td").html($(this).val());
            });         
            $(this).parents("tr").find(".addpercentage").hide();
            $(this).parents("tr").find(".editpercentage").show();
            $(".add-new").removeAttr("disabled");
        } 
   
    });

</script>
<script type="text/javascript">
 
  $(document).on("click", "#updatecross", function(){


$('.test2').fadeOut();


  });  
  $(document).on("click", "#nullcross", function(){


$('.rulenulmessage2').fadeOut();


  });  
  $(document).on("click", "#insertcross", function(){


$('.insertmessage2').fadeOut();


  });  
</script>

<!-- 3rd Section -->
<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var actions = $("table td:last-child").html();
  // Append table with add row form on add new button click
    $(".add-new").click(function(){
    $(this).attr("disabled", "disabled");
    var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
      '<td>' + actions + '</td>' +
        '</tr>';
      $("table").append(row);   
    $("table tbody tr").eq(index + 1).find(".addpercentage, .editpercentage").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
  // addpercentage row on addpercentage button click
  $(document).on("click", ".addpercentage", function(){


   var dfrom = $(this).parent('td').siblings().children('input').val();
    var dayto = $(this).parent('td').siblings('td:nth-child(2)').children('input').val();
    var latefee = $(this).parent('td').siblings('td:nth-child(3)').children('input').val();
 
 
     var id = $(this).parent('td').siblings('td:nth-child(4)').children('input').val();
    
 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 

     $.ajax({
       
      type : "POST",
      // {{ csrf_token() }}
      url  :  "{{ url('/percent') }}/"+ id,
      // url  :  "{{ url('/percent') }}",
      // url: 'ajax/' + id,

      dataType : "JSON",
      data : {dfrom:dfrom,dayto:dayto,latefee:latefee,id:id},

      success: function(data){
        if(data.message)
        {
          $(".test3").append(data.message );
        }
         if(data.rulemessage)
         {
          $(".rulenulmessage3").append(data.rulemessage);
         }
         if (data.messageinsert) {
          $(".insertmessage3").append(data.messageinsert);
         }

          location.reload();
         

    
        console.log(data.rulemessage);

      }
    });






    var empty = false;
    var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
      if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
      } else{
                $(this).removeClass("error");
            }
    });
    $(this).parents("tr").find(".error").first().focus();
    if(!empty){
      input.each(function(){
        $(this).parent("td").html($(this).val());
      });     
      $(this).parents("tr").find(".addpercentage, .editpercentage").toggle();
      $(".add-new").removeAttr("disabled");
    }   
    });
  // editpercentage row on editpercentage button click
  $(document).on("click", ".editpercentage", function(){    
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
      $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
    });   
    $(this).parents("tr").find(".addpercentage, .editpercentage").toggle();
    $(".add-new").attr("disabled", "disabled");
    });
});
  // Delete row on delete button click
  $(document).on("click", ".deletepercentage", function(){
       
var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
            if(!$(this).val()){
                $(this).addClass("error");
                empty = true;
            } else{
                $(this).removeClass("error");
            }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
            input.each(function(){
                $(this).parent("td").html($(this).val());
            });         
            $(this).parents("tr").find(".addpercentage").hide();
            $(this).parents("tr").find(".editpercentage").show();
            $(".add-new").removeAttr("disabled");
        } 
   
    });


  $(document).on("click", ".deletepercentageinsert", function(){
       
var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        // input.each(function(){
        //     if(!$(this).val()){
        //         $(this).addClass("error");
        //         empty = true;
        //     } else{
        //         $(this).removeClass("error");
        //     }
        // });
        // $(this).parents("tr").find(".error").first().focus();
        if(!empty){
            input.each(function(){
                $(this).parent("td").html($(this).val());
            });         
            $(this).parents("tr").find(".addpercentage").hide();
            $(this).parents("tr").find(".editpercentage").show();
            $(".add-new").removeAttr("disabled");
        } 
   
    });
 

</script>
   <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="ecommerce-widget">

                        <div class="row">
                       
                        
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                          
                          
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                    <h5 class="label_rule_heading"> Manage Rules
</h5>  
<div class="col-md-12">
<div class="col-md-4"></div>
<div class="col-md-4" style="margin: 0 auto;">
<div class="test1   alert-danger" style="text-align: center;
    margin-bottom: 5px;" ></div>
<div class="rulenulmessage  alert-danger" style="text-align: center;
    margin-bottom: 5px;"  ></div>
    <div class="insertmessage  alert-danger" style="text-align: center;
    margin-bottom: 5px;"  ></div>
</div>
<div class="col-md-4"></div></div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if (Session::has('error'))
   <div class="alert alert-info">{{ Session::get('error') }}</div>
@endif
            <div class="col-sm-12">
            <table class="table table-bordered table-bordered_rule">
                <thead>
                    <tr>
                        <th>Rule Description	</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                @foreach($data as $ruledata)
                <tbody>
                    <tr>
                      
                    
                        <td>{{$ruledata->ruledescription}}</td>
                         <td style="display: none;">{{$ruledata->id}}</td>
                        <td>
                           
							<a class="add"   title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit"   title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <input type="hidden" name="" id="delete_id" value="{{$ruledata->id}}">
                       <a class="delete"  title="Cancel" data-toggle="tooltip"><i class="material-icons" >cancel</i></a>
                        </td>
                      
                    </tr>      
                </tbody>
                  @endforeach
                <tbody>
                    <tr>
                        <td> </td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a class="deleteinsert" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a>
                        </td>
                    </tr>      
                </tbody>
                <!-- <tbody>
                    <tr>
                        <td>On all VKP% over 50%, agent % reverts to lowest commission tier if billing falls in 3rd commission tier	</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a>
                        </td>
                    </tr>      
                </tbody>
             <tbody>
                    <tr>
                        <td>NO # reverts invoices to the lowest commission tier & does not increase monthly count. Invoices go into No # slots	</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a>
                        </td>
                    </tr>      
                </tbody> -->
              <!--   <tbody>
                    <tr>
                        <td>In Flat rate higher than 50% of Months rent, comm% applies	</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a>
                        </td>
                    </tr>      
                </tbody> -->
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
                            <div class="card card_address">
                                    <div class="card-body">
                                      <h5 class="label_rule_heading">Manage Tiers</h5>
     <div class="col-md-12">
<div class="col-md-4"></div>
<div class="col-md-4" style="margin: 0 auto;">
<div class="test2   alert-danger" style="text-align: center;
    margin-bottom: 5px;" ></div>
<div class="rulenulmessage2  alert-danger" style="text-align: center;
    margin-bottom: 5px;"  ></div>
    <div class="insertmessage2  alert-danger" style="text-align: center;
    margin-bottom: 5px;"  ></div>
</div>
<div class="col-md-4"></div></div>
            <div class="col-sm-12">
            <table class="table test table-bordered table-bordered_rule table_responsive2">
                <thead>
                    <tr>
                   			
                      <th> Tier Type </th>
                      <th>Tier Start </th>
                      <th>Tier End </th>
                      <th>Tier Percentage	</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                 @foreach($tiers as $tier)
                <tbody>
                    <tr>
                     
                      <td>{{$tier->tiertype}}</td>
                      <td class="test">{{$tier->tierstart}}</td>
                      <td>{{$tier->tierend}}</td>
                      <td>{{$tier->tierpercent}}</td>
                      <td style="display: none;">{{$tier->id}}</td>
                        <td>
 
							<a class="onclick" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="onedit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <input type="hidden" name="" id="deleteid" value="{{$tier->id}}">
                               <a class="deletetiers" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a>
                        </td>
                       
                    </tr>      
                </tbody>
                 @endforeach
                <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a class="onclick" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> <a class="onedit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a class="deletetiersinsert" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a></td>
                    </tr>      
                </tbody>
              <!--   <tbody>
                    <tr>
                      <td>Rent</td>
                      <td>1</td>
                      <td>12</td>
                      <td>50</td>
                      <td><a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a></td>
                    </tr>      
                </tbody> -->
                <!-- <tbody>
                    <tr>
                      <td>Sales</td>
                      <td>1</td>
                      <td>12</td>
                      <td>50</td>
                      <td><a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a></td>
                    </tr>      
                </tbody> -->
             <!--    <tbody>
                    <tr>
                      <td>Sales</td>
                      <td>1</td>
                      <td>12</td>
                      <td>50</td>
                      <td><a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a></td>
                    </tr>      
                </tbody> -->
             <!--    <tbody>
                    <tr>
                      <td>Office Manager Override</td>
                      <td>1</td>
                      <td>12</td>
                      <td>50</td>
                      <td><a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a class="delete" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a></td>
                    </tr>      
                </tbody> -->
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
                            <div class="card card_address">
                                    <div class="card-body">
                                      <h5 class="label_rule_heading">Manage Late Fee Percentage</h5>
                                      <div class="col-md-12">
<div class="col-md-4"></div>
<div class="col-md-4" style="margin: 0 auto;">
<div class="test3   alert-danger" style="text-align: center;
    margin-bottom: 5px;" ></div>
<div class="rulenulmessage3  alert-danger" style="text-align: center;
    margin-bottom: 5px;"  ></div>
    <div class="insertmessage3  alert-danger" style="text-align: center;
    margin-bottom: 5px;"  ></div>
</div>
<div class="col-md-4"></div></div>
     
            <div class="col-sm-12">
            <table class="table table-bordered table-bordered_rule table_responsive2">
                <thead>
                    <tr>	 
                   			
                      <th> Days From </th>
                      <th>Days To	 </th>
                      <th>Late Fee Percentage</th>
                      <th>	Edit	</th>
                       
                    </tr>
                </thead>
                @foreach($percentages as $percentage)
                <tbody>
                    <tr>
                      <td>{{$percentage->daysfrom}}</td>
                      <td>{{$percentage->daysto}}</td>
                      <td>{{$percentage->latefee}}</td>
                       <td style="display: none;">{{$percentage->id}}</td>
                        <td>
							<a class="addpercentage" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="editpercentage" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="deletepercentage" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a>
                        </td>
                    </tr>      
                </tbody>
                @endforeach
               
               
                <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a class="addpercentage" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> <a class="editpercentage" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a class="deletepercentageinsert" title="Cancel" data-toggle="tooltip"><i class="material-icons">cancel</i></a></td>
                    </tr>      
                </tbody>
                <tbody>      
                </tbody>
                <tbody>      
                </tbody>
            </table>
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
                @endsection