

  <div class="dashboard-main-wrapper">

    <div class="dashboard-header">
      <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('public/images/admin-logo.png') }}" alt=""></a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item">
              <div id="custom-search" class="top-search-bar">
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="btn_logout"><img src="{{asset('public/images/arrow_icon.png') }}" width="40" height="36" alt="">
                  Login</a>
                @else
                    <a href="{{ route('logout') }}" class="btn_logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <img src="{{ asset('public/images/arrow_icon.png') }}" width="40" height="36" alt="">

                        Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                @endif
              </div>
            </li>

          </ul>
        </div>





      </nav>



    </div>


    <div class="dashboard-wrapper dashboard_about_us">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">

                <div class="col-sm-12 text-left">
                    <div class="row">
                        <div class="col-sm-3 pull-left pt-3">
                            <strong>Welcome!</strong> : : @if (Auth::guest()) Guest @else {{ Auth::user()->UserName }} @endif
                        </div>
                        <div class="col-sm-9 pull-right text-right">

                            <a href="#" class="btn_add_agent "> Home</a>

                            <a href="{{ route('about-us') }}" class="btn_add_agent @if (Request::is('about-us'))  btn_add_agent_active @endif "> About Us</a>

                            <a href="{{ route('services') }}" class="btn_add_agent @if (Request::is('services'))  btn_add_agent_active @endif "> Services</a>

                            <a href="{{ route('contact') }}" class="btn_add_agent @if (Request::is('contact'))  btn_add_agent_active @endif "> Contact</a>
                            <a href="#" class="btn_add_agent"> Admin</a>
                            <a href="#" class="btn_add_agent"> Agent</a>

                        </div>

                    </div>
                    <div class="clear20"></div>
                </div>