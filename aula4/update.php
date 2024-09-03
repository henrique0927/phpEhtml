<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Pega a variavel pelo name do input
    $nomeAntigo = $_POST['nomeAntigo'];
    $novoNome = $_POST['nomeNovo'];

    // Executar a query no SQL
    $sql = "UPDATE user SET name = '$novoNome' WHERE name = '$nomeAntigo'";

    if ($connection->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro ao atualizar o registro: " . $connection->error;
    }
    $connection->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <form action="update.php" method="post">
        <p>UPDATE</p>
        <label for="nomeAntigo">Nome Antigo:</label>
        <input type="text" name="nomeAntigo" id="nomeAntigo">
        <label for="nomeNovo">Nome Novo:</label>
        <input type="text" name="nomeNovo" id="nomeNovo">
        <button type="submit">Atualizar</button>
        <a href="./read.php">Visualizar Dados</a>
    </form>
</body>
</html>