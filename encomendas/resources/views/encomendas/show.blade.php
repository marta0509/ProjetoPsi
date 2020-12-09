@extends('layout')
@section('titulo-pagina')
Registo
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')

	Encomendas feitas por:
	<b>{{$encomendas->cliente->nome}}</b>

	<br><br>

	<b> ID: </b> {{$encomendas->id_encomenda}} <br>
	<b> ID Cliente: </b> {{$encomendas->id_cliente}} <br>
	<b> ID Vendedor: </b> {{$encomendas->id_vendedor}} <br>
	<b> Data: </b> {{$encomendas->data}} <br>
	<b> Observações: </b> {{$encomendas->observacoes}} <br>
	
@endsection
