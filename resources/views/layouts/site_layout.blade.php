<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.site_header')
    @yield('content')
    @include('layouts.footer')
    @yield('js')

</body>
</html>
