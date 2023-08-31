<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="icon" id="mas" type="imge/x-icon" href="img/3000.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pleiades book</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/3000.png" id="mas" alt="logo/Home" width="80" height="80">
           </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Livros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filtro
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Fantasia</a></li>
                  <li><a class="dropdown-item" href="#">Terror</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Autores populares</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Em alta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="upar.php">Publicar</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Nome do livro" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              
            </form>
          </div>
        </div>
      </nav><br><br>

    <div class="Container-fluid">
    <div id="mainslider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators"></ol>
        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
        <li data-target="#mainSlider" data-slide-to="1" ></li>
        <li data-target="#mainSlider" data-slide-to="2" ></li>
    <div class="carousel-inner">
     <div class="carousel-item active">
        <img src="img/carosel-1" class="d-block w-100" alt="Livros populares">
      <div class="carosel-caption d-none d-md-block">
          <h3>Veja aqui alguns livros populares atualmente</h3>
            <p>Uma coletane com os livros mais famosos atualmente</p>
            <a href="#" class="main-btn">vamos dar uma olhada</a>
      </div>
      </div>


    </div>

    </div>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/carosel-1.png" id="caros" alt="Livros populares">
            <div class="carousel-caption d-none d-md-block">
                <h5>Livros Best Seller</h5>
                <p>Livros extremamente famosos e populares em todo mundo.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/carosel-2.png" id="caros" alt="Livros recentes">
            <div class="carousel-caption-d-none-d-md-block">
                <h5>Livros novos </h5>
                <p>Livros recentes disponibilizados a pouco tempo.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carosel-3.png" id="caros" alt="Livros recomendados">
            <div class="carousel-caption d-none d-md-block">
                <h5>Livros recomendados</h5>
                <p>Livros para qualquer um ler e se divertir.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


  <div class="cartoes-da-edicao" style="width: 18rem;">
  <img src="./img/carosel-1.png" class="card-img-top" alt="...">
  <div class="cartoes-da-edicao">
    <h5 class="card-title">Céu Estrelado</h5>
    <p class="card-text">As vezes o melhor é dar a bunda.</p>
    <a href="#" class="btn btn-primary">Ver livro</a>
  </div>
</div>

<h1>Lista de Arquivos</h1>
    <ul>
        <?php

        include 'conecxao.php';
        // Verifica a conexão
        if (!$conn) {
          die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
      }

      // Busca os dados dos arquivos no banco de dados
      $sql = "SELECT * FROM files";
      $result = mysqli_query($conn, $sql);

      // Verifica se há arquivos para exibir
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            //id
              $fileId = $row["id"];
              //titulo
              $fileTitle = $row["title"];
              //genero
              $fileGenre = $row["genre"];
              //arquivo
              $pdfFilename = $row["pdf_filename"];
              //imagem do livro
              $imageFilename = $row["image_filename"];

              //listar
              echo "<li>";
              echo "<img src='uploads/images/$imageFilename' alt='$fileTitle' height='100'><br>";
              echo "Título: $fileTitle<br>";
              echo "Gênero: $fileGenre<br>";
              echo "<a href='uploads/$pdfFilename'>Download</a>";
              echo "</li>";
          }
      } else {
          echo "Não há arquivos para exibir.";
      }

      mysqli_close($conn);
        
        ?>
    </ul>
</body>
</html>




  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>