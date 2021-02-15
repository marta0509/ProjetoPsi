@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')
<form action="{{route('produtos.update',['id'=>$produto->id_produto])}}" method="post">
	@csrf
	@method('patch')

	<h3>Atualizar Produto</h3>
	Designação:<input type="text" name="designacao" value="{{$produto->designacao}}"><br>
	@if($errors->has('designacao'))
		Deverá indicar uma designação correta<br>
	@endif

	Stock:<input type="text" name="stock" value="{{$produto->stock}}"><br>
	@if($errors->has('stock'))
		Deverá indicar o stock correto<br>
	@endif
	
	Preço:<input type="text" name="preco" value="{{$produto->preco}}"><br>
	@if($errors->has('preco'))
		Deverá indicar um preço correto<br>
	@endif

	Observações:<input type="text" name="observacoes" value="{{$produto->observacoes}}"><br>
	<br>
	<input type="submit" name="criar">
</form>
@endsection