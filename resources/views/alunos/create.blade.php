@extends('layouts.app')

@section('titulo', 'Cadastro de Aluno')

@section('conteudo')
    <h1>Cadastro de Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Telefone:</label>
        <input type="text" name="telefone" value="{{ old('telefone') }}">

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ old('curso') }}">

        <label>Matrícula:</label>
        <input type="text" name="matricula" value="{{ old('matricula') }}">

        <button type="submit">Salvar</button>
    </form>
@endsection