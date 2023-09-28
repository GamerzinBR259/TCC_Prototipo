<?php

// Inicializar a sessão (se já não estiver inicializada)
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // Se não estiver autenticado, redirecione para a página de login
    header("Location: http://localhost:8012/tcc/index.php");
    exit;
}

include 'conexao.php'; // Inclua seu arquivo de conexão com o banco de dados

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $sql = "SELECT * FROM files WHERE title LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        // Consulta executada com sucesso
        if (mysqli_num_rows($result) > 0) {
            // Exibir os resultados da pesquisa
            echo "<h2>Resultados da Pesquisa:</h2>";
            while ($row = mysqli_fetch_assoc($result)) {
                $fileId = $row["id"];
                $fileTitle = $row["title"];
                $imageFilename = $row["image_filename"];
        
                // Exibe a imagem como um link para a página de detalhes
                echo "<a href='det.php?id=$fileId'>";
                echo "<img src='uploads/images/$imageFilename' alt='$fileTitle' width='100'>";
                echo "</a><br>";
                echo "Título: $fileTitle<br>";
                // Adicione mais informações conforme necessário
            }
        } else {
            echo "Nenhum livro encontrado para a pesquisa: $search";
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
