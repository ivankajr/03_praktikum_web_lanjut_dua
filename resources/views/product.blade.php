@extends('layouts.app')

@section('content')
<!-- Product -->
<section class="product section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">
        <h1 class="mb-4" data-aos="fade-up">Our Products</h1>
      </div>

      @foreach($product as $product)
      <div class="col-xl-4 col-sm-12 mt-5">
        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
          <!-- <img src="{{asset($product->image)}}" class="img-fluid" alt="project image">
          <div class="project-info card-info product-info"> -->
            <h3 class="text-truncate">
              <span>{{$product->nameProduct}}</span>
            </h3>
          <!-- </div> -->
        </div>
      </div>
      @endforeach

    </div>
</section>
@endsection