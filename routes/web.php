<?php

use Illuminate\Support\Facades\Input;
use App\Question;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@index');



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/questoes', 'HomeController@questoes')->name('questoes');
    Route::get('/questoes/criar', 'HomeController@criarquestao')->name('criarquestao');
    Route::get('/questoes/editar/{id}', 'HomeController@editarquestao')->name('editar');
    Route::post('/questoes/editado/{id}', 'QuestionController@updateQuestion')->name('editarquestao');
    Route::post('/questoes/criar/nova', 'QuestionController@create')->name('criadaquestao');
    //Deletar Questão
    Route::get('/questoes/delete/{id}', 'QuestionController@deleteQuestion')->name('deletarquestao');
    //procurar questão
    Route::get('/questoes/resultado', 'HomeController@buscarquestao')->name('buscarquestao');
    Route::any('/search','HomeController@buscarquestao');
    //alunos
    Route::get('/alunos', 'HomeController@alunos')->name('alunos');




    Route::get('/provas', 'HomeController@provas')->name('provas');
    Route::get('/provas/criar', 'HomeController@criarprova')->name('criarprova');
    Route::post('/provas/criar/nova', 'TestController@create')->name('criadaprova');
    //Deletar prova
    Route::get('/provas/delete/{id}', 'TestController@deleteTest')->name('deletarprova');

    //Turmas
    Route::get('/turmas', 'HomeController@turmas')->name('turmas');
});
