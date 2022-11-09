@extends('web.layouts.app')

@section('content')
    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Login &amp; Register</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Login &amp; Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->
    <!--section start-->
    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_50_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="login_form">
                        <h5 class="mb-3">Login</h5>
                        <form class="theme-form"   method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label >Email</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input id="password" type="password" class="form-control
                                    @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                {{ __('Login') }}
                            </button>
                            <a class="float-end txt-default mt-2" href="forget-pwd.html">Forgot your password?</a>
                        </form>
                        <a href="{{route('register')}}" class="txt-default pt-3 d-block">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
