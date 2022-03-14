<?php

namespace App\Http\Controllers;

use App\Models\Snippets;

use Illuminate\Http\Request;

class AddSnippController extends Controller
{
    public function __invoke(Request $req)
    {
        try {
            $snipp = Snippets::create([
                'name' => $req->get("key"),
                'content' => $req->get("value")]);
        }catch (\Exception $e){
            return $e;
        }
        // TODO: Implement __invoke() method.

        return '123';
    }
}
