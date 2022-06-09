@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column">

    <div class="d-flex justify-content-center align-items-center flex-column">
        <div id="cadastrar_usuario">
            <h2 class="mb-4 mt-5 text-center">Cadastrar Usuário</h2>
            <form action=" {{ route('salvar_usuario') }}" method="POST" class="mb-4 d-flex">
                {{-- Token --}}
                @csrf

                {{-- Nome --}}
                <div class="me-3">
                    <label for="nome">Nome
                        <input type="text" name="nome" id="nome" class="form-control">
                    </label>
                </div>

                {{-- Login --}}
                <div class="me-3">
                    <label for="login">Login
                        <input type="text" name="login" id="login" class="form-control">
                    </label>
                </div>

                {{-- Senha --}}
                <div class="me-3">
                    <label for="senha">Senha
                        <input type="password" name="senha" id="senha" class="form-control">
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
        </div>
        {{-- Editar usuario --}}
        <div id="editar_usuario">

        </div>

        {{-- Lista --}}
        <p>
            <a id="carregar_lista" class="text-decoration-none " style="cursor: pointer">Visualizar todos
                usuarios
            </a>
        </p>
        <div id="lista">

        </div>
    </div>

    {{-- SCRIPTS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $('#carregar_lista').click(function() {
            $('#lista').load("usuario/lista");
        });


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
