<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/base.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/css/vendors.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <title>Educrat</title>
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
                <section class="page-header -type-4 bg-beige-1">
                    <div class="container">
                        <div class="page-header__content">
                            <div class="row">
                                <div class="col-auto">
                                    <div data-anim="slide-up delay-1">
                                        <h1 class="page-header__title">Contact Us</h1>
                                    </div>

                                    <div data-anim="slide-up delay-2">
                                        <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="layout-pt-md layout-pb-lg">
                    <div data-anim-wrap class="container">
                        <div class="row y-gap-50 justify-between">
                            <div class="col-xl-5 col-lg-6">
                                <h3 class="text-24 lh-1 fw-500">Our offices</h3>
                                <div class="row y-gap-30 pt-40">

                                    <div class="col-sm-6">
                                        <div class="text-20 fw-500 text-dark-1">London</div>
                                        <div class="y-gap-10 pt-15">
                                            <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                                            <a href="#" class="d-block">+(1) 123 456 7890</a>
                                            <a href="#" class="d-block">hi@educrat.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="text-20 fw-500 text-dark-1">Paris</div>
                                        <div class="y-gap-10 pt-15">
                                            <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                                            <a href="#" class="d-block">+(1) 123 456 7890</a>
                                            <a href="#" class="d-block">hi@educrat.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="text-20 fw-500 text-dark-1">Los Angeles</div>
                                        <div class="y-gap-10 pt-15">
                                            <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                                            <a href="#" class="d-block">+(1) 123 456 7890</a>
                                            <a href="#" class="d-block">hi@educrat.com</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
                                    <h3 class="text-24 fw-500">Send a Message</h3>
                                    <p class="mt-25">Neque convallis a cras semper auctor. Libero id faucibus nisl<br> tincidunt egetnvallis.</p>

                                    <form class="contact-form row y-gap-30 pt-60 lg:pt-40" action="#">
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Name</label>
                                            <input type="text" name="title" placeholder="Name...">
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                                            <input type="text" name="title" placeholder="Email...">
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Message...</label>
                                            <textarea name="comment" placeholder="Message" rows="8"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" id="submit" class="button -md -purple-1 text-white">
                                                Send Message
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="layout-pt-lg layout-pb-lg bg-light-4">
                    <div class="container">
                        <div class="row justify-center text-center">
                            <div class="col-xl-8 col-lg-9 col-md-11">

                                <div class="sectionTitle ">

                                    <h2 class="sectionTitle__title ">Frequently Asked Questions.</h2>

                                    <p class="sectionTitle__text ">Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

                                </div>


                                <div class="accordion -block text-left pt-60 lg:pt-40 js-accordion">

                                    <div class="accordion__item">
                                        <div class="accordion__button">
                                            <div class="accordion__icon">
                                                <div class="icon" data-feather="plus"></div>
                                                <div class="icon" data-feather="minus"></div>
                                            </div>
                                            <span class="text-17 fw-500 text-dark-1">Do you offer discounts for students?</span>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button">
                                            <div class="accordion__icon">
                                                <div class="icon" data-feather="plus"></div>
                                                <div class="icon" data-feather="minus"></div>
                                            </div>
                                            <span class="text-17 fw-500 text-dark-1">Do you offer special pricing for big teams?</span>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button">
                                            <div class="accordion__icon">
                                                <div class="icon" data-feather="plus"></div>
                                                <div class="icon" data-feather="minus"></div>
                                            </div>
                                            <span class="text-17 fw-500 text-dark-1">What is the past experience of your teachers?</span>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button">
                                            <div class="accordion__icon">
                                                <div class="icon" data-feather="plus"></div>
                                                <div class="icon" data-feather="minus"></div>
                                            </div>
                                            <span class="text-17 fw-500 text-dark-1">What is the course refund policy?</span>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button">
                                            <div class="accordion__icon">
                                                <div class="icon" data-feather="plus"></div>
                                                <div class="icon" data-feather="minus"></div>
                                            </div>
                                            <span class="text-17 fw-500 text-dark-1">Do you offer discounts for non-profits?</span>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
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