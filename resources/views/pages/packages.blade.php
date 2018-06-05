@extends('layouts.app')
@section('content')
<div class="container my-3">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header alert alert-primary">
                <h4 class="my-0 font-weight-normal">Starter</h4>
            </div>
            <div class="card-body">
                <p>Looking for a low cost solution to get your organization or business online? Then the Starter Website Package is a perfect choice, offering all the services and tools you will need to get your business online.</p><br>           
                <h1 class="card-title pricing-card-title">$199</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Responsive Mobile Friendly Designs</li>
                    <li>Custom Website Email Included</li>
                    <li>Includes Up To 5 Website Pages</li>
                    <li>Google Maps Website Integration</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-success">Get Started!</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header alert alert-info">
                <h4 class="my-0 font-weight-normal">Basic</h4>
            </div>
            <div class="card-body">
                <p>Need a website that offers content management, ecommerce or even a blog? The Basic Website Package includes all the features the Starter Package offers and all the tools required to get your business online!</p><br>              
                <h1 class="card-title pricing-card-title">$299</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Custom Contact Forms & Signups</li>
                    <li>Includes Up To 10 Website Pages</li>
                    <li>Custom Website Features & Plugins</li>
                    <li>Basic Hosting & Domain Included</li>
                    
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-success">Get Started!</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header alert alert-success">
                <h4 class="my-0 font-weight-normal">Premium</h4>
            </div>
            <div class="card-body">
                <p>Our Premium Website Package is designed for small to large businesses offering a wide range of features and addons. The Premium Website Package includes all the features the Starter & Basic Packages offer and More!</p>
                <h1 class="card-title pricing-card-title">$499</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Custom Templates & Themes</li>
                    <li>Includes Up To 20 Website Pages</li>
                    <li>Custom PHP Website Applications</li>
                    <li>Third Party API & Plugin Integration</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-success">Get Started!</button>
            </div>
        </div>
    </div>    
</div>    
@endsection

