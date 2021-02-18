@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')
<form action="{{route('produtos.update',['id'=>$produto->id_produto])}}" enctype="multipart/form-data" method="post">
	@csrf
	@method('patch')

	<h3>Atualizar Produto</h3>
	Designação:<input type="text" name="designacao" value="{{$produto->designacao}}"><br>
	@if($errors->has('designacao'))
		Deverá indicar uma designação correta<br>
	@endif
	<br>
	Stock:<input type="text" name="stock" value="{{$produto->stock}}"><br>
	@if($errors->has('stock'))
		Deverá indicar o stock correto<br>
	@endif
	<br>
	Preço:<input type="text" name="preco" value="{{$produto->preco}}"><br>
	@if($errors->has('preco'))
		Deverá indicar um preço correto<br>
	@endif
	<br>
	Observações:<input type="text" name="observacoes" value="{{$produto->observacoes}}"><br>
	<br>
	Imagem: <input type="file" name="imagem" value="{{$produto->imagem}}"><br>
	<br>
	<input type="submit" name="criar">
</form>

<br>
<a href="{{route('produtos.index')}}">voltar</a>
@endsection