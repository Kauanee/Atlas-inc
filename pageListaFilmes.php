<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página Listagem de Filmes</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="estilo_listamovies.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body>
<nav>
        <img src="imagens/logoverde.png" class="logo" alt="Receitas de Código">
        <ul>
            <li>
                <a href="pageCadFilme.php">Cadastrar Filmes</a>
            </li>
            <li>
                <a href="pageCadCombo.php">Cadastrar Combos</a>
            </li>
            <li>
                <a href="telalista.php">Verificar Perfis</a>
            </li>
            <li>
                <a href="pageListaFilmes.php">Listar Filmes</a>
            </li>
            <li>
                <a href="telalistacombo.php">Listar Combos</a>
            </li> 
        </ul>
    </nav>
<div class="logo_meio">
        <img src="imagens/cineville.png">
    </div>

    <div class="row">
        <div class="col-md-11 col-xs-12 coluna1">

    <div class="seus_pedidos">
    Listagem de Filmes
    </div> 
        <div class="cinza">
    <table border="1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="txt">Código</th>
                <th class="txt">Filme</th>
                <th class="txt">Descrição</th>
                <th class="txt">Categoria</th>
                <th class="txt">Classificação</th>
                <th class="txt">Cartaz</th>
                <th class="txt">Editar</th>
                <th class="txt">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_filmes.php");

         
            if (!empty($lista_movies)) {
              
                foreach ($lista_movies as $linha) { ?>
                    <tr>
                        <td class="txt"> <?php echo $linha['cod_movies']; ?></td>
                        <td class="txt"> <?php echo $linha['nome_movies']; ?></td>
                        <td class="txt"> <?php echo $linha['descricao_movies']; ?></td>
                        <td class="txt"> <?php echo $linha['categoria_movies']; ?></td>
                        <td class="txt"> <?php echo $linha['classificacao_movies']; ?></td>
                        <td> <?php echo '<img height="80px" src="' .$linha['cartaz_movies']. '">'; ?> </td>
                        <td class="txt"> <a href="editar_filme.php?codigo=<?php echo $linha['cod_movies'];?> ">
                                <input class="txtbotton" type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_filme.php?codigo=<?php echo $linha['cod_movies'];?> ">
                                <input class="txtbotton" type="button" value="Excluir">
                            </a>
                        </td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
        </div>
        </div>
        </div>
</body>
</html>