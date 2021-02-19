@extends('layout')
@section('titulo-pagina')
Empresa-Vendedores
@endsection
@section('header')
Vendedores
@endsection
@section('conteudo')
<table class="table">
	@foreach($vendedores as $vendedor)
		<tr>
			<th>
				<td>
					<a style="color: black" href="{{route('vendedores.show',['id'=>$vendedor->id_vendedor])}}">
					{{$vendedor->nome}}
					</a>
				</td>
				@if(auth()->check())
					@if(Gate::allows('admin'))
						<td><center>
							<a class="btn btn-info" style="background-color: #FA5858" href="{{route('vendedores.edit',['id'=>$vendedor->id_vendedor])}}">Editar</a>
						</td>
						<td><center>
							<a class="btn btn-info" style="background-color: #FA5858" href="{{route('vendedores.delete',['id'=>$vendedor->id_vendedor])}}">Eliminar</a>
						</td>
					@endif
				@endif
			</th>
		</tr>
	@endforeach
</table>
@if(auth()->check())
	@if(Gate::allows('admin'))
		<br>
		<a class="btn btn-info" style="background-color: #FA5858" href="{{route('vendedores.create')}}">Adicionar</a>

		<a class="btn btn-info" style="background-color: #FA5858" href="{{route('notificacao.index')}}">Mails</a>
	@endif
@endif
@endsection
