@extends('ui-panel.master')
@section('title', 'myorder')
@section('content')


<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

        <div class="card">

       <div class="card-header bg-primary">

       <h2 class="text-white">Order View

       <a href="{{url('my-order')}}" class="btn btn-warning text-white float-end  ">Back</a>
       </h2>   


       </div>

       <div class="card-body">
        <div class="row">

        <div class="col-md-6">
            <h2>Shipping Details</h2>
            <hr>
        <label for="">First Name</label>
        <div class="border p-2">{{$orders->fname}}</div>
        <label for="">Last Name</label>
        <div class="border p-2">{{$orders->lname}}</div>
        <label for="">Email</label>
        <div class="border p-2">{{$orders->email}}</div>

        <label for="">Shipping Address</label>
        <div class="border p-2" >
            {{$orders->address1}},
            {{$orders->address2}},
            {{$orders->city}},
            {{$orders->state}},
            {{$orders->country}},


        </div>

        <label for="">Zin Code</label>
        <div class="border p-2">
            {{$orders->pincode}}

        </div>


       </div>
       <div class="col-md-6">
        <h2>Order Details</h2>
      <hr>
       <table class="table table-bordered">
            <thead>
                <tr>
                 <th>Name</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Price</th>
             
                

                </tr>
            </thead>

            <tbody >
      @foreach($orders->orderitems as $item)
            <tr>
             <td>{{$item->products->name}}</td>
            <td>{{$item->qty}}</td>
            
            <td>
                
        
         <img src="{{asset('assets/uploads/product/'. $item->products->image)}}" width=60px; alt="Image here" >
            </td> 
            <td>{{$item->price}}</td>

          
           

            </tr>
      @endforeach

            </tbody>
                


            
        </table>
        <h4 class="px-2">Grand Total: <span class="float-end">{{$orders->total_price}}</span></h4>
        
       </div>

        </div>
      
       </div>

       

        </div>


        </div>
    </div>
</div>

@endsection