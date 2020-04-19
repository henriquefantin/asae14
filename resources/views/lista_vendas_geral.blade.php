@extends('template')

@section('conteudo')
	<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Vendas</h1>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th> 
        <th>Descrição</th>
        <th>Total</th>      
        <th>Data</th>
        <th>Operações</th>  
      </tr>
    </thead>
    <tbody class="thead-light">
      @foreach ($vendas as $v)
      <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->descricao }}</td>
        <td>{{ $v->valor}}</td>
        <td>{{ $v->created_at}}</td>
        <td><a class="btn btn-success" href="{{route('vensdas_itens', ['id' => $v->id])}}">Itens</a></td>
      </tr>
      @endForeach
    </tbody>
  </table>
<a class="btn btn-success" href="{{ route('venda_cadastro') }}">Cadastrar Nova</a>
@endsection
