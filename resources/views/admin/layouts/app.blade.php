@include('admin.includes.header')
<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-wrapper">
            @include('admin.includes.leftSidebar')
        </div>
    </div>
    <div class="row ">

        @yield('mainContent')
    </div>
</div>
</body>

