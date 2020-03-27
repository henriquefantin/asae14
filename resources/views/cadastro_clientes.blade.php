<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Cadastro de usuário</h1>
	<form method="GET" action="{{ route('cliente_add') }}">
		@csrf
		<input type="text" name="nome" placeholder="Nome">
		<input type="text" name="endereco" placeholder="Rua Santos Alberge">
		<input type="text" name="cep" placeholder="00000000">
		<input type="text" name="cidade" placeholder="São Tome">
		<input type="text" name="estado" placeholder="Santa Catarina">
		<input type="submit" value="Enviar" name="">
	</form>
	<form method="get" action="{{ route('listar') }}">
		<input type="submit" value="Listar" name="">		
	</form>
</body>
</html>