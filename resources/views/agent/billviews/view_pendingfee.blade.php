@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">
       
             
         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">	
 Fee Pending Screen

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
                                           					
                                                <th width="10%" scope="col">Date</th>
                                                <th width="5%" scope="col">Agent</th>
                                             
                                                <th width="10%" scope="col">Property</th>
                                                <th width="10%" scope="col">Unit</th>
                                                <th width="10%" scope="col">Tenant Name</th>
                                                <th width="10%" scope="col">Deposit $	</th>
                                                <th width="10%" scope="col">Date Received	</th>
                                                <th width="10%" scope="col">Balance Due	<br></th>
                                                <th width="5%" scope="col">Move In Date	</th>
                                                <th width="5%" scope="col">View</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pendingfee as $data)
                                            <tr>
                                              <!-- <th scope="row">07/30/15</th> -->
                                              <td>{{$data['created_at']}}</td>
                                              <td>@if(isset($data['hl_agent']))
                                              {{$data['hl_agent']['agentdisplayname']}}@endif</td>
                                              <td>@if(isset($data['hl_property']))
                                              {{$data['hl_property']['propertyName']}}@endif</td>
                                              <td>  
                                                 
                                               
                                                @if(isset($data['unitno']))
                                                {{ $data['unitno'] ? $data['unitno'] : 'null' }}
                                               
                                                @endif</td>
                                              <td>@if(isset($data['customerf'] ))
                                                {{ $data['customerf'].$data['customerl']  }}
                                                
                                                @endif</td>
                                              <td>@if(isset($data['holdingfee'] ))
                                                {{ $data['holdingfee'] }}
                                                
                                                @endif</td>
                                              <td>@if(isset($data['hldate'] ))
                                                {{ $data['hldate'] }}
                                                
                                                @endif</td>
                                              <td>@if(isset($data['amountdue'] ))
                                                {{ $data['amountdue'] }}
                                                
                                                @endif</td>
                                              <td>@if(isset($data['hlmoveins'] ))
                                                {{ $data['hlmoveins'] }}
                                                
                                                @endif</td>
                <td><a href="#" data-toggle="modal"  onclick="viewfunction(<?php echo $data['id']; ?>)">View</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                    
                                    
                                    
            
       
            
                 <div class="clear20"></div>
          
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
<div class="modal" id="myModal_pendingfee">
  <div class="modal-dialog w_viewapprove_bill" style="max-width: 1000px;
">
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
                     
                                                <td colspan="2" align="left" scope="row"><strong><h5>Property Information</h5></strong></td>
                                            </tr>
                                            <tr>
                                              <td width="8%" align="left" scope="row">Apartment Community :</td>
                                              <td width="8%" align="left" id="propertyName"></td>
                                            </tr>
                                          <!--   <tr>
                                              <td align="left" scope="row">Advantage Point</td>
                                              <td align="left">&nbsp;</td>
                                            </tr> -->
                                            <tr>
                                              <td align="left" scope="row">Address :</td>
                                              <td align="left" id="Address"><strong> </strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Unit # :</td>
                                              <td align="left" id="unit"> </td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">State :</td>
                                              <td align="left" id="state"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">City :	
                                              <br></td>
                                              <td align="left" id="city"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Zip :</td>
                                              <td align="left" id="zip"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Move in Scheduled For :</td>
                                              <td align="left" id="movein"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Holding Fee :</td>
                                              <td align="left"><strong>$<span id="HoldFee"> </span></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">M/O # :</td>
                                              <td align="left" id="mcno"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Date Fee RCVD :</td>
                                              <td align="left" id="daterecievd"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Amount Due : </td>
                                              <td align="left" id="ammount"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">&nbsp;</td>
                                              <td align="left">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2" align="left" scope="row"><strong><h5>Customer Information</h5></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">First Name :</td>
                                              <td align="left" id="firstname"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Last Name : </td>
                                              <td align="left" id="lastname"><strong></strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Current Address :</td>
                                              <td align="left" id="curentadress"></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td>
State :	</td>
                                                  <td id="curent_state"></td>
                                                  <td>City :</td>
                                                  <td id="curent_city"></td>
                                                  <td>Zip :</td>
                                                  <td id="curent_zip">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>Home :	</td>
                                                  <td id="home">&nbsp;</td>
                                                  <td>Cell #</td>
                                                  <td id="cellno">&nbsp;</td>
                                                  <td>Alt :</td>
                                                  <td id="alt">&nbsp;</td>
                                                </tr>
                                              </table></td>
                                              
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
                           <textarea name="expence_comment" id="agent_comment" class="form-control" cols="" rows=""></textarea>
                                  
                          </div>
                          
                          
                       
                         <div class="form-group">
                                  <label for="name">   Attachment :</label>
                        <input name="" type="file"  class="form-control">
                                  
                          </div>
                           <div  id="file"></div>
                     
                  
                  
                  </div> 
                        
                        
                        
                        
                        
                       
                        
                        
                        
                        
                        
                        
                        
                       
                        
                        </div>
                          </div>
                
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
<!--        <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a><br>-->

      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
    function viewfunction(id) {
        var fee_pending_id = id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:"{{ url('pending_fee') }}"+'/'+fee_pending_id,
            method:"GET",
            // data:{fee_pending_id:fee_pending_id},
            success:function(data)
            {

              // console.log(data['agentdisplayname'])
$('#lblDate').html('');
                $('#lblAgentName').html('');
                $('#propertyName').html('');
                $('#Address').html('');
                $('#unit').html('');
               $('#state').html('');
                $('#city').html('');
                $('#zip').html('');
                $('#movein').html('');
                 $('#HoldFee').html('');
                 $('#mcno').html('');
                  $('#daterecievd').html('');
                 $('#ammount').html('')
                 $('#firstname').html('')
                 $('#lastname').html('')
                 $('#curentadress').html('')
                 $('#curent_state').html('');
                 $('#curent_city').html('');
                 $('#curent_zip').html('');
                 $('#home').html('');
                 $('#cellno').html('');
                 $('#alt').html('');
                 $('#agent_comment').html('');
                 $('#file').html('');
                // var result = $.parseJSON(data);
                 
                $('#lblDate').append(data['created_at']);
                $('#lblAgentName').append(data['agentdisplayname']);
                $('#propertyName').append(data['propertyName']);
                $('#Address').append(data['propertyAd']);
                $('#unit').append(data['unitno']);
                $('#state').append(data['statename']);
                $('#city').append(data['cityname']);
                $('#zip').append(data['zipcode']);
                $('#movein').append(data['hlmoveins']);
                 $('#HoldFee').append(data['holdingfee']);
                 $('#mcno').append(data['mcno']);
                 $('#daterecievd').append(data['datefeerec']);
                 $('#ammount').append(data['amountdue']);
                 $('#firstname').append(data['customerf']);
                 $('#lastname').append(data['customerl']);
                 $('#curentadress').append(data['customera']);
                 $('#curent_state').append(data['customerstate']);
                 $('#curent_city').append(data['customercity']);
                 $('#curent_zip').append(data['customerzip']);
                 $('#home').append(data['customerh']);
                 $('#cellno').append(data['customerc']);
                 $('#alt').append(data['customeral']);
                 $('#agent_comment').append(data['agentnotes']);
                 $('#file').append(data['agent_image']);
                
                $('#myModal_pendingfee').modal('show');
            }
        });
    }
</script>
@endsection