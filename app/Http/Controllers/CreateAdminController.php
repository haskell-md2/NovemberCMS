<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CreateAdminController extends Controller
{
    //
    public function __invoke(Request $req)
    {

        $user = User::create([
            'name' => $req->admin_user,
            'password' => Hash::make($req->admin_pas),
            'email' => '',
        ]);

        // TODO: Implement __invoke() method.
        return redirect('/login_admin');
    }
}
