<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

include_once("./../backend.php");
@session_start();

// /api/pesquisa.php?
//p=""
// assunto?=""
// offset=1
// limit
if (isset($_GET['userId']) || isset($_GET['p']) ) {

    $lim = 0;
    $offset = 0;

    $assunto = "";

    if ( trim($_GET['a'], " ") === "" ) {
        $assunto = "";
    } else {
        $assunto = $_GET['a'];
    }

    if (!isset($_GET['offset']) || !isset($_GET['limit'])) {
        $lim = 10;
        $offset = 0;
    } else {
        $offset = (int)$_GET['offset'];
        $lim = (int)$_GET['limit'];
    }

    $posts = pesquisarPosts($_GET['p'], $assunto, $_GET['userId'], $lim, $offset);

    if ($posts !== false) {
        echo json_encode($posts);
    } else {
        echo json_encode($posts);
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Nao foi possivel carregar os posts.']);
    }
} else {
    echo json_encode(['error' => 'Nao foi possivel carregar os posts.']);
}
