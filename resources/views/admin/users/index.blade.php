@extends('admin_layouts.layout')
@section('content')
<style>
   .uper {
   margin-top: 0.5%;
   }
</style>
<div class="card uper">
   {{--  
   <div class="card-header">--}}
      {{--  --}}
      {{--  
   </div>
   --}}
</div>
<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
         <div class="ecommerce-widget">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <!-- @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                     
                                 <li>{{ ($error)}}</li>
                             @endforeach
                         </ul>
                     </div><br />
                     @endif
                     
                     
                     @if(session()->get('success'))
                     <div class="alert alert-success">
                         {{ session()->get('success') }}
                     </div><br />
                     @endif
                     @if(session()->get('error'))
                         <div class="alert alert-danger">
                             {{ session()->get('error') }}
                         </div><br />
                     @endif -->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                     <div class="page-header">
                        <h2 class="pageheader-title"> Add User </h2>
                     </div>
                  </div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address2">
                                 <div class="user_manage_w1">
                                    <div class="card-body add_office_cardbody">
                                       @include('admin.users.create')
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                     <div class="page-header">
                        <h2 class="pageheader-title"> View Active Users List </h2>
                     </div>
                  </div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address">
                                 <div class="card-body">
                                    <h5 class="label_rule_heading3">Admin Level</h5>
                                    <div class="col-sm-12">
                                       <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                          <thead>
                                             <tr>
                                                <th  scope="col">Agent Name</th>
                                                <th  scope="col">User Name</th>
                                                <th  scope="col">Email</th>
                                                <th  scope="col">Office Description</th>
                                                <th  scope="col">Security Level</th>
                                                <th scope="col">settings</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($users as $adminlevel)
                                             @if($adminlevel->PageSecurity===1 && $adminlevel->status===1)
                                             <tr>
                         <td>{{$adminlevel->agentfirstname}}</td>
                        <td>{{$adminlevel->UserName}}</td>
                        <td>{{$adminlevel->email}}</td>
                     <td>{{$adminlevel->office_description}}</td>
                    <th scope="col">
                     {{  $adminlevel->PageSecurity ? 'Admin Level' : '-' }} </th>
                                <td> 
                     <a href="{{route('users.edit',$adminlevel->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                     <i class="material-icons"></i></a>
                                                   <a href="{{ route('status', ['id'=>$adminlevel->id]) }}" class="delete  mr-2" title="Deactive" data-toggle="tooltip" >
                                                   @if($adminlevel->status == 1) <i class="material-icons">block</i>
                                                   @else 
                                                   Active 
                                                   @endif
                                                   </a>
                                                   <a href="{{route('users.settingsedit',$adminlevel->id)}}" class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                   <i class="material-icons">settings</i></a> 
                                                </td>
                                             </tr>
                                             @endif
                                             @endforeach
                                          </tbody>
                                       </table>
                                       <div class="pagination mt-4 align-right">
                                                                                                  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address">
                                 <div class="card-body">
                                    <h5 class="label_rule_heading3">Restricted Level</h5>
                                    <div class="col-sm-12">
                                       <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                          <thead>
                                             <tr>
                                                <th  scope="col">Agent Name</th>
                                                <th  scope="col">User Name</th>
                                                <th  scope="col">Email</th>
                                                <th  scope="col">Office Description</th>
                                                <th  scope="col">Security Level</th>
                                                <th  scope="col"></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($users as $restrictusers)
                                             @if($restrictusers->PageSecurity===2 && $restrictusers->status===1)
                                             <tr>
                                                <td>{{$restrictusers->agentfirstname}}</td>
                                                <td>{{$restrictusers->UserName}}</td>
                                                <td>{{$restrictusers->email}}</td>
                                                <td>{{$restrictusers->office_description}}</td>
                                                <th scope="col">
                                                   {{  $restrictusers->PageSecurity ? 'Restrict Level' : '-'}}
                                                </th>
                                                <td>
                                                   <a href="{{route('users.edit',$restrictusers->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                                                   <i class="material-icons"></i></a>
                                                   <!--  <a href="#" class="delete  mr-2" title="Deactive" data-toggle="tooltip" >
                                                      <i class="material-icons">block</i></a> -->
                                                   <a href="{{ route('status', ['id'=>$restrictusers->id]) }}" class="delete  mr-2" title="Deactive" data-toggle="tooltip" >
                                                   @if($restrictusers->status == 1) <i class="material-icons">block</i> @else Active @endif
                                                   </a>
                                                   <a href="{{route('users.settingsedit',$adminlevel->id)}}" class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                   <i class="material-icons">settings</i></a> 
                                                </td>
                                             </tr>
                                             @endif
                                             @endforeach
                                          </tbody>
                                       </table>
                                       <div class="pagination mt-4 align-right">
                                                                                                  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address">
                                 <div class="card-body">
                                    <h5 class="label_rule_heading3">Agent Level</h5>
                                    <div class="col-sm-12">
                                       <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                          <thead>
                                             <tr>
                                                <th  scope="col">Agent Name</th>
                                                <th  scope="col">User Name</th>
                                                <th  scope="col">Email</th>
                                                <th  scope="col">Office Description</th>
                                                <th  scope="col">Security Level</th>
                                                <th  scope="col"></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($users as $agentlevel)
                                             @if($agentlevel->PageSecurity===3)
                                             <tr>
                                                <td>{{$agentlevel->agentfirstname}}</td>
                                                <td>{{$agentlevel->UserName}}</td>
                                                <td>{{$agentlevel->email}}</td>
                                                <td>{{$agentlevel->office_description}}</td>
                                                <th scope="col">
                                                   {{  $agentlevel->PageSecurity ? 'Agent Level' : '-'}}
                                                </th>
                                                <td> 
                                                   <a href="{{route('users.edit',$agentlevel->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                                                   <i class="material-icons"></i></a>
                                                   <a href="#" class="delete  mr-2" title="Billing" data-toggle="tooltip" >
                                                   <i class="material-icons">local_atm</i></a>
                                                   <a href="{{route('users.settingsedit',$adminlevel->id)}}" class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                   <i class="material-icons">settings</i></a> 
                                                </td>
                                             </tr>
                                             @endif
                                             @endforeach
                                          </tbody>
                                       </table>
                                       <div class="pagination mt-4 align-right">
                                                                                                
                                       </div>
                                       <!--   <ul class="pagination mt-4 align-right">
                                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                          </ul> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                     <div class="page-header">
                        <h2 class="pageheader-title"> View Inactive Users List </h2>
                     </div>
                  </div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address">
                                 <div class="card-body">
                                    <h5 class="label_rule_heading3">
                                       Admin Level
                                    </h5>
                                    <div class="col-sm-12">
                                       <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                          <thead>
                                             <tr>
                                                <th  scope="col">Agent Name</th>
                                                <th  scope="col">User Name</th>
                                                <th  scope="col">Email</th>
                                                <th  scope="col">Office Description</th>
                                                <th  scope="col">Security Level</th>
                                                <th  scope="col">Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($users as $adminlevel)
                                             @if($adminlevel->PageSecurity===1 && $adminlevel->status===0)
                                             <tr>
                                                <td>{{$adminlevel->agentfirstname}}</td>
                                                <td>{{$adminlevel->UserName}}</td>
                                                <td>{{$adminlevel->email}}</td>
                                                <td>{{$adminlevel->office_description}}</td>
                                                <th scope="col">
                                                   {{  $adminlevel->PageSecurity ? 'Admin Level' : '-' }}
                                                </th>
                                                <td> 
                                                   <a href="{{route('users.edit',$adminlevel->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                                                   <i class="material-icons"></i></a>
                                                   <a href="{{ route('status', ['id'=>$adminlevel->id]) }}" class="delete  mr-2" title="Activate" data-toggle="tooltip" >
                                                   @if($adminlevel->status == 0) <i class="material-icons">beenhere</i> @else Active  @endif
                                                   </a>
                                                   <a href="{{route('users.settingsedit',$adminlevel->id)}}" class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                   <i class="material-icons">settings</i></a> 
                                                </td>
                                             </tr>
                                             @endif
                                             @endforeach
                                          </tbody>
                                       </table>
                                       <div class="pagination mt-4 align-right">
                                                                                                  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address">
                                 <div class="card-body">
                                    <h5 class="label_rule_heading3">Restricted Level</h5>
                                    <div class="col-sm-12">
                                       <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                          <thead>
                                             <tr>
                                                <th  scope="col">Agent Name</th>
                                                <th  scope="col">User Name</th>
                                                <th  scope="col">Email</th>
                                                <th  scope="col">Office Description</th>
                                                <th  scope="col">Security Level</th>
                                                <th  scope="col"></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($users as $restrictusers)
                                             @if($restrictusers->PageSecurity===2 && $restrictusers->status===0)
                                             <tr>
                                                <td>{{$restrictusers->agentfirstname}}</td>
                                                <td>{{$restrictusers->UserName}}</td>
                                                <td>{{$restrictusers->email}}</td>
                                                <td>{{$restrictusers->office_description}}</td>
                                                <th scope="col">
                                                   {{  $restrictusers->PageSecurity ? 'Restrict Level' : '-'}}
                                                </th>
                                                <td> 
                                                   <a href="{{route('users.edit',$restrictusers->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                                                   <i class="material-icons"></i></a>
                                                   <a href="{{ route('status', ['id'=>$restrictusers->id]) }}" class="delete  mr-2" title="Activate" data-toggle="tooltip" >
                                                   @if($restrictusers->status == 0) <i class="material-icons">beenhere</i> @else Active  @endif
                                                   </a>
                                                   <a href="{{route('users.settingsedit',$adminlevel->id)}}" class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                   <i class="material-icons">settings</i></a> 
                                                </td>
                                             </tr>
                                             @endif
                                             @endforeach
                                          </tbody>
                                       </table>
                                       <div class="pagination mt-4 align-right">
                                                                                                  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="mrg_addres_area">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-12 col-12">
                              <div class="card card_address">
                                 <div class="card-body">
                                    <h5 class="label_rule_heading3">Agent Level</h5>
                                    <div class="col-sm-12">
                                       <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                          <thead>
                                             <tr>
                                                <th  scope="col">Agent Name</th>
                                                <th  scope="col">User Name</th>
                                                <th  scope="col">Email</th>
                                                <th  scope="col">Office Description</th>
                                                <th  scope="col">Security Level</th>
                                                <th  scope="col"></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                          <tbody>
                                             @foreach($users as $agentlevel)
                                             @if($agentlevel->PageSecurity===3)
                                             <tr>
                                                <td>{{$agentlevel->agentfirstname}}</td>
                                                <td>{{$agentlevel->UserName}}</td>
                                                <td>{{$agentlevel->email}}</td>
                                                <td>{{$agentlevel->office_description}}</td>
                                                <th scope="col">
                                                   {{  $agentlevel->PageSecurity ? 'Agent Level' : '-'}}
                                                </th>
                                                <td> 
                                                   <a href="{{route('users.edit',$agentlevel->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                                                   <i class="material-icons"></i></a>
                                                   <a href="{{route('users.settingsedit',$adminlevel->id)}}"class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                   <i class="material-icons">settings</i></a> 
                                                </td>
                                             </tr>
                                             @endif
                                             @endforeach
                                          </tbody>
                                       </table>
                                       <div class="pagination mt-4 align-right">
                                                                                                  
                                       </div>
                                       <!--   <ul class="pagination mt-4 align-right">
                                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                          </ul> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0"> Copyright © 2020 ValleyKing.com. All rights reserved. </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
               <div class="text-md-right footer-links d-none d-sm-block"> Designed & Developed by<a href="https://leadconcept.com/" target="_blank"> LEADconcept</a> </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection