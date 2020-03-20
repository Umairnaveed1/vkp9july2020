<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin_layouts.head')
</head>
<body>
    <div class="dashboard-main-wrapper">
@include('admin_layouts.header')
@include('admin_layouts.sidebar')
            @yield('content')

        </div>
 @include('admin_layouts.footer')



</body>
</html>
