<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AlunoPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, [User::ROLE_ADMIN, User::ROLE_PROFESSOR]);
    }

    public function view(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, [User::ROLE_ADMIN, User::ROLE_PROFESSOR]);
    }

    public function create(User $user): bool
    {
        return $user->role === User::ROLE_ADMIN;
    }

    public function update(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, [User::ROLE_ADMIN, User::ROLE_PROFESSOR]);
    }

    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === User::ROLE_ADMIN;
    }

    public function restore(User $user, Aluno $aluno): bool
    {
        return $user->role === User::ROLE_ADMIN;
    }

    public function forceDelete(User $user, Aluno $aluno): bool
    {
        return $user->role === User::ROLE_ADMIN;
    }
}