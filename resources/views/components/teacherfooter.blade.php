  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-justify h-100 bg-primary p-4">
                    <a href="/teacher" class="navbar-brand">
                        <img class="img-fluid rounded m-2" src="images/curva_logo.png"
                      style="width: 80px; height: 80px;">
                    </a>
                    <p class="mt-3 mb-4" style =" text-align: justify;">Martin M. Salimbangon National High School aspires to nurture learners, guiding them to unlock their full potential as exceptional Filipino citizens and patriots. The goal is to cultivate graduates who passionately serve their country, contributing to its improvement and eagerly promoting new facets of our native land.</p>
                    {{-- <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Curva Medellin, Cebu</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">303026@deped.gov.ph</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">09759736671</p>
                        </div>
                        <div class="d-flex mt-4">
                            {{-- <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a> --}}
                            <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/profile.php?id=100090401474076"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            {{-- <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i
                                    class="fab fa-instagram fw-normal"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="/teacher"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="/teacher/about"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="/teacher/offers"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Offers</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="/teacher/dashboard"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Requests</a>
                            <a class="text-light mb-2" href="/teacher/schedules"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Schedule</a>
                            <a class="text-light mb-2" href="/teacher/postannouncement"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Post Updates</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="/teacher">Matin M. Salimbangon</a>.
                        All Rights Reserved.
                        Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="scrollToTop" class="btn btn-lg btn-warning btn-lg-square rounded"><i
        class="bi bi-arrow-up"></i></a>

<script>
    var scrollToTopButton = document.getElementById("scrollToTop");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 300) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    scrollToTopButton.addEventListener("click", scrollToTop);
</script>
