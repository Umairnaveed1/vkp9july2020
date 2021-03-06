﻿@extends('admin_layouts.layout')
@section('content') 
<style type="text/css">
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
</style>       
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                            <div class="page-header">
                                <h2 class="pageheader-title">Property Main Screen </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                         
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div>
                        <label>Property search bar</label>
                        <input name="propertyName" class="form-control" type="text" id="propertyID"></div>
                        <div class="clear5"></div>
                                <div class="card egent_list_box">
                                    <h5 class="card-header">Property List
 <img src="images/agent_list_icon.png" width="20" height="25" alt=""> </h5>
                                    <div class="card-body agent_list_body" id="propertylist">
                                    
                                    <ul>  





                                  @if(auth()->user()->is_admin===1)
                                    @foreach($get_property_data as $property_list)
                                    <li>
                                      <a href="{{ url('propertymanage/index?') .'property_id='. $property_list['id'] }}">
                                      <i class="fa fa-angle-right" aria-hidden="true">
                                        
                                      </i> 
                                    {{ $property_list['propertyName'] }}</a>
                                  </li>
                                      @endforeach  
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                
                                <div class="col-xl-12  text-left">
                                    
                         


                          <label class="custom-control custom-radio custom-control-inline">
                      <input type="radio" name="radio-inline" checked="" class="custom-control-input">
                      <span class="custom-control-label">Property Name</span>
                                            </label>
                                            <div class="clear5"></div>
                        <label class="custom-control custom-radio custom-control-inline">
   <input type="radio" name="radio-inline" class="custom-control-input">
   <span class="custom-control-label">Address</span>
                                            </label>
                                            <div class="clear5"></div>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Management Company</span>
                                            </label>
          </div>
           <div class="clear20"></div>
                                 <a href="{{route('propertymanage.create')}}" class="btn_add_agent_p2 "> ADD PROPERTY</a>
                                 <div class="clear20"></div>
                                  <a href="#" class="btn_add_agent_p2 m-0">Show Inactive</a>
                                    <div class="clear20"></div>
                                   <a href="#" class="btn_add_agent_p2 m-0"> Delete Property</a>
                                  
                                   <div class="clear20"></div>
                                  
                                  
                                  </div>
                                 
                            </div>
                           
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                           


                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                            <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body property_table_res2">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
    <td class="address_td_1">Property Name :</td>
    <td class="address_td_1 propertyname_1">
    @if(isset($get_property_info['propertyName']))
    {{ $get_property_info['propertyName'] }}
    @else
    Property Name
    @endif
    </td>

  </tr>
  <tr>
    <td class="address_td_2">Address:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['propertyAd']))
    {{ $get_property_info['propertyAd'] }}
    @else
    Property Address
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">City:</td>
    <td class="address_td_2 city_1">
    @if(isset($get_property_info['city_list']['cityname']))
    {{ $get_property_info['city_list']['cityname'] }}
    @else
    City Name
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">State:</td>
    <td class="address_td_2 state_1">
    @if(isset($get_property_info['state_list']['statename']))
    {{ $get_property_info['state_list']['statename'] }}
    @else
    State Name
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Zip:</td>
    <td class="address_td_2 zip_1">
    @if(isset($get_property_info['zipcode_list']['zipcode']))
    {{ $get_property_info['zipcode_list']['zipcode'] }}
    @else
    Zipcode 
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Country:</td>
    <td class="address_td_2 country_1">
    @if(isset($get_property_info['country_list']['countryname']))
    {{ $get_property_info['country_list']['countryname'] }}
    @else
    Country Name 
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Phone #:</td>
    <td class="address_td_2 propertyphone_1">
    @if(isset($get_property_info['propertyphone']))
    {{ $get_property_info['propertyphone'] }}
    @else
    Property Phone 
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2 ">Fax #:</td>
    <td class="address_td_2 propertyfax_1">
    @if(isset($get_property_info['propertyFax']))
    {{ $get_property_info['propertyFax'] }}
    @else
    Property Fax 
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Email:</td>
    <td class="address_td_2 propertyemail_1">
    @if(isset($get_property_info['propertyEmail']))
    {{ $get_property_info['propertyEmail'] }}
    @else
    Property Eamil
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">
    <form class="active_1">
    
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label "></span>Active</label>
                </form>
          
      
      
  </td>
    <td class="address_td_2">
  
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label"></span>Inactive</label>
            
  </td>
  </tr>
  <tr>
    <td colspan="2" class="address_td_2">
  
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label"></span>Mail Billing Address</label>
            
  </td>
    <td class="address_td_2"></td>
  </tr>
  
</table>
          </div>   
      </div>  
      </div>  
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body property_table_res2">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
    <td class="address_td_1">Management Name:</td>
    <td class="address_td_1">
    @if(isset($get_property_info['MgmtCompName']))
    {{ $get_property_info['MgmtCompName'] }}
    @else
     Management Comapany Name 
    @endif
    </td>

  </tr>
  <tr>
    <td class="address_td_2">Address:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['MgmtCompAddress']))
    {{ $get_property_info['MgmtCompAddress'] }}
    @else
     Management Comapany Address 
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">City:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['city_list']['cityname']))
    {{ $get_property_info['city_list']['cityname'] }}
    @else
    City Name
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">State:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['state_list']['statename']))
    {{ $get_property_info['state_list']['statename'] }}
    @else
    State Name
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Zip:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['zipcode_list']['zipcode']))
    {{ $get_property_info['zipcode_list']['zipcode'] }}
    @else
    ZipCode
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Country:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['country_list']['zipcode']))
    {{ $get_property_info['country_list']['countryname'] }}
    @else
    Country Name
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Phone #:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['Mgmtphonenumber']))
    {{ $get_property_info['Mgmtphonenumber'] }}
    @else
     Management Phone Number  
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Fax #:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['Mgmtfaxnumber']))
    {{ $get_property_info['Mgmtfaxnumber'] }}
    @else
     Management fax Number  
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">Email:</td>
    <td class="address_td_2">
    @if(isset($get_property_info['MgmtEmail']))
    {{ $get_property_info['MgmtEamil'] }}
    @else
     Management Eamil  
    @endif
    </td>
  </tr>
  <tr>
    <td class="address_td_2">
  
              <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label"></span>Active</label>
            
      
      
  </td>
    <td class="address_td_2">
  
              <label class="custom-control custom-checkbox custom-control-inline">

              @if(in_array('Inactive',explode(",",$get_property_info['admininvoices'])))
<input type="checkbox" class="custom-control-input"name="invoices[]" value="Inactive" checked="checked">
  @else 
<input type="checkbox"class="custom-control-input" name="invoices[]" value="Inactive">
    @endif                  <span class="custom-control-label"></span>Inactive</label>
            
  </td>
  </tr>
  <tr>
    <td colspan="2" class="address_td_2">
  
              <label class="custom-control custom-checkbox custom-control-inline">
                 
              @if(in_array('Main Billing Address',explode(",",$get_property_info['admininvoices'])))
<input type="checkbox" class="custom-control-input"name="invoices[]" value="Main Billing Address" checked="checked">
  @else 
<input type="checkbox"class="custom-control-input" name="invoices[]" value="Main Billing Address">
    @endif                  <span class="custom-control-label"></span>Mail Billing Address</label>
            
  </td>
    <td class="address_td_2"></td>
  </tr>
</table>
          </div>   
      </div>  
      </div>  
      </div>  </div>  
          
          
          
                                
                          
                        
                    
                          
                                    
                     
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="card card_address">
                                    <div class="card-body property_table_res2">
               <!-- @csrf -->
    <!-- {{ method_field('PATCH') }} -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
          <tr>
            <td colspan="2" class="address_td_2"><strong>Alternative Billing Information:</strong></td>
          </tr>
          <tr>
            <td class="address_td_2">Name:</td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td width="32%" class="address_td_2">Address:</td>
            <td width="68%" class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">State:</td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">City:</td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">Zip:</td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">Phone  #:</td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">Fax #:</td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">Email : </td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
          <tr>
            <td class="address_td_2">
            <label class="custom-control custom-checkbox custom-control-inline">
            @if(in_array('Main Billing Address',explode(",",$get_property_info['admininvoices'])))
<input type="checkbox" class="custom-control-input"name="invoices[]" value="Main Billing Address" checked="checked">
  @else 
<input type="checkbox"class="custom-control-input" name="invoices[]" value="Main Billing Address">
    @endif              
     <span class="custom-control-label"><span class="address_td_2">Main  Billing Address</span></span></label></td>
            <td class="address_td_2">&nbsp;</td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
</table>




                                          </div>
                                          
                                          
                                          
                                    </div>
                                </div>
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                            <div class="card card_address">
                                    <div class="card-body property_table_res2">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td width="100%" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="property_manage_table">
      <tr>
        <td><strong>Alternative Notes:</strong> </td>
      </tr>
      <tr>
        <td>
          <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" name="invoices[]" value="use billing address as pay fee for autopay" class="custom-control-input">
            <span class="custom-control-label  line_height_custom"> Use Billing Address as Payee for AutoPay</span></label>
        </td>
      </tr>
      <tr class="address_table">
        <td class="address_td_1 right_td_alternative_billing">
          <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox"  name="invoices[]" value="Email invoice required" class="custom-control-input">
            <span class="custom-control-label  line_height_custom"> E-Mail Invoice Required </span></label>
        </td>
      </tr>
      <tr class="address_table">
        <td class="address_td_1 right_td_alternative_billing">
        
        <span class="address_td_2 ">
          <input name="propertyEmail" class="property_manage_input form-control" placeholder="Email Address: " type="text">
        </span></td>
      </tr>
      <tr class="address_table">
      <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
                                    
                                        </div> 
                    </div>  
                    </div>
                 </div>  
                             
                              <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card_address">
                                    <div class="card-body property_table_res2">
                                    
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
          <tr>
            <td height="40" colspan="2" class="address_td_1"><strong>Alternative Billing Requirements:</strong></td>
          </tr>
          <tr>
            <td width="10%" align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(isset($get_property_info->PropertDonotplace))  
                                
                                <input type="checkbox" class="custom-control-input" name="PropertDonotplace" value="Do Not Place" checked="checked">
                                  @else 
                                <input type="checkbox" class="custom-control-input" name="PropertDonotplace" value="Do Not Place">
                                    @endif
                <span class="custom-control-label"></span></label>
            </td>
            <td width="90%" align="left" class="address_td_2">Do Not Place</td>
          </tr>
          <tr>
            <td align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(isset($get_property_info->propertyoffline))  
                                
                                <input type="checkbox" class="custom-control-input" name="propertyoffline" value="Off Line" checked="checked">
                                  @else 
                                <input type="checkbox" class="custom-control-input" name="propertyoffline" value="Off Line">
                                    @endif
                   <span class="custom-control-label"></span></label>
            </td>
            <td align="left" class="address_td_2">Off Line </td>
          </tr>
          <tr>
            <td align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(isset($get_property_info->propertyonhold))  
                                      
                                      <input type="checkbox" class="custom-control-input" name="propertyonhold" value="On Hold" checked="checked">
                                        @else 
                                      <input type="checkbox" name="propertyonhold" class="custom-control-input" value="On Hold">
                                          @endif
                
                <span class="custom-control-label"></span></label>
            </td>
            <td align="left" class="address_td_2">On Hold </td>
          </tr>
          <tr>
            <td align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(isset($get_property_info->propertylegal))   
                 <input type="checkbox" class="custom-control-input" name="propertylegal" value="Legal" checked="checked">
                  @else 
                  <input type="checkbox" class="custom-control-input" name="propertylegal" value="Legal">
              @endif
                <span class="custom-control-label"></span></label>
            </td>
            <td align="left" class="address_td_2">Legal</td>
          </tr>
          <tr>
            <td align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(isset($get_property_info->PropertySlowpay))  
                                           
                                           <input type="checkbox" class="custom-control-input" name="PropertySlowpay" value="Slow Pay" checked="checked">
                                             @else 
                                           <input type="checkbox" class="custom-control-input" name="PropertySlowpay" value="Slow Pay">
                                               @endif
                <span class="custom-control-label"></span></label>
            </td> 
            <td align="left" class="address_td_2">Slow Pay</td>
          </tr>
          <tr>
            <td align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(in_array('Not Advancable',explode(",",$get_property_info['admininvoices'])))
<input type="checkbox" class="custom-control-input"name="invoices[]" value="Not Advancable" checked="checked">
  @else 
<input type="checkbox"class="custom-control-input" name="invoices[]" value="Not Advancable">
    @endif
                <span class="custom-control-label"></span></label>
            </td>
            <td align="left" class="address_td_2">Not Advancable</td>
          </tr>
          <tr>
            <td align="left" class="address_td_1">
              <label class="custom-control custom-checkbox custom-control-inline">
              @if(isset($get_property_info->propertyguaranteecontract))  

                                                
<input type="checkbox" name="propertyguaranteecontract" class="custom-control-input" value="Guarantee Contract" checked="checked">
  @else 
 <input type="checkbox" name="propertyguaranteecontract" class="custom-control-input" value="Guarantee Contract">
    @endif
       <span class="custom-control-label"></span></label>
            </td>
            <td align="left" class="address_td_2">Guarantee Contract</td>
          </tr>
        </table>
                                    
                                    
                                    </div>  </div>  </div>  
                                    
                                    
                                    
                                    
                   <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card_address">
                                    <div class="card-body property_table_res2">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="property_manage_table">
      <tr>
        <td width="60%" class="address_td_1">Last Contract Date :</td>
        <td width="40%" class="address_td_1">03/13/2020 </td>
      </tr>
      <tr>
        <td><strong>Contract Type :</strong></td>
        <td><div class="form-group" style="margin-right:10px;">
                               
                                    <select class="form-control cust_frm_cntrl" id="sel1" >
                                      <option>CD</option>
                                    </select>
                                </div></td>
      </tr>
      <tr>
        <td><label class="custom-control custom-checkbox custom-control-inline ">
        @if(isset($get_property_info->propertynocontract))  
                           
                           <input type="checkbox" class="custom-control-input" name="Contract" value="No Contract" checked="checked">
                             @else 
                           <input type="checkbox" class="custom-control-input" name="Contract" value="No Contract">
        @endif       
       <span class="custom-control-label line_height_custom">No Contract</span></label>
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><label class="custom-control custom-checkbox custom-control-inline">
        @if(isset($get_property_info->PropertyAutopay)) 
<input type="checkbox" name="autopay" class="custom-control-input" value="Auto Pay" checked="checked">
  @else 
<input type="checkbox" name="autopay" class="custom-control-input" value="Auto Pay">
    @endif
          <span class="custom-control-label line_height_custom">Auto Pay</span></label>
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><label class="custom-control custom-checkbox custom-control-inline">
        @if(isset($get_property_info->SuperAuto))  
                             
                             <input type="checkbox" class="custom-control-input" name="SuperAuto" value="Super Auto Pay" checked="checked">
                               @else 
                             <input type="checkbox" class="custom-control-input" name="SuperAuto" value="Super Auto Pay">
                                 @endif      
        <span class="custom-control-label line_height_custom">Super Auto Pay</span></label>
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <label class="custom-control custom-checkbox custom-control-inline">
        @if(isset($get_property_info->propertyrealestatecompany))  
                             
                             <input type="checkbox" class="custom-control-input" name="propertyrealestatecompany" value="Real Estate Company" checked="checked">
                               @else 
                             <input type="checkbox" class="custom-control-input" name="propertyrealestatecompany" value="Real Estate Company">
                                 @endif   
          <span class="custom-control-label line_height_custom">Real Estate Company</span></label>
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <label class="custom-control custom-checkbox custom-control-inline">
        @if(isset($get_property_info->PropertyInactive))  
                             
                             <input type="checkbox" class="custom-control-input" name="PropertyInactive" value="Inactive" checked="checked">
                               @else 
                             <input type="checkbox" class="custom-control-input" name="PropertyInactive" value="Inactive">
                                 @endif 
          <span class="custom-control-label line_height_custom">Inactive</span></label>
          </td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
</table>

@endif
                                    
                                        </div> 
                    </div>  
                    </div> 
                             



                    </div>  
                                    
                      
                          
                         
                          
                          
                          <div class="clearfix"></div>
                          
                          <div class="row">
                          <div class="col-sm-12">
                         
                          
                          <a href="{{ url('propertymanage/edit?') . 'id=' .  $get_property_info['id'] }}" class="btn_add_agent edit_property"><img src="images/edit_icon.png" alt=""> Edit</a>
                          
                          <a type="" href="#" class="btn_add_agent"><img src="images/save_icon.png" alt=""> Save</a>
                          </form>
                          <a href="#" class="btn_add_agent"><img src="images/cancel_icon.png" alt=""> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          
                          
                             <div class="clear20"></div>
                          <div class="col-xl-12 p-0">
                            <div class="card card_address">
                                    <div class="card-body">
                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                                    
                                                <th width="13%" scope="col">Date</th>
                                                <th width="15%" scope="col">Time</th>
                                             
                                                <th width="35%" scope="col">
                                            Managment Company
                                           </th>
                                                <th width="13%" scope="col">&nbsp;</th>
                                                <th width="5%" align="center" scope="col">Document</th>
                                              <th width="13%" scope="col" align="center">User</th>
                                                <th width="3%" scope="col">Bill <br>
                                                Note</th>
                                            </tr>
                                        </thead>
                                        
                                               <tbody>
@if(isset($data_note))  
                                        @foreach($data_note as $notes)
                                     
                                            <tr>
            
                     
                 <td align="left" scope="row">{{$notes->propertynotesdate}}</td>
                 <td align="left">{{$notes->propertynotestime}}</td>
                 <td align="left"></td>
                 <td align="left">{{$notes->propertynotes}}</td>
          
                <td align="center"><a href="{{asset('notesfileupload').'/'.$notes->propertynotesattachment}}" target="_blank"><img src="{{asset('/public/images/pdf.png')}}"  class="card_address_img_property"   alt=""></a></td>
                 <td align="left">{{$notes->id ? 'Admin' :'admin' }}</td>
                                <td align="center">
          <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-label"> </span></label>
        </td>
                                            </tr>
                                            
                                            @endforeach
@endif
                                          </tbody>
                                    </table>
                                    
                                    
                                    <div class="row">
                          <div class="col-sm-12 meg_btn_general mrg_left_5_property">
                                                                                                          
                         <a href="{{URL::to('printdata')}}/{{$get_property_info['id']}} " class="btn_general_h btn_general_h_active btnprint" id="btnprint" > Print</a>
                          
                          <a href="#" class="btn_general_h" data-toggle="modal" data-target="#myModal_delete_expense"> Delete</a>
                           <a href="#" class="btn_general_h" data-toggle="modal" data-target="#myModal_expense_detial"> Detail</a>
                           <a href="#" class="btn_general_h"  data-toggle="modal" data-target="#myModal_add_note"> Add Note</a>
                           <a href="javascript:void(0)" class="btn_general_h" > Add Contract </a>
                             
                          
                          
                          </div> 
                          </div>
                                    </div>
                                    
                                    </div></div>
                                      
          
          
          
                          
                            <div class="clear5"></div>
                          
                          <div class="row">
                          <div class="col-sm-12 meg_btn_general">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General / Notes</a>
                          
                          <a href="#" class="btn_general_h"> Transactions</a>
                           <a href="#" class="btn_general_h"> Delinquencies</a>
                           <a href="#" class="btn_general_h"> System Notes</a>
                           <a href="#" class="btn_general_h"> Email Invocies</a>
                          
                          
                          </div> 
                          </div>
                             <div class="clear20"></div>
                          
                          
                  </div>
                            
                        </div>

                        
                        
                        
                    </div>
                </div>
            </div>
                <div class="modal" id="myModal_add_note">
  <div class="modal-dialog">
    <div class="modal-content">
 <form class="form-group mt-2 "   id="addnotes"  enctype="multipart/form-data">
      <!-- Modal Header -->
       <div class="modal-body">
        <div class="textmesagealert alert-danger" id="textmesage"> </div>
      <div class="modal-header">
        <h4 class="modal-title">History / Notes Item Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
     
                        <div class="row">
      <div class="col-md-12">
        <div id="expence_notes"></div>
      <input type="hidden" name="productid" id="productid" value="{{$get_property_info['id']}}">
                           <div class="col-md-12">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_ex" type="text" name="notedate" class="charge_date" required="" />
                            </div>
                        </div> 
                        </div>  
                      
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">
                                                   Time:
                                                  </label>
                                  <input type="time" class="form-control" id="note_time" name="note_time" placeholder="" required="">
                                  
                                </div>
                           
                        </div>
                        
                       
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Regrading </label>
                           <textarea name="expence_comment" id="expence_comment" class="form-control" cols="" rows=""></textarea>
                                  
                          </div>
                           
                        </div>
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">   Attachment :</label>
                        <input name="file" type="file" class="form-control" id="file">
                                  
                          </div>
                           
                        </div>
                        <div class="col-md-12">
                         <label class="custom-control custom-checkbox custom-control-inline">
                          Information Locked : Editable only by Original User
            <input type="checkbox" class="custom-control-input" id="InformationLocked" name="checkbox[]" value="Information Locked : Editable only by Original User">
            <span class="custom-control-label"> </span></label>
                           
                        </div>
                        <div class="col-md-12">
                         <label class="custom-control custom-checkbox custom-control-inline">
                         Show Note on Billing Screen
            <input type="checkbox" class="custom-control-input" id="Shownote" name="checkbox[]" value="Show Note on Billing Screen">
            <span class="custom-control-label"> </span></label>
                           
                        </div>
                        
                        
                       
                        
                        </div>
                          </div>
                
                                                           
                                                
   
   
                                                    
                                                
   
 
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
     <!--    <a type="button" class="btn btn-danger btn_close_pop3" id="add_agent_expence">Save</a> -->
        <button type="submit" class="btn btn-danger btn_close_pop3" id="btnAdd">Save</button><br>
 
 <button type="reset" class="btn btn-danger btn_close_pop3"  >Cancel</button>
      </div>
  </form>
    </div>
  </div>
</div>

<!-- detail box modal start -->
<div class="modal" id="myModal_expense_detial">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detial Expense</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
        <div id="delete_expence_notes"></div>
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Charge Type : </label>
                               <select name="charge_type" id="detial_type" class="form-control" required="">
  <option value="">------Select--------</option>

  @if(isset($data_note))

                                          @foreach($data_note as $detail_expence)
                                          <option value="{{$detail_expence->id }}" data-attr-expence="{{ $detail_expence->propertynotes }}">{{ $detail_expence->propertynotes}}</option>
                                          @endforeach
                                          @endif

</select>
                                  
                                </div>
                           
                        </div>
                        <div class="show_expence_detial"></div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      

    </div>
  </div>
</div>
<!-- End Model Box -->



<!-- Delete Expence Model Box -->
<div class="modal" id="myModal_delete_expense">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Expense</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
        <div id="delete_expence_notes"></div>
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Regarding Type : </label>
                               <select name="charge_type" id="delete_id" class="form-control" required="">
  <option value="">------Select--------</option>
  @if(isset($data_note))
                                          @foreach($data_note as $notes)

                                          <option value="{{$notes->id}}" data-attr-expence="{{$notes->propertynotes}}">{{ $notes->propertynotes }}</option>
                                          @endforeach
                                          @endif

</select>
                                  
                                </div>
                           
                        </div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a type="button" class="btn btn-danger btn_close_pop3" id="delete_admin_expence">Delete</a>
      </div>

    </div>
  </div>
</div>
<!-- End Model Box -->

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
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    <script type="text/javascript">
 
 
 
  jQuery(function ($) { 
    $('.btnprint').printPage();
});
</script>
    <script>
$(document).ready(function(){
  $("#propertyID").on("keyup", function() {

    var value = $(this).val().toLowerCase();
 
    $("#propertylist ul li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script type="text/javascript">
   $('.get_company').on('click', function(){
    $('.zip_id').html('');
      var get_company = $(this).attr('data-attr-id');
      
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type:"POST",
        url: "{{ url('propertymanage/get_property_list') }}",
        data: {get_company:get_company},
        success: function(data){
          console.log(data);
          $('.active_1').html('');
         $('.propertyname_1').text(data['propertyName']);
         $('.country_1').text(data['country_list']['countryname']);
         $('.state_1').text(data['state_list']['statename']);
         $('.city_1').text(data['city_list']['cityname']);
         $('.zip_1').text(data['zipcode_list']['zipcode']);
         $('.propertyfax_1').text(data['propertyFax']);
         $('.propertyphone_1').text(data['propertyphone']);
         $('.propertyemail_1').text(data['propertyEmail']);
         $('.propertyad_1').text(data['propertyAd']);
         $('.edit_property').attr('href', url +"?id="+data['id']);
         if(data['active'] == 1){
          $('.active_1').append('<label class="custom-control custom-checkbox custom-control-inline">'+
                                                '<input type="checkbox" class="custom-control-input" checked><span class="custom-control-label"></span>'+
                                            '</label>');
         }
         else{
          $('.active_1').append('<label class="custom-control custom-checkbox custom-control-inline">'+
                                                '<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>'+
                                            '</label>');
         }
        }
      });

   });
 </script>
   <script type="text/javascript">
   
 $('#addnotes').on('submit', function(event){
event.preventDefault();

 
var pro=$('#productid').val();
 
 
   $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
   url:"{{url('notesubmit')}}"+'/'+pro,
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log(data.message);
    $("#textmesage").append(data.message);
 
    console.log(data.messageinsert)

     $(".charge_date").val("");
          $("#note_time").val("");
          $("#expence_comment").val("");
          $("#file").val("");
          $("#InformationLocked").val("");
          $("#Shownote").val("");
         
       alert('Data Uploaded successfully')
 location.reload();
   }
  });
  
});

 </script>
<script type="text/javascript">
    $(document).on('click', '#delete_admin_expence', function(){
    var delete_charge_type = $('#delete_id').val();
    var delete_charge_type_test = $('#delete_id option:selected').text();
          $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('admin/delete_expence') }}",
       method:"POST",
       data:{delete_charge_type:delete_charge_type},
       success:function(data)
       {
        $('#delete_expence_notes').css('display', 'block');
        $('#delete_expence_notes').html(data.message);
        $('#delete_expence_notes').addClass(data.class_name);
        $("#delete_charge_type option:contains('"+delete_charge_type_test+"')").remove();
       }
    });
  });
 </script>
<script type="text/javascript">
   $(document).on('change', '#detial_type', function(){
      var detial_charge_type = $('#detial_type').val();
      // let onhold = '';
        $.ajax({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
       url:"{{ url('detial_view') }}",
       method:"POST",
       data:{detial_charge_type:detial_charge_type},
       success:function(data)
       {
     // var json = $.parseJSON(data); 

      console.log(data.propertynotesdate); 
       
       
      
        // alert(data['data']['propertynotestime']);
         $('.show_expence_detial').html('');
        $('.show_expence_detial').append('<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Date</h6></div>'+
              '<div class="col-md-6">'+data['data']['propertynotesdate']+'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Time</h6></div>'+
              '<div class="col-md-6"> '+data['data']['propertynotestime']+'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Regrading</h6></div>'+
              '<div class="col-md-6">'+ data['data']['propertynotes'] +'</div>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<div class="col-md-6"><h6 style="color: #a63651 !important;">Document</h6></div>'+
              '<div class="col-md-6">'+ data['data']['propertynotesattachment'] +'</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-md-12">'+
              '<div class="col-md-4"><h6 style="color: #a63651 !important;">BILL note</h6></div>'+
              '<div class="col-md-8"type="checkbox" checked="checked">'+data['data']['propertybillnote']+
              '<span class="custom-control-label"> </span>'+'</div>'+
            '</div>'+
            '</div>');
         
       
       }
    });
  });
 </script>
@endsection

  
    
    
    
     