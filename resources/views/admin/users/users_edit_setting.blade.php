@extends('admin_layouts.layout')
@section('content')        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="page-header">
                                        <h2 class="pageheader-title">  Add User Setting</h2> </div>
                                </div>
                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address2">
                                                     <div class="user_manage_w1">
                                                    <div class="card-body add_office_cardbody">
                       <form action="{{route('users.settingsupdate',$users->id) }}" method="POST" id="validationform" data-parsley-validate="" novalidate="">
                                      @csrf
                                      <div class="row">
                                         <div class="col-12">
                                                 <div class="form-group">
              <label class="col-form-label">Day :	</label>
       

                  
                    <select class="form-control" name="dayname">
                              
                                <option value="Saturday" {{($users->dayname === 'Saturday') ? 'Selected' : '-'}}>Saturday</option>
                                <option value="Sunday" {{($users->dayname === 'Sunday') ? 'Selected' : '-'}}>Sunday</option>
                                <option value="Monday" {{($users->dayname === 'Monday') ? 'Selected' : '-'}}>Monday</option>
                                 <option value="Tuesday" {{($users->dayname === 'Tuesday') ? 'Selected' : '-'}}>Tuesday</option>
                                <option value="Wednesday" {{($users->dayname === 'Wednesday') ? 'Selected' : '-'}}>Wednesday</option>
                                <option value="Thursday" {{($users->dayname === 'Thursday') ? 'Selected' : '-'}}>Thursday</option>
                                 <option value="Friday" {{($users->dayname === 'Friday') ? 'Selected' : '-'}}>Friday</option>
                              
                            </select>
                 <!--  <select name="dayname" value="{{ $users->dayname }}"  class="form-control">
                                                                        
		<option value="Saturday">Saturday</option>
		<option value="Sunday">Sunday</option>
		<option value="Monday">Monday</option>
		<option value="Tuesday">Tuesday</option>
		<option value="Wednesday">Wednesday</option>
		<option value="Thursday">Thursday</option>
		<option value="Friday">Friday</option>
                                                                        
                                                                        </select>
                  -->                                                       
                                                                        </div>
                                                                </div>
                                                                
                                                                         <div class="col-12">
                                                                    <div class="form-group">
                <label class="col-form-label">Time From :	</label>
<input type="time" value="{{ date('h:i:s', strtotime($users->timefrom))
 }}" required="" data-parsley-maxlength="6" placeholder="Time From" name="timefrom" class="form-control"> </div>
                                                                </div>
                                                                       <div class="col-12">
                                                                    <div class="form-group">
                     <label class="col-form-label">Time To :	</label>
              <input type="time" required="" value="{{ date('h:i:s', strtotime($users->timeto))
 }}" name="timeto" data-parsley-maxlength="6" placeholder="Time To" class="form-control"> </div>
                                                                </div>
                                                                        
                                                            
                                       <div class="col-12">
                                                                    <div class="form-group">
                                                                        
                                   <div class="d-block w-100">
                    <label class="custom-control custom-checkbox custom-control-inline ">
                      @if($users->locked == "on")
       <input type="checkbox" class="custom-control-input" name="locked" checked>
        @else
               <input type="checkbox" class="custom-control-input" name="locked">

                @endif
             <span class="custom-control-label line_height_custom">Locked :	</span> </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row text-right">
                                                                <div class="col col-sm-12 p-0">
                  <button type="submit" class="btn btn-space btn_promary_custom float-left">Save</button>
                  <button type="reset" class="btn btn-space btn_cancel_custom float-left">Cancel</button>
                                                                </div>
                                                            </div>
             </form>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="page-header">
                                         </div>
                                </div>
                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address">
                                                    <div class="card-body">
                                                        <h5 class="label_rule_heading3"> View Users Setting List</h5>
                                                        <div class="col-sm-12">
                                                        <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                                            <thead>
                                                                <tr>
                                                                    <th width="15%"  scope="col">User Name  </th>
                                                                    <th width="15%"  scope="col">Day Name </th>
                                                                    <th  width="15%" scope="col">Time From  </th>
                                                                    <th  width="15%" scope="col">Time To  </th>
                                                                    <th  width="10%" scope="col">Locked</th>
                                                                    <th  width="20%" scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                     @foreach($userslist as $user)
                                                                <tr>
                                          <th scope="row">{{ $user->UserName }} </th>
                                         <th> {{$user->dayname}}</th>
                                            <td>{{date('h:i A', strtotime($user->timefrom)) }}</td>
                                          <td>{{ date('h:i A', strtotime($user->timeto))}} </td>
                                      <td>
               <label class="custom-control custom-checkbox custom-control-inline ">
                @if($user->locked == "on")
     <input type="checkbox" name="locked" checked class="custom-control-input">
     @else
          <input type="checkbox" class="custom-control-input">
      @endif

      <span class="custom-control-label line_height_custom">
         
     </span> 
 </label>
                                 </td>
                                                                    <td>
                                              <a href="{{route('users.settingsedit',$user->id)}}" class="edit mr-2" title="edit" data-toggle="tooltip" >
                                                                        <i class="material-icons"></i></a>
                                                                     
                                                                         <a href="#" class="delete  mr-2" title="settings" data-toggle="tooltip" >
                                                                        <i class="material-icons">settings</i></a> 
                                                                        
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="pagination">
                                                            {{$userslist->links() }}
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                         @endsection        
                                
                      
                                
                      
                                
                                
                                   
                                
                         