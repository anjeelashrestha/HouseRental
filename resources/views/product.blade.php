@extends('master')
@section("content")

  
<div>
    <div class="Trending">
        <h3>Trending Houses</h3>
        <div class="">
          @foreach($products as $item)
      <div class="trending-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-houses" src="{{$item['gallery']}}" >
          <div class="">
          <h3>{{$item['name']}}</h3>
          </div>
      </a>
      </div>
      @endforeach
      </div>
    </div>
</div>

<div class="custom-product>"
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="item {{$item['$id']==0? 'active' :'' }}">
    <a href="detail/{{$item['id']}}">
    <img class="slider-img" src="{{$item['gallery']}}" >
     <div class="carousel-caption">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
    </a>
    </div>
    @endforeach
  </div>


@endsection