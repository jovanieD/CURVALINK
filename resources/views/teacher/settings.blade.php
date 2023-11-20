@extends('layouts.teacher-dashboard')

@section('teacher')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Profile Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Full Name</label>
                                            <input disabled class="form-control" type="text" id="firstName"
                                                name="name" value="{{ Auth::user()->name }}" required />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input disabled class="form-control" type="text" id="email"
                                                name="email" value="{{ Auth::user()->email }}" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <input disabled type="text" id="phoneNumber" name="phonenumber"
                                                    class="form-control" value="{{ Auth::user()->phonenumber }}" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="address" class="form-label">Address</label>
                                            <input disabled type="text" class="form-control" id="address"
                                                name="address" value="{{ Auth::user()->address }}" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="state" class="form-label">Municipality</label>
                                            <input disabled class="form-control" type="text" id="state"
                                                name="municipality" value="{{ Auth::user()->municipality }}" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="zipCode" class="form-label">Province</label>
                                            <input disabled type="text" class="form-control" id="zipCode"
                                                name="province" placeholder="{{ Auth::user()->province }}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /Account -->
                            </div>

                            <div class="card mb-4">
                                <h5 class="card-header">Change Password</h5>

                                <form action="/teacher/updatepassword" method="POST" id="updatePasswordForm">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            @if ($errors->any())
                                                <div class="alert alert-danger" role="alert">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if (session('success'))
                                                <div class="alert alert-success " role="alert">
                                                    {{ session('success') }}
                                                </div>
                                                <script>
                                                    setTimeout(function() {
                                                        location.reload();
                                                    }, 4000); // 5000 milliseconds (5 seconds)
                                                </script>
                                            @endif
                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">New Password</label>
                                                <input type="password" class="form-control" id="new" name="new"
                                                    value="" oninput="checkPasswordMatch()" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="state" class="form-label">Confirm Password</label>
                                                <input class="form-control" type="password" id="confirm" name="confirm"
                                                    value="" oninput="checkPasswordMatch()" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="zipCode" class="form-label">Current Password</label>
                                                <input type="password" class="form-control" id="zipCode" name="current"
                                                    placeholder="" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning" data-bs-toggle="modal">Update
                                            Password</button>
                                    </div>
                                </form>

                                <script>
                                    function checkPasswordMatch() {
                                        var newPassword = document.getElementById('new').value;
                                        var confirmPassword = document.getElementById('confirm').value;
                                        var newField = document.getElementById('new');
                                        var confirmField = document.getElementById('confirm');

                                        if (newPassword === confirmPassword) {
                                            newField.classList.add('is-valid');
                                            confirmField.classList.add('is-valid');
                                            newField.classList.remove('is-invalid');
                                            confirmField.classList.remove('is-invalid');
                                        } else {
                                            newField.classList.remove('is-valid');
                                            confirmField.classList.remove('is-valid');
                                            newField.classList.add('is-invalid');
                                            confirmField.classList.add('is-invalid');
                                        }
                                    }
                                </script>


                            </div>

                            <div class="card">
                                <h5 class="card-header">Delete Account</h5>
                                <div class="card-body">
                                    <div class="mb-3 col-12 mb-0">
                                        <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your
                                                account?</h6>
                                            <p class="mb-0">Once you delete your account, there is no going back. Please
                                                be certain.</p>
                                        </div>
                                    </div>
                                    <form id="formAccountDeactivation" onsubmit="return false">
                                        <div class="form-check">
                                            <input type="hidden" name="accountActivation" id="accountActivation" />
                                        </div>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Deactivate
                                            Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deactivate Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-3">
                        Are you sure you want to delete your account?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/teacher/deleteUser"><button type="" class="btn btn-primary">Yes</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
