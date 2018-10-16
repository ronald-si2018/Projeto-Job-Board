<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    //
	public function index()
    {
        $usuario = User::orderBy('id', 'nome')->paginate(10);
        return view('usuarios.index',['usuarios' => $usuario]);
    }
  
    public function create()
    {
        return view('register.store');
    }
  
    public function store(Request $request)
    {
        //User::create($request->all());
        
        $usuario = new User;
        $usuario->name                           = $request->name;
        $usuario->email                          = $request->email;
		$usuario->password                       = $request->password;
        //$usuario->password2                      = $request->password2;
		$usuario->date_birth                     = $request->date_birth;
        $usuario->sexy                           = $request->sexy;
		$usuario->cpf_cnpj        	             = $request->cpf_cnpj;
        $usuario->tipo_id                        = 1;
		$usuario->phone1                         = $request->phone1;
        $usuario->phone2                         = $request->phone1;
        $usuario->address_id                     = 1;
        $usuario->save();
        //return redirect()->route('index')->with('message', 'Usuario cadastrado com sucesso!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function update(Request $request, $id)
    {
       //
    }
  
    public function destroy($id)
    {
       //
    }
}
