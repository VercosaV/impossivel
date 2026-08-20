<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Novo Usuário</h2>

    @if(session('sucesso'))
        <p style="color: green;">{{ session('sucesso') }}</p>
    @endif

    <!-- O action aponta para a rota nomeada que criamos -->
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf 

        <label>Nome:</label>
        <input type="text" name="name" required><br><br>

        <label>E-mail:</label>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Salvar Usuário</button>
    </form>
</body>
</html>