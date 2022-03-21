<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulário</title>
</head>
    <body>
        <form method="post">
            <input type="text" id="nome" name="nome" placeholder="Digite o nome" />
            <br/>
            <input type="email" id="email" name="email" placeholder="Digite o email" />
            <br/>
            <input type="button" id="btn_gravar" value="Salvar" />
        </form>
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
