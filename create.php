<?php 
    //puxando a conexão feita no conecta.php aqui usando o INCLUDE
    include 'conecta.php';

    //armazenando o valor enviado pelo ajax 
    //sem o $_POST  ele enviara oq colocar ai e n oq foi enviado pelo AJAX
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    //definindo na variavel SSQL o insert na database com os dados a serem cadastrados 
    $sql = "INSERT INTO usuario (`nome`,`email`)value(\"$nome\",\"$email\")";

    //CHAMANDO O PDO MANDANDO ELE EXCUTAR A QUERY "$SQL"
    $pdo->query($sql);

?>