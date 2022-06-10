<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Function para criar um novo usuario
    public function criar()
    {
        return view('usuario');
    }

    // Function que trabalha os dados dados enviados por HTTP
    public function store(Request $request)
    {
        // Metodo para criar
        Usuario::create([
            'nome' => $request->nome,
            'login' => $request->login,
            'senha' => bcrypt($request->senha) // Criptografar senha
        ]);
        return view('usuario.novo');
    }

    // Function para listar usuarios
    public function lista()
    {
        // Metodo para Listar todos
        $usuario = Usuario::all();
        return view('usuario.lista', ['usuarios' => $usuario]);
    }

    // Function para deletar usuarios
    public function deletar($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return "a Excluído com sucesso.";
    }

    // Function para editar usuarios
    public function editar($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuario.editar', ['usuario' => $usuario]);
    }

    // Function para atualizar usuarios
    public function atualizar(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update([
            'nome' => $request->nome,
            'login' => $request->login,
            'senha' => $request->senha,
        ]);
        return view('usuario.novo');
    }
}
