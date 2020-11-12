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
        <meta charset="UTF-8">
        <title> Nossas Lojas - Mimos da Sol</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="script.js"></script>
    </head>

    <body>
        
        <header class="header">
            
           
<!--MENU-->
        <?php

include('menu.html');

?>
<!--Fim MENU-->
            </header>
            <main>
            <br>
        <h2>  Nossas lojas</h2>
    <hr>
    <br>
    <br>
    <div class="locais">
        <div class="enderecos">      
                <h3>Rio de Janeiro</h3>
                <p> Vieira Souto,23</p>
                <p> 1 &ordm; andar</p>
                <p> Ipanema</p>
                <p>(21) 2222-2222</p>

              </div>

         <div class="enderecos">
                <h3> Portugal</h3>
                <p> Santa Maria da Feira</p>
                <p> Poços de Brandão</p>
                <p> Rua da estação,98</p>
                <p>(+351) 4444-4444</p>

         </div>
         <div class="enderecos">
               
                <h3>Holanda</h3>
                <p> Haia</p>
                <p> Schilderswijk</p>
                <p> Street Hoefkade .09</p>
                <p>(+31) 3333-3333</p>
         </div>
         </div>

        <br>
    <br>
    <br>
    <br>
    <br>
    </main>

    <footer id= "assinatura">
    
        <h4>Formas de pagamento</h4><br>
        <img width="500px" src="./Produtos/forma de pagamento daten - logos-cartoes_.jpg"
        alt="Formas de pagamento"><br><br>
        <strong>Midian Brandão &copy Recode Pro 2020 </strong>
</footer>
</body>

</html>