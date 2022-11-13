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
<title>COMBO</title>
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

  <div class="row mt-4">  
    <?php 
      include("selectCombos.php");  
        foreach ($listar_combo as $linha) { 
          echo '<div class="col">
                <div class="card">
                  <img style="width:100%;" src="'.$linha['imagem_combo'].'" >
                    <div class="card-body ">
                      <h5 class="card-title text-center" style="color:#EA3DEF">'.$linha['tamanho_combo'].'</h5>
                      <h5 class="text-center" style="color:#EA3DEF"> '.$linha['preco_combo'].'</h5>
                    </div>
                </div>
                </div>';
      }?> 
  </div>
  <br><br>
      <div class="text-center txt"><b>Atlas-inc</b><br>Kauane, Nicole e Gustavo</div>
</body>
</html>