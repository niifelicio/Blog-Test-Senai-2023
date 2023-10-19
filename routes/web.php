<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/teste', 'teste');

Route::view('/alunosenai', 'alunosenai');

Route::get('/formulario', function () {
    return '<form method= "post" action= "/contato" >
    Nome: <input type="text" name="name">
    Email: <input type="text" name="email">
    Mensagem: <textarea name="mensagem"></textarea>
    <input type="submit" value="Enviar">
    </form>';
});
Route::get('/contato/{id}', function($id){
    printf('Olá, o seu ID é %s', $id);
})->where('id','[0-9]+');
//WHERE- para obrigar que a pessoa utiliza numero//

Route::get('/contato/{id}/{nome}', function ($id,$nome) {
    printf('Olá, aluno %s, o seu ID é %s', $nome, $id);
});



Route::view('/parametroestatico','parametroestatico', 
['nome'=>'Aluno Senai']);


Route::get('/parametrodinamico/{nome?}', function ($nome =
null){
    return view ('parametrodinamico',['Nometeste'=>$nome]);
});

Route::fallback(function(){
    return "Erro ao localizar o endereço";
});

Route::get('/testesenai/{nome?}/{idade?}/{cidade?}',
function($nome=null,$idade=null, $cidade=null)
{
    return view('testesenai',['nome'=>$nome,
    'idade'=>$idade,'cidade'=>$cidade]);
});





















































































































































































