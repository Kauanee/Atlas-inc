<?php
    include("conexao.php");

    $codigo = $_GET["codigo"];

    $comando = $pdo->prepare("SELECT cod_movies, nome_movies, classificacao_movies, descricao_movies, cartaz_movies, categoria_movies  FROM movies WHERE cod_movies = :codigo;");

    $comando->bindValue(":codigo",$codigo);

    $comando->execute();

    
    if($comando->rowCount() >= 1)
    {
       
        $listar_filme = $comando->fetch();
    }else{
        echo("Não há Filmes.");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filme <?php echo $listar_filme['nome_movies']?></title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="DescFilm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type="text/javascript" src="reserva.js"></script>
</head>

<body>
   
<nav>
    <img src="imagens/logoverde.png" class="logo" alt="Receitas de Código">
    <ul>
      <li>
        <a href="catalogo.php">Filmes</a>
      </li>
      <li>
        <a href="pagePerfil.html"> Perfil </a>
      </li>
      <li>
      <a href="pageListaPedidos.php">Meus Pedidos</a>
            </li> 
    </ul>
  </nav>
  <img src="imagens/aladin1.png" class="img-fluid" alt="Receitas de Código">
  

    <div class="poster"> 
            <img id="filme" src=" <?php echo $listar_filme['cartaz_movies'];?>">

    </div>

    <div class="title">     
       <?php
            echo $listar_filme['nome_movies'];
        ?></div>
        <br>
    <div class="descricao">
       <?php
            echo $listar_filme['categoria_movies'];
        ?>
    </div>

    <div class="subtitle">
        <?php
            echo $listar_filme['descricao_movies'];
        ?>
    </div>

    <div class="classiificacao"> 
    <?php
            echo $listar_filme['classificacao_movies'];
        ?>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="cadeiras">

        <hr>
        <center>
            <div class="filas">
                <div class="row">
                    <div class="col-md-3">
                        <img src="imagens/pufflivre.png" class="img-responsive foto-legenda"
                            name="PoltronaLivreLegenda" />
                        <p>Disponível</p>
                    </div>
                    <div class="col-md-3">
                        <img src="imagens/puffselecionado.png" class="img-responsive foto-legenda"
                            name="PoltronaLivreLegenda" />
                        <p>Escolhida</p>
                    </div>
                    <div class="col-md-3">
                        <img src="imagens/puffreservado.png" class="img-responsive foto-legenda"
                            name="PoltronaLivreLegenda" />
                        <p>Ocupada</p>
                    </div>
                    <div class="col-md-3">
                        <img src="imagens/puffdeficiente.png" class="img-responsive deficiente-legenda"
                            name="PoltronaLivreLegenda" />
                        <p>Preferencial</p>
                    </div>
                </div>
        </center>
        <hr>
        <center>
          
            <div class="row ">
                <div class="col-xs-12 ">
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona01Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona02Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona03Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona04Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona05Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona06Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona07Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona08Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona09Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona10Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona11Fileira1" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="<Poltrona12Fileira1></Poltrona12Fileira1>" onclick="VerificarPoltronas(name, id);" />
                    </div>
                </div>
            </div>
            <br />
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona01Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona02Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona03Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona04Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 col-md-offset-2">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona05Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona06Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona07Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona08Fileira2" onclick="VerificarPoltronas(name, id);" />
                    </div>
                </div>
            </div>
            <br />
           
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona01Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona02Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona03Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona04Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 col-md-offset-2">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona05Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona06Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona07Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona08Fileira3" onclick="VerificarPoltronas(name, id);" />
                    </div>
                </div>
            </div>
            <br />
          
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona01Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona02Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona03Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona04Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 col-md-offset-2">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona05Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona06Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona07Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona08Fileira4" onclick="VerificarPoltronas(name, id);" />
                    </div>
                </div>
            </div>
            <br />
           >
            <div class="row rodape">
                <div class="col-xs-12">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="imagens/puffdeficiente.png" class="img-responsive poltrona"
                            name="PoltronaLivrePreferencial" id="Poltrona01Fileira5"
                            onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/puffdeficiente.png" class="img-responsive poltrona"
                            name="PoltronaLivrePreferencial" id="Poltrona02Fileira5"
                            onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona03Fileira5" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona04Fileira5" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 col-md-offset-2">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona05Fileira5" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/pufflivre.png" class="img-responsive poltrona" name="PoltronaLivre"
                            id="Poltrona06Fileira5" onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/puffdeficiente.png" class="img-responsive poltrona"
                            name="PoltronaLivrePreferencial" id="Poltrona07Fileira5"
                            onclick="VerificarPoltronas(name, id);" />
                    </div>
                    <div class="col-md-1 ">
                        <img src="imagens/puffdeficiente.png" class="img-responsive poltrona"
                            name="PoltronaLivrePreferencial" id="Poltrona08Fileira5"
                            onclick="VerificarPoltronas(name, id);" />
                    </div>
                </div>
            </div>
            <img src="imagens/tela.png" class="img-responsive tela" name="Tela">
            <hr>

            <form action="inserirPuff.php?codigo=<?php echo $_GET['codigo'];?>" method="POST">
                <div class="row buttons">
                    <div class="col-xs-12">
                        <div class="col-md-4">
                            <button id="Liberar" class="btn btn-info">Liberar Poltronas</button>
                        </div>
                        <div class="col-md-4">
                            <button id="Calcular" onclick="CalcularValorTotal()" type="submit"
                                class="btn btn-success">Finalizar Reserva</button>
                        </div>
                        <div class="col-md-4">
                            <button id="Sair" class="btn btn-danger">Sair</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </center>

    </div>


</body>

</html>