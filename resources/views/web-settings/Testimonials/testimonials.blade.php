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
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                        @csrf

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
                        
                                                <th scope="col">First</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                        
                                            <tr>
                                                <th>1</th>
                                                <th scope="row" class="name">
                                                    Helen
                                                </th>
                                                <th scope="row" class="name">
                                                        Work
                                                    </th>
                                                <td class="status">
                                                    <span class="badge badge-dot mr-4">
                                                  India
                                                    </span>
                                                </td>
                        
                        <td>good</td>
                        <td><div class="input-group mb-2">
                                <span class="clearfix"></span>
                                <label class="custom-toggle">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>

                        </div></td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                        
                        
                                        </tbody>
                                    </table>
                                </div>
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- slider detaisl in list --}}
    <span class="clearfix"></span>


    @include('layouts.footers.auth')
</div>
@endsection