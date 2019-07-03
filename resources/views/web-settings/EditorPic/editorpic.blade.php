@extends('layouts.app', ['title' => __('Editors Pic')])

@section('content')
@include('users.partials.header', ['title' => __('Editors Pic')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update Editors Pic') }}</h3>
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

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Editors Pic') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('heading') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-password">{{ __('Title') }}</label>
                                        --}}
                                        <input type="text" name="name" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('heading') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Title') }}" value="" required>

                                        @if ($errors->has('heading'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('heading') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('hover_data') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label>
                                        --}}
                                        <input type="text" name="button_value" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('hover_data') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Hover data') }}" value="{{ old('hover_data') }}"
                                            required autofocus>

                                        @if ($errors->has('hover_data'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hover_data') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose Editors
                                                picture</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-sm">
                                        <label class="form-control-label" for="input-password">{{ __('Active') }}</label>
                                        <div class="input-group mb-2">
                                                <span class="clearfix"></span>
                                                <label class="custom-toggle">
                                                    <input type="checkbox" checked>
                                                    <span class="custom-toggle-slider rounded-circle"></span>
                                                </label>
    
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
    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">
                            Title
                        </th>
                        <th scope="col">
                            Hover Data
                        </th>


                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">

                    <tr>
                        <th>1</th>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                                </a>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">Argon Design System</span>
                                </div>
                            </div>
                        </th>

                        <td class="status">
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i> data
                            </span>
                        </td>


                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>

    @include('layouts.footers.auth')
</div>
@endsection