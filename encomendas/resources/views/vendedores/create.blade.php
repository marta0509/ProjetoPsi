@extends('layout')
@section('titulo-pagina')
Empresa-Vendedores
@endsection
@section('header')
Vendedores
@endsection
@section('conteudo')
<form action="{{route('vendedores.store')}}" method="post">
	@csrf
	<h3>Criar novo Vendedor</h3>
	Nome:<input type="text" name="nome"><br>
	@if($errors->has('nome'))
		Deverá indicar um nome correto (no minimo 3 letras)<br>
	@endif
	<br>
	Especialidade:<input type="text" name="especialidade"><br>
	@if($errors->has('especialidade'))
		Deverá indicar uma especialidade correta(no minimo 3 letras)<br>
	@endif
	<br>
	Email:<input type="text" name="email"><br>
	@if($errors->has('email'))
		Deverá indicar um email correta(no minimo 5 letras)<br>
	@endif
	<br>
	<input class="btn btn-info" style="background-color: #FA5858" type="submit" name="criar">

	<a class="btn btn-info" style="background-color: #FA5858" href="{{route('vendedores.index')}}">Voltar</a>
</form>
@endsection