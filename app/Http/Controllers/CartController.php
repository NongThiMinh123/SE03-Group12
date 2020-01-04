<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\ProductModel;
use App\CustomerModel;
use App\BillModel;
use App\BillDetailModel;
class CartController extends Controller
{
    public function index(){
        $products = ProductModel::all();
        return view('cart', compact('products'));
    }
     
public function addProductToCart($id){
    $product = ProductModel::find($id);
    if ($product){
        \Cart::add(array('id' => $id, 'name' => $product->product_name, 'qty' => 1, 'price' => $product->product_price, 'weight'=>100));
        return redirect()->back();
    }
    // //tăng số lượng
}
public function listCartProduct($id=null){
    $product = ProductModel::find($id);
    $products = \Cart::content();
    $viewData = [
    'products' => $products
    ];
    if (Request::get('id') && (Request::get('increment')) == 1) {
        $rows = \Cart::search(function($key, $value) {
            return $key->id == Request::get('id');
        });
        $product = $rows->first();
        \Cart::update($product->rowId, $product->qty + 1);
    }
    if (Request::get('id') && (Request::get('decrease')) == 1) {
        $rows = \Cart::search(function($key, $value) {
            return $key->id == Request::get('id');
        });
        $product = $rows->first();
        \Cart::update($product->rowId, $product->qty - 1);
    }
    $rows = \Cart::search(function($key, $value) {
        return $key->id == Request::get('id');
    });
    return view('cart',$viewData);
}
public function getCheckOut() {
    $this->data['title'] = 'Check out';
    $this->data['cart'] = \Cart::content();
    $this->data['total'] = \Cart::total();
    return view('checkout', $this->data);
}
public function postCheckOut(Request $request) {
    $cartInfor = \Cart::content();
    // validate
    // $rule = [
    //     'fullName' => 'required',
    //     'email' => 'required|email',
    //     'address' => 'required',
    //     'phoneNumber' => 'required|digits_between:10,12'
    // ];
    
    // $validator = \Validator::make(Input::all(), $rule);
    
    // if ($validator->fails()) {
    //     return redirect('/checkout')
    //                 ->withErrors($validator)
    //                 ->withInput();//////
    // }
    
    try {
        // save
        $customer = new CustomerModel;
        $customer->cus_name = Request::get('fullName');
        $customer->cus_email = Request::get('email');
        $customer->cus_address = Request::get('address');
        $customer->cus_phone = Request::get('phoneNumber');
        $customer->cus_note = Request::get('note');
        $customer->save();
        $bill = new BillModel;
        $bill->cus_id = $customer->id;
        $bill->date_order = date('Y-m-d H:i:s');
        $bill->total = str_replace(',', '', \Cart::total());
        $bill->note = Request::get('note');
        $bill->save();
        if (count($cartInfor) >0) {
            foreach ($cartInfor as $key => $item) {
                $billDetail = new BillDetailModel;
                $billDetail->bill_id = $bill->id;
                $billDetail->product_id = $item->id;
                //$billDetail->product_msp= $item->msp;
                $billDetail->quantily = $item->qty;
                $billDetail->price = $item->price;
                $billDetail->save();
            }
        }
      // del
      \Cart::destroy();
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return redirect()->back()->with('alert','Purchase complete! Thanks for choosing our website ;)');
}
public function remove($id){
    $product = ProductModel::find($id);
    // $id = \Cart::search(function($key, $value) {
    //     return $key->id == Request::get('id');
    // });
    \Cart::remove($id);
//         flash("Your item has been removed");
    return back();
    
}
}