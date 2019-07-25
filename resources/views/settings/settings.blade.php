@extends('layouts.app', ['title' => __('Settings')])

@section('content')
@include('users.partials.header', ['title' => __('Change Settings')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Settings') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ URL::previous()}}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">


                    <h6 class="heading-small text-muted mb-4">{{ __('Change Default Settings') }}</h6>
                    <div class="pl-lg-4">

                            <form action="update/settings" method="POST">
                                @csrf
                                @method('put')
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                                <label class="form-control-label" for="input-password">{{ __('Store Name') }}</label>
                                          <input type="text"  value="{{$settings->store_name}}" name="store_name" class="form-control" id="exampleFormControlInput1" placeholder="Name of your store">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                                <label class="form-control-label" for="input-password">{{ __('Default Email') }}</label>
                                          <input type="email" value="{{$settings->default_email}}" name="default_email" placeholder="info@company.com" class="form-control"  />
                                        </div>
                                      </div>
                                    </div>
                                   
                                  
                                

                        
                    </div>
                   
                </div>
                <div class="card-body">


                        <h6 class="heading-small text-muted mb-4">{{ __('Change Gateway Details') }}</h6>
                        <div class="pl-lg-4">
    
                          

                                        <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                          <label class="form-control-label" for="input-password">{{ __('Gateway Key') }}</label>
                                                 
                                                          <div class="form-group">
                                                             
                                                                <select name="gateway" class="form-control" id="exampleFormControlSelect1">
                                                                  <option value="payumoney" selected>Pay U Money</option>
                                                                  <option value="payubiz">PayBiz</option>
                                                                
                                                                </select>
                                                              </div>
                                                  </div>
                                                </div>
                                             
                                              </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="form-control-label" for="input-password">{{ __('Gateway Key') }}</label>
                                           
                                              <div class="input-group input-group-alternative mb-4">
                                              <input readonly type="text" value="{{$settings->gatway_key}}" name="gatway_key" class="form-control" id="exampleFormControlInput1" placeholder="X!233!!gg">
                                                    <div class="input-group-append">
                                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                    </div>
                                                  </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="form-control-label" for="input-password">{{ __('Gateway Salt') }}</label>
                                              
                                              <div class="input-group input-group-alternative mb-4">
                                                    <input readonly type="text"  value="{{$settings->gatway_salt}}" name="gatway_salt"  placeholder="xkhjj223" class="form-control">
                                                    <div class="input-group-append">
                                                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                                    </div>
                                                  </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                       
                                        <div class=" text-centre">
                                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                            </div>        
                                      </form>
    
                            
                        </div>
                       
                    </div>
            </div>
        </div>
    </div>
    {{-- slider detaisl in list --}}
    <span class="clearfix"></span>


    @include('layouts.footers.auth')
</div>
@endsection