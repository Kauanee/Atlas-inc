<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página Listagem de Filmes</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="estilo_listacombos.css">
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
                <a href="telalista.php">Verificar Perfis</a>
            </li>
            <li>
                <a href="pageListaFilmes.php">Listar Filmes</a>
            </li>
            <li>
                <a href="pageListaCombos.php">Listar Combos</a>
            </li> 
        </ul>
    </nav>
<div class="logo_meio">
        <img src="imagens/cineville.png">
    </div>

    <div class="row">
        <div class="col-md-11 col-xs-12 coluna1">

    <div class="seus_pedidos">
    Listagem de Combos
    </div> 
        <div class="cinza">
    <table border="1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="txt">Código</th>
                <th class="txt">Tamanho</th>
                <th class="txt">Preço</th>
                <th class="txt">Imagem</th>
                <th class="txt">Editar</th>
                <th class="txt">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_combos.php");

         
            if (!empty($lista_combos)) {
              
                foreach ($lista_combos as $linha) { ?>
                    <tr>
                        <td class="txt"> <?php echo $linha['cod_combo']; ?></td>
                        <td class="txt"> <?php echo $linha['tamanho_combo']; ?></td>
                        <td class="txt"> <?php echo $linha['preco_combo']; ?></td>
                        <td> <?php echo '<img height="80px" src="' .$linha['imagem_combo']. '">'; ?> </td>
                        <td class="txt"> <a href="editar_combo.php?codigo=<?php echo $linha['cod_combo'];?> ">
                                <input class="txtbotton" type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_combo.php?codigo=<?php echo $linha['cod_combo'];?> ">
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