@extends('layouts.app')
@section('content')
<div class="container-fluid welcomeImage py-5">
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header alert alert-primary">
                    <h4 class="my-0 font-weight-normal">Starter Website</h4>
                </div>
                <div class="card-body">
                    <p>Looking for a low cost solution to get your organization or business online? Then the Starter Website Package is a perfect choice, offering all the services and tools you will need to get your business online.</p>           
                    <h1 class="card-title pricing-card-title">$199</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Responsive & Mobile Friendly</li>
                        <li>Custom Website Email</li>
                        <li>Up To 5 Website Pages</li>
                        <li>Google Maps Integration</li>
                    </ul>
                    
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header alert alert-info">
                    <h4 class="my-0 font-weight-normal">Basic Website</h4>
                </div>
                <div class="card-body">
                    <p>Need a website that offers content management, ecommerce or even a blog? The Basic Website Package includes all the features the Starter Package offers and all the tools required to get your business online!</p>             
                    <h1 class="card-title pricing-card-title">$299</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Custom Website Forms</li>
                        <li>Up To 10 Website Pages</li>
                        <li>Custom Features & Plugins</li>
                        <li>Basic Hosting & Domain Included</li>
                        
                    </ul>
                    
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header alert alert-success">
                    <h4 class="my-0 font-weight-normal">Premium Website</h4>
                </div>
                <div class="card-body">
                    <p>Our Premium Website Package is designed for small to large businesses offering a wide range of features and addons. The Premium Website Package includes all the features the Starter & Basic Packages offer and More!</p>
                    <h1 class="card-title pricing-card-title">$499</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Custom Templates & Themes</li>
                        <li>Up To 20 Website Pages</li>
                        <li>PHP Website Applications</li>
                        <li>Third Party API & Plugins</li>
                    </ul>
                    
                </div>
            </div>
        </div>        
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Looking For A Quick, Easy And Affordable Website?</h2>
                <p>The Starter Website Package includes:</p>
                <ul>
                <li>
                    <strong>Free Bootstrap 4 Templates</strong>
                </li>
                <li>A variety of features and addons</li>
                <li>Website hosting and domain credit</li>
                <li>Working contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
                </ul>
                <p>The Starter Website Package is an excellent choice for temporary websites, landing pages, single product websites, online resumes and much more! </p>
            </div>
            <div class="col-lg-6">
            <img class="img-fluid rounded" src="{{ asset('storage/images/siteBuilder.png') }}" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p></p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-info btn-block" href="contact">Request Call Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Need A Website That Grows With Your Business?</h2>
                <p>The Basic Website Package includes:</p>
                <ul>
                <li>
                    <strong>Custom Designed Website Pages</strong>
                </li>
                <li>Third Party plugins and API integrations</li>
                <li>Website hosting and domain credit</li>
                <li>CMS, blog and ecommerce software installations</li>
                <li>Custom website features, contact forms and more!</li>
                </ul>
                <p>The Basic Website Package includes the same features as the Starter Website Package and so much more! Some of the features available include embedding videos, photo galleries and even Google Maps!</p>
            </div>
            <div class="col-lg-6">
            <img class="img-fluid rounded" src="{{ asset('storage/images/index1.jpg') }}" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p></p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-info btn-block" href="contact">Request Call Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Does Your Website Require More Space, More Email And More Speed?</h2>
                <p>The Premium Website Package includes:</p>
                <ul>
                <li>Unlimted custom email accounts</li>
                <li>More bandwidth, storage and databases!</li>
                <li>Website hosting and domain credit</li>
                <li>Custom PHP functions and features</li>
                <li>Custom contact forms, registration forms and newsletters</li>
                </ul>
                <p>The Premium Website Package includes all the features the Starter and Basic Packages offers, plus the ability to have your own website application. Website applications are great for large website with lots of pages or companies that have lots of dynamic content. Either way this website package will be perfect for your business's website.</p>
            </div>
            <div class="col-lg-6">
            <img class="img-fluid rounded" src="{{ asset('storage/images/index2.jpg') }}" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p></p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-info btn-block" href="contact">Request Call Back</a>
            </div>
        </div>                          
    </div>    
</div>    
@endsection

