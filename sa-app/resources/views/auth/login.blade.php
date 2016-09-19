@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

<style>


</style>

        <div id="login_form" class="login_form">
    <div class="modal-dialog" role="document">
        <form action="{{ url('login') }}" method="post" id="losssgin-form" enctype="multipart/form-data">
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
            <div class="form-group email_block {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group">
                    <input type="text" class="form-control" value="{{ old('email') }}" placeholder="Email Address" name="email">
                    <div class="input-group-addon"><i class="email_icon"></i></div>

                </div>
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                
            </div>
            <div class="form-group password_block">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-addon"><i class="password_icon"></i></div>
                     
                </div>
                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
{{--             <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                
                 <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
      
      <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}

<br>
<br><br>
        </div>
    </div>
</div>
@endsection
