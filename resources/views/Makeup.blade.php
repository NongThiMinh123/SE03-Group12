@extends('layout.master')
<title>Makeup</title>
<style>
        #content{
            font-family:"Segoe UI";
        }
        .single-item img {
            width: 320px;
            height: 320px;
            object-fit: cover !important;
        }
        .ribbon-wrapper {
            width: 85px;
            height: 88px;
            overflow: hidden;
            position: absolute;
            top: -3px;
            right: -3px;
        }

        .ribbon {
            font: bold 15px Sans-Serif;
            color: #DDDDDD;
            text-align: center;
            text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
            -webkit-transform: rotate(45deg);
            -moz-transform:    rotate(45deg);
            -ms-transform:     rotate(45deg);
            -o-transform:      rotate(45deg);
            position: relative;
            padding: 7px 0;
            left: -5px;
            top: 15px;
            width: 120px;
            background-color: #DDDDDD;
            color: #4F4F4F;
            -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
            -moz-box-shadow:    0px 0px 3px rgba(0,0,0,0.3);
            box-shadow:         0px 0px 3px rgba(0,0,0,0.3);
        }

        .ribbon:before, .ribbon:after {
            content: "";
            border-top:   5px solid #DDDDDD;   
            border-left:  5px solid #DDDDDD;
            border-right: 5px solid #DDDDDD;
            position:absolute;
            bottom: -3px;
        }

        .ribbon:before {
            left: 0;
        }
        .ribbon:after {
            right: 0;
        }
    </style>
@section('content')
<br><br>      
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h2>Son</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($lips as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->product_name}}</p>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$lips->links()}}</div>
                            </div> 
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Son dưỡng - Tẩy da chết</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($dms as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                    <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$dms->links()}}</div>
                            </div>  
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Kem nền - Kem lót - Kem che khuyết điểm</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($foundations as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                    <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                    <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$foundations->links()}}</div>
                            </div>
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Phấn phủ - Phấn nén</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($powders as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                    <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$powders->links()}}</div>
                            </div>
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Blusher</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($blushers as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$blushers->links()}}</div>
                            </div>
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Lông mày</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($eyes as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                    <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$eyes->links()}}</div>
                            </div>
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Mascara</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($mass as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                    <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                    <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$mass->links()}}</div>
                            </div>
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Phấn mắt</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($eps as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                    <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                    <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                        <div class="ribbon-wrapper">
                                                            <div class="ribbon">20% OFF</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <a href="{{route('detail',$product->id)}}"><p class="single-item-title">{{$product->product_name}}</p></a>
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    </div>
                                                @endif
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$eps->links()}}</div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
		</div>
        <br>
        
@endsection
