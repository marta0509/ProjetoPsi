@extends('layout')
@section('titulo-pagina')
Empresa-Clientes
@endsection
@section('header')
Clientes
@endsection
@section('conteudo')
<h2>Deseja eliminar o cliente?</h2>
<h2>{{$cliente->nome}}</h2>
<form method="post" action="{{route('clientes.destroy',['id'=>$cliente->id_cliente])}}">
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
<a href="{{route('clientes.index')}}">Voltar</a>
@endsection