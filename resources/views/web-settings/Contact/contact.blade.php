@extends('layouts.app', ['title' => __('Update Contact')])

@section('content')
@include('users.partials.header', ['title' => __('Update Contact')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Contact Details') }}</h3>
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

                        <h6 class="heading-small text-muted mb-4">{{ __('Contact information') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-password">{{ __('Title') }}</label>
                                                    <input type="text" name="title" id="input-password"
                                                        class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                        placeholder="{{ __('Title') }}" value="" required>
            
                                                    @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Phone') }}</label>
                                        <input type="text" name="phone" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Phone') }}" value="{{ old('phone') }}" required
                                            autofocus>

                                        @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Location') }}</label>
                                        <input type="email" name="location" id="input-email"
                                            class="form-control form-control-alternative{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Location') }}" value="{{ old('location') }}" required>

                                        @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Email') }}</label>
                                        <input type="email" name="email" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Email') }}" value="" required>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('footer_subscribing_data') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Footer Subscribing Data') }}</label>
                                        <input type="text" name="footer_subscribing_data" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('footer_subscribing_data') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Subscribing Message') }}" value="" required>

                                        @if ($errors->has('footer_subscribing_data'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('footer_subscribing_data') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('rights_data') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-password">{{ __('Rights Data') }}</label>
                                                <input type="text" name="rights_data" id="input-password"
                                                    class="form-control form-control-alternative{{ $errors->has('rights_data') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('® Rights Message') }}" value="" required>
        
                                                @if ($errors->has('rights_data'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('rights_data') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('rights_company_name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-password">{{ __('Rights company Name') }}</label>
                                                <input type="text" name="rights_company_name" id="input-password"
                                                    class="form-control form-control-alternative{{ $errors->has('rights_company_name') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Company name') }}" value="" required>
        
                                                @if ($errors->has('rights_company_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('rights_company_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('company_url') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-password">{{ __('Website') }}</label>
                                                <input type="url" name="company_url" id="input-password"
                                                    class="form-control form-control-alternative{{ $errors->has('company_url') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('http://website.com') }}" value="" required>
        
                                                @if ($errors->has('company_url'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('company_url') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                           <div class="input-group mb-2">
                                                   <div class="custom-file">
                                                     <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                     <label class="custom-file-label" for="inputGroupFile02">Choose Banner Image</label>
                                                   </div>
                                                 
                                                 </div>
                                   </div>
                           </div>
                            <div class="row">
                                    <div class="col-sm-6 mt-sm-4 mb-sm-5">
                                    <div class="form-group{{ $errors->has('map_iframe_data') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('Iframe Data') }}</label>
                                            <textarea name="map_iframe_data"
                                                class="form-control form-control-alternative{{ $errors->has('map_iframe_data') ? ' is-invalid' : '' }}"
                                                id="exampleFormControlTextarea1" value="{{ old('description') }}" rows="3"
                                                placeholder="{{ __('  <iframe src = "/html/menu.htm" width = "555" height = "200"></iframe>') }}"></textarea>
                                            @if ($errors->has('map_iframe_data'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('map_iframe_data') }}</strong>
                                            </span>
                                            @endif
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