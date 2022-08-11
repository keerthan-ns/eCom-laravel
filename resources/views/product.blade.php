@extends('master')

@section('content')
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color:#ecb3ff">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="item {{$item['id']==1?'active':''}}" >
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}" style="background-color:white">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>  
    <!-- <div class="trending-wrapper">
        <h3>Trending Products</h3>
            @foreach($products as $item)
                <div class="trending-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}">
                        <div class="">
                            <h5>{{$item['name']}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>    
    </div> -->
    <section style="background-color: #eee;padding:10px;align:'center'" >
    <!-- container py-5 -->
        <div class="container py-5" >
            <div class="row" style="align:'justify';left-margin:30px;">
                @foreach($products as $item)
                <a href="detail/{{$item['id']}}" class="text-muted">
                    <div class="col-md-6 col-lg-2 mb-2 mb-lg-0" style="background-color:white;margin:5px;">
                            <div class="card">
                                <img src="{{$item['gallery']}}"
                                    class="card-img-top" alt="Category" style="height:100px;"/>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small">{{$item['category']}}</p>
                                        <?php
                                            $discount = getDiscount($item['category']);
                                        ?>
                                        <p class="small text-danger"><s><i class="fa fa-inr"></i>{{$item['price']}}</s></p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{$item['name']}}</h5>
                                        <h5 class="text-dark mb-0"><i class="fa fa-inr"></i>{{$item['current_price']}}</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="ms-auto text-warning" style="color:#ffcc00;">
                                            @for($i=1;$i<=$item['rating'];$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
            
</div>
{{View::make('footer')}}
@endsection 
<?php
    function getDiscount(string $cat)
    {   
        $low=0;
        $up=0;
        if($cat=="Gaming Monitor") 
        {
            $up=20000;
            $low=10000;
        }
        else if($cat=="Smartwatch") 
        {
            $up=5000;
            $low=3000;
        }
        else if($cat=="Smartphones") 
        {
            $up=25000;
            $low=18000;
        }

        return rand($low,$up);
    }
?>