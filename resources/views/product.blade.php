@extends('master')
@section("content")
<div class="custom-product">
	

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">l
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
       @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block slider-text">
          <h5>{{$item['name']}}</h5>
          <p>{{$item['discription']}}</p>
        </div>
      </div>
     @endforeach
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="trending-wrapper">
    <h3>Trending Prooducts</h3>
    @foreach ($products as $item)
     <div class="trending-item">
        <img class="trending-img" src="{{$item['gallery']}}" class="" alt="...">
        <div class="">
          <h5>{{$item['name']}}</h5>
        
        </div>
      </div>
    @endforeach
  </div>


</div>
@endsection