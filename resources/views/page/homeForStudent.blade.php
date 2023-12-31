@extends('layouts.app')

@section('content')

    <body class="antialiased">
        <div class="container-fluid position-relative p-0 ">

            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 img-fluid" type="image/jpg" src="{{ url('images/bg_resize.jpg') }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To</h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Martin M. Salimbangon Natioanl High
                                    School</h1>
                                <a href=""
                                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <img class="w-100 img-fluid" type="image/jpg" src="{{ url('images/bg_resize.jpg') }}"
                            alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">In Martin M. Salimbangon
                                    Natioanl High School</h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">We nurture nature; We plant future
                                </h1>
                                <a href=""
                                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Navbar & Carousel End -->

        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users text-warning fs-3"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Teachers</h5>
                                <h1 class="text-white mb-0" data-toggle="counter-up">35</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px;">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-check text-white fs-3 "></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-primary mb-0">Students</h5>
                                <h1 class="mb-0" data-toggle="counter-up">855</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-warning fs-3"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Completers</h5>
                                <h1 class="text-white mb-0" data-toggle="counter-up">284</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts Start -->


        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                            <h1 class="mb-0">MARTIN M. SALIMBANGON NATIONAL HIGH SCHOOL</h1>
                        </div>
                        <p class="mb-4" style =" text-align: justify;">Evovling the learners is what Martin M. Salimbangon
                            National High School anchoring for. The school to succor the learners to bag their brimful
                            potential and become sterling Filipino citizens and ptriots, who hav the passion to serve their
                            country and work for its betterment, likewise produce graduates who are unhesitant to do their
                            share in promoting new features of our native land. Imbue values that are essential and
                            desirable, and train students to ascertain that they have indispensable competencies by honing
                            their skills and talents that will enable them to discover their capabilities and usefulness.
                            Thereby, they can sustantially contribute to building a prolific nation.
                        </p>
                        <div class="row g-0 mb-3">
                            <h5 class="fw-bold text-primary text-uppercase">Awards winning of the school and the students
                            </h5>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Winner District level
                                </h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Winner Sub Official
                                    Level</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>SMB Contestant Division
                                    Level
                                </h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Sugbusog 3rd Placer</h5>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Contact us through our Email</h5>
                                <h6 class="text-primary mb-0">curvanationalhighschool@gmail.com / 303026@deped.gov.ph</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" type="image/jpg"
                                src="{{ url('images/award.jpg') }}" alt="Image" data-wow-delay="0.9s" src=""
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                    <h1 class="mb-0">We Are Here to Give full Teaching of each Students</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h4>One of a Good School</h4>
                                <p class="mb-0">A good school uses every resource, advantage, gift, and opportunity it
                                    has to grow students and tends to see more resources, advantages, gifts, and
                                    opportunities than lower-performing schools.
                                </p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h4>Award Winning</h4>
                                <p class="mb-0">Achievement Awards recognize outstanding student achievement in a variety
                                    of categories, many of which align with national merit awards. A number of this year's
                                    Academic Achievement Award recipients are also University nominees for these national
                                    awards.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" type="image/jpg"
                                src="{{ url('images/makalikasan.jpg') }}" alt="Image" data-wow-delay="0.1s"
                                src="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-users-cog text-white"></i>
                                </div>
                                <h4>Professional Staff</h4>
                                <p class="mb-0">Professionalism is a consistent mode of behavior teachers observe within
                                    the practice of education. For classroom instructors, this includes maintaining subject
                                    knowledge and instructing students at age-appropriate levels while collaborating with
                                    other educators to plan teaching methods.
                                </p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <h4> Support</h4>
                                <p class="mb-0">School support staff play an important role in ensuring students are
                                    learning in a safe and supportive learning environment. They can foster positive,
                                    trusting relationships with students and improve school climate by encouraging parent
                                    and family involvement in their students education.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Start -->


        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our</h5>
                    <h1 class="mb-0">Core Values</h1>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6  wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center bg-white rounded shadow position-relative"
                            style="z-index: 1;">
                            <div class="service-icon">
                                <i class="fa fa-shield-alt text-white fs-2"></i>
                            </div>

                            <h4 class="fw-bold text-uppercase mb-4">Maka-Diyos</h4>
                            <div class="w-75">
                                <p class="m-0" style="text-align: center">Expresses one’s spiritual beliefs while
                                    respecting the spiritual
                                    beliefs of
                                    others <br>
                                    Shows adherence to ethical principles by upholding truth
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6  wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center bg-white rounded shadow position-relative"
                            style="z-index: 1;">

                            <div class="service-icon">
                                <i class="fas fa-users text-white fs-2"></i>
                            </div>

                            <h4 class="fw-bold text-uppercase mb-4">Maka-tao</h4>
                            <div class="w-75">
                                <p class="m-0" style="text-align: center">Is sensitive to individual, social, and
                                    cultural differences <br>
                                    Demonstrates contributions toward solidarity
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s">
                        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center bg-white rounded shadow position-relative"
                            style="z-index: 1;">
                            <div class="service-icon">
                                <i class="fab fa-pagelines text-white fs-2"></i>
                            </div>
                            <h4 class="fw-bold text-uppercase mb-4">Makakalikasan</h4>
                            <div class="w-75">
                                <p class="m-0" style="text-align: center">Cares for the environment and utilizes
                                    resources wisely, judiciously,
                                    and
                                    economically <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center bg-white rounded shadow position-relative"
                            style="z-index: 1;">
                            <div class="service-icon">
                                <i class="fab fa-font-awesome-flag text-white fs-2"></i>
                            </div>

                            <h4 class="fw-bold text-uppercase mb-4">Makabansa</h4>
                            <div class="w-75">
                                <p class="m-0" style="text-align: center">Demonstrates pride in being a Filipino;
                                    exercises the rights and
                                    responsibilities of a Filipino citizen <br>
                                    Demonstrates appropriate behavior in carrying out activities in the school,
                                    community, and
                                    country
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">What we Offer</h5>
                    <h1 class="mb-0">We Offers Different Academic Strands Track</h1>
                </div>
                <div class="row g-0">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="bg-light rounded">
                            <div class="border-bottom py-4 px-5 mb-4">
                                <h4 class="text-primary mb-1">ABM</h4>
                                <small class="text-uppercase">Accountancy, Business and Management</small>
                            </div>
                            <div class="p-5 pt-0">
                                <img class="w-100 img-fluid" type="image/jpg" src="{{ url('images/abm.jpg') }}"
                                    alt="Image">
                                <h1 class="display-5 mb-3">
                                    <p class="align-top" class="align-bottom" style="font-size: 16px; ">These ABM
                                        courses will equip them with the necessary industry nkow-how and skills to
                                        perform well in their professions and run their businesses smoothly.</p>
                                </h1>
                                <div class="d-flex justify-content-between mb-3"><span>

                                    </span></div>
                                <a href="" class="btn btn-primary py-2 px-4 mt-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                            <div class="border-bottom py-4 px-5 mb-4">
                                <h4 class="text-primary mb-1">TVL</h4>
                                <small class="text-uppercase">Technical - Vocational - Livelihood Strand</small>
                            </div>
                            <div class="p-5 pt-0">
                                <img class="w-100 img-fluid" type="image/jpg" src="{{ url('images/tvl.jpg') }}"
                                    alt="Image">
                                <h1 class="display-5 mb-3">
                                    <p class="align-top" class="align-bottom" style="font-size: 16px; ">The
                                        senior high school track is designed for students who wish to start working
                                        right after graduate from senior high school.
                                    </p>
                                </h1>
                                <div class="d-flex justify-content-between mb-3"><span>
                                    </span></div>
                                <a href="" class="btn btn-primary py-2 px-4 mt-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="bg-light rounded">
                            <div class="border-bottom py-4 px-5 mb-4">
                                <h4 class="text-primary mb-1">GAS</h4>
                                <small class="text-uppercase">General Academic Strand</small>
                            </div>
                            <div class="p-5 pt-0">
                                <img class="w-100 img-fluid" style="height: 190px" type="image/jpg"
                                    src="{{ url('images/gas.jpg') }}" alt="Image">
                                <h1 class="display-5 mb-3">
                                    <p class="align-top" class="align-bottom" style="font-size: 16px; ">Designed
                                        to prepare students who are more inclined to general areas of study rather
                                        than specialized fields, GAS will present the option for SHS students..</p>
                                </h1>
                                <div class="d-flex justify-content-between mb-3"><span> </span></div>
                                <a href="" class="btn btn-primary py-2 px-4 mt-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Quote Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Request A Document</h5>
                            <h1 class="mb-0">You need to Request a Document? Please feel free to Contact Us </h1>
                        </div>
                        <div class="row gx-3">
                            {{-- <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone
                                    support</h5>
                            </div> --}}
                        </div>
                        <p class="mb-4">If you need to request a document feel free to send us a request and fill
                            in your information in the form for our basis. You can request this following document:
                            Form 137, Good Moral and Certificate of Enrollment.</p>
                        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Call to ask any question</h5>
                                <h4 class="text-primary mb-0">09759736671</h4>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                            data-wow-delay="0.9s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control bg-light border-0"
                                            placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Choose a Document</option>
                                            <option value="1">Form 137</option>
                                            <option value="2">Good Moral</option>
                                            <option value="3">Certificate of Enrollment</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Martin M. Salimbangon National High School</h5>
                    <h1 class="mb-0">Teachers</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/merceditha.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">

                            <div class="ps-4" style="margin-top: 25px">
                                <h4 class="text-primary mb-1">Merceditha M. Malinao</h4>
                                <small class="text-uppercase">Teacher In-Charge</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Mathematics
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/cherry.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Cherry M. Labrada </h4>
                                <small class="text-uppercase">Administrative Assisstant II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science in Industrial Technology <br>
                                Major: Computer Technology
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/agnes.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Agnes D. Quilongquilong
                                </h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor in Commercial Science <br>
                                Major: Computer Science
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/cristy.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Cristy V. Abayon</h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Diploma in Professional Education <br>
                                Major: Technology and Livelihood Education
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jeffrey.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jeffrey M. Ruiz </h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Industrial Technology
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jelou.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jelou L. Ursal </h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science in Education <br>
                                Major: English
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/josephine.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Josephine Y. Asadon</h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Filipino
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/judy.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Judy Ann M. Inot</h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Social Studies
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/loraine.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Loraine D. Muñasque </h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Filipino
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/lucia.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Lucia R. Muñasque </h4>
                                <small class="text-uppercase"> Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Biological Science
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/lucille.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Lucille M. Sampaga </h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/mercedita.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Mercedita O. Bercero </h4>
                                <small class="text-uppercase">Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Filipino
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/michelle.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Michelle M. Toñacao </h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English</small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/milagros.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Milagros S.Florita</h4>
                                <small class="text-uppercase"> Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science in Educatiom <br>
                                Major: Mathematics
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/nelgen.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Nelgen L. Demapitan</h4>
                                <small class="text-uppercase"> Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Filipino
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/reslie.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Reslie Ann T. Dejito</h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondar Education <br>
                                Major: Mathematics
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/reynaldo.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Reynaldo M. Villegas</h4>
                                <small class="text-uppercase"> Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Màed <br>
                                Major: Supervision
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/richard.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Richard V. Canales</h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/rosendo.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Rosendo S. Ursal</h4>
                                <small class="text-uppercase">Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science in Industrial Education <br>
                                Major: Technical Architectural Drafting
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/rubie.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Rubie T. Canales</h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/winefreda.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Winefreda S. Ursal</h4>
                                <small class="text-uppercase">Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science in Education <br>
                                Major: Mathematics
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/alma.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Alma P. Dilao</h4>
                                <small class="text-uppercase">Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>BS in Agricultural Development Education <br>
                                Major: Agricultural Education
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/alyssa.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Alyssa Marie A. Opura </h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English
                            </small>

                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/charisma.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1"style="margin-top: 25px">Charisma B. Pino</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor's Degree in Secondary Education <br>
                                Major: TLE
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/cindy.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Cindy F. Sugarol</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science <br>
                                Major: Mathematics
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/delvie.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Delvie M. Opura</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor in Secondary Education <br>
                                Major: English
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/elisa.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Elisa B. Amores</h4>
                                <small class="text-uppercase">Teacher III</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>BS Biology, Bachelor of Secondary Education <br>
                                Major: Biology
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/ian.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Ian Vincent S.
                                    Quilongquilong</h4>
                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Science in Business Administration <br>
                                Major: Business Management
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/janyl.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Janyl Grace R. Barro</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Master of Arts in Vocational Education <br>
                                Major: TLE
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jasmin.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jasmin M. Sontousidad</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor in Secondary Education <br>
                                Major: English
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jesa.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jesa P. Catadman</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Mathematics
                            </small>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jesselyn.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jesselyn M. Booc</h4>

                                <small class="text-uppercase">Teacher I</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jezyl.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jezyl B. Muñasque</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: Mathematics
                            </small>


                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/jomae.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Jomae S. Sta. Rita</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Edducation <br>
                                Major: English
                            </small>



                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" type="image/jpg" src="{{ url('images/keth.jpg') }}"
                                alt="Image" src="" style="width: 90px; height: 110px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1" style="margin-top: 25px">Keth A. Villanueva</h4>
                                <small class="text-uppercase">Teacher II</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <small>Bachelor of Secondary Education <br>
                                Major: English
                            </small>



                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">MMSNHS Blog</h5>
                    <h1 class="mb-0">Articles from Our Blog Post</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Curva
                                        NHS</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>12 Oct.,
                                        2023</small>
                                </div>
                                <h4 class="mb-3">Trio Teachers Offer free lugaw to the Curvanians</h4>
                                <img class="w-100 img-fluid" style="height: 190px" type="image/jpg"
                                    src="{{ url('images/freelugaw.jpg') }}" alt="Image">
                                <p>The teachers of Curva National High School, Mr Reynaldo Villegas, Mrs. Elisa
                                    Amores and Mrs. Nelgen Demapitan served delicious lugaw and champorado to the
                                    fellow Curvanians who arrived early in the school...</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Cruva
                                        NHS</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>10 Oct.,
                                        2023</small>
                                </div>
                                <h4 class="mb-3">Cruva NHS Teachers receive new table for Table Tennis</h4>
                                <img class="w-100 img-fluid" style="height: 190px" type="image/jpg"
                                    src="{{ url('images/donation.jpg') }}" alt="Image">
                                <p>The teachers of Curva National High School received equipment for Table Tennis
                                    from the generous donor Mr. Guillermo Cabucos Jr. in preparation for the
                                    upcoming Intramurals and MSAA 2023.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>Curva
                                        NHS</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>05 Oct.,
                                        2023</small>
                                </div>
                                <h4 class="mb-3">Curva NHS celebrates World's Teahcers Day</h4>
                                <img class="w-100 img-fluid" style="height: 190px" type="image/jpg"
                                    src="{{ url('images/teachersday.jpg') }}" alt="Image">
                                <p>The SSLG of Curva National High School together with the rest of the Curvanians
                                    celebrated and prepared a funny and amazing program for the teachers in
                                    celebration of the World Teacher's Day.</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Start -->
    @endsection
