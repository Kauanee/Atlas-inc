<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página Listagem de Usuários</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="estilo_listagem.css">
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
    Listagem de Usuários
    </div> 
        <div class="cinza">
    <table border="1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="txt">Código</th>
                <th class="txt">Email</th>
                <th class="txt">Senha</th>
                <th class="txt">Nome</th>
                <th class="txt">CPF</th>
                <th class="txt">Data Nasc</th>
                <th class="txt">Editar</th>
                <th class="txt">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_usuarios.php");

            if (!empty($lista_usuarios)) {
             
                foreach ($lista_usuarios as $linha) { ?>
                    <tr>
                        <td class="txt"> <?php echo $linha['cod_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['email_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['senha_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['nome_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['cpf']; ?></td>
                        <td class="txt"> <?php echo $linha['data_nascimento']; ?></td>
                        <td class="txt"> <a href="editar.php?codigo=<?php echo $linha['cod_usuario'];?> ">
                                <input class="txtbotton" type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_usuario.php?codigo=<?php echo $linha['cod_usuario'];?> ">
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