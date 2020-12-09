@extends('layout')
@section('titulo-pagina')
Empresa-Clientes
@endsection
@section('header')
Clientes
@endsection
@section('conteudo')
	<ul>
	@foreach($clientes as $cliente)
		<li>
			<a href="{{route('clientes.show',['id'=>$cliente->id_cliente])}}">
				{{$cliente->nome}}
			</a>
		</li>
	@endforeach
	</ul>
@endsection
