@extends('layout.app')
@section('content')


   
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url(assets/images/orientHall/Orient-hall.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Youth Center</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Youth Center</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->
    
    <!--Gallery Two End-->

 
    <!--Gallery page End-->

    <section class="event-header" style="margin-bottom:50px; margin-top:50px">
        <div class="container">
           <div class="row">
                <div class="col-xl-12">
                    <div class="events-details__img">
                        <!--<img src="assets/images/eventDetails/event-details-header.png" alt="">-->
<!--                            <iframe  src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1&controls=0" style="width: 100%;-->
<!--    height: 100vh;">-->
<!--</iframe>-->
<iframe style="width: 100%; height:70vh;" src="https://www.youtube.com/embed/nqye02H_H6I?autoplay=1&mute=1&controls=0" title="4K Relaxing Nature Sounds - Short Video Clips of Nature" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <!--<div class="event-details__date-box">-->
                        <!--   <p>20$</p>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="view-photos d-flex">
                    <button onclick=openGallery()>View Photos</button>
                    <span class="main-menu__donate-btn" style="margin-left:10px; display:block !important; width:fit-content;pointer-events:none;border-radius: 9px;">Price: 80$</span>
                </div>
            </div>
        </div>
    </section>
    
   
    
    
         <!--Events Details Start-->
    <section class="event-details" style="padding-top:50px">
        <div class="container">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="event-details__left">
                        <div class="event-details__top-content">
                            <h2 class="event-details__title">Rules and Regulations.</h2>
                            <p class="event-details__text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p class="event-details__text-2"><ul><li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li></ul></p>
                        </div>
                        <div class="event-details__bottom-content">
                            <h3 class="event-details__bottom-title">More Details</h3>
                            <p class="event-details__bottom-text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <!--<p class="event-details__bottom-text-2">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum ley of type and scrambled it to make a type specimen book.</p>-->
                            <!--<a href="#" class="event-details__bottom-content-btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Register Now</a>-->
                          <h3 class="event-details__bottom-title">Pricing Details</h3>
                            <p class="event-details__bottom-text-1">$14,99.00 (Including VAT + Service Charges)</p>
                          
                            <p><button  onclick="openPopup()" class="causes-three__top-btn thm-btn" style="background:#25aae2;color:#fff;   border: 1px solid #25aae2;   font-size: 14px;
padding: 10px 20px;"><i class="fas fa-arrow-circle-right"></i>Book now</button></p>
                        </div>
                    </div>
                </div>
               ->
            </div>
        </div>
    </section>
    <!--Events Details End-->
    
       <!--Become Volunteer Start-->
    <section class="become-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="become-volunteer__inner">
                        <div class="become-volunteer__left">
                            <h2>Support our cause by booking your space with us</h2>
                            <div class="become-volunteer__big-text">
                                <h2>Book a rental</h2>
                            </div>
                        </div>
                        <div class="become-volunteer__btn-box">
                            <button onclick="openPopup()" class="become-volunteer__btn thm-btn" style="width: max-content;
font-size: 16px;
font-weight: 900;
padding: 18.5px 50px;"><i
                                    class="fas fa-arrow-circle-right"></i>Reserve Now</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer End-->

 <!--reservation form-->
    


</div>
</div>

@endsection