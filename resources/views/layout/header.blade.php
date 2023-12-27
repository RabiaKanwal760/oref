<header class="main-header clearfix">
    <div class="main-header__logo">
        <a href="index.html">
 <img class="log-img" src="{{asset('assets/images/resources/Logo-footer.png')}}" alt="" style="height:100;width:100%">
        </a>
    </div>
    <div class="main-menu-wrapper">
        <div class="main-menu-wrapper__top">
            <div class="main-menu-wrapper__top-inner">
                <div class="main-menu-wrapper__left">
                    <div class="main-menu-wrapper__left-content">
                        <div class="main-menu-wrapper__left-text">
                            <p>Welcome to the Ohio Recreation & Education Foundation</p>
                        </div>
                        <div class="main-menu-wrapper__left-email-box">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="email">
                                <a href="mailto:needhelp@company.com">needhelp@oref.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-wrapper__right">
                    <div class="main-menu-wrapper__right-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-wrapper__bottom">
            <nav class="main-menu">
                <div class="main-menu__inner">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="current">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="about.html">About</a>
                        </li>
                        @if (!isset($gallery))<li class="dropdown">
                            <a href="events.html">Facility Rental</a>
                        </li>
                         <li class="dropdown">
                            <a href="#">Projects</a>
                            
                              <ul style="top: 77px;">
                                <li><a href="https://albayanacademyusa.com/">Al-Bayan Academy</a></li>
                            </ul>
                        </li>@else 
                        <li class="dropdown">
                            <a href="events.html">Events</a>
                        </li>
                        {{-- <li><a href="contact.html">Contact</a></li> --}}
                         @endif
                             <li><a href="support.html">Support Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    
                           <!--<li><a href="gallery.html">Gallery</a></li>-->
                    </ul>
                    <div class="main-menu__right" style="padding:0">
                        @if (!isset($gallery))<a href="#" class="main-menu__donate-btn"><i class="fa fa-plus-circle"></i>Become a member</a>@endif
                        <a href="donate.html" class="main-menu__donate-btn" style="    margin-left: 15px;
}
"><i class="fa fa-heart"></i>Donate </a>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>

</header>