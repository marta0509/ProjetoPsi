@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas_Produtos
@endsection
@section('header')
Encomendas_Produtos
@endsection
@section('conteudo')

	<ul>
	@foreach($encomendasProdutos as $encomendaProduto)
		<li>
			<a href="{{route('encomendasProdutos.show',['id'=>$encomendaProduto->id_enc_prod])}}">
				{{$encomendaProduto->id_enc_prod}}
			</a>
		</li>
	@endforeach
	</ul>
	
@endsection
