<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Escolha Pagamento</title>
    <link rel="stylesheet" href="estilo_forpag.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg minhacor">



    <nav>
        <img src="imagens/logoverde.png" class="logo" alt="Receitas de Código">
        <ul>
            <li>
                    <a class="text-decoration-none" href="catalogo.html">Filmes</a>
            </li>
            <li>
                 <a class="text-decoration-none" href="combo.html">Combos</a>
            </li>
            <li>
                  <a class="text-decoration-none" href="pagePerfil.html"> Perfil </a>
            </li>
        </ul>
    </nav>


    <div class="row">
        <div class="col-md-6 col-xs-12 coluna1">
            <img id="logo" src="imagens//cineville.png" width="550px">
            <img src="imagens//forma.png" width="100px" >
        </div>
        <div class="col-md-6 col-xs-12 coluna2">
            <div class="bg verde">
                <div class="bg preto">
                    <div class="conteudo">
                        <a><b>Escolha sua Forma de Pagamento!</b></a>
                        <br>
                        <br>
                        <br>
                        <br>

                     
                        <button style="height: 50px; width:200px;" class="button" onclick="formadepagamento('pix');">
                                <b>Pix</b>
                        </button>
                     

                        <br>
                        <br>
                        <br>
                      
                        <button style="height: 50px; width:200px;" class="button" onclick="formadepagamento('boleto');">
                                    <b>Boleto</b>
                        </button>
        
                        <br>
                        <br>
                        <br>
                       
                        <button style="height: 50px; width:200px;" class="button" onclick="formadepagamento('credito');">
                              <b>Cartão de Crédito</b>
                        </button>
               
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="moinho">
                            <img src="imagens/caminho.png" width="60px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    function formadepagamento(forma){
        window.open("insertformapag.php?tipo="+forma,"_self");
    }
    </script>

</html>