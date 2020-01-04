<?php

namespace App\Http\Controllers;
use App\LoginModel;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
    

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users');
        return view('login');
    }
    public function login (Request $request){
        $username = $request->username;
        $password = $request->password;
        $alert ='Incorrect username';
        $alert1 ='Incorrect password';
        $credentials = array('username'=>$request->username,'password'=>$request->password);
        $result = LoginModel::where("username",$username)->first(['password']);
        if(!$result){
            return redirect()->back()->with('alert',$alert);
        }
        else{
            $hashedPassword =$result->password;
            if (\Hash::check($request->password, $hashedPassword)) {
                // The passwords match...
                \Auth::loginUsingId(1);
                if(Auth::attempt($credentials)){
                return redirect()->action('PageController@index');
                }
                else{
                    return redirect()->back();
                }
            }else{
                return redirect()->back()->with('alert',$alert1);
                // return redirect('');
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('trangchu');
    }
}
#######