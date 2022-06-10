@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column">

    <div class="d-flex justify-content-center align-items-center flex-column">

        <h2 class="mb-4 mt-5 text-center">Cadastrar Usuário</h2>
        <form action=" {{ route('salvar_usuario') }}" method="POST" class="mb-4 d-flex">
            {{-- Token --}}
            @csrf

            {{-- Nome --}}
            <div class="me-3">
                <label for="nome">Nome
                    <input required maxlength="100" type="text" name="nome" id="nome" class="form-control">
                </label>
            </div>

            {{-- Login --}}
            <div class="me-3">
                <label for="login">Login
                    <input required maxlength="16" type="text" name="login" id="login" class="form-control">
                </label>
            </div>

            {{-- Senha --}}
            <div class="me-3">
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
            <div class="pt-4">
                <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </div>

        </form>


        {{-- Lista --}}
        <p>
            <a id="" class="text-decoration-none" target="_blank" style="cursor: pointer"
                href="{{ url('usuario/lista') }}">Visualizar tabela em uma nova aba
            </a>
        </p>
        <div id="lista">

        </div>
    </div>

    {{-- SCRIPTS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        window.onload = function() {
            $('#lista').load("usuario/lista");
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
