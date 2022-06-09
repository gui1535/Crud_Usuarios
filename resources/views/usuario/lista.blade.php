@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column">

    <style>
        @media screen and (max-width:1000px) {
            
        }
    </style>
    <div class="container d-flex justify-content-center align-items-center flex-column">
        <h1 class="page-header text-center mb-3 mt-3">Tabela de Usuarios</h1>
        <div style="" class="card">
            <div class="card-header pb-3 pt-3">
                <a class="text-decoration-none text-primary" href="./usuario.html">Salvar Novo</a>
            </div>
            <table class="table container table-striped">

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

                <tbody>
                    @foreach ($usuarios as $u)
                        <tr>
                            <th scope="row">{{ $u->id }}</th>
                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->login }}</td>
                            <td>{{ $u->senha }}</td>
                            <td>{{ $u->created_at }}</td>
                            <td>{{ $u->updated_at }}</td>
                            <td>
                                <button type="button" class="btn btn-warning">
                                    <a class="text-decoration-none text-light"
                                        href="{{ route('editar_usuario', ['id' => $u->id]) }}">Editar</a>
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
    </div>
</body>

</html>
