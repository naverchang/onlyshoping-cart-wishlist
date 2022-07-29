@extends('admin-panel.master')
@section('title','user index')
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

                                <a href="" class="btn btn-primary btn-sm mb-2 float-end"> <i class="fa fa-plus-circle"></i>Order history</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                      
                                            <th>Phone</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($users as $user)
            <tr>
             <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                {{$user->phone}}
            </td>

          
            <td> 
            <a href="{{url('view-user/' .$user->id)}}" class="btn btn-primary btn-sm">View</a>
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
