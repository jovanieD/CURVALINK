@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="card mb-4">
                        <h5 class="card-header">Teacher's Details</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="" action="/admin_create_teacher" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-4">
                                    <div class="button-wrapper">
                                        <label for="rank" class="form-label">Ranking :</label>
                                        <input class="form-control" type="text" id="rank" name="rank"
                                            value="" />
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="grade_level" class="form-label">Grade Level Handle:</label>
                                        <select class="form-select" id="grade_level" name="grade_level">
                                            <option value="" selected disabled>Please select</option>
                                            <option value="Grade 6">Grade 6</option>
                                            <option value="Grade 7">Grade 7</option>
                                            <option value="Grade 8">Grade 8</option>
                                            <option value="Grade 9">Grade 9</option>
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                        </select>
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="subject_handle" class="form-label">subject handle :</label>
                                        <input class="form-control" type="text" id="subject_handle" name="subject_handle"
                                            value="" />
                                    </div>
                                </div>
                            </div>

                            <hr class="my-0" />
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First name <span
                                                class=" text-danger">*</span> </label>
                                        <input class="form-control" type="text" id="firstname" name="firstname"
                                            value="" required />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="middlename" class="form-label">middle name</label>
                                        <input class="form-control" type="text" id="middlename" name="middlename"
                                            value="" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Last Name <span
                                                class=" text-danger">*</span></label>
                                        <input class="form-control" type="text" name="lastname" id="lastname"
                                            value="" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail <span
                                                class=" text-danger">*</span></label>
                                        <input required class="form-control" type="email" id="email" name="email"
                                            value="" placeholder="" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="" selected disabled>Please select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="phoneNumber" name="phonenumber" class="form-control"
                                                placeholder="" value=""
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="11" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="" value="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Municipality</label>
                                        <input class="form-control" type="text" id="municiplality" name="state"
                                            placeholder="" value="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Province</label>
                                        <input type="text" class="form-control" id="province" name="province"
                                            placeholder="" value="" />
                                    </div>

                                </div>

                                <div class="mt-2 text-white">
                                    <button class="btn btn-primary me-2 ">
                                        <a href="/all_Teachers" class=" text-white">
                                            <i class="fa-solid fa-arrow-left "></i>
                                            Back
                                        </a>
                                    </button>
                                    <button type="submit" class="btn btn-warning me-2">
                                        <i class="fa-solid fa-folder-plus me-2"></i>
                                        Create </button>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
