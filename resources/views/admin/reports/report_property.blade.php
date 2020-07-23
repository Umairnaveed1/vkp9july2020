@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
  <div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">

      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
            <h2 class="pageheader-title">Property Report </h2>


          </div>
        </div>
      </div>
      <div class="ecommerce-widget">

        <div class="row">



          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">                          

            <div class="mrg_addres_area">
              <div class="col-sm-12">

                <div class="row">
                  <div class="col-sm-12 col-12">
                    <div class="card card_address">
                      <div class="card-body">
                        <div class=" col-12">
                         <div class=" property_report_w">
                          <form action="/action_page.php">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check">All Properties
                                    <input type="checkbox" id="allproperties" checked/>
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="sel1">Property Name :</label>
        <select class="InputField form-control cust_frm_cntrl" id="propertyselect" disabled >
                                    @foreach($propertyreport  as $key => $propertyName)
                                    <option value="{{$key}}"> {{$propertyName}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                              <div class="col-sm-12"> <h5> (Property Flags)</h5></div>


                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> AutoPay
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>


                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> SlowPay
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> Not Advancable
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> Do Not Place
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check">  No Contract
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">



                               <div class="form-group">
                                <label class="home_check">Real Estate Company
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div> 
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="home_check">Show all flags
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="home_check"> Unpaid Balances 
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                  <label class="home_check"> Unpaid
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div></div>
                                <div class="col-md-6">    <input name="" class="form-control" type="text"> </div>
                              </div></div>
                              <div class="col-md-12">
                                <div class="row">
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="home_check"> Deliquent	
                                      <input type="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div></div>
                                  <div class="col-md-6">    <input name="" class="form-control" type="text"> </div>
                                </div></div>



                              </div> 

                            </form>
                          </div></div>







                          <div class="col-sm-12">

                          </div>


                        </div>
                      </div>
                    </div>




                  </div>


                </div>

              </div>

      <button  type="button" id="reportid"  class="btn btn-space btn_promary_custom float-left ">View Report</button>
             
              <button type="submit" class="btn btn-space btn_promary_custom float-left">Print</button>
              <button type="submit" class="btn btn-space btn_promary_custom float-left">Cancel</button>


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
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>


<style>
  .property_report_w
  {
   width:300px;
   margin:auto;
 }
 @media (min-width: 320px) and (max-width: 576px){
  .property_report_w
  {
   width:100%;
   margin:auto;
 }	


}
</style>



<script>

  $('#propertyselect').change(function(){
    //alert('test the description');

     $('#reportid').val($(this).val());

  });

  $('#allproperties').change(function(){
   $('.InputField').attr('disabled',this.checked);
   $('.InputField').val($(this).val());
 });

  $('.datepicker').datepicker().on('changeDate', function(){

    $(this).blur();
  });
   // start  property id 
  $(document).ready(function () {
    $('.InputField').change(function () {

        $('#txtID').val($(this).val());
       
    });

    
})
  // end property id
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#reportid').on('click',function (e) {
    e.preventDefault();
    var reportID = $('#propertyselect').val();

    $.ajax({
      alert('showalert');
                
    url: "{{url('admin/propertyreport/print-pdf')}}"+'/'+reportID,
                method: 'GET',
                headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                data:{reportID:reportID} ,
        
                success:function(data){
                
                console.log(data);
 
                $('body').html(data);
                 

                },
                error: function (jqXHR, status, err) {
                  $(".errertest").html("");
    alert("rECORD DOES NOT EXIST!.");
    $('.errertest').append('Not exist!');
  }

            });
     
})
});
 
</script>

@endsection