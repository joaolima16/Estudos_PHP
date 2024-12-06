<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => "Fornecedor 1", 
                'status' => "S", 
                'cnpj' => '000.00.00.00',
                'ddd' => "11",
                'telefone' => '119999-999',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => "N",
                'cnpj' => "000.00.00.0",
                'ddd' => "30", // Juiz de Fora
                'telefone' => "0000-000"
            ]
        ];
        return view("app.fornecedor.index", compact(var_name: "fornecedores"));
    }
}
