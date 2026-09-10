@extends('layouts.app')

@section('titulo', 'Lista de Alunos')

@section('conteudo')
    <h1>Lista de Alunos</h1>

    @include('partials.alerta')

    @if (empty($alunos))
        <p>Nenhum aluno cadastrado até o momento.</p>
    @else
        <ul>
            @foreach ($alunos as $aluno)
                <li>{{ $aluno }}</li>
            @endforeach
        </ul>
    @endif
@endsection