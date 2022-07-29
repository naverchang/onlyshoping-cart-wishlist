@extends('ui-panel.master')
@section('title', 'cart')
@section('content')

<!-- cart  -->
<div class="container my-5">
    <div class="card shadow">
    @if($cartitems->count() > 0)
    <div class="card-body">
        @php $total =0; @endphp
     @foreach($cartitems as $item)
        <div class="row product_data">
            <div class="col-md-2">

            <img src="{{asset('assets/uploads/product/'. $item->products->image)}}" alt="Image here" style="width:40%">
            </div>
         
            <div class="col-md-3">
                <h3>{{$item->products->name}}</h3>
            </div>

            <div class="col-md-2">
             <h6>Rs {{$item->products->selling_price}}</h6>
            </div>

            <div class="col-md-3">
                <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                @if($item->products->qty >= $item->prod_qty)
                <label for="Quantity">Quantity</label>

                <div class="input-group text-center mb-3" style="width:100px;">

                 <button class="input-group-text changeQuantity decrement-btn">-</button>
                    <input type="text"  name="quantity" value="{{$item->prod_qty}}" class="form-control qty-input text-center" />
                     <button class="input-group-text changeQuantity increment-btn">+</button> 
                 </div>
                 @php $total +=$item->products->selling_price * $item->prod_qty ; @endphp
                 @else
                 <h5>Out Of stock</h5>
                 @endif
            </div>

            <div class="col-md-2 ">
                <button class="btn btn-danger btn-sm delete-cart-item">Remore</button>
            </div>
        </div>
        
       
 @endforeach


    </div>
    <div class="card-footer ">
        <h6 class="">Total Price: {{$total}}</h6>

        <a href="{{url('/checkout')}}" class="btn btn-outline-success float-end d-flex ">Proceed to Checkout</a>
        
    </div>

    @else
    <div class="card-body text-center">
        <h2>Your <i class="fa-solid fa-cart-shopping"></i> Empty Cart </h2>
        <a href="{{url('category_ui')}}" class="btn btn-outline-primary float-end">Conntinue Shopping</a>

    </div>
    @endif

    </div>
</div>


     
@endsection


 








