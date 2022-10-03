<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.html");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
</head>
<body>
    
        <main>
                <div class="header-2">
                    <div class="menu" >
                        <ul>
                            <li><a href="page1.html">Filmes</a></li>
                            <li><a href="page2.html">Combos</a></li>
                            <li><a href="page3.html">Perfil</a></li>
                            <li><a href="pageCadFilme.html">Admin</a></li>
                        </ul>
                    </div>
                </div>
        </main>

        <?php
    //verifica se o usuario conectado é administrador para mostrar a mensagem.
    if ($_SESSION['perm_admin'] == 1) {
        echo '<p> Você é Administrador! </p>';
    }
    ?>

        <input type="file" id="meu_upload"></input><br>
        <img id="imagem" src="Filme.png" width="100px" height="100px" onclick="trocarFilme();">
        <input type="file" id="meu_upload"></input><br>
        <img id="desc" onclick="trocarDescricao();">
        <input type="file" id="meu_upload"></input><br>
        <img id="class" onclick="trocarClassificacao();">
    
        <div class="Botoes">
            <div onclick="Inserir();">
                INSERIR
            </div>
            
            <div onclick="Excluir();">
                EXCLUIR
            </div>
            
            <div onclick="Alterar();">
                ALTERAR
            </div>
            
            <div onclick="Pesquisar();">
                PESQUISAR
            </div>
        </div>

</body>
</html>