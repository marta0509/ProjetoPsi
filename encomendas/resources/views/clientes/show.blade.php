@extends('layout')
@section('titulo-pagina')
Empresa-Clientes
@endsection
@section('header')
Clientes
@endsection
@section('conteudo')
Selecionas-te o cliente:<b>{{$clientes->nome}}</b><br>
	<b> ID: </b> {{$clientes->id_cliente}} <br>
	<b> Nome: </b> {{$clientes->nome}} <br>
	<b> Morada: </b> {{$clientes->morada}} <br>
	<b> Telefone: </b> {{$clientes->telefone}} <br>

	<br>

<a class="btn btn-info" style="background-color: #FA5858" href="{{route('clientes.index')}}">Voltar</a>
@endsection