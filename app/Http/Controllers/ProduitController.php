<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProduitController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** */
    public function ajouterProduit(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|min:8',
            'name' => ['required', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/'],
            'line' => 'required',
            'achatPrix' => 'required|min:0',
            'ventePrix' => 'required|min:0',
        ]);
        //Logique ajout a la BD
        $code = $request->input('code');
        $nom = $request->input('name');
        $line = $request->input('line');
        $price = $request->input('achatPrix');
        $msrp = $request->input('ventePrix');
        DB::insert(
            'INSERT INTO products (productCode,productName,productLine,buyPrice,MSRP) 
        VALUES (:code,:nom,:line,:price,:msrp)',
            ['code' => $code, 'nom' => $nom, 'line' => $line, 'price' => $price, 'msrp' => $msrp]
        );
        return view('welcome');
    }
}
