@extends('layout.master')
<title>Checkout</title>
<style>
 section{
    font-family: "Century Gothic";
    font-size: 17px;
    padding: 8px;
    margin-top: 30px;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .info {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  
  .container_checkout {
    background-color: white;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 5px;
  }
  
  .bill-to input {
    width: 100%;
    padding: 12px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  label {
    margin-bottom: 10px;
    display: block;
  }
  
  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }
  
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  
  .btn:hover {
    background-color: #45a049;
  }
  
  a {
    color: #2196F3;
  }
  
  hr {
    border: 1px solid lightgrey;
    margin: 5px 0;
  }
  
  span.price {
    float: right;
    color: grey;
  }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>
@section('content')
    <section>
        <div class="row info">
            <div class="container" style="width: 1200px;">
            <form action="{{ url('/checkout') }}" method="post">
                <div class="col-md-8">
                    <div class="container_checkout">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-50">
                                <div class="bill-to" style="margin:0 15px;">
                                    <h3>Customer Information</h3>
                                        @if(count($errors) >0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li class="text-danger">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <div class="form-one">
                                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                            <input type="text" id="fname" name="fullName" placeholder="Enter Your Name *" value="{{ old('fullName') }}" required>
                                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                            <input type="text" id="email" name="email" placeholder="john@example.com *" value="{{ old('email') }}" required>
                                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                            <input type="text" id="adr" name="address" placeholder="Enter Your Address *" value="{{ old('address') }}" required>
                                            <label for="pnumber"><i class="glyphicon glyphicon-earphone"></i> Phone Number</label>
                                            <input type="text" id="pnumber" name="phoneNumber" placeholder="Enter Your Phone Number *" required>
                                            <p style="color: red; font-size: 14px; margin: 0 0 5px 0;">(*) Your information must be full filled! </p>
                                        </div>
                                    <div class="row">
                                        <div class="form-two">
                                                <textarea name="note" value="{{ old('message') }}"  placeholder="Note: " rows="10" style="width: 708px; margin: 0 15px 20px 15px; padding: 12px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container_checkout">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h3>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>  {{ Cart::count() }}</span></h3>
                        @if(count($cart))
                            @foreach($cart as $item)
                                <p><a href="#">{{$item->name}}</a> <span class="price">{{ number_format($item->subtotal,0,',','.')}} VND</span></p>
                            @endforeach 
                            <br><hr>
                            <p>Total: <span class="price" style="color:black">{{Cart::subtotal()}} VND</span></p>
                            <button type="submit" class="btn btn-default check_out" href="{{ url('checkout')}}">Purchase</button></td>
                        @elseif(session('alert'))
                          <p>You have no items in the shopping cart</p>
                          <div class="alert alert-success" role="alert">
                            {{session('alert')}}
                            <a class="btn btn-default" href="{{ route('trangchu')}}">Back to shop!</a>
                          </div>
                        @else
                            <p>You have no items in the shopping cart</p>
                            <a class="btn btn-default update" href="{{route('trangchu')}}">Back</a>
                        @endif    
                        
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
@endsection