<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista de usuários</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th>CEP</th>
				<th>Cidade</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
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
</body>
</html>