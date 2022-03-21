<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Atualizar Registro</title>
<html>
    <body>
        <h1>Atualizar Registro</h1>
        <?php
            //puxando a conexão feita no conecta.php aqui usando o INCLUDE
            include 'conecta.php';
            //pegando o id que foi passado via url
            $id = $_GET["id"];
            //pegando o usuario que tem aquele id
            $sql = "SELECT * FROM usuario where id=$id";
            //mandando o PDO executar a query no "$sql"
            $exec = $pdo->query($sql);
            //armazenando os dados na variavel $registroAtualiza pra usar ali nos inputs, o fetch quebra todas as colunas das tabelas 
            // em vetores pra gente usar dps
            $registroAtualiza = $exec->fetch();
        ?>
        <script>
            //inputs com seus ids e nomes pra puxar no main.js
            // no value ta sendo colocado os valores originais pra aparecer quando a gente for atualizar
        </script>
        <input type="text" id="nome" name="nome" value="<?php echo $registroAtualiza["nome"] ?>" />
        <br/>
        <input type="email" id="email" name="email" value="<?php echo $registroAtualiza["email"] ?>" />
        <br/>
        <input type="hidden" id="id" name="id" value="<?php echo $registroAtualiza["id"] ?>" />
        <br/>
        <input type="button" id="btn_atualizar" value="Atualizar" />
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>