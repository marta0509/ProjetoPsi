@extends('layout')
@section('titulo-pagina')
Empresa-Vendedores
@endsection
@section('header')
Vendedores
@endsection
@section('conteudo')

Informações do vendedor: <b>{{$vendedores->nome}}</b><br>
	<b> ID: </b> {{$vendedores->id_vendedor}} <br>
	<b> Nome: </b> {{$vendedores->nome}} <br>
	<b> Especialidade: </b> {{$vendedores->especialidade}} <br>
	<b> Email: </b> {{$vendedores->email}} <br>

<br>
<a class="btn btn-info" style="background-color: #FA5858" href="{{route('vendedores.index')}}">Voltar</a>

@endsection


