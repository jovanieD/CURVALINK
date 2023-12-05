@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="card mb-4">
                        <h5 class="card-header">Admin's Details</h5>
                        <div class="card-body">
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-4">
                                <img src="{{ $Admin->profile_image }}" alt="Admin-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        
                                <div class="button-wrapper">
                                    <label for="rank" class="form-label">Ranking :</label>
                                    <input readonly class="form-control" type="text" id="rank" name="rank" value="{{ $Admin->rank }}" />
                                </div>

                                <div class="button-wrapper">
                                    <label for="grade_level" class="form-label">Grade level handle :</label>
                                    <input readonly class="form-control" type="grade_level" id="grade_level" name="grade_level" value="{{ $Admin->grade_level }}" />
                                </div>

                                <div class="button-wrapper">
                                    <label for="subject_handle" class="form-label">subject handle :</label>
                                    <input readonly class="form-control" type="text" id="subject_handle" name="subject_handle" value="{{ $Admin->subject_handle }}" />
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First name </label>
                                        <input readonly class="form-control" type="text" id="firstname" name="firstname"
                                            value="{{ $Admin->firstname }}" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="middlename" class="form-label">middle name</label>
                                        <input readonly class="form-control" type="text" id="middlename" name="middlename"
                                            value="{{ $Admin->middlename }}" />
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input readonly class="form-control" type="text" name="lastName" id="lastName"
                                            value="{{ $Admin->lastname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input readonly class="form-control" type="text" id="email" name="email"
                                            value="{{ $Admin->email }}" placeholder="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">Gender</label>
                                        <input readonly type="text" class="form-control" id="organization" name="organization"
                                            value="{{ $Admin->gender }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <input readonly type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                                placeholder="" value="{{ $Admin->phonenumber }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input readonly type="text" class="form-control" id="address" name="address"
                                            placeholder="" value="{{ $Admin->address }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Municipality</label>
                                        <input readonly class="form-control" type="text" id="state" name="state"
                                            placeholder="" value="{{ $Admin->municipality }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Province</label>
                                        <input readonly type="text" class="form-control" id="zipCode" name="zipCode"
                                            placeholder="" value="{{ $Admin->province }}" />
                                    </div>

                                </div>

                                <div class="mt-2 text-white">
                                    <button class="btn btn-primary me-2 ">
                                        <a href="/all_Admins" class=" text-white">
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
