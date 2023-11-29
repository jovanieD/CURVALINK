@extends('layouts.authenticate')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="login p-4 w-75 mt-5">
            <a href="/">
                <div class="d-flex justify-content-center mb-5">
                    <img src="{{ asset('images/curva_logo.png') }}" class="img-fluid w-25" alt="...">
                </div>
            </a>
            <h4 class="mb-2 section-title">Welcome to CurvaLink! 👋</h4>
            <p class="">Need an account? <a href="{{ route('register') }}">Sign Up</a></p>

            @if (session()->has('error'))
                <div class="alert alert-danger fade show">
                    {{ session()->get('error') }}
                </div>
            @endif

            @isset($url)
                <form method="POST" action="{{ $url }}">
                @else
                    <form method="POST" action="Login">
                    @endisset

                    @csrf
                    <div class="form-group mb-4">
                        <label>Email<span class="login-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror input-field"
                            name="email">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    @if ($errors->has('email'))
                        <div class="w-100 p-2 opacity-25 rounded fade show" style="background-color: #f8d7da; color:#842029;">
                            <span>Please input your Email/Username!</span>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Password <span class="login-danger">*</span></label>
                        <input type="password"
                            class="form-control pass-input @error('password') is-invalid @enderror input-field"
                            name="password" id="password">
                        <i class="fa-solid fa-eye-slash" id="togglePassword"></i>
                    </div>
                    @if ($errors->has('password'))
                        <div class="w-100 p-2 opacity-25 rounded fade show" style="background-color: #f8d7da; color:#842029;">
                            <span>Please input your Password!</span>
                        </div>
                    @endif
                    <div class=" mt-3">
                        <div class="remember-me">
                            <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                <input type="checkbox" name="radio" class=" ml-1">
                            </label>
                        </div>
                        <a href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button class="btn-grad w-100" type="submit">Login</button>
                    </div>
                </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var fadeOutElements = document.querySelectorAll('.fade.show');
    
            fadeOutElements.forEach(function(element) {
                setTimeout(function() {
                    element.classList.remove('show');
                    element.classList.add('fade');
                }, 5000); // 10 seconds
            });
        });
    </script>
@endsection
