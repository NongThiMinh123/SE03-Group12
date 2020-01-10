<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class BillDetailModel extends Model{
    protected $table = 'bill_details';
    protected $guarded = [''];
    #Model bảng chi tiết hóa đơn 
}