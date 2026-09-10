@extends('layouts.app')

@section('titulo', 'Alunos por Curso')

@section('conteudo')
    <h1>Alunos vinculados aos seus Cursos</h1>

    @foreach ($cursos as $curso)
        <h2>{{ $curso->nome }}</h2>

        @if ($curso->alunos->isEmpty())
            <p>Nenhum aluno neste curso.</p>
        @else
            <ul>
                @foreach ($curso->alunos as $aluno)
                    <li>{{ $aluno->nome }} — Matrícula: {{ $aluno->matricula }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
@endsection