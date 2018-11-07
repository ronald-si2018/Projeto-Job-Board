<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;

class UsuarioController extends Controller
{
    const PESSOA_FISICA = 1;
    const PESSOA_JURIDICA = 2;

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
        $endereco = new Address;
        $usuario->name                           = $request->name;
        $usuario->email                          = $request->email;
		$usuario->password                       = $request->password;
        //$usuario->password2                      = $request->password2;
    
		if($request->cpf != ''){
            $usuario->sexy                       = $request->sexy;
            $usuario->date_birth                 = $request->date_birth;
            $usuario->cpf_cnpj                   = $request->cpf;    
            $usuario->tipo_id                    = PESSOA_FISICA;
            $endereco->cpf_cnpj_user             = $request->cpf;
            $endereco->cpf_service_provider      = null;
        }
        else{
            $usuario->cpf_cnpj                   = $request->cnpj;    
            $usuario->tipo_id                    = PESSOA_JURIDICA;   
            $endereco->cpf_cnpj_user             = null;
            $endereco->cpf_service_provider      = $request->cnpj;
        }

		$usuario->phone1                         = $request->phone1;
        //$usuario->phone2                         = $request->phone1;
        $endereco->street                        = $request->endereco;
        $endereco->zipcode                       = $request->cep;
        $endereco->number                        = $request->numero;
        $endereco->complement                    = $request->complemento;
        $endereco->neighborhood                  = $request->bairro;
        $endereco->state                         = $request->estado;
        $endereco->city                          = $request->cidade;
        
        
        $usuario->save();
        $endereco->save();
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
