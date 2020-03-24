@extends('admin_layouts.layout')

@section('content')
      <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><img src="{{ asset('public/assets/images/agent_icon.png') }}" width="22" height="23" alt=""> Agent Main Screen </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                         
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card egent_list_box">
                                    <h5 class="card-header">Agent List <img src="{{ asset('public/assets/images/agent_list_icon.png') }}" width="20" height="25" alt=""> </h5>
                                    <div class="card-body agent_list_body">
                                    
                                    <ul>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> A.Atencio PLLC</a></li>
                                    
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Administration</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Alice</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Amy</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Andrea</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Angie</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Ashley R Atencio PLLC</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Barbara</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Brandon</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Cammy</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Charlotte</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> DeAnna</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Deborah</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Don</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> E.Atencio PLLC</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Elizabeth</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Emily</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Gregory</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Guyshane</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Jody</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Joyce</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Judith</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Judy</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Laurelen</a></li>
                                    
                                    
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Lori</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> M Atencio PLLC</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Mary</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Matthew</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Mayte</a></li>
                                    
                                    
                                    
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Michelle</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Muhammad</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Nicholas Aguilar, PLLC</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Rafalita</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Sarah</a></li>
                                    
                                          <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Scott Janssen, PLLC</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Sigifredo</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tiffany</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Tom</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                  <a href="#" class="btn_show_inactive m-0"><img src="{{ asset('public/assets/images/icon1.png') }}" alt=""> Show Inactive</a>
                                  </div>
                                  <div class="clear20"></div>
                            </div>
                           
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                            
                                <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 avatar_profile">
                                
                            <img src="{{ asset('assets/images/avator.png') }}" alt="">
                            
                            
                            
                            </div> 
                                       
                     <div class="col-xl-5 col-lg-9 col-md-12 col-sm-12 col-12 user_prolfile_middle">
                                
                            <div>
                            <table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td>
    <div class="first_name_bg">First Name </div> 
    </td>
    <td><div class="last_name_bg">A.Atencio</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Last Name</div></td>
    <td><div class="last_name_bg">PLLLC</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Display Name</div></td>
    <td> <div class="last_name_bg">Abbie</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Email</div></td>
    <td><div class="last_name_bg2">abigail@valleyking.com</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Cell #</div></td>
    <td><div class="last_name_bg">602-299-9927</div></td>
  </tr>
</table>

                            </div>
                            
                            
                            
                            </div> 
                              <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 user_prolfile_right">
                                
                         <div>
                            <table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td>



    <div class="first_name_bg">Home Ph# :  </div> 
    </td>
    <td><div class="last_name_bg3">623-748-3254</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Alt # : </div></td>
    <td><div class="last_name_bg3">623</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Office : </div></td>
    <td> <div class="last_name_bg3">Tempe</div></td>
  </tr>
  <tr>
    <td><div class="first_name_bg">Social Sec # :</div></td>
    <td><div class="last_name_bg3">3265</div></td>
  </tr>
  



</table>

                            </div>
                            
                            
                            
                            </div> 
                            
                            
                          </div>
                          
                          <div class="clear20"></div>
                          
                          
                          <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                         <div class="page-header">
                                <h2 class="pageheader-title"><img src="{{ asset('public/assets/images/agent_info_icon.png') }}"  style="width:30px; height:26px;" alt=""> Agent Information </h2> 
                            </div>
                            <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="{{ asset('public/assets/images/address_icon.png') }}" width="22" height="32" alt=""> Address</h5>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
    <td class="address_td_1">Address</td>
    <td class="address_td_2">8449 W Ross Ave</td>
  </tr>
  <tr>
    <td class="address_td_1">State </td>
    <td class="address_td_2">Arizona</td>
  </tr>
  <tr>
    <td class="address_td_1">City</td>
    <td class="address_td_2">PEORIA</td>
  </tr>
  <tr>
    <td class="address_td_1">Email</td>
    <td class="address_td_2">85382</td>
  </tr>
</table>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="{{ asset('public/assets/images/date_icon.png') }}" class="dates_icon" alt=""> Dates</h5>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
  

    <td class="address_td_1">DOB</td>
    <td class="address_td_2">10/16/1980</td>
  </tr>
  <tr>
    <td class="address_td_1">Hire </td>
    <td class="address_td_2">10/16/2002</td>
  </tr>
  <tr>
    <td class="address_td_1">Exit Date</td>
    <td class="address_td_2">10/16/2002</td>
  </tr>
  <tr>
    <td class="address_td_1">Sever Date</td>
    <td class="address_td_2">10/16/2002</td>
  </tr>
</table>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="{{ asset('public/assets/images/misc_icon.png') }}" class="misc_icon" alt=""> Address</h5>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="address_table">
  <tr>
  



  
    <td class="address_td_1">
      <label class="home_check">Agent Inactive
        <input type="checkbox">
        <span class="checkmark"></span>
  </label>      </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">State Override Apply
        <input type="checkbox">
        <span class="checkmark"></span>
  </label>  
    </td>
  </tr>
  <tr>
    <td class="address_td_1">
    
       <label class="home_check">CityAgent Advanceable
        <input type="checkbox">
        <span class="checkmark"></span>
  </label>  
    
    </td>
  </tr>
  
</table>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            
                          
                           </div>
                          
                          </div>
                          
                          
                          <div class="clearfix"></div>
                          
                          <div class="row">
                          <div class="col-sm-12">
                          <a href="#" class="btn_add_agent btn_add_agent_active"><img src="{{ asset('public/assets/images/ad_icon.png') }}" alt=""> Add New Agent</a>
                          
                          <a href="#" class="btn_add_agent"><img src="{{ asset('public/assets/images/edit_icon.png') }}" alt=""> Edit</a>
                          
                          <a href="#" class="btn_add_agent"><img src="{{ asset('public/assets/images/save_icon.png') }}" alt=""> Save</a>
                          
                          <a href="#" class="btn_add_agent"><img src="{{ asset('public/assets/images/cancel_icon.png') }}" alt=""> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          
                            <div class="clear20"></div>
                          
                          <div class="row">
                          <div class="col-sm-12 meg_btn_general">
                                                                                                    
                          <a href="#" class="btn_general_h btn_general_h_active"> General</a>
                          
                          <a href="#" class="btn_general_h"> Notes</a>
                           <a href="#" class="btn_general_h"> Productivity</a>
                           <a href="#" class="btn_general_h"> Transactions</a>
                           <a href="#" class="btn_general_h"> Expense</a>
                           <a href="#" class="btn_general_h"> Misc. Income</a>
                           <a href="#" class="btn_general_h"> Sever</a>
                          
                          
                          </div> 
                          </div>
                          
                          
                          
                          
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
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
   
 

@endsection