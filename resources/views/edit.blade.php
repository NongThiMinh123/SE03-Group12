@extends('layout.master')
<title>Edit</title>
<style>
	.content{
		padding-top:70px;
		padding-left: 60px;
	}
	.row{
		padding-top:30px;
		padding-left: 60px;
	}
	#button{
		padding-top:70px;
		margin-left:80px;
		margin-right:80px;
		padding-right:70px;
	}
	#description{
		padding-top:50px;
	}
</style>
@section('content')
<body>
  <div class="row">
    <div class="col-sm-4"> </div>
        <div class="col-md-4">
            <h1 class="text-center "> Edit product</h1>
            <br/>

                <div class="col-sm-12">
                    <br/>
                    <div class="tab-content">
                        <div id="home" class="">
                            <form action="{{ route('update', $products->id)}}" method="get">
                          
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Catalogue</label>
                                <input type="text" name="catalogue" value="{{ $products->catalogue }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>MSP</label>
                                <input type="text" name="msp" value="{{ $products->msp }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" name="type" value="{{ $products->type }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>product_name</label>
                                <input type="text" name="product_name" value="{{ $products->product_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>product_img</label>
                                <input type="text" name="product_img" value="{{ $products->product_img }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" value="{{ $products->price }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Sale</label>
                                <input type="text" name="sale" value="{{ $products->sale }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>product_price</label>
                                <input type="text" name="product_price" value="{{ $products->product_price }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>product_description</label>
                                <input type="text" name="product_description" value="{{ $products->product_description }}" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-outline-secondary">Edit</button>
                           <a href="{{route('manage')}}"> <button class="btn btn-outline-secondary">Cancel</button></a>
                           
                            </form><br/>
                            
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection