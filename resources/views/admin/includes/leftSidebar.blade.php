

<div class=" d-flex flex-column text-white bg-dark col-lg-2 ">

    <a href="{{ route('main') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <h1">Admin-defult</h1>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('main') }}" class="nav-link {{ Request::path()=='admin' ? 'active' : 'text-white'}}">
               Home
            </a>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::path()=='admin/users' ? 'active' : 'text-white'}}">
                Users
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
               Roles
            </a>
        </li>

    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
