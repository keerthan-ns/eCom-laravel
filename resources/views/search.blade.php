@extends('master')
@section("content")
<div class="custom-product">
  @if(!$products->isEmpty())
      <div class="col-sm-4">
          <div class="trending-wrapper">
            <h2>Result for Products</h2>
              @foreach($products as $item)
                <div class="searched-item">
                  <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}">
                    <div class="">
                      <h3>{{$item['name']}}</h3>
                      <h5>{{$item['description']}}</h5>
                    </div>
                  </a>
                </div>
              @endforeach
          </div>
      </div>
  @else
    <div class="container-fluid bg-1 text-center" style="background-color:rgba(65, 202, 255, 0.2)">
      <div style="margin:50px">
        <h1 style="margin:25px">Sorry no products found !!</h1>
        <a class="btn btn-success" href="/">Go back to home</a>
      </div>
    </div>
  @endif
</div>
@endsection