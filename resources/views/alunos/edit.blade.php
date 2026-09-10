@extends('layouts.app')

@section('titulo', 'Editar Aluno')

@section('conteudo')
    <h1>Editar Aluno</h1>

    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $aluno->nome) }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $aluno->email) }}">

        <label>Telefone:</label>
        <input type="text" name="telefone" value="{{ old('telefone', $aluno->telefone) }}">

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ old('curso', $aluno->curso) }}">

        <label>Matrícula:</label>
        <input type="text" name="matricula" value="{{ old('matricula', $aluno->matricula) }}">

        <button type="submit">Atualizar</button>
    </form>
@endsection