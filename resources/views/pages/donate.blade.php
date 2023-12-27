@extends('layout.app')
@section('content')

    
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url(assets/images/support/header-img.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Donate</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Donate</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->
    
    
    <!--donation form-->
    
    <section class="donation-container">
        <img src="assets/images/support/header-img.jpg" class="bg-img">
        <div class="card">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1 class="section-title__title" style="font-size:40px">Support Our Mission:</h1>
                <h3 class="section-title__title" style="font-size:40px">Donate Now</h3>
                <p style="font-size:18px">Your contribution matters. Complete the form below and be part of positive change!</p>
            </div>
      
                <div class="col-md-6  col-sm-12 col-xs-12">
                          <form>
<div class="form-item">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
</div>

<div class="form-item">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
</div>

<div class="form-item">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address">
</div>

<div class="form-item">
    <label for="donation">Donation Amount:</label>
    <input type="number" id="donation" name="donation" required>
</div>

<!--<div class="form-item">-->
<!--    <label for="card-info">Card Information:</label>-->
<!--    <input type="text" id="card-info" name="card-info" required>-->
<!--</div>-->

<button type="submit">Pay Now</button>
</form>
                </div>
        </div>
        
    </section>
    
    

@endsection