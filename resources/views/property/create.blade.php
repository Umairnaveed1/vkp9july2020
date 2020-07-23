@extends('admin_layouts.layout')
@section('content')

<style type="text/css">
  .btn_add_agent_manage2
{
    border: none;
    height: 50px;
    line-height: 20px;
}
.qeustionmark_icon {
    background-color: transparent !important;
    border: none;
    width: 20px !important;
    height: 20px !important;
}

.qeustionmark_icon img {
    width: 20px !important;
    height: 20px !important;
    margin-left: 0px !important;
    margin-top: -5px !important;
}
</style>
 

 

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
                <h2 class="pageheader-title">Add Property</h2>
              </div>
            </div>
          </div>
  
                          @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif
          <!--              @if($errors->has('propertyName'))
    <div class="error alert alert-danger">{{ $errors->first('propertyName') }}</div>
@endif -->

          <div class="ecommerce-widget">

            <div class="row"> 
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

   
                    <!-- Left Box Start -->
                    
                   

                    <div class="card card_address pl-3 pr-3">
                 
                      <div class="card-body">
                       <div class="add_property_w1">
                        <div class="cust_tbl_search text-right">
                          <form class="form-group mt-2 " method="POST" action="{{ route('property.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-12 col-xl-12">
                                <div class="row no-gutters">
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-3">
                                    <label for="email" class="col-md-12 align-self-center">Property Name :  
                                    <button type="button" class="qeustionmark_icon" data-toggle="modal" data-target="#myModal">
                                    <img src="{{asset('/public/assets/images/qeustionmark_icon.png')}}" width="28" height="28" alt=""></button>



                                    
                                    </label>
                                    <div class="col-md-12"> 
                                      <input type="text" class="form-control" id="email" name="propertyName" value="{{old('propertyName')}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Phone # :  </label>
                                    <div class="col-md-12">
                                      <input type="number" class="form-control" id="email" name="propertyphone" value="{{old('propertyphone')}}">
                                    </div>
                                  </div> 
                                </div> 
                              </div>
                              <div class="row no-gutters">
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-3">
                                    <label for="email" class="col-md-12 align-self-center">Property Address :   </label>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" id="email" name="propertyAd" value="{{old('propertyAd')}}">
                                    </div>
                                    
                                    <div class="col-md-6 pl-2">
                                   
                                      <input type="text" class="form-control" id="email" name="propertyAd" value="{{old('propertyAd')}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">FAX # :    </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="email" name="propertyFax" value="{{old('propertyFax')}}">
                                    </div>
                                  </div> 
                                </div> 
                                
                              </div>
                              <div class="row no-gutters">
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-3">
                                    <label for="email" class="col-md-12 align-self-center">Country :    </label>
                                    <div class="col-md-12">
                                     
                                     <select id="country" name="country"  class="form-control country" >
                                      <option value="" name="country" selected="" disabled="">select</option>
                                      @foreach($country as $key=>$countries)
                                     <option value="{{$key}}">{{$countries}}</option>
                                     @endforeach
                                     </select>
                                    </div>
                                    
                                    
                                  </div>
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Alt # :      </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="email" name="propertyAltNo">
                                    </div>
                                  </div> 
                                </div> 
                                
                              </div>
                              <div class="row no-gutters">
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-3">
                                    <label for="email" class="col-md-12 align-self-center">Select State :     </label>
                                    <div class="col-md-12">
                                    <select id="state" name="state"  class="form-control" >
                                   <option>Select</option>
                                     </select>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                 
                                    <div class="clear20"></div>
                                        <label for="email" class="col-md-12 p-0 align-self-center">Select City :        </label>
                                    <select id="city" name="city"  class="form-control" >
                                   <option>Select</option>
                                     </select>
                                    </div>
                                    <div class="col-md-12">
                                 
                                    <div class="clear20"></div>
                                        <label for="email" class="col-md-12 p-0 align-self-center">Zip :        </label>
                                    <select id="zipcode" name="zip"  class="form-control" >
                                     
                                     </select>
                                    </div>
                                    <div class="col-md-12">
                                 
                                    <div class="clear20"></div>
                                        <label for="email" class="col-md-12 p-0 align-self-center">MGT Company :          </label>
                                    <select name="mgt"  class="form-control" >
                                    
<option>-------------Select-------------</option>
@foreach($company_managment as $key=>$company)
    <option value="{{$key}}">{{$company}}</option>
   @endforeach
                                     </select>
                                    </div>
                                    
                                    
                                  </div>
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Email :        </label>
                                    <div class="col-md-12">
                                      <input type="email" class="form-control" id="email" name="email" value="{{old('propertyFax')}}">
                                    </div>
                                  </div> 
                                </div> 
                                
                              </div>
                            </div>
                            <div class="col-12 col-xl-12 p-0">
                              <div class="mt-3">
                            <button type="button" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn float-left" data-toggle="modal" data-target="#myModal_add_management">Add management Company</button>                       

                               </div> 
                            </div>
                            </div>
                          
                        </div> 
                      </div></div>
                    </div> 
                    
              
              </div>
            </div>
 @if(Session::has('submit'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('submit') }}</p>
@endif
            <div class="row">
              <div class="col-lg-6 col-12">
                <!-- Left Box End  -->
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                  <div class="add_property_w2">
                    <h5 class="text_address ">Where Should Invoices be sent:</h5>
                    <!-- <form action="{{route('post.invoice')}}" method="POST" enctype="multipart/form-data"> -->
                      <div class="row">
                        @csrf
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> Property
                              <input type="checkbox" name="invoices[]" value="Property">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        

                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="home_check"> Management Company
                              <input type="checkbox" name="invoices[]" value="Management Company">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-12">
                         <div class="clear10"></div>
                        <h5 class="text_address ">Where Should Invoices be sent:</h5>
                    
                        <div class="clear10"></div>
                            </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="home_check"> An AutoPay?
                              <input type="checkbox" name="invoices[]" value="An AutoPay?">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check">A Real Estate Company that we will owe a Co-Broke to?
                              <input type="checkbox" name="invoices[]" value="A Real Estate Company that we will owe a Co-Broke to?">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> A Real Estate Company we are billing for payment of a commission?
                              <input type="checkbox" name="invoices[]" value="A Real Estate Company we are billing for payment of a commission?">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> The owner of a single family property or real estate listing?
                              <input type="checkbox" name="invoices[]" value="The owner of a single family property or real estate listing?">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div> 
                        
                      </div> 
                      
                    
                  </div>   </div>
                </div>  
                 
                 
                
              </div> 
              <div class="col-lg-6 col-12">
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body"> 
                  <h5 class="text_address ">
Attachment :</h5>

<input name="file" type="file">
<div class="col-sm-12 p-0">
<div class="mt-3 p-0">
                            <!--     <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn float-left">Upload</button> -->
                               </div></div>
                     
                  </div>
                </div>  
              </div> 
            </div> 
            <div class="clearfix"></div> 
          </div>

        </div>




      </div>
      
      <div class="col-sm-12 text-left">

             <!--  <a href="#" class="btn_add_agent btn_add_agent_active"> Submit</a> -->
 <button type="submit" class="btn_add_agent btn_add_agent_manage2 btn_add_agent_active" >Submit</button>
            <a href="#" class="btn_add_agent "> Cancel</a>
            
            <div class="clear20"></div>
               
            <div class="clear20"></div>
            </div>
</form>
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
        If you are entering a real estate company the property name would be the real estate company name and the property address would be the address where we would send invoices or checks. If this is the case please select real estate company from the management company drop down list.
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>


<div class="modal" id="myModal_add_management">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Management Company</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <span class="alert-danger" id="textsubmit" style="text-align: center;"></span>

      <!-- Modal body -->
      <div class="modal-body">
      <!--   <form id="#" method="POST" action=""> -->
        <form class="form-group mt-2 "  id="uploaddata"   enctype="multipart/form-data">


          @csrf
       <div class="col-sm-12">
       <div class="row">
       <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">MGT Company :    </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="company_name" name="company_name" required="">
                                    </div>
                                  </div> 
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Office Address :   </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="office" name="office" required="">
                                      <div class="clear5"></div>
                                       <input type="text" class="form-control" id="officeaddress" name="officeaddress">
                                    </div>
                                  </div> 
                                </div>
       </div>
       
       <div class="row">
       <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Country :      </label>
                                    <div class="col-md-12">
                                   <select id="country2" name="country2"  class="form-control country2" required="">
                                      <option    selected="" disabled="">select</option>
                                      @foreach($country as $key=>$countries)
                                     <option value="{{$key}}">{{$countries}}</option>
                                     @endforeach
                                     </select>
                                    </div>
                                  </div> 
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">State :    </label>
                                    <div class="col-md-12">
                                     <select id="state2" name="state2"  class="form-control state2" required="" >
                                   <option>Select</option>
                                     </select>
                                    </div>
                                  </div> 
                                </div>
       </div>
       <div class="row">
       <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">City :       </label>
                                    <div class="col-md-12">
                                       <select id="city2" name="city2"  class="form-control city2" required="" >
                                   <option>Select</option>
                                     </select>
                                    </div>
                                  </div> 
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Zip Code :     </label>
                                    <div class="col-md-12">
                                      <select id="zipcode2" name="zipcode2"  class="form-control zipcode2" required="">
                                     
                                     </select>
                                    </div>
                                  </div> 
                                </div>
       </div>
       <div class="row">
       <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Phone # :          </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="phoneno" name="phoneno">
                                    </div>
                                  </div> 
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">FAX # :        </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="fax" name="fax" required="">
                                    </div>
                                  </div> 
                                </div>
       </div>
       <div class="row">
       <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Alt # :            </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" id="alt" name="alt">
                                    </div>
                                  </div> 
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Email :          </label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control email" id="email" name="email">
                                    </div>
                                  </div> 
                                </div>
                                <div class="col-md-6 text-left p-1">
                                  <div class="row no-gutters mr-2">
                                    <label for="email" class="col-md-12 align-self-center">Attachment :         </label>
                                    <div class="col-md-12">
                                      <input name="file" class="form-control file" id="file" type="file"  required="">
                                    </div>
                                  </div> 
                                </div>
                               
                                <div class="col-sm-12 text-left">
 <div class="clear20"></div>
            <!--   <a href="javascript:void(0);" class="btn_add_agent" id="btnAdd"> Submit</a> -->
              <button type="submit" class="btn_add_agent btn_add_agent_manage2 btn_add_agent_active" id="btnAdd">Submit</button>

           <!--  <a href="#" type="reset" class="btn_add_agent "> Cancel</a> -->
              <button type="reset" class="btn_add_agent btn_add_agent_manage2" >Cancel</button>
            
          
            </div>
       </div>
       
       <!-- <span id="textsubmit"></span> -->
       
        </div>
       
       
       </form>
       
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>





<script type="text/javascript">
   $('#country').change(function(){
    var countryID = $(this).val();    
 
 
    if(countryID){
        $.ajax({
           type:"GET",
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
           type:"GET",
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
           type:"GET",
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
</script>










<script type="text/javascript">
   $('.country2').change(function(){
    var countryID = $(this).val();    
 
 
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){     

            if(res){
                $(".state2").empty();
                $(".state2").append('<option>Select</option>');
                $.each(res,function(key,value){
               
                    $(".state2").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $(".state2").empty();
            }
           }
        });
    }else{
        $(".state2").empty();
        $(".city2").empty();
    }      
   });
   $('.state2').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("city2").empty();
               
                $.each(res,function(key,value){
                    $(".city2").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $(".city2").empty();
            }
           }
        });
    }else{
        $(".city2").empty();
        $(".zipcode2").empty();
    }
        
   });
   $('.city2').on('change',function(){
    var cityID = $(this).val();    
    if(cityID){
        $.ajax({
           type:"GET",
           url:"{{url('get-zipcode-list')}}?city_id="+cityID,
           success:function(res){               
            if(res){
                $(".zipcode2").empty();
                $.each(res,function(key,value){
                    $(".zipcode2").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $(".zipcode2").empty();
            }
           }
        });
    }else{
        $(".zipcode2").empty();
    }
        
   });
</script>
 <script type="text/javascript">
    $('#uploaddata').on('submit', function(event){
event.preventDefault();

 


   $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{url('comapnysubmit')}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $("#textsubmit").append(data.messageinsert)
    console.log(data.messageinsert)

     $("#company_name").val("");
          $("#officeaddress").val("");
          $("#office").val("");
          $(".country2").val("");
          $(".state2").val("");
          $(".city2").val("");
          $(".zipcode2").val("");
          $("#phoneno").val("");
          $("#fax").val("");
          $("#alt").val("");
          $(".email").val("");
          $(".file").val("");
 
   }
  });
  
});




 
 






 

 </script>

  
@endsection