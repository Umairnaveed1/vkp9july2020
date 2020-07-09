@extends('admin_layouts.layout')

@section('content')

 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
                            <div class="page-header">
                                <h2 class="pageheader-title"> System Prefrences Screens </h2>
                              
                                
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
                         
                            <table width="100%" class="table table-bordered table_office_manage tbl_security_mnge table_responsive2 mt-5">
                                <thead>
                                    <tr>
                                                       
                                        <th class="text-center"  scope="col"> Security Level</th>
                                        <th  scope="col"></th>
                                     

                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($security_data as $list)
                                    <tr>
                                        <td>{{ $list['security_name'] }}</td>

                                        <td>
                                            <a class="edit" href="{{ url('admin/security_level/get?') .'id=' . $list['id'] }}" title="" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="material-icons"></i></a>
                                             <a class="delete" href="{{ url('admin/security_level/delete?') .'id=' . $list['id'] }}" title="" data-toggle="tooltip" data-original-title="Delete">
                                                 <i class="material-icons"></i></a>
                                              </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table></div>      
                            </div>
                        </div>
                        <!-- Left Box End  -->
                        <div class="">
                        <div class="row">
                        <div class="col-lg-6 col-12">
                        <div class="card card_address pl-3 pr-3">
                        	<form action="{{ route('securitylevel.create') }}" method="POST">   
                        	@csrf 
                            <div class="card-body">
                                <h5 class="text_address ">Security Info</h5>
                                
                                    <div class="row">
                                    <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Security Level</label>
                                        <input type="email" class="form-control" id="email"  name="email">
                                      </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mt-md-4 ">
                                          <label class="home_check"> Check/ Uncheck All
                                            <input type="checkbox" name="security[check_all][]" value="1">
                                            <span class="checkmark"></span>
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                      <div class="col col-sm-10 col-lg-12 offset-sm-1 offset-lg-0 mt-4 mb-4">
                                        <div class="row float-left ">

                                        <button type="submit" class="btn btn-space btn_promary_custom chk_scr_top_btn">Save</a>

                                        <button type="submit" class="btn btn-space btn_promary_custom chk_scr_top_btn">Cancel</button>
                                  
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
                                                <input type="checkbox" name="security[add_user][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class=" col-12 ">
                                            <div class="form-group mt-md-4 ">
                                              <label class="home_check"> Add Security
                                                <input type="checkbox" name="security[add_security][]" value="1">
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
                                              <input type="checkbox" name="security[view_social_security][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>

                
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit Override Apply
                                              <input type="checkbox" name="security[edit_override_apply][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit Agent Advanceable
                                              <input type="checkbox" name="security[edit_agent_advanceable][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Change Agents Office
                                              <input type="checkbox" name="security[change_agents_office][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Set Agent Inactive
                                              <input type="checkbox" name="security[set_agent_inactive][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> Edit / Delete Others Users Notes
                                              <input type="checkbox" name="security[edit_delete_other_users_note][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="form-group">
                                            <label class="home_check"> View Agent Commission Setup
                                              <input type="checkbox" name="security[view_agent_comission_setup][]" value="1">
                                              <span class="checkmark"></span>
                                            </label>
                                          </div>
                                        </div> 
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Edit Agent Commission Setup Screen
                                                <input type="checkbox" name="security[edit_agent_comission_setup_screen][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> View YTD Paid
                                                <input type="checkbox" name="security[view_ytd_paid][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
  
                  
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Charge Back
                                                <input type="checkbox" name="security[charge_back][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Print Transaction Screens
                                                <input type="checkbox" name="security[print_transaction_screens][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Add Agent Expense
                                                <input type="checkbox" name="security[add_agent_expense][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Delete Agent Expense
                                                <input type="checkbox" name="security[delete_agent_expense][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Edit Expense Holds
                                                <input type="checkbox" name="security[edit_expense_holds][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                              <label class="home_check"> Print Expense Screen
                                                <input type="checkbox" name="security[print_expense_screen][]" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-3 col-md-4">
                                              <div class="form-group">
                                                <label class="home_check"> Add Misc. Income
                                                  <input type="checkbox" name="security[add_misc_income][]" value="1">
                                                  <span class="checkmark"></span>
                                                </label>
                                              </div>
                                            </div> 
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Delete Misc. Income
                                                    <input type="checkbox" name="security[delete_misc_income][]" value="1">
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div> 
                                              
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Edit Misc. Income Holds
                                                    <input type="checkbox" name="security[edit_misc_income_holds][]" value="1">
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                           
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Print Misc. Income Screen
                                                    <input type="checkbox" name="security[print_misc_income_screen][]" value="1">
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                            
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Sever Agent
                                                    <input type="checkbox" name="security[sever_agent][]" value="1">
                                                    <span class="checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                            
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                  <label class="home_check"> Recalculate Commission
                                                    <input type="checkbox" name="security[recalculate_comission][]" value="1">
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
                                        <input type="checkbox" name="security[edit_auto_pay][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Slow Pay
                                        <input type="checkbox" name="security[edit_slow_pay][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Do Not Place
                                        <input type="checkbox" name="security[edit_do_not_place][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check">Edit Not Advanceable
                                        <input type="checkbox" name="security[edit_not_advanceable][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit No Contract
                                        <input type="checkbox" name="security[edit_no_contract][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Property Information
                                        <input type="checkbox" name="security[edit_property_information][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                    <label class="home_check"> Edit Managment Company Information
                                        <input type="checkbox" name="security[edit_managment_company_information][]" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check"> Change Main Billing Address
                                        <input type="checkbox" name="security[change_main_billing_address][]" value="1">
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div> 
                                    <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check">Edit Last Contract Date
                                        <input type="checkbox" name="security[edit_last_contract_date][]" value="1">
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>


                                    <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check"> Print Transaction Screens
                                        <input type="checkbox" name="security[print_transaction_screens][]" value="1">
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label class="home_check"> Edit / Delete History / Notes By Other Users
                                        <input type="checkbox" name="security[edit_del_history_note_other_users][]" value="1">
                                        <span class="checkmark"></span>
                                        </label>
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
                                        <input type="checkbox" name="security[deposite_access][]" value="1">
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
                                            <input type="checkbox" name="security[approval_access][]" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Approve
                                            <input type="checkbox" name="security[approval_approve][]" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 ">
                                        <div class="form-group mt-md-4 ">
                                        <label class="home_check"> Reject
                                            <input type="checkbox" name="security[approval_reject][]" value="1">
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
                        <input type="checkbox" name="security[deposit_receipt_access][]" value="1">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                <div class=" col-md-4 ">
                    <div class="form-group mt-md-4 ">
                    <label class="home_check"> Select RCVD
                        <input type="checkbox" name="security[deposit_receipt_select_rcd][]" value="1">
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
                            <input type="checkbox" name="security[payment_add_payment][]" value="1">
                            <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>
                    <div class=" col-md-4 ">
                        <div class="form-group mt-md-4 ">
                        <label class="home_check"> Post Payment
                            <input type="checkbox" name="security[payment_post_payment][]" value="1">
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
                <input type="checkbox" name="security[check_set_access][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Process Commission
                <input type="checkbox" name="security[check_set_process_comission][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Commission Checks
                <input type="checkbox" name="security[check_set_create_comission_check][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Process Auto Pays
                <input type="checkbox" name="security[check_set_process_auto_pays][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Auto Pay Checks
                <input type="checkbox" name="security[check_set_create_auto_pay_check][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Renumber Checks
                <input type="checkbox" name="security[check_set_renumber_check][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Export Checks
                <input type="checkbox" name="security[check_set_export_check][]" value="1">
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
                <input type="checkbox" name="security[invoice_change_billing_address][[]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Edit Legal
                <input type="checkbox" name="security[invoice_edit_legal][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Adjust Commission
                <input type="checkbox" name="security[invoice_adjust_comission][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Select No Pay
                <input type="checkbox" name="security[invoice_select_no_pay][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Select No#
                <input type="checkbox" name="security[invoice_select_no][]" value="1">
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
                <input type="checkbox" name="security[autopay_apply_deposit][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>


        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Create Auto Pay
                <input type="checkbox" name="security[autopay_create_auto_pay][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check">Change Bill Address
                <input type="checkbox" name="security[autopay_change_bill_address][]" value="1">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
            <label class="home_check"> Add Payments
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            </div>
        </div>

        </div>        
    
    </div>
</div>

    <!-- ****************** -->
    
              </div>
       
    
    
        </div>
    </div>


</form>
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
@endsection