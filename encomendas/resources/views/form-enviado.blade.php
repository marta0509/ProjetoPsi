@extends('layout')
@section('titulo-pagina')
Empresa-Pesquisa
@endsection
@section('header')
Pesquisa Completa com sucesso
@endsection
@section('conteudo')
	@foreach($clientes as $cliente)
	<b> ID: </b> {{$cliente->id_cliente}} <br>
	<b> Nome: </b> {{$cliente->nome}} <br>
	<b> Morada: </b> {{$cliente->morada}} <br>
	<b> Telefone: </b> {{$cliente->telefone}} <br>
	@endforeach

	@foreach($produtos as $produto)
	<b> Nome: </b> {{$produto->designacao}} <br>
	<b> Stock: </b> {{$produto->stock}} <br>
	<b> Preço: </b> {{$produto->preco}} <br>
	@endforeach
	<br>
	<a href="{{route('mostrar.form')}}">Voltar</a>
@endsection