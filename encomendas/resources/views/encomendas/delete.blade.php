@extends('layout')
@section('titulo-pagina')
Empresa-Encomendas
@endsection
@section('header')
Encomendas
@endsection
@section('conteudo')
<h2>Deseja eliminar a encomenda?</h2>
<h2>{{$encomenda->id_encomenda}}</h2>
<form method="post" action="{{route('encomendas.destroy',['id'=>$encomenda->id_encomenda])}}">
	@csrf
	@method('delete')
	@if(session()->has('mensagem'))
		<div class="alert alert-danger" role="alert">
			{{session('mensagem')}}
		</div>
	@endif
	<br>
	<input class="btn btn-info" style="background-color: #FA5858" type="submit" name="Sim">
	
	<a class="btn btn-info" style="background-color: #FA5858" href="{{route('encomendas.index')}}">Voltar</a>
</form>

@endsection