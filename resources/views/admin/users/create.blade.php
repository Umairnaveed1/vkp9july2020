

 <form id="validationform" action="{{route('users.store')}}" method="post" data-parsley-validate="" novalidate="">
  @csrf
                                                            <div class="row">
                                                                         <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="UserName" class="col-form-label">User Name :</label>
         <input type="text" required="" placeholder="UserName" name="UserName" class=" @error('UserName') is-invalid @enderror form-control">
         @error('UserName')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
                    </div>
                                                                
               <div class="col-12">
                  <div class="form-group">
                        <label for="password" class="col-form-label">Password :</label>
          <input type="password" name="password" required="" data-parsley-maxlength="6" placeholder="Password" class="@error('password') is-invalid @enderror form-control">
                  @error('password')
    <p class="text-danger">{{ $message }}</p>
    @enderror
           </div>
                             </div>
                     <div class="col-12">
                       <div class="form-group">
             <label for="password_confirmation" class="col-form-label">Confirm Password :</label>
            <input type="password" name="password_confirmation" required="" data-parsley-maxlength="6" placeholder="Conform Password" class=" @error('password_confirmation') is-invalid @enderror form-control">
                  @error('password_confirmation')
    <p class="text-danger">{{ $message }}</p>
    @enderror
             </div>
                     </div>
              <div class="col-12">
                 <div class="form-group">
                   <label for="email"class="col-form-label">Email :</label>
                        <input type="email" name="email" required="Email"  placeholder="Email Address"
                         class="@error('email') is-invalid @enderror form-control">
                            @error('email')
    <p class="text-danger">{{ $message }}</p>
    @enderror
                  </div>
              </div>
               <div class="col-12">
         <div class="form-group">
                           <label class="col-form-label">Page Security Level :</label>
                              <select name="PageSecurity" class="form-control">
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
             <input type="checkbox" name="AdminUser"  class="custom-control-input"> 
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


