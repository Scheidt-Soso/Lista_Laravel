<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'curso',
        'matricula',
        'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function scopeDeCurso($query, $curso)
    {
        return $query->where('curso', $curso);
    }

    public function scopeNomeContem($query, $palavra)
    {
        return $query->where('nome', 'like', "%{$palavra}%");
    }

    public function scopeRecentes($query)
    {
        return $query->latest('created_at');
    }
}