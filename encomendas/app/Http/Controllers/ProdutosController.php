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

    public function create()
    {
        return view('produtos.create');
    }

    public function store (Request $request)
    {
        $novoProduto=$request->validate([
            'designacao'=>['required','min:5'],
            'stock'=>['required'],
            'preco'=>['required'],
            'observacoes'=>['nullable', 'min:5'],
        ]);

        $produto=Produto::create($novoProduto);
        return redirect()->route('produtos.show',[
            'id'=>$produto->id_produto
        ]);
    }

    public function edit(Request $request)
    {
        $idProduto=$request->id;

        $produto=Produto::where('id_produto',$idProduto)->first();

        return view('produtos.edit', [
            'produto'=>$produto
        ]);
    }

    public function update(Request $request)
    {
        $idProduto=$request->id;
        $produto=Produto::findOrFail($idProduto);

        $atualizarProduto=$request->validate([
            'designacao'=>['required','min:5'],
            'stock'=>['required'],
            'preco'=>['required'],
            'observacoes'=>['nullable', 'min:5'],
        ]);

        $produto->update($atualizarProduto);
        
        return redirect()->route('produtos.show',[
            'id'=>$produto->id_produto
        ]);
    }

    public function delete(Request $request)
    {
        $idProduto=$request->id;

        $produto=Produto::where('id_produto',$idProduto)->first();

        return view('produtos.delete',['produto'=>$produto
        ]);
    }

    public function destroy(Request $request)
    {
        $idProduto=$request->id;

        $produto=Produto::findOrFail($idProduto);

        $produto->delete();

        return redirect()->route('produtos.index')->with('mensagem','Produto Eliminado!');
    }
}
