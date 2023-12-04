@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white" style="margin-top: 20px">Offers</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Offers</a>
            </div>
        </div>
    </div>

    {{-- <!-- Departments Start --> --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Deparments</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6  wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 bg-white rounded shadow position-relative"
                        style="z-index: 1;">

                        <h4 class="mb-3"><br> HUMSS</h4>
                        <p class="m-0"><br> Humanities and Social Sciences is a strand offered to senior high
                            school
                            students under the Academics track. The HUMSS Senior High School strand is designed for
                            students who intend to take up journalism, communication arts, liberal arts, education, and
                            other social-science related courses in college. Because these courses revolve heavily
                            around interacting with other people, the Senior High School HUMSS strand is all about
                            improving students’ reading, writing, and speaking skills.
                            <br><br>
                        <h5>Advantages of the HUMSS Strand </h5><br>
                        The HUMSS strand shapes senior high school students with the necessary skills and knowlege on
                        humanities and social sciences like psychology, sociology, and more. Our students reap the
                        benefit of a HUMSS strand by developing skills like communication, open-mindedness, and a good
                        understanding of the sociological and cultural nuances of the world around them. From there,
                        they can examine and analyze how these shape and mold society's ideas and ideologies in media,
                        art, politics, and more. The senior high school HUMSS strand equips students with additional
                        benefits, including: <br><br>
                        - Instilling values of empathy and understanding, which are essential traits for establishing the
                        rapport required to pursue a successful career in professions available to HUMSS strand
                        graduates. <br><br>
                        - Promotes a sense of confidence in voicing out one's opinions and ideas in an articulate,
                        logical, and concise manner through the various projects and tasks in the different HUMSS
                        courses. <br><br>
                        - Opens up a world of job opportunities, as HUMSS strand graduates can find many applications and
                        areas for potential career development in various industries, including scientific, artistic,
                        legislative, and corporate careers.

                        <br><br>
                        HUMSS is heavily-centered on research and will require students to read, write, and present
                        multiple papers throughout senior high school. Students under this strand will be exposed to
                        eye-opening subjects such as world religions, Philippine and world literature, political and
                        community development specialization subjects, and more.
                        <br><br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6  wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 bg-white rounded shadow position-relative"
                        style="z-index: 1;"">
                        <h4 class="mb-3">TVL</h4>
                        <p class="m-0"><br> The senior high school TVL track is designed for students who wish to
                            start working right after they graduate from senior high school. These vocational courses
                            give students the skills and knowledge they need to get the certifications necessary for
                            work. The TVL track is ideal for those who intend to work abroad as skilled workers. The
                            Technical-Vocational-Livelihood track is designed to prepare senior high school students for
                            employment after graduation.
                            <br><br>
                            The TVL strand courses gives students; Good preparation for a career, as graduates of vocation
                            courses have a higher employment as compared to other courses; A smoother transition into their
                            chosen career; Relevant skills they will need for employment in less time; Hands-on training to
                            ensure future success.. <br><br>
                            The program focuses on the principles and practices underlying the analysis, design,
                            implementation, and management of information technology and preparation in health, social and
                            other community development services, business, hotel, and restaurant services. After graduating
                            from this track, relevant courses in college are also available. <br><br>
                        <h5>Advantages of the TVL Track</h5> <br>
                        The TVL track gives senior high school students access to vocational courses, as not all students
                        want to or can afford to go to college after senior high school. The TVL strand courses gives
                        students:
                        <br><br>
                        - Good preparation for a career, as graduates of vocation courses have a higher employment as
                        compared to other courses. <br>
                        - A smoother transition into their chosen career. <br>
                        - Relevant skills they will need for employment in less time <br>
                        - Hands-on training to ensure future success

                        <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- Department End --> --}}


    {{-- <!-- Offers End --> --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Offers</h5>
                    </div>

                </div>
            </div>
        </div>

        <div class="card mb-4" style="max-width: 100vh; ">
            <div class="row no-gutters">
                <div class="text-center">
                    <img src="{{ url('images/offers.jpg') }}" class="rounded w-100" alt="...">
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">HUMSS</h5>
                        <br>
                        <p class="card-text">The HUMSS strand curriculum was developed to equip senior high school looking
                            to pursue more sociological and artistic careers in their future with the necessary skills and
                            confidence. Students enrolled in HUMSS strand courses can expect to: <br><br>
                            - Acquire the appropriate mindset and theorems for understanding the psyche and behavior of
                            people across different backgrounds. <br>
                            - Build their confidence in articulating their various ideas and expressing themselves through
                            both written and spoken language in both scholarly and secular work. <br>
                            - Provide them with the means to gaining th enecessary rapport with their future patients,
                            clients, audiences, and other stakeholders depending on their profession of choice. <br><br>
                        <h5>Possible College Courses for HUMSS </h5><br><br>
                        The HUMSS strand prepares students for anumber of college courses. Here are some of the HUMSS
                        courses in college students can pursue: <br><br>
                        - Bachelor of Arts in Psychology - Bachelor of Arts in Psychology exposes students to several fields
                        in psychology including abnormal, physiological, and development psychology. AB Psychology requires
                        a lot of research and hands-on activities as training for future careers such as counselors, social
                        workers, and therapists. <br><br>
                        - Bachelor of Science in Psychology- Bachelor of Science Psychology revolves around human sexuality,
                        gender, child and adult psychology, and personality theory. Unlike the AB Psychology course, the BS
                        Psychology course focuses more on biology and chemistry. The BS Psychology course can serve as a
                        pre-medicine course. <br><br>
                        - Bachelor of Science in Technical Communication - The Bachelor of Science in Technical
                        Communication program puts on helping others understand valuable information and teaches
                        communication knowledge. This program teaches students to turn detailed data into actionable
                        information. <br><br>
                        - Bachelor of Science in Education Technology - Students of the Bachelor of Science in Education
                        Technology program will learn about general education, interactive media, educational psychology,
                        and transformational learning. <br><br>
                        <h5>Possible Career Paths with the HUMSS Strand</h5> <br>
                        Students enrolled in the HUMSS strand senior high school can make meaningful contributions to their
                        workplace and community in the following professions: <br><br>
                        - Psychologists <br>
                        - Therapists <br>
                        - Doctors <br>
                        - Counselors <br>
                        - Lawyers <br>
                        - Reporters <br>
                        - Journalists <br>
                        - Writers <br>
                        - College Professors <br>
                        - Teachers <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4" style="max-width: 100vh;">
            <div class="row no-gutters">
                <div class="text-center">
                    <img src="{{ url('images/hairdressing.jpg') }}" class="rounded w-100" alt="...">
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">TVL - Hairdressing</h5>
                        <br>
                        <p class="card-text">Training as a hairdresser gives you strong career prospects and a high level of
                            job security. Skills in this exciting and fast-growing industry are always in demand. And this
                            applies across the world. Being a hairdresser means you can work almost anywhere, giving the
                            opportunity to travel if you wish. Whichever path you choose, you’ll benefit from a varied and
                            rewarding career. Hairdressing gives you the chance to interact with many different people and
                            to showcase your creative abilities. No two days are the same in this profession, and there are
                            always opportunities to learn and grow. <br><br>
                            - Hairdressers cut, wash, colour, style, straighten and blow dry their customers' hair. They
                            also provide treatments for hair and scalp conditions. <br>
                            - Work is in hair dressing salons, however some hairdressers work from their own homes or travel
                            to client homes. <br>
                            - Suitable for people who enjoy connecting with others, have good near-vision and a steady hand.
                            Good active listening skills are important. <br>
                        <h5>Possible College Courses for TVL- Home Economics </h5><br>
                        - BS Business Education <br>
                        - BS Culinary Arts <br>
                        - BS Food Technology <br>
                        - BS in Hospitality and Restaurant Management <br>
                        - BS Interior Designing <br>
                        - BS Nutrition <br>
                        - BS in Tourism Management <br>
                        <h5>Possible Career Paths with the Home Economics Strand</h5> <br>
                        - Baker <br>
                        - Barista <br>
                        - Caregiver <br>
                        - Chambermaid<br>
                        - Chef <br>
                        - Clerk <br>
                        - Hospitality Manager <br>
                        - Interior Designer <br>
                        - Make-up Artist <br>
                        - Nutritionist and Dietitian <br>
                        - Stylist <br>
                        - Therapist <br>
                        - Tour Guide> <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Offers End --> --}}
@endsection
