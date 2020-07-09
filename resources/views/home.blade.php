@extends('admin_layouts.layout')
@section('content')



<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">
       
            <div class="col-sm-12 text-right">

              <a href="{{route('agents.billing')}}" class="btn_add_agent "> Billing</a>

            <a href="{{route('home')}}" class="btn_add_agent btn_add_agent_active"> Phone List</a>
            
            <a href="{{route('agent.resource')}}" class="btn_add_agent"> Resources</a>
            
            
            <div class="clear20"></div>
            </div> 
         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">{{$phonelist}} Drive Phone List</h2>
              </div>
            </div>
          </div>
          
          
          <div class="ecommerce-widget">

            <div class="row"> 
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

   
                    <!-- Left Box Start -->
                    
                   

                    <div class="card card_address pl-3 pr-3 ">
                 
                      <div class="card-body">
                       <div class="add_property_w1 phoen_list_w">
                        <div class="cust_tbl_search">
                          
                            <div class="row">
                              <div class="col-12 col-xl-12">
                                <div class="row no-gutters">
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="">
                                            <div class="adress_div mb-3 mt-4">
                                              <p class="text-center">
                                                  12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                                                  <br>
                                                  PH: 602-375-9959 Fax: 602-375-9950	
                                                  <br>
                                                  28th@valleyking.com	
                                              </p>
                                                </div>
            <table width="100%" class="table table-bordered table_office_manage table_responsive2 mt-2 bdr_none_sm">
            <thead>
          <tr>
            <th align="center" class="address_td_1">Agent Name</th>
            <th align="center" class="address_td_1">Cell #</th>
            <th align="center" class="address_td_1">Email</th>
          </tr>
           </thead>
            <tbody>
            @foreach($agents as $agent)

          <tr>
            <td align="center" class="address_td_2">{{ $agent->agentdisplayname }}	</td>
            <td align="center" class="address_td_2">{{ $agent->agentcellphone }}</td>
            <td align="center" class="address_td_2">{{$agent->agentemail}}	</td>
        
          </tr>
          @endforeach
              </tbody>
        </table>
        <div class="pagination mt-3 mb-4 float-right">
        {{ $agents->render() }}

        </div>
          <br>
        <div class="adress_div   mb-2">
            <p class="text-center">
                12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                <br>
                PH: 602-375-9959 Fax: 602-375-9950	
                <br>
                28th@valleyking.com	
            </p>
              </div>                         
                                            </div>
                                            </div>
                            </div>
                          
                        </div> 
                      </div></div>
                    </div> 
                    
              
              </div>
            </div>

 
            <div class="clearfix"></div> 
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">Other Offices</h2>
              </div>
            </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  
     
                      <!-- Left Box Start -->
                      
                     
  
                      <div class="card card_address pl-3 pr-3 ">
                   
                        <div class="card-body">
                         <div class="add_property_w1 phoen_list_w">
                          <div class="cust_tbl_search ">
                            <form class="form-group mt-2 " action="/action_page.php">
                              <div class="">
                                <div class="">
                                  <div class="row no-gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                      <div class="">
                                              <div class="adress_div mb-3 mt-2">
                                    <h5 class="label_rule_heading2">Peoria</h5>

                                                <p class="text-center">
                                                    12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                                                    <br>
                                                    PH: 602-375-9959 Fax: 602-375-9950	
                                                    <br>
                                                    28th@valleyking.com	
                                                </p>
                                                  </div>

          <div class="adress_div mt-4 mb-2">
              <h5 class="label_rule_heading2">Tempe</h5>

              <p class="text-center mt-4">
                  12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                  <br>
                  PH: 602-375-9959 Fax: 602-375-9950	
                  <br>
                  28th@valleyking.com	
              </p>
                </div>   
                <div class="adress_div mt-4 mb-2">
                    <h5 class="label_rule_heading2">Mesa</h5>
      
                    <p class="text-center mt-4">
                        12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                        <br>
                        PH: 602-375-9959 Fax: 602-375-9950	
                        <br>
                        28th@valleyking.com	
                    </p>
                      </div>
                      <div class="adress_div mt-4 mb-2">
                          <h5 class="label_rule_heading2">Greenway</h5>
            
                          <p class="text-center mt-4">
                              12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                              <br>
                              PH: 602-375-9959 Fax: 602-375-9950	
                              <br>
                              28th@valleyking.com	
                          </p>
                            </div>
                            <div class="adress_div mt-4 mb-2">
                                <h5 class="label_rule_heading2">LeadconceptLahore</h5>
                  
                                <p class="text-center mt-4">
                                    12416 N 28th Drive, Ste 6 Phoenix, AZ 85029	
                                    <br>
                                    PH: 602-375-9959 Fax: 602-375-9950	
                                    <br>
                                    28th@valleyking.com	
                                </p>
                                  </div>                      
                                              </div>
                                              </div>
                              </div>
                            </form>
                          </div> 
                        </div></div>
                      </div> 
                      
                
                </div>
             
  
   
              <div class="clearfix"></div> 
            



        </div>




      </div>
      


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
@endsection
