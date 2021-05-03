
@include('admin.includes.header')
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
