@extends('master')
@section("content")
<div class="custom-product">
  @if(!$products->isEmpty())
    <div class="col-md-9">
      <div class="trending-wrapper">
        <h2>Result for Products</h2>
        @foreach($products as $item)
          <div class="row p-2 bg-white border rounded mt-2" style="background-color:#e0ebeb;margin:10px;padding:20px;">
            <div class="col-md-3 mt-1">
              <img class="img-fluid img-responsive rounded product-image" style="height: 110px;width: 90px;" src="{{$item['gallery']}}">
            </div>
            <div class="col-md-6 mt-1">
              <h4>{{$item['name']}}</h4>
                <div class="d-flex flex-row">
                  <span>{{$item['description']}}</span>
                </div>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
              <div class="d-flex flex-column mt-4">
                <a href="detail/{{$item['id']}}" class="btn btn-info" >View</a>
              </div>
            </div>
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