<?php
include 'conexao.php';

// Inicializar a sessão (se já não estiver inicializada)
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // Se não estiver autenticado, redirecione para a página de login
    header("Location: http://localhost:8012/tcc/index.php");
    exit;
}

// Consulta para obter todos os livros da tabela 'files'
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<h2>Livros Disponíveis:</h2>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $fileId = $row["id"];
        $fileTitle = $row["title"];
        $imageFilename = $row["image_filename"];

        // Exibe a imagem como um link para a página de detalhes
        echo "<a href='det.php?id=$fileId'>";
        echo "<img src='uploads/images/$imageFilename' alt='$fileTitle' width='100'>";
        echo "</a><br>";
        echo "Título: $fileTitle<br>";


      
    }
} else {
    echo "Nenhum livro encontrado.";
}

mysqli_close($conn);
?>
