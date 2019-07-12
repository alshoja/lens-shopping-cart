@extends('layouts.app', ['title' => __('Slider update')])

@section('content')
    @include('users.partials.header', ['title' => __('Update Home Slider')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Slider Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('web-settings.Homeslider.slider') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('web-settings.Homeslider.editslider',$slider->id) }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            {{ method_field('PUT') }}
                            <h6 class="heading-small text-muted mb-4">{{ __('slider information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ $slider->main_heading }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sub_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Sub Title') }}</label>
                                    <input type="text" name="sub_title" id="input-email" class="form-control form-control-alternative{{ $errors->has('sub_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Sub title') }}" value="{{$slider->sub_heading }}" required>

                                    @if ($errors->has('sub_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sub_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('button_value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Button Value') }}</label>
                                    <input type="text" name="button_value" id="input-password" class="form-control form-control-alternative{{ $errors->has('button_value') ? ' is-invalid' : '' }}" placeholder="{{ __('Button Value') }}" value="{{$slider->button_value}}" required>

                                    @if ($errors->has('button_value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('button_value') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    {{-- <label class="form-control-label" for="input-password-confirmation">{{ __('Slider Image') }}</label> --}}
                                    {{-- <input type="file" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Browse') }}" value="" required> --}}
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">Slider Image</span>
                                            </div>
                                            <div class="custom-file">
                                              <input type="file" name="image"  class="custom-file-input" id="inputGroupFile01">
                                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                          </div>

                                          <div class="input-group mb-5">
                                        <div class="input-group-prepend">
                                          <img src="{{URL::asset("assets/$slider->image")}}" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
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


        @include('layouts.footers.auth')
    </div>
@endsection
