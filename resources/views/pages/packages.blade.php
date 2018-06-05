@extends('layouts.app')
@section('content')
<div class="container my-3">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header alert alert-primary">
                <h4 class="my-0 font-weight-normal">Starter</h4>
            </div>
            <div class="card-body">
                <p>The Starter Website Package is a great starting point for individuals and small businesses to expand to the online world. It includes all the basic tools and features to make a modern responsive website.</p> <br>           
                <h1 class="card-title pricing-card-title">$199</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Basic Contact Form</li>
                    <li>Custom Email accounts</li>
                    <li>Mobile Responsive Designs</li>
                    <li>Domain Credit & Hosting Included</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-success">Get Started!</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header alert alert-info">
                <h4 class="my-0 font-weight-normal">Basic</h4>
            </div>
            <div class="card-body">
                <p>The Basic Website package includes the same features as the starter package and much more. The basic package offers custom contact forms, SQL databases, Google Maps, CMS and Ecommerce.</p>  <br>              
                <h1 class="card-title pricing-card-title">$299</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Custom Website Designs</li>
                    <li>Third Party API Integrations</li>
                    <li>Complete CMS & Ecommerce</li>
                    <li>Custom website features & addons</li>
                    
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-success">Get Started!</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header alert alert-success">
                <h4 class="my-0 font-weight-normal">Premium</h4>
            </div>
            <div class="card-body">
                <p>The Premium Website package is as unique as your website, it offers flexability at an affordable cost. This package is a perfect choice for website applications, large ecommerce and CMS as well as large multi page websites.</p>
                <h1 class="card-title pricing-card-title">$499</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-success">Get Started!</button>
            </div>
        </div>
    </div>    
</div>    
@endsection

