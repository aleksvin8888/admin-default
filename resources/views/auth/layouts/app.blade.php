<!DOCTYPE html>
<html lang="en">
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
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        @yield('contentauth')

        @include('auth.includes.footer')
    </div>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
