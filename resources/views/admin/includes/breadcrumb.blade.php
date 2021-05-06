<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item {{ Request::is('admin') ? 'active' : ''  }}">
        @if(Request::is('admin'))
            Главная
        @else
            <a href="{{ route('admin.main') }}">На главную</a>
        @endif
    </li>
    @yield('breadcrumb-item')
</ol>
