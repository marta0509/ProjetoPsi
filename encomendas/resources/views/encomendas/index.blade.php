@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')

	<ul>
	@foreach($encomendas as $encomenda)
		<li>
			<a href="{{route('encomendas.show',['id'=>$encomenda->id_encomenda])}}">
				{{$encomenda->id_encomenda}}
			</a>
		</li>
	@endforeach
	</ul>
	
@endsection
