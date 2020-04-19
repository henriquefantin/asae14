@extends('template')

@section('conteudo')
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
				<th>Operações</th>
				<th>Vendas</th>
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
				<td>
				<a class="btn btn-warning" href="{{ route('cliente_update', [ 'id' => $u->id ]) }}">Alterar</a>
				<a class="btn btn-danger" href="#" onclick="exclui({{$u->id}})">Excluir</a>
				</td>
				<td>
				<a class="btn btn-success" href="{{ route('vendas_item_novo', [ 'id' => $u->id ]) }}">Vender</a>	
				</td>
			</tr>
			@endForeach
		</tbody>
	</table>


<a class="btn btn-success" href="{{ route('cliente_cadastro') }}">Cadastrar Cliente</a>

<script>
	function exclui(id){
		if (confirm("Deseja excluir o cliente de id: " + id + "?")){
			location.href = "/cliente/excluir/" + id;
		}
	}
</script>
@endsection