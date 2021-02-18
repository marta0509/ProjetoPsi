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
	<input type="submit" name="Enviar">
</form>

<br>
<a href="{{route('produtos.index')}}">voltar</a>
@endsection