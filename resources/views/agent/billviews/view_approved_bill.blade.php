   @extends('admin_layouts.layout')

   @section('content')
   <div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
        <div class="row">



          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">	
               Approval Screen
             </h2>
           </div>
         </div>
       </div>
       
       
       <div class="ecommerce-widget">

        <div class="row"> 
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


            <!-- Left Box Start -->
            
            

            <div class="card card_address pl-3 pr-3">

              <div class="card-body" style="overflow-x: auto">
               <div class="">
                 <div class="col-sm-12 text-center">

                  <table width="100%" class="table table-bordered table_office_manage table_responsive2 mt-2">
                    <thead>
                     <tr>

                      <th width="8%" scope="col">Move in Date</th>
                      <th width="8%" scope="col">INV #</th>
                      <th width="8%" scope="col">App.date</th>
                      
                      <th width="6%" scope="col">Unit</th>
                      <th width="10%" scope="col">Tenant Name</th>
                      <th width="10%" scope="col">Property Name</th>
                      <th width="10%" scope="col">Due To Agent</th> 
                      <th width="10%" scope="col">Admin Notez</th>
                      <th width="10%" scope="col">Agent Notes</th> 
                      <th width="7%" scope="col">Type</th>
                      <th width="7%" scope="col">View</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($feeapprovalsdata as $res)
                    <tr>
                      <td align="left" scope="row">
                        {{ $res['invoices']['invoice_date'] }}
                      </td>

                      @if($res->apartmentbilling_id != NULL)
                      <td align="left" scope="row">
                        {{$res->invoices->id }}

                      </td>

                      @endif
                      @if($res->hsbilling_id != NULL)
                      <td align="left" scope="row">
                        {{$res->invoices->id }}

                      </td>

                      @endif
                      @if($res->hlbilling_id != NULL)
                      <td align="left" scope="row">
                        {{$res->invoices->id }}

                      </td>
                    }
                    @endif

                    @if($res->apartmentbilling_id != NULL)
                    <td width="11%" align="left" scope="row">
                      {{$res->apartmentbillings->created_at }}

                    </td>

                    @endif
                    @if($res->hsbilling_id != NULL)
                    <td  width="11%"align="left" scope="row">
                      {{ $res->hsbillings->created_at }}

                    </td>
                  }
                  @endif
                  @if($res->hlbilling_id != NULL)
                  <td  width="11%" align="left" scope="row">
                    {{ $res->h1billings->created_at }}
                  </td>
                }
                @endif




                <td align="left">
                  @if($res['apartmentbilling_id'] != NULL)
                  {{ $res['apartmentbillings']['tenantunit'] ? 'waqas' : '2' }}
                  @endif
                  @if($res['hsbilling_id'] != NULL)
                  {{ $res['hsbillings']['tenantunit'] ? 'waqas' : '10' }}
                  @endif
                  @if($res['hlbilling_id'] != NULL)
                  {{ $res['hlbillings']['tenantunit'] ? 'waqas' : '15' }}
                  @endif
                </td>

                <td align="left">
                 @if($res['apartmentbilling_id'] != NULL)
                 {{ $res['apartmentbillings']['tenantname'] }}
                 @endif
                 @if($res['hsbilling_id'] != NULL)
                 {{ $res['hsbillings']['tenantname'] ? 'hamaad' : 'Salaar'}}
                 @endif
                 @if($res['hlbilling_id'] != NULL)
                 {{ $res['hlbillings']['tenantname']  }}
                 @endif
               </td>

               <td>

                @if($res['apartmentbilling_id'] != NULL)
                @php
                $id= Auth::user()->id;
                $propertyname = DB::table('properties')
                ->select('*')->where('id', $res['apartmentbillings']['property_id'])->first();  
                @endphp
                {{ $propertyname->propertyName }}

                @endif
                @if($res['hsbilling_id'] != NULL)
                {{ $res['hsbillings']['propertyad']  }}
                @endif
                @if($res['hlbilling_id'] != NULL)
                @php
                $id= Auth::user()->id;
                $propertyname = DB::table('properties')
                ->select('*')->where('id', $res['hlbillings']['property_id'])->first();  
                @endphp
                {{ $propertyname->propertyName }}
                @endif
              </td>
              <td width="15%" align="left">
               @if($res['apartmentbilling_id'] != NULL)
               {{ $res['apartmentbillings']['totaldueto'] }}
               @endif
               @if($res['hsbilling_id'] != NULL)
               {{ $res['hsbillings']['totaldueto']  }}
               @endif
               @if($res['hlbilling_id'] != NULL)
               {{ $res['hlbillings']['totaldueto']}}
               @endif
             </td>

             <td width="15%" align="left">
               @if($res['apartmentbilling_id'] != NULL)
               {{ $res['apartmentbillings']['agentnotes'] }}
               @endif
               @if($res['hsbilling_id'] != NULL)
               {{ $res['hsbillings']['agentnotes']  }}
               @endif
               @if($res['hlbilling_id'] != NULL)
               {{ $res['hlbillings']['agentnotes']}}
               @endif
             </td>

             <td width="15%" align="left">
               @if($res['apartmentbilling_id'] != NULL)
               {{ $res['apartmentbillings']['agentnotes'] }}
               @endif
               @if($res['hsbilling_id'] != NULL)
               {{ $res['hsbillings']['agentnotes']  }}
               @endif
               @if($res['hlbilling_id'] != NULL)
               {{ $res['hlbillings']['agentnotes']}}
               @endif
             </td>

             <td align="left">

               @if($res['apartmentbilling_id'] != NULL)
               Appartment
               @endif
               @if($res['hlbilling_id'] != NULL)
               HomeLease
               @endif
               @if($res['hsbilling_id'] != NULL)
               HomeSale
               @endif
             </td>
             <td><a href="" onclick="window.open('{{ route('viewapprovedbill',$res['id'])}}', '_blank', 'location=yes,height=570,width=1000,scrollbars=yes,status=yes');">
              VIEW
            </a></td>


          </tr>
          @endforeach

        </tbody>

      </table>




      <div class="clear20"></div>
      <ul class="pagination mt-4 align-right">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
      <div class="clear20"></div>
      <div class="text-left"><a href="#" class="btn_add_agent pull-left" style="padding: 2px 40px;"> Print</a></div>
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
<div class="modal" id="myModal_viewapprove_bill">
  <div class="modal-dialog w_viewapprove_bill">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Apartment Billing</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


        <div class="col-md-12">

         <div class="row">

          <div class="col-md-6">

            <div>
              <table width="100%" class=" table_responsive2">
                <tbody>

                  <tr>
                    <td width="8%" align="left" scope="row">Move In # :</td>
                    <td width="8%" align="left">1</td>
                  </tr>
                  @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
                  <tr>
                    <td colspan="5">Agent</td> 
                    <th>
                      <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['secongage']}}" name="agent" disabled style="border: none;" >
                      
                      @if($feeapprovalsdata['hlbilling_id'] != NULL)
                      <input type="text"  value="{{$feeapprovalsdata['hlbillings']['agentname']}}" name="agent" disabled style="border: none;" >
                      @endif
                      @if($feeapprovalsdata['hsbilling_id'] != NULL)
                      <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentname']}}" name="agent" disabled style="border: none;" >
                      @endif
                      
                    </th> 
                  </tr>
                  @endif
                  <tr>
                    <td align="left" scope="row">Agent Comm % :</td>
                    <td align="left">100</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">2ND Agent :</td>
                    <td align="left">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">2ND Agent Comm Split % :</td>
                    <td align="left">50 / 50 Split</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Apartment Move In<br></td>
                    <td align="left">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Rent :</td>
                    <td align="left">895</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Auto Pay $ RCVD :</td>
                    <td align="left">12232.26</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Commission % :</td>
                    <td align="left">50</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Bonus :</td>
                    <td align="left">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Total Due to VKP :</td>
                    <td align="left">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Due to 1st Agent :</td>
                    <td align="left">447.5</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Due to 2nd Agent :</td>
                    <td align="left">0</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Verified By :</td>
                    <td align="left">Mike</td>
                  </tr>
                  <tr>
                    <td colspan="2" align="left" scope="row"><strong><h5>Billing Information</h5>
                    </strong></td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Community Name :</td>
                    <td align="left">4637 W Sunny Side</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row">Address :</td>
                    <td align="left">4637 W Sunny Side Ave</td>
                  </tr>
                  <tr>
                    <td align="left" scope="row" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                        State : </td>
                        <td>Arizona</td>
                        <td>City :</td>
                        <td>Glendale</td>
                        <td>Zip :</td>
                        <td>85304</td>
                      </tr>
                    </table></td>
                    
                  </tr>
                  <tr>
                    <td colspan="2" align="left" scope="row"><h5>AutoPay</h5></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="left" scope="row"><table width="100%" class=" table_responsive2">
                      <tbody>
                        <tr style="color:#fff">
                          <td width="8%" align="left" bgcolor="#85223a" scope="row">Ref #</td>
                          <td width="8%" align="left" bgcolor="#85223a">Tenant Name</td>
                          <td width="8%" align="left" bgcolor="#85223a">Property Name</td>
                          <td width="8%" align="left" bgcolor="#85223a">Holding Fee</td>
                          <td width="8%" align="left" bgcolor="#85223a">Unit #
                          </td>
                        </tr>
                        <tr>
                          <td align="left" scope="row">1349318</td>
                          <td align="left">Sherry Barney  
                            <br /></td>
                            <td align="left">4637 W Sunny Side</td>
                            <td align="left"> $500.00</td>
                            <td align="left">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" scope="row">1349318</td>
                            <td align="left">Sherry Barney <br /></td>
                            <td align="left">4637 W Sunny Side</td>
                            <td align="left"> $500.00</td>
                            <td align="left">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" scope="row">Auto Pay $ RCVD :  </td>
                      <td align="left">$

                        <input type="text" name="textfield" class="form-control" id="textfield"></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" scope="row"><strong><h5>Tenant Information</h5></strong></td>
                      </tr>
                      <tr>
                        <td align="left" scope="row">Deposit Ref # :  
                          <br></td>
                          <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" scope="row">Tenant Name :</td>
                          <td align="left">Erik Fiegerer &amp; Sherry Barney</td>
                        </tr>
                        <tr>
                          <td align="left" scope="row">Address :</td>
                          <td align="left">4637 W Sunny Side Ave</td>
                        </tr>
                        <tr>
                          <td align="left" scope="row">Unit # :</td>
                          <td align="left">0</td>
                        </tr>
                        <tr>
                          <td align="left" scope="row" colspan="2">

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td> State : </td>
                                <td>Arizona</td>
                                <td>City :</td>
                                <td>Glendale</td>
                                <td>Zip :</td>
                                <td>85304</td>
                              </tr>
                              <tr>
                                <td>Lease Start :</td>
                                <td>8/29/2014</td>
                                <td>Lease Term :</td>
                                <td>12</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table></td>
                            
                          </tr>
                          <tr>
                            <td colspan="2" align="left" scope="row"> <label class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Click to Confirm That This is The Correct Address of Residence </span></label></td>
                            </tr>
                            <tr>
                             <td colspan="2" align="left" scope="row"> <label class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Change Tenant Address</span></label></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      
                    </div>       
                    
                    
                    
                    
                    
                    <div class="col-md-6">
                     <div class="form-group">
                      <label for="name">Agent Notes :</label>
                      <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows=""></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      <label for="name">   Attachment :</label>
                      <input name="" type="file" class="form-control">
                      
                    </div>
                    
                    
                    
                    
                    <div>
                      <div class="clear20"> </div>
                      <div class="text-center col-sm-12"><img src="images/logo.png" alt=""></div>
                      <div class="clear20"> </div>
                      
                      <div>


                      </div>
                      
                      
                      
                      Your billing has been approved for invoicing.<br>
                      <br>
                      For your Record Refer to<br>
                      <br>
                      Invoice #
                      <span id="lblInvoiceNo">27566</span><br>
                      <br>
                      Your Current Monthly Count is
                      <span id="lblCountNo">2</span>
                      <table border="0" cellpadding="4" cellspacing="0" style="vertical-align: middle; width: 100%; text-align: left">
                        <tbody><tr>
                          <td style="height: 5px">
                          </td>
                          <td style="height: 5px">
                          </td>
                        </tr>
                        <tr>
                          <td>
                          Agent Comm % :</td>
                          <td>
                            <span id="lblInvAgentPerc" style="font-weight:bold;">100</span></td>
                          </tr>
                          <tr>
                            <td>
                            Total Due to VKP :</td>
                            <td>
                              <span id="lblInvVkpTotal" style="font-weight:bold;">$447.5</span></td>
                            </tr>
                            <tr>
                              <td>
                              Due to 1st Agent :</td>
                              <td>
                                <span id="lblInv1stAgent" style="font-weight:bold;">$447.5</span></td>
                              </tr>
                              <tr>
                                <td>
                                Due to 2nd Agent :</td>
                                <td>
                                  <span id="lblInvSecondAgent" style="font-weight:bold;">$0</span></td>
                                </tr>
                              </tbody></table>
                              
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
              @endsection