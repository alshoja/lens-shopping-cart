@extends('layouts.master')

@section('title', 'Shop')

@section('sidebar')
    @parent

    {{-- <p>This is appended to the master sidebar.</p> --}}
@stop

@section('content')

	<!-- banner -->
    <div class="banner_inner">
        <div class="services-breadcrumb">
            <div class="inner_breadcrumb">

                <ul class="short">
                    <li>
                        <a href="index.html">Home</a>
                        <i>|</i>
                    </li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>

    </div>
    <!--//banner -->
    <!--/shop-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
                <div class="row">
                    <!-- product left -->
                    <div class="side-bar col-lg-3">
                        <div class="search-hotel">
                            <h3 class="agileits-sear-head">Search Here..</h3>
                        <form action="{{URL('product/shop/price')}}" method="get">
                                    <input class="form-control" type="search" name="search" placeholder="Search here..." required="">
                                    <button class="btn1">
                                            <i class="fas fa-search"></i>
                                    </button>
                                    <div class="clearfix"> </div>
                                </form>
                        </div>
                        <!-- price range -->
                        <div class="range">
                            <h3 class="agileits-sear-head">Price range</h3>
                            <ul class="dropdown-menu6">
                                <li>

                                    <div id="slider-range"></div>
                              <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                              <form method="GET" action="{{URL('product/shop/price')}}">
                              <input type="hidden" name="from" id="from">
                              <input type="hidden" name="to" id="to">

                              <button type="submit" class="btn btn-sm animated-button gibson-three mt-4">
                                    Find
                                </button>
                            </form>
                                </li>
                            </ul>
                        </div>
                        <!-- //price range -->
                        <!--preference -->
                        <div class="left-side">
                            <h3 class="agileits-sear-head">Categories</h3>
                            <ul>
                                @foreach ($categorie as $catitem)

                        <form action="" method="GET">
                                <li>
                                    <input type="checkbox" name={{$catitem->name}} class="checked">
                                    <span class="span">{{$catitem->name}}</span>
                                </li>
                                @endforeach

                            </ul>
                            <button type="submit" class="btn btn-sm animated-button gibson-three mt-4">
                                    Sort
                                </button>
                            </form>
                        </div>
                        <!-- // preference -->
                        <!-- discounts -->
                        {{-- <div class="left-side">
                            <h3 class="agileits-sear-head">Discount</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">5% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">10% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">20% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">50% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">60% or More</span>
                                </li>
                            </ul>
                        </div> --}}
                        <!-- //discounts -->
                        <!-- reviews -->
                        <div class="customer-rev left-side">
                            <h3 class="agileits-sear-head">Customer Review</h3>
                            <ul>
                                <li>
                                    <a href="{{URL('product/shop/cat',5)}}">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL('product/shop/cat',4)}}">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>4.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL('product/shop/cat',3)}}">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>3.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL('product/shop/cat',2)}}">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>2.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{URL('product/shop/cat',1)}}">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>1.0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //reviews -->
                        <!-- deals -->

                        <div class="deal-leftmk left-side">
                            <h3 class="agileits-sear-head">Special Deals</h3>
                            @foreach ($deals as $dealitem)
                            <div class="special-sec1">
                                <div class="img-deals">
                                    @foreach ($dealitem->productImage as $item)
                                <img src={{URL::asset("assets/$item->image")}} alt="">
                                      @endforeach
                                </div>
                                <div class="img-deal1">
                                <h3>{{$dealitem->name}}</h3>
                                <a href="{{URL('product/item',$dealitem->id)}}">₹{{$dealitem->amount}}</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @endforeach
                        </div>

                        <!-- //deals -->
                    </div>
                    <!-- //product left -->
                    <!--/product right-->
                    <div class="left-ads-display col-lg-9">
                        <div class="wrapper_top_shop">
                            <div class="row">
                                    <div class="col-md-6 shop_left">
                                            <img src="images/banner3.jpg" alt="">
                                            <h6>40% off</h6>
                                        </div>
                                        <div class="col-md-6 shop_right">
                                            <img src="images/banner4.jpg" alt="">
                                            <h6>50% off</h6>
                                        </div>

                            </div>
                            <div class="row">
                                <!-- /womens -->

                                @if ($all_products->count()===0)
                                <div class="row col-md-12">
                                <img style="padding: 50px" src="{{URL::asset("assets/gif/found.gif")}}"  class="img-fluid" alt="">
                                </div>
                                @else
                                @foreach ($all_products as $item)
                                <div class="col-md-3 product-men women_two shop-gd" style="padding-bottom: 10px">
                                    <div class="product-googles-info googles">
                                        <div class="men-pro-item">
                                            <div class="men-thumb-item">
                                                @foreach ($item->productImage as $proimage)
                                                <img src="{{URL::asset("assets/$proimage->image")}}"  class="img-fluid" alt="">
                                                @endforeach
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href={{URL('product/item',$item->id)}} class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>
                                            </div>
                                            <div class="item-info-product">
                                                <div class="info-product-price">
                                                    <div class="grid_meta">
                                                        <div class="product_price">
                                                            <h4>
                                                            <a href="{{URL('product/item',$item->id)}}">{{$item->name}}</a>
                                                            </h4>
                                                            <div class="grid-price mt-2">
                                                            <span class="money ">&#8377;{{$item->amount}}</span>
                                                            </div>
                                                        </div>
                                                        <ul class="stars">

                                                            @for ($i = 0; $i < $item->star; $i++)
                                                            <li><a href={{URL('product/item',$item->id)}}><i class="fa fa-star" style="color: orangered" aria-hidden="true"></i></a></li>
                                                    @endfor

                                                    @for ($i = 0; $i < 5-$item->star; $i++)
                                                        <li><a href={{URL('product/item',$item->id)}}><i class="fa fa-star"  aria-hidden="true"></i></a></li>
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
                                @endif
                            </div>
                            <?php echo $all_products->links(); ?>
                       </div>
                    </div>
                    <!--//product right-->
                </div>
                <!--/slide-->
            <div class="slider-img mid-sec mt-lg-5 mt-2">
                    <!--//banner-sec-->
                    <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
                    <div class="mid-slider">
                        <div class="owl-carousel owl-theme row">
                                @foreach ($product_featured as $itemFeatured)
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="images/s5.jpg" class="img-fluid" alt="">
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
                                                                    <a href="single.html">{{$itemFeatured->name}} </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">₹ {{$itemFeatured->amount}}</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                @for ($i = 0; $i < $itemFeatured->star; $i++)
                                                               <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" style="color: orangered" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                @endfor

                                                                @for ($i = 0; $i < 5- $itemFeatured->star; $i++)
                                                                <li>
                                                                     <a href="#">
                                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                                     </a>
                                                                 </li>
                                                                 @endfor
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="{{$itemFeatured->name}}">
                                                                  <input type="hidden" name="amount" value="{{$itemFeatured->amount}}">
                                                                 <input type="hidden" name="item_id" value=" {{$itemFeatured->id}}">
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
                <!--//slider-->
            </div>
        </div>
    </section>

@stop
