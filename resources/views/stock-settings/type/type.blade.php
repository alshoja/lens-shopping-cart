@extends('layouts.app', ['title' => __('Types')])

@section('content')
@include('users.partials.header', ['title' => __('Types')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Manage Types') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('store/stock/type') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Type') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Type') }}</label>
                                       
                                        <input type="text" name="name" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Type') }}" value="" required>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('categorie') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-password">{{ __('Select Category') }}</label>
                                        <select required name="category_id" class="form-control">
                                            <option aria-readonly="true" disabled >Select Category</option>
                                            @foreach ($category as $item)
                                            <option aria-readonly="true" value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- slider detaisl in list --}}
    <span class="clearfix"></span>
    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">
                            Type Name
                        </th>
                        <th scope="col">
                            Category
                        </th>


                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @php
                    $i = 1
                    @endphp
                    @foreach ($type as $item)

                    <tr>
                        <th>{{$i++}}</th>

                        <td class="status">
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i> {{$item->name}}
                            </span>
                        </td>
                        <td class="status">
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i> {{$item->category->name}}
                            </span>
                        </td>

                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">


                                    <a class="dropdown-item" href="{{url('edit/stock/type',$item->id)}}">Edit</a>

                                    <form action="{{ url('delete/stock/type',$item->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    @include('layouts.footers.auth')
</div>
@endsection
