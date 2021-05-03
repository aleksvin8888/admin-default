<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Основная информация</div>
            <a class="nav-link" href="{{ route('admin.main') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Главная
            </a>

            <div class="sb-sidenav-menu-heading">Дополнительная информация</div>
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Пользователи
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Вы вошли как:</div>
        <div class="btn-group dropup">
            <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Выйти
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
