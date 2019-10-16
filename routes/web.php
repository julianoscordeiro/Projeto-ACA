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
    //Busca
    Route::any('/searchQuestion','QuestionController@search');
    Route::any('/searchTest','TestController@search');
    //Alunos
    Route::get('/alunos', 'HomeController@alunos')->name('alunos');
    Route::get('/alunos/criar', 'HomeController@criaralunos')->name('criaraluno');
    Route::post('/alunos/criar/nova', 'StudentController@create')->name('criadoaluno');
    Route::get('/alunos/editar/{id}', 'HomeController@editarAluno')->name('editaraluno');
    Route::post('/alunos/editado/{id}', 'StudentController@updateStudent')->name('editaraluno');
    //Deletar aluno
    Route::get('/alunos/delete/{id}', 'StudentController@deleteStudent')->name('deletaraluno');  
    //Prova
    Route::get('/provas', 'HomeController@provas')->name('provas');
    Route::get('/provas/criar', 'HomeController@criarprova')->name('criarprova');
    Route::post('/provas/criar/nova', 'TestController@create')->name('criadaprova');
    //Deletar prova
    Route::get('/provas/delete/{id}', 'TestController@deleteTest')->name('deletarprova');
    //Turmas
    Route::get('/turmas', 'HomeController@turmas')->name('turmas');
    Route::get('/turmas/criar', 'HomeController@criarturma')->name('criarturma');
    Route::post('/turmas/criar/nova', 'ClassesController@create')->name('criadaturma');
    Route::get('/turmas/editar/{id}', 'HomeController@editarTurma')->name('editarturma');
    Route::post('/turmas/editado/{id}', 'ClassesController@updateClass')->name('editarturma');
    Route::get('/turmas/provas/{id}', 'HomeController@provasTurmas')->name('provasturma');
    Route::get('/turmas/provas/add/{id}', 'HomeController@addProvaTurma')->name('addprovaturma');
    Route::post('/turmas/provas/add/{id}', 'ClassesController@adicionarProva')->name('adicionadoprovaturma');
    //Imprimir prova
    Route::get('/turmas/provas/imprimir/{id}', 'ImprimirController@imprimir')->name('imprimir');
    Route::get('/turmas/provas/delete/{id}', 'ClassesController@deleteClassTest')->name('deletarprovaturma');
    //Deletar Turma
    Route::get('/turmas/delete/{id}', 'ClassesController@deleteClasses')->name('deletarturma');
    //Alunos
    Route::get('/alunos', 'HomeController@alunos')->name('alunos');
    //Importar Exportar
    Route::get('/import-export', 'ExcelController@importExport');
    Route::post('/import', 'HomeController@importarAluno')->name('importarAluno');
    Route::get('/export', 'HomeController@exportarAluno')->name('exportarAluno');;
});
