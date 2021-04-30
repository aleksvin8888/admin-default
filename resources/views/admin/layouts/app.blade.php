@include('admin.includes.header')
<body class="sb-nav-fixed">
        @include('admin.includes.topNavbar')
        <div id="layoutSidenav">


        @include('admin.includes.leftSidebar')

        @yield('mainContent')

        </div>


</body>

