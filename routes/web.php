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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobremim', 'SobreMimController@sobreMim')->name('site.sobremim');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');

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
})->name('site.login');


Route::prefix('/app')->group(function(){

        Route::get('/clientes', function(){
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', function(){
        return 'Produtos';
    })->name('app.produtos');

});

Route::get('/rota1',function(){
    echo 'Rota 1';
})->name('site.rota1');

 Route::get('/rota2',function(){
     return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');
