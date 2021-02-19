@extends('layout')
@section('titulo-pagina')
Empresa-Produtos
@endsection
@section('header')
Produtos
@endsection
@section('conteudo')
<table class="table">
	@foreach($produtos as $produto)
		<tr>
			<th>
				<td>
					<a style="color: black" href="{{route('produtos.show',['id'=>$produto->id_produto])}}">
						{{$produto->designacao}}
					</a>
		</td>
			@if(auth()->check())
				@if(Gate::allows('admin') || Gate::allows('normal'))
					<td><center>
						<a class="btn btn-info" style="background-color: #FA5858" href="{{route('produtos.edit',['id'=>$produto->id_produto])}}">Editar</a>
					</td>
				@endif
				@if(Gate::allows('admin'))
					<td><center>
						<a class="btn btn-info" style="background-color: #FA5858" href="{{route('produtos.delete',['id'=>$produto->id_produto])}}">Eliminar</a>
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
	<a class="btn btn-info" style="background-color: #FA5858" href="{{route('produtos.create')}}">Adicionar</a>
	@endif
@endif
@endsection
