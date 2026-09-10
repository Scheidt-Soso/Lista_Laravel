<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return 'Esta é a página Sobre do nosso projeto Laravel.';
});

Route::get('/contato', function () {
    return 'Esta é a página de Contato do nosso projeto Laravel.';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto ID: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria ID: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuario ID: {$id}";
});

Route::get('/alunos/consultas', [AlunoController::class, 'consultas'])->name('alunos.consultas');
Route::get('/alunos/por-curso', [AlunoController::class, 'porCurso'])->name('alunos.por-curso');

Route::resource('alunos', AlunoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';