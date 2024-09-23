<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/header.css">
</head>
<body>
    
    <div class="div_bar"></div>
    <header>
        <div class="logo">
            <img src="../trabalho-olimpiadas/images/logo_nossa.png" alt="logo do site">
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="../trabalho-olimpiadas/index.php">Home</a></li>
                <li><a href="../trabalho-olimpiadas/historia.php">História</a></li>
                <li><a href="">Modalidades</a>
                    <ul class="dropdown">
                        <li><a href="../trabalho-olimpiadas/salto.php">Salto</a></li>
                        <li><a href="../trabalho-olimpiadas/corridas.php">Corridas</a></li>
                        <li><a href="../trabalho-olimpiadas/arremesso.php">Arremesso</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- aaa -->
        <div>
            <div class="menu-toggle" id="menu-toggle">
                &#9776; <!-- Símbolo do menu hamburguer -->
            </div>
            <nav id="nav-menu" class="nav-menu">
                <ul>
                <li><a href="../trabalho-olimpiadas/index.php">Home</a></li>
                <li><a href="../trabalho-olimpiadas/historia.php">História</a></li>
                <li><a href="">Modalidades</a>
                    <ul class="dropdown">
                        <li><a href="../trabalho-olimpiadas/salto.php">Salto</a></li>
                        <li><a href="../trabalho-olimpiadas/corridas.php">Corridas</a></li>
                        <li><a href="../trabalho-olimpiadas/arremesso.php">Arremesso</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
            <a href="../trabalho-olimpiadas/index.php#avaliacao" class="btn-feedback">
                <img src="../trabalho-olimpiadas/images/codicon--feedback.svg" alt="Feedback" class="icon_feedback">
            </a>
        </div>
    </header>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
const navMenu = document.getElementById('nav-menu');

menuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});
    </script>

</body>
</html>