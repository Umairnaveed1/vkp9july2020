@extends('admin_layouts.layout')
@section('content')
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Agent Advance Report </h2>
                              
                                
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
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="sel1">Property Name :</label>
                            <select class="form-control cust_frm_cntrl" id="sel1">
                              <option> Century 21 Arizona Foothills</option>
                              
                            </select>
                          </div>
                        </div>
                        
                      <div class="col-sm-12"> <h5> Dates</h5></div>
                        

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="home_check"> Payment Date
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="col-md-12">
                        Between
                        </div>
                        <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-6">
                        <div class="col-md-12">
                        
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker1" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                   
                        <div class="col-md-12">
                         <div class="form-group ">
                            <div class="">
                              <input id="datepicker2" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                        <div class="col-md-12">
                        <form>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input ml-3" id="customRadio" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio">Paid Invoices</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio">UnPaid Invoices</label>
  </div>
   <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio">Separate Page By Agent</label>
  </div>
</form>
                        
	
                        </div>
                        
                        
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
                          
                          <button type="submit" class="btn btn-space btn_promary_custom float-left">View Report</button>
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

  

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- jQuery library -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="js/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> -->
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

@endsection