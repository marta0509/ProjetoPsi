@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')
	<table class="table">
		@foreach($encomendas as $encomenda)
		<tr>
			<th>
				<td>
					<a style="color: black" href="{{route('encomendas.show',['id'=>$encomenda->id_encomenda])}}">
						{{$encomenda->id_encomenda}}
					</a>
				</td>
				@if(auth()->check())
					@if(Gate::allows('normal')||Gate::allows('admin'))
						<td><center>
							<a class="btn btn-info" style="background-color: #FA5858" href="{{route('encomendas.edit',['id'=>$encomenda->id_encomenda])}}">Editar
							</a>
						</td>
						<td><center>
							<a class="btn btn-info" style="background-color: #FA5858" href="{{route('encomendas.delete',['id'=>$encomenda->id_encomenda])}}">Eliminar</a>
						</td>
					@endif
				@endif
			</th>
		</tr>
		@endforeach
	</table>
@if(auth()->check())	
	@if(Gate::allows('normal')||Gate::allows('admin'))
		<br>
		<a class="btn btn-info" style="background-color: #FA5858" href="{{route('encomendas.create')}}">Adicionar</a>
	@endif
@endif
@endsection
