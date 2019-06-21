@extends('layouts.master')

@section('title', $collection->name)

@section('sidebar')
@parent

{{-- <p>This is appended to the master sidebar.</p> --}}
@stop

@section('content')

<!-- banner -->
<div class="banner_inner" style=" background: url({{URL::asset("assets/images/banner-mid.jpg")}})no-repeat 0px -55px;">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Single Page</li>
            </ul>
        </div>
    </div>

</div>

</div>
<!--//banner -->
<!--/shop-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop pt-lg-4 pt-3">
            <div class="row">
                <div class="col-lg-4 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">

                            <ul class="slides">
                                @foreach ($collection->images as $img)
                                <li data-thumb="{{URL::asset("assets/images/$img->image")}}">
                                    <div class="thumb-image"> <img src="{{URL::asset("assets/images/$img->image")}}"
                                            data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                    <h3> </h3>
                    <p><span class="item_price">₹ {{$collection->amount}}</span>
                        <del>₹ {{$collection->old_price}}</del>
                    </p>
                    <div class="rating1">
                        <ul class="stars">

                            @for ($i = 0; $i < $collection->star; $i++)
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                @endfor

                        </ul>
                    </div>
                    <div class="description">
                        <h5>Check delivery, payment options and charges at your location</h5>
                        <form action="#" method="post">
                            <input class="form-control" type="text" autocomplete="off"  id="search" name="search" placeholder="Check with your Pin Code"
                                required="">
                                
                            <input type="submit" value="Check">
                        </form>
                       
                        <spans></spans>
                              
                    </div>
                    <div class="color-quality">
                        <div class="color-quality-right">
                            <h5>Stock :{{$collection->stock}}</h5>
                            {{-- <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                            <option value="null">5 Qty</option>
                                            <option value="null">6 Qty</option>
                                            <option value="null">7 Qty</option>
                                            <option value="null">10 Qty</option>
                                        </select> --}}
                        </div>
                    </div>
                    <div class="occasional">
                        <h5>Types :</h5>
                        <div class="colr ert">
                            @if (count($collection->types)==0)
                            <h6>Sorry,No types Available for this item !</h6>
                            @else
                            @foreach ($collection->types as $Itemtype)
                            <label class="radio"><input type="radio" name="radio"><i></i> {{$Itemtype->type}}</label>
                            @endforeach
                            @endif


                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="occasion-cart">
                        <div class="googles single-item singlepage">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="googles_item" value="Farenheit">
                                <input type="hidden" name="amount" value="575.00">
                                <button type="submit" class="googles-cart pgoogles-cart">
                                    Add to Cart
                                </button>

                            </form>

                        </div>
                    </div>
                    <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>

                    </ul>

                </div>






                <div class="clearfix"> </div>
                <!--/tabs-->
                <div class="responsive_tabs">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Description</li>
                            <li>Reviews</li>
                            {{-- <li>Information</li> --}}
                        </ul>
                        <div class="resp-tabs-container">
                            <!--/tab_one-->
                            <div class="tab1">

                                <div class="single_page">
                                    <h6>{{$collection->name}}</h6>
                                    <p>{{$collection->description}}</p>

                                </div>
                            </div>
                            <!--//tab_one-->
                            <div class="tab2">

                                <div class="single_page">
                                    <div class="bootstrap-tab-text-grids">
                                        <div class="bootstrap-tab-text-grid">
                                            @foreach ($collection->reviews as $Ritem)
                                            <div class="bootstrap-tab-text-grid-left">
                                                <img src="{{URL::asset("assets/images/team1.jpg")}}" alt=" "
                                                    class="img-fluid">
                                            </div>

                                            <div class="bootstrap-tab-text-grid-right">
                                                <ul>
                                                    <li><a href="#">{{$Ritem->users->name}}</a></li>
                                                    <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>
                                                            Reply</a></li>
                                                </ul>
                                                <p>{{$Ritem->review}}</p>
                                            </div>

                                            <div class="clearfix"> </div>
                                            <hr>
                                        </div>
                                        @endforeach
                                        <div class="add-review">
                                            <h4>add a review</h4>
                                            <form action="#" method="post">
                                                <input class="form-control" type="text" name="Name"
                                                    placeholder="Enter your email..." required="">
                                                <input class="form-control" type="email" name="Email"
                                                    placeholder="Enter your email..." required="">
                                                <textarea name="Message" required=""></textarea>
                                                <input type="submit" value="SEND">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="tab3">



                                        <div class="single_page">
                                        <h6>xx</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                                blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                                magna aliqua.</p>
                                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                                blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                                magna aliqua.</p>
                                        </div>


                                    </div> --}}
                        </div>
                    </div>
                </div>
                <!--//tabs-->

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!--/slide-->
        <div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
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
                                            @foreach ($itemFeatured->images as $imgf)
                                            @endforeach
                                            <img src="{{URL::asset("assets/images/$imgf->image")}}" class="img-fluid"
                                                alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">

                                                    <a href="{{url('product/item',$itemFeatured->id)}}"
                                                        class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>

                                            <span class="product-new-top">New</span>
                                        </div>
                                        <div class="item-info-product">

                                            <div class="info-product-price">
                                                <div class="grid_meta">
                                                    <div class="product_price">
                                                        <h4>
                                                            <a href="{{url('product/item',$itemFeatured->id)}}">{{$itemFeatured->name}}
                                                            </a>
                                                        </h4>
                                                        <div class="grid-price mt-2">
                                                            <span class="money ">{{$itemFeatured->amount}}</span>
                                                        </div>
                                                    </div>
                                                    <ul class="stars">

                                                        @for ($i = 0; $i < $itemFeatured->star; $i++)
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
                                                        <input type="hidden" name="googles_item"
                                                            value="Fastrack Aviator">
                                                        <input type="hidden" name="amount" value="325.00">
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
</section>


<script type="text/javascript">
    $('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('search')}}',
    data:{'search':$value},
    success:function(data){
    $('spans').html(data);
    }
    });
    })
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@stop
