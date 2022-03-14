<?php

use Illuminate\Support\Facades\Route;
use App\Extrenal\SnippManager;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $snipps = \App\Models\Snippets::all();
    $res = [];
    foreach ($snipps as $snipp){
        $res[$snipp['name'] ] = $snipp['content'];
    }
    $sm = new SnippManager($res);
    return view('welcome',['snippets' => $sm]);
});

Route::get('/setup', function (){
    return view('setup');
});

Route::get('/admin', \App\Http\Controllers\AdminController::class);
Route::get('/login_admin', function (){
    return view('login');
});

Route::get('/get_snipps', function (){
   return \App\Models\Snippets::all();
});

Route::post('/setup_form', \App\Http\Controllers\SetupController::class);
Route::post('/admin_create', \App\Http\Controllers\CreateAdminController::class);
Route::post('/login_admin_form', \App\Http\Controllers\LoginController::class);
Route::post('/add_snipp',\App\Http\Controllers\AddSnippController::class);
Route::post('/change_snipp', \App\Http\Controllers\ChangeSnippController::class);

Route::delete('/delete_snip', \App\Http\Controllers\DellSnippController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
