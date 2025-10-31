<?php
include_once("./../backend.php");
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
@session_start();

if (isset($_GET['userId']) || $_GET['postId']) {

    $lim = 0;
    $offset = 0;

    if (!isset($_GET['offset']) || !isset($_GET['limit'])) {
        $lim = 10;
        $offset = 0;
    } else {
        $offset = (int)$_GET['offset'];
        $lim = (int)$_GET['limit'];
    }

    $posts = carregarCommentariosPost($_GET['userId'], $_GET['postId'], $lim, $offset);

    if ($posts !== false) {
        echo json_encode($posts);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Nao foi possivel carregar os comentários.']);
    }
} else {
    echo json_encode(['error' => 'Nao foi possivel carregar os comentários.']);
}