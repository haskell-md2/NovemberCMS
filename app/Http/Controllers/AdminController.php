<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $count = User::all()->count();
        if($count == 0){
            return view('create_admin');
            return 'создание админ записи';
        }else{
            if(Auth::user()) return view('admin');
            return redirect('/login_admin');
        }
        return $count;
    }
}
