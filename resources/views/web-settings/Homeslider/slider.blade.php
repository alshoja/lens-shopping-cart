@extends('layouts.app', ['title' => __('Slider update')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Home Slider')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Slider Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('web-settings.Homeslider.slider') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('slider information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sub_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Sub Title') }}</label>
                                    <input type="text" name="sub_title" id="input-email" class="form-control form-control-alternative{{ $errors->has('sub_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Sub title') }}" value="{{ old('sub_title') }}" required>

                                    @if ($errors->has('sub_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sub_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('button_value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Button Value') }}</label>
                                    <input type="text" name="button_value" id="input-password" class="form-control form-control-alternative{{ $errors->has('button_value') ? ' is-invalid' : '' }}" placeholder="{{ __('Button Value') }}" value="" required>

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
                                              <input type="file" name="image" required class="custom-file-input" id="inputGroupFile01">
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
                            <th scope="col">First Slide</th>

                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                            @php
                            $i = 1
                            @endphp
                  
                   @foreach ($sliders as $item)
                  
                        <tr>
                        <th>{{$i++}}</th>
                            <th scope="row" class="name">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                      <img alt="Image placeholder" src={{URL::asset("assets/$item->image")}}>
                                    </a>
                                    <div class="media-body">
                                    <span class="mb-0 text-sm">{{$item->main_heading}}</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                    {{$item->sub_heading}}
                            </td>
                            <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <button class="btn btn-sm btn-info">{{$item->button_value}}</button>
                                </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    @if ($item->isActive)

                                      <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>&#9989
                                              </span>
                                              @else

                                              <span class="badge badge-dot mr-4">
                                                <i class="bg-danger"></i>
                                              


                                              @endif


            </div>

                            </td>

                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <form action="{{ url('patch/slider',$item->id) }}" method="post">
                                                @method('PATCH')
                                                @csrf
                                                <button class="dropdown-item" href="">Make as first Slide</button>
                                            </form>
                                    <a class="dropdown-item" href="{{url('show/slider',$item->id)}}">Edit</a>
                                    <form action="{{ url('delete/slider',$item->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item">Delete</button>
                                    </form>
                                    
                                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            </div>
            {{ $sliders->links() }}
        @include('layouts.footers.auth')
    </div>
@endsection
