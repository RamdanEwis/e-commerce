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
    <div class="bigshop_reg_log_area section_padding_50_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="login_form ">
                        <h5 class="mb-3">Register</h5>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label for="name">{{ __('Name') }}</label>

                                    <input id="name" placeholder="enter full name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" placeholder="enter email address"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="password">{{ __('Password') }}</label>

                                    <input  placeholder="Enter your password"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="col-md-12 form-group">
                                     <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                     <input placeholder="enter password-confirm"
                                            id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('register') }}
                                </button>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 ">
                                    <p >Have you already account? <a href="{{route('login')}}" class="txt-default">click Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section ends-->
@endsection
