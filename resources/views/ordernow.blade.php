@extends('master')
@section("content")
<!-- <div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
              <td><i class="fa fa-inr"></i> {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td><i class="fa fa-inr"></i> 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td><i class="fa fa-inr"></i> 75</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td><i class="fa fa-inr"></i> {{$total+75}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Pay on Delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
              <a href="/cartlist" class="btn btn-warning" style="margin-top:10px ">Cancel</a>
          </div>
     </div>
</div> -->
<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h3>Order Summary</h3>
          <div class='line'></div>
            <div style="overflow-y:scroll; height:400px;">
              @foreach($products as $item)
                <table class='order-table'>
                  <tbody>
                    <tr>
                      <td><img src='{{$item->gallery}}' class='full-width'></img>
                      </td>
                      <td>
                        <br> <span class='thin'>{{$item->name}}</span><br>
                        <span class='thin small'> Quantity : {{$item->quantity}}<br><br></span>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class='price'><i class="fa fa-inr"></i>{{$item->current_price*$item->quantity}}</div>
                      </td>
                    </tr>
                  </tbody>

                </table>
                <div class='line'></div>
              @endforeach
            </div>   

        
        <div class='total'>
          <span style='float:left;'>
            <div class='thin dense'>Total(Incl. tax)</div>
            <div class='thin dense'>Delivery</div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'><i class="fa fa-inr"></i> {{$total}}</div>
            <div class='thin dense'><i class="fa fa-inr"></i> 75</div>
            <i class="fa fa-inr"></i>{{$total+75}}
          </span>
        </div>
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <form action="/orderplace" method="POST" >
              @csrf
              <div class="form-group">
                  <label for="pwd"><h4>Select your payment method:</h4></label> <br> <br>
                  <input type="radio" value="Net Banking" name="payment"> <span>Net Banking</span> <br> <br>
                  <input type="radio" value="Credit/Debit card" name="payment"> <span>Credit/Debit card</span> <br><br>
                  <input type="radio" value="Pay on Delivery" name="payment"> <span>Pay on Delivery</span> <br> <br>
              </div>
              <h4>Address</h4>
              <div class="form-group">
                <textarea name="address" placeholder="Enter your address" class="form-control" style="resize:none;"></textarea>
              </div>
              <button type="submit" class='pay-btn'>Order Now</button>
            </form>
            <a href="/cartlist" class="btn btn-warning" style="margin-top:10px ">Cancel</a>
          </div>
        </div>
      </div>
</div>
<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
  body,html {
    height:100%;
    margin:0;
    font-family:lato;
  }
  div::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}

  h2 {
    margin-bottom:0px;
    margin-top:25px;
    text-align:center;
    font-weight:200;
    font-size:19px;
    font-size:1.2rem;
    
  }
  .container {
    height:100%;
    -webkit-box-pack:center;
    -webkit-justify-content:center;
        -ms-flex-pack:center;
            justify-content:center;
    -webkit-box-align:center;
    -webkit-align-items:center;
        -ms-flex-align:center;
            align-items:center;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    background:-webkit-linear-gradient(#c5e5e5, #ccddf9);
    background:linear-gradient(#c9e5e9,#ccddf9);
  }
  .dropdown-select.visible {
    display:block;
  }
  .dropdown {
    position:relative;
  }
  ul {
    margin:0;
    padding:0;
  }
  ul li {
    list-style:none;
    padding-left:10px;
    cursor:pointer;
  }
  ul li:hover {
    background:rgba(255,255,255,0.1);
  }
  .dropdown-select {
    position:absolute;
    background:#77aaee;
    text-align:left;
    box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
    border-bottom-right-radius:5px;
    border-bottom-left-radius:5px;
    width:90%;
    left:2px;
    line-height:2em;
    margin-top:2px;
    box-sizing:border-box;
  }
  .thin {
    font-weight:400;
  }
  .small {
    font-size:12px;
    font-size:.8rem;
  }
  .half-input-table {
    border-collapse:collapse;
    width:100%;
  }
  .half-input-table td:first-of-type {
    border-right:10px solid #4488dd;
    width:50%;
  }
  .window {
    height:540px;
    width:800px;
    background:#fff;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
    border-radius:30px;
    z-index:10;
  }
  .order-info {
    height:100%;
    width:50%;
    padding-left:25px;
    padding-right:25px;
    box-sizing:border-box;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack:center;
    -webkit-justify-content:center;
        -ms-flex-pack:center;
            justify-content:center;
    position:relative;
  }
  .price {
    bottom:0px;
    position:absolute;
    right:0px;
    color:#4488dd;
  }
  .order-table td:first-of-type {
    width:25%;
  }
  .order-table {
      position:relative;
  }
  .line {
    height:1px;
    width:100%;
    margin-top:10px;
    margin-bottom:10px;
    background:#ddd;
  }
  .order-table td:last-of-type {
    vertical-align:top;
    padding-left:25px;
  }
  .order-info-content {
    table-layout:fixed;

  }

  .full-width {
    width:100%;
  }
  .pay-btn {
    border:none;
    background:#66ff66;
    line-height:2em;
    border-radius:10px;
    font-size:19px;
    font-size:1.6rem;
    color:#fff;
    cursor:pointer;
    position:absolute;
    bottom:25px;
    width:calc(100% - 50px);
    -webkit-transition:all .2s ease;
            transition:all .2s ease;
  }
  .pay-btn:hover {
    background:#22a877;
      color:#eee;
    -webkit-transition:all .2s ease;
            transition:all .2s ease;
  }

  .total {
    margin-top:25px;
    font-size:20px;
    /* font-size:1.3rem; */
    position:absolute;
    bottom:30px;
    right:27px;
    left:35px;
  }
  .dense {
    line-height:1.2em;
    font-size:16px;
    font-size:1rem;
  }
  .input-field {
    background:rgba(255,255,255,0.1);
    margin-bottom:10px;
    margin-top:3px;
    line-height:1.5em;
    font-size:20px;
    font-size:1.3rem;
    border:none;
    padding:5px 10px 5px 10px;
    color:#fff;
    box-sizing:border-box;
    width:100%;
    margin-left:auto;
    margin-right:auto;
  }
  .credit-info {
    background:#4488dd;
    height:100%;
    width:50%;
    color:#eee;
    -webkit-box-pack:center;
    -webkit-justify-content:center;
        -ms-flex-pack:center;
            justify-content:center;
    font-size:14px;
    font-size:.9rem;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    box-sizing:border-box;
    padding-left:25px;
    padding-right:25px;
    border-top-right-radius:30px;
    border-bottom-right-radius:30px;
    position:relative;
  }
  .dropdown-btn {
    background:rgba(255,255,255,0.1);
    width:100%;
    border-radius:5px;
    text-align:center;
    line-height:1.5em;
    cursor:pointer;
    position:relative;
    -webkit-transition:background .2s ease;
            transition:background .2s ease;
  }
  .dropdown-btn:after {
    content: '\25BE';
    right:8px;
    position:absolute;
  }
  .dropdown-btn:hover {
    background:rgba(255,255,255,0.2);
    -webkit-transition:background .2s ease;
            transition:background .2s ease;
  }
  .dropdown-select {
    display:none;
  }
  .credit-card-image {
    display:block;
    max-height:80px;
    margin-left:auto;
    margin-right:auto;
    margin-top:35px;
    margin-bottom:15px;
  }
  .credit-info-content {
    margin-top:25px;
    -webkit-flex-flow:column;
        -ms-flex-flow:column;
            flex-flow:column;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    width:100%;
  }
  @media (max-width: 600px) {
    .window {
      width: 100%;
      height: 100%;
      display:block;
      border-radius:0px;
    }
    .order-info {
      width:100%;
      height:auto;
      padding-bottom:100px;
      border-radius:0px;
    }
    .credit-info {
      width:100%;
      height:auto;
      padding-bottom:100px;
      border-radius:0px;
    }
    .pay-btn {
      border-radius:0px;
    }
  }
</style>
<script>
  var cardDrop = document.getElementById('card-dropdown');
  var activeDropdown;
  cardDrop.addEventListener('click',function(){
    var node;
    for (var i = 0; i < this.childNodes.length-1; i++)
      node = this.childNodes[i];
      if (node.className === 'dropdown-select') {
        node.classList.add('visible');
        activeDropdown = node; 
      };
  })

  window.onclick = function(e) {
    console.log(e.target.tagName)
    console.log('dropdown');
    console.log(activeDropdown)
    if (e.target.tagName === 'LI' && activeDropdown){
      if (e.target.innerHTML === 'Master Card') {
        document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
            activeDropdown.classList.remove('visible');
        activeDropdown = null;
        e.target.innerHTML = document.getElementById('current-card').innerHTML;
        document.getElementById('current-card').innerHTML = 'Master Card';
      }
      else if (e.target.innerHTML === 'American Express') {
          document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
            activeDropdown.classList.remove('visible');
        activeDropdown = null;
        e.target.innerHTML = document.getElementById('current-card').innerHTML;
        document.getElementById('current-card').innerHTML = 'American Express';      
      }
      else if (e.target.innerHTML === 'Visa') {
          document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
            activeDropdown.classList.remove('visible');
        activeDropdown = null;
        e.target.innerHTML = document.getElementById('current-card').innerHTML;
        document.getElementById('current-card').innerHTML = 'Visa';
      }
    }
    else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
      activeDropdown.classList.remove('visible');
      activeDropdown = null;
    }
  }
</script>
@endsection 