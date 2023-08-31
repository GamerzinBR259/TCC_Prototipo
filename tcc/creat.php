<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="css/estilo-log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="projeto de login inicial de um site">
    <meta name="keywords" content="user,senha and log">
    <meta name="author" content="Felipe S. silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creat acont</title>
</head>
<body>

    <div id="Login">
        <form method="post">
            <h2>Criar Conta</h2>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Usuário</label>
                <input class="form-control" name="y" type="text" placeholder="Email ou nome de usuário">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input class="form-control" name="t" placeholder="Email" oninput="validacaoEmail(this)" type="text">
                <div id="emailError" class="error-message"></div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Senha</label>
                <input class="form-control" name="b" placeholder="Senha" type="password">
            </div>
            <br>
            <button type="submit">Criar</button>
            <a href="index.php">Já tem uma conta? Entre Aqui</a>
        </form>
    </div>
    <script src="java/creat.js"></script>

    <?php

 // Incluir o arquivo de conexão com o banco de dados
 include 'conecxao.php';
 
 // Função para validar um endereço de e-mail
 function is_valid_email($email) {
     return filter_var($email, FILTER_VALIDATE_EMAIL);
 }
 
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     // Filtrar e validar os dados de entrada
     $usuario = trim($_POST["y"]);
     $email = trim($_POST["t"]);
     $senha = isset($_POST["b"]) ? $_POST["b"] : ""; // Senha pode ser opcional
 
     // Verificar se o e-mail fornecido é válido
     if (!is_valid_email($email)) {
         echo "Erro: Endereço de e-mail inválido.";
         exit;
     }
 
     // Gerar uma senha aleatória se não foi fornecida pelo usuário
     if (empty($senha)) {
         $senha = bin2hex(random_bytes(8)); // Gera uma senha de 16 caracteres aleatoriamente (hexadecimal)
     }
 
     // Criptografar a senha usando password_hash
     $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
 
     // Usar declarações preparadas para evitar ataques de injeção SQL
     $stmt = $conn->prepare("INSERT INTO logi (usuario, email, senha) VALUES (?, ?, ?)");
     $stmt->bind_param("sss", $usuario, $email, $senha_hash);
 
     if ($stmt->execute()) {
         echo "Novo cadastro feito com êxito";
         // Redirecionar para a página correta após o cadastro
         header("Location: http://localhost:8012/tcc/menu.php");
         exit;
     } else {
         echo "Erro ao inserir dados no banco de dados.";
     }
 
     $stmt->close();
     $conn->close();
 }
 ?>
 


</body>
</html>
