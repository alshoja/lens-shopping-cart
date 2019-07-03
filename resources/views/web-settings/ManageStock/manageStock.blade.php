@extends('layouts.app', ['title' => __('Manage Stock')])

@section('content')
@include('users.partials.header', ['title' => __('Add Stock')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Stock Management') }}</h3>
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

                        <h6 class="heading-small text-muted mb-4">{{ __('Stock information') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6 col-md-4">
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
                                <div class="col-6 col-md-4">
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
                                <div class="col-6 col-md-4">
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
                            </div>




                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
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
                            <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('Stock') }}</label>
                                <input type="number" name="password" id="input-password"
                                    class="form-control form-control-alternative{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('No of Stock') }}" value="{{ old('stock') }}" required>

                                @if ($errors->has('stock'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('stock') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('categorie') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('Categorie') }}</label>
                                <select class="form-control">
                                    <option aria-readonly="true">select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                          
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Product Default Image</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="form-control-label">In Flash Sale</label>
                                <div class="col-sm">
                                    <label class="custom-toggle">
                                        <input type="checkbox" checked>
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>

                                </div>
                                <label class="form-control-label">In Deals</label>
                                <div class="col-smb">
                                    <label class="custom-toggle">
                                        <input type="checkbox" checked>
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </div>
                                <label class="form-control-label">In Featured Sale</label>
                                <div class="col-sm">
                                    <label class="custom-toggle">
                                        <input type="checkbox" checked>
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </div>
                                <label class="form-control-label">Type</label>
                                <div class="col-sm">
                                    <label class="custom-toggle">
                                        <input type="checkbox">
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>

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
