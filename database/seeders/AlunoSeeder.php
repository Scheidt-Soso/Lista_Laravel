<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Aluno::factory(10)->create();
    }
}