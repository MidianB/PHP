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
    <title> Produtos - Mimos da Sol</title>
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
        <h2> Produtos</h2>
        <hr>
        <br>
        <br>
        <div class="pagproduto">

            <section class="categoria">
                <h3>
                    Categorias
                </h3>
                <ul>
                    <li onclick="exibirtodas()">Todas(12)</li>
                    <li onclick="exibircategoria('Bazul')">Boneca Azul(2)</li>
                    <li onclick="exibircategoria('Bamarela')">Boneca Amarela(4)</li>
                    <li onclick="exibircategoria('Brosa')">Boneca Rosa(3) </li>
                    <li onclick="exibircategoria('Broxa')">Boneca Roxa (2)</li>
                    <li onclick="exibircategoria('Bbege')">Boneca Bege (1)</li>

                </ul>
            </section>


            <div class="bonecast">

            <?php


                $sql = "SELECT * FROM produtos";
                $result = $conn->query($sql);

                if($result->num_rows>0){
                    while($rows = $result->fetch_assoc()){
                        

                        
                      
                      
           ?>
                  <div class="produtos"  style="display:block" id="<?php echo $rows["nome"];?>" >
                    <img src="./<?php echo $rows["imagem"]; ?> " onclick="destaque(this)">
                    <br>
                    <strong id="bonecaazul1"><?php echo $rows["descricao"];?></strong>
                    <hr>
                    <strike>R$ <?php echo $rows["preco"];?></strike>
                    <br>
                    <br>
                    R$<?php echo $rows["precofinal"];?>
                    <br>
                    <br>
                </div>

           <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado";



                }
               ?>



              

                <br>
                
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    </main>
    <footer id="assinatura">

        <h4>Formas de pagamento</h4><br>
        <img width="500px" src="./Produtos/forma de pagamento daten - logos-cartoes_.jpg"
            alt="Formas de pagamento"><br><br>
        <strong>Midian Brandão &copy Recode Pro 2020</strong>
    </footer>
</body>

</html>