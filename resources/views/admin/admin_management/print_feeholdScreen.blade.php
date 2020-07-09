@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                  <h2 class="pageheader-title"> Fee Hold Screen </h2>
               </div>
            </div>
         </div>
         <div class="ecommerce-widget">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="col-xl-12 pl-0">
                     <div class="card card_address  pl-3 pr-3">
                        <div class="card-body">
                           <div class="col-sm-12">
                              <h5></h5>
                           </div>
                           <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                              <thead>
                                 <tr>
                                    <th width="8%" scope="col">Date</th>
                                    <th width="8%" scope="col">Reference</th>
                                    <th width="8%" scope="col">Agent</th>
                                    <th width="10%" scope="col">Property</th>
                                    <th width="6%" scope="col">Unit</th>
                                    <th width="10%" scope="col">Tenant Name</th>
                                    <th width="7%" scope="col">Fee $</th>
                                    <th width="8%" scope="col">Date Deposite</th>
                                    <th width="7%" scope="col">Balance Due</th>
                                    <th width="8%" scope="col">Move In Date</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach($feeholds as $feehold) 
                                 <tr>
                                    <td align="left" scope="row"> {{ date('d/m/Y', strtotime($feehold->hldate)) }}</td>
                                    <td align="left">{{ $feehold->hlreference }}</td>
                                    <td align="left">{{ $feehold->hl_agent['agentfirstname'] }} {{ $feehold->hl_agent['agentlastname'] }}</td>
                                    <td>{{ $feehold->hl_property['propertyName'] }}</td>
                                    <td align="left">{{ $feehold->unitno }}</td>
                                    <td align="left">{{ $feehold->customerf }} {{ $feehold->customerl }}</td>
                                    <td align="left">{{ $feehold->holdingfee }}</td>
                                    <td align="left">{{ date('d/m/Y', strtotime($feehold->datefeerec)) }}</td>
                                    <td align="left">{{ $feehold->amountdue }}</td>
                                    <td align="left">{{ date('d/m/Y', strtotime($feehold->hlmoveins)) }}</td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
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
                           <a href="#" class="btn_add_agent btn_add_agent_active">Print</a>
                           <a href="#" class="btn_add_agent"> Refresh</a>
                           <a href="#" class="btn_add_agent"> Refund</a>
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
@endsection