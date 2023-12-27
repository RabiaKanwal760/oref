@extends('layout.app')
@section('content')
   <!--Page Header Start-->
   <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/contact/contactus1.png); background-position: top;"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Contact Us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Contact Us</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Contact With Us</span>
                <h2 class="section-title__title" style="font-size: 40px;
line-height: 53px;
">Ready to make a difference?<br> Whether you want to donate, book an event, or facilitate our services, reach out to us. We're here to connect! </h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__left">
                        <div class="contact-page__img">
                            <img src="{{asset('assets/images/contact/contactus2.png')}}" alt="">
                        </div>
                        <p class="contact-page__text">Whether you have questions, suggestions, or if you're looking to book a hall for an event, 
                        we're here to help. Please don't hesitate to reach out to OREF by using the following methods.</p>
                        <div class="contact-page__contact-info">
                            <ul class="contact-page__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-chat"></span>
                                    </div>
                                    <div class="text">
                                        <p>Call Us</p>
                                        <a href="tel:92 666 888 0000">92 666 888 0000</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="text">
                                        <p>Send Email</p>
                                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-address"></span>
                                    </div>
                                    <div class="text">
                                        <p>Visit Office</p>
                                        <h5>80 broklyn golden street</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__form">
                        <form action="{{asset('assets/inc/sendemail.php')}}" class="contact-page__main-form contact-form-validated">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn contact-page__btn"><i class="fas fa-arrow-circle-right"></i>Send a Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact page End-->

    <!--Contact Page Google Map Start-->
    <section class="contact-page-google-map">
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65315950.5679776!2d-100.80119752600224!3d2.3124385541045385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88405f59b9e61201%3A0x4db56cb330181a06!2sOREF%20Ohio%20Recreation%20and%20Education%20Foundation!5e0!3m2!1sen!2sae!4v1698312494712!5m2!1sen!2sae" class="contact-page-google-map__one" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2522.7502558105275!2d-84.31711922097806!3d39.506092499814606!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88405f59b9e61201%3A0x4db56cb330181a06!2sOREF%20Ohio%20Recreation%20and%20Education%20Foundation!5e0!3m2!1sen!2s!4v1702282321751!5m2!1sen!2s"  class="contact-page-google-map__one" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </section>
    <!--Contact Page Google Map End-->
    
    


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{asset('assets/images/resources/orefw.png')}}" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@oref.com">needhelp@oref.com</a>
            </li>
            <!-- <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li> -->
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>

@endsection