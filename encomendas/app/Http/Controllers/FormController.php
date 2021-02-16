<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Cliente;
use App\Models\Produto;

class FormController extends Controller
{
    //
    public function mostrarForm(){
    	return view ('form');
    }

    public function processarForm(Request $request)
	{
		$pesquisa=$request->nome;

		$clientes=Cliente::where('nome','like','%'.$pesquisa.'%')->get();
		return view('form-enviado',['nome'=>$pesquisa,'clientes'=>$clientes]);

		$produtos=Produto::where('designacao','like','%'.$pesquisa.'%')->get();
		return view('form-enviado',['designacao'=>$pesquisa,'produtos'=>$produtos]);
	}
}
