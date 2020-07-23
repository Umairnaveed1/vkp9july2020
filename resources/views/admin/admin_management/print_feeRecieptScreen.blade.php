@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                  <h2 class="pageheader-title"> Fee Receipt Screen </h2>
               </div>
            </div>
         </div>
         <div class="ecommerce-widget">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <!-- ********************** security Box *********** -->
                  <!-- ****************** Security Box End ************** -->
                  <!-- ********************** -->
                  <div class="col-xl-12 pl-0">
                     <div class="card card_address  pl-3 pr-3">
                        <div class="card-body">
                           <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                              <thead>
                                 <tr>
                                    <th width="10%" scope="col">INV Date</th>
                                    <th width="10%" scope="col">Agent Name</th>
                                    <th width="10%" scope="col">Property Name</th>
                                    <th width="7%" scope="col">Unit</th>
                                    <th width="13%" scope="col">Tenant Name</th>
                                    <th width="10%" scope="col">Deposite $</th>
                                    <th width="10%" scope="col">Date RCVD</th>
                                    <th width="10%" scope="col">Balance Due</th>
                                    <th width="10%" scope="col">Move In Date</th>
                                 </tr>
                              </thead>
                              <tbody>
                                <form action="{{ route('admin.adminManagement.store_feeRecieptRCVD') }}" method="post" id="feeRecieptRCVD_form">
                                @csrf
                                @foreach($feeReciepts as $feeReciept)
                                <?php //echo "<pre>"; print_r($feeReciept); exit('yeeeeez'); ?>
                                 <tr>
                                    <td align="left" scope="row">D{{ date('d/m/Y', strtotime($feeReciept->hldate)) }}</td>
                                    <td align="left">{{ $feeReciept->hl_agent['agentfirstname'] }} {{ $feeReciept->hl_agent['agentlastname'] }}</td>
                                    <td align="left">{{ $feeReciept->hl_property['propertyName'] }}</td>
                                    <td>{{ $feeReciept->unitno }}</td>
                                    <td align="left">{{ $feeReciept->customerf }} {{ $feeReciept->customerl }}</td>
                                    <td align="left">{{ $feeReciept->holdingfee }}</td>
                                    <td align="left">{{ date('d/m/Y', strtotime($feeReciept->datefeerec)) }}</td>
                                    <td align="left">{{ $feeReciept->amountdue }}</td>
                                    <td align="left">{{ date('d/m/Y', strtotime($feeReciept->hlmoveins)) }}</td>
                                 </tr>
                                 @endforeach
                                </form>
                              </tbody>
                           </table>
                           {{-- <div class="pagination mt-4 align-right">
                    {{ $feeReciepts->links() }}                                                        
                  </div> --}}
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="clear20"></div>
                                 <!-- <a href="#" class="btn_general_h pull-right mr-3"> Delete</a> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ******************************** -->
                  <!-- Six Six Section -->
                  {{-- <div class="col-12">
                     <div class="row mb-4 mt-md-3">
                        <div class="col-sm-12">
                           <a href="{{URL::to('admin_feeRecieptScreen')}}" class="btn_add_agent btnprint">Print</a>
                           <a href="javascript:void(0)" class="btn_add_agent" id="feeRecieptRCVD_apply"> Apply</a>
                        </div>
                     </div>
                  </div> --}}
                  <!-- <div class="clearfix"></div> -->
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
<style>
   .btn_close_pop3
   {
   border-radius:5px;
   color:#fff;
   text-align:center;
   font-size:14px;
   font-family:'Open Sans', sans-serif;
   line-height:32px;
   font-weight:normal;
   background-repeat:no-repeat;
   background-position:left top;
   padding:7px;
   padding-left:20px;
   padding-right:20px;
   background: rgba(0,29,86,1);
   background: -moz-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
   background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0,29,86,1)), color-stop(100%, rgba(0,18,55,1)));
   background: -webkit-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
   background: -o-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
   background: -ms-linear-gradient(left, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
   background: linear-gradient(to right, rgba(0,29,86,1) 0%, rgba(0,18,55,1) 100%);
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001d56', endColorstr='#001237', GradientType=1 );
   margin-right:5px;
   border:none !important;
   color:#fff !important;
   }
   .btn_close_pop3:hover
   {
   color:#fff !important;
   background: rgba(156,39,68,1);
   background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
   background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1)));
   background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
   background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
   background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
   background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 );
   border:none !important;
   }
   .w_modal_freehold
   {
   max-width:600px;
   }
   .w_viewapprove_bill {
   max-width: 1000px;
   }
   @media (min-width: 320px) and   (max-width: 1100px){
   .search_inovice_w
   {
   width:98%;
   }
   }
   @media (min-width: 320px) and   (max-width: 767px){
   .w_modal_freehold
   {
   max-width:96%;
   }
   }
</style>
<script type="text/javascript">
   jQuery(function ($) { 
      $('.btnprint').printPage();
   });
</script>
@endsection