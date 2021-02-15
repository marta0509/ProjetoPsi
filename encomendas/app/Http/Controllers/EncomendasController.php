<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;
use App\Models\Cliente;

class EncomendasController extends Controller
{
    //
    public function index()
    {
    	$encomendas=Encomenda::all();

    	return view('encomendas.index',['encomendas'=>$encomendas]);
    }

    public function show(Request $request)
    {
    	$idEncomenda=$request->id;
    	$encomendas=Encomenda::where('id_encomenda',$idEncomenda)->with('cliente')->first();
    	return view('encomendas.show',['encomendas'=>$encomendas]);
    }

    public function create()
    {
        $clientes=Cliente::all();
       return view ('encomendas.create',['clientes'=>$clientes]); 
    }

    public function store(Request $request)
    {
        $novoEncomenda=$request->validate([
            'id_cliente'=>['required'],
            'id_vendedor'=> ['required'],
            'data'=>['required'],
            'observacoes'=>['nullable'],
        ]);

        $encomendas=Encomenda::create($novoEncomenda);

        return redirect()->route('encomendas.show',[
            'id'=>$encomenda->id_encomenda
        ]);
    }

    public function edit(Request $request)
    {
        $idEncomenda=$request->id;

        $encomenda=Encomenda::where('id_encomenda',$idEncomenda)->first();

        return view('encomendas.edit', [
            'encomendas'=>$encomenda
        ]);
    }

    public function update(Request $request)
    {
        $idEncomenda=$request->id;
        $encomenda=Encomenda::findOrFail($idEncomenda);

        $atualizarEncomenda=$request->validate([
            'id_cliente'=>['required'],
            'id_vendedor'=> ['required'],
            'data'=>['required'],
            'observacoes'=>['nullable'],
        ]);

        $encomenda->update($atualizarEncomenda);

        return redirect()->route('encomendas.show',[
            'id'=>$encomenda->id_encomenda
        ]);
    }

    public function delete(Request $request)
    {
        $idEncomenda=$request->id;

        $encomenda=Encomenda::where('id_encomenda',$idEncomenda)->first();

        return view('encomendas.delete',['encomenda'=>$encomendas
        ]);
    }

    public function destroy(Request $request)
    {
        $idEncomenda=$request->id;

        $encomenda=Encomenda::findOrFail($idEncomenda);

        $encomenda->delete();

        return redirect()->route('encomendas.index')->with('mensagem','Encomenda Eliminad!');
    }

}
