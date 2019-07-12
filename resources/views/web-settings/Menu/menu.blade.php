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
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Menu information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title_one') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('First Title') }}</label>
                                    <input type="text" name="title_one" id="input-title_one" class="form-control form-control-alternative{{ $errors->has('title_one') ? ' is-invalid' : '' }}" placeholder="{{ __('First Title Head') }}" value="{{ old('title_one') }}" required autofocus>

                                    @if ($errors->has('title_one'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_one') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('title_two') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Sub Title') }}</label>
                                    <input type="email" name="title_two" id="input-email" class="form-control form-control-alternative{{ $errors->has('title_two') ? ' is-invalid' : '' }}" placeholder="{{ __('Second Title') }}" value="{{ old('title_two') }}" required>

                                    @if ($errors->has('title_two'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_two') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('button_value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Button Value') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('button_value') ? ' is-invalid' : '' }}" placeholder="{{ __('Button Value') }}" value="" required>

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
                                              <input type="file" required class="custom-file-input" id="inputGroupFile01">
                                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
                                Sub-Title
                            </th>
                            <th scope="col">
                                Button Value
                            </th>
                            <th scope="col">IsActive</th>

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
                            <td class="budget">
                                $2500 USD
                            </td>
                            <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i> pending
                                </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                        <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                              </span>

            </div>

                            </td>

                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
