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


        public function skincare() {
            $cws = ProductModel::where('type', 'CW')->paginate(4, ['*'], 'cws');
            $cgs = ProductModel::where('type', 'CG')->paginate(4, ['*'], 'cgs');
            $tdcs = ProductModel::where('type', 'TDC')->paginate(4, ['*'], 'tdcs');
            $toners = ProductModel::where('type', 'Toner')->paginate(4, ['*'], 'toners');
            $serums = ProductModel::where('type', 'Serum')->paginate(4, ['*'], 'serums');
            $kcns = ProductModel::where('type', 'KCN')->paginate(4, ['*'], 'kcns');
            return view('Skincare', compact('cws', 'cgs', 'tdcs', 'toners', 'serums', 'kcns'));
        }
    
        public function makeup() {        
            $lips = ProductModel::where('type', 'Lips')->paginate(4, ['*'], 'lips');
            $dms = ProductModel::where('type', 'DM')->paginate(4, ['*'], 'dms');
            $foundations = ProductModel::where('type', 'Foundation')->paginate(4, ['*'], 'foundations');
            $powders = ProductModel::where('type', 'Powder')->paginate(4, ['*'], 'powders');
            $blushers = ProductModel::where('type', 'Blusher')->paginate(4, ['*'], 'blushers');
            $eyes = ProductModel::where('type', 'Eyes')->paginate(4, ['*'], 'eyes');
            $mass = ProductModel::where('type', 'Mas')->paginate(4, ['*'], 'mass');
            $eps = ProductModel::where('type', 'EP')->paginate(4, ['*'], 'eps');
            return view('Makeup', compact('lips', 'dms', 'foundations', 'powders', 'blushers', 'eyes', 'mass', 'eps'));
        }
    
        public function hair() {
            $nts = ProductModel::where('type', 'NT')->paginate(4, ['*'], 'nts');
            $uts = ProductModel::where('type', 'UT')->paginate(4, ['*'], 'uts');
            $dgs = ProductModel::where('type', 'DG')->paginate(4, ['*'], 'dgs');
            return view('Hair', compact('nts', 'uts', 'dgs'));
        }
    
        public function body() {
            $sts = ProductModel::where('type', 'ST')->paginate(4, ['*'], 'sts');
            $dts = ProductModel::where('type', 'DT')->paginate(4, ['*'], 'dts');
            $bbs = ProductModel::where('type', 'BB')->paginate(4, ['*'], 'bbs');
            return view('Body', compact('sts', 'dts', 'bbs'));
        }
    
        public function food() {
            $foods = ProductModel::where('catalogue', 'Food')->get();
            return view('Food', compact('foods'));
        }
    
        public function tool() {
            $tools = ProductModel::where('catalogue', 'Tool')->get();
            return view('Tool', compact('tools'));
        }

        public function detail(Request $request){
            $products = DB::table('products')->where('id',$request->id)->first();
            return view('detail',compact('products'));
        } 

    }

    ?>

