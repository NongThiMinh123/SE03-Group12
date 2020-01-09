@extends('layout.master')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-3" >
                <div class="list-group" id= "sidebar-menu">
                    <a href="{{route('trangchu')}}" class="list-group-item active" style="z-index: 0; margin-top:30px;"><span class="glyphicon glyphicon-home"></span>&nbsp Trang chủ</a>
                    <a href="#" class="list-group-item">Second item</a>
                    <a href="#" class="list-group-item">Third item</a>
                </div>
            </div>
        <div class="col-sm-9"  >
            <h2 align="center">HAIR</h2>
            @foreach($products as $product)
                <div class="col-sm-4">
                    <div class="single-item">
                        <div class="thumb">
                            <a href="">
                                <img src="{{$product->product_img}}" alt="" height="250px">
                            </a>
                        </div>
                            <div class="infomation">
                                <div>
                                    <p class="name">{{$product->product_name}}</p>
                                </div>
                                <div>
                                    <p> <span class="">{{$product->product_price}}</span></p>
                                </div>
                                <div>
                                    <a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <div>
                                <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach            
        </div>
    </div>
        
@endsection
