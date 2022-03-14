<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Snippets;

class IndexController extends Controller
{
    public function __invoke()
    {
        echo 'Главная страница';
        // $text = Snippets::where('name', 'main_text')->pluck('content')[0];
        // return view("index", ['text' => $text]);
    }
}
