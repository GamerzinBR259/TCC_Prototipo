<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<h1>Upload de Arquivo</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="genre">Gênero:</label>
        <input type="text" name="genre" id="genre"><br>
        <input type="file" name="fileToUpload" id="fileToUpload" required><br>
        <input type="submit" value="Enviar" name="submit">


        <h2>Enviar Imagem</h2>
        <input type="file" name="imageFile" enctype="multipart/form-data">
    </form>
</body>
</html>







</body>
</html>