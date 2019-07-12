@extends('layouts.master')

@section('title', 'About')

@section('sidebar')
    @parent

    {{-- <p>This is appended to the master sidebar.</p> --}}
@stop

@section('content')

<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">

        <div class="inner-sec-shop px-lg-4 px-3">
            <div class="about-content py-lg-5 py-3">
                <div class="row">

                    <div class="col-lg-6 p-0">
                        <img src={{URL::asset("assets/$about->image")}} alt="Goggles" class="img-fluid">
                    </div>
                    <div class="col-lg-6 about-info">
                        <h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">{{$about->heading}}</h3>
                        <p class="my-xl-4 my-lg-3 my-md-4 my-3">
                            {{$about->description}}
                        </p>

                    <a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">{{$about->button_value}}</a>

                    </div>
                </div>
            </div>
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Team</h3>
            <div class="partners-info">
                <div class="row mt-lg-5 mt-3">
                    @foreach ($partners as $item)
                        
                    <div class="col-md-3 team-main-gd">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src={{URL::asset("assets/images/$item->image")}} alt="">
                            </div>
                            <div class="team-info">
                            <h4>{{$item->name}}</h4>
                                <span>{{$item->position}} </span>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li>
                                        <a target_blank href="{{$item->fb_link}}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a target_blank href="{{$item->twitter_url}}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target_blank href="{{$item->insta_url}}">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          
         

            
            

            <!-- /clients-sec -->
            <div class="testimonials p-lg-5 p-3 mt-4">
                <div class="row last-section">
                        <div class="testimonials p-lg-5 p-3 mt-4">
                                <div class="row last-section">
                        @foreach ($second_feature as $f2)	
                                    <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                                        <div class="mail-grid-icon text-center">
                                            <i class="fas fa-gift"></i>
                                        </div>
                                        <div class="mail-grid-text-info">
                                        <h3>{{$f2->heading}}</h3>
                                            <p>{{str_limit($f2->description , $limit = 50, $end = '...')}}</p>
                                        </div>
                                    </div>
                        @endforeach
                                </div>
                            </div>            
                </div>
            </div>
            <!-- //clients-sec -->

        </div>
    </div>
</section>


@stop