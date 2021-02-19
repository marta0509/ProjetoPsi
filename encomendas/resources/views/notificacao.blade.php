@extends('layout')
@section('titulo-pagina')
Mails
@endsection
@section('header')
Mails-Vendedores
@endsection
@section('conteudo')
	<p>Os nossos Vendedores</p>
	@foreach($vendedores as $vendedor)
		<tr>
			<th scope="row">{{$vendedor->id_vendedor}}</th>

			<td>{{$vendedor->nome}}</td>
		</tr>
	@endforeach
@endsection