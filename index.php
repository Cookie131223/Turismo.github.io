<?php
require_once 'includes/Destino.php';

$destinos = [
    new Destino("Paris", "França", "A cidade luz com seus monumentos históricos", 4200.00, "https://images.unsplash.com/photo-1431274172761-fca41d930114"),
    new Destino("Nova York", "EUA", "A cidade que nunca dorme", 3800.00, "https://images.unsplash.com/photo-1485871981521-5b1fd3805eee"),
    new Destino("Tóquio", "Japão", "Fusão de tradição e modernidade", 5200.00, "https://images.unsplash.com/photo-1540959733332-eab4deabeeaf")
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer Turismo</title>
    <link rel="stylesheet" href="Css/main.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">Destinos</a>
            <a href="login.html">Login</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Descubra o mundo conosco</h1>
            <p>As melhores experiências de viagem ao seu alcance</p>
            <a href="registrar.html" class="btn">Cadastre-se</a>
        </section>

        <section class="destinos">
            <h2>Destinos em Destaque</h2>
            <div class="grid-destinos">
                <?php foreach ($destinos as $destino): ?>
                    <?= $destino->mostrarCard() ?>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Turismo</p>
    </footer>
</body>
</html>