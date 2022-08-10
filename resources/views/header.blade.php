<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
  {
    $total = ProductController::cartItem();
  }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="margin:'0px'">
      <a href="/" class="navbar-brand" style="color:#00ffcc"><span class="glyphicon glyphicon-bishop"></span> Phoenix.in</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home </a></li>
        <li class=""><a href="/myorders">Orders </a></li>

      </ul>
      <form class="navbar-form navbar-left" action="/search">
        <div class="input-group">
          <input type="text" name="query" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li>
          <a href="/cartlist">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJtygPAsEPS5jmPwuXN7d8fachGcvvomsIqEwvPl8xYxdb_vxIAuf6Q3g1WVlYeQDuDTs&usqp=CAU" height='25px' width='25px'>
            Cart({{$total}})</a>
        </li> -->
        <!-- <-----------------------------------> 
        <li>
          <a href="/cartlist" class="btn">
            <span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})
          </a>
        </li>
        <!-- <-----------------------------------> 
        @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#ffffff">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
        @else
          <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>