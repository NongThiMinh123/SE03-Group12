@extends('layout.master')
        <title>Bath & Body</title>
    <style>
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
        .lentop {
            display:none; 
            bottom: 40%; 
            right: 10px; 
            cursor: pointer;  
            position: fixed; 
            z-index: 1000;
        }
        .lentop div {
            background:#DDDDDD; 
            border:2px solid #fff; 
            border-radius:45px; 
            padding:11px 12.5px; 
            box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.3)
        }
        .lentop img {
            width:16px; 
            height:16px;
        }
    </style>
@section('content')
    <body>
        <br><br>      
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h2>Sữa tắm</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($sts as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('bath_body',$product->type)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->product_name}}</p>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <img src="{{$product->product_img}}" alt="#" class=" img-responsive">
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
                                <div align="right">{{$sts->links()}}</div>
                            </div> 
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Sữa dưỡng thể</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($dts as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('bath_body',$product->type)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->product_name}}</p>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <img src="{{$product->product_img}}" alt="#" class=" img-responsive">
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
                                <div align="right">{{$dts->links()}}</div>
                            </div>  
                            <br><br>

                            <div class="beta-products-list">
                                <h2>Bath bomb</h2>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($bbs as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                @if($product->sale==0)
                                                    <div class="single-item-header">
                                                        <a href="{{route('bath_body',$product->type)}}"><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->product_name}}</p>
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    </div>
                                                @else
                                                    <div class="img">                                                   
                                                        <img src="{{$product->product_img}}" alt="#" class=" img-responsive">
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
                                <div align="right">{{$bbs->links()}}</div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
		</div>
        <br>
        <div class='lentop'>
            <div>
                <img src='https://1.bp.blogspot.com/-k6sikOdzFXQ/VwqCKDosmEI/AAAAAAAAKxE/nLxLhkTIO6o3iE5ZWmtxo2bf4QHdzPQNQ/s1600/top.png' title="Lên đầu trang"/>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            $(function(){
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) $(".lentop").fadeIn();
                    else $(".lentop").fadeOut();
                });
                $(".lentop").click(function () {
                    $("bath_body,html").animate({scrollTop: 0}, "slow");
                });
            });
        </script>
    </body>
@endsection