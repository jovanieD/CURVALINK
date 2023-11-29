@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="card mb-4">
                        <h5 class="card-header">User's Details</h5>
                        <div class="card-body">
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-4">
                                <img src="{{ $user->profile_image }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        
                                <div class="button-wrapper">
                                    <label for="firstName" class="form-label">Name :</label>
                                    <input readonly class="form-control" type="text" id="firstName" name="firstName" value="{{ $user->firstname }} {{ $user->lastname }}" />
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input readonly class="form-control" type="text" id="firstName" name="firstName"
                                            value="{{ $user->firstname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input readonly class="form-control" type="text" name="lastName" id="lastName"
                                            value="{{ $user->lastname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input readonly class="form-control" type="text" id="email" name="email"
                                            value="{{ $user->email }}" placeholder="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">Gender</label>
                                        <input readonly type="text" class="form-control" id="organization" name="organization"
                                            value="{{ $user->gender }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <input readonly type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                                placeholder="" value="{{ $user->phonenumber }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input readonly type="text" class="form-control" id="address" name="address"
                                            placeholder="" value="{{ $user->address }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Municipality</label>
                                        <input readonly class="form-control" type="text" id="state" name="state"
                                            placeholder="" value="{{ $user->municipality }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Province</label>
                                        <input readonly type="text" class="form-control" id="zipCode" name="zipCode"
                                            placeholder="" value="{{ $user->province }}" />
                                    </div>

                                </div>

                                <div class="mt-2 text-white">
                                    <button class="btn btn-primary me-2 ">
                                        <a href="/all_Users" class=" text-white">
                                            <i class="fa-solid fa-arrow-left "></i>
                                            Back
                                        </a>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
@endsection
