<?php

namespace App\Http\Controllers;

use App\Models\Snippets;
use Illuminate\Http\Request;

class DellSnippController extends Controller
{
    public function __invoke(Request $req)
    {

        try {

            Snippets::where('id',$req->sid)->delete();
        }catch (\Exception $e){
            return $e;
        }

        // TODO: Implement __invoke() method.
    }
}
