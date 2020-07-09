@extends('layouts.login_layout')
@section('content')
<div class="" id="">
  <div class="">
    <div class="">

      <!-- Modal Header -->
      <div class="modal-header">

        <center>  
          <div style="font-family: Arial, Helvetica, sans-serif;font-size: 20px;
          font-style: normal;
          font-weight: bold;
          text-align: center;
          color: #000000;" class="modal-title">
          @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
          Apartment Billing
          @endif
          @if($feeapprovalsdata['hsbilling_id'] != NULL)
          Home  Sale
          @endif
          @if($feeapprovalsdata['hlbilling_id'] != NULL)
          Home Lease 
          @endif
        </div>
      </center>
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
                <tr>
                  <td align="left" scope="row">Agent</td> 
                  <th>
                    @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
                    <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['secongage']}}" name="agent" disabled style="border: none;" >
                    @endif
                    @if($feeapprovalsdata['hlbilling_id'] != NULL)
                    <input type="text"  value="{{$feeapprovalsdata['hlbillings']['agentname']}}" name="agent" disabled style="border: none;" >
                    @endif
                    @if($feeapprovalsdata['hsbilling_id'] != NULL)
                    <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentname']}}" name="agent" disabled style="border: none;" >
                    @endif

                  </th> 
                </tr>

                <tr>
                  <td align="left" scope="row">Agent Comm % :</td>
                  <td align="left">
                   @if($feeapprovalsdata['apartmentbilling_id'] != NULL)

                   <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['comission']}}" name="agent" disabled style="border: none;" >
                   @endif
                   @if($feeapprovalsdata['hlbilling_id'] != NULL)
                   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['agentcomm']}}" name="agent" disabled style="border: none;" >
                   @endif
                   @if($feeapprovalsdata['hsbilling_id'] != NULL)
                   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentcomp']}}" name="agent" disabled style="border: none;" >
                   @endif
                 </td>
               </tr>
               <tr>
                <td align="left" scope="row">2ND Agent :</td>
                <td align="left">
                 @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
                 <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['secongage']}}" name="agent" disabled style="border: none;" >
                 @endif
                 @if($feeapprovalsdata['hlbilling_id'] != NULL)
                 <input type="text"  value="{{$feeapprovalsdata['hlbillings']['secondage']}}" name="agent" disabled style="border: none;" >
                 @endif
                 @if($feeapprovalsdata['hsbilling_id'] != NULL)
                 <input type="text"  value="{{$feeapprovalsdata['hsbillings']['secondage']}}" name="agent" disabled style="border: none;" >
                 @endif
               </td>
             </tr>
             <tr>
              <td align="left" scope="row">2ND Agent Comm Split % :</td>
              <td align="left">
                <label class="custom-control custom-checkbox custom-control-inline">
                 <input type="checkbox" class="custom-control-input" name="">
                 <span class="custom-control-label">50 / 50 Split</span>

               </label>
             </td>
           </tr>
           @if($feeapprovalsdata['hlbilling_id'] !== NULL)
           <tr>
            <td  align="left" scope="row">Primary Agent is :</td>

          </tr>
          <tr>
            <td align="left">
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="">
                <span class="custom-control-label"></span>
                <div style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;
                font-style: normal;
                font-weight: bold;
                color: #000000;"> Listing Agent </div>
              </label>
            </td>
            <td align="left">
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="">
                <span class="custom-control-label"></span>
                <div style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;
                font-style: normal;
                font-weight: bold;
                color: #000000;"> Leasing Agent </div>
              </label>  
            </td>
          </tr>
          <tr>
            @endif
            <!-- home lease -->
               @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                <tr>
                                  <td align="left" scope="">Rent</td>
                                  <th align="left">
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['rentamount']}}" name="agent" disabled style="border: none;" > 
            
                                 </th>   
                                 <tr>
                                  <td align="left" scope="row">Comission %</td>
                                  <th align="left">
                                    @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                      <input type="text"  value="{{$feeapprovalsdata['hlbillings']['commission']}}" name="agent" disabled style="border: none;" >
                                      @endif
                                  </th>
                                 </tr>          
                                 </tr>
                                 @endif
                                 @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                  <tr align="left" style="row">
                                      <td scope="row" align="left">Flat Rate</td> 
                                    <th align="left">
                                      
                                      <input type="text"  value="{{$feeapprovalsdata['hlbillings']['flatrate']}}" name="agent" disabled style="border: none;">  
                                </th>  
                                 </tr>
                                 @endif
                                  @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                  <tr>
                                      <td scope="row" align="left">Bonus</td> 
                                    <th align="left">
                                      
                                      <input type="text"  value="{{$feeapprovalsdata['hlbillings']['bonus']}}" name="agent" disabled style="border: none;"> 
                                </th>  
                                 </tr>
                                 @endif
                                 @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                  <tr>
                                 <td scope="row" align="left">Total Due to VKP</td>
                                 <th align="left">
                                  <input type="text"  value="{{$feeapprovalsdata['hlbillings']['totaldueto']}}" name="agent" disabled style="border: none;">  
                                 </th>
                                </tr>
                                @endif
                                @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                 <tr>
                                  
                                     <td scope="row" align="left">Due to 1st Agent</td> 
                                  <th>
                                    <input type="text"  value="{{$feeapprovalsdata['hlbillings']['duetofirst']}}" name="agent" disabled style="border: none;">  
                                  </th>
                                  </tr>
                                  @endif
                                  @if($feeapprovalsdata['hlbilling_id'] != NULL)
                                   <tr>
                                    <td align="left" scope="row">Due to 2nd Agent</td> 
                                    <th align="left">
                                      <input type="text"  value="{{$feeapprovalsdata['hlbillings']['duetosec']}}" name="agent" disabled style="border: none;">  
                                    </th> 
                                   </tr>
                                   @endif
            <!-- end home lease -->
            @if($feeapprovalsdata['hsbilling_id'] !== NULL)
            <tr>
              <td colspan="5">Primary Agent is:</td>
            </tr>
            <tr>
              <td align="left" scope="row">
                <label class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" name="">
                  <span class="custom-control-label"></span>
                  <div style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;
                  font-style: normal;
                  font-weight: bold;
                  color: #000000;"> Listing Agent
                </div>
              </label>  
            </td>
            <td align="left">
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="">
                <span class="custom-control-label"></span>
                <div style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;
                font-style: normal;
                font-weight: bold;
                color: #000000;"> Buyer Agent </div></label>  
              </td>
            </tr>
            @endif
            <!-- hom sale  -->
            @if($feeapprovalsdata['hsbilling_id'] != NULL)
            <tr>
             <td align="left" scope="row">Contract Date</td>
             <td align="left">
              <input type="text"  value="{{$feeapprovalsdata['hsbillings']['contractdate']}}" name="agent" disabled style="border: none;" >
            </td>
          </tr>
          @endif
          @if($feeapprovalsdata['hsbilling_id'] != NULL)
          <tr>
           <td align="left" scope="row">Selling Price</td>
           <td align="left">
            <input type="text"  value="{{$feeapprovalsdata['hsbillings']['sellingprice']}}" name="agent" disabled style="border: none;" >
          </th>
        </td>
        @endif
        @if($feeapprovalsdata['hsbilling_id'] != NULL)
        <tr>
         <td align="left" scope="row">Closed of Escrow</td>
         <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['hsbillings']['closedofesc']}}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      @endif
      @if($feeapprovalsdata['hsbilling_id'] != NULL)
      <tr>
       <td align="left" scope="row">Escrow<#</td>
       <td align="left" scope="row">
        <input type="text"  value="{{$feeapprovalsdata['hsbillings']['escrowno']}}" name="agent" disabled style="border: none;" >
      </td>
    </tr>
    @endif
    @if($feeapprovalsdata['hsbilling_id'] != NULL)
    <tr>
     <td align="left" scope="row">Title Company</td>
     <td align="left" scope="row">
      <input type="text"  value="{{$feeapprovalsdata['hsbillings']['titlecomp']}}" name="agent" disabled style="border: none;" >
    </td>
  </tr>
  @endif
  @if($feeapprovalsdata['hsbilling_id'] != NULL)
  <tr>
   <td align="left" scope="row">Title Company ph#</td>
   <td align="left">
    <input type="text"  value="{{$feeapprovalsdata['hsbillings']['titlecompany2']}}" name="agent" disabled style="border: none;" >
  </td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td align="left" scope="row">Comission percentage rate</td>
 <td align="left">
  <input type="text"  value="{{$feeapprovalsdata['hsbillings']['commper']}}" name="agent" disabled style="border: none;" >
</td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td scope="row" align="left">Amount Due to VKP</td>
 <td align="left">
  <input type="text"  value="{{$feeapprovalsdata['hsbillings']['totaldueto']}}" name="agent" disabled style="border: none;" >
</td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td scope="row" align="left">Due to 1st Agent</td>
 <td align="left">
  <input type="text"  value="{{$feeapprovalsdata['hsbillings']['duetofirst']}}" name="agent" disabled style="border: none;" >
</td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td align="left" scope="row">Due to 2nd Agent</td>
 <td align="left">
  <input type="text"  value="{{$feeapprovalsdata['hsbillings']['duetosecond']}}" name="agent" disabled style="border: none;" >
</td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td align="left" scope="row">Verified By</td>
 <td align="left">
  <input type="text"  value="{{$feeapprovalsdata['hsbillings']['verifiedby']}}" name="agent" disabled style="border: none;" >
</td>

</tr>
@endif
<!-- end home sale -->
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td align="left"><strong><h3>Buyer Broker</h3></strong></td>
</tr>
@endif

<!-- home sale buyer broke -->
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td scope="row" align="left">Re-Company</td> 
  <td align="left">
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['companyname']}}" name="agent" disabled style="border: none;" >
 </td> 
</tr>
@endif


@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td align="left" scope="row">Buyer Broker</td> 
  <td align="left">
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['buyerbroke']}}" name="agent" disabled style="border: none;" >
 </td> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td align="left" scope="row">Agent :</td> 
  <td align="left">
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentname']}}" name="agent" disabled style="border: none;" >
 </td> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td align="left" scope="row">Referal Amount</td> 
  <td align="left">
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['referalamount']}}" name="agent" disabled style="border: none;" >
 </td> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td scope="row" align="left">Address</td> 
  <td align="left">
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['propertyad']}}" name="agent" disabled style="border: none;" >
 </td> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)

<tr>

 <td align="left" scope="row">Buyer Name : </td>
 <td align="left">  
  <input type="text"  value="{{$feeapprovalsdata['hsbillings']['buyername']}}" name="agent" disabled style="border: none;" >

</td> 
</tr> 
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr> 
  <td align="left" scope="row"> Buyer Phone</td>
  <td align="left">
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['buyerphone']}}" name="agent" disabled style="border: none;" >
 </td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)

<tr>

 <td align="left" scope="row">Seller  Name : </td>
 <td align="left"><input type="text"  value="{{$feeapprovalsdata['hsbillings']['sellername']}}" name="agent" disabled style="border: none;" >

 </td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)                   
<tr>

 <td align="left" scope="row">Seller  Phone : </td>
 <td align="left"><input type="text"  value="{{$feeapprovalsdata['hsbillings']['sellerphone']}}" name="agent" disabled style="border: none;" >

 </td>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)                   
<tr>

 <td align="left" scope="row">Property Address : </td>
 <td align="left"><input type="text"  value="{{$feeapprovalsdata['hsbillings']['propertyad']}}" name="agent" disabled style="border: none;" ></td>

</tr>
@endif
<!-- end home sale buyer broke -->

@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>  
  <td align="left" scope="row">
   Appartment move in rent
 </td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['rent']}}" name="agent" disabled style="border: none;" >
 </th>
</tr>
@endif


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
@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
  <td colspan="2" align="left" scope="row"><strong><h5>Billing Information</h5>
  </strong></td>
</tr>
<tr>
  <td align="left" scope="row">Community Name :</td>
  <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['communityname']}}" name="agent" disabled style="border: none;" >
  </td>
</tr>
<tr>
  <td align="left" scope="row">MGMT COMPANY :</td>
  <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['agentcomp'] ? $feeapprovalsdata['apartmentbillings']['agentcomp'] : '1st to Rent' }}" name="agent" disabled style="border: none;" >
  </td>
</tr>
<tr>
  <td align="left" scope="row">Address :</td>
  <td align="left">
    <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantadd'] ? $feeapprovalsdata['apartmentbillings']['agentcomp'] : '1st to Rent' }}" name="agent" disabled style="border: none;" >
  </td>
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

  @endif
 
    @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
    <tr>
      <td colspan="2" align="left" scope="row"><strong><h5>Tenant Information</h5></strong></td>
    </tr>
    <tr>
      <td align="left" scope="row">Deposit Ref # :  
        <br></td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['depositrefno'] ? $feeapprovalsdata['apartmentbillings']['agentcomp'] : '1st to Rent' }}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      <tr>
        <td align="left" scope="row">Tenant Name :</td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantname'] ? $feeapprovalsdata['apartmentbillings']['tenantname'] : 't name' }}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      <tr>
        <td align="left" scope="row">Address :</td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantaddress'] ? $feeapprovalsdata['apartmentbillings']['tenantaddress'] : 't address' }}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      <tr>
        <td align="left" scope="row">Unit # :</td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantunit'] ? $feeapprovalsdata['apartmentbillings']['tenantunit'] : 'unit' }}" name="agent" disabled style="border: none;" >
        </td>
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
          @endif
          @if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="2" align="left" scope="row"><strong><h5>Billing Information</h5>
  </strong></td>
</tr>
<tr>
  <td align="left" scope="row">Community Name :</td>
  <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['hlbillings']['companyadd']}}" name="agent" disabled style="border: none;" >
  </td>
</tr>
<tr>
  <td align="left" scope="row">Buyer Broker % :</td>
  <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['hlbillings']['buyerbroke'] ? $feeapprovalsdata['hlbillings']['buyerbroke'] : '10 %' }}" name="agent" disabled style="border: none;" >
  </td>
</tr>
<tr>
  <td align="left" scope="row">Agent:</td>
  <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['hlbillings']['agentname'] ? $feeapprovalsdata['hlbillings']['agentname'] : 'Macro1' }}" name="agent" disabled style="border: none;" >
  </td>
</tr>
<tr>
  <td align="left" scope="row">Referal Amount:</td>
  <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['hlbillings']['referalamount'] ? $feeapprovalsdata['hlbillings']['referalamount'] : '1200' }}" name="agent" disabled style="border: none;" >
  </td>
</tr>
<tr>
  <td align="left" scope="row">Address :</td>
  <td align="left">
    <td align="left">
     <input type="text"  value="{{$feeapprovalsdata['hlbillings']['companyadd'] ? $feeapprovalsdata['hlbillings']['agentcomp'] : 'Lahore' }}" name="agent" disabled style="border: none;" >
  </td>
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

  @endif
  
    @if($feeapprovalsdata['hlbilling_id'] != NULL)
    <tr>
      <td colspan="2" align="left" scope="row"><strong><h5>Tenant Information</h5></strong></td>
    </tr>
 
      <tr>
        <td align="left" scope="row">Tenant Name :</td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantname'] ? $feeapprovalsdata['hlbillings']['tenantname'] : 't name' }}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      <tr>
        <td align="left" scope="row">Address :</td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantadd'] ? $feeapprovalsdata['hlbillings']['tenantadd'] : 't address' }}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      <tr>
        <td align="left" scope="row">Unit # :</td>
        <td align="left">
          <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantunit'] ? $feeapprovalsdata['hlbillings']['tenantunit'] : 'unit' }}" name="agent" disabled style="border: none;" >
        </td>
      </tr>
      <tr>
        <td align="left" scope="row" colspan="2">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td> State :  </td>
              <td><input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantstate'] ? $feeapprovalsdata['hlbillings']['tenantstate'] : 'state' }}" name="agent" disabled style="border: none;" ></td>
              <td>City :</td>
              <td><input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantcity'] ? $feeapprovalsdata['hlbillings']['tenantcity'] : 'state' }}" name="agent" disabled style="border: none;" ></td>
              <td>Zip :</td>
              <td>
                  <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantzip'] ? $feeapprovalsdata['hlbillings']['tenantzip'] : 'state' }}" name="agent" disabled style="border: none;" >
              </td>
            </tr>
            <tr>
              <td>Lease Start :</td>
              <td>
                <input type="text"  value="{{$feeapprovalsdata['hlbillings']['leesestart'] ? $feeapprovalsdata['hlbillings']['leesestart'] : 'leesestart' }}" name="agent" disabled style="border: none;" >
              </td>
              <td>Lease Term :</td>
              <td>
                   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['leeseterms'] ? $feeapprovalsdata['hlbillings']['leeseterms'] : 'leeseterms' }}" name="agent" disabled style="border: none;" >
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </td>

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
          @endif

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
    <span id="lblInvoiceNo">
      {{$invoicecount}}
    </span><br>
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
          <span id="lblInvAgentPerc" style="font-weight:bold;">
             @if($feeapprovalsdata['hsbilling_id'] != NULL)
                   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentcomp']}}" name="agent" disabled style="border: none;" >
                   @endif
          </span></td>
        </tr>
        <tr>
          <td>
          Total Due to VKP :</td>
          <td>
            <span id="lblInvVkpTotal" style="font-weight:bold;">
               @if($feeapprovalsdata['hsbilling_id'] != NULL)
                   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['totaldueto']}}" name="agent" disabled style="border: none;">
                   @endif
            </span></td>
          </tr>
          <tr>
            <td>
            Due to 1st Agent :</td>
            <td>
              <span id="lblInv1stAgent" style="font-weight:bold;">
                 @if($feeapprovalsdata['hsbilling_id'] != NULL)
                   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['duetofirst']}}" name="agent" disabled style="border: none;" >
                   @endif
              </span></td>
            </tr>
            <tr>
              <td>
              Due to 2nd Agent :</td>
              <td>
                <span id="lblInvSecondAgent" style="font-weight:bold;">
                   @if($feeapprovalsdata['hsbilling_id'] != NULL)
                   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['duetosecond']}}" name="agent" disabled style="border: none;" >
                   @endif
                </span></td>
              </tr><br>
              <tr>
                <td scope="row" align="left">
                        <a href=""  class="btn btn-primary form_box_cust_btn submit_country_form btn_add_country float-right">Print</a>
                  
                </td>
              </tr>

            </div>





          </div>













        </div>
      </div>










    </div>
    @endsection