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
 /*Recebe os dados do formulário após a condição (é apenas uma condição de verificação) */
/*
     if (isset ($_POST['nome_input']) && isset ($_POST['telefone_input']) && isset ($_POST['endereco_input']) && isset ($_POST['quantidade_input']) && isset ($_POST['nomeProduto_input']))
{*/
   
    $nome = $_POST['nome_input'];
    $telefone = $_POST['telefone_input'];
    $quantidade = $_POST['quantidade_input'];
    $produto = $_POST['nomeProduto_input'];
    $endereco = $_POST['endereco_input'];

   
  

    /*INSERE os dados no BD, linguagem SQL(BD)*/

    $sql = "insert into pedidos (nomeCliente,telefone,nomeProduto,quantidade,endereco) values ('$nome','$telefone','$produto','$quantidade','$endereco')";
    $result = mysqli_query($conn, $sql);
   

    
   
    if ($result){
        echo "<script> alert( 'cadastrado com sucesso') </script>";

    }else{
        echo "erro";
        
       

    }

 ?>










<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <title> Contatos - Mimos da Sol</title>
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
        <h2> Contato</h2>
    <hr>
    <br>
    <br>
    <br>
    <div class="contato">
       <div class="subcontato">
                <img src="./Produtos/whatsapp.png" width="40px">
                 (21) 99999-9999 
                </div>
            <div class =" subcontato">
               
                 <img src="./Produtos/email.jpg" width="40px">
                  contato@mimosdasol.com
                 
              </div>
             </div>
            
        <br>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <form class="form"  method="post" >

        <label id="msg"><strong>Faça seu pedido:</strong></label>
            <br>
            <label form="nome"><strong>Nome:</strong></label>
            <input name ="nome_input" type="text"  placeholder="Digite seu nome ">
            <br>
            <br>
            <label form="telefone"><strong>Telefone:</strong></label>
            <input type="text" name ="telefone_input"placeholder="Digite seu telefone ">
            <br>
            <br>
            <label form="produto"><strong>Produto:</strong></label>
            <input type="text" name ="nomeProduto_input"placeholder="Digite o produto ">
            <br>
            <br>
            <label form="quantidade"><strong>Quantidade:</strong></label>
            <input type="text" name ="quantidade_input"placeholder="Digite a quantidade ">
            <br>
            <br>
            <label form="endereço"><strong>Endereço:</strong></label>
            <input type="text"  name ="endereco_input" placeholder="Digite seu endereço">
            <br>
            <br>


           

        <input id="button" type="submit" name ="submit"  value="Enviar" style="width:70px">

        



        </form>


        <?php

/*faz a conexão com o BD*/
$sql = "select * from pedidos";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($rows = $result->fetch_assoc()){

       
        
echo "Nome:", $rows['nomeCliente'],"<br>";
echo "Telefone:", $rows['telefone'],"<br>";
echo "Quantidade:", $rows['quantidade'],"<br>";
echo "Endereço:", $rows['endereco'],"<br>";
echo "Produto:", $rows['nomeProduto'],"<br>";
echo "<hr>";
        
}
                } else {
                    echo "Nenhum produto cadastrado";
                }
               ?>




    </main>
        <br>
        <br>
        <br>
        <br>
        <footer id= "assinatura">
    
            <h4>Formas de pagamento</h4><br>
            <img width="500px" src="./Produtos/forma de pagamento daten - logos-cartoes_.jpg"
            alt="Formas de pagamento"><br><br>
            <strong>Midian Brandão &copy Recode Pro 2020</strong>
    </footer>
    </body>
    
    </html>