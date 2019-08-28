<?php

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
    Route::post('/questoes/criar/nova', 'QuestionController@create')->name('criadaquestao');
    Route::get('/provas', 'HomeController@provas')->name('provas');
    Route::get('/provas/criar', 'HomeController@criarprova')->name('criarprova');
});
