@extends('layouts.app-teacher')

@section('teacher')
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white"
                    style="margin-top: 20px">Contact Us</h1>
                <a href=""
                    class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href=""
                    class="h5 text-white">Contact</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-warning d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <img style="width: 100px; height: 100px;" src="/images/svg/contact_call.svg" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">09759736671</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-warning d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <img style="width: 100px; height: 100px;" src="/images/svg/contact_email.svg" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email</h5>
                            <h4 class="text-primary mb-0">303026@deped.gov.ph</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-warning d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <img style="width: 100px; height: 100px;" src="/images/svg/contact_maps.svg" alt="">
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our School</h5>
                            <h4 class="text-primary mb-0">Curva Medellin, Cebu</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                
                <div class="col " data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d813.1433131024538!2d124.00330341578973!3d11.138035294612882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a86fdf4e9db2a3%3A0x518c821721b2d469!2sCurva%2C%20Medellin%2C%20Cebu!5e1!3m2!1sen!2sph!4v1699496500417!5m2!1sen!2sph"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    @endsection
