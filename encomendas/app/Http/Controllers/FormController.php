<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

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
	}
}
