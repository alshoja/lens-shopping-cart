@extends('layouts.master')

@section('title', 'Home')

@section('sidebar')
@parent

{{-- <p>This is appended to the master sidebar.</p> --}}
@stop

@section('content')
<!-- banner -->
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {{ $counter = 0 }}
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            @foreach ($slider as $sliderdata)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$counter++}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php $s = 0 ?>
            @foreach ($slider as $sliderdata)
            @if ($sliderdata->isActive === 1)
            <div class="carousel-item active" style="
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
			background-size: cover;
					">
                @else
                <div class="carousel-item" style="
	background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{URL::asset("assets/$sliderdata->image")}}) no-repeat;
    background-size: cover;
			">
                    @endif
                    <div class="carousel-caption text-center">
                        <h3>{{$sliderdata->main_heading}}
                            <span>{{$sliderdata->sub_heading}}</span>
                        </h3>
                        <a href="{{url('/shop')}}"
                            class="btn btn-sm animated-button gibson-three mt-4">{{$sliderdata->button_value}}</a>

                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--//banner -->
    </div>
</div>
<!--//banner-sec-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">
        <div class="inner-sec-shop px-lg-4 px-3">
            <h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
            <div class="row">
                <!-- /womens -->

                @foreach ($products as $item)
                <div class="col-md-3 product-men women_two">
                    <div class="product-googles-info googles">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">
                                @foreach ($item->productImage as $img)
                                {{-- {{ $property_images = json_decode($img->images) }} --}}
                                <img src={{URL::asset("assets/$img->image")}} class="img-fluid" alt="">
                                @endforeach
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{url('product/item',$item->id)}}" class="link-product-add-cart">Quick
                                            View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product">

                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <h4>
                                                <a href="single.html">{{$item->name}}</a>
                                            </h4>
                                            <div class="grid-price mt-2">
                                                <span class="money "> ₹ {{$item->amount}}</span>
                                            </div>
                                        </div>
                                        <ul class="stars">
                                            @for ($i = 0; $i < $item->star; $i++)
                                            <li>
                                            <a>
                                                    <i class="fa fa-star" style="color: orangered" aria-hidden="true"></i>
                                            </a>
                                            </li>
                                            @endfor
                                            @for ($i = 0; $i < 5-$item->star; $i++)
                                            <li>
                                            <a>
                                                    <i class="fa fa-star"  aria-hidden="true"></i>
                                            </a>
                                            </li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="googles single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="googles_item" value="{{$item->name}}">
                                            <input type="hidden" name="amount" value="{{$item->amount}}">
                                            <input type="hidden" name="item_id" value=" {{$item->id}}">
                                            <button type="submit" class="googles-cart pgoogles-cart">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>


                                        </form>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- //womens -->

            {{-- <!-- /mens -->
				<div class="row mt-lg-3 mt-0">
					<!-- /womens -->
					@for($i=1 ;$i<=4; $i++)
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src={{URL::asset("assets/images/m2.jpg")}} class="img-fluid" alt="">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
            </div>
            <span class="product-new-top">New</span>
        </div>
        <div class="item-info-product">

            <div class="info-product-price">
                <div class="grid_meta">
                    <div class="product_price">
                        <h4>
                            <a href="single.html">Aislin Wayfarer </a>
                        </h4>
                        <div class="grid-price mt-2">
                            <span class="money ">$775.00</span>
                        </div>
                    </div>
                    <ul class="stars">
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="googles single-item hvr-outline-out">
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="googles_item" value="Aislin Wayfarer">
                        <input type="hidden" name="amount" value="775.00">
                        <button type="submit" class="googles-cart pgoogles-cart">
                            <i class="fas fa-cart-plus"></i>
                        </button>

                    </form>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    </div>
    @endfor
    <!-- /mens --> --}}
    </div>
    <!--//row-->
    <!--/meddle-- banner-mid.jpg-->
    <div class="row">
        <div class="col-md-12 middle-slider my-4"
            style=" background: url({{URL::asset("assets/$middle->poster_image")}}) no-repeat 0px 0px;">
            <div class="middle-text-info ">

                <h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">{{$middle->title}}</h3>
                <div class="simply-countdown-custom" id="simply-countdown-custom"></div>

            </div>
        </div>
    </div>
    <!--//meddle-->
    <!--/slide-->
    <div class="slider-img mid-sec">
        <!--//banner-sec-->
        <div class="mid-slider">
            <div class="owl-carousel owl-theme row">
                @foreach ($product_slider as $item_slider)
                <div class="item">
                    <div class="gd-box-info text-center">
                        <div class="product-men women_two bot-gd">
                            <div class="product-googles-info slide-img googles">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        @foreach ($item_slider->productImage as $item)

                                        {{-- {{$property_images = json_decode($item->images)}} --}}
                                        <img src="{{URL::asset("assets/$item->image")}}" class="img-fluid"
                                            alt="">
                                        @endforeach
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                    <a href="{{url('product/item',$item->id)}}" class="link-product-add-cart">
                                               Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New one</span>
                                    </div>
                                    <div class="item-info-product">

                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a
                                                            href={{url('product/item',$item_slider->id)}}>{{$item_slider->name}}</a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money ">$ {{$item_slider->amount}}</span>
                                                    </div>
                                                </div>
                                                <ul class="stars">
                                                    @for ($i = 0; $i < $item_slider->star; $i++)
                                                    <li>
                                                    <a>
                                                            <i class="fa fa-star" style="color: orangered" aria-hidden="true"></i>
                                                    </a>
                                                    </li>
                                                    @endfor
                                                    @for ($i = 0; $i < 5-$item_slider->star; $i++)
                                                    <li>
                                                    <a>
                                                            <i class="fa fa-star"  aria-hidden="true"></i>
                                                    </a>
                                                    </li>
                                                    @endfor
                                                </ul>
                                            </div>
                                            <div class="googles single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="googles_item" value=" {{$item_slider->name}}">
                                                    <input type="hidden" name="amount" value=" {{$item_slider->amount}}">
                                                    <input type="hidden" name="item_id" value=" {{$item_slider->id}}">
                                                    <button type="submit" class="googles-cart pgoogles-cart">
                                                        <i class="fas fa-cart-plus"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- /testimonials -->
    <div class="testimonials py-lg-4 py-3 mt-4">
        <div class="testimonials-inner py-lg-4 py-3">
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    {{-- <div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Anamaria
											<span>Customer</span>
										</h3>
										<label>United States</label>
										<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
											Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
									</div>
								</div> --}}
                    @foreach ($testimonials as $person)

                    @if ($person->is_active)
                    <div class="carousel-item active">
                        @else
                        <div class="carousel-item">
                            @endif
                            <div class="testimonials_grid text-center">
                                <h3>{{$person->work}}
                                    <span>{{$person->customer_name}}</span>
                                </h3>
                                <label>{{$person->country}}</label>
                                <p>{{ str_limit($person->description, $limit = 100, $end = '...') }}</p>
                            </div>
                        </div>
                        @endforeach
                        <a class="carousel-control-prev test" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="fas fa-long-arrow-alt-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next test" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //testimonials -->
        <div class="row galsses-grids pt-lg-5 pt-3">
            @foreach ($editorsPic as $Epic)
            <div class="col-lg-6 galsses-grid-left">
                <figure class="effect-lexi">
                    <img src={{URL::asset("assets/$Epic->image")}} alt="" class="img-fluid">
                    <figcaption>
                        <h3>
                            <span>{{$Epic->heading}}</span>
                        </h3>
                        <p> {{ str_limit($Epic->hover_data, $limit = 10, $end = '...') }}</p>

                    </figcaption>
                </figure>
            </div>
            @endforeach
        </div>
        <!-- /grids -->
        <div class="bottom-sub-grid-content py-lg-5 py-3">
            <div class="row">
                @foreach ($first_feature as $f1)


                <div class="col-lg-4 bottom-sub-grid text-center">
                    {{-- <div class="bt-icon">
                        <span class="far fa-hand-paper"></span>
                    </div> --}}
                    <div class="bt-icon">
                            {!!$f1->icon!!}
                        </div>
                    <h4 class="sub-tittle-w3layouts my-lg-4 my-3">{{$f1->heading}}</h4>
                    <p>{{ str_limit($f1->description , $limit = 150, $end = '...') }}</p>
                    <p>
                        <a href="shop.html"
                            class="btn btn-sm animated-button gibson-three mt-4">{{$f1->button_value}}</a>
                    </p>
                </div>
                @endforeach
                <!-- /.col-lg-4 -->
            </div>
        </div>
        <!-- //grids -->
        <!-- /clients-sec -->
        <div class="testimonials p-lg-5 p-3 mt-4">
            <div class="row last-section">
                @foreach ($second_feature as $f2)
                <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                    <div class="mail-grid-icon text-center">
                        {!!$f2->icon!!}
                    </div>
                    <div class="mail-grid-text-info">
                        <h3>{{$f2->heading}}</h3>
                        <p>{{str_limit($f2->description , $limit = 94, $end = '...')}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- //clients-sec -->
    </div>
    </div>
</section>
<!-- about -->
@stop
