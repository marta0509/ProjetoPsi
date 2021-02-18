<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
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
            'imagem'=>['image','nullable','max:2000']
        ]);

        if($request->hasFile('imagem'))
        {
            $nomeImagem = $request->file('imagem')->getClientOriginalName();

            $nomeImagem = time().'_'.$nomeImagem;
            $guardarImagem = $request->file('imagem')->storeAs('imagens/produtos',$nomeImagem);

            $novoProduto['imagem']=$nomeImagem;
        }
        

        $produto=Produto::create($novoProduto);
        return redirect()->route('produtos.show',[
            'id'=>$produto->id_produto
        ]);
    }

    public function edit(Request $request)
    {
        $idProduto=$request->id;

        $produto=Produto::where('id_produto',$idProduto)->first();

        if($request->hasFile('imagem'))
        {
            $nomeImagem = $request->file('imagem')->getClientOriginalName();

            $nomeImagem = time().'_'.$nomeImagem;
            $guardarImagem = $request->file('imagem')->storeAs('imagens/produtos',$nomeImagem);

            if(!is_null($request->imagem_anterior))
            {
                Storage::Delete('imagens/produtos/'.$request->imagem_anterior);
            }

            $atualizarProduto['imagem']=$nomeImagem;
        }

        

        return view('produtos.edit', [
            'produto'=>$produto
        ]);
    }

    public function update(Request $request)
    {
        $idProduto=$request->id;
        $produto=Produto::findOrFail($idProduto);
        $imagemAntiga=$produto->imagem;

        $atualizarProduto=$request->validate([
            'designacao'=>['required','min:5'],
            'stock'=>['required'],
            'preco'=>['required'],
            'observacoes'=>['nullable', 'min:5'],
            'imagem'=>['image','nullable','max:2000']
        ]);

        if($request->hasFile('imagem'))
        {
            $nomeImagem = $request->file('imagem')->getClientOriginalName();

            $nomeImagem = time().'_'.$nomeImagem;
            $guardarImagem = $request->file('imagem')->storeAs('imagens/produtos/',$nomeImagem);

            $atualizarProduto['imagem']=$nomeImagem;
        }

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
