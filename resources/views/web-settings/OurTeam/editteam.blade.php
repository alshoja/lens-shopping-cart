@extends('layouts.app', ['title' => __('Our Team')])

@section('content')
@include('users.partials.header', ['title' => __('Our Team')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Manage your Team') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ url()->previous() }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('patch/team',$team->id) }}"
                        autocomplete="off">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Update Team Members') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Name') }}" value="{{$team->name}}" required>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Position') }}</label>
                                        <input type="text" name="position" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Position') }}" value="{{$team->position}}" required
                                            autofocus>

                                        @if ($errors->has('position'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('fb_url') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('') }}</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fab fa-facebook-square"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="fb_link"
                                                value="{{$team->fb_link}}" placeholder="{{ __('Facebook url') }}"
                                                aria-label="facebook url" aria-describedby="basic-addon1">
                                        </div>
                                        @if ($errors->has('fb_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fb_url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('insta_url') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('') }}</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fab fa-google-plus-g"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="insta_link"
                                                value="{{$team->insta_link}}" placeholder="{{ __('Instagram url') }}"
                                                aria-label="insta url" aria-describedby="basic-addon1">
                                        </div>
                                        @if ($errors->has('insta_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('insta_url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('twitter_url') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('') }}</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fab fa-twitter"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="twitter_link"
                                                value="{{$team->twitter_link}}" placeholder="{{ __('Twitter  url') }}"
                                                aria-label="T url" aria-describedby="basic-addon1">
                                        </div>
                                        @if ($errors->has('twitter_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('twitter_url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose Profile
                                                Image</label>
                                        </div>

                                    </div>
                                </div>
                               

                            </div>



                            <div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
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