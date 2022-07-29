@extends('ui-panel.master')
@section('title','product ui index')
@section('content')

<!-- cart  -->

<div class="py-5">


  <div class="container">

  <h2>Feature product</h2>
    <div class="row mb-5">

  <div class="owl-carousel featured-carousel owl-theme">
    


    @foreach($product as $products)
      <div class="item">
 

      <div class="card">
        <img class="h-2" src="{{asset('assets/uploads/product/'. $products->image)}}" alt="Product image">
        <div class="card-body">
          <h5>{{$products->name}}</h5>
          <span>{{$products->selling_price}}</span>
          <span class="float-end"> <s>{{$products->original_price}}</s> </span>
        </div>
      </div>

      </div>
      @endforeach 
   
</div>
     
    </div>

  </div>

</div>





<div class="py-3">


  <div class="container">

  <h2>Trending Category </h2>
    <div class="row mb-5">

  <div class="owl-carousel featured-carousel owl-theme">
    


    @foreach($trending as $trendings)
      <div class="item">

      <div class="card">
        <img class="h-2" src="{{asset('assets/uploads/category/'. $trendings->image)}}" alt="Product image">
        <div class="card-body">
          <h5>{{$trendings->name}}</h5>
          <p>

          {{$trendings->description}}
          </p>
          
        </div>
      </div>
      </div>
      @endforeach 
   
</div>
     
    </div>

  </div>

</div>
@endsection

@section('scripts')
 

<script>

$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    
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




