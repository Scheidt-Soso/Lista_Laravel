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
}