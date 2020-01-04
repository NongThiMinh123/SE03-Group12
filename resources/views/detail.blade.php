@extends('layout.master')
<title>Details</title>

<style>
	.container{
		font-family: "Segoe UI";
		font-size: 18px;
		
	}
	.content-product{
		margin-top: 30px;
		margin-bottom: 60px; 
		
	}
	.btn-add{
		margin: 30px 0;
	}
	.product_img img{
		width: 350px;
		height:400px;
		object-fit: cover;
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
		.product_description {
		text-align: justify;
	}
</style>
@section('content')
	<div class="container" style="width: 1200px;">
	    <div class='content-product'>
			<div class="row product-detail ">
				<div class="crumb" style="margin: 30px 0 30px 125px;">
					<h1></h1>
				</div>
				@if($products->sale==0)
				<div class="product_img col-md-6" align=center>
					<img src="{{$products->product_img}}" alt="{{$products->product_name}}"  >
				</div>
				<div class="product_info col-md-6">
					<div class="product_name" style="margin-bottom:20px;">
						<h2><p>{{$products->product_name}}</p></h2>
					</div>
					<div class="product_id">
					<p><h4>Product ID: </h4> {{$products->msp}} </p>
					</div>
					<div class="product_price">
						<h4> <p> Price: </p></h4>{{ number_format($products->product_price,0,',','.') }} VND
					</div>
					<form method="POST" action="#">
						<input type="hidden"  value="{{$products->id}}">
						<input type="hidden"  value="{{ csrf_token() }}">
						<a href="#"><button type="button" class="btn btn-default btn-lg btn-block btn-add" style="width:300px;"  align=center>Add To Cart</button></a></p>
					</form>
					<div class="product_description">
						<p style="font-size:25px;">Description: </p>
						<p>
						{{$products->product_description}}
						</p>
					</div>
					@else
					<div class="product_img col-md-6" align=center>
						<img src="{{$products->product_img}}" alt="{{$products->product_name}}">
						<div class="ribbon-wrapper">
							<div class="ribbon">20% OFF</div>
						</div>
					</div>
					<div class="product_info col-md-6">
						<div class="product_name" style="margin-bottom:20px;">
							<h2><p>{{$products->product_name}}</p></h2>
						</div>
						<div class="product_id">
						<p><h4>Product ID: </h4> {{$products->msp}} </p>
						</div>
						<div class="product_price">
							<h4> <p> Price: </p></h4>
							<p class="price"><del>{{number_format($products->price,0,',','.')}} VNĐ</del> -> {{number_format($products->product_price,0,',','.')}} VNĐ</p>
						</div>
						<form method="POST" action="#">
							<input type="hidden"  value="{{$products->id}}">
							<input type="hidden"  value="{{ csrf_token() }}">
							<a href="#"><button type="button" class="btn btn-default btn-lg btn-block btn-add" style="width:300px;"  align=center>Add To Cart</button></a></p>
						</form>
						<div class="product_description">
							<p style="font-size:25px;">Description: </p>
							<p>
							{{$products->product_description}}
							</p>
						</div>
					@endif			
				</div>
			</div>
		</div>
	</div>

@endsection
