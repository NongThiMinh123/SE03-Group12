<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class LoginModel extends Model
{
    protected $table ='users';
    public $timestamp ='false';
}
// $username = $request->username;
// $password = md5($request->password);

// $result = LoginModel::where('username',$username)->where('password',$password)->first();
// if ($result==null) {
//     $alert ='Incorrect username/password';
//     return redirect()->back()->with('alert',$alert);
// }else{
//     session(['user'=>$username]);
//     return redirect('/');
// }
//\Hash::make(Input::get('password'));