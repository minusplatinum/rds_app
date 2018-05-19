<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
    
        <title>{{ config('app.name', 'RDS Web Design') }}</title>
        
        <!-- Fonts -->
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/aos/dist/aos.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-5">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">RDS Web Design</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item {{ Request::is('packages*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('packages') }}">Packages</a></li>
                        <li class="nav-item {{ Request::is('templates*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('templates') }}">Templates</a></li>
                        <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <main>
        @include('alerts.messages')
        @yield('content')
        </main>
    
        <div class="container-fluid py-2 bg-primary">
            <hr class="mx-5">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a class="navbar-brand" href="{{ url('/') }}">RDS Web Design</a></li>
                        <li class="nav-item m-auto {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item m-auto {{ Request::is('packages*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('packages') }}">Packages</a></li>
                        <li class="nav-item m-auto {{ Request::is('templates*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('templates') }}">Templates</a></li>
                        <li class="nav-item m-auto {{ Request::is('contact*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <hr class="mx-5">
            <div class="row d-flex justify-content-center">
                <div class="">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a class="text-white" href="https://www.facebook.com"><i class="fab fa-facebook fa-3x"></i></a></li>
                        <li class="list-inline-item"><a class="text-white" href="https://www.twitter.com"><i class="fab fa-twitter fa-3x"></i></a></li>
                        <li class="list-inline-item"><a class="text-white" href="https://www.instagram.com"><i class="fab fa-instagram fa-3x"></i></a></li>
                        <li class="list-inline-item"><a class="text-white" href="https://plus.google.com/"><i class="fab fa-google-plus fa-3x"></i></a></li>
                        <li class="list-inline-item"><a class="text-white" href="contact" target="_blank"><i class="fa fa-envelope fa-3x"></i></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center">
                <div class="">
                    <p class="h6 text-white">&copy; 2018 All right Reversed.<a class="ml-2 text-white" href="{{ url('/') }}">RDS Web Design</a></p>
                </div>
            </div>
    
        </div>
       
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>    
</body>
</html>
