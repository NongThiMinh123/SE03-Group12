<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\ProductModel;
    use App\BillModel;
    use App\CustomerModel;
    use App\BillDetailModel;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\DB;
    class manageProductsController extends Controller{
        public function index(){
            $makeups=DB::table('products')->where('catalogue','like','Makeup')->paginate(4, ['*'], 'makeups');
            $skincares=DB::table('products')->where('catalogue','like','skincare')->paginate(4, ['*'], 'skincares');
            $hairs=DB::table('products')->where('catalogue','like','hair')->paginate(4, ['*'], 'hairs');
            $bodys=DB::table('products')->where('catalogue','like','Body')->paginate(4, ['*'], 'bodys');
            $foods=DB::table('products')->where('catalogue','like','Food')->paginate(4, ['*'], 'foods');
            $tools=DB::table('products')->where('catalogue','like','Tool')->paginate(4, ['*'], 'tools');
            return view('manageProducts',compact('makeups','skincares','hairs','bodys','foods','tools'));
        }
        public function edit(Request $request){
            $products = DB::table('products')->where('id',$request->id)->first();
            return view('edit',compact('products'));
        }
        public function update(Request $request, $id)
            {
            $request->validate([
                'catalogue' => 'required',
                'msp' => 'required',
                'type' => 'required',
                'product_name' => 'required',
                'product_img' => 'required',
                'price' => 'required',
                'product_price' => 'required',
                'product_description' => 'required',
            ]);
            $products = DB::table('products')
            ->where('id', $id)
            ->update([
                'catalogue' => $request->input('catalogue'),
                'msp' => $request->input('msp'),
                'type' => $request->input('type'),
                'product_name' => $request->input('product_name'),
                'product_img' => $request->input('product_img'),
                'price' => $request->input('price'),
                'sale' => $request->input('sale'),
                'product_price' => $request->input('product_price'),
                'product_description' => $request->input('product_description')
            ]);
            $alert="Successfully!";
            return redirect()->route('manage')->with('alert',$alert);
        }
 
        public function destroy($id)
        {
            $products = DB::table('products')
            ->where('id', $id)
            ->delete();
            return redirect()->route('manage');
        }

        public function add(){
            return view('add');
        }
        public function update_insert(Request $request)
        {
            $this->validate($request,[
                'catalogue' => 'required',
                'msp' => 'required',
                'type' => 'required',
                'product_name' => 'required',
                'product_img' => 'required',
                'price' => 'required',
                'product_price' => 'required',
                'product_description' => 'required',
            ]);
            $catalogue = $request->input('catalogue');
            $msp = $request->input('msp');
            $type = $request->input('type');
            $product_name = $request->input('product_name');
            $product_img = $request->input('product_img');
            $price = $request->input('price');
            $sale = $request->input('sale');
            $product_price = $request->input('product_price');
            $product_description = $request->input('product_description');
            $data = array(
                "catalogue" =>  $catalogue,
                "msp"=>  $msp,
                "type"=>  $type,
                "product_name" =>  $product_name,
                "product_img"=>  $product_img,
                "price"=>  $price,
                "sale"=>  $sale,
                "product_price"=>  $product_price,
                "product_description"=>  $product_description
                );
            $users = productModel::insert($data);
            $alert="Successfully!";
            return redirect()->route('manage')->with('alert',$alert);
        }
         
        public function search(Request $request)
        {
            $search = $request->get('manage_search');
            $products = DB::table('products')
            ->where('id','like',$search)
            ->orwhere('msp','like','%'.$search.'%')
            ->orWhere('type','like','%'.$search.'%')
            ->orWhere('catalogue','like','%'.$search.'%')
            ->orWhere('product_price','like','%'.$search.'%')
            ->orWhere('product_name','like','%'.$search.'%')->paginate(4, ['*'], 'products');
            return view('manageSearch',compact("products"));
        }
        public function bill(){
            $customers=DB::table('customer')
            ->paginate(5, ['*'], 'customers');
            return view('bill_order',compact("customers"));
        }

        public function bill_detail($id){
                $customerInfo = DB::table('customer')
                                ->join('bills', 'customer.id', '=', 'bills.cus_id')
                                ->select('customer.*', 'bills.id as bill_id', 'bills.total as bill_total', 'bills.note as bill_note')
                                ->where('customer.id', '=', $id)
                                ->first();
        
                $billInfo = DB::table('bills')
                            ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
                            ->leftjoin('products', 'bill_details.product_id', '=', 'products.id')
                            ->where('bills.cus_id', '=', $id)
                            ->select('bills.*', 'bill_details.*', 'products.product_name as product_name', 'products.product_price as product_price')
                            ->get();
        
                return view('bill_detail', compact('customerInfo','billInfo'));
        }

        public function bill_destroy($id)
        {
            $customer1=customerModel::find($id)
            ->delete();
            Session::flash('message', "Successfully deleted");

            return Redirect::to('order');
        }
        public function bill_search(Request $request)
        {
            $search = $request->get('bill_search');
            $customers = DB::table('customer')
            ->where('cus_name','like',$search)
            ->orwhere('cus_email','like','%'.$search.'%')
            ->orWhere('cus_phone','like','%'.$search.'%')
            ->orWhere('cus_address','like','%'.$search.'%')
            ->paginate(5, ['*'], 'customers');
            return view('bill_order',compact("customers"));
        }
    }
?>