<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">Cadastro de usuário</h1>	
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
        <input type="text" name="cidade" class="form-control" id="cidade">
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
        <input type="text" name="cep" class="form-control" id="cep">
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
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

	
   