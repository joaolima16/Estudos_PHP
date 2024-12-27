<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'teste@teste';
        $fornecedor->save();
        Fornecedor::create([
            'nome' => 'fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'Sp',
            'email' => 'teste2@teste'
        ]);
    }
}
