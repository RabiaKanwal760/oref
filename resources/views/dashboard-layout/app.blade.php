
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
   @include('dashboard-layout.css')
    @yield('Css')

  
</head>
<body>
    <div id="wrapper">
       
        @include('dashboard-layout.header')

        <!-- /. NAV SIDE  -->

       @include('dashboard-layout.sidebar')
        <!-- /. NAV TOP  -->

        @yield('content')
        
                       

    </div>
    <!-- /. WRAPPER  -->

   @include('dashboard-layout.footer')
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    @include('dashboard-layout.script')
    @yield('Script')


</body>
</html>
