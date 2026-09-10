<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Aluno>
 */
class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->phoneNumber(),
            'curso' => fake()->randomElement(['Informática', 'Administração', 'Enfermagem', 'Engenharia', 'Direito']),
            'matricula' => fake()->unique()->numerify('MAT#######'),
        ];
    }
}