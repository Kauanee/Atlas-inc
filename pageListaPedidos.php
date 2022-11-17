<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
?>
<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página de Pedidos</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="estilo_listarpedidos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


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
<div class="logo_meio">
        <img src="imagens/cineville.png">
    </div>

    <div class="row">
        <div class="col-md-11 col-xs-12 coluna1">

    <div class="seus_pedidos">
    Meus Pedidos
    </div> 
        <div class="cinza">
    <table border="1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="txt">Código</th>
                <th class="txt">Ingresso</th>
                <th class="txt">Filme</th>
                <th class="txt">Valor</th>
                <th class="txt">Usuário</th>
                <th class="txt">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_pedidos.php");

           
            if (!empty($lista_pedidos)) {
             
                foreach ($lista_pedidos as $linha) { ?>
                    <tr>
                        <td class="txt"> <?php echo $linha['cod_ingresso']; ?></td>
                        <td class="txt"> <?php echo $linha['puff_ingresso']; ?></td>
                        <td class="txt"> <?php echo $linha['filme_sessao']; ?></td>
                        <td class="txt"> <?php echo $linha['total_ingresso']; ?></td>
                        <td class="txt"> <?php echo $linha['fk_usuario']; ?></td>
                        <td> <a href="excluir_ingresso.php?codigo=<?php echo $linha['cod_ingresso'];?> ">
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