@extends('layouts.template')

@section('titulo', 'Produtos - Inserir')

@section('conteudo')
<div class="container">
        <div class="card bg-light  mb-3" >
            <div class="card-body">
            <h5 class="card-title fs-2">Produto - Cadastrar</h5>
            </div>
        </div>
        <form method="post" action="{{route('produtos.inserir')}}">
            @csrf 
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor </label>
                <input type="text" class="form-control" id="valor" name="valor">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição </label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>
@endsection



