@extends('master')
@section("content")
<div class="custom-product">
  @if(!$products->isEmpty())
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Welcome to your cart</h2>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>{{$item->name}}</h3>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
     </div>
  @else
    <div class="container-fluid bg-1 text-center" style="background-color:rgba(65, 202, 255, 0.2)">
      <div style="margin:50px">
        <h1 style="margin:25px">There's nothing in the cart !!</h1>
        <a class="btn btn-success" href="/">Explore products</a>
      </div>
    </div>
  @endif
</div>
@endsection 