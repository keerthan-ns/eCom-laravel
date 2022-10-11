@extends('master')

@section('content')
    @if(session()->has('failed'))
        <div class="error_container" id="faillogin">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-exclamation-circle error_icon" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
            </svg>
            <p class="error_text">{{ session()->get('failed') }}</p>
        </div>
    @endif 
    
    <div class="login_container">
        <p class="login_title">Log in</p>
        <form method="POST" action="/login">
            @csrf
            <div class="e_textbox">
                <label for="email" class="label">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address">
            </div>
            <div class="p_textbox">
                <label for="password" class="label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter the password">
                <img src="{{url('/right-icon.svg')}}" class="svg" onclick="togglePassword()"/>
            </div>
            <a href="/register" class="f_text">Don't have an account?</a>
            <button type="submit" class="button">Login</button>
        </form>
    </div>
    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } 
            else {
                x.type = "password";
            }
        }
        setTimeout(function() {
            $('#faillogin').hide();
        }, 3000);
    </script>
    <style>
        /* logo */
        .image {
        position: absolute;
        top: 24px;
        left: 32px;
        width: 166px;
        height: 52px;
        border-radius: 4px;
        }
        /* loginForm */
        .login_container {
            position: absolute;
            top: 190px;
            left: 540px;
            width: 471px;
            height: 520px;
            background: #FFFFFFFF;
            border-radius: 6px;
            box-shadow: 0px 8px 17px #e0ebeb, 0px 0px 2px #e0ebeb;
        }
        /* errorMessage */
        .error_container {
        position: absolute;
        top: 148px;
        left: 650px;
        width: 261px;
        height: 24px;
        background: #FBBDBFFF;
        border-radius: 4px;
        }
        /* Warning circle 1 */
        .error_container .error_icon {
        position: absolute;
        top: 2px;
        left: 12px;
        width: 20px;
        height: 20px;
        fill: #D20C13;
        opacity: 1;
        }
        /* error text */
        .error_text {
        position: absolute;
        top: 3px;
        left: 50px;
        width: 191px;
        height: 21px;
        font-family: Inter;
        font-size: 12px;
        line-height: 20px;
        color: #D20C13FF;
        }
        /* title */
        .login_title {
        position: absolute;
        top: 56px;
        left: 182px;
        font-family: Epilogue;
        font-size: 32px;
        line-height: 48px;
        color: #171A1FFF;
        }
        /* emailField */
        .e_textbox {
        position: absolute;
        top: 136px;
        left: 56px;
        opacity: 1;
        }
        .e_textbox input {
        width: 359px;
        height: 49px;
        padding-left: 12px;
        padding-right: 12px;
        font-family: Inter;
        font-size: 14px;
        background: #F3F4F6FF;
        border-radius: 4px;
        border-width: 0px;
        outline: none;
        }
        .e_textbox .label {
        font-size: 14px;
        line-height: 22px;
        }
        /* hover */
        .e_textbox input:hover {
        /* color: #BCC1CAFF; */
        color: black;
        background: #F3F4F6FF;
        }
        /* focused */
        .e_textbox input:focused {
        /* color: #BCC1CAFF; */
        color: black;
        background: #FFFFFFFF;
        }
        /* disabled */
        .e_textbox input:disabled {
        /* color: #BCC1CAFF; */
        color: black;
        background: #F3F4F6FF;
        }
        .e_textbox :disabled + .icon, .textbox :disabled + .icon + .icon {
        fill: #171A1FFF;
        }
        /**email field end */
        /* passwordField */
        .p_textbox {
        position: absolute;
        top: 212px;
        left: 56px;
        opacity: 1;
        }
        .p_textbox input {
        width: 359px;
        height: 49px;
        padding-left: 12px;
        padding-right: 34px;
        font-family: Inter;
        font-size: 14px;
        background: #F3F4F6FF;
        border-radius: 4px;
        border-width: 0px;
        outline: none;
        }
        .p_textbox .svg {
        position: absolute;
        top: 40px;
        right: 25px;
        width: 16px;
        height: 16px;
        fill: #171A1F;
        }
        .p_textbox .label {
        font-size: 14px;
        line-height: 22px;
        }
        /* hover */
        .p_textbox input:hover {
        /* color: #BCC1CAFF; */
        color: black;
        background: #F3F4F6FF;
        }
        /* focused */
        .p_textbox input:focused {
        /* color: #BCC1CAFF; */
        color: black;
        background: #FFFFFFFF;
        }
        /* disabled */
        .p_textbox input:disabled {
        /* color: #BCC1CAFF; */
        color: black;
        background: #F3F4F6FF;
        }
        .p_textbox :disabled + .icon, .textbox :disabled + .icon + .icon {
        fill: #171A1FFF;
        }
        /**Passwordfield end */
        /* Text forgot password link */
        .f_text {
        position: absolute;
        top: 288px;
        left: 285px;
        font-family: Inter;
        font-size: 14px;
        line-height: 22px;
        color: #1091F4FF;
        }
        /* loginButton */
        .button {
        position: absolute;
        top: 322px;
        left: 56px;
        width: 359px;
        height: 44px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Inter;
        font-size: 16px;
        line-height: 26px;
        color: #FFFFFFFF;
        background: #00BDD6FF;
        opacity: 1;
        border: none;
        border-radius: 4px;
        box-shadow: 0px 2px 15px #00bdd6, 0px 0px 2px #00bdd6;
        }
        /* Hover */
        .button:hover {
        color: #FFFFFFFF;
        background: #00A9C0FF;
        }
        /* Pressed */
        .button:hover:active {
        color: #FFFFFFFF;
        background: #0095A9FF;
        }
        /* Disabled */
        .button:disabled {
        opacity: 0.4;
        }
        /**login button end */
    </style>
@endsection 
