<?php

Auth::routes();

/*
|--------------------------------------------------------------------------
| Solicitação de login
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    // if(Auth::check()){
        return view('welcome');
    // } else {
    //     return view('auth/login');
    // }
});

/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'admController@admin')->name('admin');  

Route::resource('imoveis', 'ImovelController');

Route::get('/imoveis/remover/{id}', 'ImovelController@remover')->name('imoveis.remover');

Route::resource('clientes', 'ClienteController');

Route::get('/clientes/remover/{id}', 'ClienteController@remover')->name('clientes.remover');

Route::resource('solicitacao', 'solicitacaoController');
/*
|--------------------------------------------------------------------------
| Routes Cliente
|--------------------------------------------------------------------------
*/

Route::get('/home', 'guestController@user')->name('home.welcome');

  










