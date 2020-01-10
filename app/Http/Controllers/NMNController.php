<?php
    namespace App\Http\Controllers;
    use App\ProductModel;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class NMNController extends Controller{
        public function index(){
            $tool= DB::table('products')
            ->select('product_name','product_img','product_price','product_description','catalogue')
            ->where('catalogue','like','Tool')->get();
            // ->OrWhere('catalogue','like','makeup')
            // ->OrWhere('catalogue','like','skincare')->get();
            $makeup= DB::table('products')
            ->select('product_name','product_img','product_price','product_description','catalogue')
            ->where('catalogue','like','Makeup')->get();
            $skincare= DB::table('products')
            ->select('product_name','product_img','product_price','product_description','catalogue')
            ->where('catalogue','like','Skincare')->get();
            return view('home', compact('tool','makeup','skincare'));
        }
        
    }
?>
