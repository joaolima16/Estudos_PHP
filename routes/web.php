<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\sobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;




Route::get("/sobrenos", [sobreNosController:: class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/contato',[contatoController::class, 'contato'])->name('site.contato');

Route::get("/", [PrincipalController:: class, 'principal'])->name('site.principal');
Route::prefix(  "/app")->group(function () {
});

Route::get("/teste/{p1}/{p2}", [TesteController::class, "teste"])->name("site.teste");

Route::get("/clientes/login", [ClienteController::class, 'Login']);

Route::get("/app/fornecedores", [FornecedorController::class, 'index'])->name("app.fornecedor.index");

Route::fallback(function () {
    return response("Rota não encontrada", 404);

});