@extends('ui-panel.master')
@section('title','product ui category')
@section('content')

<!-- cart  -->

<div class="py-5">


  <div class="container">
    <div class="row">

  <div class="owl-carousel feature-carousel  owl-theme">
    


 @foreach($category as $categorys)
      <div class="item">

      <a href="{{url('/category/'. $categorys->slug)}}">

    

      <div class="card">
        <img class="h-2" src="{{asset('assets/uploads/category/'. $categorys->image)}}" alt="Product image">
        <div class="card-body">
          <h5>{{$categorys->name}}</h5>
          <small>{{$categorys->description}}</small>
          
        </div>
      </div>

      </a>
      </div>
      @endforeach 


   
   
</div>
     
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




