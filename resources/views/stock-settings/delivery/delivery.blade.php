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
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Delivery Place') }}</h6>
                        <div class="pl-lg-4">

                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('State') }}</label>
                                                <div class="input-group mb-3">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                        </select>

                                                      </div>
                                                @if ($errors->has('state'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm">
                                            <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('DIstrict') }}</label>
                                                <div class="input-group mb-3">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                        </select>

                                                      </div>
                                                @if ($errors->has('state'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('state') }}</strong>
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
                                                        <input type="text" class="form-control" name="pincode"  placeholder="{{ __(' Pincode') }}" aria-label="T url" aria-describedby="basic-addon1">
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
    <div class="table-responsive">
            <div>
                <table class="table align-items-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">
                                Address
                            </th>
                            <th scope="col">
                             Pincode
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
                                    <i class="bg-warning"></i> Postion
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
