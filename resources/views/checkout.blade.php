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
                <li>Checkout </li>
            </ul>
        </div>
    </div>

</div>
<!--//banner -->
</div>
<!--// header_top -->
<!--checkout-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
<div class="container">
    <div class="inner-sec-shop px-lg-4 px-3">
        <h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
        <div class="checkout-right">
            <h4>Your shopping cart contains:
                <span>3 Products</span>
            </h4>
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Product Name</th>

                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    {{-- {{    dd($x)}} --}}
                    @foreach ($x as $items)
                <tr class="rem{{$i++}}">
                        <td class="invert">1</td>
                        <td class="invert-image">
                            <a href="single.html">
                                <img src="images/s1.jpg" alt=" " class="img-responsive">
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value">
                                    <span></span>
                                    </div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{$items->googles_item}} </td>

                    <td class="invert">{{$items->amount}}</td>
                        <td class="invert">
                            <div class="rem">
                            <div class="close{{$i++}}"> </div>
                            </div>

                        </td>
                    </tr>
@endforeach
                </tbody>
            </table>
        </div>
        <div class="checkout-left row">
            <div class="col-md-4 checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    <li>Product1
                        <i>-</i>
                        <span>$281.00 </span>
                    </li>
                    <li>Product2
                        <i>-</i>
                        <span>$325.00 </span>
                    </li>
                    <li>Product3
                        <i>-</i>
                        <span>$325.00 </span>
                    </li>
                    <li>Total Service Charges
                        <i>-</i>
                        <span>$55.00</span>
                    </li>
                    <li>Total
                        <i>-</i>
                        <span>$986.00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 address_form">
                <h4>Add a new Details</h4>
                <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wrapper">
                        <div class="information-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">Full name: </label>
                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                </div>
                                <div class="card_number_grids">
                                    <div class="card_number_grid_left">
                                        <div class="controls">
                                            <label class="control-label">Mobile number:</label>
                                            <input class="form-control" type="text" placeholder="Mobile number">
                                        </div>
                                    </div>
                                    <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Landmark: </label>
                                            <input class="form-control" type="text" placeholder="Landmark">
                                        </div>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                                <div class="controls">
                                    <label class="control-label">Town/City: </label>
                                    <input class="form-control" type="text" placeholder="Town/City">
                                </div>
                                <div class="controls">
                                    <label class="control-label">Address type: </label>
                                    <select class="form-control option-w3ls">
                                        <option>Office</option>
                                        <option>Home</option>
                                        <option>Commercial</option>

                                    </select>
                                </div>
                            </div>
                            <button class="submit check_out">Delivery to this Address</button>
                        </div>
                    </section>
                </form>
                <div class="checkout-right-basket">
                    <a href="payment.html">Make a Payment </a>
                </div>
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>

</div>
</section>
<!--//checkout-->

@stop
