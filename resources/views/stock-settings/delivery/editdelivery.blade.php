@extends('layouts.app', ['title' => __('Delivery')])

@section('content')
@include('users.partials.header', ['title' => __('Delivery')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Delivery Places') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('store/stock/delivery') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Delivery Place') }}</h6>
                        <div class="pl-lg-4">

                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('State') }}</label>
                                                <div class="input-group mb-3">
                                                        <input type="text" name="state" id="input-email" class="form-control form-control-alternative{{ $errors->has('state') ? ' is-invalid' : '' }}" placeholder="{{ __('State') }}"  required>
                                                      </div>
                                                @if ($errors->has('state'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm">
                                            <div class="form-group{{ $errors->has('district') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('DIstrict') }}</label>
                                                <div class="input-group mb-3">
                                                        <input type="text" name="district" id="input-email" class="form-control form-control-alternative{{ $errors->has('district') ? ' is-invalid' : '' }}" placeholder="{{ __('District') }}"  required>

                                                      </div>
                                                @if ($errors->has('district'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('district') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('Pincode') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('Pincode') }}</label>
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
                                                        </div>
                                                        <input type="number" class="form-control" name="pincode"  placeholder="{{ __(' Pincode') }}" aria-label="T url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('pincode'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('pincode') }}</strong>
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
    <br>
    

    @include('layouts.footers.auth')
</div>
@endsection
