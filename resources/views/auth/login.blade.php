@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center m-5">
            <div class="card p-4">
                <div class="d-flex justify-content-center mb-5">
                    <img src="{{ asset('images/curva_logo.png') }}" class="img-fluid w-25" alt="...">
                </div>
                <h4 class="mb-2 section-title">Welcome to CurvaLink! 👋</h4>
                <p class="">Need an account? <a href="{{ route('register') }}">Sign Up</a></p>
                <h2 class=" mb-4">Sign in</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label>Email<span class="login-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror input-field"
                            name="email">
                        <span class="profile-views"><i class="fas fa-envelope"></i></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ "Please input your email" }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password <span class="login-danger">*</span></label>
                        <input type="password"
                            class="form-control pass-input @error('password') is-invalid @enderror input-field"
                            name="password">
                        <span class="profile-views feather-eye toggle-password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="forgotpass">
                        <div class="remember-me">
                            <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                <input type="checkbox" name="radio" class=" ml-1">
                            </label>
                        </div>
                        <a href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button class="btn-grad w-75" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
