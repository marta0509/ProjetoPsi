<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EncomendaProduto;

class EncomendasProdutosController extends Controller
{
    //
    public function index()
    {
    	$encomendasprodutos=EncomendaProduto::all();

    	return view('encomendasProdutos.index',['encomendasProdutos'=>$encomendasprodutos]);
    }

    public function show(Request $request)
    {
    	$idEncomendaProduto=$request->id;
    	$encomendasProdutos=EncomendaProduto::where('id_enc_prod',$idEncomendaProduto)->with('encomenda','produto')->first();
    	return view('encomendasProdutos.show',['encomendasProdutos'=>$encomendasProdutos]);
    }
}
