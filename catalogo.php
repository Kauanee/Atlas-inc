<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Catalogo de Filmes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="catalogoFilme.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <nav>
    <img src="imagens/logoverde.png" class="logo" alt="Receitas de Código">
    <ul>
      <li>
        <a href="catalogo.html">Filmes</a>
      </li>
      <li>
        <a href="combo.html">Combos</a>
      </li>
      <li>
        <a href="pagePerfil.html"> Perfil </a>
      </li>
    </ul>
  </nav>
  <img src="imagens/aladin1.png" class="img-fluid" alt="Receitas de Código">
  <p id="font-face">
    Aladdin
  </p>


  <div class="descricao">
    <div id="div1">
      Musical
    </div>
    <div id="div1">
      Fantasia
    </div>
    <div id="div1">
      Romance
    </div>
  </div>

  <p id="font-face1">
    Em Cartaz
  </p>
  <!-- Swiper -->
  <form action="selectMovies.php" method="POST" enctype="multipart/form-data">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php 

        include("selectMovies.php");
        foreach ($listar_filmes as $linha) { 
          echo '<a href="pageDescFilm.php?codigo='.$linha['cod_movies'].'"><div class="swiper-slide" id="1"><img src="' .$linha['cartaz_movies'].'" ></div></a>';
        }
        ?>       
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </form>

  <p id="font-face2">
    Lançamentos
  </p>

  <form action="selectMovies.php" method="POST" enctype="multipart/form-data">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" name="" id="10"></div>
        <div class="swiper-slide" name="" id="11"></div>
        <div class="swiper-slide" name="" id="12"></div>
        <div class="swiper-slide" name="" id="13"></div>
        <div class="swiper-slide" name="" id="14"></div>
        <div class="swiper-slide" name="" id="15"></div>
        <div class="swiper-slide" name="" id="16"></div>
        <div class="swiper-slide" name="" id="17"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </form>

  <p id="font-face2">
    Em breve
  </p>

  <form action="selectMovies.php" method="POST" enctype="multipart/form-data">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" name="" id="18"></div>
        <div class="swiper-slide" name="" id="19"></div>
        <div class="swiper-slide" name="" id="20"></div>
        <div class="swiper-slide" name="" id="21"></div>
        <div class="swiper-slide" name="" id="22"></div>
        <div class="swiper-slide" name="" id="23"></div>
        <div class="swiper-slide" name="" id="24"></div>
        <div class="swiper-slide" name="" id="25"></div>
        <div class="swiper-slide" name="" id="26"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </form>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 5,
      spaceBetween: 50,
      slidesPerGroup: 5,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    }



    );
  </script>
</body>

</html>