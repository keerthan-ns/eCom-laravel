@extends('master')

@section('content')
<div class="container">
    <div class="row" style="display: inline-block; border: solid 1px #808080; padding: 15px">
        <div class="col-md-6">
            <img class="img-responsive" alt="eCommerce Detail" src="{{$product['gallery']}}" style="height:539px;width:439px;" />
            <br />
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <img class="img-responsive" alt="eCommerce Detail" src="{{$product['gallery']}}" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <img class="img-responsive" alt="eCommerce Detail" src="{{$product['gallery']}}" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <img class="img-responsive" alt="eCommerce Detail" src="{{$product['gallery']}}" />
                </div>
                <div class="col-md-3 col-sm-3 col-6">
                    <img class="img-responsive" alt="eCommerce Detail" src="{{$product['gallery']}}" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>{{$product['name']}}</h2>
            <p style="color:#ffcc00;">
                @for($i=1;$i<=$product['rating'];$i++)
                    <i class="fa fa-star"></i>
                @endfor
            </p>
            <br />
            <p class="text-justify">{{$product['description']}}</p>
            <br>
            <h4 class="text-right">Current price: <span style="color: #197BB5; font-size: 35px;">
                <i class="fa fa-inr"></i>{{$product['current_price']}}</span>
            </h4>
            <p class="text-right small text-danger">Actual price is : <s><i class="fa fa-inr"></i>{{$product['price']}}</s></p>
            <br />
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">                           
                <h4>Quantity:
                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus">
                        <input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                        <input type="button" value="+" class="plus">
                    </div>
                </h4>
                <br />
                <br />
                <button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
            </form>
        </div>
    </div>
</div>
<style>
    .quantity {
    display: inline-block; }

    .quantity .input-text.qty {
    width: 35px;
    height: 39px;
    padding: 0 5px;
    text-align: center;
    background-color: transparent;
    border: 1px solid #efefef;
    }

    .quantity.buttons_added {
    text-align: left;
    position: relative;
    white-space: nowrap;
    vertical-align: top; }

    .quantity.buttons_added input {
    display: inline-block;
    margin: 0;
    vertical-align: top;
    box-shadow: none;
    }

    .quantity.buttons_added .minus,
    .quantity.buttons_added .plus {
    padding: 7px 10px 8px;
    height: 41px;
    background-color: #ffffff;
    border: 1px solid #efefef;
    cursor:pointer;}

    .quantity.buttons_added .minus {
    border-right: 0; }

    .quantity.buttons_added .plus {
    border-left: 0; }

    .quantity.buttons_added .minus:hover,
    .quantity.buttons_added .plus:hover {
    background: #eeeeee; }

    .quantity input::-webkit-outer-spin-button,
    .quantity input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    margin: 0; }
    
    .quantity.buttons_added .minus:focus,
    .quantity.buttons_added .plus:focus {
    outline: none; }
</style>
<script>
    function wcqib_refresh_quantity_increments() {
        jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
            var c = jQuery(b);
            c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
        })
    }
    String.prototype.getDecimals || (String.prototype.getDecimals = function() {
        var a = this,
            b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
        return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
    }), jQuery(document).ready(function() {
        wcqib_refresh_quantity_increments()
    }), jQuery(document).on("updated_wc_div", function() {
        wcqib_refresh_quantity_increments()
    }), jQuery(document).on("click", ".plus, .minus", function() {
        var a = jQuery(this).closest(".quantity").find(".qty"),
            b = parseFloat(a.val()),
            c = parseFloat(a.attr("max")),
            d = parseFloat(a.attr("min")),
            e = a.attr("step");
        b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
    });
</script>
@endsection 
