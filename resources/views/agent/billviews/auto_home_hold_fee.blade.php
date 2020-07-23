@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                  <h2 class="pageheader-title"> 
                     Auto Pay / Home Lease Holding Fee Detail
                  </h2>
               </div>
            </div>
         </div>
         <div class="ecommerce-widget">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <!-- Left Box Start -->
                  <div class="card card_address pl-3 pr-3">
                     <div class="card-body">
                        <div class="">
                           <div class="col-sm-12 text-center">
                              <table width="100%" class="table table-bordered table_office_manage table_responsive2 mt-2">
                                 <thead>
                                    <tr>
                                       <th width="10%" scope="col">Reference NO</th>
                                       <th width="5%" scope="col">INV Date</th>
                                       <th width="10%" scope="col">Agent Name</th>
                                       <th width="10%" scope="col">Property Name</th>
                                       <th width="10%" scope="col">Unit</th>
                                       <th width="10%" scope="col">Tenant Name</th>
                                       <th width="10%" scope="col">Deposit $</th>
                                       <th width="10%" scope="col">Date RCVD</th>
                                       <th width="10%" scope="col">Balance Due  
                                          <br>
                                       </th>
                                       <th width="5%" scope="col">Move In Date</th>
                                       <th width="5%" scope="col">View</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($autoHomeHoldFees as $autoHomeHoldFee)
                                    <tr>
                                       <!-- <th scope="row">07/30/15</th> -->
                                       <td>{{ $autoHomeHoldFee->hlreference }}</td>
                                       <td> {{ date('d/m/Y', strtotime($autoHomeHoldFee->hldate)) }}  </td>
                                       <td>{{ $autoHomeHoldFee->hl_agent['agentfirstname'] }} {{ $autoHomeHoldFee->hl_agent['agentlastname'] }}</td>
                                       <td>{{ $autoHomeHoldFee->hl_property['propertyName'] }}</td>
                                       <td> {{ $autoHomeHoldFee->unitno }}</td>
                                       <td>{{ $autoHomeHoldFee->customerf }} {{ $autoHomeHoldFee->customerl }}</td>
                                       <td>{{ $autoHomeHoldFee->holdingfee }}</td>
                                       <td>{{ date('d/m/Y', strtotime($autoHomeHoldFee->datefeerec)) }}</td>
                                       <td>{{ $autoHomeHoldFee->amountdue }}</td>
                                       <td>{{ date('d/m/Y', strtotime($autoHomeHoldFee->hlmoveins)) }}</td>
                                       <td><a href="#" data-toggle="modal" onclick="viewPopup({{ $autoHomeHoldFee->id }})">View</a></td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                              <div class="clear20"></div>
                              <div class="clear20"></div>
                           </div>
                        </div>
                     </div>
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
<div class="modal" id="myModal_autoHomeholdFee_view">
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
                                 <td width="8%" align="left"><span id="lblDate"></span></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Agent :</td>
                                 <td align="left"><span id="lblAgentName"></span></td>
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
                                 <td width="8%" align="left" id="apartment_comm"></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Advantage Point</td>
                                 <td align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Address :</td>
                                 <td align="left"><strong id="apartment_add"></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Unit # :</td>
                                 <td align="left"></td>
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
                                 <td align="left"><strong id="move_in_scheduled_for"></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Holding Fee :</td>
                                 <td align="left"><strong>$<span id="lblHoldFee"></span></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">M/O # :</td>
                                 <td align="left"><strong id="m_o"></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Date Fee RCVD :</td>
                                 <td align="left"><strong id="date_fee_rcvd"> </strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Amount Due : </td>
                                 <td align="left"><strong id="amount_due"></strong></td>
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
                                 <td align="left"><strong id="custm_fname"></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Last Name : </td>
                                 <td align="left"><strong id="custm_lname"></strong></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row">Current Address :</td>
                                 <td align="left" id="custm_add"></td>
                              </tr>
                              <tr>
                                 <td align="left" scope="row" colspan="2">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                          <td>
                                             State :  
                                          </td>
                                          <td id="custm_state"></td>
                                          <td>City :</td>
                                          <td id="custm_city"></td>
                                          <td>Zip :</td>
                                          <td id="custm_zip"></td>
                                       </tr>
                                       <tr>
                                          <td>Home :  </td>
                                          <td id="custm_home"></td>
                                          <td>Cell #</td>
                                          <td id="custm_cell"></td>
                                          <td>Alt :</td>
                                          <td id="custm_alt"></td>
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
                        <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows=""></textarea>
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
    function viewPopup(id) {
        var holding_id = id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:"{{ url('get_auto_home_hold_fee') }}",
            method:"POST",
            data:{feehold_id:holding_id},
            success:function(data)
            {
                var result = $.parseJSON(data);
                console.log(result);
                $('#lblDate').empty('');
                $('#lblAgentName').empty('');
                $('#apartment_comm').empty('');
                $('#apartment_add').empty('');
                $('#move_in_scheduled_for').empty('');
                $('#lblHoldFee').empty('');
                $('#m_o').empty('');
                $('#date_fee_rcvd').empty('');
                $('#amount_due').empty('');
                $('#custm_fname').empty('');
                $('#custm_lname').empty('');
                $('#custm_add').empty('');
                $('#custm_city').empty('');
                $('#custm_state').empty('');
                $('#custm_zip').empty('');
                $('#custm_home').empty('');
                $('#custm_cell').empty('');
                $('#custm_alt').empty('');
                $('#expence_comment').empty('');
                $('#lblDate').append(result[0].hldate);
                $('#lblAgentName').append(result[0]['hl_agent'].agentfirstname+" "+result[0]['hl_agent'].agentlastname);
                $('#apartment_comm').append(result[0]['hl_property'].propertyName);
                $('#apartment_add').append(result[0]['hl_property'].propertyAd);
                $('#move_in_scheduled_for').append(result[0].hlmoveins);
                $('#lblHoldFee').append(result[0].holdingfee);
                $('#m_o').append(result[0].hlmoveins);
                $('#date_fee_rcvd').append(result[0].datefeerec);
                $('#amount_due').append(result[0].amountdue);
                $('#custm_fname').append(result[0].customerf);
                $('#custm_lname').append(result[0].customerl);
                $('#custm_add').append(result[0].customera);
                $('#custm_city').append(result[0].customercity);
                $('#custm_state').append(result[0].customerstate);
                $('#custm_zip').append(result[0].customerzip);
                $('#custm_home').append(result[0].customerh);
                $('#custm_cell').append(result[0].customerc);
                $('#custm_alt').append(result[0].customeral);
                $('#expence_comment').append(result[0].agentnotes);
                
                $('#myModal_autoHomeholdFee_view').modal('show');
            }
        });
    }
</script>
@endsection