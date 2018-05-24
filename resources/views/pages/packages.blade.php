@extends('layouts.app')
@section('content')
<div class="container-fluid py-5 packagesImage">
    <div class="container serviceContainer py-3">
        <div class="row"> 
            <div class="col-md-5 m-auto">
            <img class="img-fluid" src="{{ asset('/storage/images/standardPackage.png') }}" alt="">
            </div>
    
            <div class="col-md-7">
                <h3 class="my-3">Starter Website Package</h3>
                <p>The Starter Website Package is a great starting point for individuals and small businesses to expand to the online world. It includes all the basic tools and features to make a modern responsive website.</p>
                <ul>
                    <li>Mobile Responsive Website Designs</li>
                    <li>Includes Up To 5 Website Pages</li>
                    <li>Image Galleries And Content Sliders</li>
                    <li>Customer Inquiry And Contact Forms</li>
                    <li>Custom Website Email Accounts</li>
                </ul>
                <a class="btn btn-lg btn-success btn-block d-md-inline" href="#">Get Started</a>
            </div>
        </div><!-- /.row -->        
    </div>
<hr>
    <div class="container serviceContainer py-3">
        <div class="row"> 
            <div class="col-md-5 m-auto">
                  <img class="img-fluid" src="{{ asset('/storage/images/basicPackage.png') }}" alt="">
            </div>
    
            <div class="col-md-7">
                <h3 class="my-3">Basic Website Package</h3>
                <p>The Starter Website Package is a great starting point for individuals and small businesses to expand to the online world. It includes all the basic tools and features to make a modern responsive website.</p>
                <ul>
                    <li>Mobile Responsive Website Designs</li>
                    <li>Includes Up To 5 Website Pages</li>
                    <li>Image Galleries And Content Sliders</li>
                    <li>Customer Inquiry And Contact Forms</li>
                    <li>Custom Website Email Accounts</li>
                </ul>
                <a class="btn btn-lg btn-success btn-block d-md-inline" href="#">Get Started</a>
            </div>
        </div><!-- /.row -->        
    </div>
<hr>
    <div class="container serviceContainer py-3">
        <div class="row"> 
            <div class="col-md-5 m-auto">
                  <img class="img-fluid" src="{{ asset('/storage/images/premiumPackage.png') }}" alt="">
            </div>
    
            <div class="col-md-7">
                <h3 class="my-3">Premium Website Package</h3>
                <p>The Starter Website Package is a great starting point for individuals and small businesses to expand to the online world. It includes all the basic tools and features to make a modern responsive website.</p>
                <ul>
                    <li>Mobile Responsive Website Designs</li>
                    <li>Includes Up To 5 Website Pages</li>
                    <li>Image Galleries And Content Sliders</li>
                    <li>Customer Inquiry And Contact Forms</li>
                    <li>Custom Website Email Accounts</li>
                </ul>
                <a class="btn btn-lg btn-success btn-block d-md-inline" href="#">Get Started</a>
            </div>
        </div><!-- /.row -->        
    </div>
</div><!-- container end -->
@endsection

