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
    ?>

    <div class="intro">
        <div class="text-intro">
        <h1 class="slogan"><b>O Melhor Portal de Atletismo</b></h1>
        <br>
        <p class="description">
           Aqui você pode explorar 14 modalidades emocionantes do esporte, desde corridas rápidas até saltos e arremessos. Descubra a história fascinante do atletismo, tanto globalmente quanto no Brasil, e veja como o esporte evoluiu ao longo dos anos. Acompanhe os feitos históricos dos maiores atletas e conheça o impacto do atletismo em diferentes competições. Navegue e mergulhe no mundo do atletismo conosco! 
        </p>
        </div>
        <img src="images/logo_olimpica.svg" alt="logo das olimpiadas" class="logo_olimpiadas">
    </div>

    
    <div class="modalidades">
    <h1>Modalidades</h1>
    <div class="carousel">
        <div class="carousel-wrapper">
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/100m-rasosum.jpg" alt="Imagem 1"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/110m-barreira.jpg" alt="Imagem 2"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/200m-rasos.jpg" alt="Imagem 3"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/400m-barreira.jpg" alt="Imagem 4"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/400m-rasos.jpg" alt="Imagem 5"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/arremesso-dardo.jpg" alt="Imagem 6"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/arremesso-disco.jpg" alt="Imagem 7"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/arremesso-peso.jpg" alt="Imagem 8"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/revezamento.jpg" alt="Imagem 9"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/salto_altura.jpeg" alt="Imagem 10"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/salta_distancia.jpg" alt="Imagem 11"></div>
            <div class="carousel-item"><img src="../trabalho-olimpiadas/images/salto_vara.jpeg" alt="Imagem 12"></div>
        </div>
    </div>
    
    <script src="includes/carousel.js"></script>
</div>

<?php
$medalhas = [
    ['Brasil', 0, 1, 1],
    ['Estados Unidos', 14, 11, 9],
    ['Canadá', 3, 1, 1],
    ['Quênia', 4, 2, 5],
    ['Países Baixos', 2, 1, 3],
    ['Espanha', 2, 1, 1],
    ['Noruega', 2, 1, 0],
];

function comparar_medalhas($a, $b) {
    if ($a[1] != $b[1]) {
        return $b[1] - $a[1]; // Ordem decrescente por ouro
    }
    
    if ($a[2] != $b[2]) {
        return $b[2] - $a[2]; // Ordem decrescente por prata
    }
   
    return $b[3] - $a[3]; // Ordem decrescente por bronze
}

usort($medalhas, 'comparar_medalhas');
?>

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
        <?php foreach ($medalhas as $pais) : ?>
            <tr class="<?php echo ($pais[0] == 'Brasil') ? 'highlight' : ''; ?>">
                <td><?php echo $pais[0]; ?></td>
                <td><?php echo $pais[1]; ?></td>
                <td><?php echo $pais[2]; ?></td>
                <td><?php echo $pais[3]; ?></td>
                <td><?php echo $pais[1] + $pais[2] + $pais[3]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    // Aguarda o carregamento completo do DOM
    document.addEventListener("DOMContentLoaded", function() {
        // Obtém a tabela e o corpo da tabela pelo ID
        const table = document.getElementById('medalTable');
        const tbody = document.getElementById('medalBody');

        // Cria um novo Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            // Verifica cada entrada do observer
            entries.forEach(entry => {
                // Se a tabela está visível na viewport
                if (entry.isIntersecting) {
                    // Ajusta a altura do <tbody> para que ele se expanda
                    tbody.style.height = tbody.scrollHeight + 'px';
                    
                    // Adiciona a classe 'open' para tornar a tabela e o tbody visíveis
                    table.classList.add('open');
                    tbody.classList.add('open');
                    
                    // Para de observar a tabela após a animação
                    observer.unobserve(entry.target);
                }
            });
        });

        // Começa a observar a tabela para detectar quando entra na viewport
        observer.observe(table);
    });
</script>
    </div>
    <?php
        include_once('includes/footer.php')
    ?>
</body>
</html>