@extends('layout.master')
<title>Giỏ Hàng</title>
@section('content')
<section id="cart_items">
    <div class="container cart_item" style="width:1200px;">
        <div class="col-md-12">
            <h3 style="margin: 30px 0;">My Shopping Cart</h3>
            <div class="table-responsive cart_info table-striped">
                <form action="#" method='get'>
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
                        <tr>
                            <td class="cart_description">
                                <p><a href="#"></a></p>
                            </td>
                            <td class="cart_price">
                                <p> VND</p>
                            </td>
                            <td class="cart_quantity">
                                <a href='#'><button type="button" class="btn btn-default">+</button></a>
                                    <input type="text" value="#" style="width: 35px; text-align: center;"> 
                                <a href='#'><button type="button" class="btn btn-default">-</button></a>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"> VND</p>
                            </td>
                            <td class="cart_delete">
                                <form action="" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                    <a class="cart_quantity_delete" href='{{url("gio-hang/remove",$product->rowId)}}'><i class="fa fa-times"></i></a>
                                </form>
                            </td>
                        </tr>
                    <!-- <p>You have no items in the shopping cart</p> -->
                    </tbody>
                    <tfoot style="border-top: 1px solid #f8f8f8; ">
                        
                    </tfoot>
                </table>
                <h4 style="margin:15px 0 15px 0; text-align:right;">Total: VND</h4>
               
                <div class="row" style="margin:20px 0 30px;">
                    <div class='button'>
                        <a href="#"><button type="button" class="btn btn-default" style="width:150px;float:right;">Checkout</button></a></p>
                    </div>
                </div>    
            </div>
        </div>    
    </div>
</section> <!--/#cart_items-->
@endsection