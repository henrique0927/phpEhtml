<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "crud_henrique";

$connection = new mysqli($hostname, $username, $password, $database,);

if($connection->connect_error){
    die("Conexão Falhou: " . $connection -> connect_error);
}

?>