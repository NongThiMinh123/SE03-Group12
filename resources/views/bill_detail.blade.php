@extends('layout.master')
<title>Chi Tiết Đơn Hàng</title>
@section('content')
<body>

    <div class="container">
        <h1>
            Chi tiết đơn hàng
        </h1>

        <!-- <div class="box"> -->

            <!-- <div class="box-header with-border"> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="container123  col-md-6"   style="">
                            <h4></h4>
                            <table class="table table-bordered">
                                <thead style="background-color: #DDDDDD;">
                                <tr>
                                    <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td>{{$customerInfo->cus_name}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td>{{ $customerInfo->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>{{ $customerInfo->cus_phone }}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{ $customerInfo->cus_address }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $customerInfo->cus_email }}</td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td>{{ $customerInfo->bill_note }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead style="background-color: #DDDDDD;">
                            <tr role="row">
                                <th class="sorting col-md-1" >STT</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                <th class="sorting col-md-2">Giá tiền</th>
                            </thead>
                            <tbody>
                            @foreach($billInfo as $key => $bill)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $bill->product_name}}</td>
                                    <td>{{ $bill->quantily }}</td>
                                    <td>{{ number_format($bill->product_price)}} VNĐ</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><b style="font-size:25px;">Tổng tiền </b></td>
                                <td colspan="1"><b class="text-red" style="font-size:25px;">{{number_format($customerInfo->bill_total)}} VNĐ</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                <!-- </div> -->
                
            <!-- </div> -->
        </div>
        

    </div>
</body>
@endsection
