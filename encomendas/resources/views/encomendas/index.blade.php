@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')
	<table>
		@foreach($encomendas as $encomenda)
		<tr>
			<th>
				<td>
					<a href="{{route('encomendas.show',['id'=>$encomenda->id_encomenda])}}">
						{{$encomenda->id_encomenda}}
					</a>
				</td>
				@if(auth()->check())
					@if(Gate::allows('atualizar-clientes',$cliente)||Gate::allows('normal'))
					<td><center>
						<a href="{{route('encomendas.edit',['id'=>$encomenda->id_encomenda])}}">Editar
						</a>
					</td>
					<td><center>
						<a href="{{route('encomendas.delete',['id'=>$encomenda->id_encomenda])}}">Eliminar</a>
					</td>
					@endif
				@endif
			</th>
		</tr>
		@endforeach
	</table>
@if(auth()->check())	
<br>
<a href="{{route('encomendas.create')}}">Adicionar</a>
@endif
@endsection
