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
                {{-- <span>3 Products</span> --}}
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
                    <?php
                    $i = 1;
                    $id = 0 ;
                    ?>
<form action="{{url('product/payment')}}" method="POST">
    @method('post')
    @csrf
                    @foreach ($cart_items as $item)
                <tr class="rem{{$i}}">
                <td class="invert">{{$i}}</td>
                        <td class="invert-image">
                            <a href="single.html">
                                <img src="{{URL::asset("assets/images/s1.jpg")}}" alt="" class="img-responsive">
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <button class="entry value-minus"  id="minus{{$id}}" value="{{$item['quantity']}}"   onclick="minusbutton({{$id}},{{$item['amount']}},this.value,{{$item['item_id']}})">&nbsp;</button>
                                    <div class="entry value">
                                    <span >{{$item['quantity']}}</span>
                                    <input type="hidden" name="quantity_{{$i}}" value="{{$item['quantity']}}" id="item_quantity">
                                    <input type="hidden" name="length" id="length" value="{{$item['length']}}" >
                                    <input type="hidden" name="item_id_{{$i}}"  value="{{$item['item_id']}}" >
                                    <input type="text" name="json" id="json"  value="0" >

                                    </div>
                                <button class="entry value-plus " id="plus{{$id}}" value="{{$item['quantity']}}"   onclick="plusButton({{$id}},{{$item['amount']}},this.value,{{$item['item_id']}})"></button>
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{$item['name']}} </td>

                    <td  class="invert">{{$item['amount']}}</td>
                    <input type="hidden" name="amount_{{$i}}" value="{{$item['amount']}}" class="item_amount" id="item_amount" >

                        <td class="invert">
                            <div class="rem">
                            <div class="close{{$i}}" id="{{$id}}" onclick="remove(this.id,{{$item['item_id']}})"> </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <?php
                    $i++;
                    $id++;
                    ?>
@endforeach

<td></td>
<td></td>
<td></td>
<td></td>
<td>Total</td>
<td>&#8377;/ <span class="total"></span></td>
                </tbody>
            </table>

            <input type="hidden" name="final_amount" value="" id="final_amount" class="final_amount"  >

        </div>
        <div class="checkout-left row">
            <div class="col-md-4 checkout-left-basket">
            <a href="{{url('product/shop')}}" ><h4>Continue to basket</h4> </a>
                <ul>

                    <li>Total
                        <i>-</i>
                        <td>&#8377;/ <span class="total"></span></td>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 address_form">
                <h4>Add a new Details</h4>

                    <section class="creditly-wrapper wrapper">
                        <div class="information-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">Full name: </label>
                                    <input class="billing-address-name form-control" required type="text" name="name" placeholder="Full name">
                                </div>
                                <div class="card_number_grids">
                                    <div class="card_number_grid_left">
                                        <div class="controls">
                                            <label class="control-label">Mobile number:</label>
                                            <input class="form-control" type="text" required name="mobile" placeholder="Mobile number">
                                        </div>
                                    </div>
                                    <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Landmark: </label>
                                            <input class="form-control"  name="landmark" type="text" placeholder="Landmark">
                                        </div>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                                <div class="controls">
                                    <label class="control-label">Town/City: </label>
                                    <input class="form-control" required name="city" type="text" placeholder="Town/City">
                                </div>
                                <div class="controls">
                                        <label class="control-label">Pin: </label>
                                        <input class="form-control" required name="pin" type="text" placeholder="Pincode">
                                    </div>
                                <div class="controls">
                                        <label class="control-label">Address </label>
                                   <textarea placeholder="Address 2" name="address" class="form-control"></textarea>
                                    </div>
                                <div class="controls">
                                    <label class="control-label">Mode </label>
                                    <select required name="order_method" class="form-control option-w3ls">

                                        <option value="NetBanking">Pay Now</option>
                                        <option value="COD">Cod</option>
                                    </select>
                                </div>
                            </div>
                            <button  class="submit check_out">Delivery to this Address</button>
                        </div>
                    </section>
                </form>
                <div class="checkout-right-basket">
                        {{-- <button class="submit check_out">Make Payment</button> --}}
                </div>
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>

</div>
</section>
<div hidden class="simply-countdown-custom" id="simply-countdown-custom"></div>
<!--//checkout-->
<script>


</script>
<script>

window.onload = function() {
    urlParam();
};
</script>
@stop
