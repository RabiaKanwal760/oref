<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <title>OREF | Home</title>
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/oref180.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/oref.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/oref16.png" />
        <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
        <meta name="description" content="" />
    
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
        <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
        <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
        <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
        <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
        <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
        <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
        <link rel="stylesheet" href="assets/vendors/halpes-icons/style.css">
        <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
        <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    
        <!-- template styles -->
        <link rel="stylesheet" href="assets/css/halpes.css" />
        <link rel="stylesheet" href="assets/css/halpes-responsive.css" />
        
        <style>
            
            @media(max-width:768px){
                .why-choose__left-bottom{
                    display:flex;
                    flex-direction:column;
                }
            }
            
           .slider-img-filter{
               filter: brightness(0.5);
           }
           
           .close{
                   position: absolute;
        right: 10px;
        top: 0;
        z-index:10;
           }
           
           
           @media(max-width:1331px){
               .modal-content{
                   width:70%;
               }
           }
            @media(max-width:951px){
               .modal-content{
                   width:70%;
                   height:80%;
               }
           }
            @media(max-width:730px){
               .modal-content{
                   width:90%;
                   height:90%;
               }
           }
           
           @media(max-width:530px){
               .modal-header{
                   width:100% !important;
                   height:50%;
               }
               
               .modal-body{
                   width:100% !important;
                   height:50%;
               }
               .modal-content{
                   flex-direction:column !important;
               }
           }
        </style>
        
    </head>
    <body>
        <div class="preloader">
            <img class="preloader__image" src="assets/images/loader.png" alt="" />
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">
            <!-- here is header -->
            @include('layout.header')
            @yield('content')
    
    
            <!--Site Footer One Start-->
    @include('layout.footer')
            <!--Site Footer One End-->
    
    
        </div>
        <!-- /.page-wrapper -->
    
    @include('layout.mobile-nav')
        
        <!-- /.mobile-nav__wrapper -->
    
        <!-- script is here -->
        @include('layout.script')
    </body>
</html>
