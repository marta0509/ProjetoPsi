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
	<b> Imagem: </b>
	@if(isset($produtos->imagem))		 
		<img src="{{asset('imagens/produtos/'.$produtos->imagem)}}" width="250px" height="150px"><br>
	@else
		Imagem indisponivel
	@endif
	
<br>
<a class="btn btn-info" style="background-color: #FA5858" href="{{route('produtos.index')}}">Voltar</a>
@endsection


