<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilo-creat.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="login inicial ">
    <meta name="keywords" content="user, senha, login">
    <meta name="author" content="Felipe S. Silva">
    <title>Community book pleiades</title>
</head>
<body>

    <div id="Login">
        <form method="post">
            <h2>Create account</h2>
            <img src="img/logo.png" alt="Logo">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input id="usuario" class="form-control" name="usuario" placeholder="Nome de usuário " required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" name="email" placeholder="Email" type="email" required>
                <div id="emailError" class="error-message"></div>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input id="senha" class="form-control" name="senha" placeholder="Senha" type="password" required>
            </div>
            <br>
            <button type="submit">Create</button>
        </form>
    </div>
    <script src="jv/creat.js"></script>

    <?php
   include('funcoesphp/register.php')
    ?>

</body>
</html>
