@extends('template_vendas')

@section('venda')
	<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">Venda Cliente</h1>	
	</div>
	

	<form method="post" action="{{ route('venda_add', ['id' => $u->id]) }}">
		@csrf
	 <div class="form-row">
      <div class="form-group pr-3 pl-3 col-md-12">
        <label for="nome1">Descrição do produto</label>
        <input type="text" name="descricao" class="form-control" id="nome1">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group pr-3 pl-3 col-md-12">
        <label for="nome1">Valor do produto</label>
        <input type="text" name="valor" class="form-control" id="nome1">
      </div>
    </div>    
    <div class="form-group pl-3 col-md-12">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
  </form>
@endsection
