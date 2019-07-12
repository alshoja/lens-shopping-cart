@extends('layouts.app', ['title' => __('Our Team')])

@section('content')
@include('users.partials.header', ['title' => __('Our Team')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Manage your Team') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ url()->previous() }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('store/team') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Team Members') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                    {{-- <label class="form-control-label" for="input-password">{{ __('Title') }}</label> --}}
                                                    <input type="text" name="name" id="input-password"
                                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                        placeholder="{{ __('Name') }}" value="{{ old('name') }}" required>
            
                                                    @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                                        {{-- <label class="form-control-label" for="input-name">{{ __('Button Value') }}</label> --}}
                                        <input type="text" name="position" id="input-title"
                                            class="form-control form-control-alternative{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Position') }}" value="{{ old('position') }}" required
                                            autofocus>

                                        @if ($errors->has('position'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm">
                                            <div class="form-group{{ $errors->has('fb_link') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-square"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="fb_link"  placeholder="{{ __('Facebook url') }}" aria-label="facebook url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('fb_link'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fb_link') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                       
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('insta_link') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-google-plus-g"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="insta_link"  placeholder="{{ __('Instagram url') }}" aria-label="insta url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('insta_link'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('insta_link') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                                <div class="col-sm">
                                        <div class="form-group{{ $errors->has('twitter_link') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('') }}</label>          
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                                                        </div>
                                                        <input type="url" class="form-control" name="twitter_link"  placeholder="{{ __('Twitter  url') }}" aria-label="T url" aria-describedby="basic-addon1">
                                                      </div>
                                                @if ($errors->has('twitter_link'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('twitter_link') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                </div>
                           
                               
                            </div>
                            <div class="row">
                                    <div class="col-sm-4">
                                           <div class="input-group mb-2">
                                                   <div class="custom-file">
                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                                                     <label class="custom-file-label"  for="inputGroupFile02">Choose Profile Image</label>
                                                   </div>
                                                 
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
                                Name
                            </th>
                            <th scope="col">
                             Postion
                            </th>
                            
    
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                      @php
                          $i =1
                      @endphp
    @foreach ($team as $item)  
                        <tr>
                            <th>{{$i++}}</th>
                            <th scope="row" class="name">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="Image placeholder" src="{{URL::asset("assets/$item->image")}}">
                                    </a>
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{$item->name}}</span>
                                    </div>
                                </div>
                            </th>
                           
                            <td class="status">
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i> {{$item->position}}
                                </span>
                            </td>
                        
    
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                
                                    <a class="dropdown-item" href="{{url('show/team',$item->id)}}">Edit</a>
                                    <form action="{{ url('delete/team',$item->id) }}" method="post">
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

    @include('layouts.footers.auth')
</div>
@endsection