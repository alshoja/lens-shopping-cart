@extends('layouts.app', ['title' => __('Offer Box')])

@section('content')
@include('users.partials.header', ['title' => __('Offer')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update OfferBox') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::previous()}}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('update/offerbox',$offer->id) }}" autocomplete="off">
                        @csrf
@method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Update Offerbox') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Title') }}</label>
                                       
                                        <input type="text" name="title" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Title') }}" value="{{$offer->title}}" required>

                                        @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('textbox_label') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Text box label') }}</label>
                                       
                                        <input type="text" name="textbox_label" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('textbox_label') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('TextBox Label') }}" value="{{$offer->textbox_label}}"
                                            required autofocus>

                                        @if ($errors->has('textbox_label'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('textbox_label') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('button_value') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label>
                                       
                                        <input type="text" name="button_value" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('button_value') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Button Value') }}" value="{{$offer->button_value}}"
                                            required autofocus>

                                        @if ($errors->has('button_value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('button_value') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-sm">
                                        <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Button Url') }}</label>
                                           
                                            <input type="url" name="button_value" id="input-title"
                                                class="form-control form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('Button URL:  http://www.example.com/') }}" value="{{$offer->button_url}}"
                                                required autofocus>
    
                                            @if ($errors->has('url'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('url') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> --}}
                            </div>

                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('href_url') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Skip Link') }}</label>
                                               
                                                <input type="url" name="href_url" id="input-title"
                                                    class="form-control form-control-alternative{{ $errors->has('href_url') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Link to skip item-> http://www.example.com/') }}" value="{{$offer->href_url}}"
                                                    required autofocus>
        
                                                @if ($errors->has('href_url'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('href_url') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('href_tittle') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Skip title') }}</label>
                                       
                                        <input type="text" name="href_tittle" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('href_tittle') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Skip title') }}" value="{{$offer->href_tittle}}"
                                            required autofocus>

                                        @if ($errors->has('href_tittle'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('href_tittle') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                    <div class="col-sm-6 mt-sm-4 mb-sm-5">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                            <textarea name="description"
                                                class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                id="exampleFormControlTextarea1" value="{{ old('description') }}" rows="3"
                                                placeholder="{{ __('A brief description about your Offer :)') }}">{{$offer->description}}</textarea>
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
                                        <label class="form-control-label" for="input-password">{{ __('Show on load') }}</label>
                                        <div class="input-group mb-2">
                                                <span class="clearfix"></span>
                                                <label class="custom-toggle">
                                                    @if ($offer->isActive == 1)
                                                    <input name="isActive" value="1" type="checkbox" checked>  
                                                    @else
                                                    <input name="isActive" value="1"  type="checkbox" >  
                                                    @endif
                                                  
                                                    <span class="custom-toggle-slider rounded-circle"></span>
                                                </label>
    
                                        </div>
                                    </div>  
                                    {{-- <div class="col-sm">
                                            <label class="form-control-label" for="input-password">{{ __('Current Image') }}</label>
                                            <div class="input-group-prepend">
                                                <img src="{{URL::asset("assets/uploads/offer.png")}}" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                                                  </div>
                                            </div>                                 --}}
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