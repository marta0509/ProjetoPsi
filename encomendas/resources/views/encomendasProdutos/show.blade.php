@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas_Produtos
@endsection
@section('header')
Encomendas_Produtos
@endsection
@section('conteudo')

	<b> ID: </b> {{$encomendasProdutos->id_enc_prod}} <br>
	<b> ID Produto: </b>{{$encomendasProdutos->produto->id_produto}}<br>
	<b> ID Encomenda: </b>{{$encomendasProdutos->encomenda->id_encomenda}}<br>
	<b> Quantidade: </b> {{$encomendasProdutos->quantidade}} <br>
	<b> Preço: </b> {{$encomendasProdutos->preco}}€ <br>
	<b> Desconto: </b> {{$encomendasProdutos->desconto}} <br>
	<b> Observações: </b> {{$encomendasProdutos->observacoes}} <br>

@endsection
