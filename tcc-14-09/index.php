<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilo-log.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="projeto de login inicial de um site">
    <meta name="keywords" content="user, senha and log">
    <meta name="author" content="Felipe S. silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community book pleiades</title>
</head>
<body>

   
<div id="Login">
        <form method="post">
           <img src="img/logo.png">
            <div class="mb-3" id="login-form">
                <label for="username" class="form-label">Usuário</label>
                <input id="username" class="form-control" name="x" type="text" placeholder="Nome de usuário ou Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input id="password" class="form-control" name="w"  type="password" placeholder="Senha">
            </div>
            <br>
            <button type="submit" id="startAction">Login</button>
            <a href="creat.php">Criar conta</a><br>
            <a href="altersenha.php">Alterar Senha</a>
        </form>
    </div>



    <?php
   include('funcoesphp/login.php')
    ?>







</body>
</html>