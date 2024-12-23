<?php

namespace App\Http\Controllers\api;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FornecedorApiController extends Controller
{
    public function getFornecedores(){
        $fornecedores = Fornecedor::all();
        return $fornecedores;
    }
    public function create(Request $request){
        $fornecedor = $request;
        dd($fornecedor);
        return 'teste';
    }
}
