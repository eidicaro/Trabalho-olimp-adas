<?php
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_avaliador = $conn->real_escape_string($_POST['nome_avaliador']);
    $nota = (int)$_POST['nota']; // Garante que seja um inteiro
    $descricao = $conn->real_escape_string($_POST['descricao']);
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $sql = "INSERT INTO feedback (nome_avaliador, nota, descricao, data, horario) VALUES ('$nome_avaliador', $nota, '$descricao', '$data', '$horario')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>
