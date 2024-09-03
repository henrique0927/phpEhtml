<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (name, email) VALUE ('$name', '$email');";

    if ($connection->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $connection->error;
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create</title>
</head>

<body>
    <form action="create.php" method="POST">
        <p>CREATE</p>
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <label for="emial">Email:</label>
        <input type="text" name="email" id="email" required>
        <button type="submit">Adicionar</button>
        <a href="./read.php">Visualizar Dados</a>
    </form>
</body>
</html>