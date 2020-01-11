@extends('layout.master')
<title>Danh Sách Đơn Hàng</title>
@section('content')
<body>

<div class="container">
@if (Session::has('message'))
        <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
    <div class="row">
        <div style="  margin-top:20px;" >
            <div>
                <div class="col-sm-6" style=" margin-bottom:20px;">
                    <p> <a href="{{route('order')}}"><h3>Danh sách đơn hàng: </h3></a></p>
                </div>
                <form action="{{route('bill_search')}}" role="search">
                    <div class="col-sm-6"  style="width:300px; float:right; display: flex;">
                    <input type="search" name="bill_search" value="" class="form-control" >
                    <button class='btn btn-default btn-circle' ><i class=' fas fa-search' ></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
         <!-- makeup -->
    <div style=" margin-top:20px;" class="table-responsive" >  
     
   
    
        <table  class="table table-hover" > 
             <thead  style="background-color: #DDDDDD;">
                <tr>
                    <th style="width:5%">STT</th>
                    <th style="width:20%">Customername</th>
                    <th style="width:15%">Customeremail</th>
                    <th style="width:10%">Customerphone</th>
                    <th style="width:20%">Customeraddress</th>
                    <th style="width:20%">Created_at</th>
                    <th style="width:10%">Action</th>
                    <th >Xóa</th>
                </tr>

            </thead>
            <tbody >
                    @foreach ($customers as $customer)
                <tr >
                    <td style="widtd:5%">{{$customer->id}}</td>
                    <td style="width:20%">{{$customer->cus_name}}</td>
                    <td style="widtd:15%">{{$customer->cus_email}}</td>
                    <td style="widtd:10%">{{$customer->cus_phone}}</td>
                    <td style="widtd:20%">{{$customer->cus_address}}</td>
                    <td style="width:20%">{{$customer->created_at }}</td>
                    <td style="widtd:10%"> <a href="{{route('bill_detail',$customer->id)}}" style="color:gray; font-size:12px;">Chi tiết</a></td>
                    <td align=right>
                            <a style="widtd:42px;" href="{{route('bill_destroy',$customer->id)}}"><i  class="fas fa-trash" ></i></a>
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <div align="right">{{$customers->links()}}</div>       
        

    </div>      
</div>
@endsection