<?php
    namespace App\Http\Controllers;
    use App\ProductModel;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class PageController extends Controller{
        public function index(){
        $sales = ProductModel::where('sale', '1')->get();
        $summers = ProductModel::where('type', 'KCN')->get();
        $news = ProductModel::where('type', 'Serum')->get();
        return view('home',compact('sales', 'summers', 'news'));
        }
        public function detail(Request $request){
            $products = DB::table('products')->where('id',$request->id)->first();
            return view('detail',compact('products'));
        } 
    }
