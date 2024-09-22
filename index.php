<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runnin'</title>
    <link rel="icon" href="../trabalho-olimpiadas/images/logo_nossa.png" type="image/png">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/header.css">
    <link rel="stylesheet" href="assets/footer.css">
</head>

<body>
    <?php
    include_once('includes/header.php');
    include_once('includes/connection.php');

    // Dados das medalhas
    $medalhas = [
        ['Brasil', 0, 1, 1],
        ['Estados Unidos', 14, 11, 9],
        ['Canadá', 3, 1, 1],
        ['Quênia', 4, 2, 5],
        ['Países Baixos', 2, 1, 3],
        ['Espanha', 2, 1, 1],
        ['Noruega', 2, 1, 0],
    ];

    // Função para comparar medalhas
    function comparar_medalhas($a, $b)
    {
        return $b[1] - $a[1] ?: $b[2] - $a[2] ?: $b[3] - $a[3];
    }

    usort($medalhas, 'comparar_medalhas');
    ?>

    <div class="intro">
        <div class="text-intro">
            <h1 class="slogan"><b>O Melhor Portal de Atletismo</b></h1>
            <p class="description">
                Aqui você pode explorar 14 modalidades emocionantes do esporte, desde corridas rápidas até saltos e
                arremessos.
                Descubra a história fascinante do atletismo, tanto globalmente quanto no Brasil, e veja como o esporte
                evoluiu ao longo dos anos.
                Acompanhe os feitos históricos dos maiores atletas e conheça o impacto do atletismo em diferentes
                competições.
                Navegue e mergulhe no mundo do atletismo conosco!
            </p>
        </div>
        <img src="images/logo_olimpica.svg" alt="logo das olimpiadas" class="logo_olimpiadas">
    </div>

    <div class="modalidades">
        <h1>Modalidades</h1>
        <div class="carousel">
            <div class="carousel-wrapper">
                <?php
                $imagens = [
                    "100m-rasosum.jpg",
                    "110m-barreira.jpg",
                    "200m-rasos.jpg",
                    "400m-barreira.jpg",
                    "400m-rasos.jpg",
                    "arremesso-dardo.jpg",
                    "arremesso-disco.jpg",
                    "arremesso-peso.jpg",
                    "revezamento.jpeg",
                    "salto_altura.jpeg",
                    "salto_distancia.jpg",
                    "salto_vara.jpg"
                ];
                foreach ($imagens as $index => $imagem): ?>
                    <div class="carousel-item">
                        <img src="../trabalho-olimpiadas/images/<?php echo $imagem; ?>"
                            alt="Imagem <?php echo $index + 1; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="medalhas">
        <h1>Quadro de Medalhas</h1>
        <p>Aqui mostraremos o Quadro de Medalhas no Atletismo das Olimpíadas de Paris 2024</p>

        <table id="medalTable">
            <caption>Quadro de Medalhas - Atletismo Olimpíadas 2024</caption>
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ouro</th>
                    <th>Prata</th>
                    <th>Bronze</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="medalBody">
                <?php foreach ($medalhas as $pais): ?>
                    <tr class="<?php echo ($pais[0] == 'Brasil') ? 'highlight' : ''; ?>">
                        <td><?php echo $pais[0]; ?></td>
                        <td><?php echo $pais[1]; ?></td>
                        <td><?php echo $pais[2]; ?></td>
                        <td><?php echo $pais[3]; ?></td>
                        <td><?php echo array_sum(array_slice($pais, 1)); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="avaliacao">
        <h2>Faça sua Avaliação</h2>
        <form method="POST" action="includes/submit.php" id="avaliacaoForm">
            <label for="nome_avaliador">Seu Nome:</label>
            <input type="text" id="nome_avaliador" name="nome_avaliador" required>

            <label>Nota (0 - 5):</label>
            <input type="int" id="nota" name="nota" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <input type="submit" value="Enviar Avaliação" class="submit-btn">
        </form>
    </div>

    <div class="avaliacoes-recentes">
        <h2>Avaliações Recentes:</h2>
        <div>
            <?php
            $sql = "SELECT * FROM feedback ORDER BY id_avaliacao DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="avaliacao-item">';
                    echo '<strong>' . htmlspecialchars($row['nome_avaliador']) . '</strong> (Nota: ' . $row['nota'] . ')';
                    echo '<p>' . nl2br(htmlspecialchars($row['descricao'])) . '</p>';
                    echo '<small>' . $row['data'] . ' ' . $row['horario'] . '</small>';
                    echo '</div>';
                }
            } else {
                echo '<p>Nenhuma avaliação encontrada.</p>';
            }
            $conn->close();
            ?>
        </div>
    </div>

    <script src="includes/medalha.js"></script>
    <script src="includes/carousel.js"></script>
    <script src="includes/avalition.js"></script>

    <?php include_once('includes/footer.php'); ?>
</body>

</html>