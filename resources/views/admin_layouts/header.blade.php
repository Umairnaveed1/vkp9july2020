<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/admin-logo.png') }}"  alt=""></a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <a href="{{ route('logout') }}" class="btn_logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <img src="{{ asset('assets/images/arrow_icon.png') }}" width="40" height="36" alt="">

                        Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <br>
    <div class="row m-n4">
    <div class="col-md-3"></div>
    <div class="col-12 col-sm-6 col-md-8">@include('admin_layouts.flash-message')</div>
    </div>
</div>

