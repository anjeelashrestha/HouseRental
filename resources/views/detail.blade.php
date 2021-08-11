@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$products['gallery']}}" alt="hfJFJKAJ">
        </div>
        <div class="col-sm-8">
            <a href="/">Back To Previous</a>
            <h3>{{$products['name']}}</h3>
            <h4>Price : {{$products['price']}}</h4>
            <h5>Details : {{$products['description']}}</h5>
            <h5>Location : {{$products['location']}}</h5>
            <br></br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$products['id']}}>
            <button class="btn btn-primary">ADD to my list</button>
            </form>
            <br></br>
            <button class="btn btn-success">Rent Now</button>
            <br></br>
        </div>  
    </div>
</div>
@endsection