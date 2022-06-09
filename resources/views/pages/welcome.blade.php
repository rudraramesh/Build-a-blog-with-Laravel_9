<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- bootstrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <!-- navbar start -->
    <div class="containers">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Laravel Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">
                      Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                </ul>
                
                <div class="dropdown" style="margin-right:50px; list-style: none; cursor: pointer;">
                    <li  class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown button
                    </li>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                
              </div>
            </div>
          </nav>
    </div>
    <!-- end navbar -->


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome To My Blog!</h1>
                    <p class="lead">Thank you so much for visiting . this is my blog website. built with laravel</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                  </div>
            </div>
        </div><!--end the row  -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci, accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores dolore labore.</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci, accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores dolore labore.</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci, accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores dolore labore.</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vero eius optio odio illum! Adipisci, accusantium quaerat. Quisquam beatae earum eum ratione modi. Nostrum id aliquid, doloremque dolores dolore labore.</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>

    </div> <!--end the container  -->

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>