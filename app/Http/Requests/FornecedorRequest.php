<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:150',
            'uf' => 'required|string|max:2',
            'email' => 'required|email|max:200',
            'site' => 'required|string|max:100'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'nome is required',
            'uf.required' => 'uf is required',
            'email.required' => 'email is required',
            'site.required' => 'site is required',
        ];
    }
}
