@extends('template')

@section('conteudo')
	<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Material fornecido na venda Nº {{ $venda->id }}</h1>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID Item</th> 
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Valor Unitario</th>   
        <th>Subtotal</th>
        <th>Data</th>
        <th>Operações</th>  
      </tr>
    </thead>
    <tbody class="thead-light">
      @foreach ($venda->produtos as $p)
      <tr>
        <td>{{ $p->pivot->id }}</td>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->pivot->quantidade}}</td>        
        <td>{{ $p->preco}}</td>
        <td>{{ $p->pivot->subtotal}}</td>
        <td>{{ $p->pivot->created_at}}</td>
        <td></td>
      </tr>
      @endForeach
    </tbody>
  </table>

@endsection
