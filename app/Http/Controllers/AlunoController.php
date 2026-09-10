<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('created_at', 'desc')->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        Aluno::create($request->validated());

        return redirect()->route('alunos.index')->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $aluno->update($request->validated());

        return redirect()->route('alunos.index')->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index')->with('sucesso', 'Aluno removido com sucesso!');
    }

    public function consultas()
    {
        $alunosDoCurso = Aluno::deCurso('Informática')->get();
        $porPalavra = Aluno::nomeContem('Ana')->get();
        $recentes = Aluno::recentes()->take(5)->get();
        $quantidade = Aluno::count();

        return view('alunos.consultas', compact('alunosDoCurso', 'porPalavra', 'recentes', 'quantidade'));
    }

    public function porCurso()
    {
        $cursos = Curso::with('alunos')->get();

        return view('alunos.por-curso', compact('cursos'));
    }
}