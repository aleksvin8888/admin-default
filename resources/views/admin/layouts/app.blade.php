
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
                <h1>@yield('page')</h1>
                @include('admin.includes.breadcrumb')
                @yield('mainContent')
            </div>
        </main>
       @include('admin.includes.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>--}}
<script src="{{ asset('assets/js/app.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>--}}
{{--<script src="assets/demo/chart-area-demo.js"></script>--}}
{{--<script src="assets/demo/chart-bar-demo.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>--}}
{{--<script src="assets/demo/datatables-demo.js"></script>--}}
</body>
</html>
