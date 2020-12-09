@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')
Informações sobre: <b>{{$produtos->designacao}}</b><br>
	<b> ID: </b> {{$produtos->id_produto}} <br>
	<b> Designação: </b> {{$produtos->designacao}} <br>
	<b> Stock: </b> {{$produtos->stock}} Uni<br>
	<b> Preço: </b> {{$produtos->preco}} €<br>
	<b> Observações: </b> {{$produtos->observacoes}} <br>

@endsection

