<?php
@session_start();
require_once "backend.php";
if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = "Login necessário para criar um post.";
    header('Location: login.php');
    exit; 
}
$loggedInUsername = $_SESSION['user'];
$userId = getIdByUsername($loggedInUsername);
if ($userId === null) {
    session_unset();
    session_destroy();
    $_SESSION['msg'] = "Erro ao verificar usuário. Faça login novamente.";
    header('Location: login.php');
    exit;
}
$errors = [];
$post_id = $_SESSION['post_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = trim($_POST['comment'], " ") ?? '';
    if (empty($comment)) {
        $errors[] = "O comentário é obrigatório.";
    }
    if (empty($errors)) {
        $success = adicionarComentario($userId, $post_id, $comment, null);
    }
    header('Location: post.php?id='.$post_id);
} else {
    // Se o acesso não for via POST, redireciona para o formulário
    header('Location: post.php?id='.$post_id);
    exit;
}

?>