@extends('layouts.app', ['title' => __('Features')])

@section('content')
@include('users.partials.header', ['title' => __('Features')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update Features') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('store/features') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Features') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('heading') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-password">{{ __('Title') }}</label>
                                        --}}
                                        <input type="text" name="heading" id="input-password"
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
                                    <div class="form-group{{ $errors->has('button_value') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label>
                                        --}}
                                        <input type="text" name="button_value" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('button_value') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Button Value') }}" value="{{ old('button_value') }}"
                                            required autofocus>

                                        @if ($errors->has('button_value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('button_value') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label>
                                        --}}
                                        <input type="url" name="url" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('URL:  http://www.example.com/') }}"
                                            value="{{ old('url') }}" required autofocus>

                                        @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('icon') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-password">{{ __('Categorie') }}</label>
                                        --}}
                                        <select name="icon" class="form-control">
                                            <option value='<i class="far fa-hand-paper"></i>' aria-readonly="true"> Hand
                                            </option>
                                            <option value='<i class="far fa-hand-paper"></i>' aria-readonly="true">
                                                Contact</option>
                                            <option value='<i class="fas fa-archive"></i>' aria-readonly="true">Archive
                                            </option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mt-sm-4 mb-sm-5">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                        --}}
                                        <textarea name="description"
                                            class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                            id="exampleFormControlTextarea1"  rows="3"
                                            placeholder="{{ __('A brief description about your feature :)') }}"></textarea>
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
                                    <label class="form-control-label"
                                        for="input-password">{{ __('Make as Services') }}</label>
                                    <div title="You can add the same content as second Feature on top of footer"
                                        class="input-group mb-2">
                                        <span class="clearfix"></span>
                                        <label class="custom-toggle">
                                            <input value="2" name="feature_div" type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>

                                    </div>
                                </div>

                                
                            </div>
                            
                            @if (count($feature)<7)
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                            @else
                            <div class="text-center">
                                    <button type="submit" disabled class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            @endif

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
                            Heading
                        </th>
                        <th scope="col">
                            icon
                        </th>

                        <th scope="col">
                                Button Value
                            </th>
                            <th scope="col">
                                    Button Url
                                </th>
                                <th scope="col">
                                        Show in Top of Footer
                                    </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @php
                        $i=1
                    @endphp
                    @foreach ($feature as $item)
                    <tr>
                        <th>{{$i++}}</th>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                
                                <div class="media-body">
                                <span class="mb-0 text-sm">{{$item->heading}}</span>
                                </div>
                            </div>
                        </th>

                        <td class="status">
                            <span class="badge badge-dot mr-4">
                             
                                {!!$item->icon!!}
                            </span>
                        </td>

                        <td class="status">
                                <span class="badge badge-dot mr-4">
                                
                                    <button class="btn btn-sm">{{$item->button_value}}</button>
                                </span>
                            </td>  <td class="status">
                                    <span class="badge badge-dot mr-4">
                                      
                                        {!!$item->url!!}
                                    </span>
                                </td>
                                <td class="status">
                                        @if ($item->feature_div == 2)

                                        <span class="badge badge-dot mr-4">
                                                  <i class="bg-success"></i>&#9989
                                                </span>
                                                @else
  
                                                <span class="badge badge-dot mr-4">
                                                  <i class="bg-danger"></i>
                                                
  
  
                                                @endif
  
                                    </td>
                                    <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                  
                                                   
                                            <a class="dropdown-item" href="{{url('edit/features',$item->id)}}">Edit</a>
                                            
                                            <form action="{{ url('delete/features',$item->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item">Delete</button>
                                            </form>
                                                </div>
                                            </div>
                                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    @include('layouts.footers.auth')
</div>
@endsection
