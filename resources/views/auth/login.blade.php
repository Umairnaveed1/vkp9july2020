@extends('layouts.login_layout')

@section('content')
<header>
    <div class="main_header">
    </div>
  </header>
    <section>
    <div class="container">
      <div class="col-12">
        <div class="body_main">
          <div class="body_up">
          <div class="row">
 
            <div class="col-sm-6">
              <div class="logo_sect">
                <img class="logo" src="./public/assets/images/logo.png">
              </div>
            </div>
              <div class="col-sm-6">
                <div class="comp_main_text">
                <h1 class="comp_h1">
                  A Full Service </h1> 
                 <p class="dwn_head_text_p"><span class="yelw_span_clr"> REAL ESTATE </span> Company </p>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>  
    </section>
    <section class="field_bg_full ">
      <div class="container">
        <div class="col-12">
          <div class="field_sec_main">
          
            <div class="row">
   
              <div class="col-sm-6 col-md-6">
             
                  <h2 class="memb_log_h2">MEMBER LOGIN</h2>
                  
               <div class="clear"></div>
                  <div class="login_box_area">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
  <div class="form-group login_input">
   
    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="User Name">
     <img src="./public/assets/images/user_icon.png" width="27" height="27" alt="">
     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group login_input">
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="pwd">
    <img src="./public/assets/images/pass_icon.png" width="27" height="27" alt="">
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <label class="login_check">Remember me
   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  <span class="checkmark"></span>
</label>
  
  <button type="submit" class="btn_submit_login">
      <img src="./public/assets/images/btn_submit.png" width="210" height="51" alt="">
  </button>
</form>
                  
                                                   <!--    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                              
                  
                   
                  </div>
             
                  
                  
             
                
              </div>
                
            </div>
          
          </div>
        </div>
      </div> 
<!-- Copy Right -->
        <div class="container mt-5">
          <div class="col-12">
              <div class="copy_right ">
                <p class="text-center pb-4 mb-0 login_footer">
                  Copyright © 2020 ValleyKing.com. All rights reserved. <br>
                  <span>Designed & Developed by <a href="https://leadconcept.com/" target="_blank">LEADconcept</a></span>
                </p>
              </div>
        </div>
        </div>
    </section>

@endsection
