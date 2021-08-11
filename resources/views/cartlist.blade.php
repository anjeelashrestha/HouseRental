@extends('master')
@section("content")
<div class="custon-product">
        <div class="col-sm-4">
            <div class="Trending">
        <h3>Result for Products</h3>
          @foreach($products as $item)
      <div class="searched-item">
      <a href="detail/{{$item->id}}">
      <img class="trending-houses" src="{{$item->gallery}}" >
          <div class="">
          <h2>{{$item->name}}</h5>
          <h5>{{$item->description}}</h5>
          </div>
      </a>
      </div>
      @endforeach
      </div>
    </div>
</div>
@endsection