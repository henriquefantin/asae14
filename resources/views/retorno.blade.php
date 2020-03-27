<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>{{ $mensagem }}</h1>
	<form method="get" action="{{ route('listar') }}">
		<input type="submit" value="Listar" name="">		
	</form>
</body>
</html>