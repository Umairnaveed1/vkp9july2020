@extends('admin_layouts.layout')
@section('content')

<div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">

                <div class="ecommerce-widget">

                    <div class="row">
                        <div class="col-xl-12 col-12 col-md-12">
                           <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
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
                                @endif

                            </div>
                          </div>
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                <div class="page-header">
                                    <h2 class="pageheader-title"> Edit Users </h2>
                                </div>
                            </div>


      <div class="mrg_addres_area">
                                <div class="col-sm-12">

                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <div class="card card_address2">
                                                <div class="card-body add_office_cardbody">
 <form id="validationform" action="{{route('users.update',$users->id) }}" method="post" data-parsley-validate="" novalidate="">
  @csrf
                                                            <div class="row">
                                                                         <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="UserName" class="col-form-label">User Name :</label>
         <input type="text" required="" value="{{ $users->UserName }}" placeholder="UserName" name="UserName" class=" @error('UserName') is-invalid @enderror form-control">
         @error('UserName')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
                    </div>
                                                                
               <div class="col-12">
                  <div class="form-group">
                        <label for="password" class="col-form-label">Password :</label>
          <input type="password" disabled="true"  name="password" value="{{ $users->password }}"required="" data-parsley-maxlength="6" placeholder="Password" class="@error('password') is-invalid @enderror form-control disabled">
                  @error('password')
    <p class="text-danger">{{ $message }}</p>
    @enderror
           </div>
                             </div>
                     <div class="col-12">
                       <div class="form-group">
             <label for="password_confirmation" class="col-form-label">Confirm Password :</label>
            <input type="password" name="password_confirmation" value="{{ $users->password }}" required="" data-parsley-maxlength="6" placeholder="Conform Password" class=" @error('password_confirmation') is-invalid @enderror form-control" disabled="true">
                  @error('password_confirmation')
    <p class="text-danger">{{ $message }}</p>
    @enderror
             </div>
                     </div>
              <div class="col-12">
                 <div class="form-group">
                   <label for="email"class="col-form-label">Email :</label>
                        <input type="email" value="{{ $users->email }}" name="email" required="Email"  placeholder="Email Address"
                         class="@error('email') is-invalid @enderror form-control">
                            @error('email')
    <p class="text-danger">{{ $message }}</p>
    @enderror
                  </div>
              </div>
               <div class="col-12">
         <div class="form-group">
                           <label class="col-form-label">Page Security Level :</label>
                              <select name="PageSecurity" value="{{ $users->PageSecurity }}" class="form-control">
                   <option value="1">Admin Level</option>
                 <option value="2">Restricted Level</option>
                   <option value="3">Agent Level</option>
                     </select>
               </div>
            </div>
      <div class="col-12">
       <div class="form-group">
     <div class="d-block w-100">
        <label class="col-form-label">&nbsp;</label>
       </div>
        <div class="d-block w-100">
            <label class="custom-control custom-checkbox custom-control-inline ">
             <input type="checkbox" name="AdminUser" value="{{ $users->AdminUser }}" class="custom-control-input"> 
             <span class="custom-control-label line_height_custom">Admin User</span> 
            </label>
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
       </div>
      </div>
    </div> 
  </div>
  </div>


@endsection