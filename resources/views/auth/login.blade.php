@extends('layouts.authenticate')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="login p-4 w-75 mt-5">
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
                    <i class="fa-solid fa-envelope"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password <span class="login-danger">*</span></label>
                    <input type="password"
                        class="form-control pass-input @error('password') is-invalid @enderror input-field" name="password"
                        id="password">
                    <i class="fa-solid fa-eye-slash" id="togglePassword"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class=" mt-3">
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
@endsection
