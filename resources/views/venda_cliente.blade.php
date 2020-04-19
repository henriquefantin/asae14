@extends('template')

@section('conteudo')
<div class="jumbotron bg-dark text-white">
	<h1 class="display-4">Cadastro de Vendas</h1>	
</div>
	<form method="post" action="{{ route('venda_add') }}">
	  @csrf
	  <div class="form-row">
	  	<div class="form-group pr-3 pl-3 col-md-12">
        		<label for="nome1">Nome Cliente</label>
			  	<select name="id_cliente" class="form-control">
				    @foreach ($usuarios as $u)
				    <option value="{{ $u->id }}">{{ $u->nome }}</option>
				    @endforeach
			 	</select>
	  </div>
	  <div class="form-group ml-2 col-md-12">
	  		<input type="submit" class="btn btn-success" value="Cadastrar">
	  	</div>
	  
	</form>
@endsection