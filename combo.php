<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="estilodocombo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<title>Página de Combos</title>
</head>

<body >

   <nav>
  <img src="imagens/logoverde.png" class="menu" alt="Receitas de Código"> 
  <ul>
      <li>
        
        <a class="text-decoration-none" href="catalogo.php" style="color:rgb(255, 248, 248)">Filmes</a>
      </li>
      <li>
              <a class="text-decoration-none" href="combo.php" style="color:rgb(255, 255, 255)">Combos</a>
          </li>
          <li>
                <a class="text-decoration-none" href="pagePerfil.html" style="color:rgb(255, 255, 255)"> Perfil </a>
              </li>
  </ul>
   </nav>
 <div class="combinho">
    <img src="imagens/Combinho.png" width="100%" class="img-fluid" alt="Receitas de Código">
 </div>

  <div class="text" >
      <h1 class="card-title text-center" style="color:#6DA437">Combos</h1>
  </div>

    <form action="selectCombos.php" method="POST" enctype="multipart/form-data">
    <div class="row mt-4">
      <div class="col">
        <div class="card" name="pequeno">
        <?php 
            include("selectCombos.php");
           
            foreach ($listar_combo as $linha) { 
              echo '
              <div class="swiper-slide">
                <a href="combo.php?codigo='.$linha['cod_combo'].'"><img style:"height:auto" src="' .$linha['imagem_combo'].'" ></a>
              </div>';
            }?> 
          <div class="card-body ">
            <h5 class="card-title text-center" style="color:#EA3DEF">Combo Pequeno</h5>
            <h5 class="text-center" style="color:#EA3DEF">R$12,00</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" name="medio">
        <?php 
            include("selectCombos.php");
           
            foreach ($listar_combo as $linha) { 
              echo '
              <div class="swiper-slide">
                <a href="combo.php?codigo='.$linha['cod_combo'].'"><img style:"height:auto" src="' .$linha['imagem_combo'].'" ></a>
              </div>';
            }?> 
          <div class="card-body">
            <h5 class="card-title text-center" style="color:#EB3347">Combo Médio</h5>
            <h5 class="text-center" style="color:#EB3347">R$17,00</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" name="grande">
        <?php 
            include("selectCombos.php");
           
            foreach ($listar_combo as $linha) { 
              echo '
              <div class="swiper-slide">
                <a href="combo.php?codigo='.$linha['cod_combo'].'"><img style:"height:auto" src="' .$linha['imagem_combo'].'" ></a>
              </div>';
            }?> 
          <div class="card-body">
            <h5 class="card-title text-center" style="color:#6DA437">Combo Grande</h5>
            <h5 class="text-center" style="color:#6DA437">R$22,00</h5>
          </div>
        </div>
      </div>
    </div>
    </form>
</body>

</html>