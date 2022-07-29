@extends('ui-panel.master')
@section('title', $products->name)
@section('content')

<!-- cart  -->

<div class="py-3 mb-4 showdow-sm bg-warning border-top">

<div class="container">

<h6 class="mb-0">Collection /{{$products->category->name}}/ {{$products->name}}</h6>
</div>


</div>


<div class="container">

<div class="card showdow product_data">

<div class="card-body">

<div class="row">
    <div class="col-md-4 border-right">
        <img src="{{asset('assets/uploads/product/'. $products->image)}}" class="w-100" alt="">

    </div>

    <div class="col-md-8 mt-2">
        <h2 class="mb-0">{{$products->name}}

        @if($products->trending == '1')
          <label style="font-size:16px;" class="float-end badge bg-danger trending_tag" for="">Trending</label>
        @endif
       
        </h2>
        <label class="me-3" for="">Original Price: <s>Rs {{$products->original_price}} </s></label>
        <label class="fw-bold" for="">Original Price: Rs {{$products->selling_price}} </label>
        <p>

        {{!! $products->small_description !!}}
        </p>
        <hr>
        @if($products->qty > 0)

        <label class="badge bg-success" for="">In stock</label>
        @else
        <label for="" class="badge bg-success"> Out of stock</label>
        @endif

        <div class=" mt-2">
        <div class="col-md-2">
        <input type="hidden" value="{{$products->id}}" class="prod_id">
            <label for="Quantity">Quantity</label>
            
            <div class="input-group text-center mb-3" style="width:100px;">

            <button class="input-group-text decrement-btn">-</button>
            <input type="text"  name="quantity " value="1" class="form-control qty-input text-center" />
            <button class="input-group-text increment-btn">+</button> 
            </div>
        </div>

        <div class="col-md-10">
            <br>

        @if($products->qty > 0)

        <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Card <i class="fa fa-shopping-cart"></i></button>
      
        @endif
        
     
        <button type="button" class="btn btn-success me-3 addToWishlist float-start">Add to wishlist <i class="fa fa-heart"></i></button>
       
       

        
        </div>

        </div>


    </div>

</div>

</div>
</div>
     
@endsection




