@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row-cols-4">
        <h2>Home.blade</h2>
    </div>
</div>



@endsection



<!--Login-Form -->
<div class="modal fade" id="loginform">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Login</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="login_wrap">
                        <div class="col-md-6 col-sm-6">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username or Email address*">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password*">
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn btn-block">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h6 class="gray_text">Login the Quick Way</h6>
                            <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
                        <div class="mid_divider"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
                <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>
<!--/Login-Form -->

<!--Register-Form -->
<div class="modal fade" id="signupform">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Sign Up</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="signup_wrap">
                        <div class="col-md-6 col-sm-6">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="terms_agree">
                                    <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Sign Up" class="btn btn-block">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h6 class="gray_text">Login the Quick Way</h6>
                            <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
                        <div class="mid_divider"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
            </div>
        </div>
    </div>
</div>
<!--/Register-Form -->

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Password Recovery</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="forgotpassword_wrap">
                        <div class="col-md-12">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email address*">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Reset My Password" class="btn btn-block">
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Forgot-password-Form -->


