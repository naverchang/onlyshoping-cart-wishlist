@extends('ui-panel.master')
@section('title', 'cart')
@section('content')

<!-- cart  -->

<div class="py-3 mb-4 showdow-sm bg-warning border-top">

<div class="container">

<h6 class="mb-0">Collection / WishList</h6>
</div>


</div>
<div class="container my-5">
    <div class="card shadow">
    @if($wishlist->count() > 0)
<div class="card-body">
        @php $total =0; @endphp
     @foreach($wishlist as $item)
        <div class="row product_data">
            <div class="col-md-2">

            <img src="{{asset('assets/uploads/product/'. $item->products->image)}}" alt="Image here" style="width:40%">
            </div>
         
            <div class="col-md-2">
                <h3>{{$item->products->name}}</h3>
            </div>

            <div class="col-md-2">
             <h6>Rs {{$item->products->selling_price}}</h6>
            </div>

            <div class="col-md-2">
                <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                @if($item->products->qty >= $item->prod_qty)
                
                

                <label for="Quantity">Quantity</label>

                <div class="input-group text-center mb-3" style="width:100px;">

                 <button class="input-group-text  decrement-btn">-</button>
                    <input type="text"  name="quantity" value="1" class="form-control qty-input text-center" />
                     <button class="input-group-text increment-btn">+</button> 
                 </div>
                 @else
                 <h5>Out Of stock</h5>
                 @endif
            </div>

            <div class="col-md-2 ">
                <button class="btn btn-sm btn-success addToCartBtn"> <i class="fa fa-shopping-cart"></i>Add to Cart</button>
            </div>

            <div class="col-md-2 ">
                <button class="btn btn-danger btn-sm remove-wishlist-item"> <i class="fa fa-trash"></i>Remore</button>
            </div>
        </div>
        
       
 @endforeach


    </div>
   

    @else
   <h2>There is no products in your wishlist</h2>
    @endif

    </div>
</div>
</div>

   
    
@endsection


 








