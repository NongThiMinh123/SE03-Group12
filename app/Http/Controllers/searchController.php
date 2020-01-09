<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class searchController extends Controller{
        public function search(Request $request)
        {
            $search = $request->get('search');
            $products = DB::table('products')
            ->where('id','like',$search)
            ->orwhere('sale','like',$search)
            ->orwhere('msp','like','%'.$search.'%')
            ->orWhere('type','like','%'.$search.'%')
            ->orWhere('catalogue','like','%'.$search.'%')
            ->orWhere('product_price','like','%'.$search.'%')
            ->orWhere('product_name','like','%'.$search.'%')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact("products"));
        }
        
    }
    
?>