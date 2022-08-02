@extends('ui-panel.master')
@section('title', 'cart')
@section('content')

<div class="container mt-5">
<form action="{{url('place-order')}}" method="POST">

    {{ csrf_field() }}
   
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
            Basic Detail
            <hr>
            <div class="row checkout-form">
                <div class="col-md-6">
                    <label for="">First Name</label>
                    <input type="text" required class="form-control firstname" value="{{Auth::user()->name}}" name="fname" placeholder="enter first name">
                 <span id="fname_error" class="text-danger"></span>
                </div>
                <div class="col-md-6 ">
                    <label for="">Last Name</label>
                    <input type="text" required class="form-control lastname" value="{{Auth::user()->lname}}" name="lname" placeholder="enter last name">
                    <span id="lname_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6mt-3">
                    <label for="">Email</label>
                    <input type="text" required class="form-control email" value="{{Auth::user()->email}}" name="email" placeholder="enter email">
                    <span id="email_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Phone Number</label>
                    <input type="text" required class="form-control phone" value="{{Auth::user()->phone}}" name="phone" placeholder="enter Phone number">
                    <span id="phone_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Address 1</label>
                    <input type="text" required class="form-control address1" value="{{Auth::user()->address1}}" name="address1" placeholder="enter address one">
                    <span id="address1_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Address 2</label>
                    <input type="text" required class="form-control address2" value="{{Auth::user()->address2}}" name="address2" placeholder="enter address two">
                    <span id="address2_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">City</label>
                    <input type="text" required class="form-control city" value="{{Auth::user()->city}}" name="city" placeholder="enter first name">
                    <span id="city_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">State</label>
                    <input type="text" required class="form-control state" value="{{Auth::user()->state}}" name="state" placeholder="enter State">
                    <span id="state_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Country</label>
                    <input type="text" required class="form-control country" value="{{Auth::user()->country}}" name="country" placeholder="enter Control">
                    <span id="country_error" class="text-danger"> </span>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Pin Code</label>
                    <input type="text" required class="form-control pincode" value="{{Auth::user()->pincode}}" name="pincode" placeholder="enter Pin Code">
                    <span id="pincode_error" class="text-danger"> </span>
                </div>
            </div>

            </div>
        </div>
    </div>

    <div class="col-md-5">

          <div class="card">
        <div class="card-body">
            Order Detail
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>

                    </tr>
                </thead>
               <tbody>
               @foreach($cartitems as $item)
               <tr>
                <th>{{$item->products->name}}</th>
                <th>{{$item->prod_qty}}</th>
                <th>{{$item->products->selling_price}}</th>
               </tr>
               

                @endforeach
               </tbody>
            </table>

           
            <hr>

            <button type="submit" class="btn btn-sm btn-success w-100">Place Order</button>
            <button type="button" class="btn btn-sm btn-primary w-100 mt-3 razorpay_btn">rezorPay</button>

        </div>
          </div>
    </div>



</div>
</form>
</div>




@endsection


@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection




