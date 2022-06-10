@extends('layout.principal')

<body class="container">
    {{-- Card --}}
    <div class="card mt-2 mb-2r">

        <h3 class="mb-2 mt-2 text-center">Tabela de Usuarios</h3>

        {{-- Tabela --}}
        <table class="table container table-striped table-light">

            {{-- Colunas Tabela --}}
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Atualização</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            {{-- Corpo Tabela --}}
            <tbody>

                @foreach ($usuarios as $u)
                    {{-- Dados --}}
                    <tr>
                        <th scope="row">{{ $u->id }}</th>
                        <td>{{ $u->nome }}</td>
                        <td>{{ $u->login }}</td>
                        <td>
                            @if (strlen($u->senha) > 1)
                                Criptografada
                            @else
                                Usuario sem senha
                            @endif
                        </td>
                        <td>{{ $u->created_at }}</td>
                        <td>{{ $u->updated_at }}</td>
                        <td>
                            <button type="button" class="btn btn-warning">
                                <a class="text-decoration-none text-light"
                                    href="{{ route('editar_usuario', ['id' => $u->id]) }}" id="editar">Editar</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a class="text-decoration-none text-light"
                                    href="{{ route('excluir_usuario', ['id' => $u->id]) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
