<!DOCTYPE html>
<html>
<head>
	<title>Lista de Clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">Lista de Clientes</h1>	
	</div>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th>CEP</th>
				<th>Cidade</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach ($us as $u)
			<tr>
				<td>{{ $u->id }}</td>
				<td>{{ $u->nome }}</td>
				<td>{{ $u->endereco}}</td>
				<td>{{ $u->cep}}</td>
				<td>{{ $u->cidade}}</td>
				<td>{{ $u->estado}}</td>
			</tr>
			@endForeach
		</tbody>
	</table>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>