@extends('layouts.app', ['title' => __('Stock Management')])

@section('content')
@include('users.partials.header', ['title' => __('Manage Stock')])
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update/add Stock') }}</h3>
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

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Stock') }}</h6>
                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                            for="input-email">{{ __('Current Price') }}</label>
                                        <input type="number" name="amount" id="input-email"
                                            class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Current Price') }}" value="{{ old('amount') }}"
                                            required>

                                        @if ($errors->has('amount'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('old_price') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                            for="input-email">{{ __('Old Price') }}</label>
                                        <input type="number" name="old_price" id="input-email"
                                            class="form-control form-control-alternative{{ $errors->has('old_price') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Old Price') }}" value="{{ old('old_price') }}" required>

                                        @if ($errors->has('old_price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_price') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('No of stock') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Stock') }}</label>
                                        <input type="number" name="stock" id="input-email"
                                            class="form-control form-control-alternative{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('No of Stock') }}" value="{{ old('stock') }}" required>

                                        @if ($errors->has('stock'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('categorie') ? ' has-danger' : '' }} col-md-4">
                                    <label class="form-control-label" for="input-password">{{ __('Categorie') }}</label>
                                    <select class="form-control">
                                        <option aria-readonly="true">Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }} ">
                                <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                <textarea name="description"
                                    class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                    id="exampleFormControlTextarea1" value="{{ old('description') }}" rows="3"
                                    placeholder="{{ __('Description about product') }}"></textarea>
                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Product Image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" required class="custom-file-input" id="inputGroupFile01" multiple>
                                            <label class="custom-file-label" for="inputGroupFile01">Select multiple files</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-3">
                                    <label class="form-control-label col-xs-2">Flash Sale</label>
                                    <div class="col-xs-10">
                                    <label class="custom-toggle">
                                        <input type="checkbox" checked>
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label class="form-control-label col-xs-2">In Deals</label>
                                    <div class="col-xs-10">
                                        <label class="custom-toggle">
                                            <input type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label class=" form-control-label col-xs-2">Featured Sale</label>
                                    <div class="col-xs-10">
                                        <label class="custom-toggle">
                                            <input type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label class="form-control-label  col-xs-2">Enable Type</label>
                                    <div class="col-xs-10">
                                        <label class="custom-toggle">
                                            <input type="checkbox">
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
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