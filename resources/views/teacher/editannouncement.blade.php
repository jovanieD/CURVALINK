@extends('layouts.teacher-dashboard')

@section('teacher')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Content wrapper -->
            <div class="content-wrapper">

                <div class="container mt-4">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <a href="/teacher/all_announcements" class=" m-4">
                                <i class="fa-solid fa-arrow-left fa-xl m-1 bg-warning"></i>
                            </a>
                            {{-- <a href="/teacher/add_announcement">
                                <i class="fa-solid fa-arrows-rotate  fa-xl m-1 "></i></a> --}}
                        </div>
                    </div>

                <section>
                    <div class="container py-5">

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
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

                        <form method="post" action="{{ route('updateAnnouncement', $announcement->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">

                                            <div>
                                                <div class="mb-4 d-flex justify-content-center">
                                                    <img id="selectedImage" src="{{ $announcement->imageurl}}"
                                                        alt="example placeholder" class="w-100" />
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn btn-primary btn-rounded">
                                                        <label class="form-label text-white m-1" style="cursor: pointer" for="customFile1">Choose
                                                            file</label>
                                                        <input type="file" class="form-control d-none" id="customFile1"
                                                            name="imageurl" value="{{ $announcement->imageurl }}"
                                                            onchange="displaySelectedImage(event, 'selectedImage')" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0 font-weight-bold h5">Title</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title" id="" value="{{ $announcement->title }}"
                                                        class="form-control text-capitalize">
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0 font-weight-bold h5">Description</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea  name="description" id="" class="form-control " style="height: 200px; border-color: #dddddd;">{{ $announcement['description'] }}</textarea>
                                                </div>
                                            </div>
                                            <hr>


                                            <div class="row justify-content-center">
                                                <div class="col-sm-6 text-center">
                                                    <button type="submit" class="btn btn-warning">Update Announcement</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>



                    </div>
                </section>

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
