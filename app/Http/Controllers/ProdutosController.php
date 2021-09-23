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
        return redirect()->route('produtos');
    }
}