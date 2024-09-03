<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM user
WHERE id = '$id';";

$result = $connection -> query($sql);
$connection -> close();
// header para voltar para a página
header("location: read.php");
exit();
?>
