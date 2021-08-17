<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="#"><span>Poligon.local</span></a></h1>

        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('main')}}">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="{{route('blog.index')}}">Blog</a></li>
                <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="drop-down"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>


                @if (Auth::check() )
                    <li class="drop-down">
                        <a href="#">{{Auth::user()->name}}</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="drop-down">
                        <a href="{{route('login')}}">login</a>
                        <ul>
                            <li>
                                <a href="{{route('verification.resend')}}"
                                   onclick="event.preventDefault();
                                    document.getElementById('resend-mail').submit();">
                                    Resend mail
                                </a>
                                <form id="resend-mail" action="{{ route('verification.resend') }}" method="POST">
                                    @csrf

                                </form>
                            </li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                        @endif
                    </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
