<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\Telefone;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    private $telefones_controller;
    private $pessoa;

    public function __construct(TelefonesController $telefone_controller)
    {
        $this->telefones_controller = $telefone_controller;
        $this->pessoa = new Pessoa();
    }

    public function index()
    {
        $list_pessoas = Pessoa::all();
        return view('pessoas.index', [
            'pessoas' => $list_pessoas
        ]);
    }

    public function criarPessoa()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        $pessoa = Pessoa::create($request->all());

        if ($request->ddd && $request->telefone) {
            $telefone = new Telefone();
            $telefone->ddd = $request->ddd;
            $telefone->telefone = $request->telefone;
            $telefone->pessoa_id = $pessoa->id;
            $this->telefones_controller->create($telefone);
        }

        return redirect("/pessoas")->with("message", "Pessoa criada com sucesso!");
    }

    public function excluir($id)
    {
        return view('pessoas.delete', [
            'pessoa' => $this->getPessoa($id)
        ]);
    }

    public function destroy($id)
    {
        $this->getPessoa($id)->delete();
        return redirect(url('pessoas'))->with('success', 'Excluido!');
    }

    public function editar($id)
    {
        return view('pessoas.edit', [
            'pessoa' => $this->getPessoa($id)
        ]);
    }

    public function update(Request $request)
    {
        $pessoa = $this->getPessoa($request->id);
        $pessoa->update($request->all());
        return redirect('/pessoas');
    }

    protected function getPessoa($id)
    {
        return $this->pessoa->find($id);
    }
}
