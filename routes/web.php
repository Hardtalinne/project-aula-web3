<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//exemplos Rotas
Route::get('/olaMundo', function () {
    return "Olá Mundo!";
});

Route::get('/soma', function () {
    $x = 10;
    $y = 20;
    $total =  $x +  $y;
    return "O resultado da some é " . $total;
});

Route::get('/adicionar-produto', function ($id) {
    $texto = "O parâmetro recebido ID = " . $id;
    return $texto;
});

Route::get('/soma/{numeroA}/{numeroB}/{texto?}', function ($a, $b, $texto = null) {
    $soma =  $a +  $b;
    return "{$texto}{$soma}";
});

Route::get('/home', HomeController::class);
Route::get('/home-principal', [HomeController::class, 'principal']);

//Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/', [UsuariosController::class, 'login'])->name('usuarios.login');

//produtos Controllers
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produtos/show/{id}', [ProdutosController::class, 'show'])->name('produtos.ver');
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::get('/produtos/show-search/{nome}/{quantidade}/{preco}', [ProdutosController::class, 'show']);
Route::post('/produtos/create', [ProdutosController::class, 'insert'])->name('produtos.inserir');
Route::get('/produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');
Route::get('/produtos/{produto}/delete', [ProdutosController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/{produto}', [ProdutosController::class, 'deletar'])->name('produtos.deletar');

//categoria Controllers
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/categoria/show', [CategoriaController::class, 'show']);
Route::get('/categoria/create', [CategoriaController::class, 'create']);
Route::get('/categoria/{descricao}', [CategoriaController::class, 'show']);




//exemplo aula
// Route::get('/adicionar-produto/{identificacao}/{categoria}', function ($id, $categoria) {
// 	$texto = "Me parâmetro de identificação pela URL é: {$id}<br>";
//     $texto .= "Me parâmetro da categoria pelo URL é: {$categoria}";
//     return $texto;
// });

Route::get('/teste-blade', function () {
    return view('teste', ['nome' => 'Laravel']);
});
