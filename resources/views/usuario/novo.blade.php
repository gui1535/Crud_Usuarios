@extends('layout.principal')

<body class="d-flex justify-content-center align-items-center flex-column">

    <div class="d-flex justify-content-center align-items-center flex-column">

        <h2 class="mb-4">Cadastrar Usuário</h2>
        <form action=" {{ route('salvar_usuario') }}" method="POST" class="mb-4">
            {{-- Token --}}
            @csrf

            {{-- Nome --}}
            <div class="mb-3">
                <label for="nome">Nome
                    <input type="text" name="nome" id="nome" class="form-control">
                </label>
            </div>

            {{-- Login --}}
            <div class="mb-3">
                <label for="login">Login
                    <input type="text" name="login" id="login" class="form-control">
                </label>
            </div>

            {{-- Senha --}}
            <div class="mb-1">
                <label for="senha">Senha
                    <input type="password" name="senha" id="senha" class="form-control">
                </label>
            </div>

            {{-- Exibir senha --}}
            <div class="form-check mb-4">
                <input onclick="exibeSenha()" id="ms" class="form-check-input" type="checkbox">
                <label class="form-check-label" for="ms">
                    Mostrar Senha
                </label>
            </div>

            {{-- Submit --}}
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </div>
        </form>
        {{-- Lista --}}
        <p>
            <a class="text-decoration-none" href="{{ url('/usuario/lista') }}">Visualizar todos usuarios</a>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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

</html>
