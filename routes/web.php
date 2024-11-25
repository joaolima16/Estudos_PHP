<?php

use App\Http\Controllers\contatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\sobreNosController;
use Illuminate\Support\Facades\Route;

Route::get("/sobrenos", [sobreNosController:: class, 'sobreNos']);

Route::get('/contato',[contatoController::class, 'contato']);

Route::get("/", [PrincipalController:: class, 'principal']);

Route::get('/contato/{nome}', function(string $nome){
    echo "Estamos aqui: ".$nome;
});