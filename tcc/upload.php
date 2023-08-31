<?php
include 'conecxao.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadOk = 1; // Inicializa a variável $uploadOk

// Check if file is a PDF or image
if (isset($_POST["submit"])) {
    if ($imageFileType !== "pdf" && !in_array($imageFileType, array("jpg", "jpeg", "png", "gif"))) {
        echo "Desculpe, apenas arquivos PDF, JPG, JPEG, PNG e GIF são permitidos.";
        $uploadOk = 0;
    }
}

// Restante do código de validação do arquivo (tamanho, existência, etc...)

// Se tudo estiver ok, tenta fazer o upload do arquivo
if ($uploadOk == 1) {
    // Upload do arquivo PDF
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Upload da imagem (caso seja enviado)
        if (isset($_FILES["imageFile"]) && $_FILES["imageFile"]["error"] === UPLOAD_ERR_OK) {
            $imageTargetDir = "uploads/images/";
            $imageTargetFile = $imageTargetDir . basename($_FILES["imageFile"]["name"]);
            $imageFileType = strtolower(pathinfo($imageTargetFile, PATHINFO_EXTENSION));

            // Verifica se é uma imagem válida
            if (in_array($imageFileType, array("jpg", "jpeg", "png", "gif"))) {
                if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $imageTargetFile)) {
                    $title = $_POST["title"];
                    $genre = $_POST["genre"];
                    $pdfFilename = basename($_FILES["fileToUpload"]["name"]);
                    $imageFilename = basename($_FILES["imageFile"]["name"]);

                    // Insere os dados na tabela
                    $sql = "INSERT INTO files (title, genre, pdf_filename, image_filename) VALUES ('$title', '$genre', '$pdfFilename', '$imageFilename')";
                    if (mysqli_query($conn, $sql)) {
                        echo "O arquivo PDF e a imagem foram enviados e registrados no banco de dados.";
                    } else {
                        echo "Ocorreu um erro ao registrar os arquivos no banco de dados: " . mysqli_error($conn);
                    }
                } else {
                    echo "Desculpe, ocorreu um erro ao enviar a imagem.";
                }
            } else {
                echo "Desculpe, apenas arquivos de imagem (JPG, JPEG, PNG e GIF) são permitidos para a imagem.";
            }
        } else {
            // Se nenhum arquivo de imagem foi enviado, insere apenas os dados do arquivo PDF na tabela
            $title = $_POST["title"];
            $genre = $_POST["genre"];
            $pdfFilename = basename($_FILES["fileToUpload"]["name"]);

            // Insere os dados na tabela
            $sql = "INSERT INTO files (title, genre, pdf_filename) VALUES ('$title', '$genre', '$pdfFilename')";
            if (mysqli_query($conn, $sql)) {
                echo "O arquivo PDF foi enviado e registrado no banco de dados.";
            } else {
                echo "Ocorreu um erro ao registrar o arquivo no banco de dados: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
    } else {
        echo "Desculpe, ocorreu um erro ao enviar o arquivo PDF.";
    }
}
?>
