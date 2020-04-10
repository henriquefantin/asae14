@extends('template_vendas')

@section('venda')
<div class="jumbotron bg-dark text-white">
		<h1 class="display-4">Cadastro de usuário</h1>	
	</div>
<form method="post" action="{{ route('user_add') }}">
	@csrf
	<div class="form-group"><input type="text" class="form-control" name="nome" placeholder="Nome"></div>
	<div class="form-group"><input type="text" class="form-control" name="login" placeholder="Login"></div>
	<div class="form-group"><input type="password" class="form-control" name="senha" placeholder="Senha"></div>
	<div class="form-group"><input type="submit" class="btn btn-success" value="Logar"></div>
		
</form>
@endsection
