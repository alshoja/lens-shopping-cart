@extends('layouts.app', ['title' => __('update Editors Pic')])

@section('content')
@include('users.partials.header', ['title' => __('Update Editors Pic')])

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
                            <a href="{{ url()->previous()}}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('edit/editors/pic',$editorspic->id) }}" autocomplete="off">
                        @csrf
@method('put')
                        <h6 class="heading-small text-muted mb-4">{{ __('Update Editors Info') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('heading') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-password">{{ __('Title') }}</label>
                                        --}}
                                        <input type="text" name="heading" id="input-password"
                                            class="form-control form-control-alternative{{ $errors->has('heading') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Title') }}" value="{{$editorspic->heading}}" required>

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
                                            placeholder="{{ __('Hover data') }}"  value="{{$editorspic->hover_data}}"
                                            required autofocus>
                                    <input type="hidden" name="is_active" value="{{$editorspic->is_active}}">
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
                                            <label class="custom-file-label" for="inputGroupFile02">Update Editors
                                                picture</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1">
                                    <div class="input-group mb-5">
                                        <div class="input-group-prepend">
                                            <img src="{{URL::asset("assets/$editorspic->image")}}" class="img-thumbnail"
                                                alt="Cinque Terre" width="104" height="76">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
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