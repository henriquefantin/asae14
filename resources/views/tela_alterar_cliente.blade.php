@extends('cadastro_clientes')

@section('conteudo')
<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">Alteração de clientes</h1>	
	</div>
<form class="form-row" method="post" action="{{ route('cliente_alterar', ['id' => $u->id]) }}">
	@csrf
	<div class="form-group pr-3 pl-3 col-md-12">
	<input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $u->nome }}">
	</div>
	<div class="form-group pr-3 pl-3 col-md-12">
	<input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ $u->endereco }}">
	</div>
	
	<div class="form-group col-md-6 pl-3">
	<input type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ $u->cidade }}">
	</div>
	<div class="form-group col-md-4">
	<select id="estado" name="estado" class="form-control">
            <option selected>{{ $u->estado }}</option>
            <option>Acre</option>
            <option>Alagoas</option>
            <option>Amapá</option>
            <option>Amazonas</option>
            <option>Bahia</option>
            <option>Ceará</option>
            <option>Distrito Federal</option>
            <option>Espírito Santo</option>
            <option>Goiás</option>
            <option>Maranhão</option>
            <option>Mato Grosso</option>
            <option>Mato Grosso do Sul</option>
            <option>Minas Gerais</option>
            <option>Pará</option>
            <option>Paraíba</option>
            <option>Paraná</option>
            <option>Pernambuco</option>
            <option>Piauí</option>
            <option>Rio de Janeiro</option>
            <option>Rio Grande do Norte</option>
            <option>Rio Grande do Sul</option>
            <option>Rondônia</option>
            <option>Roraima</option>
            <option>Santa Catarina</option>
            <option>São Paulo</option>
            <option>Sergipe</option>
            <option>Tocantins</option>
         </select>
	</div>
	<div class="form-group pr-3 col-md-2">
	<input type="text" class="form-control" name="cep" placeholder="CEP" value="{{ $u->cep }}">
	</div>
	<input type="submit" class="btn btn-success ml-3" value="Alterar">
</form>
@endsection

