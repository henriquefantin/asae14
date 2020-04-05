@extends('template_vendas')

@section('venda')
	<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">{{ $mensagem }}</h1>	
	</div>
	<div class="form-group pl-3 col-md-12">
  	<form method="get" action="{{ route('listar') }}">
		<button type="submit" class="btn btn-warning">Listar Clientes</button>
	</form>
@endsection