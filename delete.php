<?php 
    //puxando a conexão feita no conecta.php aqui usando o INCLUDE
    include 'conecta.php';

    //pegando id lá do read.php via url
    $id = $_GET["id"];

    // fazendo delete no banco de dados nesse id na variavel sql
    $sql = "DELETE FROM usuario WHERE id=\"$id\" ";
    // PEDINDO PRO PDO EXECUTAR UMA CONSULTA NO "$SQL" DEFINIDO NA LINHA DE CIMA
    $pdo->query($sql);

    //ASSIM QUE CLICAR EM EXCLUIR ELE VOLTA PRA READ.PHP
    header("location: read.php");
?>