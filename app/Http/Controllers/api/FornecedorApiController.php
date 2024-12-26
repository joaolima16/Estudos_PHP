<?php

namespace App\Http\Controllers\api;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FornecedorApiController extends Controller
{
    public function getFornecedores()
    {
        $fornecedores = Fornecedor::all();
        return $fornecedores;
    }
    public function create(Request $request)
    {

        try {
            $result = Fornecedor::create($request->all());
            return $result;
        } catch (\Exception) {
            return response()->json(['error' => 'Erro ao criar fornecedor'], 500);
        }
    }
    public function getFornecedor($id)
    {
        $response = [];
        try {
            $fornecedor = Fornecedor::find($id);
            if ($fornecedor) {
                $response = [
                    'status' => true,
                    'msg' => 'fornecedor encontrado',
                    'data' => $fornecedor
                ];
            } else {
                throw new \Exception('Fornecedor nao encontrado');
            }
        } catch (\Exception $ex) {
            $response = [
                'status' => false,
                'msg' => $ex->getMessage(),
                'data' => []
            ];
        }
        return $response;
    }
    public function updateFornecedor($id, Request $request)
    {
        $response = [];
        try {
            $fornecedor = Fornecedor::find($id);
            if ($fornecedor == null) {
                throw new \Exception('Fornecedor não encontrado');
            }
            $fornecedor->fill(['nome' => $request->nome, 'site' => $request->site, 'uf' => $request->uf]);
            $fornecedor->save();
            $response = [
                'status' => true,
                'msg' => 'Fornecedor atualizado',
                'data' => $fornecedor
            ];
            return $fornecedor;
        } catch (\Exception $ex) {
            $response = [
                'status' => false,
                'msg' => $ex->getMessage(),
            ];
            return $response;
        }
    }
}
