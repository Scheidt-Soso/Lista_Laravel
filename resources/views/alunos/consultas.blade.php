@extends('layouts.app')

@section('titulo', 'Consultas Eloquent')

@section('conteudo')
    <h1>Consultas Eloquent</h1>

    <h2>Quantidade total de alunos</h2>
    <p>{{ $quantidade }}</p>

    <h2>Alunos do curso de Informática</h2>
    @forelse ($alunosDoCurso as $aluno)
        <li>{{ $aluno->nome }} — {{ $aluno->curso }}</li>
    @empty
        <p>Nenhum aluno encontrado.</p>
    @endforelse

    <h2>Alunos cujo nome contém "Ana"</h2>
    @forelse ($porPalavra as $aluno)
        <li>{{ $aluno->nome }}</li>
    @empty
        <p>Nenhum aluno encontrado.</p>
    @endforelse

    <h2>Alunos cadastrados recentemente</h2>
    @forelse ($recentes as $aluno)
        <li>{{ $aluno->nome }} — {{ $aluno->created_at->format('d/m/Y') }}</li>
    @empty
        <p>Nenhum aluno encontrado.</p>
    @endforelse
@endsection