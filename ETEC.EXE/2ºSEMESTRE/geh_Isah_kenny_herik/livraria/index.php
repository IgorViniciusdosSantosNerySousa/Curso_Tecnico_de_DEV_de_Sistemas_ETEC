<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo à Livraria Online</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="autores.php">Autores</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Conheça nossos produtos e autores</h2>
        <p>Temos uma vasta coleção de livros de diversos gêneros e autores renomados!</p>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
