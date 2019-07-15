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
                            <a href="{{ url()->previous() }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('store/editors/pic') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Editors Pic') }}</h6>
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
                                    <div class="form-group{{ $errors->has('hover_data') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label>
                                        --}}
                                        <input type="text" name="hover_data" id="input-title"
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
                                            <input type="file" name="image" class="custom-file-input"
                                                id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose Editors
                                                picture</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        
                            @if (count($editorspic)<1)
                                
                            
                            <div class="row">
                                <div class="col-sm">
                                    <label class="form-control-label" for="input-password">{{ __('Status') }}</label>
                                    <div class="input-group mb-2">
                                        <span class="clearfix"></span>
                                        <label class="custom-toggle">
                                            <input name="is_active" value="1"  onclick="return true;  type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        @else
                              <input type="hidden" name="is_active" value="0">  

                            @endif

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
                            Heading & Image
                        </th>
                        <th scope="col">
                            Hover Data
                        </th>
                        <th scope="col">Active Status</th>

                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @php
                        $i= 1
                    @endphp
                    @foreach ($editorspic as $item)


                    <tr>
                        <th>{{$i++}}</th>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="{{URL::asset("assets/$item->image")}}">
                                </a>
                                <div class="media-body">
                                <span class="mb-0 text-sm">{{$item->heading}}</span>
                                </div>
                            </div>
                        </th>

                        <td class="status">
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i> {{$item->hover_data}}
                            </span>
                        </td>

                        <td>
                            <div class="avatar-group">
                                @if ($item->is_active)

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
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <form action="{{ url('patch/editors/pic',$item->id) }}" method="post">
                                        @method('patch')
                                        @csrf
                                        <button class="dropdown-item" href="">Make this Active</button>
                                    </form>
                            <a class="dropdown-item" href="{{url('edit/editors/pic',$item->id)}}">Edit</a>
                            <form action="{{ url('delete/slider',$item->id) }}" method="post">
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