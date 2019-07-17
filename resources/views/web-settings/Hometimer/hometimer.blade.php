@extends('layouts.app', ['title' => __('Offer Box')])

@section('content')
@include('users.partials.header', ['title' => __('Offer Timer')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update timer') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('update/home/timer') }}" autocomplete="off">
                        @csrf
@method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __(' Offer Timer') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Title for Timer') }}</label>
                                       
                                        <input type="text" name="title" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Title') }}" value="{{$timer->title}}" required>

                                        @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('timestamp') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Time') }}</label>
                                       
                                        <input type="text" name="timestamp" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('timestamp') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('2019-06-19 10:14:27') }}" value="{{$timer->timestamp}}"  required>

                                        @if ($errors->has('timestamp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('timestamp') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="custom-file">
                                            <input required type="file" name="poster_image" class="custom-file-input"
                                                id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose Timer
                                                Background
                                            </label>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
<div class="row">

        <div class="col-sm-6">
                <label class="form-control-label" for="input-email">{{ __('Current Image') }}</label>       
                <div class="input-group-prepend">
                    <img src="{{URL::asset("assets/$timer->poster_image")}}" class="img-thumbnail" alt="technalatus" width="304" height="236">
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


    @include('layouts.footers.auth')
</div>
@endsection