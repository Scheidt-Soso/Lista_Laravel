<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Esta é a página Sobre do nosso projeto Laravel.';
});

Route::get('/alunos', function () {
    return 'Esta é a página de Alunos do nosso projeto Laravel.';
});

Route::get('/contato', function () {
    return 'Esta é a página de Contato do nosso projeto Laravel.';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto ID: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria ID: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuario ID: {$id}";
});
