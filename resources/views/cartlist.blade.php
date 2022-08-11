@extends('master')
@section('content')
<!-- <div class="custom-product"> -->
    @if(!$products->isEmpty())
        <!-- <div class="col-sm-10">
            <div class="trending-wrapper">
              <h2>Welcome to your cart 
                <a class="btn btn-success" href="ordernow">Proceed to checkout</a></h2>
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
        </div> -->
        <style>
          body{background:#eee}
          .ratings i{font-size: 16px;color: red}
          .strike-text{color: red;text-decoration: line-through}
          .product-image{width: 100%}
          .dot{height: 7px;width: 7px;margin-left: 6px;margin-right: 6px;margin-top: 3px;background-color: blue;border-radius: 50%;display: inline-block}
          .spec-1{color: #938787;font-size: 15px}h5{font-weight: 400}
          .para{font-size: 16px}
        </style>
        <div class="container mt-5 mb-5">
          <div class="d-flex justify-content-center row">
              <div class="col-md-10">
              <h2>Welcome to your cart 
                <a class="btn btn-success" href="ordernow">Proceed to checkout</a></h2>
                  @foreach($products as $item)
                      <div class="row p-2 bg-white border rounded mt-2" style="background-color:white;margin:10px;padding:20px;">
                          <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" style="height: 100px;width: 100px;" src="{{$item->gallery}}"></div>
                          <div class="col-md-6 mt-1">
                              <h4>{{$item->name}}</h4>
                              <div class="d-flex flex-row">
                                  <span>Quantity :</span>
                                  <span name="quantity_field">{{$item->quantity}}</span>
                              </div>
                              <?php $statm = $statp='pointer-events: clickable;';
                              if($item->quantity<=1)
                                $statm = 'pointer-events: none;';
                              if($item->quantity>=5)
                                $statp = 'pointer-events: none;';
                              ?>
                                <a href="/decrementQuantity/{{$item->cart_id}}" class="btn btn-info" style="{{$statm}}">
                                  <span class="glyphicon glyphicon-minus"></span>
                                </a>
                                <a href="/incrementQuantity/{{$item->cart_id}}" class="btn btn-info" style="{{$statp}}">
                                  <span class="glyphicon glyphicon-plus"></span>
                                </a>
                          </div>
                          <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                              <div class="d-flex flex-row align-items-center">
                                  <h4 class="mr-1"><i class="fa fa-inr"></i>{{$item->current_price*$item->quantity}}</h4>
                                  <h6 class="mr-1"><i class="fa fa-inr"></i>{{$item->current_price}}/item</h6>
                              </div>
                              <div class="d-flex flex-column mt-4">
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
        </div>
    @else
        <div class="custom-product"><!--actually this wasn't here-->
          <div class="container-fluid bg-1 text-center" style="background-color:rgba(65, 202, 255, 0.2)">
            <div style="margin:50px">
              <h1 style="margin:25px">There's nothing in the cart !!</h1>
              <a class="btn btn-success" href="/">Explore products</a>
            </div>
          </div>
        </div>
    @endif
<!-- </div> -->
@endsection 
    