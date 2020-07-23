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

         



          </div>

          

        <div class="row">

          <div class="col-12">

            

              

             

            <div class="card">

  <div class="card-body agent_label_welcome text-center">

    <strong>

      <h2>Welcome:

      {{ Auth::user()->UserName }}

    </h2>

  </strong> 

  </div>

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

  </div>

  <!-- ============================================================== -->

  <!-- footer -->

  <!-- ============================================================== -->

 

  <!-- ============================================================== -->

  <!-- end footer -->

  <!-- ============================================================== -->

  </div>

@endsection

