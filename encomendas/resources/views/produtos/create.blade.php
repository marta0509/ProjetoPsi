@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')
<form action="{{route('produtos.store')}}" enctype="multipart/form-data" method="post">
	@csrf
	<h3>Criar novo Produto</h3>
	Designação:<input type="text" name="designacao"><br>
	@if($errors->has('designacao'))
		Deverá indicar uma designação correta<br>
	@endif
	<br>
	Stock:<input type="text" name="stock"><br>
	@if($errors->has('stock'))
		Deverá indicar o stock correto<br>
	@endif
	<br>
	Preço:<input type="text" name="preco"><br>
	@if($errors->has('preco'))
		Deverá indicar um preço correto<br>
	@endif
	<br>
	Observações:<input type="text" name="observacoes"><br>
	<br>
	Imagem: <input type="file" name="imagem"><br>
	@if($errors->has('imagem'))
		Verifica a imagem<br>
	@endif
	<br>
	<input type="submit" name="criar">
</form>

<br>
<a href="{{route('produtos.index')}}">voltar</a>
@endsection