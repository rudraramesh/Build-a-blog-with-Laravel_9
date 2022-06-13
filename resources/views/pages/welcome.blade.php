@extends('main')
@section('title','HomePage')

@section('stylesheets')
<link rel="stylesheet" href="style.css">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Welcome To My Blog!</h1>
            <p class="lead">Thank you so much for visiting . this is my blog website. built with laravel</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>
</div>
<!--end the row  -->
<div class="row">
    <div class="col-md-8">

        @foreach($posts as $post)
        
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body,0,300) }}{{ strlen($post->body) > 300 ? "...": "" }}</p>
            <a href="" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
</div>
@endsection

@section('scripts')

@endsection