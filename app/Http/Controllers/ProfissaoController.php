<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfissaoController extends Controller
{
    //
	public function index()
    {
        $profissao = Profissao::orderBy('created_at', 'desc')->paginate(10);
        return view('profissoes.index',['profissoes' => $profissao]);
    }
  
    public function create()
    {
        return view('profissoes.create');
    }
  
    public function store(ProfissaoRequest $request)
    {
        $profissao = new Profissao;
        $profissao->nomeProfissao        = $request->nome_profissao;
        $profissao->save();
        return redirect()->route('profissoes.index')->with('message', 'Profissão iserida com sucesso!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $profissao = Profissao::findOrFail($id);
        return view('profissoes.edit',compact('profissao'));
    }
  
    public function update(ProfissaoRequest $request, $id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->nomeProfissao        = $request->nome_profissao;
        $profissao->save();
        return redirect()->route('profissoes.index')->with('message', 'Profissão atualizada com sucesso!');
    }
  
    public function destroy($id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->delete();
        return redirect()->route('profissoes.index')->with('alert-success','Profissão deletada com sucesso!');
    }
}
