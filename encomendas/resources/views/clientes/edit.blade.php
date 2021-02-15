@extends('layout')
@section('titulo-pagina')
Empresa-Clientes
@endsection
@section('header')
Clientes
@endsection
@section('conteudo')
<form action="{{route('clientes.update',['id'=>$cliente->id_cliente])}}" method="post">
	@csrf
	@method('patch')

	<h3>Atualizar Cliente</h3>
	Nome:<input type="text" name="nome" value="{{$cliente->nome}}"><br>
	@if($errors->has('nome'))
		Deverá indicar um nome correto (no minimo 3 letras)<br>
	@endif

	Morada:<input type="text" name="morada" value="{{$cliente->morada}}"><br>
	@if($errors->has('morada'))
		Deverá indicar uma morada correta(no minimo 3 letras)<br>
	@endif
	
	Telefone:<input type="text" name="telefone" value="{{$cliente->telefone}}"><br>
	@if($errors->has('telefone'))
		Deverá indicar um telefone correto(9 números)<br>
	@endif

	Email:<input type="text" name="email" value="{{$cliente->email}}"><br>
	<br>
	<input type="submit" name="criar">
</form>
@endsection