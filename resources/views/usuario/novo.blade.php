@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column" style="width:100vw; height: 100vh;">

    <div class="d-flex justify-content-center align-items-center flex-column">

        <h2 class="mb-4 mt-5 text-center">Cadastrar Usuário</h2>
        <form action=" {{ route('salvar_usuario') }}" method="POST" class="mb-4 d-flex flex-column">
            {{-- Token --}}
            @csrf

            {{-- Nome --}}
            <div class="mb-3">
                <label for="nome">Nome
                    <input required maxlength="100" type="text" name="nome" id="nome" class="form-control">
                </label>
            </div>

            {{-- Login --}}
            <div class="mb-3">
                <label for="login">Login
                    <input required maxlength="16" type="text" name="login" id="login" class="form-control">
                </label>
            </div>

            {{-- Senha --}}
            <div class="mb-3">
                <label for="senha">Senha
                    <input required maxlength="64" type="password" name="senha" id="senha" class="form-control">
                </label>
                {{-- Exibir senha --}}
                <div class="form-check mb-4">
                    <input onclick="exibeSenha()" id="ms" class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="ms">
                        Mostrar Senha
                    </label>
                </div>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </div>

        </form>


        {{-- Lista --}}
        <p>
            <a id="" class="text-decoration-none" style="cursor: pointer" href="{{ URL('/usuario/lista') }}">Visualizar tabela
            </a>
        </p>
    </div>

    <script>
        function exibeSenha() {
            var exSenha = document.getElementById("senha");
            if (exSenha.type === "password") {
                exSenha.type = "text";
            } else {
                exSenha.type = "password";
            }
        }
    </script>
</body>