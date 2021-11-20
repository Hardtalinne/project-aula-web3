<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        // $produtos = Produto::all();
        $produtos = Produto::orderBy('nome', 'asc')->paginate();
        // $count = Produto::all()->count();

        return view('produtos.index', ["produtos" => $produtos]);
        //return $produtos;
        //return view('produtos.index');
    }
    // public function show($nome, $quantidade, $preco)
    // {
    //     return view('produtos.show', ['nome' => $nome, 'quantidade' => $quantidade, 'preco' => $preco]);
    // }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function insert(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();

        $mensagem = "Produto {{$produto->nome}} cadastrado com sucesso!";
        // outra forma de fazer o flash --- $request->session()->flash('success', $mensagem)
        return redirect()->route('produtos')->with('success', $mensagem);
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function editar(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();

        $mensagem = "Produto {{$produto->nome}} alterado com sucesso!";

        return redirect()->route('produtos')->with('success', $mensagem);
    }

    public function delete(Produto $produto)
    {
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function deletar(Produto $produto)
    {
        $mensagem = "Produto {{$produto->nome}} excluido com sucesso!";
        $produto->delete();
        return redirect()->route('produtos')->with('success', $mensagem);
    }
}
