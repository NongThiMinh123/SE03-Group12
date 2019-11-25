<?php
    namespace App\Http\Controllers;
    use App\LoginModel;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class SignController extends Controller{
        public function index(){
            return view('Sign');
        }
        public function create(Request $request){
            $this->validate($request,[
                'username'       => 'required',
                'email'    => 'required|email',
                'password'      => 'required'
            ]);
            $username     =$request->input('username');
            $email      = $request->input('email');
            $password      = $request->input('password');
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            $data = array(
                "username" =>  $username,
                "email"=>  $email,
                "password"=>  $hashedpassword
                );
            $users = LoginModel::insert($data);
            return redirect()->back()->with('alert','Successfully!');
        }
        
    }
 
        