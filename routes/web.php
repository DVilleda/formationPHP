<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/welcome/{id?}', [Controller::class, 'testController']);

Route::redirect('/fakeroute', '/asdasdasd', 301);

Route::get('/produits/{idFourni}', function ($idFourni) {
    $products = DB::select('SELECT * FROM products WHERE productScale = :id',['id'=>$idFourni]);
    return view('bd.produits', ["products" => $products]);
});
