<?php
$servername = "localhost"; // normalmente "localhost"
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "runnin"; // nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>