@extends('layouts.login_layout')
@section('content')



<div class="container-fluid">

<form id="validationform" action="{{ route('feeapproval.store',$feeapprovalsdata->id) }}" method="POST" data-parsley-validate="" novalidate="">
 @csrf
  <div class="d-flex justify-content-center"
  style="font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  font-style: normal;
  font-weight: bold;
  color: #000000;">
  @if ($message = Session::get('success'))
  @if($feeapprovalsdata['hlbilling_id'] != NULL)
<div class="alert alert-success">
  <button type="button" class="close"  data-dismiss="alert">×</button> 
        
        <strong>{{ $lastinvoice->id }} {{ $message }}  </strong> 
      <div>
    <a href="" onclick="window.open('{{ route('invoice.edit',$lastinvoice->id)}}', '_blank', 'location=yes,height=570,width=1000,scrollbars=yes,status=yes');">
    VIEW
  </a>
   <a href="#">
    ok
  </a>
      </div>
</div>




@endif
@endif
 @if ($message = Session::get('success'))
  @if($feeapprovalsdata['hsbilling_id'] != NULL)

<div class="alert alert-success">
  <button type="button" class="close"  data-dismiss="alert">×</button> 
       
        <strong>  {{ $lastinvoice->id }}  {{ $message }} </strong> 
      <div>
    <a href="" onclick="window.open('{{ route('invoice.edit',$lastinvoice->id)}}', '_blank', 'location=yes,height=570,width=1000,scrollbars=yes,status=yes');">
    VIEW
  </a>
   <a href="#">
    ok
  </a>
      </div>
</div>
 
@endif
@endif
 @if($message = Session::get('success'))
  @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<div class="alert alert-success">
  <button type="button" class="close"  data-dismiss="alert">x</button> 
        
        <strong>{{ $lastinvoice->id }} {{ $message }} </strong> 
         <div>
    <a href="" onclick="window.open('{{ route('invoice.edit',$lastinvoice->id)}}', '_blank', 'location=yes,height=570,width=1000,scrollbars=yes,status=yes');">
    VIEW
  </a>
   <a href="#">
    ok
  </a>
      </div>
</div>




@endif
@endif
  @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
   <input type="checkbox" style="display: none;" name="billType" value="1" >
  <input type="hidden" name="apartmentbilling_id" value="{{$feeapprovalsdata['apartmentbillings']['id']}}">
  <h3>
    Apartment Billing move in for the month of 
  </h3>
 
  @endif
  @if($feeapprovalsdata['hlbilling_id'] != NULL)
<input type="checkbox" style="display: none;" name="billType" value="2">
<input type="hidden" name="hlbilling_id" value="{{$feeapprovalsdata['hlbillings']['id']}}">
  Home Lease move in for the month of 
  @endif
  @if($feeapprovalsdata['hsbilling_id'] != NULL)
  Home Sale
  <input type="checkbox" style="display: none;" name="billType" value="3">
  <input type="hidden" name="hsbilling_id" value="
  {{ $feeapprovalsdata['hsbillings']['id'] }}">
  @endif



  @if($feeapprovalsdata['apartmentbilling_id'] != NULL )
  <select name="" class="form-control" style="width:100px;" ="">
    <option value="1">January</option>
    <option value="2">Feburary</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option selected="selected" value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
  </select>
  @endif
</div><br>






<div class="row">

 <div class="col-md-7">
   
    <table> 
       @if($feeapprovalsdata['hsbilling_id'] != NULL)
      <tr>
       <td colspan="5">Billing #</td>
       <th>{{ $hsbillingid }}</th>
     </tr>
     @endif
    @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
      <tr>
        <td colspan="5">Billing #</td>
        <th>{{ $apbillingrecords }}</th>
      </tr>
    @endif
    </>
     @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
      <tr>
        <td colspan="5">Agent</td>
   <th>
      <input type="text" name="agentid" value="{{$agentid['agentdisplayname']}}" style="border: none;" >
    </th>
      </tr>
    @endif
     @if($feeapprovalsdata['hlbilling_id'] != NULL)
      <tr>
        <td colspan="5">Billing #</td>
        <th>{{ $hlbillingrecords }}</th>
      </tr>
    @endif
     @if($feeapprovalsdata['hlbilling_id'] != NULL)
      <tr>
        <td colspan="5">Agent</td>
        <th><input type="text" name="agent_id" value="{{ $hlagentid['agentdisplayname'] }}" style="border: none;" >
          <input type="hidden" name="agent_id" value="{{ $feeapprovalsdata['inv_agent']['id']}}">
        </th>
      </tr>
    @endif
    

     <tr>
      <td colspan="5">Agent Comission</td> 
      <th>@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
       <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['comission']}}" name=" AdjustCommission"  style="border: none;" readonly>
       @endif
       @if($feeapprovalsdata['hlbilling_id'] != NULL)
       <input type="text"  value="{{$feeapprovalsdata['hlbillings']['agentcomm']}}" name="  AdjustCommission"  style="border: none;" >
       @endif
       @if($feeapprovalsdata['hsbilling_id'] != NULL)
       <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentcomp']}}" name="  AdjustCommission"  style="border: none;" >
       @endif

     </th> 
   </tr>
   <tr>
     <td colspan="5">2nd Agent</td> 
     <th >
       @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
       <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['secongage']}}" name="secondagent"  style="border: none;" >
       @elseif($feeapprovalsdata['hlbilling_id'] != NULL)
       <input type="text"  value="{{$feeapprovalsdata['hlbillings']['secondage']}}" name="secondagent"  style="border: none;" >
       @else($feeapprovalsdata['hsbilling_id'] != NULL)
       <input type="text"  value="{{$feeapprovalsdata['hsbillings']['secondage']}}" name="secondagent"  style="border: none;" >
       @endif
     </th>


   </tr>
   <tr>
    <td colspan="5">Comission Split By <br> default 25%</td> 
    <td><label class="custom-control custom-checkbox custom-control-inline">
     <input type="checkbox" class="custom-control-input"
      name="VKPSplit" value="25">
     <span class="custom-control-label"></span>
   </label></td> 
 </tr>
 @if($feeapprovalsdata['hlbilling_id'] !== NULL)
 <tr>
  <td colspan="5">Primary Agent is :</td>

</tr>
<tr>
 <td colspan="5">
  <label class="custom-control custom-checkbox custom-control-inline">
   <input type="checkbox" class="custom-control-input" name="">
   <span class="custom-control-label"></span>
   <div style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;
   font-style: normal;
   font-weight: bold;
   color: #000000;"> Listing Agent </div>
 </label>
</td>
<td>
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
 @endif

 @if($feeapprovalsdata['hsbilling_id'] !== NULL)
 <tr>
  <td colspan="5">Primary Agent is:</td>
</tr>
<tr>
 <td colspan="5">
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
<td>
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

@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>	
 <td colspan="5">Appartment move in rent</td>
 <th>  <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['rent']}}" name="Rent"  style="border: none;" ></th>
</tr>
@endif

@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td>Rent</td>
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['rentamount']}}" name="Rent"  style="border: none;" > 

 </th>   
 <tr>
  <td colspan="5">Comission %</td>
  <th>
   @if($feeapprovalsdata['hlbilling_id'] != NULL)
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['commission']}}" name="FirstAgentCommPercentage"  style="border: none;" >
   @endif
 </th>
</tr>   	     	
</tr>
@endif

@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
 <td colspan="5">Flat Rate</td> 
 <th>

   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['flatrate']}}" name="FlatRate"  style="border: none;">	
 </th>  
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
 <td colspan="5">Bonus</td> 
 <th>

   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['bonus']}}" name="Bonus"  style="border: none;">	
 </th>  
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
 <td colspan="5">Total Due to VKP</td>
 <th>
  <input type="text"  value="{{$feeapprovalsdata['hlbillings']['totaldueto']}}" name="AmountDueToVKP"  style="border: none;">	
</th>
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>

 <td colspan="5">Due to 1st Agent</td> 
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['duetofirst']}}" name="DueToFirstAgent"  style="border: none;">	
 </th>
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Due to 2nd Agent</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['duetosec']}}" name="DueToSecondAgent"  style="border: none;">	
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Contract Date</td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['contractdate']}}" name="LastContractDate"  style="border: none;" >
 </th>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Selling Price</td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['sellingprice']}}" name="sellingprice"  style="border: none;" >
 </th>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Closed of Escrow</td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['closedofesc']}}" name="agent"  style="border: none;" >
 </th>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Escrow<#</td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['escrowno']}}" name="agent"  style="border: none;" >
 </th>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Title Company</td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['titlecomp']}}" name="InvoiceMgmtCompNam"  style="border: none;" >
 </th>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Title Company ph#</td>
 <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['titlecompany2']}}" name="InvoiceMgmtPhoneNo"  style="border: none;" >
 </th>
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
 <td colspan="5">Comission percentage rate</td>
   <th>
     <input type="text"  value="{{$feeapprovalsdata['hsbillings']['commper']}}" name="VKPPercentage"  style="border: none;" >
   </th>
 </tr>
 @endif
 @if($feeapprovalsdata['hsbilling_id'] != NULL)
 <tr>
   <td colspan="5">Amount Due to VKP</td>
   <th>
     <input type="text"  value="{{$feeapprovalsdata['hsbillings']['totaldueto']}}" name="AmountDueToVKP"  style="border: none;" >
   </th>
 </tr>
 @endif
 @if($feeapprovalsdata['hsbilling_id'] != NULL)
 <tr>
   <td colspan="5">Due to 1st Agent</td>
   <th>
     <input type="text"  value="{{$feeapprovalsdata['hsbillings']['duetofirst']}}" name="DueToFirstAgent"  style="border: none;" >
   </th>
 </tr>
 @endif
 @if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
      <td colspan="5">Due to 2nd Agent</td>

     <th>
       <input type="text"  value="{{$feeapprovalsdata['hsbillings']['duetosecond']}}" name="DueToSecondAgent"  style="border: none;" >
     </th>
   </tr>
   @endif
   @if($feeapprovalsdata['hsbilling_id'] != NULL)
   <tr>
     <td colspan="5">Verified By</td>
     <th>
       <input type="text"  value="{{$feeapprovalsdata['hsbillings']['verifiedby']}}" name=" Verifier"  style="border: none;" >
     </th>
   </tr>
   @endif
   @if($feeapprovalsdata['hlbilling_id'] != NULL)
   <tr>
     <td colspan="5">Verified By</td>
     <th>
       <input type="text"  value="{{$feeapprovalsdata['hlbillings']['verifiedby']}}" name="Verifier"  style="border: none;" >
     </th>
   </tr>
   @endif
   @if($feeapprovalsdata['hlbilling_id'] != NULL)
   <tr>
     <td colspan="5">Move in $ RCVD</td>
     <th>

       <input type="text"  value="{{$feeapprovalsdata['hlbillings']['moveinno']}}" name="agent"  style="border: none;" ></th>
     </tr>
       @endif
      
   @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
   <tr>

     <td colspan="5">Auto Pay $ RCVD</td> 
     <th>

       <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['autopayrecord']}}" name="autopay"  style="border: none;" >
     </th>
   </tr>
   @endif

 </table>
 <br><br><br>
 @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
 <div style="
 font-family: Arial, Helvetica, sans-serif;
 font-size: 15px;
 font-style: normal;
 font-weight: bold;
 text-decoration: none;
 color: #000000;">
 Billing Information
</div>
@endif

@if($feeapprovalsdata['apartmentbilling_id'] !=  NULL)
<tr>
  <td colspan="5">Community Name</td> 
  <td><input type="text" 
    value="
    {{ $feeapprovalsdata['apartmentbillings']['communityname'] }}" name="APCompanyName"  style="border: none;"></td>  
</tr>
@endif

@if($feeapprovalsdata['apartmentbilling_id'] !=  NULL)
<tr><br>
  <td  width="8%" colspan="7">MGMT Company</td> 
  <td colspan="5"><input type="text" value="{{$mgmtcompname['MgmtCompName']}}" name="InvoiceMgmtCompName"  style="border: none;"></td>  
</tr>
@endif

@if($feeapprovalsdata['hsbilling_id'] != NULL)
<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Buyer Broker
</div>
@endif

@if($feeapprovalsdata['hlbilling_id'] != NULL)
<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Billing Information
</div>
@endif
<table > 
 @if($feeapprovalsdata['hsbilling_id'] != NULL)
 <tr>
  <td colspan="5" >Re-Company</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['companyname']}}" name="hscompanyname"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Community name</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['companyadd']}}" name="hlcommunitynam"  style="border: none;" >
 </th> 
</tr>
@endif  
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Buyer Broke %</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['buyerbroke']}}" name="hlbuyerbroke "  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Agent</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['agentname']}}" name="agent"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Referal Amount</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['referalamount']}}" name="hlreferalamount"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Address</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['companyadd']}}" name="agent"  style="border: none;" >
 </th> 
</tr>
@endif

@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td colspan="5">Buyer Broker</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['buyerbroke']}}" name="APBuyerBrokerPercentage"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td colspan="5">Agent :</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['agentname']}}" name="APAgentName"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td colspan="5">Referal Amount</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['referalamount']}}" name="APReferalAmount"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)
<tr>
  <td colspan="5">Address</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['propertyad']}}" name="InvoiceMgmtAddress1"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)

<tr>

 <td colspan="5">Buyer Name : </td>
 <th><input type="text"  value="{{$feeapprovalsdata['hsbillings']['buyername']}}" name="agent"  style="border: none;" ></th>
  
</tr>
<tr>
<td colspan="5"> Buyer ph#:</td> 
 <th><label>
   <input type="text"  value="{{$feeapprovalsdata['hsbillings']['buyerphone']}}" name="buyername"  style="border: none;" >
 </label>

</th>


</tr>
@endif
@if($feeapprovalsdata['hsbilling_id'] != NULL)

<tr>

 <td colspan="5">Seller  Name : </td>
  <th><p><input type="text"  value="{{$feeapprovalsdata['hsbillings']['sellername']}}" name="sellername"  style="border: none;" ></p>

</th>
</tr>
<tr>  
<td colspan="5">Seller ph#: </td>
 <th><label>
   <p><input type="text"  value="{{$feeapprovalsdata['hsbillings']['sellerphone']}}" name="agent" 
     style="border: none;" ></p>
 </label>

</th>

</tr>
@endif




<tr>
 <td colspan="5">Address</td>
 <th>100</th>
</tr>

<tr>

 <td colspan="5">state 
 </td>
 <td>{{ $statData['statename'] }}</td>
 </tr>
 <tr>
   <td colspan="5">City</td>
   <td>{{ $citydata['cityname'] }}</td>
 </tr>  
 <tr>
  <td colspan="5">ZzipCode</td>
 <td> {{$zipdata['zipcode']}} </td>

 </tr>

 <tr>
  <td colspan="5"><label class="custom-control custom-checkbox custom-control-inline">
   <input type="checkbox" class="custom-control-input" name="">
   <span class="custom-control-label"></span>
 </label>
</td> 
 <th>Click to Confirm That This is The Correct Property</th> 
</tr>

 
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Tenant Information
</div>

@endif
 @if($feeapprovalsdata['hlbilling_id'] != NULL)
 <tr>
  <td colspan="5">Tenant Name</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantname']}}" name="TenantName"  style="border: none;" >
 </th> 
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5"> Tenant Unit </td>
  <th>
    <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantunit']}}" name="TenantUnitNo"  style="border: none;" >
  </th> 
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5"> Tenant Unit </td>
  <th>
    <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantunit']}}" name="TenantUnitNo"  style="border: none;" >
  </th> 
</tr>
@endif

 @if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
 
  <td colspan="5">state : </td>
  <th><input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantstate']}}" name="tenant_state_i"  style="border: none;" >

  </th>
</tr>  
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">City: </td>
  <th>
   <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantcity']}}" name=" tenant_city_i"  style="border: none;" >

 </th>
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<tr>
  <td colspan="5">Zip</td>
  <td>
    <input type="text"  value="{{$feeapprovalsdata['hlbillings']['tenantzip']}}" name="tenant_zipcode_id"  style="border: none;">
  </td>
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)

<tr>

 <td colspan="5">Lease Start : 
 </td>  
 <th> <input type="text"  value="{{$feeapprovalsdata['hlbillings']['leesestart']}}" name="LeaseStartDate"  style="border: none;">
 </th>
</tr>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)

<tr>

 <td colspan="5">Lease Terms : 
 </td>  
 <th> <input type="text"  value="{{$feeapprovalsdata['hlbillings']['leeseterms']}}" name="Leaseterm"  style="border: none;">
 </th>
</tr>
@endif

@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Tenant Information
@endif
</div>

<table> 
 



 
@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
  <td colspan="5">Address</td> 
  <th>
   <input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantaddress']}}" name="TenantAddresss"  style="border: none;" >
 </th>
</tr>
@endif

 @if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
 
  <td colspan="5">state : </td>
  <th><input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantstate']}}" name=" tenant_state_id"  style="border: none;" >
    <input type="hidden" name="{{$feeapprovalsdata['']}}">

  </th>
</tr>  
@endif
@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
 
  <td colspan="5">City : </td>
  <th><input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantcity']}}" name=" tenant_city_id"  style="border: none;" >

  </th>
</tr>  
@endif
@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
 
  <td colspan="5">Zip :</td>
  <th><input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['tenantzip']}}" name=" tenant_zipcode_id"  style="border: none;" >

  </th>
</tr>  
@endif
@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
 
  <td colspan="5">Lease Start : </td>
  <th><input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['leesestart']}}" name="   LeaseStartDate"  style="border: none;" >

  </th>
</tr>  
@endif
@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<tr>
 
  <td colspan="5">LeeseTerms : </td>
  <th><input type="text"  value="{{$feeapprovalsdata['apartmentbillings']['leeseterms']}}" name="Leaseterm"  style="border: none;" >

  </th>
</tr>  
@endif

@if($feeapprovalsdata['apartmentbilling_id'] !== NULL)
<tr>
  <td colspan="5">
    <label class="custom-control custom-checkbox custom-control-inline">
   <input type="checkbox" value="coreectaddress" class="custom-control-input" name="checkboxesname[]">
   <span class="custom-control-label"></span>
 </label></td> 
 <th>Click to Confirm That This is The<br> Correct Address of Residence</th> 
</tr>

<tr>
  <td colspan="5"><label class="custom-control custom-checkbox custom-control-inline">
   <input type="checkbox" class="custom-control-input" value="changetenant" name="checkboxesname[]">
   <span class="custom-control-label"></span>
 </label></td> 
 <th>Change Tenant Address</th> 
</tr>
@endif

</table>


</div>

<div class="col-md-5">
  <div style="
 font-family: Arial, Helvetica, sans-serif;
 font-size: 12px;
 font-style: normal;
 font-weight: bold;
 text-decoration: none;
 color: #000000;">
Agent Notes :

</div>

@if($feeapprovalsdata['hsbilling_id'] != NULL)

<textarea class="form-control" name="InvoiceNote" rows="7" cols="3">
  @if(isset($feeapprovalsdata['hsbillings']['agentnotes']))
  @php
  echo $feeapprovalsdata['hsbillings']['agentnotes']
  @endphp
  @endif
</textarea>
@endif



@if($feeapprovalsdata['apartmentbilling_id'] != NULL)
<textarea class="form-control" name="InvoiceNote" rows="7" cols="3">
 @if(isset($feeapprovalsdata['apartmentbilling_id']['agentnotes']))
 @php
 echo $feeapprovalsdata['apartmentbillings']['agentnotes']
 @endphp
 @endif
</textarea>
@endif
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<textarea class="form-control" name="InvoiceNote" rows="7" cols="3">

 @if(isset($feeapprovalsdata['hlbillings']['agentnotes']))
 @php
 echo $feeapprovalsdata['hlbillings']['agentnotes']
 @endphp
 @endif
</textarea>
@endif

<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Attachment :
</div>
<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Admin Notes :
</div>
@if($feeapprovalsdata['hlbilling_id'] != NULL)
<textarea class="form-control" name="InvoiceNote" rows="7" cols="3">

 @if(isset($feeapprovalsdata['hlbillings']['agentnotes']))
 @php
 echo $feeapprovalsdata['hlbillings']['agentnotes']
 @endphp
 @endif
</textarea>
@endif

@if($feeapprovalsdata['hsbilling_id'] != NULL)
<textarea class="form-control" name="InvoiceNote" rows="7" cols="3">

 @if(isset($feeapprovalsdata['hsbillings']['agentnotes']))
 @php
 echo $feeapprovalsdata['hsbillings']['agentnotes']
 @endphp
 @endif
</textarea>
@endif
@if($feeapprovalsdata['apartementbilling_id'] != NULL)
<textarea class="form-control" name="InvoiceNote" rows="7" cols="3">

 @if(isset($feeapprovalsdata['apartmentbillings']['agentnotes']))
 @php
 echo $feeapprovalsdata['apartmentbillings']['agentnotes']
 @endphp
 @endif
</textarea>
@endif

<br>
<table>
  <tr>
   <td>
    <div class="col-md-2">
     <a href="" class="btn btn-primary form_box_cust_btn submit_country_form btn_add_country">Print</a>


   </div>
 </td>
 <td>
   <a href="" class="btn btn-primary form_box_cust_btn submit_country_form btn_add_country">Reject</a>
 </td>
 <td>
   <a href="" class="btn btn-primary form_box_cust_btn submit_country_form btn_add_country">Cancel</a>
 </td>
</tr>

</table><br>

<div style="
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
font-style: normal;
font-weight: bold;
text-decoration: none;
color: #000000;">
Note To Agent :
</div>

<button type="submit" class="btn btn-primary form_box_cust_btn submit_country_form btn_add_country float-right js-modal-show button-primary" value="">Create Invoice
</button>

</div>
</div>

</form>
</div>
<script>

    $("document").ready(function(){
     setTimeout(function(){
        $("div.alert-info.alert").slideUp(3000).remove();
        $("div.alert-success.alert").slideUp(3000).remove();
       // $("div.alert-warning.alert").delay(3000).slideUp(3000).remove();
       // $("div.alert-danger.alert").fadeTo(2000,500).slideUp(3000).remove();
        
     }, 5000 ); // 5 secs
 
 });
</script>
<script>
$('.js-modal-show').click(function(){
  $('.js-modal-shopify').toggleClass('is-shown--off-flow').toggleClass('is-hidden--off-flow');
});

$('.js-modal-hide').click(function(){
  $('.js-modal-shopify').toggleClass('is-shown--off-flow').toggleClass('is-hidden--off-flow');
});
</script>
<style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
@endsection