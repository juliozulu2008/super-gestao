<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});


//parametros nas Rotas
// Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria) {
//     echo "Estamos aqui, $nome, $categoria.";
// })->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+'); //regex

//Redirecionamento de Rotas
Route::get('/rota1', function () {
    return redirect()->route('site.index');
})->name('site.rota1');
Route::get('/rota2', function () {
    echo 'Rota 2';
})->name('site.rota2');
Route::redirect('/rota2', '/rota1');
//Fallback  Caso o usuario va para uma rota inexistente
Route::fallback(function () {
    echo 'A Rota Acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a pagina inicial';
});
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');
