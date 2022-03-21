<?php 
//puxando a conexão feita no conecta.php aqui usando o INCLUDE
include 'conecta.php';

//dados vindo do main.js
$nome = $_POST["nome"];
$email = $_POST["email"];
$id = $_POST["id"];

//atualiza a tabela usuario
$sql = "UPDATE usuario SET nome=\"$nome\", email=\"$email\" WHERE id=\"$id\" ";

//mandando pdo fazer a query com o $sql que foi definido na linha de cima
$pdo->query($sql);

?>