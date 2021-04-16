@include('admin.includes.header')
<body>
<div class="container-fluid ">
    <div class="row ">
        @include('admin.includes.leftSidebar')
        @yield('mainContent')
    </div>
</div>
</body>

