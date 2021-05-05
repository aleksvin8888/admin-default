<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
            crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
@include('admin.includes.topNavbar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.includes.leftSidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                @include('admin.includes.breadcrumb')
                @yield('mainContent')
            </div>
        </main>
       @include('admin.includes.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
