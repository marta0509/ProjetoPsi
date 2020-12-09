@extends('layout')
@section('titulo-pagina')
Empresa-Vendedores
@endsection
@section('header')
Vendedores
@endsection
@section('conteudo')

	<ul>
	@foreach($vendedores as $vendedor)
		<li>
			<a href="{{route('vendedores.show',['id'=>$vendedor->id_vendedor])}}">
				{{$vendedor->nome}}
			</a>
		</li>
	@endforeach
	</ul>

@endsection
