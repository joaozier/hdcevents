<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Pedro";
    $arr = [1,2,3,4,5];
    return view('welcome',
        [   'nome'=>$nome, 
            'profissao' => "Programador",
            'arr'=>$arr]);
});

Route::get('/painel', function () {
    return view('painel');
});