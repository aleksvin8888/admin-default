@include('auth.includes.header')

<body class="bg-primary">
    <div id="layoutAuthentication">
        @yield('contentauth')

        @include('auth.includes.footer')
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
