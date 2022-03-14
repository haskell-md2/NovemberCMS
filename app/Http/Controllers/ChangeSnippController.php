<?php

namespace App\Http\Controllers;

use App\Models\Snippets;
use Illuminate\Http\Request;

class ChangeSnippController extends Controller
{
    public function __invoke(Request $req)
    {

        try {
            $res = Snippets::where('id',$req->sid)->update(['content' => $req->cont]);
            return $res;
        }catch (\Exception $e){
            return $e;
        }
    }
}
