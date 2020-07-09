@extends('admin_layouts.layout')
@section('content')        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
            
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"> SECURTIY SCREEN</h2>
                              
                                
                            </div>
                        </div>
                    </div>


    <!-- First Boxes in Row Start -->
    <div class="container-fluid">
        <div class="row">
            <div class=" col-12 mt-3 p-0">
                <!-- Left Box Start -->
                    <div class="card card_address pl-3 pr-3">
                        <div class="card-body">
                           <h5 class="text_address "> Security Info
</h5>
                           <div class="security_mamange_w1">
                         
                            <table width="100%" id="laravel_crud" class="table table-bordered table_office_manage tbl_security_mnge table_responsive2 mt-5">
                                <thead>
                                    <tr>
                                                       
                                        <th class="text-center"  scope="col"> Security Level</th>
                                        <th  scope="col"></th>
                                     

                                    </tr>
                                </thead>
                                <tbody id="posts-crud">
                                @if(count($pagesecurity) > 0)
                                @foreach($pagesecurity as $security)
                                    <tr>
                                        <td>{{ $security->addsecurity }}</td>

                                        <td>
              
                     <a href="{{ route('pagesecurity.edit', $security->id) }}" class="edit">
                  	
                    <i class="material-icons"></i>
                  </a>
                
                     <form action="{{ route('pagesecurity.destroy', $security->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                     <button class="delete material-icons" type="submit">
                     <i class="material-icons"></i></button>
                    </form>
                                            
                         </td>
                                    </tr>
                                    @endforeach
                                    @else
                                   <tr>
                                   <td align="center">No Record Found!</td><td></td>
                                   </tr>
                                   @endif
                                   
                                  
                                </tbody>
                            </table>
                            {{ $pagesecurity->links() }}
                            </div>      
                            </div>
                        </div>
                        <!-- Left Box End  -->
                        <div class="">
                        <div class="row">
                        <div class="col-lg-6 col-12">
                        <div class="card card_address pl-3 pr-3">
                            <div class="card-body">
                                <h5 class="text_address ">Security Info</h5>
                               
                                    <div class="row">
                                    <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Security Level</label>
        <form id="postForm" name="postForm" action="{{route('pagesecurity.store')}}" method="POST" class="form-horizontal">
        @csrf
           <input type="hidden" name="user_id" id="user_id">
          
               <input type="text" class="form-control"  id="addsecurity"  name="addsecurity">
                                      </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mt-md-4 ">
                                          <label class="home_check"> Check/ Uncheck All
                                            <input type="checkbox" name="checkedAll" id="checkedAll" checked>
                                            <span class="checkmark"></span>
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                      <div class="col col-sm-10 col-lg-12 offset-sm-1 offset-lg-0 mt-4 mb-4">
                                        <div class="row float-left">

                                   <button type="submit" class="btn btn-space btn_promary_custom chk_scr_top_btn" id="btn-save" value="create">Save
                                </button>                                    
                                        <button type="reset" class="btn btn-space btn_promary_custom chk_scr_top_btn">Cancel</button>
                                  
                                        </div>
                                    </div>
                                </div>

                                </div>
         
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="card card_address pl-3 pr-3">
                                <div class="card-body">
                                    <h5 class="text_address ">Pages Security Set</h5>
                                 
                                        <div class="row mb-md-4">

                                        <div class=" col-12 ">
                                            <div class="form-group mt-md-4 ">
                                              <label class="home_check"> Add Users
                                                <input type="checkbox" class="checkSingle" name="adduser" value="adduser" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class=" col-12 ">
                                            <div class="form-group mt-md-4 ">
                                              <label class="home_check"> Add Security
                                                <input type="checkbox" class="checkSingle" name="addsecurityl" value="addsecurity" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
    
                                    </div>
                                   
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>



    
    <!-- ***************************** -->

                                <!-- Left Box End  -->
                                <div class="card card_address pl-3 pr-3">
                                  <div class="card-body">
                                    <h5 class="text_address ">Agent Security Set</h5>
                                  
                                      <div class="row">

                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> View Social Security #
                                              <input type="checkbox" class="checkSingle" value="viewsocialsec" name="viewsocialsec" checked>
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>

                
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit Override Apply
                                              <input type="checkbox" class="checkSingle" value="editoverr" name="editoverr" checked>
                                              <span class="checkmark" ></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit Agent Advanceable
                                              <input type="checkbox" class="checkSingle" value="editagenta" name="editagenta" checked>
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Change Agents Office
                                              <input type="checkbox" class="checkSingle" value="chengeagea" name="chengeagea" checked>
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Set Agent Inactive
                                              <input type="checkbox" class="checkSingle" value="setagent" name="setagent" checked>
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit / Delete Others Users Notes
                                              <input type="checkbox" class="checkSingle" value="deleteedit" name="deleteedit" checked>
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> View Agent Commission Setup
                                              <input type="checkbox" class="checkSingle" value="viewagent" name="viewagent" checked>
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div> 
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Edit Agent Commission Setup Screen
                                                <input type="checkbox" class="checkSingle" value="editagentc" name="editagentc" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> View YTD Paid
                                                <input type="checkbox" class="checkSingle" value="viewETCPaid" name="viewETCPaid" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div> 
                                          </div>
  
                  
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Charge Back
                                                <input type="checkbox" class="checkSingle" value="chargeback" name="chargeback" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Print Transaction Screens
                                                <input type="checkbox" class="checkSingle" value="printtransaction" name="printtransaction" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Add Agent Expense
                                                <input type="checkbox" class="checkSingle" value="addagente" name="addagente" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Delete Agent Expense
                                                <input type="checkbox" class="checkSingle" value="deleteagent" name="deleteagent" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Edit Expense Holds
                                                <input type="checkbox" class="checkSingle" value="editexpense" name="editexpense" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Print Expense Screen
                                                <input type="checkbox" class="checkSingle" value="printexpense" name="printexpense" checked>
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-3 col-md-4">
                                              <div class="form-group">
                                                <label class="home_check"> Add Misc. Income
                                                  <input type="checkbox" class="checkSingle" value="addmiscincome" name="addagentb" checked>
                                                  <span class="checkmark"></span>
                                                </label>
                                              </div>
                                            </div> 
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Delete Misc. Income
                                                    <input type="checkbox" class="checkSingle" value="deletemiscincome" name="deleteagentb" checked>
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div> 
                                              
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Edit Misc. Income Holds
                                                    <input type="checkbox" class="checkSingle" value="editmiscincomeholds" name="editbonush" checked>
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                           
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Print Misc. Income Screen
                                                    <input type="checkbox" class="checkSingle" value="printmiscincomescreen" name="printbonush" checked>
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                            
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Sever Agent
                                                    <input type="checkbox" class="checkSingle" value="severagent" name="severagenta" checked>
                                                    <span class="checkmark"></span> 
                                                  </label>
                                                </div>
                                              </div>
                                            
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Recalculate Commission
                                                    <input type="checkbox" class="checkSingle" value="recalculatecomm" name="recalculate" checked>
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>



                                        
                                      </div>
                                      
                                      

                                      
                                 
                                  </div>
                                </div> 
<!-- Property Security Set Section Start -->
                                                    
                        <div class="card card_address pl-3 pr-3">
                            <div class="card-body">
                            <h5 class="text_address ">Property Security Set </h5>
                            
                          <div class="row">

                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Auto Pay
                                        <input type="checkbox" class="checkSingle" value="editautopay" name="editautopay" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Slow Pay
                                        <input type="checkbox" class="checkSingle" value="editslowpay" name="editslowpay" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Do Not Place
                                        <input type="checkbox" class="checkSingle" value="editdonotplace" name="editdonotplace" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check">Edit Not Advanceable
                                        <input type="checkbox" class="checkSingle" value="editnoadvancable" name="editnoadvancable" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit No Contract
                                        <input type="checkbox" class="checkSingle" value="editnocontract" name="editnocontract" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Property Information
                                        <input type="checkbox" class="checkSingle" value="editpropertyinfo" name="editpropertyinfo" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Managment Company Information
                                        <input type="checkbox" class="checkSingle" value="editmgmtinfo" name="editmgmtinfo" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check"> Change Main Billing Address
                                        <input type="checkbox" class="checkSingle" value="changemainbilling" name="changemainbilling" checked>
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div> 
                                  <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check">Edit Last Contract Date
                                        <input type="checkbox" class="checkSingle" value="editlastcontract" name="editlastcontract" checked>
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                   </div>


                                    <div class="col-lg-3 col-md-4">
                                    <div class="form-group" >
                                        <label class="home_check"> Print Transaction Screens
                                  
                                        <input type="checkbox" class="checkSingle" value="printtransactionscreen" name="printtransactionscreen" checked>
                                        <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    
                              <div class="col-3">
                                <div class="form-group">
                                        <label class="home_check"> 
                                        Edit / Delete History / Notes By Other Users
                                        <input type="checkbox" class="checkSingle" value="editdeletenotesbyotheruser" name="editdeletenotesbyotheruser" checked>
                                        <span class="checkmark"></span>
                                        </label>
                                   </div>
                                 </div>
                                </div>
                              </div>
                                

                                
                         
                            </div>
                        </div> 

  <!-- Property Security Section End -->
  <!-- Six Six Section -->

                <div class="">
                    <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card card_address pl-3 pr-3">
                        <div class="card-body">
                            <h5 class="text_address ">Deposit Security Set</h5>
                         
                                <div class="row">

                                <div class="col-12">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Access
                                        <input type="checkbox" class="checkSingle" value="depositsecurity" name="depositsecurity" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>

                            </div>
                           
                            </div>
                        </div>
                  </div>
                    <div class="col-lg-6 col-12">
                        <div class="card card_address pl-3 pr-3">
                            <div class="card-body">
                                <h5 class="text_address ">Approval Security Set</h5>
                               
                                    <div class="row ">

                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Access
                                            <input type="checkbox" class="checkSingle" value="approvalsecurity" name="approvalsecurity" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Approve
                                            <input type="checkbox" class="checkSingle" name="approve" value="approve" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Reject
                                            <input type="checkbox" class="checkSingle" name="reject"  value="reject" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>

                                </div>
                              
                               
                            
                       

                </div>
                </div>
                </div>  
                </div>
<!-- Six Six  -->

<div class="">
    <div class="row">
    <div class="col-lg-6 col-12">
    <div class="card card_address pl-3 pr-3">
        <div class="card-body">
            <h5 class="text_address ">Deposit Receipt Security Set</h5>
            
                <div class="row">

                <div class="col-md-4">
                    <div class="form-group mt-md-4 ">
                    <label class="home_check"> Access
                        <input type="checkbox" class="checkSingle" value="depostrecsecset" name="depostrecsecset" checked>
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                <div class=" col-md-4 ">
                    <div class="form-group mt-md-4 ">
                    <label class="home_check"> Select RCVD
                        <input type="checkbox" class="checkSingle" value="selectrcvd" name="rcvd" checked>
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>

            </div>
         
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card card_address pl-3 pr-3">
            <div class="card-body">
                <h5 class="text_address ">Payment Security Set</h5>
             
                    <div class="row ">

                    <div class=" col-md-4 ">
                        <div class="form-group mt-md-4 ">
                        <label class="home_check"> Add Payment
                            <input type="checkbox" class="checkSingle" name="addpayment" value="addpayment" checked>
                            <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>
                    <div class=" col-md-4 ">
                        <div class="form-group mt-md-4 ">
                        <label class="home_check"> Post Payment
                            <input type="checkbox" class="checkSingle" value="postpayment" name="postpayment" checked>
                            <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>


                </div>
              
                </div>
            </div>
        </div>

</div>
</div>
<!-- Full -->

<div class="card card_address pl-3 pr-3">
    <div class="card-body">
    <h5 class="text_address ">Check Security Set </h5>
 
        <div class="row">

        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Access
                <input type="checkbox" class="checkSingle" value="checkscaccess" name="checkscaccess" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Process Commission
                <input type="checkbox" class="checkSingle" name="processcomm" value="processcomm" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Commission Checks
                <input type="checkbox" class="checkSingle" value="createcommchecks" name="createcommcheck" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Process Auto Pays
                <input type="checkbox" class="checkSingle" value="processautopays" name="processautopays" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Auto Pay Checks
                <input type="checkbox" class="checkSingle" value="createautopayschecks" name="createautopayschecks" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Renumber Checks
                <input type="checkbox" class="checkSingle" value="renumberchecks" name="renumberchecks" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Export Checks
                <input type="checkbox" class="checkSingle" name="exportchecks" value="exportchecks" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div> 
        
        </div>
        
        

        
   
    </div>
</div>
<!-- Full -->
<div class="card card_address pl-3 pr-3">
    <div class="card-body">
    <h5 class="text_address ">Invoicing Security Set </h5>
 
        <div class="row">

        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Change Billing Address
                <input type="checkbox" class="checkSingle" name="changebillingaddressinvoice" value="changebillingaddress" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Edit Legal
                <input type="checkbox" class="checkSingle" name="editlegalinvoice" value="editlegal" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Adjust Commission
                <input type="checkbox" class="checkSingle" name="adjustcomminvoice" value="adjustcomm" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Select No Pay
                <input type="checkbox" class="checkSingle" name="selectnoopayinvoice" value="selectnopay" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Select No#
                <input type="checkbox" class="checkSingle" value="selectno#" name="selectno" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>

        

        </div>        
    
    </div>
</div>
<!-- Full -->
<div class="card card_address pl-3 pr-3">
    <div class="card-body">
    <h5 class="text_address ">AutoPay Security Set </h5>
    
        <div class="row">

        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Apply Deposit
                <input type="checkbox" class="checkSingle" name="autopayscreenset" value="autopayscreenset" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Auto Pay
                <input type="checkbox" class="checkSingle" name="createautopaysecset" value="createautopaysecurity" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check">Change Billing Address
                <input type="checkbox" class="checkSingle"  name="changeautopaybillinaddress" value="changeautopaybillinaddress" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Add Payments
                <input type="checkbox" class="checkSingle" name="autopayaddpayments" value="autopayaddpayments" checked>
                <span class="checkmark"></span>
            </label>
            </div>
        </div>

        </div>        
    </form>
    </div>
</div>

    <!-- ****************** -->
    
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
    <script>
$(document).ready(function() {
  $("#checkedAll").change(function(){
    if(this.checked){
      $(".checkSingle").each(function(){
        this.checked=true;
      })              
    }else{
      $(".checkSingle").each(function(){
        this.checked=false;
      })              
    }
  });
 
  $(".checkSingle").click(function () {
    if ($(this).is(":checked")){
      var isAllChecked = 0;
      $(".checkSingle").each(function(){
        if(!this.checked)
           isAllChecked = 1;
      })              
      if(isAllChecked == 0){ $("#checkedAll").prop("checked", true); }     
    }else {
      $("#checkedAll").prop("checked", false);
    }
  });
});
</script> 
    <script>
$(document).ready(function(){
    $('.datepicker').datepicker().on('changeDate', function(){
  $(this).blur();
}); 
$('#datepick').datepicker();
});





</script>

    
@endsection
