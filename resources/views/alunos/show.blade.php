@extends('layouts.app')

@section('titulo', 'Detalhes do Aluno')

@section('conteudo')
    <h1>Detalhes do Aluno</h1>

    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>Email:</strong> {{ $aluno->email }}</p>
    <p><strong>Telefone:</strong> {{ $aluno->telefone }}</p>
    <p><strong>Curso:</strong> {{ $aluno->curso }}</p>
    <p><strong>Matrícula:</strong> {{ $aluno->matricula }}</p>

    <p>
        <a href="{{ route('alunos.index') }}">Voltar para a lista</a>
    </p>
@endsection