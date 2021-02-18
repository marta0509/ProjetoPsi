@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')
<h2>Deseja eliminar a encomenda?</h2>
<h2>{{$encomenda->id_encomenda}}</h2>
<form method="post" action="{{route('encomendas.destroy',['id'=>$encomenda->id_encomenda])}}">
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
	<a href="{{route('encomendas.index')}}">voltar</a>
@endsection