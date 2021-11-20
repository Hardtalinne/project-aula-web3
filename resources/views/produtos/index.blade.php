@extends('layouts.template')

@section('titulo', 'Produto - Listar ')

@section('conteudo')

<div class="card bg-light  mb-3" >
    <div class="card-body">
      <h5 class="card-title fs-2">Produto - Listar</h5>
      <a href="{{route('produtos.inserir')}}" class="btn btn-primary">Cadastrar</a>
    </div>
  </div>

  <table class="table table-striped table-hover">
    <thead>
        <tr>
          <th >Produto</th>
          <th >Descrição</th>
          <th >Valor</th>
          <th >Ação</th>

        </tr>
      </thead>

  @foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->descricao }}</td>
        <td>{{ $produto->valor }}</td>
        <td>
            <a href="{{route('produtos.ver', $produto->id)}}" title="Detalhe do produto">
                <button type="button" class="btn btn-dark sm"><i class="fas fa-eye"></i></button>
            </a>
            <a href="{{route('produtos.edit', $produto)}}" title="Editar o produto">
                <button type="button" class="btn btn-warning sm"><i class="fas fa-pencil-alt"></i></button>
            </a>
             <a href="{{route('produtos.delete', $produto->id)}}" title="Excluir o produto">
                <button type="button" class="btn btn-danger sm"><i class="fas fa-trash-alt"></i></button>
            </a>
        </td>

    </tr>
    @endforeach

</table>

    {{ $produtos->links() }}

@endsection





