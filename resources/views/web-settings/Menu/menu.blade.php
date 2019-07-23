@extends('layouts.app', ['title' => __('Menu update')])

@section('content')
    @include('users.partials.header', ['title' => __('Manage Menu')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Menu Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ url('update/menu/items') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Menu information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title_one') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('First Menu Category') }}</label>
                                    <input type="text" name="title_one" id="input-title_one" class="form-control form-control-alternative{{ $errors->has('title_one') ? ' is-invalid' : '' }}" placeholder="{{ __('First Title Head') }}" value="{{ $menu->title_one }}" required autofocus>

                                    @if ($errors->has('title_one'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_one') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('title_two') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Second Menu Category') }}</label>
                                    <input type="text" name="title_two" id="input-email" class="form-control form-control-alternative{{ $errors->has('title_two') ? ' is-invalid' : '' }}" placeholder="{{ __('Second Title') }}" value="{{ $menu->title_two }}" required>

                                    @if ($errors->has('title_two'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_two') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('image_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Image Title') }}</label>
                                <input type="text" name="image_title" id="input-password" class="form-control form-control-alternative{{ $errors->has('image_title') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ $menu->image_title}}" required>

                                    @if ($errors->has('button_value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('button_value') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{-- <label class="form-control-label" for="input-password-confirmation">{{ __('Slider Image') }}</label> --}}
                                    {{-- <input type="file" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Browse') }}" value="" required> --}}
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">Slider Image</span>
                                            </div>
                                            <div class="custom-file">
                                              <input type="file" name="image"  class="custom-file-input" id="inputGroupFile01">
                                              <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                                            </div>
                                          </div>

                                          <div class="col-sm">
                                                <label class="form-control-label" for="input-password">{{ __('Current Image') }}</label>
                                                <div class="input-group-prepend">
                                                    <img src="{{URL::asset("assets/$menu->image")}}" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
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
        <br>
        
        @include('layouts.footers.auth')
    </div>
@endsection
