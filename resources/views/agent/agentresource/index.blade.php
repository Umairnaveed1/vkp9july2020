@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">
       
            <div class="col-sm-12 text-right">
<a href="{{route('agent.resource')}}" class="btn_add_agent btn_add_agent_active  billing_w_2"> Resources</a>
 <a href="{{route('home')}}" class="btn_add_agent  billing_w_2"> Phone List</a>
              <a href="#" class="btn_add_agent  billing_w_2"> Billing</a>

           
            
            
            
            <div class="clear20"></div>
            </div> 
         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">Resources</h2>
              </div>
            </div>
          </div>
          
          
          <div class="ecommerce-widget">

            <div class="row"> 
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

   
                    <!-- Left Box Start -->
                    
                   

                    <div class="card card_address pl-3 pr-3">
                 
                      <div class="card-body">
                       <div class="add_property_w1">
                       <div class="col-sm-12 text-center offset-1">
<div class="clear40"></div>
              <a href="{{ route('agent.resource.autoPays_propertylist') }}" class="btn_add_agent  btn_w_rec"><i class="fas fa-angle-double-right"></i> Autopays</a>

            <a href="{{ route('agent.resource.doNotPlace_propertylist') }}" class="btn_add_agent  btn_w_rec"><i class="fas fa-angle-double-right"></i> Do Not Place</a>
           <!--  <div class="clear20"></div> -->
              <a href="{{ route('agent.resource.noContract_propertylist') }}" class="btn_add_agent btn_w_rec"><i class="fas fa-angle-double-right"></i> No Contract</a>

            <a href="{{ route('agent.resource.slowPay_propertylist') }}" class="btn_add_agent btn_w_rec"><i class="fas fa-angle-double-right"></i> Slow Pay</a>
            
            <!-- <div class="clear20"></div> -->
               
            <div class="clear20"></div>
            </div>
                         
                      </div></div>
                    </div> 
                    
              
              </div>
            </div>

             
            <div class="clearfix"></div> 
          </div>

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
    @endsection