@extends('admin-panel.master')
@section('title','user view')
@section('content')


<div class="container">

<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="card-header">

        <h4>User Details</h4>
        <hr>

        </div>

        <div class="card-body">
            <div class="row">

            <div class="col-md-4">

                <label for="">Status</label>
                <div class="p-2 border">{{$users->status == 'admin'? 'admin':'user'}}</div>
                </div>

                <div class="col-md-4">

                <label for="">First Name</label>
                <div class="p-2 border">{{$users->name}}</div>
                </div>

                <div class="col-md-4">

                <label for="">Last Name</label>
                <div class="p-2 border">{{$users->lname}}</div>
                </div>
                <div class="col-md-4">

                      <label for="">Email</label>
                    <div class="p-2 border">{{$users->email}}</div>
                </div> 
                <div class="col-md-4">

<label for="">Phone</label>
<div class="p-2 border">{{$users->phone}}</div>
</div>
            

<div class="col-md-4">

<label for="">Address 1</label>
<div class="p-2 border">{{$users->address1}}</div>
</div>

<div class="col-md-4">

<label for="">Address 2</label>
<div class="p-2 border">{{$users->address2}}</div>
</div>
<div class="col-md-4">

<label for="">City</label>
<div class="p-2 border">{{$users->city}}</div>
</div>


<div class="col-md-4">

<label for="">state</label>
<div class="p-2 border">{{$users->state}}</div>
</div>

<div class="col-md-4">

<label for="">Country</label>
<div class="p-2 border">{{$users->country}}</div>
</div>

<div class="col-md-4">

<label for="">PinCode</label>
<div class="p-2 border">{{$users->pincode}}</div>
</div>






            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection