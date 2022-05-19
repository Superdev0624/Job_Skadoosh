@extends('layouts.backend.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
    @include('layouts.frontend.stylelib')
    <div class="row">
            <div class="col login-form">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/skadoosh.png') }}" alt="skadoosh" width="264" height="58"></a>
                </div>
                <div>
                    <label class="signup-label">Login</label><br>
                    <label calss="signup-intro">Let's focus on the work that matters.</label>
                    <form class="form-horizontal form-position" method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="forms-label show-text">Email<span class="special-txt">*</span></label><br>
                            <input name="email" type="email" class="forms-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="username" placeholder="Enter Your Email Here" autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="">
                            <label class="forms-label show-text">Password<span class="special-txt">*</span></label><br>
                            <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                <input type="password" name="password" class="forms-control  @error('password') is-invalid @enderror" id="userpassword" value="{{ old('password') }}" placeholder="Enter Your Password Here" aria-label="Password" aria-describedby="password-addon">
                                <!-- <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">
                                        <button class="btn-light show-password" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </span>
                                </div> -->
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="checkbox" name="remember" class="remember-check" value="1">
                            <label class="forms-label show-text">Remember me</label>
                            <div class="float-end">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                                @endif
                            </div>
                        </div>
                        <div class="mt-5 d-grid">
                            <button class="nav_signup_credential" type="submit">Login</button>
                        </div>
                        <p class="notice-txt mt-2">Don't have an Skadoosh account?<a href="{{ url('/nx/signup') }}" class="first_sign_up">Create an Account</a></p>
                    </form>
                </div>
                <p class="login-footer">Copyright @<script>document.write(new Date().getFullYear())</script>All rights reserved</p>
            </div>
            <div class="col">
                <img class="bg-img-login">
            </div>
        </div>
        <!-- end account-pages -->

    @endsection
