@extends('layout.principal')

<body class="container d-flex justify-content-center" style="width:100vw; height: 100vh;">
    {{-- Card --}}
    <div class="card mt-2 mb-2!" style="width:100%; height: 100%;">
        <div class="d-flex align-items-center justify-content-around">
            <a href="{{ URL('/') }}" class="text-decoration-none">Cadastrar novo usuario</a>
            <h3 class="mb-2 mt-2 text-center">Tabela de Usuarios</h3>
            <a href="{{ URL('/usuario/lista') }}" class="text-decoration-none">Atualizar tabela</a>
        </div>

        {{-- Tabela --}}
        <table class="table container table-striped table-light">


            {{-- Colunas Tabela --}}
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            {{-- Corpo Tabela --}}
            <tbody>
                {{-- Foreach --}}
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
                        {{-- Ações --}}
                        <td>
                            <a class="text-decoration-none text-light"
                                href="{{ route('editar_usuario', ['id' => $u->id]) }}" id="editar">
                                <button type="button" class="btn btn-warning">
                                    Editar
                                </button>
                            </a>
                            <a class="text-decoration-none text-light"
                                href="{{ route('excluir_usuario', ['id' => $u->id]) }}">
                                <button type="button" class="btn btn-danger">
                                    Deletar
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
