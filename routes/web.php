<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitController;
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

Route::get('/test', function () {
    return view('directory.welcome2', ["id" => "testvar"]);
});

Route::get('/welcome/{id?}', [Controller::class, 'testController']);

Route::redirect('/fakeroute', '/asdasdasd', 301);

Route::get('/produits/{idFourni}/{productLine}', function ($idFourni, $productLine) {
    $products = DB::select(
        'SELECT * FROM products WHERE productScale = :id AND productLine= :line',
        ['id' => $idFourni, 'line' => $productLine]
    );
    return view('bd.produits', ["products" => $products]);
});

Route::get('/membres', function () {
    $membres = DB::select('SELECT * FROM employees;');
    return view('directory.welcome2', ["id" => $membres]);
});

Route::get('/ajoutProduit', function () {
    return view('bd.ajoutProd');
});

Route::post('/ajoutProd', [ProduitController::class, 'ajouterProduit']);
