# Lista Laravel

Projeto desenvolvido em Laravel para a disciplina, abordando os principais conceitos do framework por meio de temas e atividades práticas.

## Integrantes

- Scheidt-Soso (scheidtsalves@gmail.com)
- EJSeguro (eduardojosesegurodeoliveira@gmail.com)

## Estrutura (Temas e Atividades)

Cada tema foi desenvolvido em uma branch e cada atividade corresponde a um commit.

### Tema 1: Rotas
- **ATV 1:** Rotas `/sobre`, `/alunos` e `/contato`, retornando texto;
- **ATV 2:** Rotas com parâmetro `/produto/{id}`, `/categoria/{id}` e `/usuario/{id}`.

### Tema 2: Controllers
- **ATV 3:** `AlunoController`;
- **ATV 4:** Métodos CRUD `index()`, `show()`, `create()`, `store()`, `edit()`, `update()` e `destroy()`.

### Tema 3: Views
- **ATV 5:** Pasta `resources/views/alunos`;
- **ATV 6:** Views principais da aplicação.

### Tema 4: Blade
- **ATV 7:** Layout em `resources/views/layouts/app.blade.php`;
- **ATV 8:** Páginas `home`, `alunos/index`, `alunos/show` e `alunos/create`;
- **ATV 9:** Diretivas `@extends`, `@section`, `@include`, `@if` e `@foreach`;
- **DESAFIO:** Menu de navegação compartilhado por todas as views.

### Tema 5: Models e Eloquent
- **ATV 10:** Model `Aluno`;
- **ATV 11:** Consultas por curso, por nome, cadastros recentes e quantidade de alunos.

### Tema 6: Seeders
- **ATV 12:** `AlunoSeeder` com 10 alunos gerados.

### Tema 7: CRUD
- **ATV 13:** CRUD completo para Alunos no controller.

### Tema 8: Forms e Requests
- **ATV 14:** Formulário de cadastro de Aluno;
- **ATV 15:** Request de validações para Alunos;
- **DESAFIO:** Mensagens personalizadas para as validações.

### Tema 9: Relacionamentos
- **ATV 16:** Model `Curso`, relacionado com `Aluno`;
- **ATV 17:** Relacionamento via chave estrangeira;
- **DESAFIO:** View que exibe todos os alunos vinculados aos seus cursos.

### Tema 10: Autenticação
- **ATV 18:** Breeze adicionado ao projeto;
- **ATV 19:** Relacionamento entre `User` e `Aluno`;
- **ATV 20:** Campo `role` no `User` (admin e professor).

### Tema 11: Middleware
- **ATV 21:** Middleware de controle de acesso para rotas como `/admin` e `/professor`.

### Tema 12: Policies
- **ATV 22:** Policy para proteger ações sobre um registro;
- **ATV 23:** Apenas Admin cadastra e exclui Aluno; Professor pode editar.

## Como executar

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

## Branches

| Branch                | Tema                     |
|-----------------------|--------------------------|
| `tema-1-rotas`        | Rotas                    |
| `tema-2-controllers`  | Controllers              |
| `tema-3-views`        | Views                    |
| `tema-4-blade`        | Blade                    |
| `tema-5-models`       | Models e Eloquent        |
| `tema-6-seeders`      | Seeders                  |
| `tema-7-crud`         | CRUD                     |
| `tema-8-forms`        | Forms e Requests         |
| `tema-9-relacionamentos` | Relacionamentos       |
| `tema-10-auth`        | Autenticação             |
| `tema-11-middleware`  | Middleware               |
| `tema-12-policies`    | Policies                 |