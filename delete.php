<?php 
    //puxando a conexão feita no conecta.php aqui usando o INCLUDE
    include 'conecta.php';

    //pegando id lá do read.php via url
    $id = $_GET["id"];

    // fazendo delete no banco de dados nesse id na variavel sql
    $sql = "DELETE FROM usuario WHERE id=\"$id\" ";
    // pedindo pro pdo fazer essa query do SQL
    $pdo->query($sql);

    //ASSIM QUE LICAR EM EXCLUIR ELE VOLTA PRA READ.PHP
    header("location: read.php");
?>