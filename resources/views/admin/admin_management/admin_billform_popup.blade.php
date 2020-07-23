@extends('layouts.login_layout')
@section('content')

 
  <div class="modal-popup ">
    <div class="modal-test">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Apartment Billing</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                     
      <div class="col-md-12">
      
         <div class="row">
                             
                  <div class="col-md-6">
                  
                  <div>
                  <table width="100%" class=" table_responsive2">
                    @foreach($result as $data)
                                                 <tbody>
                                        
                                            <tr>
                                              <td width="8%" align="left" scope="row">Move In # :</td>
                                              <td width="8%" align="left">1</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Agent :</td>
                                              <td align="left">
                                                 
                                                @if(isset($data['apartmentbillings'] ))
        <?php $apartmentbillings = DB::table('agents')->select('agentdisplayname')->where('id', $data['apartmentbillings']['agent_id'])->first();  ?>


                                                {{$apartmentbillings->agentdisplayname}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['agentname']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['agentname']}}
                                                 @endif
 
                                              </td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Agent Comm % :</td>
                                              <td align="left">
                                                @if(isset($data['apartmentbillings'] ))
        


                                                {{$data['apartmentbillings']['agentcomp']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['agentcomm']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['agentcomp']}}
                                                 @endif
                                              </td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">2ND Agent :</td>
                                              <td align="left"> 
                                                @if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['secongage']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['secondage']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['secondage']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">2ND Agent Comm Split % :</td>
                                              <td align="left">50 / 50 Split</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Apartment Move In<br></td>
                                              <td align="left">
                                              @if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['moveinno']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['moveinno']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['moveinno']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Rent :</td>
                                              <td align="left">
                                              @if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['rent']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['rentamount']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['rent']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Auto Pay $ RCVD :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['autopayrecord']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['autopayrecord']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['autopayrecord']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Commission % :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['comission']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['commission']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['commission']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Bonus :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['bonus']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['bonus']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['bonus']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Total Due to VKP :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['totaldueto']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['totaldueto']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['totaldueto']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Due to 1st Agent :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['duetofirst']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['duetofirst']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['duetofirst']}}
                                                 @endif</td>
                                            </tr>
                                                 <tr>
                                              <td align="left" scope="row">Due to 2nd Agent :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['duetosec']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['duetosec']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['duetosecond']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Verified By :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['verifiedby']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['verifiedby']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['verifiedby']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td height="40" colspan="2" align="left" scope="row"><strong><h5>Billing Information</h5>
                                              </strong></td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Community Name :</td>
                                              <td align="left">
                                              @if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantaddress']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantadd']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantaddress']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Address :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantaddress']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantadd']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantaddress']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td>
State :	</td>
                                                  <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantstate']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantstate']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantstate']}}
                                                 @endif</td>
                                                  <td>City :</td>
                                                  <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantcity']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantcity']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantcity']}}
                                                 @endif</td>
                                                  <td>Zip :</td>
                                                  <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantzip']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tanantzip']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tanantzip']}}
                                                 @endif</td>
                                                </tr>
                                              </table></td>
                                              
                                            </tr>
                                         
                                         
                                            <tr>
                                              <td colspan="2" align="left" scope="row"><label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input">
                                              <span class="custom-control-label">Click to Confirm That This is The Correct Address of Residence </span></label></td>
                                            </tr>
                                               <tr>
                                              <td colspan="2" align="left" scope="row">&nbsp;</td>
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
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantname']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantname']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantname']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Address :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantaddress']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantadd']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantaddress']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row">Unit # :</td>
                                              <td align="left">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantunit']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantunit']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantunit']}}
                                                 @endif</td>
                                            </tr>
                                            <tr>
                                              <td align="left" scope="row" colspan="2">
                                              
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                   <tr>
                                                  <td>
State : </td>
                                                  <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantstate']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantstate']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantstate']}}
                                                 @endif</td>
                                                  <td>City :</td>
                                                  <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantcity']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tenantcity']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tenantcity']}}
                                                 @endif</td>
                                                  <td>Zip :</td>
                                                  <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['tenantzip']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['tanantzip']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['tanantzip']}}
                                                 @endif</td>
                                                </tr>
                                                  <tr>
                                                    <td>Lease Start :</td>
                                                    <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['leesestart']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['leesestart']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['leesestart']}}
                                                 @endif</td>
                                                    <td>Lease Term :</td>
                                                    <td>@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['leeseterms']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['leeseterms']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['leeseterms']}}
                                                 @endif</td>
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
                                        @endforeach
                                    </table>
                  </div>
                  
                  </div>       
                        
                        
                        
                        
                        
                        <div class="col-md-6">
                       <div class="form-group">
                                  <label for="name">Agent Notes :</label>
                           <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows="">@if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['agentnotes']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['agentnotes']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['agentnotes']}}
                                                 @endif</textarea>
                                  
                          </div>
                       
                         <div class="form-group">
                                  <label for="name">   Attachment :</label>
                        <input name="" type="file" class="form-control">
                        @if(isset($data['apartmentbillings'] ))
                                        {{$data['apartmentbillings']['file']}}
                                                @endif       
                                                @if(isset($data['hlbillings'] ))                                          
                                                {{$data['hlbillings']['file_attachment']}}
                                                @endif
                                                 @if(isset($data['hsbillings'] ))
                                                 {{$data['hsbillings']['file_attachment']}}
                                                 @endif
                                  
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
 



@endsection