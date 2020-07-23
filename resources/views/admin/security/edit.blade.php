@extends('admin_layouts.layout')
@section('content')        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                @if(Session::has('success'))
			<div class="alert alert-success"  style="font-size: 17px;margin:10px;">        
			<strong>Success! </strong>{{Session::get('success')}}
			</div>
			<?php session()->forget('billingMsg'); ?> 
			@endif
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
  <form id="postForm" name="postForm" action="{{route('pagesecurity.update',$security->id)}}" method="POST" class="form-horizontal">
        @method('PUT')
        @csrf
           <!-- <input type="hidden" name="user_id" id="user_id"> -->
          
               <input type="text" class="form-control" value="{{ $security->addsecurity }}" id="addsecurity"  name="addsecurity">
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
                                              @if($security->adduser == 'adduser')
                                                <input type="checkbox" class="checkSingle" name="adduser" value="adduser" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" name="adduser" value="adduser">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class=" col-12 ">
                                            <div class="form-group mt-md-4 ">
                                              <label class="home_check"> Add Security
                                               @if($security->addsecurityl == 'addsecurity')
                                                <input type="checkbox" class="checkSingle" name="addsecurityl" value="addsecurity" checked>
                                                @else
                                                    <input type="checkbox" class="checkSingle" name="addsecurityl" value="addsecurity">        
                                                @endif
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
                                            @if($security->viewsocialsec == 'viewsocialsec')
                                              <input type="checkbox" class="checkSingle" value="viewsocialsec" name="viewsocialsec" checked>
                                              @else
                                                <input type="checkbox" class="checkSingle" value="viewsocialsec" name="viewsocialsec">
                                            @endif
                                              
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>

                
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit Override Apply
                                            @if($security->editoverr == 'editoverr')
                                              <input type="checkbox" class="checkSingle" value="editoverr" name="editoverr" checked>
                                              @else
                                              <input type="checkbox" class="checkSingle" value="editoverr" name="editoverr">
                                              @endif
                                              <span class="checkmark" ></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit Agent Advanceable
                                            @if($security->editagenta == 'editagenta')
                                              <input type="checkbox" class="checkSingle" value="editagenta" name="editagenta" checked>
                                              @else
                                              <input type="checkbox" class="checkSingle" value="editagenta" name="editagenta">
                                            @endif
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Change Agents Office
                                            @if($security->chengeagea == 'chengeagea')
                                              <input type="checkbox" class="checkSingle" value="chengeagea" name="chengeagea" checked>
                                              @else
                                              <input type="checkbox" class="checkSingle" value="chengeagea" name="chengeagea">
                                            @endif
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Set Agent Inactive
                                            @if($security->setagent == 'setagent')
                                              <input type="checkbox" class="checkSingle" value="setagent" name="setagent" checked>
                                              @else
                                              <input type="checkbox" class="checkSingle" value="setagent" name="setagent">
                                              @endif
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit / Delete Others Users Notes
                                            @if($security->deleteedit == 'deleteedit')
                                              <input type="checkbox" class="checkSingle" value="deleteedit" name="deleteedit" checked>
                                              @else
                                              <input type="checkbox" class="checkSingle" value="deleteedit" name="deleteedit">
                                              @endif
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> View Agent Commission Setupif
                                            @if($security->viewagent == 'viewagent')
                                              <input type="checkbox" class="checkSingle" value="viewagent" name="viewagent" checked>
                                              @else
                                              <input type="checkbox" class="checkSingle" value="viewagent" name="viewagent">
                                              @endif
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div> 
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Edit Agent Commission Setup Screen
                                              @if($security->editagentc == 'editagentc')
                                                <input type="checkbox" class="checkSingle" value="editagentc" name="editagentc" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="editagentc" name="editagentc">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> View YTD Paid
                                              @if($security->viewETCPaid == 'viewETCPaid')
                                                <input type="checkbox" class="checkSingle" value="viewETCPaid" name="viewETCPaid" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="viewETCPaid" name="viewETCPaid">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div> 
                                          </div>
  
                  
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Charge Back
                                              @if($security->chargeback == 'chargeback')
                                                <input type="checkbox" class="checkSingle" value="chargeback" name="chargeback" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="chargeback" name="chargeback">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Print Transaction Screens
                                              @if($security->printtransaction == 'printtransaction')
                                                <input type="checkbox" class="checkSingle" value="printtransaction" name="printtransaction" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="printtransaction" name="printtransaction">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Add Agent Expense
                                              @if($security->addagente == 'addagente')
                                                <input type="checkbox" class="checkSingle" value="addagente" name="addagente" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="addagente" name="addagente">
                                                @endif
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
                                              @if($security->editexpense == 'editexpense')
                                                <input type="checkbox" class="checkSingle" value="editexpense" name="editexpense" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="editexpense" name="editexpense">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Print Expense Screen
                                              @if($security->printexpense == 'printexpense')
                                                <input type="checkbox" class="checkSingle" value="printexpense" name="printexpense" checked>
                                                @else
                                                <input type="checkbox" class="checkSingle" value="printexpense" name="printexpense">
                                                @endif
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-3 col-md-4">
                                              <div class="form-group">
                                                <label class="home_check"> Add Misc. Income
                                                @if($security->addagentb == 'addagentb')
                                                  <input type="checkbox" class="checkSingle" value="addmiscincome" name="addagentb" checked>
                                                  @else
                                                  <input type="checkbox" class="checkSingle" value="addmiscincome" name="addagentb">
                                                @endif                
                                                  <span class="checkmark"></span>
                                                </label>
                                              </div>
                                            </div> 
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Delete Misc. Income
                                                  @if($security->deleteagentb == 'deletemiscincome')
                                                    <input type="checkbox" class="checkSingle" value="deletemiscincome" name="deleteagentb" checked>
                                                    @else
                                                    <input type="checkbox" class="checkSingle" value="deletemiscincome" name="deleteagentb">
                                                    @endif
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div> 
                                              
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Edit Misc. Income Holds
                                                  @if($security->editbonush == 'editmiscincomeholds')
                                                    <input type="checkbox" class="checkSingle" value="editmiscincomeholds" name="editbonush" checked>
                                                   @else
                                                   <input type="checkbox" class="checkSingle" value="editmiscincomeholds" name="editbonush" >
                                                   @endif
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                           
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Print Misc. Income Screen
                                                  @if($security->printbonush == 'printmiscincomescreen')
                                                    <input type="checkbox" class="checkSingle" value="printmiscincomescreen" name="printbonush" checked>
                                                    @else
                                                    <input type="checkbox" class="checkSingle" value="printmiscincomescreen" name="printbonush">
                                                    @endif
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                            
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Sever Agent
                                                  @if($security->severagenta == 'severagent')
                                                    <input type="checkbox" class="checkSingle" value="severagent" name="severagenta" checked>
                                                    @else
                                                    <input type="checkbox" class="checkSingle" value="severagent" name="severagenta">
                                                    @endif
                                                    <span class="checkmark"></span> 
                                                  </label>
                                                </div>
                                              </div>
                                            
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Recalculate Commission
                                                  @if($security->recalculate == 'recalculatecomm')
                                                    <input type="checkbox" class="checkSingle" value="recalculatecomm" name="recalculate" checked>
                                                    @else
                                                    <input type="checkbox" class="checkSingle" value="recalculatecomm" name="recalculate">
                                                    @endif
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
                                    @if($security->editautopay == 'editautopay')
                                        <input type="checkbox" class="checkSingle" value="editautopay" name="editautopay" checked>
                                    @else
                                    <input type="checkbox" class="checkSingle" value="editautopay" name="editautopay">
                                    @endif

                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Slow Pay
                                    @if($security->editslowpay == 'editslowpay')
                                        <input type="checkbox" class="checkSingle" value="editslowpay" name="editslowpay" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editslowpay" name="editslowpay">
                                        @endif

                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Do Not Place
                                    @if($security->editdonotplace == 'editdonotplace')
                                        <input type="checkbox" class="checkSingle" value="editdonotplace" name="editdonotplace" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editdonotplace" name="editdonotplace" checked>
                                        @endif
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check">Edit Not Advanceable
                                    @if($security->editnoadvancable == 'editnoadvancable')
                                        <input type="checkbox" class="checkSingle" value="editnoadvancable" name="editnoadvancable" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editnoadvancable" name="editnoadvancable">
                                        @endif
                                        <span class="checkmark"></span>

                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit No Contract
                                    @if($security->editnocontract == 'editnocontract')

                                        <input type="checkbox" class="checkSingle" value="editnocontract" name="editnocontract" checked>

                                        @else
                                        <input type="checkbox" class="checkSingle" value="editnocontract" name="editnocontract">

                                        @endif
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Property Information
                                    @if($security->editpropertyinfo == 'editpropertyinfo')

                                        <input type="checkbox" class="checkSingle" value="editpropertyinfo" name="editpropertyinfo" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editpropertyinfo" name="editpropertyinfo">
                                        @endif
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Managment Company Information
                                    @if($security->editmgmtinfo == 'editmgmtinfo')
                                        <input type="checkbox" class="checkSingle" value="editmgmtinfo" name="editmgmtinfo" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editmgmtinfo" name="editmgmtinfo">
                                        @endif
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check"> Change Main Billing Address
                                        @if($security->changemainbilling == 'changemainbilling')
                                        <input type="checkbox" class="checkSingle" value="changemainbilling" name="changemainbilling" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="changemainbilling" name="changemainbilling">
                                        @endif
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div> 
                                  <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check">Edit Last Contract Date
                                        @if($security->editlastcontract == 'editlastcontract')
                                        <input type="checkbox" class="checkSingle" value="editlastcontract" name="editlastcontract" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editlastcontract" name="editlastcontract">
                                        @endif
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                   </div>


                                    <div class="col-lg-3 col-md-4">
                                    <div class="form-group" >
                                        <label class="home_check"> Print Transaction Screens
                                        @if($security->printtransactionscreen == 'printtransactionscreen')
                                        <input type="checkbox" class="checkSingle" value="printtransactionscreen" name="printtransactionscreen" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="printtransactionscreen" name="printtransactionscreen">
                                        @endif
                                        <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    
                              <div class="col-3">
                                <div class="form-group">
                                        <label class="home_check"> 
                                        Edit / Delete History / Notes By Other Users
                                        @if($security->editdeletenotesbyotheruser == 'editdeletenotesbyotheruser')
                                        <input type="checkbox" class="checkSingle" value="editdeletenotesbyotheruser" name="editdeletenotesbyotheruser" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="editdeletenotesbyotheruser" name="editdeletenotesbyotheruser">
                                        @endif
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
                            <h5 class="text_address ">Deposite Security Set</h5>
                         
                                <div class="row">

                                <div class="col-12">
                                    <div class="form-group mt-md-4 ">
                                    <label class="home_check"> Access
                                    @if($security->depositsecurity == 'depositsecurity')
                                        <input type="checkbox" class="checkSingle" value="depositsecurity" name="depositsecurity" checked>
                                        @else
                                        <input type="checkbox" class="checkSingle" value="depositsecurity" name="depositsecurity">
                                        @endif
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
                                        @if($security->approvalsecurity == 'approvalsecurity')
                                            <input type="checkbox" class="checkSingle" value="approvalsecurity" name="approvalsecurity" checked>
                                            @else
                                            <input type="checkbox" class="checkSingle" value="approvalsecurity" name="approvalsecurity">
                                            @endif
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Approve
                                        @if($security->approve == 'approve')
                                            <input type="checkbox" class="checkSingle" name="approve" value="approve" checked>
                                          @else
                                          <input type="checkbox" class="checkSingle" name="approve" value="approve">
                                          @endif
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Reject
                                        @if($security->reject == 'reject')
                                            <input type="checkbox" class="checkSingle" name="reject"  value="reject" checked>
                                            @else
                                            <input type="checkbox" class="checkSingle" name="reject"  value="reject">
                                            @endif
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
                    @if($security->depostrecsecset == 'depostrecsecset')

                        <input type="checkbox" class="checkSingle" value="depostrecsecset" name="depostrecsecset" checked>
                        @else
                        <input type="checkbox" class="checkSingle" value="depostrecsecset" name="depostrecsecset">
                        @endif
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                <div class=" col-md-4 ">
                    <div class="form-group mt-md-4 ">
                    <label class="home_check"> Select RCVD
                    @if($security->rcvd == 'selectrcvd')
                        <input type="checkbox" class="checkSingle" value="selectrcvd" name="rcvd" checked>
                        @else
                        <input type="checkbox" class="checkSingle" value="selectrcvd" name="rcvd">
                        @endif
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
                        @if($security->addpayment == 'addpayment')
                            <input type="checkbox" class="checkSingle" name="addpayment" value="addpayment" checked>
                            @else
                            <input type="checkbox" class="checkSingle" name="addpayment" value="addpayment">
                            @endif
                            <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>
                    <div class=" col-md-4 ">
                        <div class="form-group mt-md-4 ">
                        <label class="home_check"> Post Payment
                        @if($security->postpayment == 'postpayment')
                            <input type="checkbox" class="checkSingle" value="postpayment" name="postpayment" checked>
                           @else
                           <input type="checkbox" class="checkSingle" value="postpayment" name="postpayment">
                           @endif
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
            @if($security->checkscaccess == 'checkscaccess')
                <input type="checkbox" class="checkSingle" value="checkscaccess" name="checkscaccess" checked>
                @else
                <input type="checkbox" class="checkSingle" value="checkscaccess" name="checkscaccess">
               @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Process Commission
            @if($security->processcomm == 'processcomm')
                <input type="checkbox" class="checkSingle" name="processcomm" value="processcomm" checked>
                @else
                <input type="checkbox" class="checkSingle" name="processcomm" value="processcomm" checked>
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Commission Checks
            @if($security->createcommcheck == 'createcommchecks')
                <input type="checkbox" class="checkSingle" value="createcommchecks" name="createcommcheck" checked>
                @else
                <input type="checkbox" class="checkSingle" value="createcommchecks" name="createcommcheck">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Process Auto Pays
            @if($security->processautopays == 'processautopays')
                <input type="checkbox" class="checkSingle" value="processautopays" name="processautopays" checked>
                @else
                <input type="checkbox" class="checkSingle" value="processautopays" name="processautopays">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Auto Pay Checks
            @if($security->processautopays == 'processautopays')
                <input type="checkbox" class="checkSingle" value="createautopayschecks" name="createautopayschecks" checked>
                @else
                <input type="checkbox" class="checkSingle" value="createautopayschecks" name="createautopayschecks">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Renumber Checks
            @if($security->renumberchecks == 'renumberchecks')
                <input type="checkbox" class="checkSingle" value="renumberchecks" name="renumberchecks" checked>
                @else
                <input type="checkbox" class="checkSingle" value="renumberchecks" name="renumberchecks">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Export Checks
            @if($security->exportchecks == 'exportchecks')
                <input type="checkbox" class="checkSingle" name="exportchecks" value="exportchecks" checked>
                @else
                <input type="checkbox" class="checkSingle" name="exportchecks" value="exportchecks">
                @endif
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
            @if($security->changebillingaddressinvoice == 'changebillingaddress')
                <input type="checkbox" class="checkSingle" name="changebillingaddressinvoice" value="changebillingaddress" checked>
                @else
                <input type="checkbox" class="checkSingle" name="changebillingaddressinvoice" value="changebillingaddress">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Edit Legal
            @if($security->editlegalinvoice == 'editlegal')
                <input type="checkbox" class="checkSingle" name="editlegalinvoice" value="editlegal" checked>
                @else
                <input type="checkbox" class="checkSingle" name="editlegalinvoice" value="editlegal">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Adjust Commission
            @if($security->adjustcomminvoice == 'adjustcomm')
                <input type="checkbox" class="checkSingle" name="adjustcomminvoice" value="adjustcomm" checked>
                @else
                <input type="checkbox" class="checkSingle" name="adjustcomminvoice" value="adjustcomm">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Select No Pay
            @if($security->selectnoopayinvoice == 'selectnopay')
                <input type="checkbox" class="checkSingle" name="selectnoopayinvoice" value="selectnopay" checked>
                @else
                <input type="checkbox" class="checkSingle" name="selectnoopayinvoice" value="selectnopay">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Select No#
            @if($security->selectno == 'selectno')
                <input type="checkbox" class="checkSingle" value="selectno" name="selectno" checked>
                @else
                <input type="checkbox" class="checkSingle" value="selectno" name="selectno">
                @endif
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
            @if($security->autopayscreenset == 'autopayscreenset')
                <input type="checkbox" class="checkSingle" name="autopayscreenset" value="autopayscreenset" checked>
                @else
                <input type="checkbox" class="checkSingle" name="autopayscreenset" value="autopayscreenset">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Auto Pay
            @if($security->createautopaysecset == 'createautopaysecurity')
                <input type="checkbox" class="checkSingle" name="createautopaysecset" value="createautopaysecurity" checked>
                @else
                <input type="checkbox" class="checkSingle" name="createautopaysecset" value="createautopaysecurity">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check">Change Bill Address
            @if($security->changeautopaybillinaddress == 'changeautopaybillinaddress')
                <input type="checkbox" class="checkSingle"  name="changeautopaybillinaddress" value="changeautopaybillinaddress" checked>
                @else
                <input type="checkbox" class="checkSingle"  name="changeautopaybillinaddress" value="changeautopaybillinaddress">
                @endif
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Add Payments
            @if($security->autopayaddpayments == 'autopayaddpayments')
                <input type="checkbox" class="checkSingle" name="autopayaddpayments" value="autopayaddpayments" checked>
                @else
                <input type="checkbox" class="checkSingle" name="autopayaddpayments" value="autopayaddpayments">
                @endif
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
