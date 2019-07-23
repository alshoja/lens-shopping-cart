@extends('layouts.app', ['title' => __('Reviews')])

@section('content')
@include('users.partials.header', ['title' => __('Reviews')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Rating & Reviews') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::previous() }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                 
                        <h6 class="heading-small text-muted mb-4">{{ __('Manage Reviews') }}</h6>
                        <div class="pl-lg-4">



                            <div class="table-responsive">
                                <div>
                                    <table class="table align-items-center">
                                        <thead class="thead-light">
                                            <tr>
                                                {{-- <th scope="col">#</th> --}}
                                                <th scope="col">
                                                    Product
                                                </th>
                                                <th scope="col">
                                                    Stars
                                                </th>
                                                <th scope="col">
                                                    Review
                                                </th>

                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        @php
                                            $i = 0
                                            @endphp
                                        <tbody class="list">
                                            
                                            @foreach ($review as $item)

                                            <tr>
                                                {{-- <td>{{$i++}}</td> --}}
                                                <td scope="row" class="name">
                                                    <div class="media align-items-center">
                                                        {{-- <a href="#" class="avatar rounded-circle mr-3">
                                                                <img src="{{URL::asset("assets/$menu->image")}}"
                                                        class="img-thumbnail" alt="Cinque Terre" width="304"
                                                        height="236">
                                                        <img alt="Image placeholder"
                                                            src="../../assets/img/theme/bootstrap.jpg">
                                                        </a> --}}
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm">{{$item->product->name}}</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="status">
                                                    <span class="badge badge-dot mr-4">
                                                        @for ($i = 0; $i < $item->product->star; $i++)
                                                            <i class="far fa-star"></i>
                                                            @endfor

                                                    </span>
                                                </td>

                                                <td>{{$item->review}}</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <form method="POST" action="{{url('delete/reviews',$item->id)}}" >
                                                            @method('delete')
                                                            @csrf
                                                        <button  class="btn btn-sm btn-danger text-light" > 
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                        </form>
                                                        <form method="POST" action="{{url('delete/reviews',$item->id)}}" >
                                                            @method('delete')
                                                            @csrf                                          
                                            
                                                    </div>
                                                    <div class="dropdown">
                                                    <button  class="btn btn-sm btn-warning text-light" > 
                                                            Archive
                                                         </button>
                                                         </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{ $review->links() }}
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- slider detaisl in list --}}
    <span class="clearfix"></span>


    @include('layouts.footers.auth')
</div>
@endsection