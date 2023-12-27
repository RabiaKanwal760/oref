@extends('layout.app')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url(assets/images/support/header-img.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Support Us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Support Us</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--support page start-->


   <section class="help-them-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="help-them-two__left">
                        <div class="help-them-two-bg"
                            style="background-image: url(assets/images/support/562-x-668.jpg)"></div>
                        <div class="help-them-two__img">
                            <img src="{{asset('assets/images/support/Support-01.jpg')}}" alt="">
                            <!--<a href="https://www.youtube.com/watch?v=i9E_Blai8vk"-->
                            <!--    class="help-them-two__video-btn video-popup"><i class="fa fa-play"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="help-them-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">We Help Them</span>
                            <h2 class="section-title__title">Donation at OREF<br>Creates a Meaningful Impact</h2>
                        </div>
                     
                        <div class="help-them-two__bottom">
                            <h3 class="help-them-two__bottom-title">Support Our Causes</h3>
                            <p class="help-them-two__bottom-text">At OREF, we uphold our dedication to uplifting the Muslim community through your generous contributions. Your financial support is valuable, and you can further enhance our mission by donating to our facilities. Join us in making a difference through various donation avenues.</p>
                        </div>
                        
                        <div class="help-them-two__list-box mt-3">
                                                    <button  onclick="openPopup()" class="causes-three__top-btn thm-btn" style="background:#25aae2;color:#fff;   border: 1px solid #25aae2;   font-size: 14px;
padding: 10px 20px;"><i class="fas fa-arrow-circle-right"></i>Book a rental</button>
  <a href="donate.html" class="causes-three__top-btn thm-btn" style="color: #25aae2;
background: white;
border: 1px solid; font-size: 14px;
padding: 10px 20px;"><i class="fas fa-arrow-circle-right"></i>Donate now</a>

                        </div>
                     
                        <div class="help-them-two__donation-text-box">
                            <h2>Rely on us</h2>
                            <div class="help-them-two__donation-icon" style="    height: 110px;
width: 150px;
">
                                <img src="{{asset('assets/images/support/heart.png')}}" alt="" style="height:100%;width:100%;object-fit:contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Help Them Two End-->
    
      <!--Feature One Start-->
    <section class="feature-one mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Feature One Single-->
                    <div class="feature-one__single feature-one__single-1">
                        <div class="feature-one__icon">
                            <span class="icon-heart"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3>One Time Donation</h3>
                            <p>Make a one-time impact with your donation</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Feature One Single-->
                    <div class="feature-one__single feature-one__single-2">
                        <div class="feature-one__icon">
                            <span class="icon-adoption"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3>Membership Giving</h3>
                            <p>Become a member to support our cause</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Feature One Single-->
                    <div class="feature-one__single feature-one__single-3">
                        <div class="feature-one__icon">
                            <span class="icon-donation-1"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3>Recurring Contribution</h3>
                            <p>Sustain our mission with a recurring contribution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->
    
      <!--Causes Three Start-->
    <section class="causes-three">
        <div class="container">
            <div class="causes-three__top">
                <div class="causes-three__top-title">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Empower Change</span>
                        <h2 class="section-title__title">Donate to our<br>important causes</h2>
                    </div>
                </div>
                <div class="causes-three__top-btn-box">
                    <a href="#" class="causes-three__top-btn thm-btn" style="background:#25aae2;color:#fff"><i class="fas fa-arrow-circle-right"></i>Learn More</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="causes-three__carousel owl-theme owl-carousel">
                        <!--Causes Three Single-->
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img src="{{asset('assets/images/support/310-x-229-v01.jpg')}}" alt="">
                                    <a href="causes-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="causes-one__category">
                                    <span>OREF</span>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="causes-details.html">Home for the Homeless </a>
                                </h3>
                                <p class="causes-one__text">Help build homes and provide a haven for those without shelter, transforming lives with your support. </p>
                            </div>
                           
                        </div>
                        <!--Causes Three Single-->
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img src="{{asset('assets/images/support/educational-initiatives.jpg')}}" alt="">
                                    <a href="causes-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="causes-one__category">
                                    <span>OREF</span>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="causes-details.html">Educational Initiatives </a>
                                </h3>
                                <p class="causes-one__text">Transform communities through educational initiatives, shaping a brighter future with your contribution. </p>
                            </div>
                         
                        </div>
                        <!--Causes Three Single-->
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img src="{{asset('assets/images/support/310-x-229-(sustainable-development).jpg')}}" alt="">
                                    <a href="causes-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="causes-one__category">
                                    <span>OREF</span>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="causes-details.html">Sustainable Development</a>
                                </h3>
                                <p class="causes-one__text">Support sustainable development projects that create lasting positive impacts for generations to come. </p>
                            </div>
                           
                        </div>
                        <!--Causes Three Single-->
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img src="{{asset('assets/images/support/310-x-229-(hope-for-poor-childern).jpg')}}" alt="">
                                    <a href="causes-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="causes-one__category">
                                    <span>OREF</span>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="causes-details.html">Hope for Poor Children</a>
                                </h3>
                                <p class="causes-one__text">Your donation brings hope to the lives of underprivileged children by promoting their rights.</p>
                            </div>
                            
                        </div>
                        <!--Causes Three Single-->
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img src="{{asset('assets/images/support/Rights-for-all.jpg')}}" alt="">
                                    <a href="causes-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="causes-one__category">
                                    <span>OREF</span>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="causes-details.html">Rights for All</a>
                                </h3>
                                <p class="causes-one__text">Your donation champions the rights of the poor, fostering empowerment and equality.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Causes Three End-->
    
    

    <!--News Two Start-->
    <section class="news-two">
        <div class="news-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/support/1920-x-1200.jpg)"></div>
        <div class="news-two-bg-overlay"></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Every Reservation Empowers</span>
                <h2 class="section-title__title">Supporting the Muslim Community<br>with Every Booking</h2>
            </div>
        </div>
    </section>
    <!--News Two End-->
    
    
    <!--reservation form-->
    
      <!--Become Volunteer Start-->
    <section class="become-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="become-volunteer__inner">
                        <div class="become-volunteer__left">
                            <h2>Secure Your Space, Boost Your Event,<br>Empower Our Muslim Community!</h2>
                            <div class="become-volunteer__big-text">
                                <h2>Become a Donor</h2>
                            </div>
                        </div>
                        <div class="become-volunteer__btn-box">
                            <button onclick="openPopup()" class="become-volunteer__btn thm-btn"><i
                                    class="fas fa-arrow-circle-right"></i>Reserve Now</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer End-->
    

@endsection