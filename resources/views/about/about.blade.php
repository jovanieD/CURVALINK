@extends('layouts.app')

@section('content')
    {{-- <!-- About Start --> --}}
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white"
                    style="margin-top: 150px">About Us</h1>
                <a href=""
                    class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href=""
                    class="h5 text-white">About</a>
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
                        <h1 class="mb-0">Martin M. Salimbangon National High School</h1>
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


    {{-- <!-- ORGANIZATIONAL CHART Start --> --}}
    <div class="container-fluid py-5 wow fadeInUp"
        style="width: 70%"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Martin M. Salimbangon National High School</h5>
                <h1 class="mb-0">Organizational Chart</h1>
            </div>

            <div class="card text-center"
                style="width: 12rem;">
                <img class="card-img-top"
                    type="image/jpg"
                    src="{{ url('images/merceditha.jpg') }}"
                    alt="Image"
                    data-wow-delay="0.9s"
                    src="img/about.jpg"
                    src="..."
                    alt="Card image cap">
                <div class="card-body">
                    <h6>Merceditha M.Malinao</h6>
                    <p class="card-text">Teacher In Charge <br>
                        TCH3-512998-2016
                    </p>
                </div>
            </div>
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">TEACHER IN CHARGE</h5>
            </div>
            <br><br><br>
            <div class="card text-center"
                style="width: 12rem;">
                <img class="card-img-top"
                    type="image/jpg"
                    src="{{ url('images/cherry.jpg') }}"
                    alt="Image"
                    data-wow-delay="0.9s"
                    src="img/about.jpg"
                    src="..."
                    alt="Card image cap">
                <div class="card-body">
                    <h6>Cherry M. Labrada</h6>
                    <p class="card-text">Adminisrative Assisstant II <br>
                        ADAS2-510301-2016
                    </p>
                </div>
            </div>
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ADAS</h5>
            </div>
            <br><br><br>
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <br><br>
                <h5 class="fw-bold text-primary text-uppercase">Junior High School Department</h5>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/winefreda.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Winefreda S. Ursal</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-510200-2004 <br>
                                Math
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/reslie.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Reslie Ann T. Dejito</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-519015-1998 <br>
                                Math
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/rubie.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Rubie T. Canales</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-519021-1998 <br>
                                English
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/richard.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Richard V. Canales</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-515858-2012 <br>
                                Disaster Risk Reduction

                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/lucille.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Lucille M. Sampaga</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-511760-2016 <br>
                                English
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jelou.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Jelou L. Ursal</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-519032-1998 <br>
                                English
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/alyssa.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 0.9rem">Alyssa Marie A. Opura</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-519020-1998 <br>
                                Reading and Writing


                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/michelle.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Michelle M. Tonacao</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-512477-2016 <br>
                                English
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jesselyn.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Jesselyn M. Booc</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-515864-2012 <br>
                                Research Project
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/lucia.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Lucia R. Munasque</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-510202-2004 <br>
                                Science
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/loraine.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 95%">Loraine D. Munasque</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-511023-2011 <br>
                                Science
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/mercedita.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 95%">Mercedita O. Bercero</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-510017-2003 <br>
                                Filipino
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/josephine.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Josephine Y. Asadon</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-510393-2010 <br>
                                Filipino
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/nelgen.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 95%">Nelgen L. Demapitan</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-510582-2004 <br>
                                Filipino
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/reynaldo.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 95%">Reynaldo M. Villegas</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-521960-1998 <br>
                                Araling Panlipunan
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/judy.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Judy Ann M. Inot</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-510-707-2009 <br>
                                Araling Panlipunan


                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/ian.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 80%">Ian Vincent S. Quilongquilong</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-511575-2017 <br>
                                Understanding CS
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/rosendo.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Rosendo S. Ursal</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-510204-2004 <br>
                                TLE
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/alma.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Alma P. Dilao</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-510203-2004 <br>
                                TLE
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jeffrey.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Jeffrey M. Ruiz</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-510402-2009 <br>
                                TLE


                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/agnes.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 83%">Agnes D.Quilongquilong</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher I <br>
                                TCH1-511022-2011 <br>
                                TLE
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/cristy.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Cristy V. Abayon</h6>
                            <small class="card-text">Teacher I <br>
                                TCH1-510371-2008 <br>
                                MAPEH
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                style="max-width: 600px;">
                <br><br>
                <h5 class="fw-bold text-primary text-uppercase">Senior High School Department</h5>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/elisa.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Elisa B. Amores</h6>
                            <small class="card-text">Teacher III <br>
                                TCH3-512997-2016 <br>
                                Physical Science

                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/janyl.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Janyl Grace R. Barro</h6>
                            <small class="card-text">Teacher II <br>
                                TCH2-513021-2016 <br>
                                Hairdressing
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/milagros.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Milagros S. Florita</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher II <br>
                                TCH2-512556-2017 <br>
                                General Mathematics
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jomae.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Jomae S. Sta. Rita</h6>
                            <small class="card-text">Teacher II <br>
                                TCH2-511356-2017 <br>
                                Trends
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/charisma.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Charisma B. Pino</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher II <br>
                                TCH2-511355-2017 <br>
                                Entrepreneurship
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/delvie.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Delvie M. Opura</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher II <br>
                                TCH2-512558-2017 <br>
                                Pagbasa at Pagsulat
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/keth.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 0.9rem">Keth A. Villanueva</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher II <br>
                                TCH2-510552-2022 <br>
                                Practical Research

                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/cindy.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Cindy F. Sugarol</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher II <br>
                                TCH2-511354-2017 <br>
                                Physical Eduaction 12

                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jasmin.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Jasmin M. Sontousidad</h6>
                            <small class="card-text"
                                style="font-size: 0.8rem">Teacher II <br>
                                TCH2-512557-2017 <br>
                                Physical Education 11
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jesa.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6>Jesa P. Catadman</h6>
                            <small class="card-text">Teacher II <br>
                                TCH2-512510-2017 <br>
                                Statistics and Probability
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top"
                            type="image/jpg"
                            src="{{ url('images/jezyl.jpg') }}"
                            alt="Image"
                            data-wow-delay="0.9s"
                            src="img/about.jpg"
                            src="..."
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 style="font-size: 95%">Jezyl B. Munasque</h6>
                            <small class="card-text">Teacher II <br>
                                SPST1-510108-2020 <br>
                                General Mathematics

                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- ORGANIZATIONAL CHART End --> --}}

    {{-- VISION AND MISSION START --}}
    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">VISSION AND MISSION</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- VISION AND MISSION END --}}
@endsection
