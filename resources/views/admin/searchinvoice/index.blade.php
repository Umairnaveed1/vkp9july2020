@extends('admin_layouts.layout')
@section('content')

    

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> SEARCH INVOICES </h2>
                              
                                
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
                                 
                                    <form action="" method="">

                    <div class="col-md-12 col-12">
                        <div class="row">


                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="text">Invoice # :	</label>
                        <div class="">
                            <input type="number" id="search"   data-parsley-maxlength="8" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                        <div class="form-group ">
                            <label for="sel1">Property Name :	</label>
                            <div class="">
                                <select class="form-control cust_frm_cntrl"   id="sel1">
                                    <option>-----Select-----</option>
                                   @foreach($property as $property_list)
                                   <option value="$property_list" >{{$property_list}}</option>
                                   @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group ">
                        <label class="home_check"> &nbsp
                        <input type="checkbox">Unpaid Invoices
                        <span class="checkmark"></span>
                        </label>
                    </div>
                    </div>
                    <div class="col-lg-6 col-12">
                            <div class="form-group ">
                                <label for="sel1">Management Company :	</label>
                                <div class="">
                                    <select class="form-control cust_frm_cntrl" id="sel1">
                                        <option>----Select----</option>
                                        @foreach($mgmt_company as $company_list)
                                   <option value="{{$company_list}}">{{$company_list}}</option>
                                   @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-6 col-12">
                    <div class="form-group  ">
                        <label class="home_check"> Paid Invoices
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                    </div>
                    </div>
                    <div class="col-lg-6 col-12">
                            <div class="form-group ">
                                <label for="text">Address :	</label>
                                <div class="">
                                    <input type="text"  data-parsley-maxlength="8" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group ">
                        <label for="text">Invoice Amount :	</label>
                        <div class="">
                            <input type="number"  data-parsley-maxlength="8" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-12">
                        <div class="form-group ">
                            <label for="text">Unit :	</label>
                            <div class="">
                                <input type="text"  data-parsley-maxlength="8" placeholder="" class="form-control">
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group ">
                        <label for="text">CHK# / MO#:	</label>
                        <div class="">
                            <input type="number"  data-parsley-maxlength="8" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>
                    
                                    
                                        <div class="col-lg-6 col-12">
                                    <div class="form-group ">
                                        <label for="text">City :	</label>
                                        <div class="">
                                            <input type="text"  data-parsley-maxlength="8" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                </div>
                                    <div class="col-lg-6 col-12">
                                    <div class="form-group ">
                                        <label for="text">Zip :	</label>
                                        <div class="">
                                            <input type="number"  data-parsley-maxlength="8" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                        </div>
                
                    <!-- <div class="col-12">
                    <div class="form-group row text-left">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                            <button type="submit" class="btn btn-space btn_promary_custom">View</button>
                            <button type="submit" class="btn btn-space btn_promary_custom">Add</button>
                            <button class="btn btn-space btn_promary_custom">Search</button>
                        </div>
                    </div>
                </div> -->
                </div>
                               




                                
     
            <div class="col-sm-12">
            
            </div>
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          
                                               <!-- Six Six Section -->

                <div class="col-12">
                    <div class="row">
                    <div class="col-lg-6 col-12 pl-0">
                    <div class="card card_address pl-3 pr-3">
                        <div class="card-body">
                            <h5 class="text_address mb-0">Types</h5>
                      
                                <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Apartment
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Home Lease
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Home Sale
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Charge Back
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Advance Paid
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                 <div class="clear20"></div>
                                <div class="form-group ">
                                    <label for="sel1">Agent Name :	</label>
                                    <div class="">
                                        <select class="form-control cust_frm_cntrl" id="sel1">
                                            <option>Select</option>
                                            @foreach($agent as $agent_list)
                                   <option value="{{ $agent_list }}">{{$agent_list}}</option>
                                   @endforeach
                                          </select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-12">
                                    <div class="form-group ">
                                        <label for="text">Tenant Name :	</label>
                                        <div class="">
                                            <input type="text"lass="tenant_name" c data-parsley-maxlength="8" placeholder="" class="form-control">
                                        </div>
                                    </div>
                            </div>

                            </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pl-0">
                        <div class="card card_address pl-3 pr-3">
                            <div class="card-body">
                                <h5 class="text_address mb-0">Dates</h5>
                              
                                    <div class="row ">

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Invoice Date
                                            <input type="checkbox" name="">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group ">
                                                <label for="sel1">Between	</label>
                                                <div class="">
                                                    <input type="text" id="datepicker1" class="search_from" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group ">
                                                <label for="sel2">&nbsp	</label>
                                                <div class="">
                                                    <input type="text" id="datepicker2" class="search_to" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <label class="home_check"> Move in Dates
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                   
                                            <div class="col-xl-6 col-12">
                                                <div class="form-group ">
                                                    <label for="sel3">Between	</label>
                                                    <div class="">
                                                        <input id="datepicker3" />
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-xl-6 col-12">
                                                <div class="form-group ">
                                                    <label for="sel4">&nbsp	</label>
                                                    <div class="">
                                                        <input id="datepicker4" />
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                             <div class="row">
                                            
                                            <div class="col-lg-12 col-md-12">
                                        <div class="form-group ">
                                        <label class="home_check"> Date Paid
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                            
                                            
                                                <div class="col-xl-6 col-12">
                                                <div class="form-group ">
                                                    <label for="sel5">Between	</label>
                                                    <div class="">
                                                        <input type="text" id="datepicker11" />
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-xl-6 col-12">
                              <div class="form-group ">
                                                    <label for="sel4">&nbsp	</label>
                                                    <div class="">
                                                        <input id="datepicker12" />
                                                    </div>
                                                </div>
                                            </div>
                                   </div>
                             </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>

                </div>
                </div>  
                          
                          
                          <div class="col-lg-12 col-12 pl-0">
                        <div class="card card_address pl-3 pr-3">
                            <div class="card-body">
                                <h5 class="text_address mb-0">SEARCH CRITERIA </h5>
                                    <div class="row ">

                                    <div class="col-lg-2 col-md-3">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Auto Pay       
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> No Contract               
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Do Not Place             
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Not Advanceable              
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check">Slow Pay         
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                          
                          
                          
                <div class="col-12">
                    <div class="row mb-4 mt-md-3">
                        <div class="col-sm-12">
                        <a type="submit" id="search_btn_one" class="search_btn btn_add_agent" style="color: #fff !important;">Begin Find</a>

                        <button type="cancel"  class="btn btn-space btn_promary_custom btn_add_agent">New Search</button>
                        
                        <a href="#" class="btn_add_agent"> Print</a>
                        
                        <a href="#" class="btn_add_agent"> Cancel</a>
                        </form>
                        
                        </div> 
                        </div>  
                </div>    
                  <div class="clearfix"></div>               
                  </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                   
                    <div class="ecommerce-widget">

                        <div class="row">
                       
                        
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                                                   
                          <div class="mrg_addres_area">
                          <div class="col-sm-12">
                         
                            <div class="row">
                            <div class=" col-12">
                            <div class="">
                                    <div class="card-body add_office_cardbody search_inovice_w">
                                 

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
                                                <th width="13%" scope="col">Invoice Date</th>
                                                <th width="18%" scope="col">Invoice No</th>
                                                <th width="18%" scope="col">Agent</th>
                                                <th width="13%" scope="col">Comissione</th>
                                                <th width="18%" scope="col">NoPay</th>
                                                <th width="16%" scope="col">Active</th>
                                                <th width="16%" scope="col">Property Name</th>
                                                <th width="10%" scope="col">Tenant Name</th>
                                                <th width="11%" scope="col">Tenant Unit No</th>
                                                <th width="12%" scope="col">Rent</th>
                                                <th width="11%" scope="col">Leaseterm</th>
                                              
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
        $('.search_btn').on('click', function(){
var search_from = $('.search_from').val();
var search_to = $('.search_to').val();
$('.append_searh').html('');
$.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('searchinvoice/get_search') }}",
   method:"POST",
   data:{search_from:search_from,search_to:search_to},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
$('.append_searh').append('<tr>'+
                                                '<td>'+v['invoice_date']+'</td>'+
                                                '<td>'+v['id']+'</td>'+
                                                '<td>'+v['agents']['agentfirstname']+'</td>'+
                                                '<td>'+v['AdjustComission']+'</td>'+
                                                '<td>'+v['NoPay']+'</td>'+
                                                '<td>'+v['Active']+'</td>'+                                                
                                                '<td>'+v['inv_property']['propertyName']+'</td>'+
                                                '<td>'+v['TenantNames']+'</td>'+
                                                '<td>'+v['TenantUnitNo']+'</td>'+
                                                '<td>'+v['Rent']+'</td>'+
                                                '<td>'+v['Leaseterm']+'</td>'+
                                           
                                            '</tr>');
    });
    $('.search_row').show();
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
   url:"{{ url('searchinvoice/get_search_first') }}",
   method:"POST",
   data:{search_from:search_from},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
$('.append_searh').append('<tr>'+
                                                '<td>'+v['invoice_date']+'</td>'+
                                                '<td>'+v['id']+'</td>'+
                                                '<td>'+v['agents']['agentfirstname']+'</td>'+
                                                '<td>'+v['AdjustComission']+'</td>'+
                                                '<td>'+v['NoPay']+ '</td>'+
                                                '<td>'+v['Active']+'</td>'+ 
                                                '<td>'+v['inv_property']['propertyName']+'</td>'+
                                                '<td>'+v['TenantNames']+'</td>'+
                                                '<td>'+v['TenantUnitNo']+'</td>'+
                                                '<td>'+v['Rent']+'</td>'+
                                                '<td>'+v['Leaseterm']+'</td>'+
                                       
                                            '</tr>');
    });
    $('.search_row').show();
   }
  });
});


$('#search_btn_one').on('click', function(){
var tenant_name = $('.tenant_name').val();
$('.append_searh').html('');
$.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{ url('searchinvoice/get_tenant') }}",
   method:"POST",
   data:{tenant_name :tenant_name},
   success:function(data)
   {
    $.each(data['data'], function(i,v){
$('.append_searh').append('<tr>'+
                                                '<td>'+v['invoice_date']+'</td>'+
                                                '<td>'+v['id']+'</td>'+
                                                '<td>'+v['agents']['agentfirstname']+'</td>'+
                                                '<td>'+v['AdjustComission']+'</td>'+
                                                '<td>'+v['NoPay']+ '</td>'+
                                                '<td>'+v['Active']+'</td>'+ 
                                                '<td>'+v['inv_property']['propertyName']+'</td>'+
                                                '<td>'+v['TenantNames']+'</td>'+
                                                '<td>'+v['TenantUnitNo']+'</td>'+
                                                '<td>'+v['Rent']+'</td>'+
                                                '<td>'+v['Leaseterm']+'</td>'+
                                       
                                            '</tr>');
    });
    $('.search_row').show();
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
    </script>
    <script>
        $('#datepicker3').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
        $('#datepicker4').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
        <script>
            $('#datepicker5').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>
        <script>
            $('#datepicker6').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>
 <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script> 


<style>
@media (min-width: 320px) and   (max-width: 1100px){
.search_inovice_w
{
	width:98%;
}
}
/*.btn_promary_custom
{
    color: #fff !important;
}*/

.btn_add_agent{
      width: 216px;
    display: block;
    float: left;
    height: 58px;
    line-height: 34px;

}
</style>

@endsection