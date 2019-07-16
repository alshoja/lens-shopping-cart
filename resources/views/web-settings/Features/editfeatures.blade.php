@extends('layouts.app', ['title' => __('Features')])

@section('content')
@include('users.partials.header', ['title' => __('Features')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update Features') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href=""
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('update/features') }}" autocomplete="off">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Update Features') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('heading') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Heading') }}</label>
                                       
                                        <input type="text" name="heading" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('heading') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Title') }}" value="{{$feature->heading}}" required>

                                        @if ($errors->has('heading'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('heading') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('button_value') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label>
                                       
                                        <input type="text" name="button_value" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('button_value') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Button Value') }}" value="{{$feature->button_value }}"
                                            required autofocus>

                                        @if ($errors->has('button_value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('button_value') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('URL') }}</label>
                                       
                                        <input type="url" name="url" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('URL:  http://www.example.com/') }}"
                                            value="{{ $feature->url }}" required autofocus>

                                        @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('icon') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Icon') }}</label>
                                       
                                        <select name="icon" class="form-control">

                                            <option value='<i class="far fa-hand-paper"></i>' aria-readonly="true"> Hand
                                            </option>
                                            <option value='<i class="far fa-hand-paper"></i>' aria-readonly="true">
                                                Contact</option>
                                            <option value='<i class="fas fa-archive"></i>' aria-readonly="true">Archive
                                            </option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mt-sm-4 mb-sm-5">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                       
                                        <textarea name="description"
                                            class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                            id="exampleFormControlTextarea1" rows="3"
                                            placeholder="{{ __('A brief description about your feature :)') }}">{{$feature->description}}</textarea>
                                        @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm">
                                    <label class="form-control-label"
                                        for="input-password">{{ __('Make as Services') }}</label>
                                    <div title="You can add the same content as second Feature on top of footer"
                                        class="input-group mb-2">
                                        <span class="clearfix"></span>
                                        <label class="custom-toggle">
                                            @if ($feature->feature_div == 2)
                                            <input value="2" name="feature_div" type="checkbox" checked>
                                            @else
                                            <input value="2" name="feature_div" type="checkbox">
                                            @endif

                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>

                                    </div>
                                </div>


                            </div>


                            <div class="text-center">
                                <button type="submit"  class="btn btn-success mt-4">{{ __('Save') }}</button>
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
