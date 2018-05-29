<?php

Route::get('/', 'UsuarioController@usuario');
Route::get('/contacto', 'PaginasController@contacto');
Route::get('/perfil', 'PaginasController@perfil')->middleware('admin');
