@extends('admin-panel.master')
@section('title','category index')
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

                                <a href="{{url('/catecreate')}}" class="btn btn-primary btn-sm mb-2 float-end"> <i class="fa fa-plus-circle"></i>Add New</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                      
                                            <th>Image</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($categorys as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>
                                                <img src="{{asset('assets/uploads/category/'.$category->image)}}"  alt="Image" class="cat-image">
                                            </td>
                                            <td>
                                                <a href="{{url('/edit-prod/'.$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{url('/delete-category/'. $category->id)}}" class="btn btn-sm btn-success">Delete</a>
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
