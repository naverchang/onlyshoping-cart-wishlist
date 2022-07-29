@extends('admin-panel.master')
@section('title','product edit')
@section('content')


<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Edit Form</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{url('/category')}}">Product</a></li>
                            <li class="breadcrumb-item active"><b>UPDATE FORM</b></li>
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

        <form action="{{url('product/'.$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                    <div class="row">
               <div class="col-md-12 mb-3">
                <select class="form-select form-select-sm" name="cate_id" aria-label=".form-select-sm example">
                    
                   
                   <option value="">{{$product->category->name}}</option>
                   
                   
               </select>

               </div>

                    <div class="col-md-6">
                      <label for=""  class="form-label">Name</label>
                      <input type="text" value="{{$product->name}}" class="form-control" name="name">
                    </div>
  <div class="col-md-6">
    <label for="" class="form-label">Slug</label>
    <input type="text" value="{{$product->slug}}" class="form-control" name="slug">
  </div>
  <div class="col-md-6 mb-3">
  <label for="" class="form-label">Small Description</label>
  <textarea name="small_description"  class="form-control"  rows="3">{{$product->small_description}}</textarea>
</div>

<div class="col-md-6 mb-3">
  <label for="" class="form-label">Description</label>
  <textarea name="description"  class="form-control"  rows="3">{{$product->description}}</textarea>
</div>

<div class="col-md-6">
    <div class="form-check">
      <input name="status" {{$product->status =="1" ? 'checked':''}} class="form-check-input" type="checkbox" >
      <label class="form-check-label" for="">
        Status
      </label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-check">
      <input name="trending" {{$product->trending =="1" ? 'checked':''}} class="form-check-input" type="checkbox">
      <label class="form-check-label" for="">
    trending
      </label>
    </div>
  </div>

  <div class="col-md-6">
                      <label for="" class="form-label">Original Price</label>
                      <input type="number" value="{{$product->original_price}}" class="form-control" name="original_price">
                    </div>
  <div class="col-md-6">
    <label for="" class="form-label">Selling Price</label>
    <input type="number" value="{{$product->selling_price}}" class="form-control" name="selling_price">
  </div>

  
  <div class="col-md-6">
                      <label for="" class="form-label">Tax</label>
                      <input type="number" value="{{$product->tax}}" class="form-control" name="tax">
                    </div>
  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="text" value="{{$product->qty}}" class="form-control" name="qty">
  </div>
  

  <div class="col-md-12">
    <label for="" class="form-label">Meta Title</label>
    <input type="text" value="{{$product->meta_title}}" class="form-control" name="meta_title">
  </div>

  <div class=" col-md-6 mb-3">
  <label for="" class="form-label">Meta Keywords</label>
  <textarea name="meta_keywords"  class="form-control"  rows="3">{{$product->meta_keywords}}</textarea>
</div>

<div class="mb-3 col-md-6">
  <label for="" class="form-label">Meta Description</label>
  <textarea name="meta_description" class="form-control"  rows="3">{{$product->meta_description}}</textarea>
</div>
 

@if($product->image)

<img src="{{asset('assets/uploads/product/'. $product->image)}}" alt="category image" class="cat-image">

@endif
  
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