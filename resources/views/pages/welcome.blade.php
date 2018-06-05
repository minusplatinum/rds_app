@extends('layouts.app')

@section('content')
<div class="container-fluid welcomeImage py-5">
    <div class="container">
        <div id="welcomeCarousel" class="carousel" data-ride="carousel">
            <div class="carousel-inner" style="background-color:#f4f4f4;">
                <div class="carousel-item active">
                    <div style="min-height:300px;" class="welcomeSlide1 d-flex flex-column text-center py-4">
                        <h1 class="display-4">Welcome To RDS Web Designs!</h1>
                        <p class="lead text-muted font-weight-bold mb-0">Where We Focus On Coding Your Business's Future</p>
                        <p class="lead text-muted font-weight-bold"> For Online Success!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="min-height:300px;" class="welcomeSlide2 text-center py-3">
                        <h1 class="display-4">Check Out Our Website Packages!</h1>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">Website Hosting, Domain Name & Custom Email Included</p>
                        <a class="btn btn-success btn-lg" href="#" role="button">Learn More!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="min-height:300px;" class="welcomeSlide3 text-center py-3">
                        <h1 class="display-4">Awesome Website Features & Plugins?</h1>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">We Have A Wide Range Of Modern Website Plugins & Custom Features!</p>
                        <a class="btn btn-success btn-lg" href="#" role="button">Learn More!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="min-height:300px;" class="welcomeSlide4 text-center py-3">
                        <h1 class="display-4">Need More Then Just A Website?</h1>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">Ask Us About Our Website Applications</p>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">We Only Use The Best Frameworks & Libraries!</p>
                        <a class="btn btn-success btn-lg" href="#" role="button">Learn More!</a>
                    </div>
                </div>    
            </div>
        </div>
        <!-- Call to Action Well -->
        <div class="card text-white bg-primary my-4 text-center">
            <div class="card-body">
                <p class="text-white m-0 lead">Looking for a website to help grow your business online? Check out one of the packages below to Learn More!</p>
            </div>
        </div>
    </div><!-- container end -->
</div>
@endsection
