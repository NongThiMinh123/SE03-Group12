@extends('layout.master')
<title>Giỏ Hàng</title>
@section('content')
<section id="cart_items">
    <div class="container cart_item" style="width:1200px;">
        <div class="col-md-12">
            <h3 style="margin: 30px 0;">My Shopping Cart</h3>
            <div class="table-responsive cart_info table-striped">
                <form action="{{route('gio-hang')}}" method='get'>
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="description"><h4>Product</h4></td>
                            <td class="price"><h4>Price</h4></td>
                            <td class="quantity"><h4 style="margin-left:15px;">Quantity</h4></td>
                            <td class="total"><h4>Total</h4></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- cart -->
                        @if(count($products))
                        @foreach($products as $product)
                        <tr>
                            <td class="cart_description">
                                <p><a href="{{route('detail',$product->id)}}">{{$product->name}}</p>
                            </td>
                            <td class="cart_price">
                                <p>{{ number_format($product->price,0,',','.') }} VND</p>
                            </td>
                            <td class="cart_quantity">
                                <a href='{{url("gio-hang?id=$product->id&increment=1")}}'><button type="button" class="btn btn-default">+</button></a>
                                    <input type="text" value="{{ $product->qty }}" style="width: 35px; text-align: center;"> 
                                <a href='{{url("gio-hang?id=$product->id&decrease=1")}}'><button type="button" class="btn btn-default">-</button></a>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{ number_format($product->subtotal,0,',','.')}} VND</p>
                            </td>
                            <td class="cart_delete">
                                <form action="route{{'remove',$product->rowId}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                    <a class="cart_quantity_delete" href='{{url("gio-hang/remove",$product->rowId)}}'><i class="fa fa-times"></i></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    <!-- <p>You have no items in the shopping cart</p> -->
                    </tbody>
                    <tfoot style="border-top: 1px solid #f8f8f8; ">
                        
                    </tfoot>
                </table>
                <h4 style="margin:15px 0 15px 0; text-align:right;">Total: VND</h4>
               
                <div class="row" style="margin:20px 0 30px;">
                    <div class='button'>
                        <a href="{{route('checkout')}}"><button type="button" class="btn btn-default" style="width:150px;float:right;">Checkout</button></a></p>
                    </div>
                </div>    
            </div>
        </div>    
    </div>
</section> <!--/#cart_items-->
@endsection