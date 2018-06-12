@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container-fluid welcomeImage py-5">
    <div class="container">
        <div class="row my-3 templateOpacity">
            <div class="card p-3">
                <div class="row">
                    @foreach($templates as $template)
                    <div class="col-lg-4 my-2">
                        <div class="card h-100">
                            <div class="card-header">
                                <img img class="img-fluid img-thumbnail" src="{{ $template->imgUrl . $template->img1Name }}" alt="{{ $template->name }}">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $template->name }}</h4>
                                <p class="card-text text-center">{{ $template->description }}</p>
                            </div>
                        </div><!-- /.card -->
                    </div><!-- /.col-md-4 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.card-->
        </div><!-- /.row -->         
    </div>
</div><!-- /.container -->
@endsection