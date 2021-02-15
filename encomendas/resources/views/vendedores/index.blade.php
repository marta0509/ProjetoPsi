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
					<a href="{{route('vendedores.show',['id'=>$vendedor->id_vendedor])}}">
					{{$vendedor->nome}}
					</a>
				</td>
				@if(auth()->check())
					<td><center>
						<a href="{{route('vendedores.edit',['id'=>$vendedor->id_vendedor])}}">Editar</a>
					</td>
					<td><center>
						<a href="{{route('vendedores.delete',['id'=>$vendedor->id_vendedor])}}">Eliminar</a>
					</td>
				@endif
			</th>
		</tr>
	@endforeach
</table>
@if(auth()->check())	
<br>
<a href="{{route('vendedores.create')}}">Adicionar</a>
@endif
@endsection
