<?php

//rotas de views
Route::get('/', 'ContatoController@index');

//controller
Route::get('/adicionar', ['as' => 'contato.adicionar', 'uses' => 'ContatoController@add']);
Route::get('/exibir{id?}', ['as' => 'contato.exibir', 'uses' => 'ContatoController@show']);
Route::get('/editar{id?}', ['as' => 'contato.editar', 'uses' => 'ContatoController@edit']);

// rotas de intercao com  banco
Route::post('/adicionar', ['as' => 'contato.post.adicionar', 'uses' => 'ContatoController@store']);