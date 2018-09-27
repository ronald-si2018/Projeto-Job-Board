<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
	public function index()
    {
        $usuario = Usuario::orderBy('id', 'nome')->paginate(10);
        return view('usuarios.index',['usuarios' => $usuario]);
    }
  
    public function create()
    {
        return view('usuarios.create');
    }
  
    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario;
        $usuario->email                           = $request->email;
		$usuario->senha                           = $request->senha;
		$usuario->nome                           = $request->nome;
		$usuario->cpf        	                     = $request->cpf;
		$usuario->dataNascimento        = $request->data_nascimento;
		$usuario->telefone1                    = $request->telefone1;
		$usuario->telefone2                    = $request->telefone2;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('message', 'Usuario cadastrado com sucesso!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function update(UsuarioRequest $request, $id)
    {
       //
    }
  
    public function destroy($id)
    {
       //
    }
}
