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
                                    
                                    <div class="col-sm-12"><h5></h5></div>

                                    
                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                                <th width="8%" scope="col">Date</th>
                                               
                                      
                                                <th width="6%" scope="col">Unit</th>
                                                <th width="6%" scope="col">Property Name</th>
                                                            <th width="6%" scope="col">Agent Name</th>
                                                <th width="10%" scope="col">Tenant Name</th>
                                                <th width="10%" scope="col">Lease Term</th>
                                                <th width="10%" scope="col">Rent</th>
                                                <th width="10%" scope="col">Lease Start</th>
                                                <th width="7%" scope="col">Agent Comission</th>
                                                <th width="7%" scope="col">Type</th>
                                                <th width="7%" scope="col">View</th>
                                                <th width="6%" scope="col">RCVD</th>
                                                <th width="7%" scope="col">Refund</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($feeapprovalsdata as $res)
                                            <tr>
                                                <td align="left" scope="row">
                                                {{ $res['invoices']['invoice_date'] }}
                                              </td>
                                               
                                              
                                                <td align="left">
                                                  @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['apartmentbillings']['tenantunit'] ? $res['apartmentbillings']['tenantunit'] : '2' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['hsbillings']['tenantunit'] ? $res['hsbillings']['tenantunit'] : '10' }}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['hlbillings']['tenantunit'] ? $res['hlbillings']['tenantunit'] : '15' }}
                                                @endif
                                              </td>
                         <td align="left">
                                                  @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['inv_property']['propertyName'] ? $res['inv_property']['propertyName']  : '---' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['inv_property']['propertyName'] ? $res['inv_property']['propertyName']  : '---' }}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['inv_property']['propertyName'] ? $res['inv_property']['propertyName'] : '---' }}
                                                @endif
                                              </td>
                         <td align="left">
                                                  @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['inv_agent']['agentfirstname'] ? $res['inv_agent']['agentfirstname']  : '---' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['inv_agent']['agentfirstname'] ? $res['inv_agent']['agentfirstname']  : '---' }}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['inv_agent']['agentfirstname'] ? $res['inv_agent']['agentfirstname'] : '---' }}
                                                @endif
                                              </td>

                                                 <td align="left">
                                                   @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['apartmentbillings']['tenantname'] ? $res['apartmentbillings']['tenantname'] : 'ahmad' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['hsbillings']['tenantname'] ? $res['hsbillings']['tenantname'] : '--'}}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['hlbillings']['tenantname'] ? $res['hlbillings']['tenantname'] : '--' }}
                                                @endif
                                                </td>
                                                <td align="left">
                                                   @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['apartmentbillings']['leaseterm'] ? '24' : '2' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['hsbillings']['leeseterms'] ? 'lll' : '5' }}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['hlbillings']['leeseterms'] ? 'lll' : '6' }}
                                                @endif
                                                </td>
                                                <td align="left">
                                                    @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['apartmentbillings']['rent'] ? 'lll' : '10000' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['hsbillings']['referalamount'] ? $res['hsbillings']['referalamount'] : '---'}}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['hlbillings']['rentamount'] ? 'lll' : '10000' }}
                                                @endif
                                                </td>
                                                <td align="left">
                                                   @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['apartmentbillings']['leesestart']  ? '12-1-2020' : '12-01-2020' }}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['hsbillings']['contractdate']  ? $res['hsbillings']['contractdate'] : '---' }}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['hlbillings']['leesestart']  ? '12-1-2020' : '12-01-2020' }}
                                                @endif
                                                </td>
                                                <td align="left">  @if($res['apartmentbilling_id'] != NULL)
                                                {{ $res['apartmentbillings']['comission']  ? $res['apartmentbillings']['comission']  : '-'}}
                                                @endif
                                                @if($res['hsbilling_id'] != NULL)
                                                {{ $res['hsbillings']['commper']  ? $res['hsbillings']['commper'] : '---' }}
                                                @endif
                                                @if($res['hlbilling_id'] != NULL)
                                                {{ $res['hlbillings']['commission']  ? $res['hlbillings']['commission']  : '-' }}
                                                @endif</td>
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
                                             
                                               <td align="left"> 
                                               <!-- <a href="#" data-toggle="modal" data-target="#myModal_freehold_view">view</a> -->
                                               <div class="bs-example">
    <!-- Button trigger modal -->
 <!-- <a type="button" id="modal-name" class="btn btn-primary" data-toggle="modal" target="_blank" data-target="#myModal">
    VIEW
  </a> -->
  
  <a href="" onclick="window.open('{{ route('feeapproval.edit',$res['id'])}}', '_blank', 'location=yes,height=570,width=1000,scrollbars=yes,status=yes');">
  VIEW
</a>

 

                                               </td>
                                                <td align="left">
                                                        <label class="custom-control custom-checkbox custom-control-inline">
                                                           
   <input type="checkbox" class="custom-control-input feeRecieptRCVD" data-id="{{$res['id']}}" name="feeRecieptRCVD" value="{{$res['status']==1 && $res['status'] !=NULL?1:0}}" {{$res['status'] == 1 && $res['status'] !=NULL?'checked':' '}} {{$res['status']==1 && $res['status']!=NULL?'disabled':' '}}> 
                                                            <span class="custom-control-label"> </span>
                                                           
                                                          
                                                           
                                                            
                                                          </label>
                                                        </td>
                                                <td align="left">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                
  
       <input type="checkbox" class="custom-control-input feeHoldRefund" data-id="{{$res['id']}}" name="feeHoldRefund" value="{{$res['status']==2 && $res['status']!=NULL?2:0}}" {{$res['status']==2 && $res['status']!=NULL?'checked':' '}} {{$res['status']==2 && $res['status']!=NULL?'disabled':' '}}>
                                                    <span class="custom-control-label"></span>
                                                  
                                                   
                                                  </label>
                                                </td>
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
                                    
                                    </div></div>




                          <!-- ******************************** -->
                                               <!-- Six Six Section -->

                                               <div class="col-12">
                                                    <div class="row mb-4 mt-md-3">
                                                        <div class="col-sm-12">
                                                        
                                                        <a href="#" class="btn_add_agent btn_add_agent_active">Print</a>
                                                        
                                                        <a href="#" class="btn_add_agent"> Refresh</a>
                                                        
                                                        <a href="#" class="btn_add_agent"> Refund</a>
                                                        
                                                        
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
            <!-- The Modal -->
  <!-- <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
          <div class="row">
              <div class="col-lg-6">
                  
              </div>
          </div>
        </div>
        
       
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> -->
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