@extends('admin_layouts.layout')
@section('content')
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><img src="images/agent_icon.png" width="22" height="23" alt=""> Agent Main Screen </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                         
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card egent_list_box">
                                    <h5 class="card-header">Agent List
                                     <img src="images/agent_list_icon.png" width="20" height="25" alt=""> </h5>
                                    <div class="card-body agent_list_body">
                                    
                                    <ul>
                                    @foreach($get_agent_data as $agent_list)
                                    <li>
                                      <a href="{{ url('dashboard?') .'agent_id='. $agent_list['id'] }}">
                                      <i class="fa fa-angle-right" aria-hidden="true">
                                        
                                      </i> 
                                    {{ $agent_list['agentdisplayname'] }}</a>
                                  </li>
                                      @endforeach   
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                  <a href="#" class="btn_show_inactive m-0"><img src="images/icon1.png" alt=""> Show Inactive</a>
                                  </div>
                                  <div class="clear20"></div>
                            </div>
                           
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                            <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 avatar_profile">
                                
                            <img src="images/avator.png" alt="">
                            
                            
                            
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
                                
                          
                          
                              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                              
                              
                                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    
                       
                          <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                         <div class="page-header">
                                <h2 class="pageheader-title"><img src="images/agent_info_icon.png"  style="width:30px; height:26px;" alt=""> Agent Information </h2> 
                            </div>
                            <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                        <h5 class="text_address"><img src="images/address_icon.png" width="22" height="32" alt=""> Address</h5>
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
                                        <h5 class="text_address"><img src="images/date_icon.png" class="dates_icon" alt=""> Dates</h5>
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
                                        <h5 class="text_address"><img src="images/misc_icon.png" class="misc_icon" alt=""> Address</h5>
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
                          <a href="#" class="btn_add_agent btn_add_agent_active"><img src="images/ad_icon.png" alt=""> Add New Agent</a>
                          
                          <a href="#" class="btn_add_agent"><img src="images/edit_icon.png" alt=""> Edit</a>
                          
                          <a href="#" class="btn_add_agent"><img src="images/save_icon.png" alt=""> Save</a>
                          
                          <a href="#" class="btn_add_agent"><img src="images/cancel_icon.png" alt=""> Cancel</a>
                          
                          
                          </div> 
                          </div>
                          <div class="clear40"></div>
                    
                    </div>
                    
                    
                      <div class="tab-pane fade" id="nav-notes" role="tabpanel" aria-labelledby="nav-notes-tab">
                    
                    
                 <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                         
                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address">
                                    <div class="card-body">
                                      <h5 class="label_rule_heading">History / Notes
</h5>
     
            <div class="col-sm-12">
            <table class="table table-bordered table-bordered_rule table_responsive2" width="100%">
                <thead>
                    <tr>	 
                   			
                      <th width="15%"> Date </th>
                      <th width="15%">Time	 </th>
                      <th width="60%">&nbsp;</th>
                      <th width="5%">A </th>
                      <th width="5%">User</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>08/29/2013</td>
                      <td>11:02 AM</td>
                      <td>	advance commission addendum</td>
                      <td><a href="#"  class="img_pdf"><img src="images/pdf.png"/></a></td>
                        <td>admin</td>
                    </tr>      
                </tbody>
                <tbody>
                    <tr>
                      <td>08/29/2013</td>
                      <td>11:02 AM</td>
                      <td> Re Lic#- SA537515000</td>
                      <td>&nbsp;</td>
                      <td>admin</td>
                    </tr>      
                </tbody>
                <tbody>
                    <tr>
                      <td>08/29/2013</td>
                      <td>11:02 AM</td>
                      <td> 	Charge back expense for inv# 2187 was due to overpayment from property at 100%, commission should have been 50%. $122.25 is agents portion of the overpayment. See property notes for more details. Charge back was deducted from check# 568 by property.</td>
                      <td>&nbsp;</td>
                      <td>admin</td>
                    </tr>      
                </tbody>
                <tbody>      
                </tbody>
                <tbody>      
                </tbody>
                <tbody>      
                </tbody>
            </table>
            <div class="clear20"></div>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Print</button>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Delete</button>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Details</button>
            <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn"  data-toggle="modal" data-target="#myModal">Add</button>
            </div>
     
    
                                          </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                          
                           </div>
                          
                          </div>
                    
                    
                    </div>
                    
                    <div class="tab-pane fade" id="nav-productivity" role="tabpanel" aria-labelledby="nav-productivity-tab">
                    
                    
                   <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                    <table class="table-responsive table_note_2 table_product_res" cellspacing="0" cellpadding="0" border="0">
  <tr class="tr_dashboard_product">
    <td style="width: 20%" class="heading_black"> Rentals </td>
    <td style="width: 20%" class="heading_black"> Sales </td>
    <td style="width: 60%; padding-top:20px;" class="label_normal_bold">
    <span disabled="disabled" >
      <input id="c" type="checkbox" name="" checked="checked" disabled="disabled">
      <label for="">Office Manager Override</label>
      </span></td>
  </tr>
  <tr>
    <td style="vertical-align: top">
    <div style="overflow: scroll; width: 100%; height: 375px">
        <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td style="vertical-align: top; width: 10%"><table style="vertical-align: middle; width: 100%; text-align: left" cellspacing="0" cellpadding="0" align="center" border="0">
                <tr>
                  <td style="height: 14px" class="label_normal" align="center"> 1. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 2. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 3. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 4. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 5. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 6. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 7. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 8. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 9. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 10. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 11. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 12. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 13. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 14. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 15. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 16. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 17. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 18. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 19. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 20. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 21. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 22. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 23. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 24. </td>

                </tr>
                <tr>
                  <td class="label_normal" align="center"> 25. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 26. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 27. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 28. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 29. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 30. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 31. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 32. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 33. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 34. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 35. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 36. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 37. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 38. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 39. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 40. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 41. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 42. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 43. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 44. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 45. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 46. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 47. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 48. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 49. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 50. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 51. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 52. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 53. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 54. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 55. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 56. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 57. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 58. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 59. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 60. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 61. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 62. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 63. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 64. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 65. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 66. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 67. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 68. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 69. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 70. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 71. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 72. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 73. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 74. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 75. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 76. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 77. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 78. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 79. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 80. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 81. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 82. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 83. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 84. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 85. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 86. </td>
                </tr>
                <tr>
                  <td style="height: 14px" class="label_normal" align="center"> 87. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 88. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 89. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 90. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 91. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 92. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 93. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 94. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 95. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 96. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 97. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 98. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 99. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 100. </td>
                </tr>
              </table></td>
            <td style="width: 90%" dir="ltr" valign="top" align="left"><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                  <td valign="top"><div id="ctl00_ContentPlaceHolder1_divRentPos" style="vertical-align:top;padding-top:130px;"> <span id="ctl00_ContentPlaceHolder1_lblRentPercentage" class="label_normal">50%</span>
                      <div id="ctl00_ContentPlaceHolder1_divRent" style="background-color:white;width:2px;height:-112px;border-right:solid 2px #000000;"> </div>
                    </div></td>
                  <td valign="top"><div id="ctl00_ContentPlaceHolder1_divRentPos2" style="padding-top:169px;"> <span id="ctl00_ContentPlaceHolder1_lblRentPercentage2" class="label_normal">80%</span>
                      <div id="ctl00_ContentPlaceHolder1_divRent2" style="background-color:white;width:2px;height:182px;border-right:solid 2px #000000;"> </div>
                    </div></td>
                  <td valign="top"><div id="ctl00_ContentPlaceHolder1_divRentPos3" style="padding-top:351px;"> <span id="ctl00_ContentPlaceHolder1_lblRentPercentage3" class="label_normal">100%</span>
                      <div id="ctl00_ContentPlaceHolder1_divRent3" style="background-color:white;width:2px;height:462px;border-right:solid 2px #000000;"> </div>
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div></td>
    <td valign="top">
    <div style="overflow: scroll; width: 100%; height: 375px">
        <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td style="vertical-align: top; width: 10%"><table style="vertical-align: middle; width: 100%; text-align: left" cellspacing="0" cellpadding="0" align="center" border="0">
                <tr>
                  <td style="height: 14px" class="label_normal" align="center"> 1. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 2. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 3. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 4. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 5. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 6. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 7. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 8. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 9. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 10. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 11. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 12. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 13. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 14. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 15. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 16. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 17. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 18. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 19. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 20. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 21. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 22. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 23. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 24. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 25. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 26. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 27. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 28. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 29. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 30. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 31. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 32. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 33. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 34. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 35. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 36. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 37. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 38. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 39. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 40. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 41. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 42. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 43. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 44. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 45. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 46. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 47. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 48. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 49. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 50. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 51. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 52. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 53. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 54. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 55. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 56. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 57. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 58. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 59. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 60. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 61. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 62. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 63. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 64. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 65. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 66. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 67. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 68. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 69. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 70. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 71. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 72. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 73. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 74. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 75. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 76. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 77. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 78. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 79. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 80. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 81. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 82. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 83. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 84. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 85. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 86. </td>
                </tr>
                <tr>
                  <td style="height: 14px" class="label_normal" align="center"> 87. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 88. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 89. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 90. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 91. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 92. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 93. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 94. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 95. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 96. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 97. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 98. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 99. </td>
                </tr>
                <tr>
                  <td class="label_normal" align="center"> 100. </td>
                </tr>
                 
                
              </table>
              </td>
            <td style="width: 90%" dir="ltr" valign="top" align="left"><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                  <td valign="top"><div id="ctl00_ContentPlaceHolder1_divSalePos" style="padding-top:0px;"> <span id="ctl00_ContentPlaceHolder1_lblSalePercentage" class="label_normal">50%</span>
                      <div id="ctl00_ContentPlaceHolder1_divSale" style="background-color:white;width:2px;height:14px;border-right:solid 2px #000000;"> </div>
                    </div></td>
                  <td valign="top"><div id="ctl00_ContentPlaceHolder1_divSalePos2" style="padding-top:39px;"> <span id="ctl00_ContentPlaceHolder1_lblSalePercentage2" class="label_normal">70%</span>
                      <div id="ctl00_ContentPlaceHolder1_divSale2" style="background-color:white;width:2px;height:378px;border-right:solid 2px #000000;"> </div>
                    </div></td>
                  <td valign="top"><div id="ctl00_ContentPlaceHolder1_divSalePos3"> <span id="ctl00_ContentPlaceHolder1_lblSalePercentage3" class="label_normal"></span>
                      <div id="ctl00_ContentPlaceHolder1_divSale3"> </div>
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div></td>
    <td><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td style="vertical-align: top; width: 10%"><div style="overflow: scroll; width: 100%; height: 375px">
              <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                  <td style="vertical-align: top; width: 10%"><table style="vertical-align: middle; width: 100%; text-align: left" cellspacing="0" cellpadding="0" align="center" border="0">
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 1. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 2. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 3. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 4. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 5. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 6. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 7. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 8. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 9. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 10. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 11. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 12. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 13. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 14. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 15. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 16. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 17. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 18. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 19. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 20. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 21. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 22. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 23. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 24. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 25. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 26. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 27. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 28. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 29. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 30. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 31. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 32. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 33. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 34. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 35. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 36. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 37. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 38. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 39. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 40. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 41. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 42. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 43. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 44. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 45. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 46. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 47. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 48. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 49. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 50. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 51. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 52. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 53. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 54. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 55. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 56. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 57. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 58. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 59. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 60. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 61. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 62. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 63. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 64. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 65. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 66. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 67. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 68. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 69. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 70. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 71. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 72. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 73. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 74. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 75. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 76. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 77. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 78. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 79. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 80. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 81. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 82. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 83. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 84. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 85. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 86. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 87. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 88. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 89. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 90. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 91. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 92. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 93. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 94. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 95. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 96. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 97. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 98. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 99. </td>
                      </tr>
                      <tr>
                        <td style="width: 23px" class="label_normal" align="center"> 100. </td>
                      </tr>
                    </table></td>
                  <td style="width: 90%" valign="top" align="left"><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
                      <tr>
                        <td valign="top"><div id="ctl00_ContentPlaceHolder1_divOffcManagerPos" style="padding-top:221px;"> <span id="ctl00_ContentPlaceHolder1_lblOffcManagerPercentage" class="label_normal">0%</span>
                            <div id="ctl00_ContentPlaceHolder1_divOffcManager" style="background-color:white;width:2px;height:448px;border-right:solid 2px #000000;"> </div>
                          </div></td>
                        <td valign="top"><div id="ctl00_ContentPlaceHolder1_divOffcManagerPos2"> <span id="ctl00_ContentPlaceHolder1_lblOffcManagerPercentage2" class="label_normal"></span>
                            <div id="ctl00_ContentPlaceHolder1_divOffcManager2"> </div>
                          </div></td>
                        <td valign="top"><div id="ctl00_ContentPlaceHolder1_divOffcManagerPos3"> <span id="ctl00_ContentPlaceHolder1_lblOffcManagerPercentage3" class="label_normal"></span>
                            <div id="ctl00_ContentPlaceHolder1_divOffcManager3"> </div>
                          </div></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
            </div></td>
          <td style="vertical-align: top; width: 80%"><table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
              <tr>
                <td class="label_normal_bold" style=" padding-top:10px;"><span disabled="disabled">
                  <input id="ctl00_ContentPlaceHolder1_chkViewVKPSplit" type="checkbox" name="ctl00$ContentPlaceHolder1$chkViewVKPSplit" checked="checked" disabled="disabled">
                  <label for="ctl00_ContentPlaceHolder1_chkViewVKPSplit">VKP Split Only</label>
                  </span></td>
              </tr>
              <tr>
                <td class="label_normal_bold"><span disabled="disabled">
                  <input id="" type="checkbox" name="" disabled="disabled">
                  <label for="">Gross X 50%</label>
                  </span></td>
              </tr>
              <tr>
                <td class="label_normal_bold"><span disabled="disabled">
                  <input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                  <label for="">Split Over Between 2 Manager</label>
                  </span></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
                        
                            
                          
                           </div></div></div>
                           
                           <div class="row">
                               <div class="col-sm-6">
                             <div class="card card_address">
                                    <div class="card-body">
                                    
                                
                                      <div class="col-sm-12"> <h5>
                                    Commission Rules
                                    </h5></div>
                                    
                                    <div class="clear10"></div>
                                     <div class="col-sm-12">
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">VKP Split Only</label></span>
                                    <div class="clear5"></div>
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">All Bonuses are always 50/50 split</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled">
                                    <input class="float-left" id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="" class="float-left w_check1">On all VKP% over 50%, agent % reverts to lowest commission tier if billing falls in 3rd commission tier</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled">
                                    <input id="" class="float-left" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="" class="float-left w_check1">NO # reverts invoices to the lowest commission tier & does not increase monthly count. Invoices go into No # slots</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled">
                                    <input class="float-left" id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="" class="float-left w_check1">In Flat rate higher than 50% of Months rent, comm% applies</label></span>
                                  
                                    </div></div>
                                    

                           
                           </div></div>
                           
                           <div class="col-sm-6">
                             <div class="card card_address">
                                    <div class="card-body">
                                    
                                
                                      <div class="col-sm-12"> <h5>
                                    Enable Separate Home Lease Rules

                                    </h5></div>
                                    
                                    <div class="clear10"></div>
                                     <div class="col-sm-12">
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">Enabled Home Lease
</label></span>
                                    <div class="clear5"></div>
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">No #
</label></span>
                                      <div class="clear5"></div>
                                      <div class="col-sm-12 black">Percentage
                                        <input name="ctl00$ContentPlaceHolder1$txtPercentage2nd" type="text" id="" disabled="disabled" style="width: 25px;">%
                                                                                            </div>
                                      
                                      <div class="clear5"></div>
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">Tier 1
</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">Tier 2
</label></span>
                                      <div class="clear5"></div>
                                    <span disabled="disabled"><input id="" type="checkbox" name="" checked="checked" disabled="disabled">
                                    <label for="">Tier 3
</label></span>
                                  
                                    </div></div>
                                    

                           
                           </div>
                           
                                <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Edit</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Save</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Cancel</button>
                           </div>
                           </div>
                      
                           
                           
                          
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Count</button>
                           <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Save</button>
                           <div class="clear20"></div>
                          
                          </div>
                    
                    
                    </div>
                          
                          
                          
                          <div class="tab-pane fade show active" id="nav-Transactions" role="tabpanel" aria-labelledby="nav-Transactions-tab">
                    <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                      <div class="col-sm-12 black">
                                      <div class="row">
                                      <div class="col-md-6 col-lg-2">
                                      Transactions :   </div>
                                      
                                      <div class="col-md-6 col-lg-1">
                                     Paid   </div> 
                                     <div class="col-lg-9 trans_right_input1">
                            <div class="float-left col-lg-2">         
<input type="radio" class="float-left input_trans_4" name="tab" value="igotnone" checked onclick="show1();" />
None
</div>
 <div class="float-left col-lg-2">   
<input type="radio" name="tab" value="igottwo" class="float-left input_trans_4" onclick="show2();" />
Two
</div>
<div id="div1" class="hide  col-lg-8 float-left">

<div class="row">
  <div class="col-md-6">
                          <label for="COM">&nbsp;</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker3" />
                            </div>
                        </div> 
                        </div>

  <div class="col-md-6">
                          <label for="COM">To</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker4" />
                            </div>
                        </div> 
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
</div>
</div>
                                     
                                     
                                        </div>
                                     
                                      
                                      </div>
                                      
                                      <div class="clear5"></div>
                                      
                                      
                                      <div class="table_trans_h">
                                      <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                           					
                                                <th width="10%" scope="col"> Paid To Agent</th>
                                                <th width="7%" scope="col">INV #	</th>
                                             
                                                <th width="10%" scope="col">#</th>
                                                <th width="8%" scope="col">M/I Date</th>
                                                <th width="13%" scope="col">Property</th>
                                                <th width="14%" scope="col">Tenant</th>
                                                <th width="8%" scope="col">Type</th>
                                                   <th width="12%" scope="col">Comm Total</th>
                                                   <th width="13%" scope="col">Check #</th>
                                                   <th width="4%" scope="col">CB</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                     
                                                
                                                <td>06/30/09</td>
                                                <td>60</td>
                                                <td>06/02/09</td>
                                                <td>06/02/09</td>
                                                <td>Copper Ridge</td>
                                                <td>Stephanie Duiven & James Hudson </td>
                                                <td>A</td>
                                                <td>
                                                   	$324.50
                                                </td>
                                                <td>	1038</td>
                                                <td><label class="custom-control custom-checkbox">
                                                  <input type="checkbox"  class="custom-control-input">
                                                  <span class="custom-control-label"></span> </label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>06/02/09</td>
                                              <td>Copper Ridge</td>
                                              <td>Stephanie Duiven & James Hudson </td>
                                              <td>A</td>
                                              <td> $324.50 </td>
                                              <td> 1038</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                      </div>
                                      <div class="clear20"> </div>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Charge Back</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">View Invoice</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn">Print</button>
                                      
                                       <div class="clear20"> </div>
                                       
                                       <div class="row">
                                       <div class="col-md-6">
                                       <div class="row">
                                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">Total Unpaid</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$11,712.00">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="COM">YTD Paid</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$11,712.00">
                          </div>  </div>
                            </div>
                        </div> 
                        
                        
                          <div class="col-md-6">
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Paid</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">UnPaid</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Pending</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Refresh</button>
                           </div>
                        
                        </div>

                                      
                                      
                                      
                                      
                                      
                                      </div>
                                    
                                    
                                    
                                    
                                    
                                    </div> </div> </div> </div>
                    
                    </div>
                    
                    
                    <div class="tab-pane fade" id="nav-Expense" role="tabpanel" aria-labelledby="nav-Expense-tab">
                    
                  <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                        
                        <h5 class="label_rule_heading">Expense</h5>

                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                           					
                                                <th width="19%" scope="col"> DT Create</th>
                                                <th width="16%" scope="col">DT PD		</th>
                                             
                                                <th width="14%" scope="col">Description	</th>
                                                <th width="29%" scope="col">Comment	</th>
                                                <th width="18%" scope="col">Amount</th>
                                                <th width="4%" scope="col">Hold</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                     
                                                
                                                <td>06/30/09</td>
                                                <td>60</td>
                                                <td>06/02/09</td>
                                                <td>Flyer Stands</td>
                                                <td>	$6.50</td>
                                                <td><label class="custom-control custom-checkbox">
                                                  <input type="checkbox"  class="custom-control-input">
                                                  <span class="custom-control-label"></span> </label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                            <tr>
                                              <td>06/30/09</td>
                                              <td>60</td>
                                              <td>06/02/09</td>
                                              <td>Flyer Stands</td>
                                              <td>$6.50</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                    
                                    
                                </div>
                                <div class="col-sm-12">
                                <div class="row">
                                <div class="col-sm-4">
                                <div class="form-group">
                            <label for="COM">Balance on Hold :</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$580.00">
                          </div>
                          </div>
                          
                          <div class="col-sm-7">
                            
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Print</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Delete</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Detail</button>
                   <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_add_expense">Add</button>
                                      
                          
                                
                                
                                
                          </div> </div>
                                 


                                
                                </div>
                                
                                
                                
                                </div></div></div>    
                                    
                                    
                                    
                    
                    </div>
                    
                     <div class="tab-pane fade" id="nav-Misc" role="tabpanel" aria-labelledby="nav-Misc-tab">
                <div class="mrg_addres_area">
                          <div class="col-sm-12 p-0">
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                        
                        <h5 class="label_rule_heading">Misc Income
</h5>

                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                        <thead>
                                            <tr>
                                           					
                                                <th width="11%" scope="col"> Inv#</th>
                                                <th width="12%" scope="col">Date		</th>
                                             
                                                <th width="38%" scope="col">Comment	</th>
                                                <th width="10%" scope="col">Amount	</th>
                                                <th width="10%" scope="col">Hold</th>
                                                <th width="12%" scope="col">DT Paid </th>
                                                <th width="7%" scope="col">Chk #
</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                     
                                                
                                                <td>&nbsp;</td>
                                                <td>06/02/09</td>
                                                <td>March 2011 Manager Override</td>
                                                <td><label class="custom-control custom-checkbox">
                                                  <input type="checkbox"  class="custom-control-input">
                                                  <span class="custom-control-label"></span></label></td>
                                                <td>		$238.13</td>
                                                <td>	05/02/11</td>
                                                <td>	5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>12992</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td> $238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td> $238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td> $238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td> $238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>06/02/09</td>
                                              <td>March 2011 Manager Override</td>
                                              <td><label class="custom-control custom-checkbox">
                                                <input type="checkbox"  class="custom-control-input">
                                                <span class="custom-control-label"></span></label></td>
                                              <td>$238.13</td>
                                              <td> 05/02/11</td>
                                              <td> 5336</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                    
                                    
                                </div>
                                <div class="col-sm-12">
                                <div class="row">
                                <div class="col-sm-4">
                                <div class="form-group">
                            <label for="COM">Balance on Hold :</label>
                            <input type="text" class="form-control" id="COM" name="COM" placeholder="$0.00">
                          </div>
                          </div>
                          
                          <div class="col-sm-7">
                            
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Print</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Delete</button>
                                      <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1">Detail</button>
                   <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn paybtn_m1" data-toggle="modal" data-target="#myModal_misc">Add</button>
                                      
                          
                                
                                
                                
                          </div> </div>
                                 


                                
                                </div>
                                
                                
                                
                                </div></div></div>
                    
                    </div>
                    
                      <div class="tab-pane fade" id="nav-Sever" role="tabpanel" aria-labelledby="nav-Sever-tab">
                  
                 <div class="mrg_addres_area">
                      
                          <div class="card card_address">
                                    <div class="card-body">
                                    
                                    
                                   <div class="sever_w1">
                                   
                                    
                          <div class="col-sm-12">
                     <div class="row">
                     
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label class="home_check">Sever Agent :
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="clear10"></div>
                         <a href="#" class="btn_add_agent btn_add_agent"> Recalulate Commissions</a>
                          
                          
                        </div>
                        
                        
                        <div class="col-lg-6">
                          <label for="COM">	Sever Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_sever" />
                            </div>
                        </div> 
                        </div>
                        
                      
                        <div class="col-sm-12">
                          <div class="clear20"></div>
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Save</button>
                        <button type="submit" class="btn btn-primary form_box_cust_btn ml-3 pay_search_btn" style="margin-left:0px !important;">Cancel</button>
                         <div class="clear10"></div>
                        </div>
                       
                        
                        
                        
                        
                        <div class="col-md-12">
                          <label for="COM">	Comments</label>
                          <div class="form-group ">
                            <div class="">
                              <textarea name="" cols="" class="form-control" rows=""></textarea>
                            </div>
                        </div> 
                        </div>
                     
                  
                     </div> </div>
                     
                     </div>
                    
                    </div></div></div>
                    
                    
                    </div>
                          
                          
                          
                          <div class="row">
                          <div class="col-sm-12 p-0">
                                                                                                    
                         
                           
                             <nav>
                             
                             
                             
                             
                    <div class="nav nav-tabs nav-tabs_new nav-fill" id="nav-tab" role="tablist">
                    
                <a class="nav-item nav-link btn_general_h btn_general_h" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> General</a>
                          
          <a class="nav-item nav-link  btn_general_h" id="nav-notes-tab" data-toggle="tab" href="#nav-notes" role="tab" aria-controls="nav-notes" aria-selected="false"> Notes</a>
          
         <a class="nav-item nav-link  btn_general_h" id="nav-productivity-tab" data-toggle="tab" href="#nav-productivity" role="tab" aria-controls="nav-productivity" aria-selected="false"> Productivity</a>
         
 <a class="nav-item nav-link  btn_general_h active" id="nav-Transactions-tab" data-toggle="tab" href="#nav-Transactions" role="tab" aria-controls="nav-Transactions" aria-selected="true"> Transactions</a>
      
<a class="nav-item nav-link  btn_general_h" id="nav-Expense-tab" data-toggle="tab" href="#nav-Expense" role="tab" aria-controls="nav-Expense" aria-selected="false"> Expense</a>
       
<a class="nav-item nav-link  btn_general_h" id="nav-Misc-tab" data-toggle="tab" href="#nav-Misc" role="tab" aria-controls="nav-Misc" aria-selected="false"> Misc. Income</a>
<a class="nav-item nav-link  btn_general_h" id="nav-Sever-tab" data-toggle="tab" href="#nav-Sever" role="tab" aria-controls="nav-Sever" aria-selected="false"> Sever</a>
                    
                    
                    
                    
                     
                      
                     
                    </div>
                  </nav>
                           
                          
                          
                          </div> 
                          </div>
                          <div class="clear40"></div>
                          
                          
                          
                          
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
    </div>
         <!-- jQuery library -->





<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">History /  Notes Item Detail </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-6">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker1" />
                            </div>
                        </div> 
                        </div>
                      
                        <div class="col-md-6">
                         <div class="form-group">
                                  <label for="name">Time	</label>
                                  <input type="name" class="form-control" id="name" name="name" placeholder="5:53 AM">
                                  
                                </div>
                           
                        </div>
                        
                        </div>
                        <div class="col-md-12 p-0">
                         <div class="form-group">
                                  <label for="name">Regarding	</label>
                           <textarea name="" class="form-control" cols="" rows=""></textarea>
                                  
                                </div>
                           
                        </div>
                        
                         <div class="col-md-12 p-0">
                         <div class="form-group">
                                  <label for="name">Attachment :	</label>
                     <input name="" class="form-control" type="file">
                                  
                                </div>
                           
                        </div>
                        <div class="clear10"></div>
                          <div class="col-md-12 p-0">
                        <label class="home_check">Information Locked : Editable only by Orignal User

        <input type="checkbox">
        <span class="checkmark"></span>
  </label>
                        </div>                                 
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal">Save</button><br>
 <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="myModal_add_expense">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
      <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Charge Type :	</label>
                               <select name="" id="" class="form-control">
	<option value="1">CHARGEBACK</option>
	<option value="2">OFFICE FEE</option>
	<option value="3">CREDIT REPORTS</option>
	<option value="4">ADMINISTRATION FEE</option>
	<option value="5">LEGAL FEES</option>
	<option value="6">MARKETING SUPPLIES</option>
	<option value="7">CARDS/FLIERS</option>
	<option value="8">ADJUSTMENT</option>
	<option value="9">REALTOR FEES</option>
	<option value="10">MISC.</option>

</select>
                                  
                                </div>
                           
                        </div>
                           <div class="col-md-12">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_ex" />
                            </div>
                        </div> 
                        </div>  
                      
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">
                                                    Amount :
                                                	</label>
                                  <input type="name" class="form-control" id="name" name="name" placeholder="">
                                  
                                </div>
                           
                        </div>
                        
                       
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Comment	</label>
                           <textarea name="" class="form-control" cols="" rows="">Flyer Stands</textarea>
                                  
                          </div>
                           
                        </div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal">Save</button><br>
 <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>



<div class="modal" id="myModal_misc">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Misc. Income</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
                        <div class="row">
      <div class="col-md-12">
      
                           <div class="col-md-12">
                          <label for="COM">Date :</label>
                          <div class="form-group ">
                            <div class="">
                                <input id="datepicker_misc" />
                            </div>
                        </div> 
                        </div>  
                      
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">
                                                    Amount :
                                                	</label>
                                  <input type="name" class="form-control" id="name" name="name" placeholder="">
                                  
                                </div>
                           
                        </div>
                        
                       
                        <div class="col-md-12">
                         <div class="form-group">
                                  <label for="name">Comment	</label>
                           <textarea name="" class="form-control" cols="" rows="">Flyer Stands</textarea>
                                  
                          </div>
                           
                        </div>
                        </div>
                          </div>
                   
                                                           
                                                
   
   
                                                    
                                                
   
   
   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal">Save</button><br>
 <button type="button" class="btn btn-danger btn_close_pop3" data-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>
</div>


                                    
                                


 @endsection
  <script>
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<script>
$('#datepicker2').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker3').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker4').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker_ex').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker_misc').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker_sever').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>


<script>
$('#edit').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>
<script>
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>


<style>
.nav-item.nav-link.active
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
   
}


nav > div a.nav-item.nav-link.active:after
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

}
.tab-content{


}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
 	background: rgba(156,39,68,1);
background: -moz-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(156,39,68,1)), color-stop(100%, rgba(104,27,45,1))) !important;
background: -webkit-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%);
background: -o-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: -ms-linear-gradient(left, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
background: linear-gradient(to right, rgba(156,39,68,1) 0%, rgba(104,27,45,1) 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9c2744', endColorstr='#681b2d', GradientType=1 ) !important;
color:#fff !important;


   
}
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
		color:#fff;
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


.tr_dashboard_product
{
	background-color:#85223a;
	color:#fff !important;
	padding:5px;
}
.tr_dashboard_product td
{
	background-color:#85223a;
	color:#fff !important;
	padding:5px;
}
.tr_dashboard_product td label
{

	color:#fff !important;
}
.label_normal_bold
{
	padding-left:10px;
}
.table_note_2 tr td
{
	color:#000;
}
.w_check1
{
	float:left !important;
	width:95% !important;
	padding-left:5px;
}
.table_product_res
{
	display:table !important;
}
.nav-tabs .nav-link
{
	line-height:18px !important;
	margin-bottom:5px;
}
.pay_search_btn
{
	margin-bottom:10px;
}
.nav-tabs_new
{
	border-bottom: none !important;
}

.hide {
  display: none;
}
.trans_right_input1input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    display: block !important;
}
.input_trans_4
{
	margin-top: 4px;
    margin-right: 5px;
}
.table_trans_h
{
	height:300px;
	overflow-y:scroll;
}
.table_trans_h table.table th:last-child {
        width: auto;
    }
.paybtn_m1
{
	margin-left:5px !important;
	padding-left:20px !important;
	padding-right:20px !important;
	margin-top:30px !important;
}
.sever_w1
{
	width:600px;
	margin:auto;
}
@media (min-width: 600px) and   (max-width: 1100px){
.sever_w1
{
	width:100%;
}
.btn_dever_calc {
    font-size: 9px;
    padding-left: 6px;
    padding-right: 7px;
}
}
@media (min-width: 768px) and   (max-width: 1024px){
	.paybtn_m1
{

	margin-top:5px !important;
}

}
@media (min-width: 320px) and   (max-width: 600px){
.sever_w1
{
	width:100%;
}	

.table_product_res
{
	display:block !important;
}	
	
}
</style>

