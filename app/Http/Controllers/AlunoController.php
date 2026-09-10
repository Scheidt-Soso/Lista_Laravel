<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return 'Formulário para cadastrar um novo aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado com sucesso';
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    public function edit($id)
    {
        return "Formulário de edição do aluno de ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Aluno de ID: {$id} atualizado com sucesso";
    }

    public function destroy($id)
    {
        return "Aluno de ID: {$id} removido com sucesso";
    }

    public function consultas()
    {
        $alunosDoCurso = Aluno::deCurso('Informática')->get();
        $porPalavra = Aluno::nomeContem('Ana')->get();
        $recentes = Aluno::recentes()->take(5)->get();
        $quantidade = Aluno::count();

        return view('alunos.consultas', compact('alunosDoCurso', 'porPalavra', 'recentes', 'quantidade'));
    }
}