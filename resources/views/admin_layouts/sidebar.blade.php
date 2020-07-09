

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none d-md-none dashboard_label" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav_left_p" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                <div class="avatar_menu">
                                <img src="{{ asset('public/assets/images/avator.png') }}" width="190" height="199" alt="">
                                
                                
                                </div>
                                <h3 class="avatar_welcome_label">Welcome</h3>
                                <label class="avatar_label">A.Atencio</label>
                          </li>
                          <!--addedbyumair-->
                   
                     @if(auth()->user()->is_admin === 0 && auth()->user()->PageSecurity ===3)
                 <li class="nav-item ">
                <a class="nav-link" href="{{url('agents/billing')}}"><img src="images/agent_manage_icon.png" width="20" height="19"
                    alt=""> Main Page</a> 

              </li>
              
          

              <li class="nav-item ">
                <a class="nav-link" href="{{route('view_approved_bill')}}"><img src="images/country_icon.png" width="20"
                    height="20" alt="">View Approved Billing</a>

              </li> 

              <li class="nav-item ">
                <a class="nav-link" href="{{route('view_rejected_bill')}}"><img src="images/rule_icon.png" width="18" height="20"
                    alt=""> View Rejected Billing	 </a> 

              </li>


              <li class="nav-item ">
                <a class="nav-link" href="{{route('view_pending_fee')}}"><img src="images/office_manage_icon.png" width="20"
                    height="20" alt=""> View Pending Billing	 </a>

              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('auto_home_hold_fee')}}"><img src="images/property.png" width="20" height="20"
                    alt=""> View Holding Fee Detail	 </a>

              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('view_pending_fee_data')}}"><img src="images/compani.png" width="20" height="21" alt="">
               View Pending Fee	 </a>

              </li>
             <!-- <li class="nav-item ">
                <a class="{{ Request::is('propert/manage*') ? 'active' : '' }} nav-link active" href="{{url('addmanagement')}}"><img src="images/auto_pay.png" width="19" height="22"
                    alt=""> Add Property	 </a>

              </li> -->
             
              @elseif(auth()->user()->is_admin === 1)
                          <!--ended by umair-->
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{route('dashboard')}}" ><img src="{{ asset('public/assets/images/agent_manage_icon.png') }}" width="20" height="19" alt=""> Agents</a>
                                
                            </li>
                            
                               <li class="nav-item ">
                                <a class=" {{ Request::is('countries/create*') ? 'active' : '' }} nav-link" href="{{route('country.create')}}" ><img src="{{ asset('public/assets/images/country_icon.png') }}" width="20" height="20" alt=""> Country State City Zip	</a>
                                
                            </li>
                            
                                  <li class="nav-item ">
                                <a class=" {{ Request::is('rule/tiers*') ? 'active' : '' }} nav-link" href="{{route('rule.tiers')}}" ><img src="{{ asset('public/assets/images/rule_icon.png') }}" width="18" height="20" alt=""> Rules & Tiers</a>
                                
                            </li>
                            
                            
                                      <li class="nav-item ">
                                <a class=" {{ Request::is('office/create*') ? 'active' : '' }} nav-link" href="{{route('office.create')}}" ><img src="{{ asset('public/assets/images/office_manage_icon.png') }}" width="20" height="20" alt=""> OFFICES	</a>
                                
                            </li>
                                  <li class="nav-item ">
                                <a class="nav-link" href="{{route('propertymanage.index')}}" ><img src="{{ asset('public/assets/images/property.png') }}" width="20" height="20" alt=""> PROPERTY SCREEN</a>
                                
                            </li>
                                  <li class="nav-item ">
                                <a class=" {{ Request::is('compnay/managment*') ? 'active' : '' }} nav-link" href="{{ url('compnay/managment') }}" ><img src="{{ asset('public/assets/images/compani.png') }}" width="20" height="21" alt=""> MANAGEMENT COMPANIES	</a>
                                
                            </li>
                                  <li class="nav-item ">
                                  <a class="{{ Request::is('autopay/create*') ? 'active' : '' }}  nav-link" href="{{route('autopay.create')}}" ><img src="{{ asset('public/assets/images/auto_pay.png') }}" width="19" height="22" alt=""> AUTO PAY SCREEN	</a>

                                
                            </li>
                              </li>
                                  <li class="nav-item ">
                                <a class="nav-link" href="{{url('admin_manage_invoices')}}" ><img src="{{ asset('public/assets/images/manage_inovice.png') }}" width="20" height="21" alt=""> MANAGE INVOICES	</a>
                                
                            </li>
                                    <li class="nav-item ">
                                <a class="nav-link" href="{{url('invoice/index')}}" ><img src="{{ asset('public/assets/images/ad_inovice.png') }}" width="20" height="21" alt=""> ADD INVOICES	</a>
                                
                            </li>
                                   <li class="nav-item ">
                                <a class="{{Request::is('invoice/search*') ? 'active' : ''}} nav-link" href="{{url('invoice/search')}}" ><img src="{{ asset('public/assets/images/search_inovice.png') }}" width="20" height="20" alt=""> PRINT INVOICES	</a>
                                
                            </li>
                                           <li class="nav-item ">
                                <a class="nav-link" href="#" ><img src="{{ asset('public/assets/images/check_manage.png') }}" width="25" height="20" alt=""> CHECKS SCREEN	</a>
                                
                            </li>
                            
                                              <li class="nav-item ">
                                <a class="nav-link" href="{{url('admin_manage_payments')}}" ><img src="{{ asset('public/assets/images/payment_manage.png') }}" width="22" height="22" alt=""> PAYMENT SCREEN	</a>
                                
                            </li>
                            
                 <li class="nav-item ">
                                <a class="nav-link" href="{{url('deposit')}}" ><img src="{{ asset('public/assets/images/deposite.png') }}" width="20" height="20" alt=""> DEPOSITS</a> 
                                
                            </li>
                                             
                 <li class="nav-item ">
                                <a class="nav-link" href="{{url('admin_approval_screen')}}" ><img src="{{ asset('public/assets/images/approval_icon.png') }}" width="22" height="24" alt=""> APPROVAL SCREEN</a>
                                
                            </li>
                             <li class="nav-item ">
                                <a class=" {{ Request::is('admin/reports*') ? 'active' : '' }} nav-link" href="{{url('admin/reports')}}" ><img src="{{ asset('public/assets/images/reports.png') }}" width="20" height="22" alt=""> REPORTS SCREEN</a>
                                
                            </li>
    <li class="nav-item ">
                                <a class=" {{ Request::is('users/index*') ? 'active' : '' }} nav-link" href="{{route('user.index') }}" ><img src="{{ asset('public/assets/images/user_manage.png') }}" width="18" height="23" alt=""> USERS</a>
                                
                            </li>
   </li>
    <li class="nav-item ">
                                <a class=" {{ Request::is('admin/form*') ? 'active' : '' }}  nav-link" href="{{ url('admin/form') }}" ><img src="{{ asset('public/assets/images/search_inovice.png') }}" width="20" height="20" alt=""> FORMS</a>
                                
                            </li>
                            
                               <li class="nav-item ">
                                <a class="{{Request::is('searchinvoice/index*') ? 'active' : ''}} nav-link" href="{{ url('searchinvoice/index') }}" ><img src="{{ asset('public/assets/images/search_inovice.png') }}" width="20" height="20" alt=""> SEARCH INVOICES</a>
                                
                            </li>
 
     <li class="nav-item ">
                                <a class=" {{ Request::is('company/info*') ? 'active' : '' }}  nav-link" href="{{ url('company/info') }}" ><img src="{{ asset('public/assets/images/compani.png') }}" width="20" height="21" alt=""> COMPANY INFORMATION</a>
                                
                            </li>
 
     <li class="nav-item ">
                                <a class=" {{ Request::is('compnay/admin*') ? 'active' : '' }} nav-link" href="{{ url('compnay/admin') }}" ><img src="{{ asset('public/assets/images/company_admin.png') }}" width="20" height="19" alt=""> COMPANY ADMINS</a>
                                
                            </li>

     <li class="nav-item ">
                                                                                             <a class=" {{ Request::is('pagesecurity*') ? 'active' : '' }} nav-link" href="{{route('pagesecurity.index')}}" ><img src="{{ asset('public/assets/images/search_inovice.png') }}" width="20" height="20" alt=""> SECURITY SCREEN</a>


                                
                            </li>

     <li class="nav-item ">
                                <a class=" {{ Request::is('changepassword*') ? 'active' : '' }}  nav-link" href="{{url('changepassword')}}" ><img src="{{ asset('public/assets/images/country_icon.png') }}" width="20" height="20" alt=""> CHANGE PASSWORD</a>
                                
                            </li> 
                            @endif
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>