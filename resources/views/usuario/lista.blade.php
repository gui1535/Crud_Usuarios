@extends('layout.principal')

<body>
    {{-- Tabela --}}
    <table class="table container">

        {{-- Cabecalho Tabela --}}
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        {{-- Corpo Tabela --}}
        <tbody>
            @foreach ($usuarios as $u)
                <tr>
                    <th scope="row">{{ $u->id }}</th>
                    <td>{{ $u->nome }}</td>
                    <td>{{ $u->login }}</td>
                    <td>{{ $u->senha }}</td>
                    <td>
                        <button type="button" class="btn btn-warning">
                            <a href="{{ route('editar_usuario', ['id' => $u->id]) }}">Editar</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('excluir_usuario', ['id' => $u->id]) }}">Deletar</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
