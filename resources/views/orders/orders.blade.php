@extends('layouts.app', ['title' => __('Orders')])

@section('content')
@include('users.partials.header', ['title' => __('Orders')])

<style>
    div.greyGridTable {
        font-family: "Comic Sans MS", cursive, sans-serif;
        border: 2px solid #FFFFFF;
        width: 100%;
        text-align: center;
        /* border-collapse: collapse; */
    }

    .divTable.greyGridTable .divTableCell,
    .divTable.greyGridTable .divTableHead .divcell2 {
        border: 1px solid #FFFFFF;
        padding: 3px 4px;
    }

    .divTable.greyGridTable .divTableBody .divTableCell .divcell2 {
        font-size: 13px;
    }

    .divTable.greyGridTable .divTableCell:nth-child(odd) {
        background: #ebebee;
    }

    .divTable.greyGridTable .divTableHeading {
        background: #FFFFFF;
        border-bottom: 4px solid #333333;
    }

    .divTable.greyGridTable .divTableHeading .divTableHead {
        font-size: 15px;
        font-weight: bold;
        color: #333333;
        text-align: center;
        border-left: 2px solid #fffcfc;
    }

    .divTable.greyGridTable .divTableHeading .divTableHead:first-child {
        border-left: none;
    }

    .greyGridTable .tableFootStyle {
        font-size: 14px;
        font-weight: bold;
        color: #333333;
        border-top: 4px solid #333333;
    }

    .greyGridTable .tableFootStyle {
        font-size: 14px;
    }

    /* DivTable.com */
    .divTable {
        display: table;
    }

    .divTableRow {
        display: table-row;
    }

    .divTableHeading {
        display: table-header-group;
    }

    .divTableCell,
    .divcell2,
    .divTableHead {
        display: table-cell;
    }

    .divTableHeading {
        display: table-header-group;
    }

    .divTableFoot {
        display: table-footer-group;
    }

    .divTableBody {
        display: table-row-group;
    }
</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Your Orders') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::previous()}}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">


                    <h6 class="heading-small text-muted mb-4">{{ __('Manage Orders') }}</h6>
                    <div class="pl-lg-4">



                        <div class="table-responsive">
                            <div>
                                <table id="alshoja" style="width:100%" class="table align-items-center display">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">
                                                Customer
                                            </th>
                                            <th scope="col">
                                                Order-ID
                                            </th>
                                            <th scope="col">
                                                Order Amount
                                            </th>
                                            <th scope="col">
                                                Status
                                            </th>

                                            <th scope="col">Method</th>
                                            <th>Shipping Date</th>
                                            <th>Order Date</th>
                                            {{-- <th>Staff</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @php
                                        $serial = 1

                                        @endphp
                                        @php
                                        $modal = 1
                                        @endphp
                                        @foreach ($orders as $item)
                                        <tr>
                                            <th>{{$serial ++}}</th>
                                            <th scope="row" class="name">
                                                {{$item->user->name}}
                                            </th>
                                            <th scope="row" class="name">
                                                {{$item->id}}
                                            </th>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    &#8377; {{$item->order_amount}}
                                                </span>
                                            </td>

                                            <td scope="row">{{$item->order_status}}</td>
                                            <td scope="row">{{$item->order_method}}</td>

                                            <td scope="row">{{$item->shipping_date}}</td>
                                            <td scope="row">{{$item->created_at}}</td>
                                            {{-- <td scope="row">{{$item->staff_id}}</td> --}}
                                            <td class="text-right">


                                                <div class="dropdown">

                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-info text-Default" data-toggle="modal"
                                                        data-target="#modal-default{{$modal}}">
                                                        Items
                                                    </button>

                                                </div>

                                            </td>
                                        </tr>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                        <div class="col-md-4">
                                            {{-- <button type="button" class="btn btn-block btn-primary mb-3" >Default</button> --}}
                                            <div class="modal fade" id="modal-default{{$modal}}" tabindex="-1"
                                                role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                    role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="modal-title-default">Order No:
                                                                {{$item->id}}</h6>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">

                                                            @php
                                                            $i =1
                                                            @endphp
                                                             {{-- <h4 class="text-Default">Items to be shipped:</h4> --}}
                                                            <div class="divTable greyGridTable">
                                                                <div class="divTableHeading">
                                                                    <div class="divTableRow">
                                                                        <div class="divTableHead">#</div>
                                                                        <div class="divTableHead">Item</div>
                                                                        <div class="divTableHead">Quantity</div>
                                                                        <div class="divTableHead">Amount</div>
                                                                        <div class="divTableHead">Item Total</div>

                                                                    </div>
                                                                </div>
                                                                @foreach ($item->orderdetails as $proitem)
                                                                <div class="divTableBody">
                                                                    <div class="divTableRow">
                                                                        <div class="divTableCell">{{ $i++}}</div>
                                                                        <div class="divTableCell">
                                                                            {{$proitem->products->name }}</div>
                                                                        <div class="divTableCell">
                                                                            {{$proitem->quantity }}</div>
                                                                        <div class="divTableCell">
                                                                            {{$proitem->item_amount }}</div>
                                                                        <div class="divTableCell">
                                                                            {{$proitem->item_amount * $proitem->quantity }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                <div class="divTableFoot tableFootStyle">
                                                                    <div class="divTableRow">
                                                                        <div class=""></div>
                                                                        <div class="divcell2"></div>
                                                                        <div class="divcell2"></div>
                                                                        <div class="divcell2"></div>
                                                                        <div class="divTableCell">&#8377;
                                                                            {{$item->order_amount}}</div>
                                                                        <div class="divcell2"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h5 class="text-Default">Shipping Address:</h5>
                                                            <address>{!!$item->shipping_address!!}</address>
                                                            <hr>
                                                            <h5 class="text-Default">Order Status:</h5>
                                                            <div class="row">
                                                                @if ($item->order_status == null | $item->order_status === "Pending" )
                                                                <form method="POST" action="{{url('update/orders/status',$item->id)}}">
                                                                    @method('put')
                                                                    @csrf
                                                                        <div class="col-sm">
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input name="status" value="Shipped"
                                                                                    class="custom-control-input"
                                                                                    id="customRadio5" type="radio">
                                                                                <label class="custom-control-label"
                                                                                    for="customRadio5">Shipped</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input name="status" value="Pending"
                                                                                    class="custom-control-input"
                                                                                    id="customRadio6" checked=""
                                                                                    type="radio">
                                                                                <label class="custom-control-label"
                                                                                    for="customRadio6">Pending</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input name="status" value="Cancelled"
                                                                                    class="custom-control-input"
                                                                                    id="customRadio7" type="radio">
                                                                                <label class="custom-control-label"
                                                                                    for="customRadio7">Cancelled</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <button type="submit"
                                                                                class="btn btn-warning btn-sm  ml-auto">Update</button>
                                                                        </div>
                                                                    </form> 
                                                                @else
                                                                <div class="col-sm">
                                                                    @if ($item->order_status ==="Shipped")
                                                                    <button class="btn btn-sm btn-success">{{$item->order_status}}</button>
                                                                    @else
                                                                    <button class="btn btn-sm btn-danger">{{$item->order_status}}</button>
                                                                        
                                                                    @endif
                                                                 
                                                                </div>
                                                                @endif
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link  ml-auto"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $modal++
                                            @endphp
                                            @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    {{ $orders->links() }}
                    
                </div>
            </div>
        </div>
    </div>
    
    {{-- slider detaisl in list --}}
    <span class="clearfix"></span>
   


 


    @include('layouts.footers.auth')
</div>
@endsection
