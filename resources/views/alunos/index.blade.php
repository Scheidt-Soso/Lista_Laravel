@extends('layouts.app')

@section('titulo', 'Lista de Alunos')

@section('conteudo')
    <h1>Lista de Alunos</h1>

    @include('partials.alerta')

    @if ($alunos->isEmpty())
        <p>Nenhum aluno cadastrado até o momento.</p>
    @else
        <ul>
            @foreach ($alunos as $aluno)
                <li>
                    <a href="{{ route('alunos.show', $aluno) }}">{{ $aluno->nome }}</a>
                    — {{ $aluno->curso }}

                    <a href="{{ route('alunos.edit', $aluno) }}">Editar</a>

                    <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Excluir este aluno?')">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection