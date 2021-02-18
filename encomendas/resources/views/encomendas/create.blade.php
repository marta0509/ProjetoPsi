@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')
<form action="{{route('encomendas.store')}}" method="post">
	@csrf
	<h3>Criar uma nova encomenda</h3>
	Id do Cliente:
	<select name="id_cliente">
		@foreach($clientes as $cliente)
			<option value="{{$cliente->id_cliente}}">
				{{$cliente->id_cliente}}
			</option>

		@endforeach
	</select>
	<br>
	<br>
	Id do Vendedor:<input type="text" name="id_vendedor"><br>
	@if($errors->has('id_vendedor'))
		Deverá indicar um id  correto <br>
	@endif
	<br>
	Data:<input type="date" name="data"><br>
	@if($errors->has('data'))
		Deverá indicar uma data <br>
	@endif
	<br>
	Observações:<input type="text" name="observacoes"><br>

	<br>
	<input type="submit" name="criar">
</form>

	<br>
	<a href="{{route('encomendas.index')}}">voltar</a>
@endsection