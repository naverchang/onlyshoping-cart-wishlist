@extends('admin-panel.master')
@section('title','product create')
@section('content')


<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{url('/category')}}">Product</a></li>
                            <li class="breadcrumb-item active"><b>FORM</b></li>
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
                               <b>FORM</b>
                            </div>
                            <div class="card-body">

        <form action="{{url('insert-product')}}" method="post" enctype="multipart/form-data">
            @csrf
                    <div class="row">
               <div class="col-md-12 mb-3">
                <select class="form-select form-select-sm" name="cate_id" aria-label=".form-select-sm example">
                    <option selected>Open this select menu</option>
                    @foreach($category as $categorys)
                   <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                   
                   @endforeach
               </select>

               </div>

                    <div class="col-md-6">
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
  <div class="col-md-6">
    <label for="" class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug">
  </div>
  <div class="col-md-6 mb-3">
  <label for="" class="form-label">Small Description</label>
  <textarea name="small_description" class="form-control"  rows="3"></textarea>
</div>

<div class="col-md-6 mb-3">
  <label for="" class="form-label">Description</label>
  <textarea name="description" class="form-control"  rows="3"></textarea>
</div>

<div class="col-md-6">
    <div class="form-check">
      <input name="status" class="form-check-input" type="checkbox" >
      <label class="form-check-label" for="">
        Status
      </label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-check">
      <input name="trending" class="form-check-input" type="checkbox">
      <label class="form-check-label" for="">
    trending
      </label>
    </div>
  </div>

  <div class="col-md-6">
                      <label for="" class="form-label">Original Price</label>
                      <input type="number" class="form-control" name="original_price">
                    </div>
  <div class="col-md-6">
    <label for="" class="form-label">Selling Price</label>
    <input type="number" class="form-control" name="selling_price">
  </div>

  
  <div class="col-md-6">
                      <label for="" class="form-label">Tax</label>
                      <input type="number" class="form-control" name="tax">
                    </div>
  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="text" class="form-control" name="qty">
  </div>
  

  <div class="col-md-12">
    <label for="" class="form-label">Meta Title</label>
    <input type="text" class="form-control" name="meta_title">
  </div>

  <div class=" col-md-6 mb-3">
  <label for="" class="form-label">Meta Keywords</label>
  <textarea name="meta_keywords" class="form-control"  rows="3"></textarea>
</div>

<div class="mb-3 col-md-6">
  <label for="" class="form-label">Meta Description</label>
  <textarea name="meta_description" class="form-control"  rows="3"></textarea>
</div>
  
  
  <div class="col-12 mb-2">
    <input type="file" name="image" class="from-control">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">submit</button>
  </div>

                           


                           

                    </div>

        </form>

                             
                               
                            </div>
                        </div>
                    </div>
                </main>

@endsection