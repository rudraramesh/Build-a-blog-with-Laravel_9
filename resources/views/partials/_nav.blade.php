<!-- navbar start -->
<div class="containers">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? "active": ""}}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ Request::is('about') ? "active": ""}}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? "active": ""}}" href="/contact">
                            Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('blog') ? "active": ""}}" href="#">Blog</a>
                    </li>
                </ul>

                <div class="dropdown" style="margin-right:100px; list-style: none; cursor: pointer;">
                    @if(Auth::check())
                    <li class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hello {{ Auth::user()->name }}
                </li>

                    
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('posts.index')}}">posts</a></li>
                        <li><a class="dropdown-item" href="{{ route('categories.index')}}">Categories</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                @else

                <a href="{{ route('login') }}" class="btn btn-deafult">Login</a>

                @endif


                </div>

            </div>
        </div>
    </nav>
</div>
<!-- end navbar -->