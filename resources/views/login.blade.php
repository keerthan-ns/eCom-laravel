@extends('master')

@section('content')
<div class="container custom-login" style="width: 30%;background-color:#ccccff;">
    <h3 align='center'>Login Now</h3>
    <div class="row" style="">
        <div class=""  style="width:100%;padding:10%;">
            <form action="/login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection 
