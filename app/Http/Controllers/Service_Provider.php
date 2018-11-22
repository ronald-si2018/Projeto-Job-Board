<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceProvider;


class Service_Provider extends Controller
{
	/*public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('products.index',['products' => $products]);
    }
    public function create()
    {
    	return view('Service_Provider.create');
    }*/
    public function store(Request $request)
    {
        //User::create($request->all());
        
        $service = new ServiceProvider;
        $endereco = new Address;
        $service->name                           = $request->name;
        $service->email                          = $request->email;
        $service->password                       = $request->password;
        //$service->password2                      = $request->password2;
    
        if($request->cpf != ''){
            $service->sexy                       = $request->sexy;
            $service->date_birth                 = $request->date_birth;
            $service->cpf_cnpj                   = $request->cpf;
            $endereco->cpf_service_provider      = null;
        }

        $service->phone1                         = $request->phone1;
        $endereco->street                        = $request->endereco;
        $endereco->zipcode                       = $request->cep;
        $endereco->number                        = $request->numero;
        $endereco->complement                    = $request->complemento;
        $endereco->neighborhood                  = $request->bairro;
        $endereco->state                         = $request->estado;
        $endereco->city                          = $request->cidade;
        
        
        $service->save();
        $endereco->save();
        //return redirect()->route('index')->with('message', 'Usuario cadastrado com sucesso!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
    //	$service = Service_Provider::findOrFail($id);
    //	return view('xzxx.edit',compact('service'));
    }
    public function update(ServiceProviderRequest $request, $id)
    {
    /*	$service = Service_Provider::findOrFail($id);
    	$service->name  = $request->name;
    	$service->email = $request->email;
        $service->password = $request->password;
    	$service->cpf   = $request->cpf;
    	$service->sexy = $request->sexy;
        $service->data_nascimento = $request->data_nascimento;
    	$service->profissao= $request->profissao;
    	$service->telephone1= $request->telephone1;
    	$service->telephone2= $request->telephone2;
    	$service->landline = $request->landline;
    	$service->save();
    	return redirect()->route('xxx.index')->with('message', 'Cadastro Atualizado com Sucesso'); */
    }
        public function destroy($id)
    {
     /*   $service = Service_Provider::findOrFail($id);
        $service->delete();
        return redirect()->route('xxxx.index')->with('alert-success','Cadastro Excluido com Sucesso'); */
    }
}
