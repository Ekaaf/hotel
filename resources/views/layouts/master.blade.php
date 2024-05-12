<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    @include('layouts.partials.styles')
    @stack('styles')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    @include('layouts.partials.header_mobile')

    <!-- Header Section Begin -->
    @include('layouts.partials.header')

    <!-- Hero Section Begin -->
    @yield('content')



    <!-- Footer Section Begin -->
    @include('layouts.partials.footer')
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    @include('layouts.partials.search')


    @include('layouts.partials.scripts')
    
    <script>
        if(window.location.host == 'localhost'){
            var baseUrl = 'http://localhost/hotel/public/';
        }
        else{
            var baseUrl = 'https://'+window.location.host+'/public/'
        }
        var pmsUrl = "http://localhost/pms/public/";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

    @yield('script')
</body>

</html>
