<?php

use App\Http\Controllers\api\FornecedorApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/fornecedor')->group(function () {
    route::get('/', [FornecedorApiController::class, 'getFornecedores']);
    route::get('/{id}', [FornecedorApiController::class, 'getFornecedor']);
    route::post('/', [FornecedorApiController::class, 'create']);
    route::put('/{id}', [FornecedorApiController::class, 'updateFornecedor']);
});