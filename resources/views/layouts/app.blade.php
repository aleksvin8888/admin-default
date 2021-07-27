<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css">
    <!--slick-slider -->
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="{{asset('assets/css/bootstrap-slider.min.css')}}" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom Colors -->
    {{--    <link rel="stylesheet" href="{{asset('assets/colors/red.css'}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/colors/orange.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/colors/blue.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/colors/pink.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/colors/green.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/colors/purple.css')}}">--}}

<!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('assets/images/favicon-icon/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed"
          href="{{asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon-icon/favicon.png')}}">
    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
@include('includes.header')

@yield('content')

@include('includes.footer')

@include('main.modal.login')
@include('main.modal.register')
@include('main.modal.forgotPassword')


<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/interface.js')}}"></script>
<!--bootstrap-slider-JS-->
<script src="{{asset('assets/js/bootstrap-slider.min.js')}}"></script>
<!--Slider-JS-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

</body>
</html>
