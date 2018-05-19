@extends('layouts.app')
@section('content')
<div class="container text-center py-3">
     <!-- Content Row -->
     <div class="row">
        <div class="card m-3 p-2 bg-primary text-white">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique dignissimos, non quia eveniet eaque officia molestias voluptate voluptates debitis optio tenetur alias aliquid numquam enim, rem magni, architecto suscipit dolores.</p>    
        </div>     
    </div>    
    <!-- Content Row -->
    <div class="row my-3">
        <div data-aos="fade-right" class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg">
                <div class="card-header">
                    <h2 class="card-title ">Starter Website Package</h2>
                </div>
                <div class="card-body">
                <img class="img-fluid img-thumbnail img-rounded" src="{{ asset('storage/packages/basicPackage.png') }}" alt="">
                    <p class="card-text">Looking for a low cost solution to get your personal or business website up and running? The Starter Website Package is a perfect choice, it's full of rich features and a variety of plugins. </p>
                    <span>Starting at</span>
                    <h2>$199</h2>
                    <ul class="list-unstyled">
                        <li>Responsive Website Layouts</li>
                        <li>Mobile Friendly Designs</li>
                        <li>Includes Up To 5 Webpages</li>
                        <li>Image Galleries And Sliders</li>
                        <li>Inquiry And Contact Forms</li>
                        <li>Custom Email Accounts</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-lg btn-block btn-success">Learn More!</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div data-aos="fade-up" class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg">
                <div class="card-header">
                    <h2 class="card-title ">Basic Website Package</h2>
                </div>
                <div class="card-body">
                    <img class="img-fluid img-thumbnail img-rounded" src="{{ asset('storage/packages/standardPackage.png') }}" alt="">
                    <p class="card-text">Looking for a low cost solution to get your personal or business website up and running? The Starter Website Package is a perfect choice, it's full of rich features and a variety of plugins. </p>
                    <span>Starting at</span>
                    <h2>$299</h2>
                    <ul class="list-unstyled">
                        <li>Responsive Website Layouts</li>
                        <li>Mobile Friendly Designs</li>
                        <li>Includes Up To 5 Webpages</li>
                        <li>Image Galleries And Sliders</li>
                        <li>Inquiry And Contact Forms</li>
                        <li>Custom Email Accounts</li>  
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-lg btn-block btn-success">Learn More!</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div data-aos="fade-left" class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg">
                <div class="card-header">
                    <h2 class="card-title ">Premium Website Package</h2>
                </div>
                <div class="card-body">
                    <img class="img-fluid img-thumbnail img-rounded" src="{{ asset('storage/packages/premiumPackage.png') }}" alt="">
                    <p class="card-text">Looking for a low cost solution to get your personal or business website up and running? The Starter Website Package is a perfect choice, it's full of rich features and a variety of plugins. </p>
                    <span>Starting at</span>
                    <h2>$499</h2>
                    <ul class="list-unstyled">
                        <li>Responsive Website Layouts</li>
                        <li>Mobile Friendly Designs</li>
                        <li>Includes Up To 5 Webpages</li>
                        <li>Image Galleries And Sliders</li>
                        <li>Inquiry And Contact Forms</li>
                        <li>Custom Email Accounts</li>   
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-lg btn-block btn-success">Learn More!</a>
                </div>
            </div>
        </div><!-- /.col-md-4 -->
    </div><!-- /.row -->

    <div class="row">
        
    </div>
</div><!-- /.container -->
@endsection