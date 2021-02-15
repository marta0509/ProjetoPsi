@extends('layout')
@section('titulo-pagina')
Empresa-Vendedores
@endsection
@section('header')
Vendedores
@endsection
@section('conteudo')
<h2>Deseja eliminar o vendedor?</h2>
<h2>{{$vendedor->nome}}</h2>
<form method="post" action="{{route('vendedores.destroy',['id'=>$vendedor->id_vendedor])}}">
	@csrf
	@method('delete')
	@if(session()->has('mensagem'))
		<div class="alert alert-danger" role="alert">
			{{session('mensagem')}}
		</div>
	@endif
	<input type="submit" name="Enviar">
</form>
@endsection