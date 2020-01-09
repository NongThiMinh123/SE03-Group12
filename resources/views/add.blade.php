@extends('layout.master')
<title>Add</title>
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
<div>

</div>    
    <div class="row">
        <div class="col-sm-4"> </div>
            <div class="col-md-4">
                <h1 class="text-center "> Add product</h1>
                <br/>

                    <div class="col-sm-12">
                        <br/>
                            <div id="home">
                                <form action="{{ route('manage.insert')}}" method="get">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Catalogue</label>
                                    <input type="text" name="catalogue" value="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>MSP</label>
                                    <input type="text" name="msp"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" name="type"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>product_name</label>
                                    <input type="text" name="product_name"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>product_img</label>
                                    <input type="text" name="product_img"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>price</label>
                                    <input type="text" name="price"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>sale</label>
                                    <input type="text" name="sale"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>product_price</label>
                                    <input type="text" name="product_price"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>product_description</label>
                                    <input type="text" name="product_description"  class="form-control" >
                                </div>
                            <a href=""><button type="submit" class="btn btn-outline-secondary">Add</button></a> 
                            <a href="{{route('manage')}}"> <button class="btn btn-outline-secondary">Cancel</button></a>
                                </form><br/>
                                <script>
                                    var msg = '{{Session::get('alert')}}';
                                    var exist = '{{Session::has('alert')}}';
                                    if(exist){
                                    alert(msg);
                                    }
                                </script>
                            </div>
                        
                </div>
            </div>
        </div>
        </div>

<div>
@endsection
</div>