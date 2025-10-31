<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Livraria Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Produtos</h1>
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
        <h2>Livros Disponíveis</h2>
        <?php
        $stmt = $pdo->query("SELECT * FROM produtos");
        while ($produto = $stmt->fetch()) {
            echo "<div><h3>" . $produto['nome'] . "</h3><p>" . $produto['descricao'] . "</p><p>Preço: " . $produto['preco'] . "</p></div>";
        }
        ?>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
