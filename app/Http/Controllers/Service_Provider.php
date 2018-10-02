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
    }*/
    public function create()
    {
    	return view('Service_Provider.create');
    }
    public function store(ServiceProviderRequest $request)
    {
    	$service = new ServiceProvider;
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
    	return redirect()->route('index')->with('message', 'Cadastro Realizado com Sucesso');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
    	$service = Service_Provider::findOrFail($id);
    	return view('xzxx.edit',compact('service'));
    }
    public function update(ServiceProviderRequest $request, $id)
    {
    	$service = Service_Provider::findOrFail($id);
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
    	return redirect()->route('xxx.index')->with('message', 'Cadastro Atualizado com Sucesso');
    }
        public function destroy($id)
    {
        $service = Service_Provider::findOrFail($id);
        $service->delete();
        return redirect()->route('xxxx.index')->with('alert-success','Cadastro Excluido com Sucesso');
    }
}
