@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column">

    <h1 class="p-3">Usuários</h1>

    {{-- Form --}}
    <form action=" {{ route('atualizar_usuario', ['id' => $usuario->id]) }}" method="POST" class="container mb-5">

        {{-- Token --}}
        @csrf
        <div class="row">

            {{-- Nome --}}
            <div class="col-4">
                <div class="input-group mb-3">
                    <label for="nome">Nome
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $usuario->nome }}">
                    </label>
                </div>
            </div>

            {{-- Login --}}
            <div class="col-3">
                <div class="input-group mb-3">
                    <label for="login">Login
                        <input type="text" name="login" id="login" class="form-control" value="{{ $usuario->login }}">
                    </label>
                </div>
            </div>

            {{-- Senha --}}
            <div class="col-3">
                <div class="input-group mb-3">
                    <label for="senha">Senha
                        <input type="password" name="senha" id="senha" class="form-control" value="{{ $usuario->senha }}">
                    </label>
                </div>
            </div>

            {{-- Submit --}}
            <div class="col-2 d-flex -center align-items-center">
                <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </div>
        </div>
    </form>
</body>

</html>
