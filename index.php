<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/vendors.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>PSC - Home</title>
    <style>
        .partnership{width: 25vw; height: 20vh; }
    </style>
</head>

<body class="preloader-visible" data-barba="wrapper">
<!-- preloader start -->
<div class="preloader js-preloader">
    <div class="preloader__bg"></div>
</div>
<!-- preloader end -->


<main class="main-content  ">
    <!-- Navigation -->
    <header data-anim="fade" data-add-bg="bg-dark-1" class="header -type-1 js-header">
        <div class="header__container">
            <div class="row justify-between items-center">
                <div class="col-auto">
                    <div class="header-left">
                        <div class="header__logo ">
                            <a data-barba href="index">
                                <img src="assets/img/general/logo.svg" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-menu js-mobile-menu-toggle ">
                    <div class="header-menu__content">
                        <div class="mobile-bg js-mobile-bg"></div>
                        <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                            <a href="#" class="text-dark-1 ml-30">Contact Us</a>
                        </div>
                        <div class="menu js-navList">
                            <ul class="menu__nav text-white -is-active">
                                <li>
                                    <a data-barba href="home">Home</a>
                                </li>
                                <li>
                                    <a data-barba href="about-us">About Us</a>
                                </li>
                                <li>
                                    <a data-barba href="contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                            <div class="mobile-footer__number">
                                <div class="text-17 fw-500 text-dark-1">Call us</div>
                                <div class="text-17 fw-500 text-purple-1">+254 728 023 465</div>
                            </div>

                            <div class="lh-2 mt-10">
                                <div>Nairobi, Kenya</div>
                                <div>info@psctraining.co.ke</div>
                            </div>

                            <div class="mobile-socials mt-10">

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-instagram"></i>
                                </a>

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-linkedin"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                        <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                            <div class="icon-close text-dark-1 text-16"></div>
                        </div>
                    </div>
                    <div class="header-menu-bg"></div>
                </div>
                <div class="col-auto">
                    <div class="header-right d-flex items-center">
                        <div class="header-right__icons text-white d-flex items-center">
                            <div class="d-none xl:d-block ml-20">
                                <button class="text-white items-center" data-el-toggle=".js-mobile-menu-toggle">
                                    <i class="text-11 icon icon-mobile-menu"></i>
                                </button>
                            </div>
                        </div>
                        <div class="header-right__buttons d-flex items-center ml-30 md:d-none">
                            <a href="#" class="button -sm -white text-dark-1 ml-30">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content-wrapper  js-content-wrapper">
        <!-- Intro BG -->
        <section class="masthead -type-1 js-mouse-move-container">
            <div class="masthead__bg">
                <img src="assets/img/home-1/hero/bg.png" alt="image">
            </div>

            <div class="container">
                <div data-anim-wrap class="row y-gap-30 justify-between items-end">
                    <div class="col-xl-6 col-lg-6 col-sm-10">
                        <div class="masthead__content">
                            <h1 data-anim-child="slide-up" class="masthead__title">
                                Exceptional Training
                                with Top <span class="text-green-1 underline">Professionals</span>
                            </h1>
                            <p data-anim-child="slide-up delay-1" class="masthead__text">
                                Build skills with courses, certificates, and degrees online from<br>
                                world-class universities and companies.
                            </p>
                            <div data-anim-child="slide-up delay-2" class="masthead__buttons row x-gap-10 y-gap-10">
                                <div class="col-12 col-sm-auto">
                                    <a data-barba href="signup.html" class="button -md -purple-1 text-white">Join For Free</a>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <a data-barba href="courses-list-1.html" class="button -md -outline-green-1 text-green-1">Find Courses</a>
                                </div>
                            </div>
                            <div data-anim-child="slide-up delay-3" class="masthead-info row y-gap-15 sm:d-none">

                                <div class="masthead-info__item d-flex items-center text-white">
                                    <div class="masthead-info__icon mr-10">
                                        <img src="assets/img/masthead/icons/1.svg" alt="icon">
                                    </div>
                                    <div class="masthead-info__title lh-1">Over 12 million students</div>
                                </div>

                                <div class="masthead-info__item d-flex items-center text-white">
                                    <div class="masthead-info__icon mr-10">
                                        <img src="assets/img/masthead/icons/2.svg" alt="icon">
                                    </div>
                                    <div class="masthead-info__title lh-1">More than 60,000 courses</div>
                                </div>

                                <div class="masthead-info__item d-flex items-center text-white">
                                    <div class="masthead-info__icon mr-10">
                                        <img src="assets/img/masthead/icons/3.svg" alt="icon">
                                    </div>
                                    <div class="masthead-info__title lh-1">Learn anything online</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-5" class="col-xl-6 col-lg-6">
                        <div class="masthead-image">
                            <div class="masthead-image__el1">
                                <img class="js-mouse-move" data-move="40" src="assets/img/masthead/1.png" alt="image">

                                <div data-move="30" class="lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                                    <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                                        <img src="assets/img/masthead/1.svg" alt="icon">
                                    </div>
                                    <div class="ml-20">
                                        <div class="text-orange-1 text-16 fw-500 lh-1">3.000 +</div>
                                        <div class="mt-3">Free Courses</div>
                                    </div>
                                </div>
                            </div>

                            <div class="masthead-image__el2">
                                <img class="js-mouse-move" data-move="70" src="assets/img/masthead/2.png" alt="image">

                                <div data-move="60" class="lg:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                                    <img src="assets/img/masthead/4.png" alt="icon">
                                    <div class="ml-20">
                                        <div class="text-dark-1 text-16 fw-500 lh-1">Ali Tufan</div>
                                        <div class="mt-3">UX/UI Designer</div>
                                        <div class="d-flex x-gap-5 mt-3">
                                            <div>
                                                <div class="icon-star text-yellow-1 text-11"></div>
                                            </div>
                                            <div>
                                                <div class="icon-star text-yellow-1 text-11"></div>
                                            </div>
                                            <div>
                                                <div class="icon-star text-yellow-1 text-11"></div>
                                            </div>
                                            <div>
                                                <div class="icon-star text-yellow-1 text-11"></div>
                                            </div>
                                            <div>
                                                <div class="icon-star text-yellow-1 text-11"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="masthead-image__el3">
                                <img class="js-mouse-move" data-move="40" src="assets/img/masthead/3.png" alt="image">

                                <div data-move="30" class="shadow-4 img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                                    <div class="img-el__side">
                                        <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                                            <img src="assets/img/masthead/2.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="text-purple-1 text-16 fw-500 lh-1">Congrats!</div>
                                        <div class="mt-3">Your Admission Completed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <svg class="svg-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="svg-waves__parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" />
                    <use xlink:href="#gentle-wave" x="48" y="3" />
                    <use xlink:href="#gentle-wave" x="48" y="5" />
                    <use xlink:href="#gentle-wave" x="48" y="7" />
                </g>
            </svg>
        </section>
        <!-- Partners -->
        <section class="layout-pt-lg layout-pb-md">
            <div data-anim-wrap class="container">
                <div class="row justify-center">
                    <div class="col text-center">
                        <p class="text-lg text-dark-1">In Partnership With</p>
                    </div>
                </div>

                <div class="row y-gap-30 sm:justify-start items-center pt-60 md:pt-50">
                    <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-3 col-sm-4 col-6">
                        <div class="d-flex justify-center items-center px-4">
                            <img class="partnership" src="assets/img/psc/partner-1-gpp.png" alt="clients image">
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-3 col-sm-4 col-6">
                        <div class="d-flex justify-center items-center px-4">
                            <img class="partnership" src="assets/img/psc/partner-2-alive365.jpg" alt="clients image">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About-Us -->
        <section class="layout-pt-md layout-pb-md">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title ">About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-60 lg:pt-40">
                    <div class="col-12">
                        <p>Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
                        <p class="mt-20">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery -->
        <section class="layout-pt-md layout-pb-lg">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title ">Training Events</h2>
                        </div>
                    </div>
                </div>

                <div class="pt-50 js-tabs">
                    <div class="row y-gap-30">
                        <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                            <a href="#" class="blogCard -type-1">
                                <div class="blogCard__image">
                                    <img class="w-1/1 rounded-8" src="assets/img/blog-list/1.png" alt="image">
                                </div>
                                <div class="blogCard__content mt-20">
                                    <div class="blogCard__category">EDUCATION</div>
                                    <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Eco-Education in Our Lives: We Can Change the Future</h4>
                                    <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                            <a href="#" class="blogCard -type-1">
                                <div class="blogCard__image">
                                    <img class="w-1/1 rounded-8" src="assets/img/blog-list/2.png" alt="image">
                                </div>
                                <div class="blogCard__content mt-20">
                                    <div class="blogCard__category">EDUCATION</div>
                                    <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Engendering a culture of professional development</h4>
                                    <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                            <a href="#" class="blogCard -type-1">
                                <div class="blogCard__image">
                                    <img class="w-1/1 rounded-8" src="assets/img/blog-list/3.png" alt="image">
                                </div>
                                <div class="blogCard__content mt-20">
                                    <div class="blogCard__category">EDUCATION</div>
                                    <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">Increasing engagement with Instagram</h4>
                                    <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <section class="layout-pt-lg layout-pb-lg bg-purple-1">
            <div class="container">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title text-green-1">Testimonials</h2>
                        </div>
                    </div>
                </div>

                <div data-anim-wrap class="js-section-slider pt-50" data-gap="30" data-pagination data-slider-cols="base-3 xl-3 lg-2 md-2 sm-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div data-anim-child="slide-left delay-1" class="testimonials -type-1">
                                <div class="testimonials__content">
                                    <h4 class="testimonials__title">Great Work</h4>
                                    <p class="testimonials__text"> “I think Educrat is the best theme I ever seen this year. Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance”</p>

                                    <div class="testimonials-footer">
                                        <div class="testimonials-footer__image">
                                            <img src="assets/img/testimonials/1.png" alt="image">
                                        </div>

                                        <div class="testimonials-footer__content">
                                            <div class="testimonials-footer__title">Courtney Henry</div>
                                            <div class="testimonials-footer__text">Web Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-anim-child="slide-left delay-2" class="testimonials -type-1">
                                <div class="testimonials__content">
                                    <h4 class="testimonials__title">Great Work</h4>
                                    <p class="testimonials__text"> “I think Educrat is the best theme I ever seen this year. Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance”</p>

                                    <div class="testimonials-footer">
                                        <div class="testimonials-footer__image">
                                            <img src="assets/img/testimonials/2.png" alt="image">
                                        </div>

                                        <div class="testimonials-footer__content">
                                            <div class="testimonials-footer__title">Ronald Richards</div>
                                            <div class="testimonials-footer__text">President of Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex x-gap-20 items-center justify-end pt-60 lg:pt-40">
                        <div class="col-auto">
                            <button class="button -outline-white text-white size-50 rounded-full d-flex justify-center items-center js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <button class="button -outline-white text-white size-50 rounded-full d-flex justify-center items-center js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Listing -->
        <section class="layout-pt-lg layout-pb-lg bg-beige-1">
            <div data-anim-wrap class="container">
                <div class="row y-gap-30 justify-between items-center">
                    <div class="col-xl-5 col-lg-6 col-md-10 order-2 order-lg-1">
                        <div class="about-content">
                            <h2 data-anim-child="slide-up delay-1" class="about-content__title"><span>Learn</span> new skills when and where you like.</h2>
                            <p data-anim-child="slide-up delay-2" class="about-content__text">Use the list below to bring attention to your product’s key<br> differentiator.</p>
                            <div data-anim-child="slide-up delay-3" class="y-gap-20 pt-30">

                                <div class="d-flex items-center">
                                    <div class="about-content-list__icon">
                                        <i class="icon" data-feather="check"></i>
                                    </div>
                                    <div class="about-content-list__title">Hand-picked authors</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="about-content-list__icon">
                                        <i class="icon" data-feather="check"></i>
                                    </div>
                                    <div class="about-content-list__title">Easy to follow curriculum</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="about-content-list__icon">
                                        <i class="icon" data-feather="check"></i>
                                    </div>
                                    <div class="about-content-list__title">Free courses</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="about-content-list__icon">
                                        <i class="icon" data-feather="check"></i>
                                    </div>
                                    <div class="about-content-list__title">Money-back guarantee</div>
                                </div>

                            </div>

                            <div data-anim-child="slide-up delay-4" class="d-inline-block mt-30">
                                <a href="signup.html" class="button -md -dark-1 text-white">Join Free</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6 order-1 order-lg-2">
                        <div data-anim-child="slide-up delay-5" class="about-image">
                            <img src="assets/img/about/1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team -->
        <section class="layout-pt-lg layout-pb-lg">
            <div data-anim-wrap class="container">
                <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
                    <div class="col-lg-6">
                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title ">Permanent Success Consultancy Professionals</h2>
                            <p class="sectionTitle__text ">Our Team of Professional Trainers</p>
                        </div>
                    </div>
                </div>
                <div class="row y-gap-30 pt-50">
                    <div class="col-lg-4 col-sm-6">
                        <div data-anim-child="slide-left delay-2" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image">
                                <img src="assets/img/team/1.png" alt="image">
                                <div class="teamCard__socials">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamCard__content">
                                <h4 class="teamCard__title">Floyd Miles</h4>
                                <p class="teamCard__text">President of Sales</p>

                                <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12">692 Students</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-play text-light-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12">15 Course</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div data-anim-child="slide-left delay-3" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image">
                                <img src="assets/img/team/2.png" alt="image">
                                <div class="teamCard__socials">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamCard__content">
                                <h4 class="teamCard__title">Cameron Williamson</h4>
                                <p class="teamCard__text">Web Designer</p>

                                <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12">692 Students</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-play text-light-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12">15 Course</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div data-anim-child="slide-left delay-4" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image">
                                <img src="assets/img/team/3.png" alt="image">
                                <div class="teamCard__socials">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamCard__content">
                                <h4 class="teamCard__title">Brooklyn Simmons</h4>
                                <p class="teamCard__text">Dog Trainer</p>

                                <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12">692 Students</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="icon-play text-light-1 text-11 mr-5"></div>
                                            <div class="text-14 lh-12">15 Course</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="footer -type-1 bg-dark-1 -green-links">
            <div class="container">
                <div class="footer-header">
                    <div class="row y-gap-20 justify-between items-center">
                        <div class="col-auto">
                            <div class="footer-header__logo">
                                <img src="assets/img/footer/footer-logo.svg" alt="logo">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="footer-header-socials">
                                <div class="footer-header-socials__title text-white">Follow us on social media</div>
                                <div class="footer-header-socials__list">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-columns">
                    <div class="row y-gap-30">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="text-17 fw-500 text-white uppercase mb-25">Menus</div>
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="home">Home</a>
                                <a href="about-us">About Us</a>
                                <a href="contact">Contact</a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="text-17 fw-500 text-white uppercase mb-25">GET IN TOUCH</div>
                            <div class="footer-columns-form">
                                <div>We don’t send spam so don’t worry.</div>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email...">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-30 border-top-light-15">
                    <div class="row justify-between items-center y-gap-20">
                        <div class="col-auto">
                            <div class="d-flex items-center h-100 text-white">
                                © <?php echo date('Y') ?> Permanent Success Consultancy. All Rights Reserved.
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                                <div>
                                    <div class="d-flex x-gap-15 text-white">
                                        <a href="#">Help</a>
                                        <a href="#">Privacy Policy</a>
                                        <a href="#">Cookie Notice</a>
                                        <a href="#">Security</a>
                                        <a href="#">Terms of Use</a>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="button px-30 h-50 -dark-6 rounded-200 text-white">
                                        <i class="icon-worldwide text-20 mr-15"></i><span class="text-15">English</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>

<!-- JavaScript -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="assets/js/vendors.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>