<h3>Fornecedores</h3>

@isset($fornecedores)

    @foreach($fornecedores as $index => $fornecedor)
        teste
        <p>Fornecedor: {{$fornecedor['nome']}}</p>
        <br>
        {{$fornecedor['nome']}}
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não prenchido' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
    @endforeach
@endisset
