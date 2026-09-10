<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de todos os alunos';
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
        return "Exibindo dados do aluno de ID: {$id}";
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
}