@extends('layout.app')
@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->
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
            "delay": 5000
        }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/home/rosary.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Every Activity, Every Impact</p>
                                <h2>Working for<br>Humanity's Sake</h2>
                                <a href="contact.html" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Contact Us</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="assets/images/shapes/H01-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/H02.png);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Help, Support, Change Lives</p>
                                <h2>Cause That<br>Empower</h2>
                                <a href="contact.html" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Contact Us</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="assets/images/shapes/H02-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/H03.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Renting, Serving, Enriching Humanity</p>
                                <h2>Collaborating with <br>Heart</h2>
                                <a href="contact.html" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Contact Us</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="assets/images/shapes/H03-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider__counter">
            <ul class="main-slider__counter-box list-unstyled">
                <li style="padding: 40px 20px 40px;">
                    <h3 class="main-sldier__counter-digit">500+</h3>
                    <span class="main-slider__counter-text">Hosted Events</span>
                </li>
                <li style="padding: 40px 20px 40px;">
                    <h3 class="main-sldier__counter-digit">300+</h3>
                    <span class="main-slider__counter-text">Funded Events</span>
                </li>
            </ul>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

<hr>


<!--Welcome One End-->



<!--Introduction Start-->
<section class="introduction">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="introduction__left">
                    <div class="introduction__img">
                        <img src="assets/images/home/HOME-01.jpg" alt="">
                    </div>
                    <div class="introduction__content">
                        <p class="introduction__text" style="text-align:center">Discover our structured systems that provide continuous support, ensuring each donation and nurturing Muslim communities in need.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="introduction__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our Introduction</span>
                        <h2 class="section-title__title">Enhancing Lives through Shared Giving </h2>
                    </div>
                    <p class="introduction__right-text">Welcome to Ohio Recreation & Education Foundation (OREF), a non-profit organization fueled by the generosity of individuals like you. We firmly believe in the transformative force of collective giving, channeling donations
                        and funds to actively support and enhance the lives of those in need.</p>
                    <ul class="introduction__icon-wrap list-unstyled">
                        <li class="introduction__icon-wrap-single">
                            <div class="introduction__icon-box">
                                <span class="icon-college-graduation"></span>
                            </div>
                            <div class="introduction__content-box">
                                <h2>Discover More Than a Mission</h2>
                                <p>We do more than our mission- providing various services and spaces that helps the Muslim community. All while bringing in the support we need. </p>
                            </div>
                        </li>
                        <li class="introduction__icon-wrap-single">
                            <div class="introduction__icon-box">
                                <span class="icon-coin"></span>
                            </div>
                            <div class="introduction__content-box">
                                <h2>Forge a Better Future with OREF</h2>
                                <p>Your donation or facility use at OREF powers positive change, empowering lives and enhancing Muslim community’s future.</p>
                            </div>
                        </li>
                    </ul>
                    <a href="support.html" class="introduction__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Introduction End-->


<hr>




<!--We Inspire Start-->
<section class="we-inspire">
    <div class="we-inspire-bg" style="background-image: url(assets/images/home/faq-bg.png)"></div>
    <div class="we-inspire-bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="we-inspire__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our Values</span>
                        <h2 class="section-title__title">Explore Our Mission, Get Clear Answers
                        </h2>
                    </div>
                    <div class="we-inspire__faq">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>How does OREF Help?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>OREF is a catalyst for positive change. We facilitate education organize Muslim community events, and ensure your contributions directly impact those who need it most.
                                        </p>
                                    </div>
                                    <!-- /.inner -->
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How Can I Contribute?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>You can actively participate in donations with OREF by opting for either one-time contributions or setting up recurring payments. Your involvement makes a meaningful impact on our mission.
                                        </p>
                                        <p>Additionally you can contribute by renting and booking events through us. These events not only provide you with valuable spaces but also contribute to the broader Muslim community development efforts, fostering
                                            a sense.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Where Does the Donated Money Go? </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Your donation fuels Muslim school initiatives, Muslim community events, and supports the education of children. It's a direct investment in uplifting our community.

                                        </p>
                                    </div>
                                    <!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="we-inspire__right">
                    <div class="we-inspire__img">
                        <img src="assets/images/home/Updated-01.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Inspire End-->





<!--Why Choose Start-->
<section class="why-choose">
    <div class="why-choose-bg" style="background-image: url(assets/images/resources/girl-min.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="why-choose__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Your Donation, Infinite Smiles</span>
                        <h2 class="section-title__title">Your donations make a lasting impact, shaping futures</h2>
                    </div>
                    <div class="why-choose__left-bottom">
                        <div class="why-choose__left-text-box">
                            <!--                                    <p class="why-choose__left-text">Your donation effortlessly fuels community support. With us, helping becomes as easy as extending a giving hand—no hassle, just heart. Join the simplicity of giving and watch your contribution effortlessly make a difference in the community. -->
                            <!--</p>-->
                            <!--<h2 class="why-choose__left-signature">Mike Hardson</h2>-->
                        </div>
                        <div class="why-choose__left-list-box" style="float:none">
                            <ul class="why-choose__left-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Education Enrichment
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Healthcare Access
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Community Events
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Shelter Support
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Skill Development
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Environmental Conservation</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="why-choose__right">
                    <div class="why-choose__urgent">
                        <h3 class="why-choose__urgent-title">Empower Humanity, Act Today.</h3>
                        <p class="why-choose__urgent-text">Unite with us to generate funds for a brighter world. Your support not only saves lives but also instills hope in every corner.</p>
                        <!--<div class="why-choose__progress">-->
                        <!--    <div class="bar">-->
                        <!--        <div class="bar-inner count-bar" data-percent="36%">-->
                        <!--            <div class="count-text">36%</div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="why-choose__goals">-->
                        <!--        <p><span>$25,270</span> Raised</p>-->
                        <!--        <p><span>$30,000</span> Goal</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <a href="donate.html" class="why-choose__right-btn"><i class="fa fa-heart"></i>Donate</a>
                        <div class="why-choose__right-category">
                            <span>OREF</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why Choose End-->


<!--Events One Start-->
<section class="events-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="events-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Donate to Create Change</span>
                        <h2 class="section-title__title">Make Your Contribution to Our Cause</h2>
                    </div>
                    <p class="events-one__text">Whether it’s a one-time donation, regular contributions, or becoming a valued member, every act of generosity at OREF brings joy and positive change to Muslim community. </p>
                    <a href="donate.html" class="events-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now</a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="events-one__right">
                    <!--<div class="events-one__carousel owl-theme owl-carousel">-->


                    <!--</div>-->
                    <!--Events One Single-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="assets/images/home/247-x-336-v01.jpg" alt="" class="slider-img-filter">
                            <!--<div class="events-one__date-box">-->
                            <!--    <p>20 <br> Jan</p>-->
                            <!--</div>-->
                            <div class="events-one__bottom">
                                <!--<p><i class="far fa-clock"></i>8:00 pm</p>-->
                                <h3 class="events-one__bottom-title"><a href="event-details.html">One-Time<br>Donation</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Events One Single-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="assets/images/home/247-x-336-v02.jpg" alt="" class="slider-img-filter">

                            <!--<div class="events-one__date-box">-->
                            <!--    <p>20 <br> Jan</p>-->
                            <!--</div>-->
                            <div class="events-one__bottom">
                                <!--<p><i class="far fa-clock"></i>8:00 pm</p>-->
                                <h3 class="events-one__bottom-title"><a href="event-details.html">Recurring
                                            <br>
                                          Contributions</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Events One Single-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="assets/images/home/247-x-336-v03.jpg" alt="" class="slider-img-filter">
                            <!--<div class="events-one__date-box">-->
                            <!--    <p>20 <br> Jan</p>-->
                            <!--</div>-->
                            <div class="events-one__bottom">
                                <!--<p><i class="far fa-clock"></i>8:00 pm</p>-->
                                <h3 class="events-one__bottom-title"><a href="event-details.html">Membership<br>
                                           Giving</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--Counters Two Start-->
<section class="counters-two">
    <div class="counters-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/home/cont-bg.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="counters-two__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Support Our Cause</span>
                        <h2 class="section-title__title">Rent Spaces, Support Causes</h2>
                    </div>
                    <!--<p class="events-one__text mt-4">When you rent spaces from us, you're not just securing a venue – you're investing in positive change. Your rental contributions directly fuel our mission to support and uplift the community. Every dollar spent with us becomes a catalyst for a brighter future, ensuring that your event leaves a lasting impact beyond the venue walls. </p>-->
                    <div class="why-choose__left-list-box mt-3" style="float:none">
                        <ul class="why-choose__left-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right" style="color: #25aae2b8;"></i>
                                </div>
                                <div class="text">
                                    <h5 style="color:grey">Renting from us supports positive change.
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right" style="color: #25aae2b8;"></i>
                                </div>
                                <div class="text">
                                    <h5 style="color:grey">Your contribution fuels Muslim community mission
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right" style="color: #25aae2b8;"></i>
                                </div>
                                <div class="text">
                                    <h5 style="color:grey">Each dollar spent creates a lasting impact
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right" style="color: #25aae2b8;"></i>
                                </div>
                                <div class="text">
                                    <h5 style="color:grey">Secure a venue and invest in a brighter future
                                    </h5>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <a href="donate.html" class="events-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="counters-two__right">
                    <ul class="counters-two__four-boxes list-unstyled" style="display:flex; flex-wrap:wrap;gap:20px;justify-content:center">
                        <li>
                            <div class="counters-two__four-boxes-icon">
                                <span class="icon-fast-food">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="64px" height="64px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
<g><path style="opacity:1" fill="#fff" d="M 53.5,14.5 C 55.9689,15.6067 56.9689,17.6067 56.5,20.5C 61.0685,20.0826 62.5685,22.0826 61,26.5C 57.9457,28.3663 56.4457,31.033 56.5,34.5C 58.1667,34.5 59.8333,34.5 61.5,34.5C 60.6359,39.734 60.6359,45.0674 61.5,50.5C 59.8333,50.5 58.1667,50.5 56.5,50.5C 56.5,53.5 56.5,56.5 56.5,59.5C 58.288,59.2148 59.9547,59.5481 61.5,60.5C 41.5,61.8333 21.5,61.8333 1.5,60.5C 3.04533,59.5481 4.71199,59.2148 6.5,59.5C 6.5,56.5 6.5,53.5 6.5,50.5C 4.83333,50.5 3.16667,50.5 1.5,50.5C 2.36408,45.0674 2.36408,39.734 1.5,34.5C 3.82106,34.7711 5.82106,34.1045 7.5,32.5C 8.16667,33.8333 8.83333,35.1667 9.5,36.5C 12.4205,33.9748 15.2538,33.9748 18,36.5C 22.4935,32.533 24.9935,27.533 25.5,21.5C 20.5122,19.336 16.6789,16.0027 14,11.5C 11.8665,13.8027 10.3665,16.4693 9.5,19.5C 15.7653,22.5697 15.7653,26.0697 9.5,30C 5.18368,30.3653 2.51702,28.3653 1.5,24C 1.74298,20.9967 3.40965,19.83 6.5,20.5C 7.94146,14.2062 10.9415,8.70619 15.5,4C 19.2842,3.59271 22.9509,2.75938 26.5,1.5C 29.8333,2.83333 33.1667,2.83333 36.5,1.5C 42.977,1.80771 48.1437,4.47438 52,9.5C 53.0086,11.0249 53.5086,12.6916 53.5,14.5 Z M 23.5,12.5 C 23.4366,10.1014 23.7699,7.60141 24.5,5C 27.4066,4.14551 29.7399,4.97884 31.5,7.5C 36.7647,2.75572 39.2647,3.75572 39,10.5C 36.6506,13.0168 34.1506,15.3501 31.5,17.5C 29.6841,16.1851 28.0175,14.6851 26.5,13C 25.552,12.5172 24.552,12.3505 23.5,12.5 Z M 23.5,12.5 C 23.8146,14.2259 23.9813,15.8925 24,17.5C 23.0206,15.6797 21.5206,14.513 19.5,14C 18.2186,11.5725 17.2186,9.07255 16.5,6.5C 17.8333,6.5 19.1667,6.5 20.5,6.5C 20.3398,8.19919 20.5065,9.86586 21,11.5C 21.6708,12.2524 22.5041,12.5858 23.5,12.5 Z M 42.5,11.5 C 42.5,9.83333 42.5,8.16667 42.5,6.5C 45.5,6.16667 46.8333,7.5 46.5,10.5C 45.0413,10.4326 43.7079,10.7659 42.5,11.5 Z M 53.5,14.5 C 52.1854,16.1347 52.1854,17.8014 53.5,19.5C 51.0425,20.1243 49.3758,21.6243 48.5,24C 49.9578,26.46 51.7911,28.6266 54,30.5C 54.8077,32.5787 54.641,34.5787 53.5,36.5C 50.5795,33.9748 47.7462,33.9748 45,36.5C 40.0892,31.9468 37.5892,26.2801 37.5,19.5C 41.3488,19.498 44.0155,17.6647 45.5,14C 46.8721,13.5983 48.2054,13.0983 49.5,12.5C 50.5237,13.8532 51.857,14.5198 53.5,14.5 Z M 40.5,13.5 C 40.728,15.3547 40.0613,16.1881 38.5,16C 39.0659,15.0053 39.7326,14.172 40.5,13.5 Z M 27.5,19.5 C 30.006,22.0858 32.506,22.0858 35,19.5C 34.4722,29.2785 38.3055,36.7785 46.5,42C 45.5562,44.7191 45.2229,47.5525 45.5,50.5C 47.1667,50.5 48.8333,50.5 50.5,50.5C 50.5,52.1667 50.5,53.8333 50.5,55.5C 39.9126,55.8643 39.9126,56.8643 50.5,58.5C 37.8333,59.8333 25.1667,59.8333 12.5,58.5C 49.8096,56.836 49.8096,55.836 12.5,55.5C 12.5,53.8333 12.5,52.1667 12.5,50.5C 14.1667,50.5 15.8333,50.5 17.5,50.5C 17.7771,47.5525 17.4438,44.7191 16.5,42C 24.8444,36.8108 28.5111,29.3108 27.5,19.5 Z M 5.5,24.5 C 6.83333,24.5 8.16667,24.5 9.5,24.5C 8.16667,27.1667 6.83333,27.1667 5.5,24.5 Z M 53.5,24.5 C 54.8333,24.5 56.1667,24.5 57.5,24.5C 56.1667,27.1667 54.8333,27.1667 53.5,24.5 Z M 10.5,41.5 C 9.83333,41.5 9.16667,41.5 8.5,41.5C 9.16667,38.8333 9.83333,38.8333 10.5,41.5 Z M 54.5,41.5 C 53.8333,41.5 53.1667,41.5 52.5,41.5C 53.1667,38.8333 53.8333,38.8333 54.5,41.5 Z M 8.5,41.5 C 8.5,42.1667 8.5,42.8333 8.5,43.5C 5.83333,42.8333 5.83333,42.1667 8.5,41.5 Z M 10.5,41.5 C 13.1667,42.1667 13.1667,42.8333 10.5,43.5C 10.5,42.8333 10.5,42.1667 10.5,41.5 Z M 52.5,41.5 C 52.5,42.1667 52.5,42.8333 52.5,43.5C 49.8333,42.8333 49.8333,42.1667 52.5,41.5 Z M 54.5,41.5 C 57.1667,42.1667 57.1667,42.8333 54.5,43.5C 54.5,42.8333 54.5,42.1667 54.5,41.5 Z M 8.5,43.5 C 9.16667,43.5 9.83333,43.5 10.5,43.5C 9.83333,46.1667 9.16667,46.1667 8.5,43.5 Z M 52.5,43.5 C 53.1667,43.5 53.8333,43.5 54.5,43.5C 53.8333,46.1667 53.1667,46.1667 52.5,43.5 Z M 8.5,48.5 C 9.78683,49.8714 10.4535,51.7047 10.5,54C 10.1667,55.8333 9.83333,57.6667 9.5,59.5C 8.51078,55.8927 8.17744,52.226 8.5,48.5 Z M 52.5,48.5 C 53.7868,49.8714 54.4535,51.7047 54.5,54C 54.1667,55.8333 53.8333,57.6667 53.5,59.5C 52.5108,55.8927 52.1774,52.226 52.5,48.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 14.5,18.5 C 16.337,18.6395 16.6704,19.3061 15.5,20.5C 14.7025,20.0431 14.3691,19.3764 14.5,18.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 46.5,18.5 C 48.337,18.6395 48.6704,19.3061 47.5,20.5C 46.7025,20.0431 46.3691,19.3764 46.5,18.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 20.5,24.5 C 22.337,24.6395 22.6704,25.3061 21.5,26.5C 20.7025,26.0431 20.3691,25.3764 20.5,24.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 40.5,24.5 C 42.337,24.6395 42.6704,25.3061 41.5,26.5C 40.7025,26.0431 40.3691,25.3764 40.5,24.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 13.5,29.5 C 15.337,29.6395 15.6704,30.3061 14.5,31.5C 13.7025,31.0431 13.3691,30.3764 13.5,29.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 47.5,29.5 C 49.337,29.6395 49.6704,30.3061 48.5,31.5C 47.7025,31.0431 47.3691,30.3764 47.5,29.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 8.5,41.5 C 9.16667,41.5 9.83333,41.5 10.5,41.5C 10.5,42.1667 10.5,42.8333 10.5,43.5C 9.83333,43.5 9.16667,43.5 8.5,43.5C 8.5,42.8333 8.5,42.1667 8.5,41.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 52.5,41.5 C 53.1667,41.5 53.8333,41.5 54.5,41.5C 54.5,42.1667 54.5,42.8333 54.5,43.5C 53.8333,43.5 53.1667,43.5 52.5,43.5C 52.5,42.8333 52.5,42.1667 52.5,41.5 Z"/></g>
</svg>
                                </span>
                            </div>
                            <h4>Wedding<br>Events</h4>
                        </li>
                        <li>
                            <div class="counters-two__four-boxes-icon">
                                <span class="icon-water">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="64.000000px" height="64.000000px" viewBox="0 0 64.000000 64.000000"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
fill="#fff" stroke="none">
<path d="M134 625 c-17 -13 -14 -14 32 -8 36 4 59 1 82 -11 29 -15 32 -20 32
-66 l0 -50 -25 16 c-35 23 -69 12 -86 -28 -7 -18 -20 -38 -29 -45 -13 -11 -13
-12 1 -13 14 0 29 -19 29 -36 0 -2 -24 -4 -54 -4 -40 0 -55 4 -60 16 -9 23 -8
24 25 24 17 0 28 4 24 10 -3 6 -19 10 -36 10 -24 0 -29 4 -29 24 0 37 18 78
47 108 33 34 22 50 -12 18 -40 -38 -58 -98 -54 -187 6 -131 71 -231 224 -348
l75 -58 75 58 c93 71 157 142 193 215 39 79 43 205 10 270 -51 99 -152 126
-243 64 -34 -22 -39 -23 -54 -10 -46 41 -132 58 -167 31z m386 -27 c47 -32 71
-68 77 -116 l6 -42 -60 0 c-59 0 -60 1 -69 31 -13 47 -35 57 -78 36 l-36 -17
0 50 c0 44 3 51 28 64 40 22 94 20 132 -6z m-180 -85 c0 -36 -3 -43 -20 -43
-17 0 -20 7 -20 43 0 36 3 43 20 43 17 0 20 -7 20 -43z m-85 -29 c18 -12 25
-25 25 -49 0 -53 -68 -87 -90 -46 -21 41 -5 111 26 111 8 0 26 -7 39 -16z
m195 -3 c14 -28 12 -74 -4 -97 -14 -19 -15 -19 -50 0 -29 16 -36 25 -36 50 0
23 7 36 28 48 35 23 49 22 62 -1z m-110 -46 c0 -8 -9 -15 -20 -15 -11 0 -20 7
-20 15 0 8 9 15 20 15 11 0 20 -7 20 -15z m250 -19 c0 -18 -15 -36 -31 -36
-21 0 -26 -16 -6 -23 19 -6 -37 -80 -113 -148 -35 -33 -68 -59 -72 -59 -5 0
-8 30 -8 68 l0 67 21 -32 c22 -35 39 -35 39 -2 0 14 7 19 30 19 36 0 36 3 9
41 -24 35 -18 49 22 49 16 0 29 5 29 10 0 6 -9 10 -19 10 -14 0 -18 5 -14 20
5 17 14 20 59 20 30 0 54 -2 54 -4z m-260 -21 c0 -3 -20 -35 -44 -71 -36 -54
-44 -61 -49 -44 -3 13 -10 18 -21 14 -38 -14 -1 41 53 81 32 23 61 33 61 20z
m100 -75 c21 -30 21 -30 2 -30 -11 0 -23 -6 -25 -12 -11 -26 -74 71 -63 97 5
15 9 14 36 -5 16 -11 39 -34 50 -50z m-288 -81 c18 -19 57 -55 86 -80 48 -40
53 -48 50 -79 l-3 -35 -91 90 c-88 87 -124 142 -139 210 -6 26 -3 24 28 -21
20 -28 50 -66 69 -85z m448 84 c-20 -63 -68 -129 -149 -204 l-76 -72 -3 34
c-3 30 2 38 45 73 67 56 128 121 160 172 32 51 40 50 23 -3z m-387 31 c3 -4
-5 -23 -19 -43 l-24 -36 29 -3 c22 -2 31 -10 36 -30 l7 -27 24 30 c23 28 24
29 24 8 0 -13 5 -23 10 -23 6 0 10 20 10 44 0 41 19 74 33 59 4 -3 7 -53 7
-110 0 -96 -1 -103 -20 -103 -17 0 -20 7 -20 40 0 22 -4 40 -10 40 -5 0 -10
-11 -10 -25 0 -14 -3 -25 -6 -25 -25 0 -194 175 -194 201 0 10 113 13 123 3z
m135 -291 c-2 -26 -8 -38 -18 -38 -10 0 -16 12 -18 38 -3 32 0 37 18 37 18 0
21 -5 18 -37z"/>
</g>
</svg>
                                </span>
                            </div>
                            <h4>Engagement<br>Parties</h4>
                        </li>
                        <li>
                            <div class="counters-two__four-boxes-icon">
                                <span class="icon-health-check">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="64.000000px" height="64.000000px" viewBox="0 0 64.000000 64.000000"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
fill="#fff" stroke="none">
<path d="M266 562 c-48 -83 -53 -98 -34 -104 7 -3 -3 -26 -25 -61 -21 -32 -37
-60 -37 -63 0 -2 9 -8 19 -12 18 -7 18 -10 -12 -59 -18 -29 -35 -53 -40 -53
-4 0 -6 15 -5 32 3 32 2 33 -37 33 -39 0 -40 -1 -37 -32 3 -31 1 -33 -27 -33
l-31 0 0 -105 0 -105 320 0 320 0 0 70 c0 65 -2 73 -27 95 -32 28 -65 32 -84
9 -12 -14 -14 -14 -20 3 -3 10 -2 23 3 30 12 15 2 33 -17 33 -8 0 -26 17 -40
37 -24 37 -24 38 -5 45 11 4 20 10 20 12 0 3 -16 31 -37 63 -22 35 -32 58 -25
61 7 2 12 9 12 14 0 16 -91 168 -100 168 -4 0 -29 -35 -54 -78z m92 -16 c17
-30 32 -59 32 -65 0 -7 -26 -11 -70 -11 -44 0 -70 4 -70 11 0 13 62 119 70
119 3 0 20 -24 38 -54z m51 -150 l31 -51 -22 -7 c-13 -3 -57 -6 -98 -6 -41 0
-85 3 -98 6 l-22 7 31 51 31 51 58 0 58 0 31 -51z m24 -127 c18 -32 19 -39 8
-53 -13 -15 -15 -15 -33 4 -19 21 -35 24 -62 14 -12 -5 -13 -10 -5 -25 9 -17
6 -19 -34 -19 -43 0 -104 15 -120 30 -5 4 4 26 19 49 l27 42 90 -3 89 -3 21
-36z m-323 -35 c0 -31 -23 -28 -28 4 -2 15 2 22 12 22 11 0 16 -9 16 -26z
m290 -34 c0 -5 -4 -10 -9 -10 -6 0 -13 5 -16 10 -3 6 1 10 9 10 9 0 16 -4 16
-10z m80 0 c0 -5 -7 -10 -16 -10 -8 0 -12 5 -9 10 3 6 10 10 16 10 5 0 9 -4 9
-10z m-395 -20 c-3 -5 -19 -10 -36 -10 -16 0 -29 5 -29 10 0 6 16 10 36 10 21
0 33 -4 29 -10z m85 0 c0 -5 -13 -10 -30 -10 -16 0 -30 5 -30 10 0 6 14 10 30
10 17 0 30 -4 30 -10z m83 -7 c18 -4 27 -12 27 -24 0 -16 -8 -19 -45 -19 -44
0 -45 1 -45 31 0 26 3 30 18 24 9 -3 29 -9 45 -12z m87 -25 c0 -11 -7 -18 -20
-18 -13 0 -20 7 -20 18 0 11 7 18 20 18 13 0 20 -7 20 -18z m80 12 c0 -5 -13
-10 -30 -10 -16 0 -30 5 -30 10 0 6 14 10 30 10 17 0 30 -4 30 -10z m70 0 c0
-5 -11 -10 -25 -10 -14 0 -25 5 -25 10 0 6 11 10 25 10 14 0 25 -4 25 -10z
m95 0 c4 -6 -5 -10 -20 -10 -15 0 -24 4 -20 10 3 6 12 10 20 10 8 0 17 -4 20
-10z m-497 -72 c-3 -63 -3 -63 -35 -66 l-33 -3 0 65 0 66 35 0 36 0 -3 -62z
m82 -3 l0 -65 -30 0 -30 0 0 65 0 65 30 0 30 0 0 -65z m250 -10 c0 -54 0 -55
-30 -55 -30 0 -30 1 -30 55 0 54 0 55 30 55 30 0 30 -1 30 -55z m70 0 c0 -52
-1 -55 -25 -55 -24 0 -25 3 -25 55 0 52 1 55 25 55 24 0 25 -3 25 -55z m60 45
c0 -5 -9 -10 -20 -10 -11 0 -20 5 -20 10 0 6 9 10 20 10 11 0 20 -4 20 -10z
m70 0 c0 -5 -9 -10 -20 -10 -11 0 -20 5 -20 10 0 6 9 10 20 10 11 0 20 -4 20
-10z m-365 -20 c4 -6 -8 -10 -29 -10 -20 0 -36 5 -36 10 0 6 13 10 29 10 17 0
33 -4 36 -10z m85 0 c0 -5 -13 -10 -30 -10 -16 0 -30 5 -30 10 0 6 14 10 30
10 17 0 30 -4 30 -10z m210 -45 c0 -28 -4 -35 -20 -35 -15 0 -20 7 -20 28 0
32 7 42 27 42 8 0 13 -13 13 -35z m68 -3 c3 -27 0 -32 -17 -32 -17 0 -21 6
-21 36 0 28 3 35 18 32 11 -2 18 -14 20 -36z m-358 -12 c0 -16 -7 -20 -35 -20
-28 0 -35 4 -35 20 0 16 7 20 35 20 28 0 35 -4 35 -20z m80 0 c0 -16 -7 -20
-30 -20 -23 0 -30 4 -30 20 0 16 7 20 30 20 23 0 30 -4 30 -20z"/>
<path d="M310 540 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M290 505 c-10 -12 -10 -15 4 -15 9 0 16 7 16 15 0 8 -2 15 -4 15 -2
0 -9 -7 -16 -15z"/>
<path d="M270 404 c0 -8 5 -12 10 -9 6 3 10 10 10 16 0 5 -4 9 -10 9 -5 0 -10
-7 -10 -16z"/>
<path d="M342 411 c4 -13 18 -16 19 -4 0 4 -5 9 -11 12 -7 2 -11 -2 -8 -8z"/>
<path d="M296 371 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
<path d="M355 369 c-10 -15 3 -25 16 -12 7 7 7 13 1 17 -6 3 -14 1 -17 -5z"/>
<path d="M270 280 c0 -5 7 -10 16 -10 8 0 12 5 9 10 -3 6 -10 10 -16 10 -5 0
-9 -4 -9 -10z"/>
<path d="M356 281 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
<path d="M230 240 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
-15 -4 -15 -10z"/>
<path d="M290 226 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
-10 -1 -10 -9z"/>
<path d="M182 598 c-17 -17 -15 -36 6 -47 25 -13 44 1 40 30 -3 27 -27 36 -46
17z m28 -18 c0 -5 -5 -10 -11 -10 -5 0 -7 5 -4 10 3 6 8 10 11 10 2 0 4 -4 4
-10z"/>
<path d="M512 588 c-17 -17 -15 -36 6 -47 25 -13 44 1 40 30 -3 27 -27 36 -46
17z m28 -18 c0 -5 -5 -10 -11 -10 -5 0 -7 5 -4 10 3 6 8 10 11 10 2 0 4 -4 4
-10z"/>
<path d="M134 456 c-10 -26 4 -48 28 -44 33 4 33 52 0 56 -13 2 -25 -3 -28
-12z m36 -16 c0 -5 -4 -10 -10 -10 -5 0 -10 5 -10 10 0 6 5 10 10 10 6 0 10
-4 10 -10z"/>
<path d="M480 435 c-18 -21 -5 -47 22 -43 26 3 37 36 16 49 -18 12 -24 11 -38
-6z m30 -15 c0 -5 -5 -10 -11 -10 -5 0 -7 5 -4 10 3 6 8 10 11 10 2 0 4 -4 4
-10z"/>
<path d="M23 374 c-8 -20 21 -49 41 -41 9 4 16 18 16 32 0 20 -5 25 -25 25
-14 0 -28 -7 -32 -16z m37 -14 c0 -5 -2 -10 -4 -10 -3 0 -8 5 -11 10 -3 6 -1
10 4 10 6 0 11 -4 11 -10z"/>
<path d="M540 325 c-10 -12 -10 -18 0 -30 7 -8 18 -15 25 -15 7 0 18 7 25 15
10 12 10 18 0 30 -7 8 -18 15 -25 15 -7 0 -18 -7 -25 -15z"/>
</g>
</svg>
                                </span>
                            </div>
                            <h4>Christmas<br>Parties</h4>
                        </li>
                        <li>
                            <div class="counters-two__four-boxes-icon">
                                <span class="icon-cheque">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="64px" height="64px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
<g><path style="opacity:1" fill="#fff" d="M 63.5,9.5 C 63.5,10.5 63.5,11.5 63.5,12.5C 58.5322,13.6586 53.5322,14.6586 48.5,15.5C 48.6653,19.1817 48.4986,22.8484 48,26.5C 45.2806,28.7287 42.4473,30.7287 39.5,32.5C 31.8577,31.185 24.191,29.685 16.5,28C 16,27.5 15.5,27 15,26.5C 14.5014,22.8484 14.3347,19.1817 14.5,15.5C 9.46784,14.6586 4.46784,13.6586 -0.5,12.5C -0.5,11.5 -0.5,10.5 -0.5,9.5C 10.1526,7.17062 20.8193,4.83729 31.5,2.5C 42.1807,4.83729 52.8474,7.17062 63.5,9.5 Z M 29.5,5.5 C 38.2202,7.01285 46.8868,8.84618 55.5,11C 50.6826,12.246 45.8493,13.4127 41,14.5C 37.928,12.7134 34.7614,11.0467 31.5,9.5C 30.4173,10.365 30.2506,11.365 31,12.5C 35.0773,13.9672 35.244,15.3005 31.5,16.5C 23.5,14.6667 15.5,12.8333 7.5,11C 15.0343,9.44978 22.3676,7.61645 29.5,5.5 Z M 16.5,17.5 C 16.7352,16.9033 17.2352,16.5699 18,16.5C 24.6958,19.0558 31.5292,19.7225 38.5,18.5C 38.5,19.5 38.5,20.5 38.5,21.5C 33.1985,22.3629 27.8651,22.1963 22.5,21C 19.9746,20.5762 17.9746,19.4095 16.5,17.5 Z M 43.5,16.5 C 44.552,16.3505 45.552,16.5172 46.5,17C 42.3619,21.8333 41.3619,21.6666 43.5,16.5 Z M 16.5,23.5 C 16.56,22.9569 16.8933,22.6236 17.5,22.5C 24.376,24.1189 31.376,24.9523 38.5,25C 36.546,26.913 34.2127,28.0797 31.5,28.5C 28.5252,27.8607 25.5252,27.3607 22.5,27C 19.9746,26.5762 17.9746,25.4095 16.5,23.5 Z M 44.5,22.5 C 45.2389,22.369 45.9056,22.5357 46.5,23C 45.6667,24.5 44.5,25.6667 43,26.5C 42.3076,25.9747 41.8076,25.3081 41.5,24.5C 42.6016,23.8243 43.6016,23.1577 44.5,22.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 55.5,32.5 C 58.4151,32.9126 60.2484,34.5793 61,37.5C 61.8499,41.5355 61.3499,45.3688 59.5,49C 58.2713,49.7811 56.938,50.2811 55.5,50.5C 49.5877,48.9412 43.5877,47.9412 37.5,47.5C 37.5,51.8333 37.5,56.1667 37.5,60.5C 35.4176,60.528 33.5843,59.8613 32,58.5C 29.9935,59.6687 27.8268,60.3354 25.5,60.5C 25.5,56.1667 25.5,51.8333 25.5,47.5C 19.4365,48.0661 13.4365,49.0661 7.5,50.5C 3.44697,49.259 1.44697,46.4257 1.5,42C 1.74572,38.9924 2.74572,36.3258 4.5,34C 13.7043,34.5738 22.871,35.4072 32,36.5C 40.0624,36.003 47.8958,34.6697 55.5,32.5 Z M 6.5,36.5 C 7.4959,36.4142 8.32924,36.7476 9,37.5C 9.966,41.1177 9.466,44.451 7.5,47.5C 4.08101,44.1436 3.74768,40.477 6.5,36.5 Z M 52.5,36.5 C 57.984,36.4382 59.8174,39.1048 58,44.5C 57.6258,45.4162 57.1258,46.2496 56.5,47C 50.5738,46.1749 44.5738,45.3415 38.5,44.5C 38.5,42.5 38.5,40.5 38.5,38.5C 43.4141,38.6382 48.0808,37.9715 52.5,36.5 Z M 12.5,37.5 C 16.81,38.0802 21.1434,38.4135 25.5,38.5C 26.0522,40.3307 26.0522,41.9974 25.5,43.5C 21.6441,44.9847 17.6441,45.9847 13.5,46.5C 12.5159,43.5719 12.1826,40.5719 12.5,37.5 Z M 28.5,38.5 C 30.8333,38.5 33.1667,38.5 35.5,38.5C 35.5,40.5 35.5,42.5 35.5,44.5C 33.076,44.8076 30.7427,44.4742 28.5,43.5C 29.0522,41.9974 29.0522,40.3307 28.5,38.5 Z M 28.5,47.5 C 30.8333,47.5 33.1667,47.5 35.5,47.5C 35.8174,50.5719 35.4841,53.5719 34.5,56.5C 32.8333,55.1667 31.1667,55.1667 29.5,56.5C 28.5159,53.5719 28.1826,50.5719 28.5,47.5 Z"/></g>
</svg>
                                </span>
                            </div>
                            <h4>Graduation<br>Parties</h4>
                        </li>
                        <li>
                            <div class="counters-two__four-boxes-icon">
                                <span class="icon-cheque">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="64px" height="64px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
<g><path style="opacity:1" fill="#fff" d="M 63.5,11.5 C 63.5,13.8333 63.5,16.1667 63.5,18.5C 60.2216,28.2767 53.5549,34.4434 43.5,37C 48.1667,37.3333 52.8333,37.6667 57.5,38C 61.3764,40.1276 61.3764,42.4609 57.5,45C 61.561,48.4351 60.8943,50.9351 55.5,52.5C 57.9166,54.4935 57.9166,56.3268 55.5,58C 50.745,58.8514 46.0783,59.5181 41.5,60C 40.7511,58.2663 40.2511,56.433 40,54.5C 38.6295,61.4265 34.7962,63.2598 28.5,60C 27.7734,58.6012 27.2734,57.1012 27,55.5C 14.518,62.26 5.35133,59.26 -0.5,46.5C -0.5,44.1667 -0.5,41.8333 -0.5,39.5C 2.15996,30.6865 8.15996,26.1865 17.5,26C 14.6667,21.8333 11.8333,17.6667 9,13.5C 7.54044,9.20229 8.87377,6.20229 13,4.5C 15.4675,5.10429 17.4675,6.43762 19,8.5C 25.5991,17.3671 31.4325,26.7005 36.5,36.5C 37.624,35.086 38.624,33.586 39.5,32C 34.7273,24.8796 34.2273,17.3796 38,9.5C 43.9145,1.10146 51.2478,-0.565203 60,4.5C 61.2126,6.92521 62.3793,9.25855 63.5,11.5 Z M 11.5,9.5 C 11.811,8.52216 12.4777,7.85549 13.5,7.5C 20.2135,15.3871 26.3802,23.7205 32,32.5C 32.6667,34.1667 32.6667,35.8333 32,37.5C 30.7377,34.2433 28.7377,31.5767 26,29.5C 24.7101,31.792 23.0435,33.792 21,35.5C 17.5042,32.0093 18.0042,29.676 22.5,28.5C 21.5589,26.2279 20.2255,24.2279 18.5,22.5C 19.1667,21.8333 19.8333,21.1667 20.5,20.5C 18.5268,15.8726 15.5268,12.2059 11.5,9.5 Z M 48.5,9.5 C 50.337,9.63945 50.6704,10.3061 49.5,11.5C 48.7025,11.0431 48.3691,10.3764 48.5,9.5 Z M 43.5,11.5 C 44.7733,12.0768 44.7733,12.7435 43.5,13.5C 42.537,13.0302 42.537,12.3635 43.5,11.5 Z M 53.5,11.5 C 54.2891,11.7828 54.9558,12.2828 55.5,13C 54.184,13.5281 53.5173,13.0281 53.5,11.5 Z M 51.5,15.5 C 53.337,15.6395 53.6704,16.3061 52.5,17.5C 51.7025,17.0431 51.3691,16.3764 51.5,15.5 Z M 45.5,17.5 C 47.337,17.6395 47.6704,18.3061 46.5,19.5C 45.7025,19.0431 45.3691,18.3764 45.5,17.5 Z M 55.5,17.5 C 57.337,17.6395 57.6704,18.3061 56.5,19.5C 55.7025,19.0431 55.3691,18.3764 55.5,17.5 Z M 49.5,20.5 C 50.0768,19.2267 50.7435,19.2267 51.5,20.5C 51.0302,21.463 50.3635,21.463 49.5,20.5 Z M 43.5,22.5 C 44.0768,21.2267 44.7435,21.2267 45.5,22.5C 45.0302,23.463 44.3635,23.463 43.5,22.5 Z M 47.5,24.5 C 48.2506,23.4265 49.2506,23.2599 50.5,24C 49.6477,25.7284 48.6477,25.895 47.5,24.5 Z M 13.5,28.5 C 14.5,28.5 15.5,28.5 16.5,28.5C 16.2035,31.7239 16.8702,34.7239 18.5,37.5C 17.8551,38.646 17.0217,39.646 16,40.5C 13.1667,37.6667 10.3333,34.8333 7.5,32C 9.43191,30.5415 11.4319,29.3748 13.5,28.5 Z M 4.5,34.5 C 8.08007,36.4076 11.0801,39.0743 13.5,42.5C 12.8551,43.646 12.0217,44.646 11,45.5C 8.41252,43.8042 5.57918,42.8042 2.5,42.5C 2.58378,39.6726 3.25045,37.006 4.5,34.5 Z M 25.5,34.5 C 27.7012,34.8584 29.0345,36.1917 29.5,38.5C 24.0941,40.4346 22.7608,39.1013 25.5,34.5 Z M 20.5,39.5 C 23.5428,41.4067 26.8761,42.74 30.5,43.5C 29.6083,46.2837 28.4416,48.9504 27,51.5C 24.3333,48.8333 21.6667,46.1667 19,43.5C 18.7003,41.9343 19.2003,40.601 20.5,39.5 Z M 46.5,39.5 C 50.3076,39.1632 53.9743,39.6632 57.5,41C 56.1072,42.3631 54.4405,43.1964 52.5,43.5C 48.4816,42.9646 44.4816,42.2979 40.5,41.5C 42.6309,40.8313 44.6309,40.1646 46.5,39.5 Z M 34.5,40.5 C 34.477,42.9267 33.977,45.26 33,47.5C 32.8333,46.3333 32.6667,45.1667 32.5,44C 32.6083,42.3189 33.2749,41.1522 34.5,40.5 Z M 15.5,44.5 C 18.8123,47.1456 21.8123,50.1456 24.5,53.5C 21.9717,55.8738 18.9717,56.8738 15.5,56.5C 15.7965,53.2761 15.1298,50.2761 13.5,47.5C 14.1925,46.4822 14.8592,45.4822 15.5,44.5 Z M 39.5,45.5 C 39.9169,44.8761 40.5836,44.5427 41.5,44.5C 45.8035,45.2095 50.1368,45.7095 54.5,46C 56.9047,48.0324 56.4047,49.5324 53,50.5C 48.6859,48.3396 44.1859,46.673 39.5,45.5 Z M 2.5,45.5 C 4.82733,45.2471 6.82733,45.9137 8.5,47.5C 5.31522,51.5938 3.31522,50.9271 2.5,45.5 Z M 38.5,49.5 C 39.6009,48.4017 40.9343,48.235 42.5,49C 46.583,50.1823 50.2496,52.0157 53.5,54.5C 53.1924,55.3081 52.6924,55.9747 52,56.5C 47.5518,54.0262 43.0518,51.6929 38.5,49.5 Z M 10.5,49.5 C 13.0047,51.1859 13.838,53.5193 13,56.5C 7.47812,55.2668 6.64478,52.9335 10.5,49.5 Z M 32.5,51.5 C 37.5861,53.8476 37.7528,56.5142 33,59.5C 28.6037,57.1574 28.437,54.4908 32.5,51.5 Z M 44.5,56.5 C 46.9752,56.7467 46.9752,57.4134 44.5,58.5C 43.537,58.0302 43.537,57.3635 44.5,56.5 Z"/></g>
</svg>
                                </span>
                            </div>
                            <h4>Supporting<br>Events </h4>
                        </li>
                        <li>
                            <div class="counters-two__four-boxes-icon">
                                <span class="icon-cheque">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="64px" height="64px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
<g><path style="opacity:1" fill="#fff" d="M 44.5,-0.5 C 44.8333,-0.5 45.1667,-0.5 45.5,-0.5C 50.2082,1.25186 51.2082,4.25186 48.5,8.5C 42.5479,10.7105 40.0479,8.71049 41,2.5C 42.1451,1.36362 43.3117,0.363622 44.5,-0.5 Z M 44.5,3.5 C 46.4646,3.94835 46.7979,4.94835 45.5,6.5C 43.4807,5.86709 43.1474,4.86709 44.5,3.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 63.5,4.5 C 63.5,5.5 63.5,6.5 63.5,7.5C 62.8826,7.61071 62.3826,7.94404 62,8.5C 61.701,12.807 61.5343,16.9737 61.5,21C 58.1504,20.5081 54.817,19.6747 51.5,18.5C 52.141,22.4233 52.141,26.2566 51.5,30C 47.6757,28.6089 43.6757,27.4423 39.5,26.5C 38.8413,29.4552 38.5079,32.4552 38.5,35.5C 40.7224,35.178 42.5557,35.8446 44,37.5C 49.9306,36.2782 55.7639,34.6115 61.5,32.5C 62.1835,32.8627 62.8501,33.1961 63.5,33.5C 63.5,34.5 63.5,35.5 63.5,36.5C 64.1087,47.7603 60.942,49.0936 54,40.5C 52.8551,43.4318 52.0218,46.4318 51.5,49.5C 48.0034,48.9403 45.5034,46.9403 44,43.5C 44.1667,47.3333 42.3333,49.1667 38.5,49C 42.3032,51.7601 43.9699,55.2601 43.5,59.5C 41.1716,60.2173 39.0049,61.2173 37,62.5C 35.0844,60.3673 33.2511,58.034 31.5,55.5C 29.4023,57.6295 27.569,59.9628 26,62.5C 23.0975,61.2986 20.2642,59.9652 17.5,58.5C 18.8752,54.9111 20.8752,51.7445 23.5,49C 20.7683,48.6019 18.935,47.1019 18,44.5C 16.9872,46.8461 15.3206,48.5128 13,49.5C 10.9648,46.7511 9.2981,43.7511 8,40.5C 6.4875,43.8566 3.9875,45.8566 0.5,46.5C 0.794717,44.2646 0.461384,42.2646 -0.5,40.5C -0.5,37.8333 -0.5,35.1667 -0.5,32.5C 3.77826,33.8772 8.1116,34.7106 12.5,35C 22.1179,32.3512 31.1179,28.3512 39.5,23C 37.8988,22.7266 36.3988,22.2266 35,21.5C 32.3859,25.3006 28.8859,27.634 24.5,28.5C 24.0785,24.7999 23.4119,21.1333 22.5,17.5C 19.216,20.3067 15.5493,22.3067 11.5,23.5C 11.5,19.5 11.5,15.5 11.5,11.5C 7.61481,12.9051 3.61481,13.9051 -0.5,14.5C -0.5,13.1667 -0.5,11.8333 -0.5,10.5C 0.282883,8.65676 0.94955,6.65676 1.5,4.5C 1.14451,3.4777 0.477842,2.81103 -0.5,2.5C -0.5,2.16667 -0.5,1.83333 -0.5,1.5C 1.19416,0.314045 2.86082,0.480712 4.5,2C 15.659,11.8944 28.659,18.0611 43.5,20.5C 50.1167,15.3858 56.2834,9.71917 62,3.5C 62.3826,4.05596 62.8826,4.38929 63.5,4.5 Z M 44.5,3.5 C 43.1474,4.86709 43.4807,5.86709 45.5,6.5C 46.7979,4.94835 46.4646,3.94835 44.5,3.5 Z M 3.5,7.5 C 7.29983,7.81942 7.46649,8.81942 4,10.5C 3.51722,9.55198 3.35055,8.55198 3.5,7.5 Z M 57.5,12.5 C 58.782,13.7082 58.782,15.0416 57.5,16.5C 55.2064,15.3746 55.2064,14.0412 57.5,12.5 Z M 14.5,13.5 C 15.9733,14.072 17.3066,14.9054 18.5,16C 17.0692,16.4652 15.9025,17.2986 15,18.5C 14.5065,16.8659 14.3398,15.1992 14.5,13.5 Z M 26.5,19.5 C 30.8187,19.8418 31.3187,21.1751 28,23.5C 26.8118,22.4366 26.3118,21.1033 26.5,19.5 Z M 47.5,21.5 C 48.782,22.7082 48.782,24.0416 47.5,25.5C 43.874,24.4071 43.874,23.0737 47.5,21.5 Z M 34.5,29.5 C 35.9697,32.5572 35.303,33.0572 32.5,31C 33.4158,30.7216 34.0825,30.2216 34.5,29.5 Z M 28.5,32.5 C 31.1446,33.4906 33.478,34.9906 35.5,37C 34.2713,37.7811 32.938,38.2811 31.5,38.5C 28.505,37.3364 25.505,36.1697 22.5,35C 24.7226,34.4338 26.7226,33.6005 28.5,32.5 Z M 2.5,36.5 C 6.77659,36.9001 7.27659,38.2334 4,40.5C 3.20858,39.255 2.70858,37.9217 2.5,36.5 Z M 56.5,38.5 C 57.209,37.596 58.209,37.2627 59.5,37.5C 59.6495,38.552 59.4828,39.552 59,40.5C 58.2917,39.6195 57.4584,38.9528 56.5,38.5 Z M 22.5,38.5 C 27.5607,40.5092 27.7274,42.8425 23,45.5C 22.5034,43.1902 22.3367,40.8568 22.5,38.5 Z M 38.5,38.5 C 39.7251,39.1522 40.3917,40.3189 40.5,42C 40.3333,43.1667 40.1667,44.3333 40,45.5C 38.5806,44.5399 37.0806,43.7065 35.5,43C 36.8333,42.3333 36.8333,41.6667 35.5,41C 36.5707,40.1482 37.5707,39.3149 38.5,38.5 Z M 12.5,39.5 C 14.1033,39.3118 15.4366,39.8118 16.5,41C 13.899,45.616 12.5657,45.116 12.5,39.5 Z M 46.5,39.5 C 51.0001,39.2191 51.8335,40.8858 49,44.5C 47.6283,43.0899 46.795,41.4233 46.5,39.5 Z M 30.5,45.5 C 33.2921,46.3918 34.6254,48.3918 34.5,51.5C 32.5,51.5 30.5,51.5 28.5,51.5C 28.2525,49.1417 28.9192,47.1417 30.5,45.5 Z M 24.5,52.5 C 26.8549,54.2462 27.0216,56.2462 25,58.5C 21.9527,56.7826 21.786,54.7826 24.5,52.5 Z M 37.5,52.5 C 38.4793,53.7653 39.4793,55.0986 40.5,56.5C 38.3703,57.7771 36.7036,57.2771 35.5,55C 36.3805,54.2917 37.0472,53.4584 37.5,52.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 18.5,2.5 C 20.604,2.2011 22.604,2.53443 24.5,3.5C 25.8774,7.95948 24.2107,9.79281 19.5,9C 17.1656,7.15755 16.8323,4.99088 18.5,2.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 3.5,20.5 C 8.39289,20.6341 10.0596,22.9674 8.5,27.5C 1.81793,28.8143 0.151261,26.481 3.5,20.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 55.5,23.5 C 59.9791,23.8975 61.3124,26.2309 59.5,30.5C 56.2083,32.1773 54.2083,31.1773 53.5,27.5C 53.7517,25.9271 54.4183,24.5938 55.5,23.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 4.5,47.5 C 10.4922,47.9954 12.1589,50.8287 9.5,56C 5.30057,58.4011 2.6339,57.2344 1.5,52.5C 1.75732,50.3076 2.75732,48.6409 4.5,47.5 Z M 5.5,51.5 C 7.33702,51.6395 7.67036,52.3061 6.5,53.5C 5.70245,53.0431 5.36912,52.3764 5.5,51.5 Z"/></g>
<g><path style="opacity:1" fill="#fff" d="M 54.5,47.5 C 56.904,48.9932 59.2373,50.6599 61.5,52.5C 59.8287,54.5098 59.162,56.8431 59.5,59.5C 57.1191,58.5804 54.7857,58.5804 52.5,59.5C 50.5121,58.7112 50.1787,57.5445 51.5,56C 49.7888,54.8668 49.2888,53.3668 50,51.5C 52.159,50.8448 53.659,49.5115 54.5,47.5 Z"/></g>
</svg>
                                </span>
                            </div>
                            <h4>Special<br>Occasions</h4>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Counters Two End-->


<section class="four-icon mt-5">
    <div class="container">
        <div class="row">
            <h2 class="section-title__title my-4" style="text-align:center;font-size: 40px;">Donations Elected from These Revenue</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Four Icon Single-->
                <div class="four-icon__single">
                    <div class="four-icon__img">
                        <img src="assets/images/home/530-x-668-v01.jpg" alt="">
                        <div class="four-icon__content-box">
                            <h3 class="four-icon__title">Gym Area</h3>
                            <p class="four-icon__text">Work out, and support our community.
                            </p>
                        </div>
                    </div>
                    <div class="four-icon__bottom-icon">
                        <span class="icon-dove">
                            <!--<img src="assets/images/home/GYM.svg">-->
                            <?xml version="1.0" standalone="no"?>

<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
fill="#25aae2" stroke="none">
<path d="M236 608 c-21 -30 -20 -44 4 -68 37 -37 100 -14 100 38 0 50 -75 72
-104 30z m79 -19 c14 -44 -44 -67 -66 -27 -10 18 -8 24 10 39 25 21 48 16 56
-12z"/>
<path d="M185 505 c-5 -2 -22 -6 -36 -9 -26 -6 -79 -72 -79 -100 0 -7 7 -20
16 -27 15 -12 21 -9 50 25 l34 39 -5 -49 c-16 -137 -14 -133 -56 -166 -21 -17
-39 -39 -39 -48 0 -20 19 -40 38 -40 24 0 112 73 112 92 0 10 7 18 15 18 19 0
35 -31 35 -67 0 -35 16 -53 46 -53 29 0 35 20 27 87 -6 53 -17 74 -55 98 -20
13 -13 86 7 79 17 -7 94 33 102 52 3 9 -1 22 -9 30 -11 12 -20 12 -47 3 -29
-10 -35 -9 -60 15 -25 24 -63 32 -96 21z m90 -36 c32 -28 39 -30 61 -20 33 14
44 14 44 -2 0 -7 -16 -21 -36 -30 -28 -14 -39 -15 -50 -6 -21 17 -30 2 -38
-57 -6 -51 -6 -52 27 -72 30 -17 35 -25 41 -76 3 -32 4 -61 1 -66 -11 -18 -35
3 -35 30 0 53 -18 80 -66 102 l-46 20 6 79 c7 75 6 79 -13 79 -12 0 -27 -12
-38 -30 -9 -16 -23 -30 -30 -30 -19 0 -16 11 12 52 19 29 34 38 72 46 26 5 49
10 50 11 1 0 18 -13 38 -30z m-74 -241 c-4 -12 -26 -35 -49 -51 -34 -25 -45
-28 -55 -18 -9 9 -3 19 31 47 23 20 42 42 42 50 0 12 4 12 20 4 14 -8 17 -16
11 -32z"/>
<path d="M490 441 c-61 -16 -65 -19 -65 -47 0 -26 4 -29 33 -32 l33 -3 -3
-137 -3 -137 -228 -3 -228 -2 3 -38 3 -37 285 0 285 0 0 40 c0 34 -3 40 -22
43 -23 3 -23 6 -23 138 0 112 2 134 15 134 11 0 15 12 15 50 0 58 1 57 -100
31z m80 -31 l0 -30 -65 0 c-85 0 -89 22 -7 43 31 8 60 15 65 16 4 1 7 -12 7
-29z m-32 -187 c-2 -98 -6 -138 -15 -141 -10 -3 -13 29 -13 137 0 120 2 141
15 141 13 0 15 -20 13 -137z m47 -178 c0 -19 -8 -20 -259 -23 -155 -1 -264 2
-269 7 -5 5 -7 17 -4 25 6 14 37 16 269 14 255 -3 263 -4 263 -23z"/>
</g>
</svg>

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <!--Four Icon Single-->
                <div class="four-icon__single">
                    <div class="four-icon__img">
                        <img src="assets/images/home/530 x 668-v02.jpg" alt="">
                        <div class="four-icon__content-box">
                            <h3 class="four-icon__title">Sports Grounds</h3>
                            <p class="four-icon__text">Play, unite, and back our cause.</p>
                        </div>
                    </div>
                    <div class="four-icon__bottom-icon">
                        <span class="icon-cheque">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
fill="#25aae2" stroke="none">
<path d="M372 618 c-20 -20 -15 -76 7 -88 61 -32 123 37 75 84 -18 19 -65 21
-82 4z m78 -36 c0 -42 -51 -57 -71 -20 -10 18 -8 24 11 40 26 21 60 9 60 -20z"/>
<path d="M273 518 c-11 -13 -42 -55 -68 -95 -40 -61 -48 -82 -55 -140 -5 -45
-18 -89 -39 -131 -26 -51 -29 -66 -21 -83 21 -38 52 -20 92 56 21 39 41 83 45
98 7 24 10 26 26 15 17 -13 17 -16 -3 -73 -27 -79 -24 -109 13 -113 15 -2 27
-8 27 -13 0 -19 67 -40 94 -30 32 13 56 49 56 84 0 36 -40 77 -76 77 -28 0
-27 -2 -8 66 4 17 -2 27 -28 44 -18 13 -35 25 -37 26 -1 2 0 8 4 14 4 7 16 3
36 -10 36 -26 69 -19 69 15 0 17 -9 29 -30 40 -16 9 -30 19 -30 24 0 19 15 18
44 -3 17 -13 50 -30 74 -37 37 -11 45 -10 58 3 13 12 14 20 5 37 -7 11 -19 21
-27 21 -28 0 -92 42 -105 69 -33 66 -78 81 -116 39z m91 -37 c30 -47 67 -78
106 -86 29 -6 43 -35 18 -35 -23 1 -93 37 -112 58 -10 12 -23 19 -27 16 -5 -3
-28 -33 -50 -66 -36 -53 -40 -62 -25 -70 9 -5 28 -19 41 -31 26 -22 26 -22 10
-69 -9 -26 -23 -52 -31 -59 -8 -6 -14 -24 -14 -40 0 -19 -5 -29 -15 -29 -20 0
-19 11 7 93 l23 69 -30 24 c-16 13 -38 24 -48 26 -11 2 -26 12 -34 24 -12 19
-9 28 38 100 28 43 58 87 67 97 24 27 50 20 76 -22z m16 -151 c0 -17 -16 -18
-41 -3 -30 18 -34 25 -23 36 7 7 64 -23 64 -33z m-170 -92 c0 -27 -73 -168
-87 -168 -24 0 -22 18 12 89 19 40 35 84 35 97 0 22 2 23 20 12 11 -7 20 -21
20 -30z m185 -101 c17 -13 16 -15 -11 -24 -36 -13 -54 -7 -54 18 0 23 37 26
65 6z m-50 -83 c-6 -9 -14 -16 -20 -17 -14 -3 -36 48 -29 67 5 14 10 13 32 -9
19 -19 24 -30 17 -41z m72 31 c6 -18 -23 -55 -44 -55 -10 0 -12 8 -7 28 10 40
39 56 51 27z"/>
<path d="M420 200 c0 -5 11 -10 24 -10 14 0 28 5 31 10 4 6 -7 10 -24 10 -17
0 -31 -4 -31 -10z"/>
<path d="M495 150 c-4 -6 8 -10 30 -10 22 0 34 4 30 10 -3 6 -17 10 -30 10
-13 0 -27 -4 -30 -10z"/>
<path d="M485 80 c-4 -6 8 -10 30 -10 22 0 34 4 30 10 -3 6 -17 10 -30 10 -13
0 -27 -4 -30 -10z"/>
</g>
</svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <!--Four Icon Single-->
                <div class="four-icon__single">
                    <div class="four-icon__img">
                        <img src="assets/images/home/530-x-668-v03.jpg" alt="">
                        <div class="four-icon__content-box">
                            <h3 class="four-icon__title">Banquet Halls</h3>
                            <p class="four-icon__text">Celebrate with us, and support the community.</p>
                        </div>
                    </div>
                    <div class="four-icon__bottom-icon">
                        <span class="icon-donation">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
fill="#25aae2" stroke="none">
<path d="M195 480 c-3 -5 -1 -19 6 -31 9 -18 8 -24 -5 -31 -20 -11 -23 -117
-4 -136 7 -7 31 -12 55 -12 l43 0 0 -40 c0 -29 -4 -40 -15 -40 -8 0 -15 -9
-15 -20 0 -18 7 -20 54 -20 58 0 80 15 53 35 -11 8 -17 26 -17 49 0 36 0 36
43 36 24 0 48 5 55 12 18 18 16 127 -2 134 -10 4 -13 15 -9 40 5 30 3 34 -16
34 -25 0 -39 -26 -22 -43 14 -14 14 -27 0 -27 -18 0 -66 45 -61 58 2 7 -5 12
-18 12 -15 0 -20 -5 -17 -14 4 -9 -2 -17 -13 -21 -10 -3 -21 -12 -24 -20 -3
-8 -12 -15 -21 -15 -18 0 -19 12 -4 27 7 7 9 19 6 27 -7 18 -42 22 -52 6z
m235 -14 c0 -3 -4 -8 -10 -11 -5 -3 -10 -1 -10 4 0 6 5 11 10 11 6 0 10 -2 10
-4z m-75 -36 c4 -6 -10 -10 -35 -10 -25 0 -39 4 -35 10 3 6 19 10 35 10 16 0
32 -4 35 -10z m85 -40 c0 -6 -47 -10 -120 -10 -73 0 -120 4 -120 10 0 6 47 10
120 10 73 0 120 -4 120 -10z m0 -60 c0 -29 -4 -40 -15 -40 -10 0 -16 11 -17
33 l-1 32 -4 -32 c-6 -43 -33 -45 -33 -3 0 17 -4 30 -10 30 -5 0 -10 -13 -10
-30 0 -16 -4 -30 -10 -30 -5 0 -10 14 -10 30 0 17 -4 30 -10 30 -5 0 -10 -13
-10 -30 0 -16 -4 -30 -10 -30 -5 0 -10 11 -10 24 0 14 -4 28 -10 31 -6 4 -10
-7 -10 -24 0 -44 -29 -42 -32 2 l-1 32 -4 -32 c-6 -50 -33 -43 -33 7 l0 40
120 0 120 0 0 -40z m-110 -94 c0 -19 -4 -38 -10 -41 -6 -4 -10 10 -10 34 0 23
5 41 10 41 6 0 10 -15 10 -34z m30 -66 c0 -5 -18 -10 -40 -10 -22 0 -40 5 -40
10 0 6 18 10 40 10 22 0 40 -4 40 -10z"/>
<path d="M4 437 c-2 -7 -3 -74 -2 -148 3 -130 4 -134 26 -137 21 -3 22 0 22
52 l0 56 35 0 35 0 0 -55 c0 -52 1 -55 25 -55 25 0 25 1 25 80 l0 80 -60 0
-60 0 0 70 c0 64 -2 70 -20 70 -11 0 -23 -6 -26 -13z m36 -72 l0 -65 55 0 c30
0 55 -4 55 -10 0 -6 -28 -10 -65 -10 l-65 0 0 75 c0 43 4 75 10 75 6 0 10 -28
10 -65z m0 -149 c0 -25 -4 -48 -10 -51 -6 -4 -10 13 -10 44 0 28 5 51 10 51 6
0 10 -20 10 -44z m107 -33 c-2 -16 -4 -3 -4 27 0 30 2 43 4 28 2 -16 2 -40 0
-55z"/>
<path d="M588 383 l-3 -68 -57 -3 -58 -3 0 -79 c0 -79 0 -80 25 -80 24 0 25 3
25 61 l0 60 33 -3 c32 -3 32 -4 35 -60 3 -49 6 -58 22 -58 16 0 19 9 22 63 2
34 2 101 0 150 -3 77 -5 87 -22 87 -17 0 -19 -9 -22 -67z m30 -25 l-3 -73 -62
-3 c-39 -2 -63 1 -63 8 0 6 23 10 55 10 l55 0 0 65 c0 38 4 65 10 65 7 0 10
-27 8 -72z m-121 -170 c-2 -18 -4 -6 -4 27 0 33 2 48 4 33 2 -15 2 -42 0 -60z
m123 27 c0 -25 -4 -45 -10 -45 -5 0 -10 20 -10 45 0 25 5 45 10 45 6 0 10 -20
10 -45z"/>
</g>
</svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <!--Four Icon Single-->
                <div class="four-icon__single">
                    <div class="four-icon__img">
                        <img src="assets/images/resources/530-x-668.jpg" alt="">
                        <div class="four-icon__content-box">
                            <h3 class="four-icon__title">Meeting Rooms</h3>
                            <p class="four-icon__text">Gather, empower, and support our cause</p>
                        </div>
                    </div>
                    <div class="four-icon__bottom-icon">
                        <span class="icon-handshake">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
fill="#25aae2" stroke="none">
<path d="M226 604 c-13 -33 -6 -84 14 -104 11 -11 20 -27 20 -35 0 -21 13 -19
35 5 13 14 31 20 61 20 48 0 64 17 64 69 0 58 -4 61 -100 61 -71 0 -89 -3 -94
-16z m164 -44 c0 -40 0 -40 -39 -40 -21 0 -44 -6 -50 -14 -19 -23 -51 15 -51
59 l0 35 70 0 70 0 0 -40z"/>
<path d="M100 530 c-25 -25 -25 -48 -2 -96 14 -32 15 -38 3 -42 -28 -9 -61
-51 -61 -77 0 -16 -6 -25 -15 -25 -10 0 -15 -11 -15 -35 0 -19 4 -35 10 -35 5
0 11 -44 12 -97 l3 -98 138 -3 137 -3 0 101 c0 82 3 100 15 100 10 0 15 11 15
35 0 32 3 35 28 35 15 0 33 5 40 12 9 9 12 8 12 -8 0 -14 -10 -23 -32 -29
l-33 -10 0 -105 0 -105 25 0 c24 0 25 3 28 73 l3 72 47 0 c27 0 57 7 70 16 20
14 22 24 22 103 0 54 -4 91 -12 99 -7 7 -33 12 -58 12 -38 0 -51 -5 -75 -30
-20 -21 -38 -30 -61 -30 -18 0 -39 -3 -48 -6 -19 -7 -21 -50 -3 -57 6 -3 2 -6
-10 -6 -19 -1 -23 4 -23 28 0 21 -10 37 -37 58 -35 29 -36 30 -20 54 22 31 22
82 -1 102 -25 23 -78 21 -102 -3z m90 -21 c27 -49 -23 -108 -61 -73 -21 19
-25 64 -7 82 19 19 56 14 68 -9z m11 -141 c44 -35 54 -78 19 -78 -11 0 -20 7
-20 15 0 8 -4 15 -10 15 -5 0 -10 -7 -10 -15 0 -10 -10 -15 -30 -15 -20 0 -30
5 -30 15 0 8 -4 15 -10 15 -5 0 -10 -7 -10 -15 0 -8 -7 -15 -15 -15 -10 0 -15
10 -15 30 0 23 7 33 30 45 17 9 30 20 30 25 0 19 32 9 71 -22z m313 26 c13 -5
16 -22 16 -78 0 -39 -4 -76 -8 -83 -4 -6 -34 -13 -67 -15 l-60 -3 -3 -77 c-4
-108 -22 -99 -22 11 l0 90 38 3 c36 3 37 4 40 47 2 24 1 50 -3 59 -5 13 -9 12
-28 -7 -18 -16 -34 -21 -73 -19 -48 1 -48 2 -8 5 31 3 49 13 74 39 33 33 66
42 104 28z m-194 -141 c0 -10 -32 -13 -145 -13 -109 0 -145 3 -145 13 0 9 36
12 145 13 114 0 145 -2 145 -13z m-30 -123 l0 -90 -115 0 -115 0 0 90 0 90
115 0 115 0 0 -90z"/>
<path d="M436 528 c-23 -32 -20 -54 11 -77 40 -33 93 -7 93 44 0 51 -75 74
-104 33z m74 -19 c9 -15 8 -24 -1 -35 -18 -22 -53 -13 -57 15 -6 40 39 56 58
20z"/>
<path d="M570 260 l0 -80 -70 0 -71 0 3 -77 c3 -76 4 -78 28 -78 23 0 25 4 28
48 l3 47 40 0 39 0 0 -45 c0 -43 1 -45 30 -45 l30 0 0 155 0 155 -30 0 -30 0
0 -80z m40 -30 l0 -90 -69 0 -70 0 -4 -47 -3 -48 -2 52 -2 52 63 3 62 3 3 83
c4 111 22 105 22 -8z m-3 -162 c-2 -13 -4 -5 -4 17 -1 22 1 32 4 23 2 -10 2
-28 0 -40z"/>
</g>
</svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Counters One Start-->
<section class="counters-one">
    <div class="container">
        <ul class="counters-one__box list-unstyled">
            <li class="counter-one__single">
                <h3 class="odometer" data-count="300">00</h3><span class="counter-one__letter">PN</span>
                <p class="counter-one__text">Banquet Hall Capacity<br>(with dancing)</p>
            </li>
            <li class="counter-one__single">
                <h3 class="odometer" data-count="350">00</h3><span class="counter-one__letter">PN</span>
                <p class="counter-one__text">Banquet Hall Capacity<br> (without dancing)</p>
            </li>
            <li class="counter-one__single">
                <h3 class="odometer" data-count="200">00</h3><span class="counter-one__letter">PN</span>
                <p class="counter-one__text">Center Hall Capacity<br> (for youth)</p>
            </li>
            <li class="counter-one__single">
                <h3 class="odometer" data-count="500">00</h3><span class="counter-one__letter">PN</span>
                <p class="counter-one__text">Gym Hall Capacity<br> (for workout)</p>
            </li>
        </ul>
    </div>
</section>

<!-- The modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">

        <div class="modal-header p-0 w-50">
            <span class="close">&times;</span>
            <img src="assets/images/home/banner-min.jpg" class="w-100 h-100" style="object-fit:cover">
            <!--<h3 class="modal-heading">Add a heading here</h3>-->
        </div>
        <div class="modal-body w-50 d-flex align-items-left flex-column justify-content-center p-3" style="text-align:center">
            <h3 class="mb-2" style="    font-family: var(--thm-font);
color: var(--thm-gray);
font-size: 28px;
line-height: 30px;
font-weight: 700;
text-align:left;
}">Subheading</h3>
            <h3 class="mb-4" style="    font-family: var(--thm-font);
color: var(--thm-gray);
font-size: 38px;
line-height: 30px;
font-weight: 700;
text-align:left;
}">Heading</h3>
            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            <a href="#" class="main-menu__donate-btn m-0" style="display:block !important;width:fit-content"><i class="fa fa-plus-circle"></i>Become a member</a>
        </div>
    </div>
</div>
@endsection