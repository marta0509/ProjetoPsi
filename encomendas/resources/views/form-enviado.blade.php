@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Registo Completo com sucesso
@endsection
@section('conteudo')
	
	<b> ID: </b> {{$clientes->id_cliente}} <br>
	<b> Nome: </b> {{$clientes->nome}} <br>
	<b> Morada: </b> {{$clientes->morada}} <br>
	<b> Telefone: </b> {{$clientes->telefone}} <br>

@endsection