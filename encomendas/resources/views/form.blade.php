@extends('layout')
@section('titulo-pagina')
Formulário
@endsection
@section('header')
Pesquisa
@endsection
@section('conteudo')
	<!--aqui fica o form-->
	<h5>Insira o nome que quer pesquisar.</h5><br>
	<form method="post" action="{{route('processar.form')}}">
		@csrf
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br><br>
		<button type="submit">Enviar</button>
	</form>
@endsection