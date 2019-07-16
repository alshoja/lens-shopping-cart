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
                            <a href="{{ URL::previous() }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('update/stock/type',$type->id) }}" autocomplete="off">
                        @csrf
@method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Add Type') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-password">{{ __('Title') }}</label>
                                        --}}
                                        <input type="text" name="name" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Type') }}" value="{{$type->name}}" required>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                            </div>

                    <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('update') }}</button>
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
