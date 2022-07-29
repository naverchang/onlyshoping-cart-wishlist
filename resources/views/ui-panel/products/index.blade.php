@extends('ui-panel.master')
@section('title', $category->name)
@section('content')

<!-- cart  -->

<div class="py-5">


  <div class="container">
    <div class="row">

    <h2>{{$category->name}}</h2>

  
    


 @foreach($products as $product)
      <div class="col-md-3 mb-3">

    



    

      <div class="card">
      <a href="{{url('category/'.$category->slug.'/'.$product->slug)}}">
        
        <img class="h-100 w-100" src="{{asset('assets/uploads/product/'. $product->image)}}" alt="Product image">
        <div class="card-body">
          <h5>{{$product->name}}</h5>
          
          <span>{{$product->selling_price}}</span>
          <span class="float-end"> <s>{{$product->original_price}}</s> </span>
        </div>
        </a>
      </div>
     

    
      </div>
      @endforeach 


   
   

     
    </div>

  </div>

</div>
@endsection

@section('scripts')
 

<script>

$('.feature-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>

@endsection




