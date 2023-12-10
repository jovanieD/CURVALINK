@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="card mb-4">
                        <h5 class="card-header">Teacher's Details</h5>
                        <form id="" method="POST" action="/admin_updateTeacher/{{ $Teacher->id }}">
                            @csrf
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-4">
                                    <img src="{{ $Teacher->profile_image }}" alt="Teacher-avatar" class="d-block rounded"
                                        height="100" width="100" id="uploadedAvatar" />

                                    <div class="button-wrapper">
                                        <label for="rank" class="form-label">Ranking :</label>
                                        <input class="form-control" type="text" id="rank" name="rank"
                                            value="{{ $Teacher->rank }}" />
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="grade_level" class="form-label">Grade level handle :</label>
                                        <input class="form-control" type="grade_level" id="grade_level" name="grade_level"
                                            value="{{ $Teacher->grade_level }}" />
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="subject_handle" class="form-label">subject handle :</label>
                                        <input class="form-control" type="text" id="subject_handle" name="subject_handle"
                                            value="{{ $Teacher->subject_handle }}" />
                                    </div>
                                </div>
                            </div>

                            <hr class="my-0" />
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First name </label>
                                        <input class="form-control" type="text" id="firstname" name="firstname"
                                            value="{{ $Teacher->firstname }}" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="middlename" class="form-label">middle name</label>
                                        <input class="form-control" type="text" id="middlename" name="middlename"
                                            value="{{ $Teacher->middlename }}" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="lastname" id="lastname"
                                            value="{{ $Teacher->lastname }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ $Teacher->email }}" placeholder="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type="text" class="form-control" id="gender" name="gender"
                                            value="{{ $Teacher->gender }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="phoneNumber" name="phonenumber" class="form-control"
                                                placeholder="" value="{{ $Teacher->phonenumber }}"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="11" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="" value="{{ $Teacher->address }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Municipality</label>
                                        <input class="form-control" type="text" id="state" name="state"
                                            placeholder="" value="{{ $Teacher->municipality }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Province</label>
                                        <input type="text" class="form-control" id="zipCode" name="zipCode"
                                            value="" value="{{ $Teacher->province }}" />
                                    </div>

                                </div>

                                <div class="mt-2 text-white">
                                    <button class="btn btn-primary me-2 ">
                                        <a href="/all_Teachers" class=" text-white">
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
