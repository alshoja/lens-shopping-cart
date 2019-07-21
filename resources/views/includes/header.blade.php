<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title> @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href={{URL::asset('assets/css/bootstrap.css')}} rel='stylesheet' type='text/css' />
    <link href={{URL::asset("assets/css/login_overlay.css")}} rel='stylesheet' type='text/css' />
    <link href={{URL::asset("assets/css/style6.css")}} rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href={{URL::asset("assets/css/shop.css")}} type="text/css" />
    <link rel="stylesheet" type="text/css" href={{URL::asset("assets/css/checkout.css")}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset("assets/css/jquery-ui1.css")}}>
    <link href={{URL::asset("assets/css/contact.css")}} rel='stylesheet' type='text/css' />
    <link href={{URL::asset("assets/css/easy-responsive-tabs.css")}} rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{URL::asset("assets/css/flexslider.css")}}" type="text/css" media="screen" />
    <link rel="stylesheet" href={{URL::asset("assets/css/owl.carousel.css")}} type="text/css" media="all">
    <link rel="stylesheet" href={{URL::asset("assets/css/owl.theme.css")}} type="text/css" media="all">
    <link href={{URL::asset("assets/css/style.css")}} rel='stylesheet' type='text/css' />
    <link href={{URL::asset("assets/css/fontawesome-all.css")}} rel="stylesheet">
    <link rel="stylesheet" href={{URL::asset("assets/css/star.css")}}>
    <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel='stylesheet' href='https://afeld.github.io/emoji-css/emoji.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display:700i'>
    <script src="js/sweetalert.min.js"></script>
    @include('sweet::alert')
</head>

<body>
    <div class="banner-top container-fluid" id="home">

        <!-- header -->
        <header>
            <div class="row">
                <div class="col-md-3 top-info text-left mt-lg-4">
                    <h6>Need Help</h6>
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i> Call</li>
                        <li class="number-phone mt-3">{{$contact->country_code}} {{$contact->phone}}</li>
                    </ul>
                </div>
                <div class="col-md-6 logo-w3layouts text-center">
                    <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="{{url('/')}}">
                            Store </a>
                    </h1>
                </div>

                <div class="col-md-3 top-info-cart text-right mt-lg-4">
                    <ul class="cart-inner-info">

                        <li class="button-log">
                            <a class="btn-open" href="#">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="galssescart galssescart2 cart cart box_1">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_googles_cart" type="submit" name="submit" value="">
                                    My Cart
                                    <i class="fas fa-cart-arrow-down"></i>
                                </button>
                            </form>
                        </li>
                    </ul>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!---->
                    @if (Route::has('login'))
                    @auth
                    {{-- <a href="{{ url('/home') }}">Logout</a> --}}
                    @else
                    <div class="overlay-login text-left">
                        <button type="button" class="overlay-close1">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <div class="wrap">
                            <h5 class="text-center mb-4">Login Now</h5>
                            <div class="login p-5 bg-dark mx-auto mw-100">
                                <form method="POST" action="{{ route('login') }} ">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-2">Email address</label>
                                        <input type="email"
                                            class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" id="exampleInputEmail1" autofocus
                                            aria-describedby="emailHelp" placeholder="Email" required>
                                        <small id="emailHelp" class="form-text text-muted">Well never share your email
                                            with anyone</small>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Password</label>
                                        <input type="password"
                                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            id="exampleInputPassword1" placeholder="Password" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }} for="exampleCheck1">Check me
                                            out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif

                                </form>
                            </div>
                            <!---->
                        </div>
                        @if (Route::has('register'))
                        {{-- <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                        @endauth
                    </div>
                    @endif
                    @show

                    <!---->
                </div>
            </div>
            <div class="search">
                <div style="right:100px" class="mobile-nav-button">
                    <button id="trigger-overlay" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <!-- open/close -->
                <div class="overlay overlay-door">
                    <button type="button" class="overlay-close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <form action="#" method="post" class="d-flex">
                        <input class="form-control" type="search" placeholder="Search here..." required="">
                        <button type="submit" class="btn btn-primary submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                </div>
                <!-- open/close -->
            </div>
            <label class="top-log mx-auto"></label>
            <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">


                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item button-log">
                            <a class="nav-link btn-open" href="#">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
						@else
						@if ( Auth::user()->Is_admin)
                        <li class="nav-item button-log">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">

                                <i class="fas fa-tachometer-alt"></i> {{ __('Dashboard') }} </a>

                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>


                        @endguest
                    </ul>
                    <ul class="navbar-nav nav-mega mx-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link ml-lg-0" href=" {{url('/')}} ">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{url('/shop')}}">Designer Glasses</a>
                        </li>
                        <li class="">
                            <a href="{{url('/shop')}}"> Ray-Ban</a>
                        </li>
                        <li>
                            <a href="{{url('/shop')}}">Prescription Glasses</a>
                        </li>
                        <li class="mt-3">
                            <h5>View more pages</h5>
                        </li>
                        <li class="mt-2">
                            <a href="{{url('/about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{url('/about')}}">Customers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 media-list span4 text-left">
                    <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                    <div class="media-mini mt-3">
                        <a href="shop.html">
                            <img src={{URL::asset("assets/images/g2.jpg") }} class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 media-list span4 text-left">
                    <h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
                    <div class="media-mini mt-3">
                        <a href="shop.html">
                            <img src={{URL::asset("assets/images/g3.jpg") }} class="img-fluid" alt="">
                        </a>
                    </div>

                </div>
    </div>
    <hr>
    </li>
    </ul>
    </li> --}}
    <li class="nav-item dropdown {{ Request::is('product/shop') ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Shop
        </a>
        <ul class="dropdown-menu mega-menu ">
            <li>
                <div class="row">
                    <div class="col-md-4 media-list span4 text-left">

                        <h5 class="tittle-w3layouts-sub"> {{$menu->title_one}} </h5>
                        <ul>
                            @foreach ($categorie as $categories)
                            <li class="media-mini mt-3">
                                <a href="{{url('product/shop')}}">{{$categories->name}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub">{{$menu->title_two}}</h5>
                        <ul>
                            @foreach ($new_products as $newitem)

                            <li class="media-mini mt-3">

                                <a href={{url('product/item',$newitem->id)}}>{{$newitem->name}}</a>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="col-md-4 media-list span4 text-left">

                        <h5 class="tittle-w3layouts-sub-nav">{{$menu->image_title}} </h5>
                        <div class="media-mini mt-3">
                            <a href="{{url('/shop')}}">
                                <img src={{URL::asset("assets/images/$menu->image")}} class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>
                </div>
                <hr>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{url('/contact')}}">Contact</a>
    </li>
    </ul>

    </div>
    </nav>
    </header>
    <!-- //header -->
