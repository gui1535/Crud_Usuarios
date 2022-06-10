@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column" style="width:100vw; height: 100vh;">

    <div class="d-flex justify-content-center align-items-center flex-column">

        <h2 class="mb-4 mt-5 text-center">Editar Usuário</h2>

        <form action=" {{ route('atualizar_usuario', ['id' => $usuario->id]) }}" method="POST"
            class="mb-4 d-flex flex-column">
            {{-- Token --}}
            @csrf

            {{-- ID --}}
            <div class="mb-3" style="width: 80px">
                <label for="nome">ID
                    <input type="text" disabled name="nome" id="nome" class="form-control"
                        value="{{ $usuario->id }}">
                </label>
            </div>

            {{-- Nome --}}
            <div class="mb-3">
                <label for="nome">Nome
                    <input required maxlength="100" type="text" name="nome" id="nome" class="form-control"
                        value="{{ $usuario->nome }}">
                </label>
            </div>

            {{-- Login --}}
            <div class="mb-3">
                <label for="login">Login
                    <input required maxlength="16" type="text" name="login" id="login" class="form-control"
                        value="{{ $usuario->login }}">
                </label>
            </div>

            {{-- Senha --}}
            <div class="mb-3">
                <label for="senha">Senha
                    <input required maxlength="64" type="password" name="senha" id="senha" class="form-control"
                        value="">
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
                <button type="submit" class="btn btn-outline-primary" onclick='return pergunta(); '>Salvar</button>
            </div>
        </form>

        {{-- Lista --}}
        <p class="d-flex flex-column justify-content-center align-items-center">
            <a class="text-decoration-none mb-2" style="cursor: pointer" href="{{ URL('/') }}">
                Voltar para pagina inicial
            </a>
            <a class="text-decoration-none" style="cursor: pointer" href="{{ URL('/usuario/lista') }}">
                Visualizar tabela
            </a>
        </p>

    </div>

    {{-- SCRIPTS --}}
    <script>
        function pergunta() {
            return confirm(`Confirma a edição do usuario ${document.getElementById("nome").value}?`);
        }

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

</html>
