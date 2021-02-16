<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    public function index()
    {
    	$clientes=Cliente::all();

    	return view('clientes.index',['clientes'=>$clientes]);
    }

    public function show(Request $request)
    {
    	$idCliente=$request->id;
    	$clientes=Cliente::Where('id_cliente',$idCliente)->first();
    	return view ('clientes.show',['clientes'=>$clientes]);
    }

    public function create()
    {
       return view ('clientes.create'); 
    }

    public function store(Request $request)
    {
        $novoCliente=$request->validate([
            'nome'=>['required', 'min:3', 'max:100'],
            'morada'=> ['required', 'min:3', 'max:100'],
            'telefone'=>['required', 'min:9'],
            'email'=>['nullable','min:5'],
        ]);

        $cliente=Cliente::create($novoCliente);

        return redirect()->route('clientes.show',[
            'id'=>$cliente->id_cliente
        ]);
    }

    public function edit(Request $request)
    {
        $idCliente=$request->id;

        $cliente=Cliente::where('id_cliente',$idCliente)->first();

        if (Gate::allows('atualizar-cliente',$cliente)||Gate::allows('normal')||Gate::allows('admin')) 
        {          
            return view('clientes.edit', [
                'cliente'=>$cliente
            ]);
        }
        else
        {
            return redirect()->route('clientes.index')->with('mensagem','Não tem permissão para aceder à área pretendida.');
        }
    }

    public function update(Request $request)
    {
        $idCliente=$request->id;
        $cliente=Cliente::findOrFail($idCliente);

        $atualizarCliente=$request->validate([
            'nome'=>['required', 'min:3', 'max:100'],
            'morada'=> ['required', 'min:3', 'max:100'],
            'telefone'=>['required', 'min:9'],
            'email'=>['nullable','min:5'],
        ]);

        $cliente->update($atualizarCliente);

        return redirect()->route('clientes.show',[
            'id'=>$cliente->id_cliente
        ]);
    }

    public function delete(Request $request)
    {
        $idCliente=$request->id;

        $cliente=Cliente::where('id_cliente',$idCliente)->first();

        return view('clientes.delete',['cliente'=>$cliente
        ]);
    }

    public function destroy(Request $request)
    {
        $idCliente=$request->id;

        $cliente=Cliente::findOrFail($idCliente);

        $cliente->delete();

        return redirect()->route('clientes.index')->with('mensagem','Cliente Eliminado!');
    }
}
