@extends('layout.app')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url(assets/images/backgrounds/1894-x-348.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>About</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>About</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

<!--About Page Start-->
    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-page__left">
                        <div class="about-page__img">
                            <img src="{{asset('assets/images/about/Abou-us-01.jpg')}}" alt="">
                            <div class="about-page__trusted">
                                <h3>We’re trusted by <span>generous</span> donors</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Illuminate Hope</span>
                            <h2 class="section-title__title">We believe in transforming lives together.</h2>
                        </div>
                        <p class="about-page__right-text">Our mission is simple yet profound – to bring happiness and a brighter future to the Muslim community, especially the lives of children. We believe in the power of collective compassion, and we invite you to join hands with us. Your contribution, no matter the size, plays a vital role in making a difference. 
</p>
                        <h3 class="about-page__right-title">Your support is the key to our shared vision for a happier and brighter tomorrow.</h3>
                        <div class="about-five__progress-wrap">

                            <!--<div class="about-five__progress">-->
                            <!--    <div class="about-five__progress-box">-->
                            <!--        <div class="circle-progress"-->
                            <!--            data-options='{ "value": 0.6,"thickness": 3,"emptyFill": "#e5eeec","lineCap": "square", "size": 138, "fill": { "color": "#15c8a0" } }'>-->
                            <!--        </div>-->
                            <!--        <span>60%</span>-->
                            <!--    </div>-->
                            <!--    <div class="about-five__progress-content">-->
                            <!--        <h3>Recreational Activites</h3>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="about-five__progress">-->
                            <!--    <div class="about-five__progress-box">-->
                            <!--        <div class="circle-progress"-->
                            <!--            data-options='{ "value": 0.4,"thickness": 3,"emptyFill": "#e5eeec","lineCap": "square", "size": 138, "fill": { "color": "#15c8a0" } }'>-->
                            <!--        </div>-->
                            <!--        <span>40%</span>-->
                            <!--    </div>-->
                            <!--    <div class="about-five__progress-content">-->
                            <!--        <h3>Educational Activities</h3>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Page Start-->


    <!--Causes Details Start-->
    <section class="causes-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="causes-details__left-bar">
                        <div class="causes-details__img">
                            <div class="causes-details__img-box">
                                <img src="{{asset('assets/images/about/770-x-403.jpg')}}" alt="">
                                <div class="causes-details__category">
                                    <span>OREF</span>
                                </div>
                            </div>
                            <!--<div class="causes-details__progress">-->
                            <!--    <div class="bar">-->
                            <!--        <div class="bar-inner count-bar" data-percent="36%">-->
                            <!--            <div class="count-text">36%</div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="causes-details__goals">-->
                            <!--        <p><span>$25,270</span> Raised</p>-->
                            <!--        <p><span>$30,000</span> Goal</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <div class="causes-details__text-box">
                            <h3>Empowering Futures.</h3>
                            <p class="causes-details__text-1">With gratitude for our donors and the Muslim community's hope, OREF is dedicated to empowering everyone for a brighter future. Every contribution spark hope, weaving a narrative of progress and a brighter future. Join us in this transformative journey, where kindness becomes a beacon lighting the way to empowerment for all. </p>
                              <h3>Al Bayan Academy: Nurturing Minds, Powering Futures.</h3>
                            <p class="causes-details__text-2">OREF is launching the Al Bayan Academy, a school with a mission. Designed to start soon, it's not just about education but shaping young minds. Al Bayan Academy aligns with OREF's goal of empowering Muslim communities through education. Our focus goes beyond academics – we're here to empower children, ensuring they thrive both in education and as compassionate individuals. 
</p>
                        </div>
                        <div class="causes-details__images-box">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="causes-details__images-single">
                                        <img src="{{asset('assets/images/about/update-02.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="causes-details__images-single" style="height:100%">
                                        <img src="{{asset('assets/images/about/update-03.jpg')}}" alt="" style="height:100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="causes-details__summary" style="display:flex;justify-content:space-between">
                            <div class="causes-details__summary-text">
                                <p>OREF introduces a first Muslim High School, a heartfelt initiative in our Muslim community. Focused on nurturing faith and empowering dreams, it's more than a school—it's a beacon of education, illuminating bright futures. 
</p>
                            </div>
                            <div class="causes-details__summary-list" style="width:48%">
                                <ul class="causes-details__summary-list-box list-unstyled" style="    display: flex;
flex-wrap: wrap;
gap: 15px;
align-items: baseline;
justify-content: flex-start;">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Education </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Empowerment </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Community Uplift</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Brighter Futures </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Well-rounded Individuals </p>
                                        </div>
                                    </li>
                                </ul>
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-3">
                  <a href="https://albayanacademyusa.com/" class="join-one__btn thm-btn" style="    width: 225px;"><i class="fas fa-arrow-circle-right" ></i>Learn
                            More</a>
            </div>
        </div>
    </section>

    
    
    
<!--Join One Start-->
    <section class="join-one join-one__about">
        <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/about/1920-x-1200.jpg
)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="join-one__inner">
                        <h2 class="join-one__title">Empower Achievements: With OREF,<br>your support propels the journey toward a brighter tomorrow.  

</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
  
    

    <section class="become-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="become-volunteer__inner">
                        <div class="become-volunteer__left">
                            <h2>Join the Journey<br> to Provide Education to Children</h2>
                            <div class="become-volunteer__big-text">
                                <h2>Become a Donor</h2>
                            </div>
                        </div>
                        <div class="become-volunteer__btn-box">
                            <a href="donate.html" class="become-volunteer__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


@endsection