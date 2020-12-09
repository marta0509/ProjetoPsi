@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')

	<ul>
	@foreach($produtos as $produto)
		<li>
			<a href="{{route('produtos.show',['id'=>$produto->id_produto])}}">
				{{$produto->designacao}}
			</a>
		</li>
	@endforeach
	</ul>

@endsection
