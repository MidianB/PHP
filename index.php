<?php
$servername = "localhost";
$database = "mimosdasol";
$password = "";
$username = "root";

$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn)
 {
     die("A conexão ao BD falhou" . mysqli_connect_error());

 }
 


 ?>




<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset=" UTF-8">
    <title> Mimos da Sol</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="script.js"></script>
   

</head>

<body>
<header >
    <!--MENU-->
<?php

include('menu.html');

?>
<!--Fim MENU-->

    </header>
    <br>
    <main>
        <h1 id="exemplo" onmouseover="mouseOver()" onmouseout="mouseOut()">
            Seja Bem Vinda(o)!!!
        </h1>
        <hr>


        <p id="chamada">
            A nossa loja, tem muitos <em> Mimos </em> para você!!!
        </p>

        <br>
        <br>
        <p id="frase">
            Confira nossas ofertas na aba <strong>Produtos</strong> e descubra os
            Mimos que preparamos pra você!
        </p>
        <br>
        <br>

        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">
        <img width="100px" src="./Produtos/coracao.png" alt="coracao">




    </main>

    <br>
    <br>
    <br>
    <br>
    <br>




    <footer id="assinatura">

        <h4>Formas de pagamento</h4><br>
        <img width="500px" src="./Produtos/forma de pagamento daten - logos-cartoes_.jpg"
            alt="Formas de pagamento"><br><br>
        <strong>Midian Brandão &copy Recode Pro 2020</strong>
    </footer>
</body>

</html>