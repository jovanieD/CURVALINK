@extends('layouts.student-dashboard')

@section('student')
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
                                <form id="formAccountSettings" action="/updateProfile" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <img src="{{Auth::user()->profile_image}}" alt="user-avatar"
                                                    style="border-radius: 200px; height: 300px; width: 300px;"
                                                    class="mb-3 mb-sm-0" id="selectedImage" />
                                            </div>
                                            <div class="col mt-4">
                                                <div class="button-wrapper">
                                                    @if (session('error'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ session('error') }}
                                                        </div>
                                                    @endif
                                                    <label for="formFileLg" class="form-label">Change Profile</label>
                                                    <input class="form-control form-control-lg w-50" name="profile_picture"
                                                        type="file" accept="image/*"  onchange="displaySelectedImage(event, 'selectedImage')"/>
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
                                                <label for="idnumber" class="form-label">ID Number :</label>
                                                <input class="form-control" type="text" id="idnumber" name="idnumber"
                                                value="{{ Auth::user()->idnumber }}" oninput="this.value = this.value.replace(/[^0-9]/g, '');"  required />
                                            </div>
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
                                                <select class="form-control" id="gender" name="gender">
                                                    <option value="" selected disabled>Please select</option>
                                                    <option value="male" {{ Auth::user()->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="female" {{ Auth::user()->gender === 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="gradelevel" class="form-label">Grade Level</label>
                                                <select class="form-control" id="gradelevel" name="gradelevel">
                                                    <option value="" selected disabled>Please select</option>
                                                    <option value="Grade 6" {{ Auth::user()->gradelevel == 'Grade 6' ? 'selected' : '' }}>Grade 6</option>
                                                    <option value="Grade 7" {{ Auth::user()->gradelevel == 'Grade 7' ? 'selected' : '' }}>Grade 7</option>
                                                    <option value="Grade 8" {{Auth::user()->gradelevel == 'Grade 8' ? 'selected' : '' }}>Grade 8</option>
                                                    <option value="Grade 9" {{ Auth::user()->gradelevel == 'Grade 9' ? 'selected' : '' }}>Grade 9</option>
                                                    <option value="Grade 10" {{ Auth::user()->gradelevel == 'Grade 10' ? 'selected' : '' }}>Grade 10</option>
                                                    <option value="Grade 11" {{Auth::user()->gradelevel == 'Grade 11' ? 'selected' : '' }}>Grade 11</option>
                                                    <option value="Grade 12" {{ Auth::user()->gradelevel == 'Grade 12' ? 'selected' : '' }}>Grade 12</option>
                                                </select>
                                                
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
                                                        class="form-control" value="{{ Auth::user()->phonenumber }}"
                                                        pattern="[0-9]+" title="Please enter only numbers"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                        maxlength="11" required />
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
                                                    name="municipality" value="{{ Auth::user()->municipality }}"
                                                    required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="zipCode" class="form-label">Province</label>
                                                <input type="text" class="form-control" id="zipCode"
                                                    name="province" value="{{ Auth::user()->province }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-warning me-2">Save changes</button>
                                            <a href="/profile" class=" text-white">
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
