<?php

use App\Http\Controllers\api\FornecedorApiController;
use App\Http\Middleware\BaseResponseMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/fornecedor')->middleware([BaseResponseMiddleware::class])->group(function () {
    route::get('/', [FornecedorApiController::class, 'getFornecedores']);
    route::get('/{id}', [FornecedorApiController::class, 'getFornecedor']);
    route::post('/', [FornecedorApiController::class, 'createFornecedor']);
    route::put('/{id}', [FornecedorApiController::class, 'updateFornecedor']);
    route::delete('/{id}', [FornecedorApiController::class, 'deleteFornecedor']);
});