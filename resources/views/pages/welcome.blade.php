@extends('layouts.app')

@section('content')
<div class="container-fluid welcomeImage py-5">
<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
      <div class="col-lg-8">
      <img class="img-fluid rounded" src="{{ asset('storage/images/index3.png') }}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-4">
        <h1 class="font-weight-bold text-white">Looking For A Modern, Responsive And Mobile Friendly Website?</h1>
        <p class="font-weight-bold text-light">You have come to the right place, our packages include the most popular PHP frameworks, javascript and jquery libraries as well as Bootstrap 4. We also offer Wordpress and other popular CMS software as well as a variety of ecommerce solutions to suit your needs. </p>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card bg-gradient-info text-white my-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">What are you waiting for? Check out the packages below to get your webiste online to be viewed by millions of visitors!</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <h2 class="card-title">Starter Website</h2>
            <p class="card-text">Looking for a low cost solution to get your organization or business online? Then the Starter Website Package is a perfect choice, offering all the services and tools you will need to get your business online.</p>
          </div>
          <div class="card-footer">
            <a href="services" class="btn btn-block btn-info">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <h2 class="card-title">Basic Website</h2>
            <p class="card-text">Need a website that offers content management, ecommerce or even a blog? The Basic Website Package includes all the features the Starter Package offers and all the tools required to get your business online!</p>
          </div>
          <div class="card-footer">
            <a href="services" class="btn btn-block btn-info">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <h2 class="card-title">Premium Website</h2>
            <p class="card-text">Our Premium Website Package is designed for small to large businesses offering a wide range of features and addons. The Premium Website Package includes all the features the Starter & Basic Packages offer and More!</p>
          </div>
          <div class="card-footer">
            <a href="services" class="btn btn-block btn-info">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->    
</div>
@endsection
