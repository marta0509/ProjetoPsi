@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')
<h2>Deseja eliminar o produto?</h2>
<h2>{{$produto->designacao}}</h2>
<form method="post" action="{{route('produtos.destroy',['id'=>$produto->id_produto])}}">
	@csrf
	@method('delete')
	@if(session()->has('mensagem'))
		<div class="alert alert-danger" role="alert">
			{{session('mensagem')}}
		</div>
	@endif
	<br>
	<input class="btn btn-info" style="background-color: #FA5858" type="submit" name="Sim">

	<a class="btn btn-info" style="background-color: #FA5858" href="{{route('produtos.index')}}">Voltar</a>
</form>
@endsection