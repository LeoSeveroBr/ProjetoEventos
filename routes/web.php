<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Leo";
    $idade = 34;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produtosID/{id?}', function ($id = null) {
    return view('produtosID', ['id' => $id]);
});
