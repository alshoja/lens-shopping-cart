@extends('layouts.app', ['title' => __('Stock Management')])

@section('content')
@include('users.partials.header', ['title' => __('Manage Stock')])
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Update/add Stock') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('store/stock') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Add Stock') }}</h6>
                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-sm">
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
                                <div class="col-sm">
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
                                <div class="col-sm">
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
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('No of stock') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Stock') }}</label>
                                        <input type="number" name="stock" id="input-email"
                                            class="form-control form-control-alternative{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('No of Stock') }}" value="{{ old('stock') }}" required>

                                        @if ($errors->has('stock'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('categorie') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                            for="input-password">{{ __('Categorie') }}</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($category as $item)       
                                        <option value="{{$item->id}}" aria-readonly="true">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <label class="form-control-label  col-xs-2">Enable Type</label>
                                <div class="col-xs-10">
                                    <label class="custom-toggle">
                                        <input type="checkbox" id="myCheck" onclick="myFunction()">
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </div>
                                <div id="text" style="display:none">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Something</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }} ">
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

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Product Image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="image" required class="custom-file-input" id="inputGroupFile01"
                                                multiple>
                                            <label class="custom-file-label" for="inputGroupFile01">Select multiple
                                                files</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-3">
                                    <label class="form-control-label col-xs-2">Flash Sale</label>
                                    <div class="col-xs-10">
                                        <label class="custom-toggle">
                                            <input name="in_flashSale" value="1" type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label class="form-control-label col-xs-2">In Deals</label>
                                    <div class="col-xs-10">
                                        <label class="custom-toggle">
                                            <input name="is_inDeals" value="1" type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label class=" form-control-label col-xs-2">Featured Sale</label>
                                    <div class="col-xs-10">
                                        <label class="custom-toggle">
                                            <input name="in_Featured_sale" value="1" type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>



                                <div class=" text-centre">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <span class="clearfix"></span>
    <div class="table-responsive">
        <div>
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">
                            Product Name
                        </th>
                        <th scope="col">
                            Price
                        </th>
                        <th scope="col">
                            Old Price
                        </th>
                    
                        {{-- <th scope="col">
                            Description
                        </th> --}}
                        <th scope="col">
                            No of Stock
                        </th>
                        <th scope="col">
                            Rating
                        </th>
                        <th scope="col">
                           Category
                        </th>
                        <th scope="col">
                            In Feature Section 
                        </th>
                        <th scope="col">
                                In Deals
                             </th>
                             <th scope="col">
                                    In Flash Sale
                                 </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @php
                    $i = 1
                    @endphp

                    @foreach ($stocks as $item)

                    <tr>
                        <th>{{$i++}}</th>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    @foreach ($item->productImage as $product_Image)
                                    <img alt="Image placeholder" src={{URL::asset("assets/$product_Image->image")}}>
                                    @endforeach
                                </a>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{$item->name}}</span>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                                ₹-/ {{$item->amount}}
                        </td>
                        <td class="status">
                            
                                    <span class="mb-0 text-sm">₹-/{{$item->old_price}}</span>
                            </span>
                        </td>
                        {{-- <td class="status">
                               
                                    <span class="mb-0 text-sm">{{$item->description}}</span>
                                </span>
                            </td> --}}
                            <td class="budget">
                                    ₹-/ {{$item->stock}}
                            </td>
                            <td class="status">
                                @if ($item->star == 0)
                                <span>Not rated yet</span>
                                @endif
                                    <span class="badge badge-dot mr-4">
                                        @for ($i = 0; $i < $item->star; $i++)
                                            <i class="far fa-star"></i>
                                            @endfor

                                    </span>
                                </td>
                                <td class="budget">
                                     {{$item->categorie->name}}
                                </td>
                        <td>
                            <div class="avatar-group">
                                @if ($item->in_Featured_sale)

                                <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i>&#9989
                                </span>
                                @else

                                <span class="badge badge-dot mr-4">
                                    <i class="bg-danger"></i>



                                    @endif


                            </div>

                        </td>
                        <td>
                                <div class="avatar-group">
                                    @if ($item->is_inDeals)
    
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>&#9989
                                    </span>
                                    @else
    
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-danger"></i>
    
    
    
                                        @endif
    
    
                                </div>
    
                            </td>
                            <td>
                                    <div class="avatar-group">
                                        @if ($item->in_flashSale)
        
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
        <div class="py-6">
            <nav class="d-flex justify-content-end" aria-label="...">
                {{ $stocks->links() }}
            </nav>
        </div>

    </div>
</div>
{{-- slider detaisl in list --}}
<span class="clearfix"></span>


<script>
    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>
@include('layouts.footers.auth')
</div>
@endsection