@extends('template')

@section('conteudo')
	<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">Cadastro de clientes</h1>	
	</div>
	

	<form method="GET" action="{{ route('cliente_add') }}">
		@csrf
	 <div class="form-row">
      <div class="form-group pr-3 pl-3 col-md-12">
        <label for="nome1">Nome</label>
        <input type="text" name="nome"  placeholder="Nome" class="form-control" id="nome1">
      </div>
    </div>
    <div class="form-group pr-2 pl-2">
      <label for="endereco">Endereco</label>
      <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Av. Barao do Rio Branco">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6 pl-3">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cacador">
      </div>
      <div class="form-group col-md-4">
        <label for="estado">Estado</label>
        <select id="estado" name="estado" class="form-control">
          <option selected>Estado</option>
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
        <label for="cep">CEP</label>
        <input type="text" name="cep" class="form-control" id="cep" placeholder="00000-000">
      </div>
    </div>

    <div class="form-group pl-3 col-md-12">
    	<button type="submit" class="btn btn-success">Enviar</button>
    </div>
    
  </form>
  <div class="form-group pl-3 col-md-12">
  	<form method="get" action="{{ route('listar') }}">
		<button type="submit" class="btn btn-warning">Listar Clientes</button>
	</form>
@endsection

	
   