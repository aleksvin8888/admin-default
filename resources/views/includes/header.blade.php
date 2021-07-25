<!--Header-->
<header class="header_style2 nav-stacked affix-top" data-spy="affix" data-offset-top="1">
    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="logo"> <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="image"/></a> </div>
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Home Page 1</a></li>
                            <li><a href="#">Home Page 2</a></li>
                            <li><a href="#">Home Page 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Grid Style</a></li>
                            <li><a href="#">Classic Style</a></li>
                            <li><a href="#">Detail Page Style 1</a></li>
                            <li><a href="#">Detail Page Style 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dealers</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">List View</a></li>
                            <li><a href="#">Detail Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Compare Vehicles</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">404 Error</a></li>
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('blogs.index')}}">Blog </a></li>

                            <li><a href="#">Blog show</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile Settings</a></li>
                                <li><a href="#">My Vehicles</a></li>
                                <li><a href="#">Post a Vehicle</a></li>
                                <li><a href="#">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
            </div>

        </div>
    </nav>
    <!-- Navigation end -->

</header>
<!-- /Header -->
