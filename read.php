<link rel="stylesheet" href="estiloRead.css">

<?php 
//puxando a conexão feita no conecta.php aqui usando o INCLUDE
include 'conecta.php';


//armazenando o select all
$sql = "SELECT * FROM usuario ";

// executando  a query "$sql"
$exec = $pdo->query($sql);

// usando o while e o fetch pra trazer esses dados até n ter mais nenhum
while($registro = $exec->fetch()){
    echo "ID:" . $registro["id"] . "<br/>" . "Nome: ". $registro["nome"] . "<br/>" . "E-mail: " . $registro["email"] . "<br/>";
    // colocando um link que leva pra update.php o "ID" pra saber quem é que vai ser atualizado
    echo "<a class='att' href=formUpdate.php?id=$registro[id]>Atualizar</a>", " - ";
    // colocando um link que leva pra delete.php o "ID" pra saber quem é que vai ser excluido
    echo "<a class='delete' href=delete.php?id=$registro[id]>Excluir</a>";
    //linha pra separar
    echo "<hr />";
}
?>