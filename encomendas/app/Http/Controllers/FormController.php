<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function mostrarForm(){
    	return view ('form');
    }

    public function processarForm(Request $request)
	{
		$pesquisa=$request->nome;
		$cliente=Cliente::where('nome',$pesquisa)->first;
		$clientes=Cliente::where('nome','like','%'.$pesquisa.'%')->with('cliente')->get();
		return view('form-enviado',['processarForm'=>$pesquisa,'cliente'=>$cliente,'cliente'=>$clientes]);
	}

}
