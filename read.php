<?php 
    //puxando a conexão feita no conecta.php aqui usando o INCLUDE
    include 'conecta.php';

    //armazenando o select all
    $sql = "SELECT * FROM usuario ";

    // pedindo pro pdo executa uma consulta no sql definido na linha de cima
    $exec = $pdo->query($sql);

    $json =json_encode($exec->fetchAll(PDO::FETCH_ASSOC));

    echo $json;    
?>