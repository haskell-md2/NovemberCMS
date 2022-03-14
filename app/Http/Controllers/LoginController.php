<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function __invoke(Request $req)
    {

        // TODO: Implement __invoke() method.
        //$user = \App\Models\User::where(['name',$req->admin_name],['password', Hash::make($req->admin_pas)]);
//        $res = Auth::attempt(['name' => $req->admin_user, 'password' =>($req->admin_pas)]);
//        dd(Hash::make($req->password));
//        return $res;
        $credentials = $req->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        }else{
            return redirect('/login_admin')->withErrors('1');
        }

    }
}
