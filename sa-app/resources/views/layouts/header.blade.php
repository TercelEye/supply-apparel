<div id="loginModal" class="modal fade login_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ url('/login') }}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-group">
                <a href="{{ url('auth/facebook') }}" class="btn_facebook">
                    <i></i>
                    <span>Log in with Facebook</span>
                </a>
            </div>
            <div class="form-group">
                <a href="#" class="btn_google">
                    <i></i>
                    <span>Log in with Google</span>
                </a>
            </div>
            <div class="form-group">
                <div class="divider_line">or</div>
            </div>
            <div class="form-group email_block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email Address" name="email">
                    <div class="input-group-addon"><i class="email_icon"></i></div>
                </div>
            </div>
            <div class="form-group password_block">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-addon"><i class="password_icon"></i></div>
                </div>
            </div>
            <div class="form-group forgot_pass_block">
                <div class="checkbox">
                    <input name="remember" id="check_item" type="checkbox">
                    <label for="check_item">Remember me</label>
                </div>
                <a href="{{ url('/password/reset') }}" class="btn_forgot_pass">Forgot password?</a>
            </div>
            <div class="form-group submit_block">
                <button type="submit" class="btn_login">Log In</button>
            </div>
            <div class="form-group sign_up_block">
                <p>Don't have an account?</p>
                <a href="#" class="btn_signup seconds_modal open_modal" data-modal="loginModal">Sign Up</a>
            </div>
        </form>
    </div>
</div>
<div id="registerModal" class="modal fade register_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <a href="#" class="btn_facebook">
                    <i></i>
                    <span>Log in with Facebook</span>
                </a>
            </div>
            <div class="form-group">
                <a href="#" class="btn_google">
                    <i></i>
                    <span>Log in with Google</span>
                </a>
            </div>
            <div class="form-group">
                <div class="divider_line">or</div>
            </div>
            <div class="form-group submit_block">
                <a href="#" data-modal="registerModal" class="btn_login third_modal open_modal">Sign up with email</a>
            </div>
            <div class="form-group agrement_block">
                <p>
                    By signing up, I agree to Supply Apparel’s
                    <a href="#">Terms of Service</a>,
                    <a href="#">Payment Terms</a>, <a href="#">Privacy Policy</a>, and <a href="#">Refund Policy</a>.
                </p>
            </div>
            <div class="form-group sign_up_block">
                <p>Already a member?</p>
                <a href="#" data-modal="registerModal" class="btn_signup first_modal open_modal">Log in</a>
            </div>
        </form>
    </div>
</div>
<div id="register_mail_Modal" class="modal fade register_mail_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group first_block">
                <p>
                    Sign up with
                    <a href="#">Facebook</a> or
                    <a href="#">Google</a>
                </p>
            </div>
            <div class="form-group">
                <div class="divider_line">or</div>
            </div>
            <div class="form-group name_block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Full name" name="name">
                    <div class="input-group-addon"><i class="name_icon"></i></div>
                </div>
            </div>
            <div class="form-group email_block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email Address" name="email">
                    <div class="input-group-addon"><i class="email_icon"></i></div>
                </div>
            </div>
            <div class="form-group password_block">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-addon"><i class="password_icon"></i></div>
                </div>
            </div>
            <div class="form-group date_block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Data of Birth" name="birthdate">
                    <div class="input-group-addon"><i class="date_icon"></i></div>
                </div>
            </div>
            <div class="form-group agrement_block">
                <p>
                    By signing up, I agree to Supply Apparel’s
                    <a href="#">Terms of Service</a>,
                    <a href="#">Payment Terms</a>, <a href="#">Privacy Policy</a>, and <a href="#">Refund Policy</a>.
                </p>
            </div>
            <div class="form-group submit_block">
                <button type="submit" class="btn_login">Sign up with email</button>
            </div>

            <div class="form-group sign_up_block">
                <p>Already a member?</p>
                <a href="#" data-modal="register_mail_Modal" class="btn_signup first_modal open_modal">Log in</a>
            </div>
        </form>
    </div>
</div>
<header class="index_page">
    <div class="container-fluid website_head">
        <div class="row">
            <div class="container">
                <a href="{{ url('')}}"><div class="logo"></div></a>
                <div class="auth_section">
                    <a href="#" class="btn_create_boutique">Create a boutique</a>
                    <a href="#" class="btn_auth" data-toggle="modal" data-target="#registerModal">Sign Up</a>
                    <a href="#" class="btn_auth" data-toggle="modal" data-target="#loginModal">Login</a>
                </div>
            </div>
        </div>
    </div>
   @include("layouts.navbar")
</header>
