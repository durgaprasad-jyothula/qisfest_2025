<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home One || envens || envens HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="envens HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/envens-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/envens.css" />
    <link rel="stylesheet" href="assets/css/envens-responsive.css" />
</head>

<body>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        
    <?php
    include('header.php');
    ?>

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <!-- <div class="main-slider__bg"
                            style="background-image: url(assets/images/backgrounds/bg1.png);">
                        </div> -->
                        <div class="main-slider__img">
                            <img src="assets/images/bg22.png" alt="">
                        </div>
                        <!-- <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div> -->
                        <div class="main-slider__shape-3"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <!-- <p class="main-slider__sub-title">musicfest</p> -->
                                        <h2 class="main-slider__title"><span style="color:#007236">QIS </span> <span style="color: #ee1c24;">Fest</span> <br> <span style="color: #013178;">2025</span></h2>
                                        <a href="events.php" class="main-slider__curved-circle">
                                            <div class="curved-circle" style="color: yellow;">
                                                Revive &nbsp;&nbsp;Reuse&nbsp;&nbsp;Recycle&nbsp;&nbsp;
                                            </div>
                                            <div class="main-slider__arrow-icon-box">
                                                <div class="main-slider__arrow-icon">
                                                    <span class="icon-down-right"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->


        <!--Feature One Start-->
        <section class="feature-one">
            
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-3 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="about-one__left">
                            <div class="section-title text-center">
                                <h2 class="section-title__title">Realms <span>of Event</span></h2>
                            </div>
                            <div class="about-one__timer-box">
                                <div class="timer-box">
                                    <div class="countdown-timer">
                                        <div class="default-coundown">
                                            <div class="box">
                                                <div class="countdown time-countdown" data-countdown-time="2025/02/07">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Team One Start-->
        
        <!--Team One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__wrap">
                <div class="container">
                    <div class="counter-one__inner">
                        <ul class="counter-one__count-list list-unstyled">
                            <li class="wow fadeInLeft" data-wow-delay="100ms">
                                <div class="counter-one__single">
                                    <div class="counter-one__shape-1">
                                        <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="1000" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Students</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="200ms">
                                <div class="counter-one__single counter-one__single-bg-black">
                                    <div class="counter-one__shape-1">
                                        <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="50" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Colleges</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="300ms">
                                <div class="counter-one__single">
                                    <div class="counter-one__shape-1">
                                        <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Events</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="400ms">
                                <div class="counter-one__single counter-one__single-bg-black">
                                    <div class="counter-one__shape-1">
                                        <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="2000" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Visitors</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Event One Start-->
        <section class="event-one">
            <div class="event-one__shape-1 zoominout">
                <img src="assets/images/shapes/event-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="event-one__inner">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline"><span>//</span> Event Schedule</p>
                        </div>
                        <h2 class="section-title__title">Follow Our Event <br> <span>Schedule</span></h2>
                    </div>
                    <div class="event-one__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#1st-day" class="tab-btn active-btn">
                                <h3>1<span>st</span> Day</h3>
                                <p>February 07 , 2025</p>
                            </li>
                            <li data-tab="#2nd-day" class="tab-btn">
                                <h3>2<span>nd</span> Day</h3>
                                <p>February 08 , 2025</p>
                            </li>
                            <li data-tab="#3rd-day" class="tab-btn">
                                <h3>3<span>rd</span> Day</h3>
                                <p>February 09 , 2025</p>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="1st-day">
                                <div class="event-one__main-content-box">
                                    <div class="event-one__circle-one"></div>
                                    <div class="event-one__circle-two"></div>
                                    <div class="event-one__main-content-single">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <h4 class="event-one__main-content-img-title"><a
                                                                href="#">Historical
                                                                Song & <br>
                                                                Music Fest</a></h4>
                                                    </div>
                                                    <ul class="event-one__main-content-address-box list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New Hyde, 11040</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>08 : 00 am-05 : 00 pm <br>
                                                                    16 March , 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__main-content-single event-one__main-content-single--two">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-title-and-address-box">
                                                        <h4 class="event-one__main-content-img-title"><a
                                                                href="#">Classical Music Fest <br>
                                                                2024</a></h4>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__main-content-single">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <h4 class="event-one__main-content-img-title"><a href="#">Dj
                                                                Mixers Isolated <br>
                                                                Music Fest</a></h4>
                                                    </div>
                                                    <ul class="event-one__main-content-address-box list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New Hyde, 11040</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>08 : 00 am-05 : 00 pm <br>
                                                                    16 March , 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="2nd-day">
                                <div class="event-one__main-content-box">
                                    <div class="event-one__circle-one"></div>
                                    <div class="event-one__circle-two"></div>
                                    <div class="event-one__main-content-single">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <h4 class="event-one__main-content-img-title"><a
                                                                href="#">Historical
                                                                Song & <br>
                                                                Music Fest</a></h4>
                                                    </div>
                                                    <ul class="event-one__main-content-address-box list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New Hyde, 11040</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>08 : 00 am-05 : 00 pm <br>
                                                                    16 March , 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__main-content-single event-one__main-content-single--two">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-title-and-address-box">
                                                        <h4 class="event-one__main-content-img-title"><a
                                                                href="#">Classical Music Fest <br>
                                                                2024</a></h4>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-1.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__main-content-single">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <h4 class="event-one__main-content-img-title"><a href="#">Dj
                                                                Mixers Isolated <br>
                                                                Music Fest</a></h4>
                                                    </div>
                                                    <ul class="event-one__main-content-address-box list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New Hyde, 11040</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>08 : 00 am-05 : 00 pm <br>
                                                                    16 March , 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="3rd-day">
                                <div class="event-one__main-content-box">
                                    <div class="event-one__circle-one"></div>
                                    <div class="event-one__circle-two"></div>
                                    <div class="event-one__main-content-single">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <h4 class="event-one__main-content-img-title"><a
                                                                href="#">Historical
                                                                Song & <br>
                                                                Music Fest</a></h4>
                                                    </div>
                                                    <ul class="event-one__main-content-address-box list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New Hyde, 11040</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>08 : 00 am-05 : 00 pm <br>
                                                                    16 March , 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__main-content-single event-one__main-content-single--two">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-title-and-address-box">
                                                        <h4 class="event-one__main-content-img-title"><a
                                                                href="#">Classical Music Fest <br>
                                                                2024</a></h4>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__main-content-single">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="event-one__main-content-left">
                                                    <div class="event-one__main-content-img-box">
                                                        <div class="event-one__main-content-img">
                                                            <img src="assets/images/resources/event-one-main-content-img-1-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <h4 class="event-one__main-content-img-title"><a href="#">Dj
                                                                Mixers Isolated <br>
                                                                Music Fest</a></h4>
                                                    </div>
                                                    <ul class="event-one__main-content-address-box list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New Hyde, 11040</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>08 : 00 am-05 : 00 pm <br>
                                                                    16 March , 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="event-one__main-content-right">
                                                    <div class="event-one__main-content-right-shape-1">
                                                        <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                            alt="">
                                                    </div>
                                                    <ul class="event-one__main-content-img-list-box list-unstyled">
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="event-one__main-content-img-list">
                                                                <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="event-one__main-content-btn-box">
                                                        <a href="#" class="event-one__main-content-btn"> <span
                                                                class="fas fa-arrow-circle-right"></span> Buy
                                                            Tickets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Event One End-->

        <!-- Sliding Text One Start -->
        <section class="sliding-text-one">
            <div class="sliding-text-one__wrap">
                <ul class="sliding-text__list list-unstyled marquee_mode">
                    <li>
                        <h6 data-hover="QIS COLLEGE OF ENGINEERING & TECHNOLOGY (AUTONOMOUS)" class="sliding-text__title">QIS COLLEGE OF ENGINEERING & TECHNOLOGY (AUTONOMOUS)
                            <span>/</span></h6>
                    </li>
                    <li>
                        <h6 data-hover="QIS COLLEGE OF ENGINEERING & TECHNOLOGY (AUTONOMOUS)" class="sliding-text__title">QIS COLLEGE OF ENGINEERING & TECHNOLOGY (AUTONOMOUS)
                            <span>/</span></h6>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Sliding Text One End -->

        <!-- Venue One Start -->
        <section class="venue-one">
            <div class="venue-one__shape"></div>
            <div class="venue-one__shape-2"></div>
            <div class="venue-one__shape-3 float-bob-y">
                <img src="assets/images/shapes/venue-one-shape-3.png" alt="">
            </div>
            <div class="venue-one__bg-box">
                <div class="venue-one__bg" style="background-image: url(assets/images/backgrounds/venue-one-bg.jpg);">
                </div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline"><span>//</span> About Venue <span>//</span></p>
                    </div>
                    <h2 class="section-title__title">Get in there to <span>Reach</span></h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="venue-one__left">
                            <ul class="list-unstyled venue-one__address">
                                <li>
                                    <div class="icon">
                                        <div class="venue-one__address-shape-1"
                                            style="background-image: url(assets/images/shapes/venue-one-address-icon-shape-1.png);">
                                        </div>
                                        <span class="icon-laptop"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Venue</h4>
                                        <p>Grand Conference Hall</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <div class="venue-one__address-shape-1"
                                            style="background-image: url(assets/images/shapes/venue-one-address-icon-shape-2.png);">
                                        </div>
                                        <span class="icon-placeholder1"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Address</h4>
                                        <p>1Hd-50, 010 Avenue, NY 9001 <br>
                                            United States</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled venue-one__address-two">
                                <li>
                                    <h4>Tickets Info</h4>
                                    <p>Samira Banwan</p>
                                    <p><a href="tel:00021485503">000 - 214 - 85503</a></p>
                                    <p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
                                </li>
                                <li>
                                    <h4>Programme Details</h4>
                                    <p>Samira Banwan</p>
                                    <p><a href="tel:00021485503">000 - 214 - 85503</a></p>
                                    <p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="venue-one__right">
                            <div class="venue-one__img img-bounce">
                                <img src="assets/images/resources/venue-one-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Venue One End -->

        <!--Gallery One Start-->
        <section class="gallery-one">
            <div class="gallery-one__shape-1 zoominout">
                <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="gallery-one__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline"><span>//</span> Latest Gallery </p>
                        </div>
                        <h2 class="section-title__title">Memories of Last <br><span>Year</span></h2>
                    </div>
                    <div class="gallery-one__btn-box">
                        <a href="gallery.html" class="gallery-one__btn thm-btn"><span
                                class="fas fa-arrow-circle-right"></span>See
                            More Gallery</a>
                    </div>
                </div>
                <div class="row">
                    <!--Gallery One Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-one__title-box">
                                <p><span class="icon-marker"></span>lake Buena Vista</p>
                                <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="gallery-one__single gallery-one__single-2">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-one__title-box">
                                <p><span class="icon-marker"></span>lake Buena Vista</p>
                                <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="gallery-one__single gallery-one__single-3">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="assets/images/gallery/gallery-1-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-one__title-box">
                                <p><span class="icon-marker"></span>lake Buena Vista</p>
                                <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="gallery-one__single gallery-one__single-4">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="assets/images/gallery/gallery-1-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-one__title-box">
                                <p><span class="icon-marker"></span>lake Buena Vista</p>
                                <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                </div>
            </div>
        </section>
        <!--Gallery One End-->

        <!--Category One Start-->
        <section class="category-one">
            <div class="category-one__bg-shape"></div>
            <div class="category-one__bg-shape-2"></div>
            <div class="category-one__bg-box">
                <div class="category-one__bg"
                    style="background-image: url(assets/images/backgrounds/category-one-bg.jpg);">
                </div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline"><span>//</span> Everything in the Event <span>//</span></p>
                    </div>
                    <h2 class="section-title__title">Music Event <span>Category</span></h2>
                </div>
                <div class="row">
                    <!--Category One Single Start-->
                    <div class="col-xl-4">
                        <div class="category-one__single">
                            <div class="category-one__count"></div>
                            <div class="category-one__icon">
                                <span class="icon-guitar"></span>
                            </div>
                            <div class="category-one__text-box">
                                <p class="category-one__text">There are many variation of passages
                                    <br>of Lorem Ipsum availa atst, but majority have<br>
                                    best suffered alteration in somany<br>
                                    sum variation atst but...</p>
                                <h3 class="category-one__title"><a href="about.html">Rock</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Category One Single End-->
                    <!--Category One Single Start-->
                    <div class="col-xl-4">
                        <div class="category-one__single-inner">
                            <div class="category-one__shape-1">
                                <img src="assets/images/shapes/category-one-shape-1.png" alt="">
                            </div>
                            <div class="category-one__shape-2">
                                <img src="assets/images/shapes/category-one-shape-2.png" alt="">
                            </div>
                            <div class="category-one__single">
                                <div class="category-one__count"></div>
                                <div class="category-one__icon">
                                    <span class="icon-trumpet"></span>
                                </div>
                                <div class="category-one__text-box">
                                    <p class="category-one__text">There are many variation of passages
                                        <br>of Lorem Ipsum availa atst, but majority have<br>
                                        best suffered alteration in somany<br>
                                        sum variation atst but...</p>
                                    <h3 class="category-one__title"><a href="about.html">Instrumental</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Category One Single End-->
                    <!--Category One Single Start-->
                    <div class="col-xl-4">
                        <div class="category-one__single">
                            <div class="category-one__count"></div>
                            <div class="category-one__icon">
                                <span class="icon-sitar"></span>
                            </div>
                            <div class="category-one__text-box">
                                <p class="category-one__text">There are many variation of passages
                                    <br>of Lorem Ipsum availa atst, but majority have<br>
                                    best suffered alteration in somany<br>
                                    sum variation atst but...</p>
                                <h3 class="category-one__title"><a href="about.html">Folk</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Category One Single End-->
                </div>
            </div>
        </section>
        <!--Category One End-->



    

    <?php
    include('footer.php');
    ?>
