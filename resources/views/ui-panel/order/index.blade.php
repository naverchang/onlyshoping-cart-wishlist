@extends('ui-panel.master')
@section('title', 'myorder')
@section('content')


<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

        <div class="card">

       <div class="card-header bg-primary">

       <h2 class="text-white">Order View</h2>

       </div>

        <table class="table">
            <thead>
                <tr>
                 <th>Order Date</th>
                <th>Tracking Number</th>
                <th>Total Price</th>
                <th>status</th>
                <th>Action</th>

                </tr>
            </thead>

            <tbody >
          @foreach($orders as $item)
            <tr>
             <td>{{date('d-m-y', strtotime($item->created_at))}}</td>
            <td>{{$item->tracking_no}}</td>
            <td>{{$item->total_price}}</td>
            <td>
                {{$item->status == '0' ?'pending' : 'completed'}}
            </td>

          
            <td> 
            <a href="{{url('view-order/' .$item->id)}}" class="btn btn-primary btn-sm">View</a>
            </td>

            </tr>
@endforeach
            </tbody>
                


            
        </table>

        </div>


        </div>
    </div>
</div>

@endsection