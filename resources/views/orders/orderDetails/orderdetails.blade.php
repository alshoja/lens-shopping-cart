@extends('layouts.app', ['title' => __('Order Details')])

@section('content')
@include('users.partials.header', ['title' => __('Orders Details')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Order Details') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::previous()}}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">


                    <h6 class="heading-small text-muted mb-4">{{ __('Manage Order Details') }}</h6>
                    <div class="pl-lg-4">



                        <div class="table-responsive">
                            <div>
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">
                                                Item?product
                                            </th>
                                            <th scope="col">
                                                Order-ID
                                            </th>
                                            <th scope="col">
                                                Quantity
                                            </th>
                                            <th scope="col">
                                                Amount
                                            </th>

                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @php
                                        $serial = 1
                                        @endphp
                                        @foreach ($orderdetails as $item)


                                        <tr>
                                            <th>{{$serial ++}}</th>
                                            <th scope="row" class="name">
                                                {{$item->product_id}}
                                            </th>
                                            <th scope="row" class="name">
                                                {{$item->order_id}}
                                            </th>
                                         

                                            <td scope="row">{{$item->quantity}}</td>
                                            <td scope="row">{{$item->item_amount}}</td>
                                          
                                            <td class="text-right">

 
                                                <div class="dropdown">
                                                    {{-- <form method="POST"
                                                        action="{{url('delete/testimonials',$item->id)}}">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger text-light">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form> --}}
                                                    <form method="POST"
                                                        action="{{url('delete/testimonials',$item->id)}}">
                                                        @method('delete')
                                                        @csrf

                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-warning text-light">
                                                        Show orders
                                                    </button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
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