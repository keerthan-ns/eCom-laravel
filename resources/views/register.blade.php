@extends('master')

@section('content')
<div class="container custom-login"  style="width: 30%;background-color:#ccccff;margin-bottom:100px;">
    <h3 align='center'>Register Now</h3>
    <div class="row">
        <div class=""  style="width:100%;padding:10%;">
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputforusername">Username</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter a username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
                </div>
                
                
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection 
