<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\ProductModel;
    use Illuminate\Support\Facades\DB;
    
    class dropdownController extends Controller{
        //hairs
        public function DG(){
            $products=DB::table('products')->where('type','like','DG')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function UT(){
            $products=DB::table('products')->where('type','like','UT')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function NT(){
            $products=DB::table('products')->where('type','like','DG')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        //body
        public function BB(){
            $products=DB::table('products')->where('type','like','BB')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function DT(){
            $products=DB::table('products')->where('type','like','DT')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function ST(){
            $products=DB::table('products')->where('type','like','ST')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        //skincare
        public function CW(){
            $products=DB::table('products')->where('type','like','CW')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function TDC(){
            $products=DB::table('products')->where('type','like','TDC')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function CG(){
            $products=DB::table('products')->where('type','like','CG')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function toner(){
            $products=DB::table('products')->where('type','like','Toner')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function serum(){
            $products=DB::table('products')->where('type','like','Serum')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function KCN(){
            $products=DB::table('products')->where('type','like','KCN')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        //makeup
        public function eyes(){
            $products=DB::table('products')->where('type','like','Eyes')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function lips(){
            $products=DB::table('products')->where('type','like','Lips')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function blusher(){
            $products=DB::table('products')->where('type','like','Blusher')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function foundation(){
            $products=DB::table('products')->where('type','like','Foundation')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function powder(){
            $products=DB::table('products')->where('type','like','Powder')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function DM(){
            $products=DB::table('products')->where('type','like','DM')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function mas(){
            $products=DB::table('products')->where('type','like','Mas')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
        public function EP(){
            $products=DB::table('products')->where('type','like','EP')->paginate(4, ['*'], 'products');
            return view('show_dropdown',compact('products'));
        }
    }
?>