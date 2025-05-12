<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobremim', 'SobreMimController@sobreMim');

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome?}/{categoria_id?}/{assnto?}/{mensagem?}', 
function(
    string $nome = 'nome não informado', 
    int $categoria_id = 1, 
    string $assunto = 'assunto não informado', 
    string $mensagem = 'mensagem não informada')
     {
    echo "Meu nome é: $nome<br>Categoria: $categoria_id<br>Assunto: $assunto<br>Mensagem: $mensagem";
})

->where('categoria_id', '[0-9]+') ->where('nome', '[A-Za-z]+');


Route::get('/login', function(){
    return 'Login';
});

Route::get('/clientes', function(){
    return 'Clientes';
});

Route::get('/fornecedores', function(){
    return 'Fornecedores';
});

Route::get('/produtos', function(){
    return 'Produtos';
});