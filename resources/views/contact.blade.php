@extends('layouts.master')

@section('title', 'Contact')

@section('sidebar')
    @parent

    {{-- <p>This is appended to the master sidebar.</p> --}}
@stop

@section('content')


<!-- banner -->
<div style="
    background: url({{URL::asset("assets/images/$contact->header_image")}})no-repeat 0px -73px;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    moz-background-size: cover;
    min-height: 180px;
">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>

</div>
<!--//banner -->
</div>
<!--// header_top -->
<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
<div class="container">
    <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
    <div class="inner_sec">
    <p class="sub text-center mb-lg-5 mb-3">{{$contact->title}}</p>
        <div class="address row">

            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <i class="far fa-map"></i>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        <h6>Address</h6>
                        <p> 
                        {{$contact->location}}
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        <h6>Email</h6>
                        <p>Email :
                            <a href="{{$contact->email}}">{{$contact->email}}</a>

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        <h6>Phone</h6>
                        <p>{{$contact->country_code}}{{$contact->phone}}</p>

                    </div>

                </div>
            </div>
        </div>
        <div class="contact_grid_right">
            <form action="#" method="post">
                <div class="row contact_left_grid">
                    <div class="col-md-6 con-left">
                        <div class="form-group">
                            <label class="my-2">Name</label>
                            <input class="form-control" type="text" name="Name" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="Email" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label class="my-2">Subject</label>
                            <input class="form-control" type="text" name="Subject" placeholder="" required="">
                        </div>
                    </div>
                    <div class="col-md-6 con-right">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea id="textarea" placeholder="" required=""></textarea>
                        </div>
                        <input class="form-control" type="submit" value="Submit">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<div class="contact-map">

<iframe src="{{$contact->map_iframe_data}}"
    class="map" style="border:0" allowfullscreen=""></iframe>
</div>

@stop