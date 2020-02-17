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

Route::get('/', function () {
    return view('index');
})->name('principal');


Route::get('/url', function () {
    return view('home');
});

Auth::routes();

Route::resource('/home', '');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pesquisar-veiculo', function(){
    return view('pesquisar_veiculos');
})->name('pesquisar.veiculo');