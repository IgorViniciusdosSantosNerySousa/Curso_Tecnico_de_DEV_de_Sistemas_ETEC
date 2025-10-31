<?php
include 'connect.php';

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['adicionar_produto'])) {
        // Lógica para adicionar produtos ao banco de dados
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $descricao, $preco]);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - Livraria Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Área Administrativa</h1>
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
        <h2>Adicionar Produto</h2>
        <form action="admin.php" method="POST">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="descricao">Descrição:</label>
            <textarea id
