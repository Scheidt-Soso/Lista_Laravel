<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:alunos,email,' . $this->route('aluno'),
            'telefone' => 'nullable|string|max:20',
            'curso' => 'required|string|max:100',
            'matricula' => 'required|string|max:20|unique:alunos,matricula,' . $this->route('aluno'),
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.max' => 'O nome não pode ter mais que :max caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Informe um endereço de email válido.',
            'email.unique' => 'Já existe um aluno com este email.',
            'telefone.max' => 'O telefone não pode ter mais que :max caracteres.',
            'curso.required' => 'O campo curso é obrigatório.',
            'curso.max' => 'O curso não pode ter mais que :max caracteres.',
            'matricula.required' => 'O campo matrícula é obrigatório.',
            'matricula.unique' => 'Já existe um aluno com esta matrícula.',
            'matricula.max' => 'A matrícula não pode ter mais que :max caracteres.',
        ];
    }
}