@extends('layouts.auth')

@section('content')
<section class="widget login-widget">
    <h4 class="text-align-center">Create account</h4>
    <div class="body">
        <form class="no-margin"
              action="{{ route('register') }}" method="POST">
              @csrf
            <fieldset>
                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control input-lg input-transparent @error('name') is-invalid @enderror"
                               placeholder="Your Name" required autocomplete="name" autofocus>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input id="password" type="password" class="form-control input-lg input-transparent @error('password') is-invalid @enderror"
                               placeholder="Your Password" name="password_confirmation" required autocomplete="current-password">
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
                    <small>Register</small>
                </button>
                <a class="forgot" href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</section>
@endsection
