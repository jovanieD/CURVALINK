@extends('layouts.authenticate')

@section('content')
    <div class="card card mt-5 shadow">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    location.reload();
                }, 4000); // 4000 milliseconds (4 seconds)
            </script>
        @endif


        <form action="/forgot_password" method="post">
            @csrf

            <div class=" ">
                <div class="card-header h5 text-white bg-warning">Password Reset</div>
                <div class="card-body px-5">
                    <p class="card-text py-2">
                        Enter your email address and we'll send you an email with your new password.
                    </p>
                    <div class="form-outline">
                        <label class="form-label" for="typeEmail">Email :</label>
                        <input type="email" id="typeEmail" class="form-control my-3" name="email"
                            placeholder="sample@curvalink.online" />

                    </div>
                    <button type="submit" class="btn-grad  btn-warning w-100">Reset password</button>
                    <div class="d-flex mt-4">
                        <span class="" style="font-style: italic; margin-right: 2px;">Return to </span><a
                            class="" href="/login">Login ?</a>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
