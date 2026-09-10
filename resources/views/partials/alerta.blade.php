@if (session('sucesso'))
    <div class="aviso-sucesso">
        <strong>{{ session('sucesso') }}</strong>
    </div>
@endif