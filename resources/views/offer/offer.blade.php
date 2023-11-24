@extends('layouts.app')

@section('content')
    {{-- <!-- About Start --> --}}
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white"
                    style="margin-top: 20px">Offers</h1>
                <a href=""
                    class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href=""
                    class="h5 text-white">Offers</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Curva National High School</h1>
                    </div>
                    <p class="mb-4">Evovling the learners is what Curva National High School anchoring for. The school to
                        succor the learners to bag their brimful potential and become sterling Filipino citizens and
                        ptriots, who hav the passion to serve their country and work for its betterment, likewise produce
                        graduates who are unhesitant to do their share in promoting new features of our native land. Imbue
                        values that are essential and desirable, and train students to ascertain that they have
                        indispensable competencies by honing their skills and talents that will enable them to discover
                        their capabilities and usefulness. Thereby, they can sustantially contribute to building a prolific
                        nation.</p>
                    <div class="row g-0 mb-3">
                        <h5 class="fw-bold text-primary text-uppercase">Awards winning of the school and the students
                        </h5>
                        <div class="col-sm-6 wow zoomIn"
                            data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Winner District level</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Winner Sub Official Level
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn"
                            data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Contestant Division Level
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Sugbusog 3rd Placer</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn"
                        data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contact us through our Email</h5>
                            <h4 class="text-primary mb-0"
                                style="font-size: 20px">curvanationalhighschool@gmail.com</h4>
                        </div>
                    </div>
                    <a href="quote.html"
                        class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">Request</a>
                </div>
                <div class="col-lg-5"
                    style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn"
                            type="image/jpg"
                            src="{{ url('images/award.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- About End --> --}}


    {{-- <!-- Team Start --> --}}
    <div class="container-fluid py-5 wow fadeInUp"
        style="width: 50%"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Curva National High School</h5>
                <h1 class="mb-0">Organizational Chart</h1>
            </div>

            <div class="row g-5">

                    <div class="col-lg-4 wow slideInUp"
                        data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">

                            <div class="text-center py-4">
                                <h4 class="text-primary"
                                    style="font-size: 20px"> </h4>
                                <p class="text-uppercase m-0"
                                    style="font-size: 13px">
                                </p>
                            </div>
                        </div>

            </div>
            <div class="container-fluid py-5 wow fadeInUp"
                data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                        style="max-width: 600px;">

                        <h1 class="mb-0">Junior High School Department</h1>
                    </div>
                    <div class="col-lg-4 wow slideInUp"
                        data-wow-delay="0.6s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="img/team-2.jpg"
                                    alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">

                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-lg-4 wow slideInUp"
                        data-wow-delay="0.9s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="img/team-3.jpg"
                                    alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- Team End --> --}}





    @endsection
