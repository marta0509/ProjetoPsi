@extends('layout')
@section('titulo-pagina')
Empresa-Clientes
@endsection
@section('header')
Clientes
@endsection
@section('conteudo')
<form action="{{route('clientes.store')}}" method="post">
	@csrf
	<h3>Criar novo Cliente</h3>
	Nome:<input type="text" name="nome"><br>
	@if($errors->has('nome'))
		Deverá indicar um nome correto (no minimo 3 letras)<br>
	@endif
	<br>
	Morada:<input type="text" name="morada"><br>
	@if($errors->has('morada'))
		Deverá indicar uma morada correta(no minimo 3 letras)<br>
	@endif
	<br>
	Telefone:<input type="text" name="telefone"><br>
	@if($errors->has('telefone'))
		Deverá indicar um telefone correto(9 números)<br>
	@endif
	<br>
	Email:<input type="text" name="email"><br>
	<br>
	<input type="submit" name="criar">
</form>

<br>
<a href="{{route('clientes.index')}}">Voltar</a>
@endsection