@extends('layouts.app', ['title' => __('Orders')])

@section('content')
@include('users.partials.header', ['title' => __('Orders')])

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
                                <table class="table align-items-center">
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
                                                Amount
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
                                        @foreach ($orders as $item)



                                        <tr>
                                            <th>{{$serial ++}}</th>
                                            <th scope="row" class="name">
                                                {{$item->customer_id}}
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
                                                    <button class="btn btn-sm btn-info text-Default"
                                                    data-toggle="modal" data-target="#modal-default">
                                                        Items
                                                    </button>

                                                </div>

                                            </td>
                                        </tr>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                        <div class="col-md-4">
                                                {{-- <button type="button" class="btn btn-block btn-primary mb-3" >Default</button> --}}
                                                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                              <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                  <div class="modal-content">
                                          
                                                      <div class="modal-header">
                                                          <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">×</span>
                                                          </button>
                                                      </div>
                                          
                                                      <div class="modal-body">
                                                          @foreach ($item->orderdetails as $proitem)
                                                              
                                                 
                                                       <p>{{$proitem->products->name }} | {{$proitem->products->amount }}</p>
                                                             {{-- <table>
                                                                <tr><td>sadasd</td></tr> 
                                                                <table>                                  --}}
                                                        @endforeach  
                                                      </div>
                                          
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-primary">Save changes</button>
                                                          <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                                                      </div>
                                          
                                                  </div>
                                              </div>
                                          </div>
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