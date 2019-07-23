@extends('layouts.app', ['title' => __('Testimonials')])

@section('content')
@include('users.partials.header', ['title' => __('Testimonials')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Client Testimonials') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::previous()}}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  

                        <h6 class="heading-small text-muted mb-4">{{ __('Manage Testimonials') }}</h6>
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
                                                    Work
                                                </th>
                                                <th scope="col">
                                                    Country
                                                </th>
                                                <th scope="col">
                                                    Testimonial
                                                </th>

                                                {{-- <th scope="col">First</th> --}}
<th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @php
                                            $serial = 1
                                            @endphp
                                            @foreach ($testimonials as $item)


                                            <tr>
                                                <th>{{$serial ++}}</th>
                                                <th scope="row" class="name">
                                                    {{$item->customer_name}}
                                                </th>
                                                <th scope="row" class="name">
                                                    {{$item->work}}
                                                </th>
                                                <td class="status">
                                                    <span class="badge badge-dot mr-4">
                                                        {{$item->country}}
                                                    </span>
                                                </td>

                                                <td  scope="row">{{$item->description}}</td>
                                                {{-- <td>
                                                    <div class="input-group mb-2">
                                                        <span class="clearfix"></span>
                                                        <label class="custom-toggle">
                                                            <input type="checkbox" checked>
                                                            <span class="custom-toggle-slider rounded-circle"></span>
                                                        </label>

                                                    </div>
                                                </td> --}}
                                                <td class="text-right">


                                                    <div class="dropdown">
                                                        <form method="POST"
                                                            action="{{url('delete/testimonials',$item->id)}}">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-sm btn-danger text-light">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        <form method="POST"
                                                            action="{{url('delete/testimonials',$item->id)}}">
                                                            @method('delete')
                                                            @csrf

                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-warning text-light">
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
           
        </div>
    </div>
    {{ $testimonials->links() }}
</div>
</div>
</div>
</div>
{{-- slider detaisl in list --}}
<span class="clearfix"></span>


@include('layouts.footers.auth')
</div>
@endsection