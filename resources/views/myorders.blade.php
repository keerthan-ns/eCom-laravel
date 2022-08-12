@extends('master')
@section("content")
  @if(!$orders->isEmpty())
    <div class="container mt-5">
      <div class="d-flex justify-content-center row">
        <div class="col-md-10">
          <div class="rounded">
            <div class="table-responsive table-borderless">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">
                      Product Image
                    </th>
                    <th>Order #</th>
                    <th>Product name</th>
                    <th>Ordered date</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Payment</th>
                    <th>Payment Method</th>
                  </tr>
                </thead>
                <tbody class="table-body">
                  @foreach($orders as $item)
                    <tr class="cell-1">
                      <td class="text-center">
                        <a href="detail/{{$item->id}}">
                          <img style="height:80px;" src="{{$item->gallery}}">
                        </a>
                      </td>
                      <td>#SO-{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->ordered_date}}</td>
                      <td>
                        <?php
                          $color="#94b8b8";
                          if($item->status == "Delivered")
                            $color="#33ff33";
                          else if($item->status == "Dispatched")
                            $color="#1aa3ff";
                        ?>
                        <span style="background-color:{{$color}};border-radius:3px;padding:2px;color:white;">{{$item->status}}</span>
                      </td>
                      <td>{{$item->address}}</td>
                      <td>
                        <?php
                          $color="#ff0000";
                          if($item->payment_status == "Done")
                            $color="#33ff33";
                        ?>
                        <span style="background-color:{{$color}};border-radius:3px;padding:2px;color:white;">{{$item->payment_status}}</span>
                      </td>
                      <td>{{$item->payment_method}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Assistant');
      body {
        background: #eee;
        font-family: Assistant, sans-serif;
      }

      .cell-1 {
        border-collapse: separate;
        border-spacing: 0 4em;
        background: #fff;
        border-bottom: 5px solid transparent;
        /*background-color: gold;*/
        background-clip: padding-box;
      }

      thead {
        background: #dddcdc;
      }
    </style>
  @else
    <div class="custom-product">
      <div class="container-fluid bg-1 text-center" style="background-color:rgba(65, 202, 255, 0.2)">
        <div style="margin:50px">
          <h1 style="margin:25px">You've not yet placed any order !!</h1>
          <a class="btn btn-success" href="/">Explore products</a>
        </div>
      </div>
    </div>
  @endif
@endsection 