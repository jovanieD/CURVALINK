@extends('layouts.teacher-dashboard')

@section('teacher')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <section>
                    <div class="container py-5">
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
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="{{Auth::user()->profile_image}}" alt="avatar"
                                            style="border-radius: 200px; height: 300px; width: 300px;">
                                        <h5 class="my-3">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h5>
                                        <p class="text-muted mb-1">Teacher</p>
                                        <p class="text-muted mb-4">{{ Auth::user()->address }}</p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href="/teacher/editprofile">
                                                <button type="button" class="btn btn-warning">Update Profile</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">First Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->firstname }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Middle Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->middlename }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Last Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->lastname }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Gender</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->gender }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Ranking</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->rank }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Subject Handle</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->subject_handle }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Grade Level</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->grade_level }}</p>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->phonenumber }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Address</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->address }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Municipality</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->municipality }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Province</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->province }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
