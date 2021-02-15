@extends('layout')
@section('titulo-pagina')
Empresa-Clientes
@endsection
@section('header')
Clientes
@endsection
@section('conteudo')
	<table class="table">
		@foreach($clientes as $cliente)
			<tr>
				<th>
					<td>
						<a href="{{route('clientes.show',['id'=>$cliente->id_cliente])}}">
							{{$cliente->nome}}</a>					
					</td>
					@if(auth()->check())
						<td><center>
							<a href="{{route('clientes.edit',['id'=>$cliente->id_cliente])}}">Editar</a></center>	
						</td>
						<td><center>
							<a href="{{route('clientes.delete',['id'=>$cliente->id_cliente])}}">Eliminar</a></center>
						</td>
					@endif
				</th>
			</tr>
		@endforeach
	</table>
@if(auth()->check())	
<br>
<a href="{{route('clientes.create')}}">Adicionar</a>
@endif
@endsection