@extends('layouts.backend.master-without-nav')

@section('title')
    @lang('translation.Register')
@endsection
@section('css')
    <link href="{{ URL::asset('/admin_assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
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
            <div class="signup-input-form">
                <label class="signup-label">SingUp</label><br>
                <label calss="signup-intro">Sign up to find work you love</label>
                <form class="form-horizontal formss-position" method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="mt-1 justify-around row p-2">
                        @if(!empty(\Config::get('constants.role'))) 
                            @foreach(\Config::get('constants.role') as $key => $value)
                                <div class="col-6 form-group">
                                    <div class="container-box">
                                        <label class="container" for="role_{{ $key }}">{{ $value }}
                                        <input class="form-check-input" type="radio" required {{ old('role') == $key ? 'checked' : '' }} value="{{ $key }}" name="role" id="role_{{ $key }}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- <div class="card mb-3" style="max-width: 18rem;">
                                        <div class="d-flex justify-content-end mr-2">
                                            <input class="form-check-input" type="radio" required {{ old('role') == $key ? 'checked' : '' }} value="{{ $key }}" name="role" id="role_{{ $key }}">
                                        </div>
                                        <div class="card-body text-primary mt-3 flex justify-center text-center">
                                            <img 
                                                class="text-white text-center">
                                            <p class="card-text" for="role_{{ $key }}">{{ $value }}</p>
                                        </div>
                                    </div> -->
                                    
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                    <label for="username" class="forms-label show-text">Email<span class="special-txt">*</span></label><br>
                        <input type="email" class="forms-control @error('email') is-invalid @enderror" id="useremail"
                        value="{{ old('email') }}" name="email" placeholder="Enter Your Email Here" autofocus required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="mb-3">
                    <label for="username" class="forms-label show-text">Username<span class="special-txt">*</span></label><br>
                        <input type="text" class="forms-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" id="username" name="name" autofocus required
                            placeholder="Enter Your Username">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="mb-3">
                    <label for="username" class="forms-label show-text">Password<span class="special-txt">*</span></label><br>
                        <input type="password" class="forms-control @error('password') is-invalid @enderror" id="userpassword" name="password"
                            placeholder="Enter Your Password Here" autofocus required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <input class="remember-check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="forms-label show-text">
                            Agree to the <a href="#" class="linkcolor">Skadoosh Term of Service</a>. 
                        </label>
                    </div>

                    <div class="mt-5 d-grid">
                        <button class="nav_signup_credential"
                            type="submit">Create my account</button>
                    </div>
                    <p class="notice-txt mt-2">Already have a Skadoosh account?<a href="{{ url('/nx/login') }}" class="first_sign_up">Sign in now</a></p>
                </form>
            </div>
            <p class="login-footer">Copyright @<script>document.write(new Date().getFullYear())</script>All rights reserved</p>

        </div>
        <div class="col">
            <img class="bg-img-login">
        </div>
    </div>

    @endsection
@section('script')
    <script src="{{ URL::asset('/admin_assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endsection
