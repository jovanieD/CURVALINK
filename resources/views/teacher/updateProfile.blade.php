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
                                <form id="formAccountSettings" action="/teacher/updateprofile" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <img src="{{Auth::user()->profile_image}}" alt="user-avatar"
                                                    style="border-radius: 200px; height: 300px; width: 300px;" class="mb-3 mb-sm-0" id="selectedImage"/>
                                            </div>
                                            <div class="col mt-4">
                                                <div class="button-wrapper">
                                                    @if (session('error'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ session('error') }}
                                                        </div>
                                                    @endif
                                                    <label for="formFileLg" class="form-label">Change Profile</label>
                                                    <input class="form-control form-control-lg w-50" name="profile_picture" type="file" accept="image/*" onchange="displaySelectedImage(event, 'selectedImage')"/>
                                                    {{-- <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Reset</span>
                                                    </button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input class="form-control" type="text" id="firstName" name="firstname"
                                                    value="{{ Auth::user()->firstname }}" required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">Middle Name</label>
                                                <input class="form-control" type="text" id="firstName" name="middlename"
                                                    value="{{ Auth::user()->middlename }}" required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">Last Name</label>
                                                <input class="form-control" type="text" id="firstName" name="lastname"
                                                    value="{{ Auth::user()->lastname }}" required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="gender" class="form-label">Gender</label>
                                                <input class="form-control" type="text" id="gender" name="gender"
                                                    value="{{ Auth::user()->gender }}" required />
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="rank" class="form-label">Rank</label>
                                                <input class="form-control" type="text" id="rank" name="rank"
                                                    value="{{ Auth::user()->rank }}" required />
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="subject_handle" class="form-label">Subject Handle</label>
                                                <input class="form-control" type="text" id="subject_handle" name="subject_handle"
                                                    value="{{ Auth::user()->subject_handle }}" required />
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="grade_level" class="form-label">Grade Level</label>
                                                <input class="form-control" type="text" id="grade_level" name="grade_level"
                                                    value="{{ Auth::user()->grade_level }}" required />
                                            </div>


                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input class="form-control" type="text" id="email" name="email"
                                                    value="{{ Auth::user()->email }}" required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="phoneNumber" name="phonenumber"
                                                        class="form-control" maxlength="11"
                                                        value="{{ Auth::user()->phonenumber }}" pattern="[0-9]+" title="Please enter only numbers" required/>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="{{ Auth::user()->address }}" required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="state" class="form-label">Municipality</label>
                                                <input class="form-control" type="text" id="state"
                                                    name="municipality" value="{{ Auth::user()->municipality }}" required/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="zipCode" class="form-label">Province</label>
                                                <input type="text" class="form-control" id="zipCode" name="province"
                                                    value="{{ Auth::user()->province }}" required />
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-warning me-2">Save changes</button>
                                            <a href="/teacher/profile" class=" text-white">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="">Cancel</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function displaySelectedImage(event, elementId) {
            const selectedImage = document.getElementById(elementId);
            const fileInput = event.target;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    selectedImage.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
@endsection
