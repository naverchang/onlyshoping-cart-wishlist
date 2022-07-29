@extends('admin-panel.master')
@section('title','order index')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example

                                <a href="{{'/order-history'}}" class="btn btn-primary btn-sm mb-2 float-end"> <i class="fa fa-plus-circle"></i>Order history</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Order Data</th>
                                            <th>Tracking Number</th>
                                            <th>Total Price</th>
                                      
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($orders as $item)
            <tr>
             <td>{{date('d-m-y', strtotime($item->created_at))}}</td>
            <td>{{$item->tracking_no}}</td>
            <td>{{$item->total_price}}</td>
            <td>
                {{$item->status == '0' ?'pending' : 'completed'}}
            </td>

          
            <td> 
            <a href="{{url('admin/view-order/'. $item->id)}}" class="btn btn-primary btn-sm">View</a>
            </td>

            </tr>
            @endforeach
                                   
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
