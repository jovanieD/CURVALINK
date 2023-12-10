@extends('layouts.app')

@section('content')
    {{-- <!-- About Start --> --}}
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white" style="margin-top: 20px">About Us</h1>
                <a href="/" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/about" class="h5 text-white">About</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Martin M. Salimbangon National High School</h1>
                    </div>
                    <p class="mb-4">Evoling the learners is what Curva National High School anchoring for. The school to
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
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Winner District level</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Winner Sub Official Level
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Contestant Division Level
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Sugbusog 3rd Placer</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class=" d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px; background-color:#ffc107;">
                            <img style="width: 100px; height: 100px; "src="/images/svg/email.svg" alt="">
                        </div>
                        <div class="ps-4" style="text-wrap: wrap; max-width: 70%">
                            <h5 class="mb-2" style="text-wrap: wrap;">Contact us through our Email</h5>
                            <h4 class="text-primary mb-0 text-truncate" style="text-wrap: wrap;">
                                curvanationalhighschool@gmail.com</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" type="image/jpg"
                            src="{{ url('images/award.jpg') }}" alt="Image" data-wow-delay="0.9s" src="img/about.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- About End --> --}}

    {{-- VISION AND MISSION START --}}


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 ">

            <div class="section-title position-relative pb-3 mb-5">
                <h5 class="fw-bold text-primary text-uppercase">VISION AND MISSION</h5>
            </div>

            <div class="row mb-5">
                <!-- Vision Card -->
                <div class="col-md mb-3">
                    <div class="card shadow mb-3 h-100">
                        <div class="row g-0 d-flex align-items-center">
                            <div class="col-md-4">
                                <img class="card-img card-img-left h-100" src="/images/svg/mission.svg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h1 class="mb-3">Vision</h1>
                                    <h5 class="card-title">
                                        We dream of Filipinos who passionately love their country and
                                        whose competencies and values enable them to realize their full potential and
                                        contribute meaningfully to building the nation.
                                    </h5>
                                    <h5 class="card-title">
                                        As a learner-centered public institution, the Department of Education continuously
                                        improves itself to better service its stakeholders.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="col-md mb-3">
                    <div class="card shadow mb-3 h-100">
                        <div class="row g-0 d-flex align-items-center">
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h1 class="mb-3">Mission</h1>
                                    <h5 class="card-title">
                                        To protect and promote the right of every Filipino to quality, equitable,
                                        culture-based, and complete basic education where;
                                    </h5>
                                    <h5 class="card-title">
                                        Students learn in a child-friendly, gender-sensitive, safe, and motivating
                                        environment
                                        Teachers facilitate learning and constantly nurture every learner
                                        Administrators and staff, as stewards of the institution ensure an enabling and
                                        supportive environment for effective learning to happen
                                        Family, community and other stakeholders are actively engaged and share
                                        responsibility for developing lifelong learners.
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="card-img card-img-right h-100" src="/images/svg/vission.svg" alt="Card image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- VISION AND MISSION END --}}

    {{-- CURVA HYMN START --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Martin M. Salimbangon National High School</h5>
                <h1 class="mb-0">HYMN</h1>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-8 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center  h-auto bg-white rounded shadow position-relative"
                        style="z-index: 1;">
                        <h1 class="mb-3"> <br> Curva Hymn</h1>
                        <p class="m-0 text-center" style="max-width: 200px">I: <br>
                            <i class="fa fa-music bouncing-icon" style="color: #ffc107" aria-hidden="true"></i>
                            From Barangay Curva of Medellin,
                            Grows a school that will never go,
                            Education is the name it uphold,
                            The future of her children she molds.
                            <i class="fa fa-music bouncing-icon" style="color: #ffc107" aria-hidden="true"></i>
                            <br> Chorus: <br>
                            <i class="fa fa-music bouncing-icon" style="color: #ffc107" aria-hidden="true"></i>
                            As children you nurtured us, <br>
                            Our love and strength will continue, <br>
                            Though our road to life will soon be long, <br>
                            We live the portals of this song. <br>
                            <br>
                            <i class="fa fa-music bouncing-icon" style="color: #ffc107" aria-hidden="true"></i>
                            (Repeat chorus 2x)
                            <i class="fa fa-music bouncing-icon" style="color: #ffc107" aria-hidden="true"></i>
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CURVA HYMN END --}}

    {{-- <!-- ORGANIZATIONAL CHART End --> --}}

    <div class="container-fluid py-5 wow fadeInUp " data-wow-delay="0.1s">
        <div class="container">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Martin M. Salimbangon National High School</h5>
                <h1 class="mb-0">Organizational Chart</h1>
            </div>


            <div class="card " style="max-width: 20rem;">
                <img class="card-img-top" type="image/jpg" src="{{ url('images/merceditha.jpg') }}" alt="Image"
                    data-wow-delay="0.9s" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Merceditha M. Malinao</h5>
                </div>
            </div>
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Teacher In Charge</h5>
            </div>



            <div class="card" style="max-width: 20rem;">
                <img class="card-img-top" type="image/jpg" src="{{ url('images/cherry.jpg') }}" alt="Image"
                    data-wow-delay="0.9s" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cherry M. Labrada</h5>
                </div>
            </div>
            <div class="section-title text-center position-relative pb-3  mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Adminisrative Assisstant II</h5>
            </div>
        </div>
    </div>



    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Junior High School Department</h5>
            </div>

            <div class="row g-5">

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/winefreda.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Winefreda S. Ursal</h5>
                            <p class="card-text">Math Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/reslie.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reslie Ann T. Dejito</h5>
                            <p class="card-text">Math Teacher</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/rubie.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rubie T. Canales</h5>
                            <p class="card-text">English Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/richard.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Richard V. Canales</h5>
                            <p class="card-text">English Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/lucille.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Lucille M. Sampaga</h5>
                            <p class="card-text">English Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jelou.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jelou L. Ursal</h5>
                            <p class="card-text">English Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/michelle.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Michelle M. Tonacao</h5>
                            <p class="card-text">English Teacher</p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/alyssa.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Alyssa Marie A. Opura</h5>
                            <p class="card-text">Reading and Writing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jesselyn.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jesselyn M. Booc</h5>
                            <p class="card-text">Research Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/lucia.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Lucia R. Munasque</h5>
                            <p class="card-text">Science Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/loraine.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Loraine D. Munasque</h5>
                            <p class="card-text">Science Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/mercedita.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mercedita O. Bercero</h5>
                            <p class="card-text">Filipino Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/josephine.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Josephine Y. Asadon</h5>
                            <p class="card-text">Filipino Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/nelgen.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nelgen L. Demapitan</h5>
                            <p class="card-text">Filipino Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/reynaldo.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reynaldo M. Villegas</h5>
                            <p class="card-text">Araling Panlipunan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/judy.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Judy Ann M. Inot</h5>
                            <p class="card-text">Araling Panlipunan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/ian.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ian Vincent S. Quilongquilong</h5>
                            <p class="card-text"> Understanding CS</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/rosendo.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rosendo S. Ursal</h5>
                            <p class="card-text">TLE Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/alma.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Alma P. Dilao</h5>
                            <p class="card-text">TLE Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jeffrey.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jeffrey M. Ruiz</h5>
                            <p class="card-text">TLE Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/agnes.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Agnes D.Quilongquilong</h5>
                            <p class="card-text">TLE Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/cristy.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cristy V. Abayon</h5>
                            <p class="card-text">MAPEH Teacher</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">SENIOR HIGH SCHOOL DEPARTMENT</h5>
            </div>

            <div class="row g-5">
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/elisa.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Elisa B. Amores</h5>
                            <p class="card-text">Physical Science</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/janyl.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Janyl Grace R. Barro</h5>
                            <p class="card-text">Hairdressing</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/milagros.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Milagros S. Florita</h5>
                            <p class="card-text">General Mathematics Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jomae.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jomae S. Sta. Rita</h5>
                            <p class="card-text">Trends</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/charisma.jpg') }}"
                            alt="Image" data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Charisma B. Pino</h5>
                            <p class="card-text">Entrepreneurship</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/delvie.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Delvie M. Opura</h5>
                            <p class="card-text">Pagbasa at Pagsulat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/keth.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Keth A. Villanueva</h5>
                            <p class="card-text">Practical Research</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/cindy.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cindy F. Sugarol</h5>
                            <p class="card-text">Physical Education 12</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jasmin.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jasmin M. Sontousidad</h5>
                            <p class="card-text">Physical Education 11</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jesa.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jesa P. Catadman</h5>
                            <p class="card-text">Statistics and Probability</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <img class="card-img-top" type="image/jpg" src="{{ url('images/jezyl.jpg') }}" alt="Image"
                            data-wow-delay="0.9s" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jezyl B. Munasque</h5>
                            <p class="card-text">General Mathematics</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{-- ACHIEVEMENTS START --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 ">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">ACHIEVEMENTS</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 shadow " style="max-width: 100vh; ">
            <div class="row no-gutters ">
                <div class="col-md-4">
                    <img src="{{ url('images/sugbusog.jpg') }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> 𝓜𝓪𝓻𝓽𝓲𝓷 𝓝𝓗𝓢 𝓫𝓪𝓰𝓼 3𝓻𝓭 𝓹𝓵𝓪𝓬𝓮 𝓸𝓯 𝓢𝓾𝓰𝓫𝓾𝓼𝓸𝓰
                            𝓒𝓸𝓷𝓽𝓮𝓼𝓽 𝓡𝓸𝓾𝓷𝓭 4 𝓜𝓾𝓷𝓲𝓬𝓲𝓹𝓪𝓵 𝓛𝓮𝓿𝓮𝓵</h5>
                        <br>
                        <p class="card-text">Curva National High School celebrated victory as they triumphed in
                            Sugbusog Vegetables Gardening Program Contest Round 4 Municipal Level. The Sugbusog contest
                            held last July 2023 graced with the evaluators.
                            The Sugbusog of Curva National High School were taken care of and sustained its beauty
                            through the efforts from Junior and Senior High School teachers most especially to the
                            Sugbusog coordinator, Ms. Cristy Abayon.
                            The school were really destined to bag an award because the pictures were planned to be
                            posted last July but because of the unpredictable schedules, it was postponed. However,
                            everything has a reason because last September 9, 2023 the school were part of the winners.
                            Indeed, perfect timing is everything!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        .bouncing-icon {
            animation: bounce 2s infinite;
        }

        .m-0 {
            position: relative;
        }
    </style>
@endsection
