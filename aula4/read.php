<?php

include 'db.php';

$sql = "SELECT * FROM user";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div style='text-align: center;'>";
    echo "<table border='1' style='margin: 0 auto;'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Criação</th>
                <th>Ações</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['created_at']}</td>
                <td>
                    <a href='update.php?id={$row['id']}'>Editar</a>
                    <a href='delete.php?id={$row['id']}'>Excluir</a>
                </td>
              </tr>";
    }
    
    echo "</table>";
    echo "</div>";
} else {
    echo "<div style='text-align: center;'>Nenhum registro encontrado</div>";
}

$connection->close();
?>

<br>
<div style="text-align: center;">
    <a href="create.php">Inserir novo registro</a>
</div>
