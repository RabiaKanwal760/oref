@extends('layout.app')
@section('content')

    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url(assets/images/backgrounds/Header-image.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Event Details</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Event Details</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

      <!--Events Details Start-->
    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="events-details__img">
                        <img src="assets/images/eventDetails/event-details-header.png" alt="">
                        <div class="event-details__date-box">
                            <p>20 <br> Jan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="event-details__left">
                        <div class="event-details__top-content">
                            <h2 class="event-details__title">Birthdays Redefined, Memories Reimagined.</h2>
                            <p class="event-details__text-1">Step into a world where birthdays transcend the ordinary. Our exceptional spaces are the canvas for unforgettable celebrations. From intimate gatherings to grand festivities, each birthday becomes a masterpiece, filled with joy, laughter, and the magic of shared moments. Elevate your special day, create lasting memories, and let every detail reflect the uniqueness of your celebration. With us, birthdays aren't just events; they're cherished chapters in the story of your life. </p>
                            <p class="event-details__text-2">When you choose to host your birthday event with us, your joyous occasion becomes a catalyst for change. We allocate a portion of the funds generated from your event towards initiatives dedicated to helping those in need. Whether it's investing in community development projects or directly contributing to aid organizations, your celebration becomes a force for good. With each booking, you're not just creating memories for yourself but also playing a part in creating a brighter future for those less fortunate. Join us in making your special day not only about personal joy but also about extending a helping hand to those who need it most. </p>
                        </div>
                        <div class="event-details__bottom-content">
                            <h3 class="event-details__bottom-title">Birthday Celebration Booking Made Easy</h3>
                            <p class="event-details__bottom-text-1"> Planning your special day at OREF event facilities is a breeze. Just let us know your preferred date ahead of time, and we'll make sure it's reserved exclusively for your birthday bash. Once the date is set, we'll walk you through our fantastic halls, helping you choose the perfect spot for your celebration. From setting up the decorations to arranging everything just the way you like it, we're here to make your birthday uniquely yours. At OREF booking your celebration is simple and stress-free, ensuring your big day is as special as can be. </p>
                            <!--<p class="event-details__bottom-text-2">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum ley of type and scrambled it to make a type specimen book.</p>-->
                            <!--<a href="#" class="event-details__bottom-content-btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Register Now</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="event-details__right">
                        <div class="event-details__right-sidebar">
                            <div class="event-details__right-sidebar-title">
                                <h4>Event Details</h4>
                            </div>
                            <ul class="event-details__right-sidebar-list list-unstyled">
                                <li>
                                    <div class="left">
                                        <p>Starting Time:</p>
                                    </div>
                                    <div class="right">
                                        <h4>8:00AM to 2:00PM</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Date:</p>
                                    </div>
                                    <div class="right">
                                        <h4>9 Jan, 2021</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Categroy:</p>
                                    </div>
                                    <div class="right">
                                        <h4>Health</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Phone:</p>
                                    </div>
                                    <div class="right">
                                        <h4>92 666 888 0000</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Website:</p>
                                    </div>
                                    <div class="right">
                                        <h4>Info@event.com</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Location:</p>
                                    </div>
                                    <div class="right">
                                        <h4>8 Street, San Marcos <br> London D29, UK</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="event-details__right-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="event-details__map-box" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Events Details End-->
    <!--Gallery page End-->


@endsection