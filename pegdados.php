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
  
</head>

<body>
<header >
    
<?php

$nome = $_POST['nomeCliente'];
$telefone= $_POST['telefone'];
$produto = $_POST['nomeProduto'];
$quantidade = $_POST['quantidade'];
$endereço = $_POST['endereco'];

var_dump($nome);
var_dump($telefone);
var_dump($produto);
var_dump($quantidade);
var_dump($endereço);

$sql = "insert int pedidos 
values ('$nome', '$telefone', '$produto', '$quantidade', '$endereco');";

$resposta = $conexao->query($sql);

if ($resposta){

    echo "inserindo com sucesso";
    var_dump($resposta);
}
else{
    echo "<h1>erro</h1>";
    var_dump($resposta);
}
?>