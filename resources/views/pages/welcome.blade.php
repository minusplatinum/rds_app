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
    <div class="container text-center py-3">
            <!-- Content Row -->
        <div class="row">
            <div data-aos="fade-right" class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                            <h2 class="card-title ">Starter Website Package</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Looking for a low cost solution to get your business online? Then the Starter Website Package is a perfect choice.</p>
                        <ul class="list-unstyled">
                            <li>Responsive Mobile Friendly Designs</li>
                            <li>One Custom Website Email Included</li>
                            <li>Includes Up To 5 Website Pages</li>
                            <li>Google Maps Website Integration</li>
                            <li>Starter Website Hosting & Domain Credit Included</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-lg btn-block btn-success">Learn More!</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div data-aos="fade-up" class="col-lg-4 mb-4">
                <div class="card h-100">
                        <div class="card-header">
                                <h2 class="card-title">Basic Website Package</h2>
                        </div>
                    <div class="card-body">
                        
                        <p class="card-text">Need a website that offers content management, ecommerce or even a blog? The Basic Website Package offers all those features, learn more by clicking the link below!</p>
                        <ul class="list-unstyled">
                            <li>Responsive Mobile Friendly Designs</li>
                            <li>Includes Up To 10 Website Pages</li>
                            <li>Custom Contact Forms & Signups</li>
                            <li>Custom Website Features & Plugins</li>
                            <li>Basic Website Hosting & Domain Credit Included</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-lg btn-block btn-success">Learn More!</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div data-aos="fade-left" class="col-lg-4 mb-4">
                <div class="card h-100">
                        <div class="card-header">
                                <h2 class="card-title">Premium Website Package</h2>
                        </div>
                    <div class="card-body">
                        
                        <p class="card-text">Our Premium Website Package is designed for small to large businesses offering a wide range of features and addons.  The Premium Website Package includes all the features the Starter & Basic Packages offer and much More!</p>
                        <ul class="list-unstyled">
                            <li>Custom Website Templates & Themes</li>
                            <li>Includes Up To 20 Website Pages</li>
                            <li>Custom PHP Website Applications</li>
                            <li>Third Party API & Plugin Integration</li>
                            <li>Premium Website Hosting & Domain Credit Included</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-lg btn-block btn-success">Learn More!</a>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container text-center serviceContainer">
        <div data-aos="fade-up-left" class="text-white bg-primary text-center my-3">
            <div class="card-body">
                <h3 class="text-white">Services We Offer</h3>
            </div>
        </div>
        
        <div class="row mx-0 pt-4">
            <div data-aos="fade-down-right" class="col-md-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">web</i></span>
                <h4 class="">Custom Website Design</h4>
                <ul class="list-unstyled">
                    <li>Custom Website Components</li>
                    <li>Taylored For Your Business</li>
                    <li>Improve Google Rankings</li>
                    <li>Unique Website designs</li>
                </ul>
            </div>
            <div data-aos="fade-down" class="col-md-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">devices</i></span>
                <h4>Responsive Website Design</h4>
                <ul class="list-unstyled">
                    <li>Flexible Content Placement</li>
                    <li>Friendly User Experience</li>
                    <li>Easy To Customize</li>
                    <li>SEO Friendly</li>
                    
                </ul>
            </div>
            <div data-aos="fade-left" class="col-md-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">add_shopping_cart</i></span>
                <h4>Ecommerce Website Design</h4>
                <ul class="list-unstyled">
                    <li>Inventory Management</li>
                    <li>Reach to a bigger market</li>
                    <li>Sell Your Products 24/7</li>
                    <li>Gain Search Engine Traffic</li>
                </ul>
            </div>
        </div>
        <div data-aos="fade-up-right" class="row mx-0">
            <div class="col-md-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">contact_mail</i></span>
                <h4>Content Management Systems</h4>
                <ul class="list-unstyled">
                    <li>Wide Variety OF Templates</li>
                    <li>Reduce Development Costs</li>
                    <li>Customize Your Own Content</li>
                    <li>Have Multiple User Accounts</li>
                </ul>
            </div>
            <div data-aos="fade-up" class="col-md-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">aspect_ratio</i></span>
                <h4>Website Redesign Services</h4>
                <ul class="list-unstyled">
                    <li>Freshen Up Your Website</li>
                    <li>Add Modern features</li>
                    <li>Reach More Customers</li>
                    <li>Improve Website Performance</li>
                </ul>
            </div>
            <div data-aos="fade-up-left" class="col-md-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">supervisor_account</i></span>
                <h4>Customer Support Services</h4>
                <ul class="list-unstyled">
                    <li>Customer Website Troubleshooting</li>
                    <li>Customer Webmail Configuration</li>
                    <li>Website Domain Registration</li>
                    <li>Customer Technical Support</li>
                </ul>
            </div>
        </div>
    </div><!-- container end -->
</div>
@endsection
