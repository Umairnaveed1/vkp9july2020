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
                                    <th width="10%" scope="col">Deposit $</th>
                                    <th width="10%" scope="col">Date RCVD</th>
                                    <th width="10%" scope="col">Balance Due</th>
                                    <th width="10%" scope="col">Move In Date</th>
                                    <th width="8%" scope="col">View</th>
                                    <th width="6%" scope="col">RCVD</th>
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
                                    <td align="left"><a href="#" data-toggle="modal" data-target="#myModal_freerecipt_view_{{ $feeReciept->id }}">view</a></td>
                                    <td align="left">
                                       <label class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input feeRecieptRCVD" data-id="{{$feeReciept->id}}" name="feeRecieptRCVD" value="{{$feeReciept->verifiedby==1 && $feeReciept->verifiedby!=NULL?1:0}}" {{$feeReciept->verifiedby==1 && $feeReciept->verifiedby!=NULL?'checked':' '}} {{$feeReciept->verifiedby==1 && $feeReciept->verifiedby!=NULL?'disabled':' '}}>
                                       <span class="custom-control-label"> </span></label>
                                    </td>
                                 </tr>
                                 @endforeach
                                </form>
                              </tbody> 
                           </table> 
                           <div class="pagination mt-4 align-right">
                    {{ $feeReciepts->links() }}                                                        
                  </div>
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
                  <div class="col-12">
                     <div class="row mb-4 mt-md-3">
                        <div class="col-sm-12">
                           <a href="{{URL::to('print_FeeRecieptScreen')}}" class="btn_add_agent btnprint">Print</a>
                           <a href="javascript:void(0)" class="btn_add_agent" id="feeRecieptRCVD_apply"> Apply</a>
                        </div>
                     </div>
                  </div>
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
@foreach($feeReciepts as $feeReciept)
<div class="modal" id="myModal_freerecipt_view_{{ $feeReciept->id }}">
   <div class="modal-dialog w_viewapprove_bill">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Auto Pay / Home Lease Holding Fee Detail</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-6">
                     <div>
                        <table width="100%" class="table_responsive2">
                           <tbody>
                              <tr>
                                 <td width="8%" align="left" scope="row">Date :</td>
                                 <td width="8%" align="left"><span id="lblDate">{{ date('d/m/Y', strtotime($feeReciept->hldate)) }}</span></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Agent :</td>
                                 <td align="left"><span id="lblAgentName">{{ $feeReciept->hl_agent['agentfirstname'] }} {{ $feeReciept->hl_agent['agentlastname'] }}</span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div>
                        <table width="100%" class=" table_responsive2">
                           <tbody>
                              <tr>
                                 <td colspan="2" align="left" scope="row">
                                    <strong>
                                       <h5>Property Information</h5>
                                    </strong>
                                 </td>
                              </tr>
                              <tr>
                                 <td width="8%" align="left" scope="row">Apartment Community :</td>
                                 <td width="8%" align="left">{{ $feeReciept->hl_property['propertyName'] }}</td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Advantage Point</td>
                                 <td align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Address :</td>
                                 <td align="left"><strong>{{ $feeReciept->hl_property['propertyAd'] }}</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Unit # :</td>
                                 <td align="left">{{ $feeReciept->unitno }}</td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">State :</td>
                                 <td align="left"><strong>Arizona</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">City :  
                                    <br>
                                 </td>
                                 <td align="left"><strong>Glendale</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Zip :</td>
                                 <td align="left"><strong>85301</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Move in Scheduled For :</td>
                                 <td align="left"><strong>{{ date('d/m/Y', strtotime($feeReciept->hlmoveins)) }}</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Holding Fee :</td>
                                 <td align="left"><strong>$<span id="lblHoldFee">{{ $feeReciept->holdingfee }}</span></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">M/O # :</td>
                                 <td align="left"><strong>{{ $feeReciept->unitno }}</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Date Fee RCVD :</td>
                                 <td align="left"><strong>{{ date('d/m/Y', strtotime($feeReciept->datefeerec)) }} </strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Amount Due : </td>
                                 <td align="left"><strong>{{ $feeReciept->amountdue }}</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">&nbsp;</td>
                                 <td align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                 <td colspan="2" align="left" scope="row">
                                    <strong>
                                       <h5>Customer Information</h5>
                                    </strong>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">First Name :</td>
                                 <td align="left"><strong>{{ $feeReciept->customerf }}</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Last Name : </td>
                                 <td align="left"><strong>{{ $feeReciept->customerl }}</strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Current Address :</td>
                                 <td align="left">{{ $feeReciept->customera }}</td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row" colspan="2">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                          <td>
                                             State :  
                                          </td>
                                          <td>{{ $feeReciept->customerstate }}</td>
                                          <td>City :</td>
                                          <td>{{ $feeReciept->customercity }}</td>
                                          <td>Zip :</td>
                                          <td>{{ $feeReciept->customerzip }}</td>
                                       </tr>
                                       <tr>
                                          <td>Home :  </td>
                                          <td>{{ $feeReciept->customerh }}</td>
                                          <td>Cell #</td>
                                          <td>{{ $feeReciept->customerc }}</td>
                                          <td>Alt :</td>
                                          <td>{{ $feeReciept->customeral }}</td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">&nbsp;</td>
                                 <td align="left">&nbsp;</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="name">Agent Notes : </label>
                        <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows="">{{ $feeReciept->agentnotes }}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="name">Reference No : </label>
                        <strong>    3508922</strong>
                     </div>
                     <div class="form-group">
                        <label for="name">   Attachment :</label>
                        <input name="" type="file" class="form-control">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <!--        <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a><br>-->
            <a type="button" class="btn btn-danger btn_close_pop3">Print</a>
         </div>
      </div>
   </div>
</div>
@endforeach
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