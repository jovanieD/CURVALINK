@extends('layouts.app')

@section('content')
    {{-- <!-- Announcement Start --> --}}
    <br><br>
    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">
        <div class="container py-6">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <div class="text">
                            <img src="{{ url('images/announcement.jpg') }}"
                                class="rounded w-50"
                                alt="...">
                        </div>
                        <h5 class="fw-bold text-primary text-uppercase">Announcement</h5>
                    </div>

                    <p class="mb-4">P.E. uniform will be worn every Friday by both Junior and Senior High School students,
                        and the school uniform will be worn every Monday to Thursday.
                        Be guided.</p>
                </div>
                <div class="col-lg-5"
                    style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn"
                            type="image/jpg"
                            src="{{ url('images/pe.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 mb-2 bg-primary text-white text-center h2 ">Announcements</div>
    {{-- <!-- Announcement END --> --}}


    {{-- Announcement Posts START --}}
    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Martinians M. Salimbangon NHS Blog</h5>
                <h1 class="mb-0">Articles from Our Blog Post</h1>
            </div>
            <nav class="navbar navbar-light ">
                <div class="container-fluid ">
                  <form class="d-flex ">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </nav>
              <br>
            <div class="row g-5">
                <div class="col-lg-5 wow slideInUp"
                    data-wow-delay="0.3s">
                    <div class="blog-item rounded d-flex flex-column overflow-hidden bg-white rounded shadow position-relative"
                        style="z-index: 1;">
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Martin S. Salimbangon NHS</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>31 Oct., 2023</small>
                            </div>
                            <h4 class="mb-3">Heed</h4>
                            <img class="w-100 img-fluid"
                                style="height: 190px"
                                type="image/jpg"
                                src="{{ url('images/dresscode.jpg') }}"
                                alt="Image">
                            <p>Please be informed of the following guidelines to be implemented starting November 6, 2023.</p>
                            <a class="text-uppercase"
                                href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow slideInUp"
                    data-wow-delay="0.3s">
                    <div class="blog-item rounded d-flex flex-column overflow-hidden bg-white rounded shadow position-relative"
                        style="z-index: 1;">
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Martin S. Salimbangon NHS</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>12 Oct., 2023</small>
                            </div>
                            <h4 class="mb-3">Heed</h4>
                            <img class="w-100 img-fluid"
                                style="height: 190px"
                                type="image/jpg"
                                src="{{ url('images/schoolrules.jpg') }}"
                                alt="Image">
                            <p>Please be informed of the following guidelines to be implemented starting November 6, 2023.
                                </p>
                            <a class="text-uppercase"
                                href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Announcement Posts END --}}

   {{-- CATEGORIES START --}}

      {{-- CATEGORIES END --}}

@endsection
