@extends('layouts.auth')

@section('content')
<section class="widget login-widget">
    <header class="text-align-center">
        <h4>Login to your account</h4>
    </header>
    <div class="body">
        <form class="no-margin"
              action="{{ route('login') }}" method="POST">
              @csrf
            <fieldset>
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control input-lg input-transparent @error('email') is-invalid @enderror"
                               placeholder="Your Email" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input id="password" type="password" class="form-control input-lg input-transparent @error('password') is-invalid @enderror"
                               placeholder="Your Password" name="password" required autocomplete="current-password">
                    </div>
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </fieldset>
            <div class="form-actions">
                <button type="submit" class="btn btn-block btn-lg btn-danger">
                    <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                    <small>Sign In</small>
                </button>
                <a class="forgot" href="#">Forgot Username or Password?</a>
            </div>
        </form>
    </div>
    <footer>
        <div class="facebook-login">
            <a href="index.html"><span><i class="fa fa-facebook-square fa-lg"></i> LogIn with Facebook</span></a>
        </div>
    </footer>
</section>
@endsection
