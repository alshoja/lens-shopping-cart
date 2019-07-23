@extends('layouts.app', ['title' => __('Stock Management')])

@section('content')
@include('users.partials.header', ['title' => __('Update Product')])
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
                            <a href="{{ URL::previous() }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                {{-- @if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif --}}

            <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                <form method="post" enctype="multipart/form-data" action="{{ url('update/stock',$stocks->id) }}" autocomplete="off">
                    @csrf
@method('put')
                    <h6 class="heading-small text-muted mb-4">{{ __('Update Product') }}</h6>
                    <div class="pl-lg-4">

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-title"
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" value="{{ $stocks->name }}" required autofocus>

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
                                    <input type="text" name="amount" id="numbervalidate"
                                        class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Current Price') }}" value="{{ $stocks->amount }}" required>

                                    @if ($errors->has('amount'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group{{ $errors->has('old_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Old Price') }}</label>
                                    <input type="number" name="old_price" id="numbervalidate"
                                        class="form-control form-control-alternative{{ $errors->has('old_price') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Old Price') }}" value="{{ $stocks->old_price }}" required>

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
                                    <input type="number" pattern="^-?([0-9]*\?[0-9]+|[0-9]+\?[0-9]*)$" name="stock" id="input-email"
                                        class="form-control form-control-alternative{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('No of Stock') }}" value="{{ $stocks->stock }}" required>

                                    @if ($errors->has('stock'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group{{ $errors->has('categorie') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Categorie') }}</label>
                                    <select name="category_id" class="form-control">
                                            <option value="{{$stocks->id}}" aria-readonly="true">{{$stocks->name}}</option>

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
                        placeholder="{{ __('Description about product') }}">{{$stocks->description}}</textarea>
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
                                        <span class="input-group-text">Product Image </span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="photos[]"  class="custom-file-input"
                                            id="inputGroupFile01" multiple>
                                        <label class="custom-file-label" for="inputGroupFile01"> Can attach more than
                                            one
                                            file</label>
                                    </div>

                                    @if ($errors->has('photos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photos') }}</strong>

                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-3">
                                <label class="form-control-label col-xs-2">Flash Sale</label>
                                <div class="col-xs-10">
                                    <label class="custom-toggle">
                                        @if ($stocks->in_flashSale == 1)
                                        <input name="in_flashSale" value="1" type="checkbox" checked>

                                        @else
                                        <input name="in_flashSale" value="1" type="checkbox">
                                        @endif

                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label class="form-control-label col-xs-2">In Deals</label>
                                <div class="col-xs-10">
                                    <label class="custom-toggle">
                                            @if ($stocks->is_inDeals == 1)
                                            <input name="is_inDeals" value="1" type="checkbox" checked>

                                            @else
                                            <input name="is_inDeals" value="1" type="checkbox">
                                            @endif
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label class=" form-control-label col-xs-2">Featured Sale</label>
                                <div class="col-xs-10">
                                    <label class="custom-toggle">
                                            @if ($stocks->in_Featured_sale == 1)
                                            <input name="in_Featured_sale" value="1" type="checkbox" checked>

                                            @else
                                            <input name="in_Featured_sale" value="1" type="checkbox">
                                            @endif
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

</div>
{{-- slider detaisl in list --}}
<span class="clearfix"></span>


<div class="row">
    <div class="col-md-12" >
<div class="container" style="width: 40%">
    @php
        $i=1
    @endphp
    @php
    $max =  count($stocks->images)
 @endphp
 @if ($max==0)
 <div class="mySlides">
    <div class="numbertext">No images found</div>
    <div class="imgs">
    <img src="{{URL::asset("argon/img/noimage.gif")}}" style="width:100%">
    </div>
    <marquee width="40%" direction="left" height="30%">
       Nothing found..! Please add some images
        </marquee>
  </div>
 @else
    @foreach ($stocks->images as $item)
  <div class="mySlides">
  <div class="numbertext">{{$i++}} / {{$max}}
        <div class="row" style="margin: 20px">
                <div class="sm">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
  Update
</button>
    </div>
    <div class="sm">

        <form action="{{ url('delete/stock/image',$item->id) }}" method="post">
            @method('delete')
            @csrf
        <button type="submit" class="btn btn-sm btn-danger mt-4 ">Delete</button>
        </form>
    </div>
</div>
  </div>

    <img src="{{URL::asset("assets/$item->image")}}" style="width:100%">

  </div>
  {{-- Modal starting here --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ url('update/stock/image',$item->product_id) }}" enctype="multipart/form-data" method="post">
                @method('put')
                @csrf
                       <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Product Image </span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="photo" required class="custom-file-input"
                                    id="inputGroupFile01" multiple>
                                <label class="custom-file-label" for="inputGroupFile01"> File</label>
                            </div>

                            @if ($errors->has('photos'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('photos') }}</strong>

                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- Modal ends here --}}
  @endforeach
  @endif
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">

    <p  id="caption"></p>
  </div>

  <div class="row">
      @php
          $sno =1
      @endphp
        @foreach ($stocks->images as $item)
    <div class="column">
      <img class="demo cursor" src="{{URL::asset("assets/$item->image")}}" style="width:100%" onclick="currentSlide({{$sno++}})" alt="{{$item->image}}">
    </div>

    @endforeach
  </div>
</div>
    </div>
</div>
<script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>

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
