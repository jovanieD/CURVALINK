@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="card mb-4">
                        <form action="/admin_updateUser/{{ $user->id }}" method="post">
                            @csrf
                            <h5 class="card-header">User's Details</h5>
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ $user->profile_image }}" alt="user-avatar" class="d-block rounded"
                                        height="100" width="100" id="uploadedAvatar" />

                                    <div class="button-wrapper">
                                        <label for="idnumber" class="form-label">ID Number :</label>
                                        <input class="form-control" type="text" id="idnumber" name="idnumber"
                                            value="{{ $user->idnumber }}"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input class="form-control" type="text" id="firstname" name="firstname"
                                            value="{{ $user->firstname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                        <input class="form-control" type="text" name="middlename" id="middlename"
                                            value="{{ $user->lastname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="lastname" id="lastname"
                                            value="{{ $user->lastname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ $user->email }}" placeholder="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="gradelevel" class="form-label">Grade Level</label>
                                        <input class="form-control" type="text" name="gradelevel" id="gradelevel"
                                            value="{{ $user->lastname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="phoneNumber" name="phonenumber"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                class="form-control" placeholder="" value="{{ $user->phonenumber }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="" value="{{ $user->address }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Municipality</label>
                                        <input class="form-control" type="text" id="municipality" name="municipality"
                                            placeholder="" value="{{ $user->municipality }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Province</label>
                                        <input type="text" class="form-control" id="province" name="province"
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
                                    <button type="submit" class="btn btn-warning me-2">Save changes</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
