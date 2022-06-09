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
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci,
                accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores
                dolore labore.</p>
            <a href="" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci,
                accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores
                dolore labore.</p>
            <a href="" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci,
                accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores
                dolore labore.</p>
            <a href="" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci,
                accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores
                dolore labore.</p>
            <a href="" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
</div>
@endsection

@section('scripts')
<script>
    confirm("hello i am ramesh");
</script>
@endsection