<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    //
    public function index()
    {
    	$produtos=Produto::all();

    	return view('produtos.index',['produtos'=>$produtos]);
    }

    public function show(Request $request)
    {
    	$idProduto=$request->id;
    	$produtos=Produto::Where('id_produto',$idProduto)->first();
    	return view ('produtos.show',['produtos'=>$produtos]);
    }
}
