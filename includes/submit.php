<?php
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_avaliador = $conn->real_escape_string($_POST['nome_avaliador']);
    $nota = (int)$_POST['nota'];
    $descricao = $conn->real_escape_string($_POST['descricao']);
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    error_log("Nome: $nome_avaliador, Nota: $nota, Descrição: $descricao"); // Para depuração

    $sql = "INSERT INTO feedback (nome_avaliador, nota, descricao, data, horario) VALUES ('$nome_avaliador', $nota, '$descricao', '$data', '$horario')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        exit();
    } else {
        error_log("Erro na inserção: " . $conn->error); // Para depuração
        echo "Erro: " . $sql . "<br>" . $conn->error; // Mensagem de erro
    }
}
?>
