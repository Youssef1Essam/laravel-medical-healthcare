    <!DOCTYPE html>
    <html>

    <head>
        <title>Medical Healthcare</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- script
            ================================================== -->
        <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>
        </head>

    <body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">

        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <section id="intro" class="position-relative overflow-hidden">
        <div class="banner">
        <img src="images/banner.png" alt="banner" class="img-fluid">
        <div class="container">
            <div class="banner-content position-absolute padding-large">
            <span
                class="sub-heading bg-light py-2 px-4 mb-4 border-radius-30 text-uppercase d-inline-block text-cadet-blue fw-medium">
                <svg class="heart primary-color me-2" width="20" height="20">
                <use xlink:href="#heart" />
                </svg>Live your life
            </span>
            <h1 class="display-3 fw-bold text-dark">We Care About Your Health</h1>
            <p class="mt-3 mb-4">Vitae aliquam vestibulum elit adipiscing massa diam in dignissim. Risus tellus libero
                elementum aliquam etiam. Lectus adipiscing est auctor mi quisque nunc non viverra est.</p>
            <a href="/booking" class="btn btn-medium btn-primary btn-pill text-uppercase">Book Now</a>
            </div>
        </div>
        </div>
    </section>

    <section id="about-us" class="padding-large">
        <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-info text-center">
                <div
                class="counter-number text-primary-500 display-2 fw-semibold d-flex align-items-center justify-content-center">
                <span class="counter-prefix">+</span>
                <h5 class="timer display-4 fw-bold m-0" data-to="5120" data-speed="8000">5120</h5>
                </div>
                <p class="counter-description">Happy Patients</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-info text-center">
                <div
                class="counter-number text-primary-500 display-2 fw-semibold d-flex align-items-center justify-content-center">
                <span class="counter-prefix">+</span>
                <h5 class="timer display-4 fw-bold m-0" data-to="5120" data-speed="8000">26</h5>
                </div>
                <p class="counter-description">Total Branches</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-info text-center">
                <div
                class="counter-number text-primary-500 display-2 fw-semibold d-flex align-items-center justify-content-center">
                <span class="counter-prefix">+</span>
                <h5 class="timer display-4 fw-bold m-0" data-to="5120" data-speed="8000">53</h5>
                </div>
                <p class="counter-description">Senior Doctors</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-info text-center">
                <div
                class="counter-number text-primary-500 display-2 fw-semibold d-flex align-items-center justify-content-center">
                <span class="counter-prefix">+</span>
                <h5 class="timer display-4 fw-bold m-0" data-to="5120" data-speed="8000">10</h5>
                </div>
                <p class="counter-description">Years Experience</p>
            </div>
            </div>

        </div>
        </div>
    </section>

    <!-- Services start -->
    <section id="our-services"
        style="background-image: url(images/services-bg.jpg); background-repeat: no-repeat; background-position: center; background-position: top;">
        <div class="container">
        <div class="row">

            <div class="display-header text-light d-flex flex-wrap justify-content-between padding-medium">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <h2 class="text-light">Our Best Services For Your Solution</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="text-light">Vitae aliquam vestibulum elit adipiscing massa diam in dignissim. Risus tellus libero
                elementum aliquam etiam. Lectus adipiscing est auctor mi quisque nunc non viverra est.</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box p-4 bg-light border-radius-10 text-center">
                <div class="icon-box-icon">
                <svg class="home-thermometer mt-3 primary-color-500" width="50" height="50">
                    <use xlink:href="#home-thermometer" />
                </svg>
                </div>
                <div class="icon-box-content">
                <h3 class="card-title py-2">General Practitioners</h3>
                <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box p-4 bg-light border-radius-10 text-center">
                <div class="icon-box-icon">
                <svg class="pregnant-woman mt-3 primary-color-500" width="50" height="50">
                    <use xlink:href="#pregnant-woman" />
                </svg>
                </div>
                <div class="icon-box-content">
                <h3 class="card-title py-2">Pregnancy Support</h3>
                <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box p-4 bg-light border-radius-10 text-center">
                <div class="icon-box-icon">
                <svg class="nutrition mt-3 primary-color-500" width="50" height="50">
                    <use xlink:href="#nutrition" />
                </svg>
                </div>
                <div class="icon-box-content">
                <h3 class="card-title py-2">Nutritional Support</h3>
                <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box p-4 bg-light border-radius-10 text-center">
                <div class="icon-box-icon">
                <svg class="local-pharmacy mt-3 primary-color-500" width="50" height="50">
                    <use xlink:href="#local-pharmacy" />
                </svg>
                </div>
                <div class="icon-box-content">
                <h3 class="card-title py-2">Pharmaceutical care</h3>
                <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                </div>
            </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Services end -->


    <!-- Customer start -->
    <section id="testimonial"
        style="background-image: url(images/review-bg.jpg); background-repeat: no-repeat; background-position: right; height: 595px;">
        <div class="container">
        <div class="row align-items-center padding-medium">
            <div class="col-lg-5 col-md-4">
            <div class="image-holder">
                <img src="images/review-image.png" alt="review" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-7 col-md-8">
            <div class="review-content">
                <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper position-relative">
                    <div class="swiper-slide">
                    <div class="review-item">
                        <svg class="quote quote-up primary-color-500 position-absolute" width="80" height="70">
                        <use xlink:href="#quote-up" />
                        </svg>
                        <blockquote class="fs-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about
                            you. Lorem, Quos saepe suscipit, nemo dolore sapiente!</p>
                        <div class="author-detail">
                            <div class="name fs-3 fw-bold text-dark">James Rodrigo</div>
                            <span class="text-cadet-blue text-uppercase">Customer</span>
                        </div>
                        </blockquote>
                        <svg class="quote quote-down primary-color-500 position-absolute" width="80" height="70">
                        <use xlink:href="#quote-down" />
                        </svg>
                    </div>
                    </div><!--swiper-slide-->
                    <div class="swiper-slide">
                    <div class="review-item">
                        <svg class="quote quote-up primary-color-500 position-absolute" width="80" height="70">
                        <use xlink:href="#quote-up" />
                        </svg>
                        <blockquote class="fs-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about
                            you. Lorem, Quos saepe suscipit, nemo dolore sapiente!</p>
                        <div class="author-detail">
                            <div class="name fs-3 fw-bold text-dark">Jenny Rose</div>
                            <span class="text-cadet-blue text-uppercase">Customer</span>
                        </div>
                        </blockquote>
                        <svg class="quote quote-down primary-color-500 position-absolute" width="80" height="70">
                        <use xlink:href="#quote-down" />
                        </svg>
                    </div>
                    </div><!--swiper-slide-->
                    <div class="swiper-slide">
                    <div class="review-item">
                        <svg class="quote quote-up primary-color-500 position-absolute" width="80" height="70">
                        <use xlink:href="#quote-up" />
                        </svg>
                        <blockquote class="fs-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about
                            you. Lorem, Quos saepe suscipit, nemo dolore sapiente!</p>
                        <div class="author-detail">
                            <div class="name fs-3 fw-bold text-dark">Wednesday Marigold</div>
                            <span class="text-cadet-blue text-uppercase">Customer</span>
                        </div>
                        </blockquote>
                        <svg class="quote quote-down primary-color-500 position-absolute" width="80" height="70">
                        <use xlink:href="#quote-down" />
                        </svg>
                    </div>
                    </div><!--swiper-slide-->
                </div>
                <div class="swiper-pagination text-left"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Customer end -->

    <!-- team start -->
    <section id="our-team" class="padding-large">
        <div class="container">
        <div class="row">
            <div class="display-header mb-5">
            <h2 class="display-5 fw-bold text-dark">Our Team</h2>
            </div>
            <div class="team-content">
            <div class="swiper team-swiper">
                <div class="swiper-wrapper pb-5">

                <div class="swiper-slide">
                    <div class="team-member d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="image-holder me-4 mb-4">
                        <img src="images/OIP (1).jpeg" alt="team member" class="border-radius-10 img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="member-info">
                        <h3 class="fs-4 fw-bold text-dark">Dr.Taylor jack</h3>
                        <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">Pediatrician</span>
                        <p>Dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum habitant fames ac
                            penatibus et.</p>
                        <ul class="social-links list-unstyled d-flex">
                            <li>
                            <a href="#">
                                <svg class="facebook text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#facebook" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="twitter text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#twitter" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="instagram text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#instagram" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="youtube text-primary-500" width="30" height="30">
                                <use xlink:href="#youtube" />
                                </svg>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-member d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="image-holder me-4 mb-4">
                        <img src="images/team-item1.jpg" alt="team member" class="border-radius-10 img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="member-info">
                        <h3 class="fs-4 fw-bold text-dark">Dr. Zachary Brown</h3>
                        <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">Cardiologist</span>
                        <p>Dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum habitant fames ac
                            penatibus et.</p>
                        <ul class="social-links list-unstyled d-flex">
                            <li>
                            <a href="#">
                                <svg class="facebook text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#facebook" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="twitter text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#twitter" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="instagram text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#instagram" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="youtube text-primary-500" width="30" height="30">
                                <use xlink:href="#youtube" />
                                </svg>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-member d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="image-holder me-4 mb-4">
                        <img src="images/OIP (2).jpeg" alt="team member" class="border-radius-10 img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="member-info">
                        <h3 class="fs-4 fw-bold text-dark">Dr.Davies alonso</h3>
                        <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">Gynecologist</span>
                        <p>Dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum habitant fames ac
                            penatibus et.</p>
                        <ul class="social-links list-unstyled d-flex">
                            <li>
                            <a href="#">
                                <svg class="facebook text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#facebook" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="twitter text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#twitter" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="instagram text-primary-500 me-4" width="30" height="30">
                                <use xlink:href="#instagram" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <svg class="youtube text-primary-500" width="30" height="30">
                                <use xlink:href="#youtube" />
                                </svg>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
            <!-- team-content -->
        </div>
        </div>
    </section>
    <!-- team end  -->


    <!-- brand-collection start -->

    <section id="brand-collection" class="padding-large pt-4 overflow-hidden">
        <div class="container">
        <div class="row justify-content-between">
            <div class="col pb-3">
            <img src="images/betael.png" alt="brand" class="top-image">
            <img src="images/betael1.png" alt="brand" class="bottom-image">
            </div>
            <div class="col pb-3">
            <img src="images/healer.png" alt="brand" class="top-image">
            <img src="images/healer1.png" alt="brand" class="bottom-image">
            </div>
            <div class="col pb-3">
            <img src="images/lifetrace.png" alt="brand" class="top-image">
            <img src="images/lifetrace1.png" alt="brand" class="bottom-image">
            </div>
            <div class="col pb-3">
            <img src="images/medcare.png" alt="brand" class="top-image">
            <img src="images/medcare1.png" alt="brand" class="bottom-image">
            </div>
            <div class="col">
            <img src="images/soven.png" alt="brand" class="top-image">
            <img src="images/soven1.png" alt="brand" class="bottom-image">
            </div>
        </div>
        </div>
    </section>

    <!-- brand-collection end -->

    <?php echo $__env->make('includes.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('js/jquery-1.11.0.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </body>

    </html>
<?php /**PATH C:\xampp\htdocs\medical_healthcare\resources\views/welcome.blade.php ENDPATH**/ ?>