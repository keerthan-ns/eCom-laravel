@extends('master')
@section("content")
<div class="custom-product">
  @if(!$orders->isEmpty())
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h3>My Orders </h3>
        @foreach($orders as $item)
          <div class=" row searched-item cart-list-devider">
            <div class="col-sm-3">
              <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
              </a>
            </div>
            <div class="col-sm-4">
              <div class="">
                <h2>{{$item->name}}</h2>
                <h5>Delivery Status : {{$item->status}}</h5>
                <h5>Address : {{$item->address}}</h5>
                <h5>Payment Status : {{$item->payment_status}}</h5>
                <h5>Payment Method : {{$item->payment_method}}</h5>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <div class="container-fluid bg-1 text-center" style="background-color:rgba(65, 202, 255, 0.2)">
      <div style="margin:50px">
        <h1 style="margin:25px">You've not yet placed any order !!</h1>
        <a class="btn btn-success" href="/">Explore products</a>
      </div>
    </div>
  @endif
</div>
@endsection 