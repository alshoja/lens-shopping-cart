@extends('layouts.app', ['title' => __('Update About')])

@section('content')
@include('users.partials.header', ['title' => __('Update About')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('About Your Company') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('web-settings.About.about') }}" autocomplete="off">
                        @csrf
                        @method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('About information') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('heading') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-password">{{ __('Heading') }}</label>
                                                    <input type="text" name="heading" id="input-password"
                                                        class="form-control form-control-alternative{{ $errors->has('heading') ? ' is-invalid' : '' }}"
                                                        placeholder="{{ __('Title') }}" value="{{$about->heading}}" required>
            
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
                                            placeholder="{{ __('Button Value') }}" value="{{$about->button_value}}" required
                                            autofocus>

                                        @if ($errors->has('button_value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('button_value') }}</strong>
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
                                                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-square"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="fb_url" value="{{$about->fb_url}}"  placeholder="{{ __('Facebook url') }}" aria-label="facebook url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('fb_url'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fb_url') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                                <div class="form-group{{ $errors->has('link_url') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                        <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="basic-addon1"><i class="fab fa-linkedin-in"></i></span>
                                                                </div>
                                                                <input type="url" class="form-control" name="link_url" value="{{$about->link_url}}"  placeholder="{{ __('Linkdin url') }}" aria-label="facebook url" aria-describedby="basic-addon1">
                                                              </div>
                                                        @if ($errors->has('link_url'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('link_url') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                        </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('google_url') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-google-plus-g"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="google_url" value="{{$about->google_url}}"  placeholder="{{ __('Google+  url') }}" aria-label="G url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('google_url'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('google_url') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('twitter_url') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="twitter_url" value="{{$about->twitter_url}}"  placeholder="{{ __('Twitter  url') }}" aria-label="T url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('twitter_url'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('twitter_url') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('rss_link') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-rss"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="rss_link" value="{{$about->rss_link}}"  placeholder="{{ __('Rss Feed  url') }}" aria-label="R url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('rss_link'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('rss_link') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('other') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-braille"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="other" value="{{$about->other}}"  placeholder="{{ __('Other Feed  url') }}" aria-label="O url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('other'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('other') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                           <div class="input-group mb-2">
                                                   <div class="custom-file">
                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                                                     <label class="custom-file-label" for="inputGroupFile02">Choose Banner Image</label>
                                                   </div>
                                                 
                                                 </div>
                                   </div>
                           </div>
                            <div class="row">
                                    <div class="col-sm-6 mt-sm-4 mb-sm-5">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('Description') }}</label> 
                                            <textarea name="description"
                                                class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                id="exampleFormControlTextarea1"  rows="3"
                                    placeholder="{{ __('A brief description about your company :)') }}">{{$about->description}}</textarea>
                                            @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                            <label class="form-control-label" for="input-email">{{ __('Banner Image') }}</label>       
                                            <div class="input-group-prepend">
                                                <img src="{{URL::asset("assets/$about->image")}}" class="img-thumbnail" alt="technalatus" width="304" height="236">
                                                  </div>
                                            </div>
                           </div>
                           
                           
                                  <div>
                                   
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