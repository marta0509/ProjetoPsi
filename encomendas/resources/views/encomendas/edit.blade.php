@extends('layout')
@section('titulo-pagina')
Empresa-Encomandas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')
<form action="{{route('encomendas.update',['id'=>$encomendas->id_encomenda])}}" method="post">
	@csrf
	@method('patch')

	<h3>Atualizar Encomenda</h3>
	
	Id do Cliente:<input type="text" name="id_cliente" value="{{$encomendas->id_cliente}}"><br>
	@if($errors->has('id_cliente'))
		Deverá indicar um id  correto <br>
	@endif
	<br>
	Id do Vendedor:<input type="text" name="id_vendedor" value="{{$encomendas->id_vendedor}}"><br>
	@if($errors->has('id_vendedor'))
		Deverá indicar um id  correto <br>
	@endif
	<br>
	Data:<input type="date" name="data" value="{{$encomendas->data}}"><br>
	@if($errors->has('data'))
		Deverá indicar uma data <br>
	@endif
	<br>
	Observações:<input type="text" name="observacoes" value="{{$encomendas->observacoes}}"><br>
	<br>
	<input class="btn btn-info" style="background-color: #FA5858" type="submit" name="criar">
	
	<a class="btn btn-info" style="background-color: #FA5858" href="{{route('encomendas.index')}}">Voltar</a>
</form>
	
@endsection