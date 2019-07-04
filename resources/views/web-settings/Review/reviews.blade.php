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
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Manage Reviews') }}</h6>
                        <div class="pl-lg-4">
                            

                      
                                <div class="table-responsive">
                                <div>
                                    <table class="table align-items-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">#</th>
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
                                        <tbody class="list">
                        
                                            <tr>
                                                <th>1</th>
                                                <th scope="row" class="name">
                                                    <div class="media align-items-center">
                                                        <a href="#" class="avatar rounded-circle mr-3">
                                                            <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm">Argon Design System</span>
                                                        </div>
                                                    </div>
                                                </th>
                        
                                                <td class="status">
                                                    <span class="badge badge-dot mr-4">
                                                      ***
                                                    </span>
                                                </td>
                        
                        <td>good</td>
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