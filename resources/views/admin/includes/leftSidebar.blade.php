

<!-- wrapper -->
<div class="wrapper">
    <!--sidebar-wrapper-->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="">
                <img src="{{ asset('admin/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
            </div>
            <div>
                <h4 class="logo-text">Educoin</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i>
                    </div>
                    <div class="menu-title">Гланая</div>
                </a>
                <ul>
                    <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
                    </li>
                    <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Sales</a>
                    </li>
                </ul>
            </li>
            <li class="menu-label">Разделы</li>
            <li>
                <a href="{{ route('users.index') }}">
                    <div class="parent-icon"><i class="bx bx-group"></i>
                    </div>
                    <div class="menu-title">Пользователи</div>
                </a>
            </li>
        </ul>
    </div>
</div>


{{--    <a href="{{ route('main') }}" class="d-flex align-items-center mt-3 mb-3 mb-md-2 me-md-2 text-white text-decoration-none">--}}
{{--        <h2>Админ-панель</h2>--}}
{{--    </a>--}}


{{--    <li class="nav dropdown">--}}
{{--        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"--}}
{{--           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--            {{ Auth::user()->name }}--}}
{{--        </a>--}}

{{--        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">--}}
{{--            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                {{ __('Logout') }}--}}
{{--            </a>--}}

{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                @csrf--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </li>--}}

{{--    <hr>--}}
{{--    <ul class="nav nav-pills flex-column mb-0" style="width: auto;">--}}
{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('main') }}" class="nav-link {{ Request::path()=='admin' ? 'active' : 'text-white'}}">--}}
{{--               Главная--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="{{ route('users.index') }}" class="nav-link {{ Request::path()=='admin/users' ? 'active' : 'text-white'}}">--}}
{{--                Пользователи--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--</div>--}}

