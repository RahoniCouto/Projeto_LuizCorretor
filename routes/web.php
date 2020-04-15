<?php

Auth::routes();

/*
|--------------------------------------------------------------------------
| Solicitação de login
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    if(Auth::check()){
        return view('welcome');
    } else {
        return view('auth/login');
    }
});

/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'admController@admin')->middleware('require-admin');  

Route::resource('imoveis', 'ImovelController')->middleware('require-admin');

Route::get('/imoveis/remover/{id}', 'ImovelController@remover')->name('imoveis.remover')->middleware('require-admin');

Route::resource('clientes', 'ClienteController')->middleware('require-admin');

Route::get('/clientes/remover/{id}', 'ClienteController@remover')->name('clientes.remover')->middleware('require-admin');

/*
|--------------------------------------------------------------------------
| Routes Cliente
|--------------------------------------------------------------------------
*/

Route::get('/home', 'HomeController@user');

  










